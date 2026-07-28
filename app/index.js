import Generator from 'yeoman-generator'
import chalk from 'chalk'
import mysql from 'mysql2/promise'
import fs from 'fs-extra'
import argon2 from 'argon2'
import * as tar from 'tar'

import crypto from 'node:crypto'
import path from 'node:path'
import os from 'node:os'
import process from 'node:process'
import { spawn } from 'node:child_process'
import { Readable } from 'node:stream'
import { pipeline } from 'node:stream/promises'

export default class extends Generator {
  constructor (args, options) {
    super(args, options)

    this.props = {}
  }

  async prompting () {
    const orange = chalk.hex('#ff8700').bold
    const petrol = chalk.hex('#006792')

    this.log(orange(`
    ██████╗  █████╗ ███████╗ ██████╗ ██████╗
    ██╔══██╗██╔══██╗╚══███╔╝██╔═══██╗██╔══██╗
    ██████╔╝███████║  ███╔╝ ██║   ██║██████╔╝
    ██╔══██╗██╔══██║ ███╔╝  ██║   ██║██╔══██╗
    ██║  ██║██║  ██║███████╗╚██████╔╝██║  ██║
    ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝  ╚═╝
    `))

    this.log(petrol(`
      ________  ______  ____ _____                                     __            
     /_  __/\\ \\/ / __ \\/ __ \\__  /   ____ ____  ____  ___  _________ _/ /_____  _____
      / /    \\  / /_/ / / / //_ <   / __ \`/ _ \\/ __ \\/ _ \\/ ___/ __ \`/ __/ __ \\/ ___/
     / /     / / ____/ /_/ /__/ /  / /_/ /  __/ / / /  __/ /  / /_/ / /_/ /_/ / /    
    /_/     /_/_/    \\____/____/   \\__, /\\___/_/ /_/\\___/_/   \\__,_/\\__/\\____/_/     
                                  /____/                                             
    `))

    const releases = await this._getTypo3Releases()

    const prompts = [{
      type: 'input',
      name: 'ProjectName',
      message: 'Choose your project name',
      default: 'Project'
    }, {
      type: 'input',
      name: 'SrcPath',
      message: 'What is the path to the TYPO3 source files?',
      default: '../typo3_src',
      store: true
    }, {
      type: 'select',
      name: 'Version',
      message: 'Choose your TYPO3 version',
      choices: releases,
      store: true
    }, {
      type: 'input',
      name: 'DbUsername',
      message: 'Database username?',
      default: 'root',
      store: true
    }, {
      type: 'input',
      name: 'DbPassword',
      message: 'Database password?',
      default: 'root',
      store: true
    }, {
      type: 'input',
      name: 'DbHostname',
      message: 'Database hostname?',
      default: 'localhost',
      store: true
    }, {
      type: 'input',
      name: 'DbPort',
      message: 'Database port?',
      default: 3306,
      store: true,
      validate: value => {
        const port = Number(value)

        if (Number.isInteger(port) && port >= 1 && port <= 65535) {
          return true
        }

        return 'Enter a valid TCP port.'
      }
    }, {
      type: 'select',
      name: 'DbSocket',
      message: 'Database socket path?',
      choices: [{
        name: 'None',
        value: ''
      }, {
        name: 'MAMP',
        value: '/Applications/MAMP/tmp/mysql/mysql.sock'
      }],
      store: true
    }, {
      type: 'input',
      name: 'DbNew',
      message: 'New database name? A new database, username and password will be created.',
      default: 'newproject',
      validate: value => {
        if (/^[a-zA-Z0-9_]+$/.test(value)) {
          return true
        }

        return 'Use only letters, numbers and underscores.'
      }
    }, {
      type: 'input',
      name: 'User',
      message: 'TYPO3 admin username?',
      default: 'admin',
      store: true
    }, {
      type: 'input',
      name: 'Pass',
      message: 'TYPO3 install tool & admin user password?',
      default: 'joh316'
    }, {
      type: 'input',
      name: 'AdminEmail',
      message: 'TYPO3 admin email?',
      default: 'john@doe.com',
      store: true
    }, {
      type: 'select',
      name: 'Transport',
      message: 'How to send emails?',
      choices: [{
        name: 'smtp',
        value: 'smtp'
      }, {
        name: 'sendmail',
        value: 'sendmail'
      }],
      store: true
    }, {
      when: answers => answers.Transport === 'smtp',
      type: 'input',
      name: 'SmtpServer',
      message: 'SMTP server?',
      default: 'localhost:25',
      store: true
    }, {
      when: answers => answers.Transport === 'smtp',
      type: 'select',
      name: 'Encrypt',
      message: 'SMTP encrypt?',
      default: true,
      choices: [{
        name: 'true (TYPO3 >= 10 - if port 465 or other)',
        value: true
      }, {
        name: 'false (TYPO3 >= 10 - if port 587)',
        value: false
      }, {
        name: 'ssl (TYPO3 9.5.x)',
        value: 'ssl'
      }, {
        name: 'tls (TYPO3 9.5.x)',
        value: 'tls'
      }],
      store: true
    }, {
      when: answers => answers.Transport === 'smtp',
      type: 'input',
      name: 'SmtpUser',
      message: 'SMTP username?',
      default: '',
      store: true
    }, {
      when: answers => answers.Transport === 'smtp',
      type: 'input',
      name: 'SmtpPass',
      message: 'SMTP password?',
      default: '',
      store: true
    }, {
      when: answers => answers.Transport === 'smtp',
      type: 'input',
      name: 'SmtpEmail',
      message: 'Sender email?',
      default: '',
      store: true
    }, {
      when: answers => answers.Transport === 'smtp',
      type: 'input',
      name: 'SmtpName',
      message: 'Sender name?',
      default: '',
      store: true
    }, {
      type: 'select',
      name: 'English',
      message: 'Activate English language in TYPO3?',
      choices: [{
        name: 'No',
        value: false
      }, {
        name: 'Yes',
        value: true
      }],
      store: true
    }, {
      type: 'select',
      name: 'EnglishDefault',
      message: 'Set English as default language?',
      choices: [{
        name: 'No',
        value: false
      }, {
        name: 'Yes',
        value: true
      }],
      store: true
    }, {
      type: 'input',
      name: 'Author',
      message: 'Author name',
      default: 'John Doe',
      store: true
    }, {
      type: 'input',
      name: 'Email',
      message: 'Author eMail',
      default: 'john@doe.com',
      store: true
    }, {
      type: 'input',
      name: 'Website',
      message: 'Author website',
      default: 'www.johndoe.com',
      store: true
    }, {
      type: 'select',
      name: 'Copyright',
      message: 'Add copyright?',
      choices: [{
        name: 'No',
        value: false
      }, {
        name: 'Gandayo',
        value: true
      }],
      store: true
    }, {
      type: 'select',
      name: 'Htaccess',
      message: 'Add .htaccess-dev file for development?',
      choices: [{
        name: 'Yes',
        value: true
      }, {
        name: 'No',
        value: false
      }],
      store: true
    }, {
      type: 'select',
      name: 'FontAwesome',
      message: 'FontAwesome Pro?',
      choices: [{
        name: 'Yes',
        value: true
      }, {
        name: 'No',
        value: false
      }],
      store: true
    }, {
      type: 'select',
      name: 'Search',
      message: 'Activate search?',
      choices: [{
        name: 'No',
        value: false
      }, {
        name: 'Yes',
        value: true
      }]
    }, {
      type: 'select',
      name: 'SSL',
      message: 'Activate SSL/https for dev?',
      choices: [{
        name: 'Yes',
        value: true
      }, {
        name: 'No',
        value: false
      }],
      store: true
    }, {
      type: 'select',
      name: 'Cols',
      message: 'Bootstrap columns?',
      choices: [{
        name: '24',
        value: 24
      }, {
        name: '12',
        value: 12
      }],
      store: true
    }]

    this.props = await this.prompt(prompts)
  }

