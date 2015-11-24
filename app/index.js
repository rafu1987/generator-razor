'use strict';
var yeoman = require('yeoman-generator');
var chalk = require('chalk');
var yosay = require('yosay');
var link = require('fs-symlink');
var mysql = require('mysql');
var glob = require("glob");
var mv = require('mv');
var fs = require('fs');
var pathExists = require('path-exists');
var request = require("request");
var md5 = require('md5');

module.exports = yeoman.generators.Base.extend({
  prompting: function() {
    var rzr = this;
    var done = this.async();

    this.log(yosay(
      'Welcome to the official TYPO3 ' + chalk.red('razor') + ' generator!'
    ));

    getSrc("http://get.typo3.org/json", function(response) {
      var prompts = [{
        type: 'input',
        name: 'ProjectName',
        message: 'Choose your project name',
        default: 'Project'
      }, {
        type: 'input',
        name: 'SrcPath',
        message: 'What is the path to the TYPO3 source files?',
        default: '../typo3_src'
      }, {
        type: 'list',
        name: 'Version',
        message: 'Choose your TYPO3 version',
        choices: response
      }, {
        type: 'input',
        name: 'DbUsername',
        message: 'Database username?',
        default: 'root'
      }, {
        type: 'input',
        name: 'DbPassword',
        message: 'Database password?',
        default: 'root'
      }, {
        type: 'input',
        name: 'DbHostname',
        message: 'Database hostname?',
        default: 'localhost'
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
        }]
      }, {
        type: 'input',
        name: 'DbNew',
        message: 'New database name? A new database, username and password will be created.',
        default: 'newproject'
      }, {
        type: 'input',
        name: 'User',
        message: 'TYPO3 admin username?',
        default: 'admin'
      }, {
        type: 'input',
        name: 'Pass',
        message: 'TYPO3 install tool & admin user password?',
        default: 'joh316'
      }, /*{
        type: 'list',
        name: 'Vhs',
        message: 'Download vhs from GitHub?',
        choices: [{
          name: 'Yes',
          value: '1'
        }, {
          name: 'No',
          value: '0'
        }]
      },*/ {
        type: 'list',
        name: 'Transport',
        message: 'How to send emails?',
        choices: [{
          name: 'mail',
          value: 'mail'
        }, {
          name: 'smtp',
          value: 'smtp'
        }]
      }, {
        type: 'input',
        name: 'SmtpUser',
        message: 'SMTP username?',
        default: ''
      }, {
        type: 'input',
        name: 'SmtpPass',
        message: 'SMTP password?',
        default: ''
      }, {
        type: 'input',
        name: 'SmtpServer',
        message: 'SMTP server?',
        default: 'localhost:25'
      }];

      rzr.prompt(prompts, function(answers) {
        this.ProjectName = answers.ProjectName;
        this.SrcPath = answers.SrcPath;
        this.Version = answers.Version;
        this.DbUsername = answers.DbUsername;
        this.DbPassword = answers.DbPassword;
        this.DbHostname = answers.DbHostname;
        this.DbSocket = answers.DbSocket;
        this.DbNew = answers.DbNew;
        this.User = answers.User;
        this.Pass = answers.Pass;
        //this.Vhs = answers.Vhs;
        this.Transport = answers.Transport;
        this.SmtpUser = answers.SmtpUser;
        this.SmtpPass = answers.SmtpPass;
        this.SmtpServer = answers.SmtpServer;
        done();
      }.bind(rzr));
    });
  },

  writing: {
    app: function() {
      var rzr = this;
      var path = this.SrcPath + '/typo3_src-' + this.Version;

      createSymlinks(this, path, function() {
        rzr.directory('install', './').on('end', function() {
          localconf(rzr);
          localSettings(rzr);

          createDb(rzr, function(response) {
            processSqlFile(rzr, response, function() {
              getRazor(rzr);

/*              if(rzr.Vhs == 1) {
                getVhs(rzr);
              }*/
            });
          });
        });
      });
    },
  }
});

function getSrc(url, callback) {
  // Get TYPO3 source from JSON
  request({
    url: url,
    json: true
  }, function(error, response, body) {
    if (!error && response.statusCode === 200) {
      var releases = body['6.2']['releases'];
      var keys = Object.keys(releases);
      var len = keys.length;
      var arr = [];

      for (var i = 0; i < len; i++) {
        arr.push({
          name: keys[i],
          value: keys[i]
        });
      }

      return callback(arr);
    }
  });
}

function createSymlinks(rzr, path, callback) {
  // Check if TYPO3 source is available
  if (pathExists.sync(path) === false) {
    rzr.extract("http://get.typo3.org/" + rzr.Version, rzr.SrcPath, function() {});
  }

  // Symlinks
  link(path, 'typo3_src');
  link('typo3_src/typo3', 'typo3');

  return callback();
}

function localconf(rzr) {
  fs.readFile('typo3conf/LocalConfiguration.php', 'utf8', function(err, content) {
    var newContent = substituteMarker(content, '###DBNEW###', rzr.DbNew, true);
    newContent = substituteMarker(newContent, '###HOST###', rzr.DbHostname, true);
    newContent = substituteMarker(newContent, '###PROJECTNAME###', rzr.ProjectName, true);
    newContent = substituteMarker(newContent, '###PASS###', md5(rzr.Pass), true);

    fs.writeFile('typo3conf/LocalConfiguration.php', newContent, 'utf8', function(err) {});
  });
}

function localSettings(rzr) {
  fs.readFile('typo3conf/Local.php', 'utf8', function(err, content) {
    var newContent = substituteMarker(content, '###TRANSPORT###', rzr.Transport, true);
    newContent = substituteMarker(newContent, '###SMTP_PASS###', rzr.SmtpPass, true);
    newContent = substituteMarker(newContent, '###SMTP_SERVER###', rzr.SmtpServer, true);
    newContent = substituteMarker(newContent, '###SMTP_USER###', rzr.SmtpUser, true);

    fs.writeFile('typo3conf/Local.php', newContent, 'utf8', function(err) {});
  });
}

function createDb(rzr, callback) {
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
  connection.query("CREATE DATABASE " + rzr.DbNew + " CHARACTER SET utf8 COLLATE utf8_general_ci;");
  connection.query("CREATE USER '" + rzr.DbNew + "'@'%' IDENTIFIED BY '" + rzr.DbNew + "';")
  connection.query("GRANT ALL PRIVILEGES ON " + rzr.DbNew + ".* TO '" + rzr.DbNew + "'@'%';");

  // Connect to new db
  connection.query("use " + rzr.DbNew);

  return callback(connection);
}

function processSqlFile(rzr, connection, callback) {
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
          fs.unlink('db.sql');

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

function getRazor(rzr) {
  // Get razor
  rzr.extract("https://bitbucket.org/rafu1987/razor/get/master.tar.gz", "typo3conf/ext/", function() {
    glob("typo3conf/ext/*", function(er, files) {
      files.forEach(function(file) {
        mv(file, 'typo3conf/ext/razor', {
          mkdirp: true
        }, function(err) {});
      });
    });
  });
}

function getVhs(rzr) {
  // Get vhs
  rzr.extract("https://github.com/FluidTYPO3/vhs/archive/development.tar.gz", "typo3conf/ext/", function() {
    mv('typo3conf/ext/vhs-development', 'typo3conf/ext/vhs', {
      mkdirp: true
    }, function(err) {});
  });
}
