'use strict';
var Generator = require('yeoman-generator');
var chalk = require('chalk');
var yosay = require('yosay');
var link = require('fs-symlink');
var mysql = require('mysql');
var glob = require('glob');
var mv = require('mv');
var fs = require('fs');
var pathExists = require('path-exists');
var request = require('request');
var md5 = require('md5');
var copydir = require('copy-dir');
var remote = require('yeoman-remote');
var rzr;

module.exports = class extends Generator {
  prompting() {
    var t = this;
    var done = this.async();

    this.log(yosay(
      'Welcome to the official TYPO3 ' + chalk.red('razor') + ' generator!'
    ));

    getSrc('http://get.typo3.org/json', function(response) {
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
    var t = this;
    rzr = this.props;
    var path = rzr.SrcPath + '/typo3_src-' + rzr.Version;

    if(rzr.Version.indexOf('6.2.') !== -1) {
      var version = '62';
      var branch = 'master';
    }
    else if(rzr.Version.indexOf('7.6') !== -1) {
      var version = '76';
      var branch = 'razor7';
    }
    else {
      var version = '87';
      var branch = 'razor8';
    }

    createSymlinks(this, path, function() {
      copydir(t.templatePath(version), t.destinationPath('./'), function() {
        localconf();
        localSettings();

        createDb(function(response) {
          processSqlFile(response, function() {
            getRazor(t, branch, function() {
              if(rzr.Github) {
                getExtension(t, 'https://github.com/FriendsOfTYPO3/extension_builder/archive/8.7.tar.gz', 'extension_builder-8.7', 'extension_builder', function() {
                  t.log(
                    chalk.yellow.bold('razor') + ' was successfully installed!'
                  );
                });
              }
            });
            setRazorConfig();
          });
        });
      });
    });
  }
};

function getSrc(url, callback) {
  // Get TYPO3 source from JSON
  request({
    url: url,
    json: true
  }, function(error, response, body) {
    if (!error && response.statusCode === 200) {
      var releases8 = body['8']['releases'];
      var releases7 = body['7']['releases'];
      var releases62 = body['6.2']['releases'];

      var releasesObj = merge_options(releases8, releases7, releases62);

      var keys = Object.keys(releasesObj);
      var len = keys.length;
      var arr = [];

      // Filter out only 8.7.x, 7.6.x versions and 6.2.x versions
      for (var i = 0; i < len; i++) {
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

function merge_options(obj1, obj2, obj3) {
  var obj4 = {};
  for (var attrname in obj1) { obj4[attrname] = obj1[attrname]; }
  for (var attrname in obj2) { obj4[attrname] = obj2[attrname]; }
  for (var attrname in obj3) { obj4[attrname] = obj3[attrname]; }
  return obj4;
}

function createSymlinks(t, path, callback) {
  // Check if TYPO3 source is available
  if (pathExists.sync(path) === false) {
    remote.extract('http://get.typo3.org/' + rzr.Version, rzr.SrcPath, function() {});
  }

  // Symlinks
  link(path, 'typo3_src');
  link('typo3_src/typo3', 'typo3');
  link('typo3_src/index.php', 'index.php');

  return callback();
}

function localconf() {
  fs.readFile('typo3conf/LocalConfiguration.php', 'utf8', function(err, content) {
    var newContent = substituteMarker(content, '###DBNEW###', rzr.DbNew, true);
    newContent = substituteMarker(newContent, '###HOST###', rzr.DbHostname, true);
    newContent = substituteMarker(newContent, '###PROJECTNAME###', rzr.ProjectName, true);
    newContent = substituteMarker(newContent, '###PASS###', md5(rzr.Pass), true);

    fs.writeFile('typo3conf/LocalConfiguration.php', newContent, 'utf8', function(err) {});
  });
}

function localSettings() {
  if(rzr.Transport == 'smtp') {
    fs.readFile('typo3conf/Local.php', 'utf8', function(err, content) {
      var newContent = substituteMarker(content, '###TRANSPORT###', rzr.Transport, true);
      newContent = substituteMarker(newContent, '###SMTP_ENCRYPT###', rzr.Encrypt, true);
      newContent = substituteMarker(newContent, '###SMTP_PASS###', rzr.SmtpPass, true);
      newContent = substituteMarker(newContent, '###SMTP_SERVER###', rzr.SmtpServer, true);
      newContent = substituteMarker(newContent, '###SMTP_USER###', rzr.SmtpUser, true);
      newContent = substituteMarker(newContent, '###SMTP_EMAIL###', rzr.SmtpEmail, true);
      newContent = substituteMarker(newContent, '###SMTP_NAME###', rzr.SmtpName, true);

      fs.writeFile('typo3conf/Local.php', newContent, 'utf8', function(err) {});
    });
  }
  else {
    fs.unlink('typo3conf/Local.php', function(err) {});
  }
}

function createDb(callback) {
  // Connect to database
  var connection = mysql.createConnection({
    host: rzr.DbHostname,
    user: rzr.DbUsername,
    password: rzr.DbPassword,
    socketPath: rzr.DbSocket,
    multipleStatements: true
  });

  connection.connect(function(err) {
    if (err) {
      console.error('error connecting');
      return;
    }
  });

  // Create database table and user
  connection.query("CREATE DATABASE `" + rzr.DbNew + "` CHARACTER SET utf8 COLLATE utf8_unicode_ci;");
  connection.query("CREATE USER '" + rzr.DbNew + "'@'%' IDENTIFIED BY '" + rzr.DbNew + "';");
  connection.query("GRANT ALL PRIVILEGES ON `" + rzr.DbNew + "`.* TO '" + rzr.DbNew + "'@'%';");

  // Connect to new db
  connection.query("USE `" + rzr.DbNew + "`;");

  return callback(connection);
}

function processSqlFile(connection, callback) {
  // Read sql file
  fs.readFile('./db.sql', 'utf8', function(err, data) {
    if (err) {
      console.log(err);
    }

    var result = substituteMarker(data, '###PASS###', md5(rzr.Pass), false);
    result = substituteMarker(result, '###ADMIN###', rzr.User, false);

    // Write file
    fs.writeFile('db.sql', result, 'utf8', function(err) {
      if (err) {
        console.log(err);
      }

      // Read file again with changes
      fs.readFile('./db.sql', 'utf8', function(err, data) {
        // Import sql file
        connection.query(data, function(err, results) {
          connection.end();

          // Delete db.sql file after import
          fs.unlink('db.sql', function(err) {});

          return callback();
        });
      });
    });
  });
}

function substituteMarker(content, marker, newContent, toString) {
  var regEx = new RegExp(marker, 'g');

  if (toString) {
    return content.toString().replace(regEx, newContent);
  } else {
    return content.replace(regEx, newContent);
  }
}

function getRazor(t, branch, callback) { 
  // Get razor
  remote.extract('https://bitbucket.org/rafu1987/razor/get/'+ branch +'.tar.gz', 'typo3conf/ext/', function() {
    glob('typo3conf/ext/*', function(er, files) {
      files.forEach(function(file) {
        mv(file, 'typo3conf/ext/razor', {
          mkdirp: true
        }, function(err) {});

        return callback();
      });
    });
  });
}

function getExtension(t, url, oldName, newName, callback) { 
  // Get razor
  remote.extract(url, 'typo3conf/ext/', function() {
    glob('typo3conf/ext/' + oldName, function(er, files) {
      files.forEach(function(file) {
        mv(file, 'typo3conf/ext/' + newName, {
          mkdirp: true
        }, function(err) {});

        return callback();
      });
    });
  });
}

function setRazorConfig() {
  var obj = {siteName: rzr.ProjectName, user: rzr.User, adminEmail: rzr.AdminEmail, english: rzr.English, author: rzr.Author, email: rzr.Email, website: rzr.Website, copyright: rzr.Copyright, dark: rzr.Dark, cols: rzr.Cols, htaccess: rzr.Htaccess};

  // Rename or delete?
  if(rzr.Htaccess) {
    fs.rename('_.htaccess-dev', '.htaccess-dev', function(err) {});
  }
  else {
    fs.unlink('_.htaccess-dev', function(err) {});
  }

  fs.writeFile('razor.json', JSON.stringify(obj, null, 2), function(err) {
    if(err) {
      return console.log(err);
    }
  });
}