  async writing () {
    const templateVersion = this._getTemplateVersion()

    const sourcePath = path.resolve(
      this.destinationRoot(),
      this.props.SrcPath,
      `typo3_src-${this.props.Version}`
    )

    await this._ensureTypo3Source(sourcePath)
    await this._createSymlinks(sourcePath)

    await fs.copy(
      this.templatePath(templateVersion),
      this.destinationPath(),
      {
        overwrite: true,
        errorOnExist: false
      }
    )

    await this._writeSystemSettings()
    await this._writeLocalSettings()
    await this._chmodWritableDirectories()
    await this._createDatabaseAndImportSql()
    await this._setRazorConfig()
  }

  async install () {
    const branch = this._getRazorBranch()
    const packageName = `ssh://git@github.com/rafu1987/razor.git#${branch}`

    await this._runCommand('yarn', [
      'add',
      '--dev',
      '--no-lockfile',
      '--modules-folder',
      'typo3conf/ext/',
      packageName
    ])
  }

  async end () {
    await fs.remove(
      this.destinationPath('package.json')
    )

    await fs.remove(
      this.destinationPath('typo3conf/ext/.yarn-integrity')
    )

    if (this._usesModernTypo3Structure()) {
      const extensionsSource = this.destinationPath(
        'typo3conf/ext/razor/Initialisation/Extensions'
      )

      if (await fs.pathExists(extensionsSource)) {
        await fs.copy(
          extensionsSource,
          this.destinationPath('typo3conf/ext'),
          {
            overwrite: true,
            errorOnExist: false
          }
        )
      }
    }
  }

