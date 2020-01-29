'use strict'
const Generator = require('yeoman-generator')
const chalk = require('chalk')
const yosay = require('yosay')
const link = require('fs-symlink')
const mysql = require('mysql')
const fs = require('fs')
const pathExists = require('path-exists')
const request = require('request')
const md5 = require('md5')
const argon2 = require('argon2')
const copydir = require('copy-dir')
const remote = require('yeoman-remote')

let rzr

module.exports = class extends Generator {
  prompting () {
    const t = this
    const done = this.async()

    this.log(yosay(
      'Welcome to the official TYPO3 ' + chalk.red('razor') + ' generator!'
    ))

    this._getSrc(this, 'https://get.typo3.org/json', (response) => {
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
        type: 'list',
        name: 'Version',
        message: 'Choose your TYPO3 version',
        choices: response
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
        type: 'list',
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
        default: 'newproject'
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
        type: 'list',
        name: 'Transport',
        message: 'How to send emails?',
        choices: [{
          name: 'smtp',
          value: 'smtp'
        }, {
          name: 'mail',
          value: 'mail'
        }],
        store: true
      }, {
        when: answers => answers.Transport === 'smtp',
        type: 'input',
        name: 'Encrypt',
        message: 'SMTP encrypt?',
        default: 'ssl',
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
        when: answers => answers.Transport === 'smtp',
        type: 'input',
        name: 'SmtpServer',
        message: 'SMTP server?',
        default: 'localhost:25',
        store: true
      }, {
        type: 'list',
        name: 'English',
        message: 'Activate English language in TYPO3?',
        choices: [{
          name: 'No',
          value: false
        }, {
          name: 'Yes',
          value: true
        }]
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
        type: 'list',
        name: 'Copyright',
        message: 'Add copyright?',
        choices: [{
          name: 'No',
          value: false
        }, {
          name: 'Gandayo',
          value: 1
        }],
        store: true
      }, {
        type: 'list',
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
        type: 'list',
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
        when: answers => answers.Version.indexOf('8.7') !== -1 || answers.Version.indexOf('9.5') !== -1,
        type: 'list',
        name: 'Dark',
        message: 'Editor dark mode?',
        choices: [{
          name: 'No',
          value: false
        }, {
          name: 'Yes',
          value: true
        }],
        store: true
      }, {
        when: answers => answers.Version.indexOf('8.7') !== -1 || answers.Version.indexOf('9.5') !== -1,
        type: 'list',
        name: 'Cols',
        message: 'Bootstrap cols?',
        choices: [{
          name: '12',
          value: '12'
        }, {
          name: '24',
          value: '24'
        }],
        store: true
      }]

      return t.prompt(prompts).then(answers => {
        t.props = answers
        done()
      })
    })
  }

  writing () {
    const t = this
    rzr = this.props
    const path = rzr.SrcPath + '/typo3_src-' + rzr.Version

    // Version
    let version
    let hashMethod = 'md5'

    if (rzr.Version.indexOf('6.2.') !== -1) {
      version = '62'
    } else if (rzr.Version.indexOf('7.6') !== -1) {
      version = '76'
    } else if (rzr.Version.indexOf('8.7') !== -1) {
      version = '87'
    } else {
      version = '95'
      hashMethod = 'argon2'
    }

    this._createSymlinks(this, path, () => {
      copydir(t.templatePath(version), t.destinationPath('./'), () => {
        t._localconf(t, hashMethod)
        t._localSettings(t)

        t._createDb((response) => {
          t._processSqlFile(t, hashMethod, response, () => {
            t._setRazorConfig()
          })
        })
      })
    })
  }

  install () {
    rzr = this.props

    // Branch
    let branch

    if (rzr.Version.indexOf('6.2.') !== -1) {
      branch = 'master'
    } else if (rzr.Version.indexOf('7.6') !== -1) {
      branch = 'razor7'
    } else if (rzr.Version.indexOf('8.7') !== -1) {
      branch = 'razor8'
    } else {
      branch = 'razor9'
    }

    // yarn settings
    const yarnSettings = { 'dev': true, 'no-lockfile': true, 'modules-folder': 'typo3conf/ext/' }

    // Install razor
    this.yarnInstall([
      'ssh://git@bitbucket.org/rafu1987/razor.git#' + branch,
    ], yarnSettings)
  }

  end () {
    // Delete package.json when finished
    fs.unlink('package.json', () => {})
  }

  _getSrc (t, url, callback) {
    // Get TYPO3 source from JSON
    request({
      url: url,
      json: true
    }, (error, response, body) => {
      if (!error && response.statusCode === 200) {
        const releases9 = body['9']['releases']
        const releases8 = body['8']['releases']
        const releases7 = body['7']['releases']
        const releases62 = body['6.2']['releases']

        const releasesObj = t._mergeOptions(releases9, releases8, releases7, releases62)

        const keys = Object.keys(releasesObj)
        const len = keys.length
        const arr = []

        // Filter out only 9.5.x, 8.7.x, 7.6.x versions and 6.2.x versions
        for (let i = 0; i < len; i++) {
          if (keys[i].indexOf('8.7.') !== -1 || keys[i].indexOf('9.5.') !== -1 || keys[i].indexOf('7.6.') !== -1 || keys[i].indexOf('6.2.') !== -1) {
            arr.push({
              name: keys[i],
              value: keys[i]
            })
          }
        }

        return callback(arr)
      }
    })
  }

  _mergeOptions (obj1, obj2, obj3) {
    const obj4 = {}

    for (let attrname in obj1) { obj4[attrname] = obj1[attrname] }
    for (let attrname in obj2) { obj4[attrname] = obj2[attrname] }
    for (let attrname in obj3) { obj4[attrname] = obj3[attrname] }

    return obj4
  }

  _createSymlinks (t, path, callback) {
    // Check if TYPO3 source is available
    if (pathExists.sync(path) === false) {
      remote.extract('https://get.typo3.org/' + rzr.Version, rzr.SrcPath, () => {})
    }

    // Symlinks
    link(path, 'typo3_src')
    link('typo3_src/typo3', 'typo3')
    link('typo3_src/index.php', 'index.php')

    return callback()
  }

  _localconf (t, hashMethod) {
    fs.readFile('typo3conf/LocalConfiguration.php', 'utf8', (err, content) => {
      let newContent = t._substituteMarker(content, '###DBNEW###', rzr.DbNew, true)
      newContent = t._substituteMarker(newContent, '###HOST###', rzr.DbHostname, true)
      newContent = t._substituteMarker(newContent, '###PROJECTNAME###', rzr.ProjectName, true)

      if (hashMethod === 'argon2') {
        const hash = argon2.hash(rzr.Pass)
        hash.then(function (res) {
          newContent = t._substituteMarker(newContent, '###PASS###', res, true)

          t._localconfWrite(newContent)
        })
      } else {
        newContent = t._substituteMarker(newContent, '###PASS###', md5(rzr.Pass), true)

        t._localconfWrite(newContent)
      }

      if (err) {
        console.error('error setting localconf settings')
      }
    })
  }

  _localconfWrite (content) {
    fs.writeFile('typo3conf/LocalConfiguration.php', content, 'utf8', () => {})
  }

  _localSettings (t) {
    if (rzr.Transport === 'smtp') {
      fs.readFile('typo3conf/Local.php', 'utf8', (err, content) => {
        let newContent = t._substituteMarker(content, '###TRANSPORT###', rzr.Transport, true)
        newContent = t._substituteMarker(newContent, '###SMTP_ENCRYPT###', rzr.Encrypt, true)
        newContent = t._substituteMarker(newContent, '###SMTP_PASS###', rzr.SmtpPass, true)
        newContent = t._substituteMarker(newContent, '###SMTP_SERVER###', rzr.SmtpServer, true)
        newContent = t._substituteMarker(newContent, '###SMTP_USER###', rzr.SmtpUser, true)
        newContent = t._substituteMarker(newContent, '###SMTP_EMAIL###', rzr.SmtpEmail, true)
        newContent = t._substituteMarker(newContent, '###SMTP_NAME###', rzr.SmtpName, true)

        fs.writeFile('typo3conf/Local.php', newContent, 'utf8', () => {})

        if (err) {
          console.error('error setting local settings')
        }
      })
    } else {
      fs.unlink('typo3conf/Local.php', () => {})
    }
  }

  _createDb (callback) {
    console.log(rzr.Version)

    let charset = 'utf8';
    let collate = 'utf8_unicode_ci';

    if (rzr.Version.indexOf('9.5') !== -1) {
      charset = 'utf8mb4';
      collate = 'utf8mb4_unicode_ci';
    }

    // Connect to database
    const connection = mysql.createConnection({
      host: rzr.DbHostname,
      user: rzr.DbUsername,
      password: rzr.DbPassword,
      socketPath: rzr.DbSocket,
      multipleStatements: true
    })

    connection.connect((err) => {
      if (err) {
        console.error('error connecting')
      }
    })

    // Create database table and user
    connection.query('CREATE DATABASE `' + rzr.DbNew + '` CHARACTER SET ' + charset + ' COLLATE ' + collate + ';')
    connection.query('CREATE USER "' + rzr.DbNew + '"@"%" IDENTIFIED BY "' + rzr.DbNew + '";')
    connection.query('GRANT ALL PRIVILEGES ON `' + rzr.DbNew + '`.* TO "' + rzr.DbNew + '"@"%";')

    // Connect to new db
    connection.query('USE `' + rzr.DbNew + '`;')

    return callback(connection)
  }

  _processSqlFile (t, hashMethod, connection, callback) {
    // Read sql file
    fs.readFile('./db.sql', 'utf8', (err, data) => {
      if (err) {
        console.error(err)
      }

      let result = t._substituteMarker(data, '###ADMIN###', rzr.User, false)

      if (hashMethod === 'argon2') {
        const hash = argon2.hash(rzr.Pass)
        hash.then(function (res) {
          result = t._substituteMarker(result, '###PASS###', res, false)

          t._sqlWrite(t, result, connection, callback)
        })
      } else {
        result = t._substituteMarker(result, '###PASS###', md5(rzr.Pass), false)

        t._sqlWrite(t, result, connection, callback)
      }
    })
  }

  _sqlWrite (t, result, connection, callback) {
    // Write file
    fs.writeFile('db.sql', result, 'utf8', (err) => {
      if (err) {
        console.error(err)
      }

      // Read file again with changes
      fs.readFile('./db.sql', 'utf8', (err, data) => {
        // Import sql file
        connection.query(data, () => {
          connection.end()

          // Delete db.sql file after import
          fs.unlink('db.sql', () => {})

          return callback()
        })

        if (err) {
          console.error(err)
        }
      })
    })
  }

  _substituteMarker (content, marker, newContent, toString) {
    const regEx = new RegExp(marker, 'g')

    if (toString) {
      return content.toString().replace(regEx, newContent)
    } else {
      return content.replace(regEx, newContent)
    }
  }

  _setRazorConfig () {
    const obj = {
      siteName: rzr.ProjectName,
      user: rzr.User,
      adminEmail: rzr.AdminEmail,
      english: rzr.English,
      author: rzr.Author,
      email: rzr.Email,
      website: rzr.Website,
      copyright: rzr.Copyright,
      dark: rzr.Dark,
      fontawesome: rzr.FontAwesome,
      cols: rzr.Cols,
      htaccess: rzr.Htaccess,
      smtpemail: rzr.SmtpEmail
    }

    // Rename or delete?
    if (rzr.Htaccess) {
      fs.rename('_.htaccess-dev', '.htaccess-dev', () => {})
    } else {
      fs.unlink('_.htaccess-dev', () => {})
    }

    fs.writeFile('razor.json', JSON.stringify(obj, null, 2), (err) => {
      if (err) {
        return console.error(err)
      }
    })
  }
}
