'use strict';
const Generator = require('yeoman-generator');
const chalk = require('chalk');
const yosay = require('yosay');
const link = require('fs-symlink');
const mysql = require('mysql');
const glob = require('glob');
const mv = require('mv');
const fs = require('fs');
const pathExists = require('path-exists');
const request = require('request');
const md5 = require('md5');
const copydir = require('copy-dir');
const remote = require('yeoman-remote');

let rzr;

module.exports = class extends Generator {
  prompting() {
    const t = this;
    const done = this.async();

    this.log(yosay(
      'Welcome to the official TYPO3 ' + chalk.red('razor') + ' generator!'
    ));

    this._getSrc(this, 'http://get.typo3.org/json', (response) => {
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
        when: answers => answers.Transport == 'smtp',
        type: 'input',
        name: 'Encrypt',
        message: 'SMTP encrypt?',
        default: '',
        store: true
      }, {
        when: answers => answers.Transport == 'smtp',
        type: 'input',
        name: 'SmtpUser',
        message: 'SMTP username?',
        default: '',
        store: true
      }, {
        when: answers => answers.Transport == 'smtp',
        type: 'input',
        name: 'SmtpPass',
        message: 'SMTP password?',
        default: '',
        store: true
      }, {
        when: answers => answers.Transport == 'smtp',
        type: 'input',
        name: 'SmtpEmail',
        message: 'Sender email?',
        default: '',
        store: true
      }, {
        when: answers => answers.Transport == 'smtp',
        type: 'input',
        name: 'SmtpName',
        message: 'Sender name?',
        default: '',
        store: true
      }, {
        when: answers => answers.Transport == 'smtp',
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
        }, {
          name: 'werdewelt',
          value: 2
        }],
        store: true
      },{
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
      },{
        when: answers => answers.Version.indexOf('8.7') !== -1,
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
      },{
        when: answers => answers.Version.indexOf('8.7') !== -1,
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
      },{
        when: answers => answers.Version.indexOf('8.7') !== -1,
        type: 'list',
        name: 'Github',
        message: 'Get extension_builder from GitHub?',
        choices: [{
          name: 'Yes',
          value: true
        }, {
          name: 'No',
          value: false
        }],
        store: true
      }];

      return t.prompt(prompts).then(answers => {
        t.props = answers;
        done();
      });
    });
  }

  writing() {
    const t = this;
    rzr = this.props;
    const path = rzr.SrcPath + '/typo3_src-' + rzr.Version;

    // Version and branch
    let version;
    let branch;

    if(rzr.Version.indexOf('6.2.') !== -1) {
      version = '62';
      branch = 'master';
    }
    else if(rzr.Version.indexOf('7.6') !== -1) {
      version = '76';
      branch = 'razor7';
    }
    else {
      version = '87';
      branch = 'razor8';
    }

    this._createSymlinks(this, path, () => {
      copydir(t.templatePath(version), t.destinationPath('./'), () => {
        t._localconf(t);
        t._localSettings(t);

        t._createDb((response) => {
          t._processSqlFile(t, response, () => {
            t._getRazor(t, branch, () => {
              if(rzr.Github) {
                t._getExtension(t, 'https://github.com/FriendsOfTYPO3/extension_builder/archive/8.7.tar.gz', 'extension_builder-8.7', 'extension_builder', () => {
                  t.log(
                    chalk.yellow.bold('razor') + ' was successfully installed!'
                  );
                });
              }
            });

            t._setRazorConfig();
          });
        });
      });
    });
  }

  _getSrc(t, url, callback) {
    // Get TYPO3 source from JSON
    request({
      url: url,
      json: true
    }, (error, response, body) => {
      if (!error && response.statusCode === 200) {
        const releases8 = body['8']['releases'];
        const releases7 = body['7']['releases'];
        const releases62 = body['6.2']['releases'];

        const releasesObj = t._mergeOptions(releases8, releases7, releases62);

        const keys = Object.keys(releasesObj);
        const len = keys.length;
        const arr = [];

        // Filter out only 8.7.x, 7.6.x versions and 6.2.x versions
        for (let i = 0; i < len; i++) {
          if(keys[i].indexOf('8.7.') !== -1 || keys[i].indexOf('7.6.') !== -1 || keys[i].indexOf('6.2.') !== -1) {
            arr.push({
              name: keys[i],
              value: keys[i]
            });
          }
        }

        return callback(arr);
      }
    });
  }

  _mergeOptions(obj1, obj2, obj3) {
    const obj4 = {};

    for (let attrname in obj1) { obj4[attrname] = obj1[attrname]; }
    for (let attrname in obj2) { obj4[attrname] = obj2[attrname]; }
    for (let attrname in obj3) { obj4[attrname] = obj3[attrname]; }

    return obj4;
  }

  _createSymlinks(t, path, callback) {
    // Check if TYPO3 source is available
    if (pathExists.sync(path) === false) {
      remote.extract('http://get.typo3.org/' + rzr.Version, rzr.SrcPath, () => {});
    }

    // Symlinks
    link(path, 'typo3_src');
    link('typo3_src/typo3', 'typo3');
    link('typo3_src/index.php', 'index.php');

    return callback();
  }

  _localconf(t) {
    fs.readFile('typo3conf/LocalConfiguration.php', 'utf8', (err, content) => {
      let newContent = t._substituteMarker(content, '###DBNEW###', rzr.DbNew, true);
      newContent = t._substituteMarker(newContent, '###HOST###', rzr.DbHostname, true);
      newContent = t._substituteMarker(newContent, '###PROJECTNAME###', rzr.ProjectName, true);
      newContent = t._substituteMarker(newContent, '###PASS###', md5(rzr.Pass), true);

      fs.writeFile('typo3conf/LocalConfiguration.php', newContent, 'utf8', () => {});
    });
  }

  _localSettings(t) {
    if(rzr.Transport == 'smtp') {
      fs.readFile('typo3conf/Local.php', 'utf8', (err, content) => {
        let newContent = t._substituteMarker(content, '###TRANSPORT###', rzr.Transport, true);
        newContent = t._substituteMarker(newContent, '###SMTP_ENCRYPT###', rzr.Encrypt, true);
        newContent = t._substituteMarker(newContent, '###SMTP_PASS###', rzr.SmtpPass, true);
        newContent = t._substituteMarker(newContent, '###SMTP_SERVER###', rzr.SmtpServer, true);
        newContent = t._substituteMarker(newContent, '###SMTP_USER###', rzr.SmtpUser, true);
        newContent = t._substituteMarker(newContent, '###SMTP_EMAIL###', rzr.SmtpEmail, true);
        newContent = t._substituteMarker(newContent, '###SMTP_NAME###', rzr.SmtpName, true);

        fs.writeFile('typo3conf/Local.php', newContent, 'utf8', () => {});
      });
    }
    else {
      fs.unlink('typo3conf/Local.php', () => {});
    }
  }

  _createDb(callback) {
    // Connect to database
    const connection = mysql.createConnection({
      host: rzr.DbHostname,
      user: rzr.DbUsername,
      password: rzr.DbPassword,
      socketPath: rzr.DbSocket,
      multipleStatements: true
    });

    connection.connect((err) => {
      if (err) {
        console.error('error connecting');

        return;
      }
    });

    // Create database table and user
    connection.query('CREATE DATABASE `' + rzr.DbNew + '` CHARACTER SET utf8 COLLATE utf8_unicode_ci;');
    connection.query('CREATE USER "' + rzr.DbNew + '"@"%" IDENTIFIED BY "' + rzr.DbNew + '";');
    connection.query('GRANT ALL PRIVILEGES ON `' + rzr.DbNew + '`.* TO "' + rzr.DbNew + '"@"%";');

    // Connect to new db
    connection.query('USE `' + rzr.DbNew + '`;');

    return callback(connection);
  }

  _processSqlFile(t, connection, callback) {
    // Read sql file
    fs.readFile('./db.sql', 'utf8', (err, data) => {
      if (err) {
        console.log(err);
      }

      let result = t._substituteMarker(data, '###PASS###', md5(rzr.Pass), false);
      result = t._substituteMarker(result, '###ADMIN###', rzr.User, false);

      // Write file
      fs.writeFile('db.sql', result, 'utf8', (err) => {
        if (err) {
          console.log(err);
        }

        // Read file again with changes
        fs.readFile('./db.sql', 'utf8', (err, data) => {
          // Import sql file
          connection.query(data, () => {
            connection.end();

            // Delete db.sql file after import
            fs.unlink('db.sql', () => {});

            return callback();
          });
        });
      });
    });
  }

  _substituteMarker(content, marker, newContent, toString) {
    const regEx = new RegExp(marker, 'g');

    if (toString) {
      return content.toString().replace(regEx, newContent);
    } else {
      return content.replace(regEx, newContent);
    }
  }

  _getRazor(t, branch, callback) {
    // Get razor
    remote.extract('https://bitbucket.org/rafu1987/razor/get/'+ branch +'.tar.gz', 'typo3conf/ext/', () => {
      glob('typo3conf/ext/*', (er, files) => {
        files.forEach((file) => {
          mv(file, 'typo3conf/ext/razor', {
            mkdirp: true
          }, () => {});

          return callback();
        });
      });
    });
  }

  _getExtension(t, url, oldName, newName, callback) {
    // Get razor
    remote.extract(url, 'typo3conf/ext/', () => {
      glob('typo3conf/ext/' + oldName, (er, files) => {
        files.forEach((file) => {
          mv(file, 'typo3conf/ext/' + newName, {
            mkdirp: true
          }, () => {});

          return callback();
        });
      });
    });
  }

  _setRazorConfig() {
    const obj = {siteName: rzr.ProjectName, user: rzr.User, adminEmail: rzr.AdminEmail, english: rzr.English, author: rzr.Author, email: rzr.Email, website: rzr.Website, copyright: rzr.Copyright, dark: rzr.Dark, cols: rzr.Cols, htaccess: rzr.Htaccess};

    // Rename or delete?
    if(rzr.Htaccess) {
      fs.rename('_.htaccess-dev', '.htaccess-dev', () => {});
    }
    else {
      fs.unlink('_.htaccess-dev', () => {});
    }

    fs.writeFile('razor.json', JSON.stringify(obj, null, 2), (err) => {
      if(err) {
        return console.log(err);
      }
    });
  }
};