  async _getTypo3Releases () {
    const url = 'https://get.typo3.org/json'

    let response

    try {
      response = await fetch(url, {
        headers: {
          accept: 'application/json',
          'user-agent': 'generator-razor'
        },
        redirect: 'follow',
        signal: AbortSignal.timeout(30000)
      })
    } catch (error) {
      const cause = error.cause
        ? ` ${error.cause.code ?? ''}: ${error.cause.message ?? error.cause}`
        : ''

      throw new Error(
        `Could not connect to ${url}.${cause}`,
        {
          cause: error
        }
      )
    }

    if (!response.ok) {
      throw new Error(
        'Could not retrieve TYPO3 releases: ' +
        `${response.status} ${response.statusText}`
      )
    }

    let data

    try {
      data = await response.json()
    } catch (error) {
      throw new Error(
        `The TYPO3 release API returned invalid JSON from ${response.url}.`,
        {
          cause: error
        }
      )
    }

    const releases = [
      ...Object.keys(data['14']?.releases ?? {}),
      ...Object.keys(data['13']?.releases ?? {}),
      ...Object.keys(data['12']?.releases ?? {})
    ]

    const supportedVersions = [...new Set(releases)]
      .filter(version => {
        return version.startsWith('12.4.') ||
          version.startsWith('13.4.') ||
          version.startsWith('14.3.')
      })
      .sort((a, b) => {
        return b.localeCompare(a, undefined, {
          numeric: true,
          sensitivity: 'base'
        })
      })

    if (supportedVersions.length === 0) {
      throw new Error(
        'The TYPO3 release API returned no supported releases.'
      )
    }

    return supportedVersions.map(version => ({
      name: version,
      value: version
    }))
  }

  _getTemplateVersion () {
    if (this.props.Version.startsWith('14.3.')) {
      return '143'
    }

    if (this.props.Version.startsWith('13.4.')) {
      return '134'
    }

    if (this.props.Version.startsWith('12.4.')) {
      return '124'
    }

    throw new Error(
      `Unsupported TYPO3 version: ${this.props.Version}`
    )
  }

  _getRazorBranch () {
    if (this.props.Version.startsWith('14.3.')) {
      return 'razor14-dev'
    }

    if (this.props.Version.startsWith('13.4.')) {
      return 'razor13-dev'
    }

    if (this.props.Version.startsWith('12.4.')) {
      return 'razor12-dev'
    }

    throw new Error(
      `No Razor branch configured for TYPO3 ${this.props.Version}`
    )
  }

  _usesModernTypo3Structure () {
    return this.props.Version.startsWith('12.4.') ||
      this.props.Version.startsWith('13.4.') ||
      this.props.Version.startsWith('14.3.')
  }

  async _ensureTypo3Source (sourcePath) {
    if (await fs.pathExists(sourcePath)) {
      this.log(
        `Using existing TYPO3 source: ${sourcePath}`
      )

      return
    }

    const sourceDirectory = path.dirname(sourcePath)

    await fs.ensureDir(sourceDirectory)

    this.log(
      `Downloading TYPO3 ${this.props.Version} to ` +
      `${sourceDirectory}...`
    )

    const temporaryDirectory = await fs.mkdtemp(
      path.join(os.tmpdir(), 'generator-razor-')
    )

    const archivePath = path.join(
      temporaryDirectory,
      `typo3_src-${this.props.Version}.tar.gz`
    )

    try {
      await this._downloadFile(
        `https://get.typo3.org/${this.props.Version}`,
        archivePath
      )

      await tar.x({
        file: archivePath,
        cwd: sourceDirectory,
        strict: true
      })
    } finally {
      await fs.remove(temporaryDirectory)
    }

    if (!await fs.pathExists(sourcePath)) {
      throw new Error(
        'TYPO3 archive was extracted, but the expected directory ' +
        `was not found: ${sourcePath}`
      )
    }
  }

  async _downloadFile (url, destination) {
    let response

    try {
      response = await fetch(url, {
        headers: {
          accept: 'application/gzip, application/octet-stream',
          'user-agent': 'generator-razor'
        },
        redirect: 'follow',
        signal: AbortSignal.timeout(120000)
      })
    } catch (error) {
      const cause = error.cause
        ? ` ${error.cause.code ?? ''}: ${error.cause.message ?? error.cause}`
        : ''

      throw new Error(
        `Could not connect to ${url}.${cause}`,
        {
          cause: error
        }
      )
    }

    if (!response.ok) {
      throw new Error(
        `Could not download ${url}: ` +
        `${response.status} ${response.statusText}`
      )
    }

    if (!response.body) {
      throw new Error(
        `The download response for ${url} had no body.`
      )
    }

    await fs.ensureDir(
      path.dirname(destination)
    )

    const fileStream = fs.createWriteStream(
      destination
    )

    const responseStream = Readable.fromWeb(
      response.body
    )

    await pipeline(
      responseStream,
      fileStream
    )
  }

  async _createSymlinks (sourcePath) {
    const links = [{
      source: sourcePath,
      destination: this.destinationPath('typo3_src'),
      type: 'dir'
    }, {
      source: path.join(sourcePath, 'typo3'),
      destination: this.destinationPath('typo3'),
      type: 'dir'
    }, {
      source: path.join(sourcePath, 'index.php'),
      destination: this.destinationPath('index.php'),
      type: 'file'
    }]

    for (const link of links) {
      if (!await fs.pathExists(link.source)) {
        throw new Error(
          'Cannot create symlink because the source does not exist: ' +
          link.source
        )
      }

      await fs.remove(link.destination)

      await fs.ensureSymlink(
        link.source,
        link.destination,
        link.type
      )
    }
  }

  async _writeSystemSettings () {
    const settingsPath = this.destinationPath(
      'typo3conf/system/settings.php'
    )

    let content = await fs.readFile(
      settingsPath,
      'utf8'
    )

    content = this._substituteMarker(
      content,
      '###DBNEW###',
      this.props.DbNew.toLowerCase()
    )

    content = this._substituteMarker(
      content,
      '###HOST###',
      this.props.DbHostname
    )

    content = this._substituteMarker(
      content,
      '###PROJECTNAME###',
      this.props.ProjectName
    )

    const encryptionKey = crypto
      .randomBytes(48)
      .toString('hex')

    content = this._substituteMarker(
      content,
      '###ENCRYPTION_KEY###',
      encryptionKey
    )

    const passwordHash = await argon2.hash(
      this.props.Pass
    )

    content = this._substituteMarker(
      content,
      '###PASS###',
      passwordHash
    )

    await fs.writeFile(
      settingsPath,
      content,
      'utf8'
    )
  }

  async _writeLocalSettings () {
    const localSettingsPath = this.destinationPath(
      'typo3conf/system/local.php'
    )

    if (this.props.Transport !== 'smtp') {
      await fs.remove(localSettingsPath)
      return
    }

    let content = await fs.readFile(
      localSettingsPath,
      'utf8'
    )

    let encryptionMarker = '###SMTP_ENCRYPT###'

    if (
      this.props.Encrypt === true ||
      this.props.Encrypt === false
    ) {
      encryptionMarker = "'###SMTP_ENCRYPT###'"
    }

    const replacements = [
      ['###TRANSPORT###', this.props.Transport],
      [encryptionMarker, this.props.Encrypt],
      ['###SMTP_PASS###', this.props.SmtpPass ?? ''],
      ['###SMTP_SERVER###', this.props.SmtpServer ?? ''],
      ['###SMTP_USER###', this.props.SmtpUser ?? ''],
      ['###SMTP_EMAIL###', this.props.SmtpEmail ?? ''],
      ['###SMTP_NAME###', this.props.SmtpName ?? '']
    ]

    for (const [marker, value] of replacements) {
      content = this._substituteMarker(
        content,
        marker,
        value
      )
    }

    await fs.writeFile(
      localSettingsPath,
      content,
      'utf8'
    )
  }

  async _chmodWritableDirectories () {
    const writableDirectories = [
      'fileadmin',
      'typo3temp',
      'typo3conf'
    ]

    for (const directory of writableDirectories) {
      await this._chmodDirectoriesRecursive(
        this.destinationPath(directory)
      )
    }
  }

  async _chmodDirectoriesRecursive (directory) {
    if (!await fs.pathExists(directory)) {
      return
    }

    await fs.chmod(
      directory,
      0o2775
    )

    const entries = await fs.readdir(
      directory,
      {
        withFileTypes: true
      }
    )

    for (const entry of entries) {
      if (entry.isDirectory()) {
        await this._chmodDirectoriesRecursive(
          path.join(directory, entry.name)
        )
      }
    }
  }

  async _createDatabaseAndImportSql () {
    const databaseName = this.props.DbNew.toLowerCase()

    const connectionOptions = {
      host: this.props.DbHostname,
      user: this.props.DbUsername,
      password: this.props.DbPassword,
      multipleStatements: true
    }

    if (this.props.DbPort) {
      connectionOptions.port = Number(this.props.DbPort)
    }

    if (this.props.DbSocket) {
      connectionOptions.socketPath = this.props.DbSocket
    }

    const connection = await mysql.createConnection(
      connectionOptions
    )

    try {
      const escapedDatabase = connection.escapeId(
        databaseName
      )

      const escapedUsername = connection.escape(
        databaseName
      )

      const escapedPassword = connection.escape(
        databaseName
      )

      await connection.query(
        `CREATE DATABASE ${escapedDatabase} ` +
        'CHARACTER SET utf8mb4 ' +
        'COLLATE utf8mb4_unicode_ci'
      )

      await connection.query(
        `CREATE USER ${escapedUsername}@'%' ` +
        `IDENTIFIED BY ${escapedPassword}`
      )

      await connection.query(
        `GRANT ALL PRIVILEGES ON ${escapedDatabase}.* ` +
        `TO ${escapedUsername}@'%'`
      )

      await connection.query(
        `USE ${escapedDatabase}`
      )

      const sqlPath = this.destinationPath(
        'db.sql'
      )

      let sql = await fs.readFile(
        sqlPath,
        'utf8'
      )

      sql = this._substituteMarker(
        sql,
        '###ADMIN###',
        this.props.User
      )

      const passwordHash = await argon2.hash(
        this.props.Pass
      )

      sql = this._substituteMarker(
        sql,
        '###PASS###',
        passwordHash
      )

      await connection.query(sql)

      await fs.remove(sqlPath)
    } finally {
      await connection.end()
    }
  }

  _substituteMarker (content, marker, replacement) {
    return String(content)
      .split(marker)
      .join(String(replacement))
  }

  async _setRazorConfig () {
    const config = {
      siteName: this.props.ProjectName,
      user: this.props.User,
      adminEmail: this.props.AdminEmail,
      english: this.props.English,
      englishDefault: this.props.EnglishDefault,
      author: this.props.Author,
      email: this.props.Email,
      website: this.props.Website,
      copyright: this.props.Copyright,
      fontawesome: this.props.FontAwesome,
      cols: this.props.Cols,
      htaccess: this.props.Htaccess,
      smtpemail: this.props.SmtpEmail ?? '',
      search: this.props.Search,
      ssl: this.props.SSL
    }

    const plainHtaccess = this.destinationPath(
      '_.htaccess-dev'
    )

    const sslHtaccess = this.destinationPath(
      '_.htaccess-dev-ssl'
    )

    const targetHtaccess = this.destinationPath(
      '.htaccess-dev'
    )

    if (!this.props.Htaccess) {
      await fs.remove(plainHtaccess)
      await fs.remove(sslHtaccess)
      await fs.remove(targetHtaccess)
    } else if (this.props.SSL) {
      await fs.move(
        sslHtaccess,
        targetHtaccess,
        {
          overwrite: true
        }
      )

      await fs.remove(plainHtaccess)
    } else {
      await fs.move(
        plainHtaccess,
        targetHtaccess,
        {
          overwrite: true
        }
      )

      await fs.remove(sslHtaccess)
    }

    await fs.writeJson(
      this.destinationPath('razor.json'),
      config,
      {
        spaces: 2
      }
    )
  }

  async _runCommand (command, argumentsList) {
    await new Promise((resolve, reject) => {
      const child = spawn(
        command,
        argumentsList,
        {
          cwd: this.destinationRoot(),
          env: process.env,
          stdio: 'inherit'
        }
      )

      let settled = false

      child.once('error', error => {
        if (settled) {
          return
        }

        settled = true

        if (error.code === 'ENOENT') {
          reject(
            new Error(
              `Could not execute "${command}". ` +
              'Make sure it is installed and available in PATH.',
              {
                cause: error
              }
            )
          )

          return
        }

        reject(error)
      })

      child.once('close', code => {
        if (settled) {
          return
        }

        settled = true

        if (code === 0) {
          resolve()
          return
        }

        reject(
          new Error(
            `"${command}" exited with status code ${code}.`
          )
        )
      })
    })
  }
}
