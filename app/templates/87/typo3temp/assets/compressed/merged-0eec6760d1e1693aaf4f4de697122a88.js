
TYPO3.LLL = {"core":{"waitTitle":"Logging in...","refresh_login_failed":"Login failed","refresh_login_failed_message":"Password not correct.","refresh_login_title":"Refresh Login to TYPO3 (User: %s)","login_expired":"Your TYPO3 login has expired. You need to login again if you want to continue. Otherwise you can close the current browser window.","refresh_login_username":"Username","refresh_login_password":"Password","refresh_login_emptyPassword":"Empty password is not allowed!","refresh_login_button":"Login","refresh_exit_button":"Exit","please_wait":"Please wait ...","be_locked":"The TYPO3 backend is currently locked for maintenance. Leave this browser window open and the backend will automatically become available again once maintenance is complete.","login_about_to_expire":"Your TYPO3 login is about to expire. Please confirm that you want to stay logged in.","login_about_to_expire_title":"TYPO3 login expiration notice","refresh_login_logout_button":"Log me out","refresh_login_refresh_button":"Stay logged in!","csh_tooltip_loading":"Loading help..."},"fileUpload":{"windowTitle":"File Upload Progress","buttonSelectFiles":"Select Files","buttonCancelAll":"Cancel All Uploads","infoComponentMaxFileSize":"You can upload files with a maximum size of {0}.","infoComponentFileUploadLimit":"You can upload a total of {0}.","infoComponentFileTypeLimit":"You can upload the following file types {0}.","infoComponentOverrideFiles":"Overwrite existing files","processRunning":"Another process is already uploading","uploadWait":"Waiting to start upload of {0}","uploadStarting":"Starting upload of {0}","uploadProgress":"{0}% of {1} uploaded","uploadSuccess":"{0} was successfully uploaded!","errorQueueLimitExceeded":"Too many files selected","errorQueueFileSizeLimit":"{0} is too big","errorQueueZeroByteFile":"{0} is empty","errorQueueInvalidFiletype":"Filetype not allowed for {0}","errorUploadHttp":"Too many files selected","errorUploadMissingUrl":"Internal error: No Upload URL set","errorUploadIO":"Internal error: Problems while reading\/writing the file","errorUploadSecurityError":"Internal error: {0}","errorUploadLimit":"Upload limit exceeded","errorUploadFailed":"Upload failed","errorUploadFileIDNotFound":"Internal error: File ID not found","errorUploadFileValidation":"Internal error while validating the file","errorUploadFileCancelled":"Upload of {0} canceled","errorUploadStopped":"Upload of {0} stopped","allErrorMessageTitle":"All uploads failed","allErrorMessageText":"All of your uploads failed.<br \/><br \/>If this problem persists, please try another browser, contact your administrator or disable this \"Flash Uploader\" in your User Settings.<br \/><br \/>Detailed problem description:<br \/>","allError401":"The server returned the status code 401, which is related to a .htaccess file used for password protection on your server. Unfortunately this can not be handled by your browser's Flash plugin.","allError2038":"An input\/output error occurred (Error #2038). This i.e. happens with servers using a self-signed SSL certificate, which is a limitation of your browser's Flash plugin."},"liveSearch":{"title":"Short result list","helpTitle":"How to use advanced search tags","emptyText":"Enter search term","loadingText":"Searching...","listEmptyText":"No results found.","showAllResults":"Show All","helpDescription":"Search in certain tables:","helpDescriptionPages":"#page:Home will search for all pages with the title \"Home\"","helpDescriptionContent":""},"viewPort":{"tooltipModuleMenuSplit":"Drag to resize the Modules Menu","tooltipNavigationContainerSplitDrag":"Drag to resize or double click to collapse the page tree area","tooltipNavigationContainerSplitClick":"Click to toggle the page tree area","tooltipDebugPanelSplitDrag":"Drag to resize or click to collapse the Debug Panel."}};
/**
 *
 *  MD5 (Message-Digest Algorithm)
 *  http://www.webtoolkit.info/
 *
 **/

function MD5(string) {

  function RotateLeft(lValue, iShiftBits) {
    return (lValue << iShiftBits) | (lValue >>> (32 - iShiftBits));
  }

  function AddUnsigned(lX, lY) {
    var lX4, lY4, lX8, lY8, lResult;
    lX8 = (lX & 0x80000000);
    lY8 = (lY & 0x80000000);
    lX4 = (lX & 0x40000000);
    lY4 = (lY & 0x40000000);
    lResult = (lX & 0x3FFFFFFF) + (lY & 0x3FFFFFFF);
    if (lX4 & lY4) {
      return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
    }
    if (lX4 | lY4) {
      if (lResult & 0x40000000) {
        return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
      } else {
        return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
      }
    } else {
      return (lResult ^ lX8 ^ lY8);
    }
  }

  function F(x, y, z) {
    return (x & y) | ((~x) & z);
  }

  function G(x, y, z) {
    return (x & z) | (y & (~z));
  }

  function H(x, y, z) {
    return (x ^ y ^ z);
  }

  function I(x, y, z) {
    return (y ^ (x | (~z)));
  }

  function FF(a, b, c, d, x, s, ac) {
    a = AddUnsigned(a, AddUnsigned(AddUnsigned(F(b, c, d), x), ac));
    return AddUnsigned(RotateLeft(a, s), b);
  };

  function GG(a, b, c, d, x, s, ac) {
    a = AddUnsigned(a, AddUnsigned(AddUnsigned(G(b, c, d), x), ac));
    return AddUnsigned(RotateLeft(a, s), b);
  };

  function HH(a, b, c, d, x, s, ac) {
    a = AddUnsigned(a, AddUnsigned(AddUnsigned(H(b, c, d), x), ac));
    return AddUnsigned(RotateLeft(a, s), b);
  };

  function II(a, b, c, d, x, s, ac) {
    a = AddUnsigned(a, AddUnsigned(AddUnsigned(I(b, c, d), x), ac));
    return AddUnsigned(RotateLeft(a, s), b);
  };

  function ConvertToWordArray(string) {
    var lWordCount;
    var lMessageLength = string.length;
    var lNumberOfWords_temp1 = lMessageLength + 8;
    var lNumberOfWords_temp2 = (lNumberOfWords_temp1 - (lNumberOfWords_temp1 % 64)) / 64;
    var lNumberOfWords = (lNumberOfWords_temp2 + 1) * 16;
    var lWordArray = Array(lNumberOfWords - 1);
    var lBytePosition = 0;
    var lByteCount = 0;
    while (lByteCount < lMessageLength) {
      lWordCount = (lByteCount - (lByteCount % 4)) / 4;
      lBytePosition = (lByteCount % 4) * 8;
      lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount) << lBytePosition));
      lByteCount++;
    }
    lWordCount = (lByteCount - (lByteCount % 4)) / 4;
    lBytePosition = (lByteCount % 4) * 8;
    lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80 << lBytePosition);
    lWordArray[lNumberOfWords - 2] = lMessageLength << 3;
    lWordArray[lNumberOfWords - 1] = lMessageLength >>> 29;
    return lWordArray;
  };

  function WordToHex(lValue) {
    var WordToHexValue = "", WordToHexValue_temp = "", lByte, lCount;
    for (lCount = 0; lCount <= 3; lCount++) {
      lByte = (lValue >>> (lCount * 8)) & 255;
      WordToHexValue_temp = "0" + lByte.toString(16);
      WordToHexValue = WordToHexValue + WordToHexValue_temp.substr(WordToHexValue_temp.length - 2, 2);
    }
    return WordToHexValue;
  };

  function Utf8Encode(string) {
    string = string.replace(/\r\n/g, "\n");
    var utftext = "";

    for (var n = 0; n < string.length; n++) {

      var c = string.charCodeAt(n);

      if (c < 128) {
        utftext += String.fromCharCode(c);
      }
      else if ((c > 127) && (c < 2048)) {
        utftext += String.fromCharCode((c >> 6) | 192);
        utftext += String.fromCharCode((c & 63) | 128);
      }
      else {
        utftext += String.fromCharCode((c >> 12) | 224);
        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
        utftext += String.fromCharCode((c & 63) | 128);
      }

    }

    return utftext;
  };

  var x = Array();
  var k, AA, BB, CC, DD, a, b, c, d;
  var S11 = 7, S12 = 12, S13 = 17, S14 = 22;
  var S21 = 5, S22 = 9, S23 = 14, S24 = 20;
  var S31 = 4, S32 = 11, S33 = 16, S34 = 23;
  var S41 = 6, S42 = 10, S43 = 15, S44 = 21;

  string = Utf8Encode(string);

  x = ConvertToWordArray(string);

  a = 0x67452301;
  b = 0xEFCDAB89;
  c = 0x98BADCFE;
  d = 0x10325476;

  for (k = 0; k < x.length; k += 16) {
    AA = a;
    BB = b;
    CC = c;
    DD = d;
    a = FF(a, b, c, d, x[k + 0], S11, 0xD76AA478);
    d = FF(d, a, b, c, x[k + 1], S12, 0xE8C7B756);
    c = FF(c, d, a, b, x[k + 2], S13, 0x242070DB);
    b = FF(b, c, d, a, x[k + 3], S14, 0xC1BDCEEE);
    a = FF(a, b, c, d, x[k + 4], S11, 0xF57C0FAF);
    d = FF(d, a, b, c, x[k + 5], S12, 0x4787C62A);
    c = FF(c, d, a, b, x[k + 6], S13, 0xA8304613);
    b = FF(b, c, d, a, x[k + 7], S14, 0xFD469501);
    a = FF(a, b, c, d, x[k + 8], S11, 0x698098D8);
    d = FF(d, a, b, c, x[k + 9], S12, 0x8B44F7AF);
    c = FF(c, d, a, b, x[k + 10], S13, 0xFFFF5BB1);
    b = FF(b, c, d, a, x[k + 11], S14, 0x895CD7BE);
    a = FF(a, b, c, d, x[k + 12], S11, 0x6B901122);
    d = FF(d, a, b, c, x[k + 13], S12, 0xFD987193);
    c = FF(c, d, a, b, x[k + 14], S13, 0xA679438E);
    b = FF(b, c, d, a, x[k + 15], S14, 0x49B40821);
    a = GG(a, b, c, d, x[k + 1], S21, 0xF61E2562);
    d = GG(d, a, b, c, x[k + 6], S22, 0xC040B340);
    c = GG(c, d, a, b, x[k + 11], S23, 0x265E5A51);
    b = GG(b, c, d, a, x[k + 0], S24, 0xE9B6C7AA);
    a = GG(a, b, c, d, x[k + 5], S21, 0xD62F105D);
    d = GG(d, a, b, c, x[k + 10], S22, 0x2441453);
    c = GG(c, d, a, b, x[k + 15], S23, 0xD8A1E681);
    b = GG(b, c, d, a, x[k + 4], S24, 0xE7D3FBC8);
    a = GG(a, b, c, d, x[k + 9], S21, 0x21E1CDE6);
    d = GG(d, a, b, c, x[k + 14], S22, 0xC33707D6);
    c = GG(c, d, a, b, x[k + 3], S23, 0xF4D50D87);
    b = GG(b, c, d, a, x[k + 8], S24, 0x455A14ED);
    a = GG(a, b, c, d, x[k + 13], S21, 0xA9E3E905);
    d = GG(d, a, b, c, x[k + 2], S22, 0xFCEFA3F8);
    c = GG(c, d, a, b, x[k + 7], S23, 0x676F02D9);
    b = GG(b, c, d, a, x[k + 12], S24, 0x8D2A4C8A);
    a = HH(a, b, c, d, x[k + 5], S31, 0xFFFA3942);
    d = HH(d, a, b, c, x[k + 8], S32, 0x8771F681);
    c = HH(c, d, a, b, x[k + 11], S33, 0x6D9D6122);
    b = HH(b, c, d, a, x[k + 14], S34, 0xFDE5380C);
    a = HH(a, b, c, d, x[k + 1], S31, 0xA4BEEA44);
    d = HH(d, a, b, c, x[k + 4], S32, 0x4BDECFA9);
    c = HH(c, d, a, b, x[k + 7], S33, 0xF6BB4B60);
    b = HH(b, c, d, a, x[k + 10], S34, 0xBEBFBC70);
    a = HH(a, b, c, d, x[k + 13], S31, 0x289B7EC6);
    d = HH(d, a, b, c, x[k + 0], S32, 0xEAA127FA);
    c = HH(c, d, a, b, x[k + 3], S33, 0xD4EF3085);
    b = HH(b, c, d, a, x[k + 6], S34, 0x4881D05);
    a = HH(a, b, c, d, x[k + 9], S31, 0xD9D4D039);
    d = HH(d, a, b, c, x[k + 12], S32, 0xE6DB99E5);
    c = HH(c, d, a, b, x[k + 15], S33, 0x1FA27CF8);
    b = HH(b, c, d, a, x[k + 2], S34, 0xC4AC5665);
    a = II(a, b, c, d, x[k + 0], S41, 0xF4292244);
    d = II(d, a, b, c, x[k + 7], S42, 0x432AFF97);
    c = II(c, d, a, b, x[k + 14], S43, 0xAB9423A7);
    b = II(b, c, d, a, x[k + 5], S44, 0xFC93A039);
    a = II(a, b, c, d, x[k + 12], S41, 0x655B59C3);
    d = II(d, a, b, c, x[k + 3], S42, 0x8F0CCC92);
    c = II(c, d, a, b, x[k + 10], S43, 0xFFEFF47D);
    b = II(b, c, d, a, x[k + 1], S44, 0x85845DD1);
    a = II(a, b, c, d, x[k + 8], S41, 0x6FA87E4F);
    d = II(d, a, b, c, x[k + 15], S42, 0xFE2CE6E0);
    c = II(c, d, a, b, x[k + 6], S43, 0xA3014314);
    b = II(b, c, d, a, x[k + 13], S44, 0x4E0811A1);
    a = II(a, b, c, d, x[k + 4], S41, 0xF7537E82);
    d = II(d, a, b, c, x[k + 11], S42, 0xBD3AF235);
    c = II(c, d, a, b, x[k + 2], S43, 0x2AD7D2BB);
    b = II(b, c, d, a, x[k + 9], S44, 0xEB86D391);
    a = AddUnsigned(a, AA);
    b = AddUnsigned(b, BB);
    c = AddUnsigned(c, CC);
    d = AddUnsigned(d, DD);
  }

  var temp = WordToHex(a) + WordToHex(b) + WordToHex(c) + WordToHex(d);

  return temp.toLowerCase();
}

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Evaluation of TYPO3 form field content
 */

function evalFunc() {
  this.input = evalFunc_input;
  this.output = evalFunc_output;
  this.parseInt = evalFunc_parseInt;
  this.getNumChars = evalFunc_getNumChars;
  this.parseDouble = evalFunc_parseDouble;
  this.noSpace = evalFunc_noSpace;
  this.getSecs = evalFunc_getSecs;
  this.getYear = evalFunc_getYear;
  this.getTimeSecs = evalFunc_getTimeSecs;
  this.getTime = evalFunc_getTime;
  this.getDate = evalFunc_getDate;
  this.getTimestamp = evalFunc_getTimestamp;
  this.caseSwitch = evalFunc_caseSwitch;
  this.evalObjValue = evalFunc_evalObjValue;
  this.outputObjValue = evalFunc_outputObjValue;
  this.split = evalFunc_splitStr;
  this.pol = evalFunc_pol;
  this.convertClientTimestampToUTC = evalFunc_convertClientTimestampToUTC;

  this.ltrim = evalFunc_ltrim;
  this.btrim = evalFunc_btrim;
  var today = new Date();
  this.lastYear = this.getYear(today);
  this.lastDate = this.getDate(today);
  this.lastTime = 0;
  this.refDate = today;
  this.isInString = '';
  this.USmode = 0;
}

function evalFunc_pol(foreign, value) {
  return eval(((foreign == "-") ? '-' : '') + value);
}

function evalFunc_evalObjValue(FObj, value) {
  var evallist = FObj.evallist;
  this.isInString = (FObj.is_in) ? '' + FObj.is_in : '';
  var index = 1;
  var theEvalType = (FObj.evallist) ? this.split(evallist, ",", index) : false;
  var newValue = value;
  while (theEvalType) {
    if (typeof TBE_EDITOR == 'object' && TBE_EDITOR.customEvalFunctions[theEvalType] && typeof TBE_EDITOR.customEvalFunctions[theEvalType] == 'function') {
      newValue = TBE_EDITOR.customEvalFunctions[theEvalType](newValue);
    } else {
      newValue = evalFunc.input(theEvalType, newValue);
    }
    index++;
    theEvalType = this.split(evallist, ",", index);
  }
  return newValue;
}

function evalFunc_outputObjValue(FObj, value) {
  var evallist = FObj.evallist;
  var index = 1;
  var theEvalType = this.split(evallist, ",", index);
  var newValue = value;
  while (theEvalType) {
    if (theEvalType != 'required') {
      newValue = evalFunc.output(theEvalType, value, FObj);
    }
    index++;
    theEvalType = this.split(evallist, ",", index);
  }
  return newValue;
}

function evalFunc_caseSwitch(type, inVal) {
  var theVal = '' + inVal;
  var newString = '';
  switch (type) {
    case "alpha":
    case "num":
    case "alphanum":
    case "alphanum_x":
      for (var a = 0; a < theVal.length; a++) {
        var theChar = theVal.substr(a, 1);
        var special = (theChar == '_' || theChar == '-');
        var alpha = (theChar >= 'a' && theChar <= 'z') || (theChar >= 'A' && theChar <= 'Z');
        var num = (theChar >= '0' && theChar <= '9');
        switch (type) {
          case "alphanum":
            special = 0;
            break;
          case "alpha":
            num = 0;
            special = 0;
            break;
          case "num":
            alpha = 0;
            special = 0;
            break;
        }
        if (alpha || num || special) {
          newString += theChar;
        }
      }
      break;
    case "is_in":
      if (this.isInString) {
        for (var a = 0; a < theVal.length; a++) {
          var theChar = theVal.substr(a, 1);
          if (this.isInString.indexOf(theChar) != -1) {
            newString += theChar;
          }
        }
      } else {
        newString = theVal;
      }
      break;
    case "nospace":
      newString = this.noSpace(theVal);
      break;
    case "upper":
      newString = theVal.toUpperCase();
      break;
    case "lower":
      newString = theVal.toLowerCase();
      break;
    default:
      return inVal;
  }
  return newString;
}

function evalFunc_parseInt(value) {
  var theVal = '' + value;
  if (!value) {
    return 0;
  }
  for (var a = 0; a < theVal.length; a++) {
    if (theVal.substr(a, 1) != '0') {
      return parseInt(theVal.substr(a, theVal.length)) || 0;
    }
  }
  return 0;
}

function evalFunc_getNumChars(value) {
  var theVal = '' + value;
  if (!value) {
    return 0;
  }
  var outVal = "";
  for (var a = 0; a < theVal.length; a++) {
    if (theVal.substr(a, 1) == parseInt(theVal.substr(a, 1))) {
      outVal += theVal.substr(a, 1);
    }
  }
  return outVal;
}

function evalFunc_parseDouble(value) {
  var theVal = "" + value;
  theVal = theVal.replace(/[^0-9,\.-]/g, "");
  var negative = theVal.substring(0, 1) === '-';
  theVal = theVal.replace(/-/g, "");
  theVal = theVal.replace(/,/g, ".");
  if (theVal.indexOf(".") == -1) {
    theVal += ".0";
  }
  var parts = theVal.split(".");
  var dec = parts.pop();
  theVal = Number(parts.join("") + "." + dec);
  if (negative) {
    theVal *= -1;
  }
  theVal = theVal.toFixed(2);

  return theVal;
}

function evalFunc_noSpace(value) {
  var theVal = '' + value;
  var newString = "";
  for (var a = 0; a < theVal.length; a++) {
    var theChar = theVal.substr(a, 1);
    if (theChar != ' ') {
      newString += theChar;
    }
  }
  return newString;
}

function evalFunc_ltrim(value) {
  var theVal = '' + value;
  if (!value) {
    return '';
  }
  for (var a = 0; a < theVal.length; a++) {
    if (theVal.substr(a, 1) != ' ') {
      return theVal.substr(a, theVal.length);
    }
  }
  return '';
}

function evalFunc_btrim(value) {
  var theVal = '' + value;
  if (!value) {
    return '';
  }
  for (var a = theVal.length; a > 0; a--) {
    if (theVal.substr(a - 1, 1) != ' ') {
      return theVal.substr(0, a);
    }
  }
  return '';
}

function evalFunc_splitSingle(value) {
  var theVal = '' + value;
  this.values = new Array();
  this.pointer = 3;
  this.values[1] = theVal.substr(0, 2);
  this.values[2] = theVal.substr(2, 2);
  this.values[3] = theVal.substr(4, 10);
}

function evalFunc_split(value) {
  this.values = new Array();
  this.valPol = new Array();
  this.pointer = 0;
  var numberMode = 0;
  var theVal = "";
  value += " ";
  for (var a = 0; a < value.length; a++) {
    var theChar = value.substr(a, 1);
    if (theChar < "0" || theChar > "9") {
      if (numberMode) {
        this.pointer++;
        this.values[this.pointer] = theVal;
        theVal = "";
        numberMode = 0;
      }
      if (theChar == "+" || theChar == "-") {
        this.valPol[this.pointer + 1] = theChar;
      }
    } else {
      theVal += theChar;
      numberMode = 1;
    }
  }
}

function evalFunc_input(type, inVal) {
  if (type == "md5") {
    return MD5(inVal);
  }
  if (type == "trim") {
    return this.ltrim(this.btrim(inVal));
  }
  if (type == "int") {
    return this.parseInt(inVal);
  }
  if (type == "double2") {
    return this.parseDouble(inVal);
  }

  var today = new Date();
  var add = 0;
  var value = this.ltrim(inVal);
  var values = new evalFunc_split(value);
  var theCmd = value.substr(0, 1);
  value = this.caseSwitch(type, value);
  if (value == "") {
    return "";
  }
  switch (type) {
    case "datetime":
      switch (theCmd) {
        case "d":
        case "t":
        case "n":
          this.lastTime = this.convertClientTimestampToUTC(this.getTimestamp(today), 0);
          if (values.valPol[1]) {
            add = this.pol(values.valPol[1], this.parseInt(values.values[1]));
          }
          break;
        case "+":
        case "-":
          if (this.lastTime == 0) {
            this.lastTime = this.convertClientTimestampToUTC(this.getTimestamp(today), 0);
          }
          if (values.valPol[1]) {
            add = this.pol(values.valPol[1], this.parseInt(values.values[1]));
          }
          break;
        default:
          var index = value.indexOf(' ');
          if (index != -1) {
            var dateVal = this.input("date", value.substr(index, value.length));
            // set refDate so that evalFunc_input on time will work with correct DST information
            this.refDate = new Date(dateVal * 1000);
            this.lastTime = dateVal + this.input("time", value.substr(0, index));
          } else {
            // only date, no time
            this.lastTime = this.input("date", value);
          }
      }
      this.lastTime += add * 24 * 60 * 60;
      return this.lastTime;
      break;
    case "year":
      switch (theCmd) {
        case "d":
        case "t":
        case "n":
          this.lastYear = this.getYear(today);
          if (values.valPol[1]) {
            add = this.pol(values.valPol[1], this.parseInt(values.values[1]));
          }
          break;
        case "+":
        case "-":
          if (values.valPol[1]) {
            add = this.pol(values.valPol[1], this.parseInt(values.values[1]));
          }
          break;
        default:
          if (values.valPol[2]) {
            add = this.pol(values.valPol[2], this.parseInt(values.values[2]));
          }
          var year = (values.values[1]) ? this.parseInt(values.values[1]) : this.getYear(today);
          if ((year >= 0 && year < 38) || (year >= 70 && year < 100) || (year >= 1902 && year < 2038)) {
            if (year < 100) {
              year = (year < 38) ? year += 2000 : year += 1900;
            }
          } else {
            year = this.getYear(today);
          }
          this.lastYear = year;
      }
      this.lastYear += add;
      return this.lastYear;
      break;
    case "date":
      switch (theCmd) {
        case "d":
        case "t":
        case "n":
          this.lastDate = this.getTimestamp(today);
          if (values.valPol[1]) {
            add = this.pol(values.valPol[1], this.parseInt(values.values[1]));
          }
          break;
        case "+":
        case "-":
          if (values.valPol[1]) {
            add = this.pol(values.valPol[1], this.parseInt(values.values[1]));
          }
          break;
        default:
          var index = 4;
          if (values.valPol[index]) {
            add = this.pol(values.valPol[index], this.parseInt(values.values[index]));
          }
          if (values.values[1] && values.values[1].length > 2) {
            if (values.valPol[2]) {
              add = this.pol(values.valPol[2], this.parseInt(values.values[2]));
            }
            var temp = values.values[1];
            values = new evalFunc_splitSingle(temp);
          }

          var year = (values.values[3]) ? this.parseInt(values.values[3]) : this.getYear(today);
          if ((year >= 0 && year < 38) || (year >= 70 && year < 100) || (year >= 1902 && year < 2038)) {
            if (year < 100) {
              year = (year < 38) ? year += 2000 : year += 1900;
            }
          } else {
            year = this.getYear(today);
          }
          var month = (values.values[this.USmode ? 1 : 2]) ? this.parseInt(values.values[this.USmode ? 1 : 2]) : today.getUTCMonth() + 1;
          var day = (values.values[this.USmode ? 2 : 1]) ? this.parseInt(values.values[this.USmode ? 2 : 1]) : today.getUTCDate();

          var theTime = new Date(parseInt(year), parseInt(month) - 1, parseInt(day));

          // Substract timezone offset from client
          this.lastDate = this.convertClientTimestampToUTC(this.getTimestamp(theTime), 0);
      }
      this.lastDate += add * 24 * 60 * 60;
      return this.lastDate;
      break;
    case "time":
    case "timesec":
      switch (theCmd) {
        case "d":
        case "t":
        case "n":
          this.lastTime = this.getTimeSecs(today);
          if (values.valPol[1]) {
            add = this.pol(values.valPol[1], this.parseInt(values.values[1]));
          }
          break;
        case "+":
        case "-":
          if (this.lastTime == 0) {
            this.lastTime = this.getTimeSecs(today);
          }
          if (values.valPol[1]) {
            add = this.pol(values.valPol[1], this.parseInt(values.values[1]));
          }
          break;
        default:
          var index = (type == "timesec") ? 4 : 3;
          if (values.valPol[index]) {
            add = this.pol(values.valPol[index], this.parseInt(values.values[index]));
          }
          if (values.values[1] && values.values[1].length > 2) {
            if (values.valPol[2]) {
              add = this.pol(values.valPol[2], this.parseInt(values.values[2]));
            }
            var temp = values.values[1];
            values = new evalFunc_splitSingle(temp);
          }
          var sec = (values.values[3]) ? this.parseInt(values.values[3]) : today.getUTCSeconds();
          if (sec > 59) {
            sec = 59;
          }
          var min = (values.values[2]) ? this.parseInt(values.values[2]) : today.getUTCMinutes();
          if (min > 59) {
            min = 59;
          }
          var hour = (values.values[1]) ? this.parseInt(values.values[1]) : today.getUTCHours();
          if (hour >= 24) {
            hour = 0;
          }

          var theTime = new Date(this.getYear(this.refDate), this.refDate.getUTCMonth(), this.refDate.getUTCDate(), hour, min, ((type == "timesec") ? sec : 0));

          // Substract timezone offset from client
          this.lastTime = this.convertClientTimestampToUTC(this.getTimestamp(theTime), 1);
      }
      this.lastTime += add * 60;
      if (this.lastTime < 0) {
        this.lastTime += 24 * 60 * 60;
      }
      return this.lastTime;
      break;
    default:
      return value;
  }
}

function evalFunc_output(type, value, FObj) {
  var theString = "";
  switch (type) {
    case "date":
      if (!parseInt(value)) {
        return '';
      }
      var theTime = new Date(parseInt(value) * 1000);
      if (this.USmode) {
        theString = (theTime.getUTCMonth() + 1) + '-' + theTime.getUTCDate() + '-' + this.getYear(theTime);
      } else {
        theString = theTime.getUTCDate() + '-' + (theTime.getUTCMonth() + 1) + '-' + this.getYear(theTime);
      }
      break;
    case "datetime":
      if (!parseInt(value)) {
        return '';
      }
      theString = this.output("time", value) + ' ' + this.output("date", value);
      break;
    case "time":
    case "timesec":
      if (!parseInt(value)) {
        return '';
      }
      var theTime = new Date(parseInt(value) * 1000);
      var h = theTime.getUTCHours();
      var m = theTime.getUTCMinutes();
      var s = theTime.getUTCSeconds();
      theString = h + ':' + ((m < 10) ? '0' : '') + m + ((type == "timesec") ? ':' + ((s < 10) ? '0' : '') + s : '');
      break;
    case "password":
      theString = (value) ? "********" : "";
      break;
    case "int":
      theString = (FObj.checkbox && value == FObj.checkboxValue) ? '' : value;
      break;
    default:
      theString = value;
  }
  return theString;
}

function evalFunc_getSecs(timeObj) {
  return timeObj.getUTCSeconds();
}

// Seconds since midnight:
function evalFunc_getTime(timeObj) {
  return timeObj.getUTCHours() * 60 * 60 + timeObj.getUTCMinutes() * 60 + this.getSecs(timeObj);
}

function evalFunc_getYear(timeObj) {
  return timeObj.getUTCFullYear();
}

// Seconds since midnight with client timezone offset:
function evalFunc_getTimeSecs(timeObj) {
  return timeObj.getHours() * 60 * 60 + timeObj.getMinutes() * 60 + timeObj.getSeconds();
}

function evalFunc_getDate(timeObj) {
  var theTime = new Date(this.getYear(timeObj), timeObj.getUTCMonth(), timeObj.getUTCDate());
  return this.getTimestamp(theTime);
}

function evalFunc_dummy(evallist, is_in, checkbox, checkboxValue) {
  this.evallist = evallist;
  this.is_in = is_in;
  this.checkboxValue = checkboxValue;
  this.checkbox = checkbox;
}

function evalFunc_splitStr(theStr1, delim, index) {
  var theStr = '' + theStr1;
  var lengthOfDelim = delim.length;
  sPos = -lengthOfDelim;
  if (index < 1) {
    index = 1;
  }
  for (a = 1; a < index; a++) {
    sPos = theStr.indexOf(delim, sPos + lengthOfDelim);
    if (sPos == -1) {
      return null;
    }
  }
  ePos = theStr.indexOf(delim, sPos + lengthOfDelim);
  if (ePos == -1) {
    ePos = theStr.length;
  }
  return (theStr.substring(sPos + lengthOfDelim, ePos));
}

function evalFunc_getTimestamp(timeObj) {
  return Date.parse(timeObj) / 1000;
}

// Substract timezone offset from client to a timestamp to get UTC-timestamp to be send to server
function evalFunc_convertClientTimestampToUTC(timestamp, timeonly) {
  var timeObj = new Date(timestamp * 1000);
  timeObj.setTime((timestamp - timeObj.getTimezoneOffset() * 60) * 1000);
  if (timeonly) {
    // only seconds since midnight
    return this.getTime(timeObj);
  } else {
    // seconds since the "unix-epoch"
    return this.getTimestamp(timeObj);
  }
}

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */


/**
 * common storage and global object, could later hold more information about the current user etc.
 */
var TYPO3 = TYPO3 || {};

/**
 * jump the backend to a module
 */
function jump(url, modName, mainModName, pageId) {
  if (isNaN(pageId)) {
    pageId = -2;
  }
  // clear information about which entry in nav. tree that might have been highlighted.
  top.fsMod.navFrameHighlightedID = [];
  top.fsMod.recentIds['web'] = pageId;

  top.nextLoadModuleUrl = url;
  top.TYPO3.ModuleMenu.App.showModule(modName);
}

/**
 * Function similar to PHPs  rawurlencode();
 */
function rawurlencode(str) {
  var output = encodeURIComponent(str);
  output = str_replace("*", "%2A", output);
  output = str_replace("+", "%2B", output);
  output = str_replace("/", "%2F", output);
  output = str_replace("@", "%40", output);
  return output;
}


/**
 * String-replace function
 */
function str_replace(match, replace, string) {	//
  var input = "" + string;
  var matchStr = "" + match;
  if (!matchStr) {
    return string;
  }
  var output = "";
  var pointer = 0;
  var pos = input.indexOf(matchStr);
  while (pos !== -1) {
    output += "" + input.substr(pointer, pos - pointer) + replace;
    pointer = pos + matchStr.length;
    pos = input.indexOf(match, pos + 1);
  }
  output += "" + input.substr(pointer);
  return output;
}


/**
 * Launcing information window for records/files (fileref as "table" argument)
 */
function launchView(table, uid) {
  var thePreviewWindow = window.open(TYPO3.settings.ShowItem.moduleUrl + '&table=' + encodeURIComponent(table) + "&uid=" + encodeURIComponent(uid),
    "ShowItem" + TS.uniqueID,
    "width=650,height=600,status=0,menubar=0,resizable=0,location=0,directories=0,scrollbars=1,toolbar=0");
  if (thePreviewWindow && thePreviewWindow.focus) {
    thePreviewWindow.focus();
  }
}

/**
 * Opens plain window with url
 */
function openUrlInWindow(url, windowName) {	//
  regularWindow = window.open(
    url,
    windowName,
    "status=1,menubar=1,resizable=1,location=1,directories=0,scrollbars=1,toolbar=1");
  regularWindow.focus();
  return false;
}

/**
 * Loads a page id for editing in the page edit module:
 */
function loadEditId(id, addGetVars) {	//
  top.fsMod.recentIds.web = id;
  top.fsMod.navFrameHighlightedID.web = "pages" + id + "_0";		// For highlighting

  if (top.nav_frame && top.nav_frame.refresh_nav) {
    top.nav_frame.refresh_nav();
  }
  if (TYPO3.configuration.pageModule) {
    top.goToModule(TYPO3.configuration.pageModule, 0, addGetVars ? addGetVars : "");
  }
}

/**
 * Returns incoming URL (to a module) unless nextLoadModuleUrl is set. If that is the case nextLoadModuleUrl is returned (and cleared)
 * Used by the shortcut frame to set a "intermediate URL"
 */
var nextLoadModuleUrl = "";

function getModuleUrl(inUrl) {	//
  var nMU;
  if (top.nextLoadModuleUrl) {
    nMU = top.nextLoadModuleUrl;
    top.nextLoadModuleUrl = "";
    return nMU;
  } else {
    return inUrl;
  }
}


// Backwards-compatible layer for "old" ExtJS-based code
// which was in use (top.content) before TYPO3 8.4. Now, the direct "top.nav_frame" and "top.list_frame"
// calls do work directly.
// @deprecated since TYPO3 v8, will be removed in TYPO3 v9, this functionality will be removed in TYPO3 v9.
$(document).on('ready', function() {
  top.content = {
    list_frame: top.list_frame,
    nav_frame: top.nav_frame
  };
  // top.nav.refresh() is currently used by the clickmenu inline JS code, and can be removed afterwards
  top.nav = {
    refresh: function() {
      if (top.nav_frame && top.nav_frame.refresh_nav) {
        top.nav_frame.refresh_nav();
      } else if (top.TYPO3.Backend && top.TYPO3.Backend.NavigationContainer.PageTree) {
        top.TYPO3.Backend.NavigationContainer.PageTree.refreshTree();
      }
    }
  };
});

// Used by Frameset Modules
var currentSubScript = "";

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
Ext.namespace('TYPO3.Components.PageTree');

/**
 * @class TYPO3.Components.PageTree.TreeEditor
 *
 * Custom Tree Editor implementation to enable different source fields for the
 * editable label.
 *
 * @namespace TYPO3.Components.PageTree
 * @extends Ext.tree.TreeEditor
 */
TYPO3.Components.PageTree.TreeEditor = Ext.extend(Ext.tree.TreeEditor, {
  /**
   * Don't send any save events if the value wasn't changed
   *
   * @type {Boolean}
   */
  ignoreNoChange: false,

  /**
   * Edit delay
   *
   * @type {int}
   */
  editDelay: 250,

  /**
   * Indicates if an underlying shadow should be shown
   *
   * @type {Boolean}
   */
  shadow: false,

  /**
   * Listeners
   *
   * Handles the synchronization between the edited label and the shown label.
   */
  listeners: {
    beforecomplete: function(treeEditor) {
      this.updatedValue = this.getValue();
      if (this.updatedValue === '') {
        this.cancelEdit();
        return false;
      }
      this.setValue(this.editNode.attributes.prefix + Ext.util.Format.htmlEncode(this.updatedValue) + this.editNode.attributes.suffix);
    },

    complete: {
      fn: function(treeEditor, newValue, oldValue) {
        if (newValue === oldValue) {
          this.fireEvent('canceledit', this);
          return false;
        }

        this.editNode.getOwnerTree().commandProvider.saveTitle(this.updatedValue, oldValue, this);
      }
    },

    startEdit: {
      fn: function(element, value) {
        this.field.selectText();
      }
    },

    canceledit: function() {
      var tree = this.editNode.getOwnerTree();
      if (tree.currentSelectedNode) {
        tree.currentSelectedNode.select();
      }
    }
  },

  /**
   * Updates the edit node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {String} editableText
   * @param {String} updatedNode
   * @return {void}
   */
  updateNodeText: function(node, editableText, updatedNode) {
    node.setText(node.attributes.prefix + updatedNode + node.attributes.suffix);
    node.attributes.editableText = editableText;
  },

  /**
   * Overridden method to set another editable text than the node text attribute
   *
   * @param {Ext.tree.TreeNode} node
   * @return {Boolean}
   */
  triggerEdit: function(node) {
    this.completeEdit();
    if (node.attributes.editable !== false) {
      this.editNode = node;
      if (this.tree.autoScroll) {
        Ext.fly(node.ui.getEl()).scrollIntoView(this.tree.body);
      }

      var value = node.text || '';
      if (!Ext.isGecko && Ext.isEmpty(node.text)) {
        node.setText(' ');
      }

      // TYPO3 MODIFICATION to use another attribute
      value = node.attributes.editableText;

      this.autoEditTimer = this.startEdit.defer(this.editDelay, this, [node.ui.textNode, value]);
      return false;
    }
  }
});

// XTYPE Registration
Ext.reg('TYPO3.Components.PageTree.TreeEditor', TYPO3.Components.PageTree.TreeEditor);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
Ext.namespace('TYPO3.Components.PageTree');

/**
 * @class TYPO3.Components.PageTree.Tree
 *
 * Generic Tree Panel
 *
 * @namespace TYPO3.Components.PageTree
 * @extends Ext.tree.TreePanel
 */
TYPO3.Components.PageTree.Tree = Ext.extend(Ext.tree.TreePanel, {
  /**
   * Border
   *
   * @type {Boolean}
   */
  border: false,

  /**
   * Indicates if the root node is visible
   *
   * @type {Boolean}
   */
  rootVisible: false,

  /**
   * Tree Editor Instance (Inline Edit)
   *
   * @type {TYPO3.Components.PageTree.TreeEditor}
   */
  treeEditor: null,

  /**
   * Currently Selected Node
   *
   * @type {Ext.tree.TreeNode}
   */
  currentSelectedNode: null,

  /**
   * Enable the drag and drop feature
   *
   * @cfg {Boolean}
   */
  enableDD: true,

  /**
   * Drag and Drop Group
   *
   * @cfg {String}
   */
  ddGroup: '',

  /**
   * Indicates if the label should be editable
   *
   * @cfg {Boolean}
   */
  labelEdit: true,

  /**
   * User Interface Provider
   *
   * @cfg {Ext.tree.TreeNodeUI}
   */
  uiProvider: null,

  /**
   * Data Provider
   *
   * @cfg {Object}
   */
  treeDataProvider: null,

  /**
   * Command Provider
   *
   * @cfg {Object}
   */
  commandProvider: null,

  /**
   * Id of the deletion drop zone if any
   *
   * @cfg {String}
   */
  deletionDropZoneId: '',

  /**
   * Main applicaton
   *
   * @cfg {TYPO3.Components.PageTree.App}
   */
  app: null,

  /**
   * Root Node Configuration
   *
   * @type {Object}
   */
  rootNodeConfig: {
    id: 'root',
    expanded: true,
    nodeData: {
      id: 'root'
    }
  },

  /**
   * Indicator if the control key is pressed
   *
   * @type {Boolean}
   */
  isControlPressed: false,

  /**
   * Context Node
   *
   * @type {Ext.tree.TreeNode}
   */
  t3ContextNode: null,

  /**
   * Context Information
   *
   * @type {Object}
   */
  t3ContextInfo: {
    inCopyMode: false,
    inCutMode: false
  },

  /**
   * Registered clicks for the double click feature
   *
   * @type {int}
   */
  clicksRegistered: 0,

  /**
   * Indicator if the control key was pressed
   *
   * @type {Boolean}
   */
  controlKeyPressed: false,

  /**
   * Listeners
   *
   * Event handlers that handle click events and synchronizes the label edit,
   * double click and single click events in a useful way.
   */
  listeners: {
    // single click handler that only triggers after a delay to let the double click event
    // a possibility to be executed (needed for label edit)
    click: {
      fn: function(node, event) {
        if (this.clicksRegistered === 2) {
          this.clicksRegistered = 0;
          event.stopEvent();
          return false;
        }

        if (event.target.tagName === 'IMG') {
          // Stop this event if click event was triggered via the node icon to prevent loading the action of the node
          return false;
        }

        this.clicksRegistered = 0;
        if (this.commandProvider.singleClick) {
          this.commandProvider.singleClick(node, this);
        }
      },
      delay: 400
    },

    // prevent the expanding / collapsing on double click
    beforedblclick: {
      fn: function() {
        return false;
      }
    },

    // prevents label edit on a selected node
    beforeclick: {
      fn: function(node, event) {
        if (event.target.tagName === 'IMG') {
          // Node icon was clicked
          // This is a workaround to prevent TreeEditor being triggered, which also requires a patch within TreeEditor
          node.attributes.editable = false;
        } else {
          node.attributes.editable = node.attributes.editableDefault;

          if (!this.clicksRegistered && this.getSelectionModel().isSelected(node)) {
            node.fireEvent('click', node, event);
            ++this.clicksRegistered;
            return false;
          }
          ++this.clicksRegistered;
        }
      }
    }
  },

  /**
   * Initializes the component
   *
   * @return {void}
   */
  initComponent: function() {
    if (!this.uiProvider) {
      this.uiProvider = TYPO3.Components.PageTree.PageTreeNodeUI;
    }
    Ext.dd.DragDropMgr.useCache = false;
    this.root = new Ext.tree.AsyncTreeNode(this.rootNodeConfig);
    this.addTreeLoader();

    if (this.labelEdit) {
      this.enableInlineEditor();
    }

    if (this.enableDD) {
      this.dragConfig = {ddGroup: this.ddGroup};
      this.enableDragAndDrop();
    }
    this.on('contextmenu', function(node, event) {
      require(['TYPO3/CMS/Backend/ContextMenu'], function(ContextMenu) {
        var parameters = 'context=tree&table=pages&uid=' + node.attributes.nodeData.id;
        ContextMenu.record = {table: 'pages', uid: node.attributes.nodeData.id};
        ContextMenu.fetch(parameters);
      });
    });
    TYPO3.Components.PageTree.Tree.superclass.initComponent.apply(this, arguments);
  },

  /**
   * Refreshes the tree
   *
   * @param {Function} callback
   * @param {Object} scope
   * return {void}
   */
  refreshTree: function(callback, scope) {
    // remove readable rootline elements while refreshing
    if (!this.inRefreshingMode) {
      var rootlineElements = Ext.select('.x-tree-node-readableRootline');
      if (rootlineElements) {
        rootlineElements.each(function(element) {
          element.remove();
        });
      }
    }

    this.refreshNode(this.root, callback, scope);
  },

  /**
   * Refreshes a given node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {Function} callback
   * @param {Object} scope
   * return {void}
   */
  refreshNode: function(node, callback, scope) {
    if (this.inRefreshingMode) {
      return;
    }

    scope = scope || node;
    this.inRefreshingMode = true;
    var loadCallback = function(node) {
      node.ownerTree.inRefreshingMode = false;
      if (node.ownerTree.restoreState) {
        node.ownerTree.restoreState(node.getPath());
      }
    };

    if (callback) {
      loadCallback = callback.createSequence(loadCallback);
    }

    this.getLoader().load(node, loadCallback, scope);
  },

  /**
   * Selects the given node in the tree and stores this
   * selection in various states, so that selection is kept when tree
   * is reloaded.
   *
   * @param {Ext.tree.TreeNode} node
   */
  selectNode: function(node) {
    node.select();
    this.currentSelectedNode = node;
    if (this.stateHash) {
      this.stateHash.lastSelectedNode = node.id;
    }
    fsMod.recentIds['web'] = node.attributes.nodeData.id;
  },

  /**
   * Adds a tree loader implementation that uses the directFn feature
   *
   * return {void}
   */
  addTreeLoader: function() {
    this.loader = new Ext.tree.TreeLoader({
      directFn: this.treeDataProvider.getNextTreeLevel,
      paramOrder: 'nodeId,attributes',
      nodeParameter: 'nodeId',
      baseAttrs: {
        uiProvider: this.uiProvider
      },

      // an id can never be zero in ExtJS, but this is needed
      // for the root line feature or it will never be working!
      createNode: function(attr) {
        if (attr.id == 0) {
          attr.id = 'siteRootNode';
        }

        // nodes editable state needs to be forced to false at times
        // so we need to store the original value to revert back to
        attr.editableDefault = attr.editable;

        return Ext.tree.TreeLoader.prototype.createNode.call(this, attr);
      },

      listeners: {
        beforeload: function(treeLoader, node) {
          treeLoader.baseParams.nodeId = node.id;
          treeLoader.baseParams.attributes = node.attributes.nodeData;
        }
      }
    });
  },

  /**
   * Initialize the inline editor for the given tree.
   *
   * @return {void}
   */
  enableInlineEditor: function() {
    this.treeEditor = new TYPO3.Components.PageTree.TreeEditor(this);
  },

  /**
   * Triggers the editing of the node if the tree editor is available
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  triggerEdit: function(node) {
    if (this.treeEditor) {
      this.treeEditor.triggerEdit(node);
    }
  },

  /**
   * Enables the drag and drop feature
   *
   * return {void}
   */
  enableDragAndDrop: function() {
    // init proxy element
    this.on('startdrag', this.initDd, this);
    this.on('enddrag', this.stopDd, this);
    this.on('nodedragover', this.nodeDragOver, this);

    // node is moved
    this.on('movenode', this.moveNode, this);

    // new node is created/copied
    this.on('beforenodedrop', this.beforeDropNode, this);
    this.on('nodedrop', this.dropNode, this);

    // listens on the ctrl key to toggle the copy mode
    (new Ext.KeyMap(document, {
      key: Ext.EventObject.CONTROL,
      scope: this,
      buffer: 250,
      fn: function() {
        if (!this.controlKeyPressed && this.dragZone.dragging && this.copyHint) {
          if (this.shouldCopyNode) {
            this.copyHint.show();
          } else {
            this.copyHint.hide();
          }

          this.shouldCopyNode = !this.shouldCopyNode;
          this.dragZone.proxy.el.toggleClass('typo3-pagetree-copy');
        }
        this.controlKeyPressed = true;
      }
    }, 'keydown'));

    (new Ext.KeyMap(document, {
      key: Ext.EventObject.CONTROL,
      scope: this,
      fn: function() {
        this.controlKeyPressed = false;
      }
    }, 'keyup'));

    // listens on the escape key to stop the dragging
    (new Ext.KeyMap(document, {
      key: Ext.EventObject.ESC,
      scope: this,
      buffer: 250,
      fn: function(event) {
        if (this.dragZone.dragging) {
          Ext.dd.DragDropMgr.stopDrag(event);
          this.dragZone.onInvalidDrop(event);
        }
      }
    }, 'keydown'));
  },

  /**
   * Disables the deletion drop zone if configured
   *
   * @return {void}
   */
  stopDd: function() {
    if (this.deletionDropZoneId) {
      Ext.getCmp(this.deletionDropZoneId).hide();
      this.app.doLayout();
    }
  },

  /**
   * Enables the deletion drop zone if configured. Also it creates the
   * shown dd proxy element.
   *
   * @param {TYPO3.Components.PageTree.Tree} treePanel
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  initDd: function(treePanel, node) {
    var nodeHasChildNodes = (node.hasChildNodes() || node.isExpandable());
    if (this.deletionDropZoneId && node.attributes.canBeRemoved &&
      (!nodeHasChildNodes ||
        (nodeHasChildNodes && TYPO3.Components.PageTree.Configuration.canDeleteRecursivly)
      )) {
      Ext.getCmp(this.deletionDropZoneId).show();
      this.app.doLayout();
    }
    this.initDDProxyElement();
  },

  /**
   * Adds the copy hint to the proxy element
   *
   * @return {void}
   */
  initDDProxyElement: function() {
    this.shouldCopyNode = false;
    this.copyHint = new Ext.Element(document.createElement('div')).addClass(this.id + '-copy');
    this.copyHint.dom.appendChild(document.createTextNode(TYPO3.Components.PageTree.LLL.copyHint));
    this.copyHint.setVisibilityMode(Ext.Element.DISPLAY);
    this.dragZone.proxy.el.shadow = false;
    this.dragZone.proxy.ghost.dom.appendChild(this.copyHint.dom);
  },

  /**
   * Cancels the drop possibility for the position above and below a mount page
   *
   * @param {Object} event
   * @return {void}
   */
  nodeDragOver: function(event) {
    var isMountPage = (event.target.attributes.realId == 0 || event.target.attributes.nodeData.isMountPoint);
    return !((event.point === 'above' || event.point === 'below') && isMountPage);
  },

  /**
   * Creates a Fake Node
   *
   * This must be done to prevent the calling of the moveNode event.
   *
   * @param {Object} dragElement
   */
  beforeDropNode: function(dragElement) {
    if (dragElement.data && dragElement.data.item && dragElement.data.item.shouldCreateNewNode) {
      this.t3ContextInfo.serverNodeType = dragElement.data.item.nodeType;
      dragElement.dropNode = new Ext.tree.TreeNode({
        text: TYPO3.Components.PageTree.LLL.fakeNodeHint,
        leaf: true,
        isInsertedNode: true
      });

      // fix incorrect cancel value
      dragElement.cancel = false;

    } else if (this.shouldCopyNode) {
      dragElement.dropNode.ui.onOut();
      var attributes = dragElement.dropNode.attributes;
      attributes.isCopiedNode = true;
      attributes.id = 'fakeNode';
      dragElement.dropNode = new Ext.tree.TreeNode(attributes);
    }

    return true;
  },

  /**
   * Differentiate between the copy and insert event
   *
   * @param {Ext.tree.TreeDropZone} dragElement
   * return {void}
   */
  dropNode: function(dragElement) {
    this.controlKeyPressed = false;
    if (dragElement.dropNode.attributes.isInsertedNode) {
      dragElement.dropNode.attributes.isInsertedNode = false;
      this.insertNode(dragElement.dropNode);
    } else if (dragElement.dropNode.attributes.isCopiedNode) {
      dragElement.dropNode.attributes.isCopiedNode = false;
      this.copyNode(dragElement.dropNode)
    }
  },

  /**
   * Moves a node
   *
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @param {Ext.tree.TreeNode} movedNode
   * @param {Ext.tree.TreeNode} oldParent
   * @param {Ext.tree.TreeNode} newParent
   * @param {int} position
   * return {void}
   */
  moveNode: function(tree, movedNode, oldParent, newParent, position) {
    this.controlKeyPressed = false;
    tree.t3ContextNode = movedNode;

    if (position === 0) {
      this.commandProvider.moveNodeToFirstChildOfDestination(newParent, tree);
    } else {
      var previousSiblingNode = newParent.childNodes[position - 1];
      this.commandProvider.moveNodeAfterDestination(previousSiblingNode, tree);
    }
  },

  /**
   * Inserts a node
   *
   * @param {Ext.tree.TreeNode} movedNode
   * return {void}
   */
  insertNode: function(movedNode) {
    this.t3ContextNode = movedNode.parentNode;

    movedNode.disable();
    if (movedNode.previousSibling) {
      this.commandProvider.insertNodeAfterDestination(movedNode, this);
    } else {
      this.commandProvider.insertNodeToFirstChildOfDestination(movedNode, this);
    }
  },

  /**
   * Copies a node
   *
   * @param {Ext.tree.TreeNode} movedNode
   * return {void}
   */
  copyNode: function(movedNode) {
    this.t3ContextNode = movedNode;

    movedNode.disable();

    // This is hard stuff to do. So increase the timeout for the AJAX request
    Ext.Ajax.timeout = 3600000;

    if (movedNode.previousSibling) {
      this.commandProvider.copyNodeAfterDestination(movedNode, this);
    } else {
      this.commandProvider.copyNodeToFirstChildOfDestination(movedNode, this);
    }
  }
});

// XTYPE Registration
Ext.reg('TYPO3.Components.PageTree.Tree', TYPO3.Components.PageTree.Tree);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
Ext.namespace('TYPO3.Components.PageTree');

/**
 * @class TYPO3.Components.PageTree.FilteringTree
 *
 * Filtering Tree
 *
 * @namespace TYPO3.Components.PageTree
 * @extends TYPO3.Components.PageTree.Tree
 */
TYPO3.Components.PageTree.FilteringTree = Ext.extend(TYPO3.Components.PageTree.Tree, {
  /**
   * Search word
   *
   * @type {String}
   */
  searchWord: '',

  /**
   * Tree loader implementation for the filtering tree
   *
   * @return {void}
   */
  addTreeLoader: function() {
    this.loader = new Ext.tree.TreeLoader({
      directFn: this.treeDataProvider.getFilteredTree,
      paramOrder: 'nodeId,attributes,searchWord',
      nodeParameter: 'nodeId',
      baseAttrs: {
        uiProvider: this.uiProvider
      },

      listeners: {
        beforeload: function(treeLoader, node) {
          if (!node.ownerTree.searchWord || node.ownerTree.searchWord === '') {
            return false;
          }

          treeLoader.baseParams.nodeId = node.id;
          treeLoader.baseParams.searchWord = node.ownerTree.searchWord;
          treeLoader.baseParams.attributes = node.attributes.nodeData;
        }
      }
    });
  }
});

// XTYPE Registration
Ext.reg('TYPO3.Components.PageTree.FilteringTree', TYPO3.Components.PageTree.FilteringTree);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
Ext.namespace('TYPO3.Components.PageTree');

/**
 * @class TYPO3.Components.PageTree.DeletionDropZone
 *
 * Tree Node User Interface that can handle sprite icons and more
 *
 * @namespace TYPO3.Components.PageTree
 * @extends Ext.tree.TreeNodeUI
 */
TYPO3.Components.PageTree.PageTreeNodeUI = Ext.extend(Ext.tree.TreeNodeUI, {
  /**
   * Adds the sprite icon and adds an event to open the context menu on a single click at the icon node
   *
   * @param {Ext.tree.TreeNode} n
   * @param {Object} a
   * @param {Ext.tree.TreeNode} targetNode
   * @param {Boolean} bulkRender
   * @return {void}
   */
  renderElements: function(n, a, targetNode, bulkRender) {
    // add some indent caching, this helps performance when rendering a large tree
    this.indentMarkup = n.parentNode ? n.parentNode.ui.getChildIndent() : '';

    var cb = Ext.isBoolean(a.checked),
      nel,
      href = this.getHref(a.href),
      nodeStyles = '',
      rootline = '';

    // TYPO3 modification to show the readable rootline above the user mounts
    if (a.readableRootline !== '') {
      rootline = '<li class="x-tree-node-readableRootline">' + a.readableRootline + '</li>';
    }

    if (a.nodeData.backgroundColor) {
      nodeStyles = 'style="background-color: ' + a.nodeData.backgroundColor + '"';
    }

    var buf = [
      rootline,
      '<li class="x-tree-node" ' + nodeStyles + '><div ext:tree-node-id="', n.id, '" class="x-tree-node-el x-tree-node-leaf x-unselectable ', a.cls, '" unselectable="on">',
      '<span class="x-tree-node-indent">', this.indentMarkup, "</span>",
      '<img alt="" src="', this.emptyIcon, '" class="x-tree-ec-icon x-tree-elbow" />',
//            '<img alt="" src="', a.icon || this.emptyIcon, '" class="x-tree-node-icon',(a.icon ? " x-tree-node-inline-icon" : ""),(a.iconCls ? " "+a.iconCls : ""),'" unselectable="on" />',
      '<span class="t3js-contextmenutrigger" data-table="pages" data-uid="' + a.nodeData.id + '" data-context="tree" >' + a.spriteIconCode + '</span>', // TYPO3: add sprite icon code
      (a.nodeData.stopPageTree ? '<span class="text-danger">+</span>' : ''),
      cb ? ('<input class="x-tree-node-cb" type="checkbox" ' + (a.checked ? 'checked="checked" />' : '/>')) : '',
      '<a hidefocus="on" class="x-tree-node-anchor" href="', href, '" tabIndex="1" ',
      a.hrefTarget ? ' target="' + a.hrefTarget + '"' : "", '><span unselectable="on">', n.text, "</span></a></div>",
      '<ul class="x-tree-node-ct" style="display:none;"></ul>',
      "</li>"
    ].join('');

    if (bulkRender !== true && n.nextSibling && (nel = n.nextSibling.ui.getEl())) {
      this.wrap = Ext.DomHelper.insertHtml("beforeBegin", nel, buf);
    } else {
      this.wrap = Ext.DomHelper.insertHtml("beforeEnd", targetNode, buf);
    }

    this.elNode = this.wrap.childNodes[0];
    this.ctNode = this.wrap.childNodes[1];
    var cs = this.elNode.childNodes;
    this.indentNode = cs[0];
    this.ecNode = cs[1];
//        this.iconNode = cs[2];
    this.iconNode = (cs[2].firstChild.tagName === 'SPAN' ? cs[2].firstChild : cs[2]); // TYPO3: get possible overlay icon
    var index = 3; // TYPO3: index 4?
    if (cb) {
      this.checkbox = cs[3];
      // fix for IE6
      this.checkbox.defaultChecked = this.checkbox.checked;
      index++;
    }
    this.anchor = cs[index];
    this.textNode = cs[index].firstChild;
  },

  /**
   * Adds a quick tip to the sprite icon
   *
   * @param {Ext.tree.TreeNode} node
   * @param {Object} tip
   * @param {String} title
   * @return {void}
   */
  onTipChange: function(node, tip, title) {
    TYPO3.Components.PageTree.PageTreeNodeUI.superclass.onTipChange.apply(this, arguments);

    if (this.rendered) {
      var hasTitle = Ext.isDefined(title);
      if (this.iconNode.setAttributeNS) {
        this.iconNode.setAttributeNS('ext', 'data-toggle', 'tooltip');
        this.iconNode.setAttributeNS('ext', 'data-title', tip);
        this.iconNode.setAttributeNS('ext', 'data-html', 'true');
        this.iconNode.setAttributeNS('ext', 'data-placement', 'right');
        if (hasTitle) {
          this.iconNode.setAttributeNS("ext", "qtitle", title);
        }
      } else {
        this.iconNode.setAttribute("ext:qtip", tip);
        this.iconNode.setAttribute('ext:data-toggle', 'tooltip');
        this.iconNode.setAttribute('ext:data-title', tip);
        this.iconNode.setAttribute('ext:data-html', 'true');
        this.iconNode.setAttribute('ext:data-placement', 'right');
        if (hasTitle) {
          this.iconNode.setAttribute("ext:qtitle", title);
        }
      }
      $(this.iconNode).tooltip();
    }
  },

  /**
   * Returns the drag and drop handles
   *
   * @return {Object}
   */
  getDDHandles: function() {
    var ddHandles = [this.iconNode, this.textNode, this.elNode];
    var handlesIndex = ddHandles.length;

    var textNode = Ext.get(this.textNode);
    for (var i = 0; i < textNode.dom.childNodes.length; ++i) {
      if (textNode.dom.childNodes[i].nodeName === 'SPAN') {
        ddHandles[handlesIndex++] = textNode.dom.childNodes[i];
      }
    }

    return ddHandles;
  },

  /**
   * Only set the onOver class if we are not in dragging mode
   *
   * @return {void}
   */
  onOver: function() {
    if (!this.node.ownerTree.dontSetOverClass) {
      TYPO3.Components.PageTree.PageTreeNodeUI.superclass.onOver.apply(this, arguments);
    }
  }
});

// XTYPE Registration
Ext.reg('TYPO3.Components.PageTree.PageTreeNodeUI', TYPO3.Components.PageTree.PageTreeNodeUI);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
Ext.namespace('TYPO3.Components.PageTree');

/**
 * @class TYPO3.Components.PageTree.DeletionDropZone
 *
 * Deletion Drop Zone
 *
 * @namespace TYPO3.Components.PageTree
 * @extends Ext.Panel
 */
TYPO3.Components.PageTree.DeletionDropZone = Ext.extend(Ext.Panel, {
  /**
   * Border
   *
   * @type {Boolean}
   */
  border: true,

  /**
   * Hide the drop zone initially
   *
   * @type {Boolean}
   */
  hidden: true,

  /**
   * Command Provider
   *
   * @cfg {Object}
   */
  commandProvider: null,

  /**
   * Drag and Drop Group
   *
   * @cfg {String}
   */
  ddGroup: '',

  /**
   * Main Application
   *
   * @cfg {TYPO3.Components.PageTree.App}
   */
  app: null,

  /**
   * Removed node had a previous sibling
   *
   * @type {Boolean}
   */
  isPreviousSibling: false,

  /**
   * Removed node
   *
   * @type {Ext.tree.TreeNode}
   */
  previousNode: null,

  /**
   * Click Handler for the recovery text
   *
   * @type {Function}
   */
  textClickHandler: null,

  /**
   * Amount of drops (used to prevent early hiding of the box)
   *
   * @type {int}
   */
  amountOfDrops: 0,

  /**
   * Listeners
   *
   * The "afterrender" event creates the drop zone
   */
  listeners: {
    afterrender: {
      fn: function() {
        this.createDropZone();

        this.getEl().on('mouseout', function(e) {
          if (!e.within(this.getEl(), true)) {
            this.removeClass(this.id + '-activateProxyOver');
            if (!this.app.activeTree.shouldCopyNode) {
              this.app.activeTree.copyHint.show();
            }
          }
        }, this);
      }
    },

    beforehide: {
      fn: function() {
        if (this.textClickHandler) {
          return false;
        }
      }
    }
  },

  /**
   * Initializes the component
   *
   * @return {void}
   */
  initComponent: function() {
    this.html = '<p><span id="' + this.id + '-icon">' + TYPO3.Components.PageTree.Icons.TrashCan + '</span><span id="' + this.id + '-text">' +
      TYPO3.Components.PageTree.LLL.dropToRemove + '</span></p>';

    TYPO3.Components.PageTree.DeletionDropZone.superclass.initComponent.apply(this, arguments);
  },


  /**
   * Creates the drop zone and it's functionality
   *
   * @return {void}
   */
  createDropZone: function() {
    (new Ext.dd.DropZone(this.getEl(), {
      ddGroup: this.ddGroup,

      notifyOver: function(ddProxy, e) {
        ddProxy.setDragElPos(e.xy[0], e.xy[1] - 60);
        return this.id + '-proxyOver';
      }.createDelegate(this),

      notifyEnter: function() {
        this.addClass(this.id + '-activateProxyOver');
        if (!this.app.activeTree.shouldCopyNode) {
          this.app.activeTree.copyHint.hide();
        }

        return this.id + '-proxyOver';
      }.createDelegate(this),

      notifyDrop: function(ddProxy, e, n) {
        var node = n.node;
        if (!node) {
          return;
        }

        var tree = node.ownerTree;
        var nodeHasChildNodes = (node.hasChildNodes() || node.isExpandable());

        var callback = null;
        if (!top.TYPO3.configuration.inWorkspace && !nodeHasChildNodes) {
          callback = this.setRecoverState.createDelegate(this);
        }

        if (nodeHasChildNodes) {
          node.ownerTree.commandProvider.confirmDelete(node, tree, callback, true);
        } else {
          node.ownerTree.commandProvider.deleteNode(node, tree, callback);
        }
      }.createDelegate(this)
    }));
  },

  /**
   * Sets the drop zone into the recovery state
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @param {Boolean} succeeded
   * @return {void}
   */
  setRecoverState: function(node, tree, succeeded) {
    if (!succeeded) {
      this.toOriginState();
      return;
    }

    this.show();
    this.setHeight(50);
    this.updateIcon(TYPO3.Components.PageTree.Icons.TrashCanRestore);
    this.updateText(
      node.text + '<br />' +
      '<span class="' + this.id + '-restore">' +
      '<span class="' + this.id + '-restoreText">' +
      TYPO3.Components.PageTree.LLL.dropZoneElementRemoved +
      '</span>' +
      '</span>',
      false
    );
    this.app.doLayout();

    ++this.amountOfDrops;
    (function() {
      if (!--this.amountOfDrops) {
        this.toOriginState();
      }
    }).defer(10000, this);

    this.textClickHandler = this.restoreNode.createDelegate(this, [node, tree]);
    Ext.get(this.id + '-text').on('click', this.textClickHandler);

    this.isPreviousSibling = false;
    this.previousNode = node.parentNode;
    if (node.previousSibling) {
      this.previousNode = node.previousSibling;
      this.isPreviousSibling = true;
    }
  },

  /**
   * Updates the drop zone text label
   *
   * @param {String} text
   * @param {Boolean} animate
   * @return {void}
   */
  updateText: function(text, animate) {
    animate = animate || false;

    var elementText = Ext.get(this.id + '-text');
    if (animate) {
      elementText.animate({opacity: {to: 0}}, 1, function(elementText) {
        elementText.update(text);
        elementText.setStyle('opacity', 1);
      });
    } else {
      elementText.update(text);
    }
  },

  /**
   * Updates the drop zone icon with another icon
   *
   * @param {String} icon
   * @return {void}
   */
  updateIcon: function(icon) {
    Ext.get(this.id + '-icon').update(icon);
  },

  /**
   * Resets the drop zone to the initial state
   *
   * @param {Boolean} hide
   * @return {void}
   */
  toOriginState: function(hide) {
    if (hide !== false) {
      hide = true;
    }

    Ext.get(this.id + '-text').un('click', this.textClickHandler);
    this.previousNode = this.textClickHandler = null;
    this.isPreviousSibling = false;

    if (hide && !this.app.activeTree.dragZone.dragging) {
      this.hide();
    }

    this.setHeight(35);
    this.updateText(TYPO3.Components.PageTree.LLL.dropToRemove, false);
    this.updateIcon(TYPO3.Components.PageTree.Icons.TrashCan);
    this.app.doLayout();
  },

  /**
   * Restores the last removed node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  restoreNode: function(node, tree) {
    if (this.isPreviousSibling) {
      this.commandProvider.restoreNodeAfterDestination(node, tree, this.previousNode);
    } else {
      this.commandProvider.restoreNodeToFirstChildOfDestination(node, tree, this.previousNode);
    }
    this.setHeight(35);
    this.updateText(TYPO3.Components.PageTree.LLL.dropZoneElementRestored);
    this.app.doLayout();

    (function() {
      if (this.textClickHandler) {
        this.toOriginState();
      }
    }).defer(3000, this);
  }
});

// XTYPE Registration
Ext.reg('TYPO3.Components.PageTree.DeletionDropZone', TYPO3.Components.PageTree.DeletionDropZone);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
Ext.namespace('TYPO3.Components.PageTree');

/**
 * @class TYPO3.Components.PageTree.TopPanel
 *
 * Top Panel
 *
 * @namespace TYPO3.Components.PageTree
 * @extends Ext.Panel
 */
TYPO3.Components.PageTree.TopPanel = Ext.extend(Ext.Panel, {
  /**
   * Component Id
   *
   * @type {String}
   */
  id: 'typo3-pagetree-topPanel',

  /**
   * Component Class
   *
   * @type {String}
   */
  cls: 'typo3-pagetree-toppanel',

  /**
   * Border
   *
   * @type {Boolean}
   */
  border: true,

  /**
   * Toolbar Object
   *
   * @type {Ext.Toolbar}
   */
  tbar: new Ext.Toolbar(),

  /**
   * Currently Clicked Toolbar Button
   *
   * @type {Ext.Button}
   */
  currentlyClickedButton: null,

  /**
   * Currently Shown Panel
   *
   * @type {Ext.Component}
   */
  currentlyShownPanel: null,

  /**
   * Filtering Indicator Item
   *
   * @type {Ext.Panel}
   */
  filteringIndicator: null,

  /**
   * Drag and Drop Group
   *
   * @cfg {String}
   */
  ddGroup: '',

  /**
   * Data Provider
   *
   * @cfg {Object}
   */
  dataProvider: null,

  /**
   * Filtering Tree
   *
   * @cfg {TYPO3.Components.PageTree.FilteringTree}
   */
  filteringTree: null,

  /**
   * Page Tree
   *
   * @cfg {TYPO3.Components.PageTree.Tree}
   */
  tree: null,

  /**
   * Application Panel
   *
   * @cfg {TYPO3.Components.PageTree.App}
   */
  app: null,

  /**
   * Initializes the component
   *
   * @return {void}
   */
  initComponent: function() {
    this.currentlyShownPanel = new Ext.Panel({
      id: this.id + '-defaultPanel',
      cls: this.id + '-item typo3-pagetree-toppanel-item',
      border: false
    });
    this.items = [this.currentlyShownPanel];

    TYPO3.Components.PageTree.TopPanel.superclass.initComponent.apply(this, arguments);

    this.addDragDropNodeInsertionFeature();

    if (!TYPO3.Components.PageTree.Configuration.hideFilter
      || TYPO3.Components.PageTree.Configuration.hideFilter === '0'
    ) {
      this.addFilterFeature();
    }

    this.getTopToolbar().addItem({xtype: 'tbfill'});
    this.addRefreshTreeFeature();
  },

  /**
   * Returns a custom button template to fix some nasty webkit issues
   * by removing some useless wrapping html code
   *
   * @return {void}
   */
  getButtonTemplate: function() {
    return new Ext.Template(
      '<div id="{4}" class="x-btn {3}"><button type="{0}">&nbsp;</button></div>'
    );
  },

  /**
   * Adds a button to the components toolbar with a related component
   *
   * @param {Object} button
   * @param {Object} connectedWidget
   * @return {void}
   */
  addButton: function(button, connectedWidget) {
    button.template = this.getButtonTemplate();
    button.on('toggle', this.topbarButtonToggleCallback);
    if (!button.hasListener('click')) {
      button.on('click', this.topbarButtonCallback);
    }

    if (connectedWidget) {
      connectedWidget.hidden = true;
      button.connectedWidget = connectedWidget;
      this.add(connectedWidget);
    }

    this.getTopToolbar().addItem(button);
    this.doLayout();
  },

  /**
   * Toggle button state
   *
   * @return {void}
   */
  topbarButtonToggleCallback: function() {
    if (this.pressed) {
      this.el.addClass(['active']);
    } else {
      this.el.removeClass(['active']);
    }
  },

  /**
   * Usual button callback method that triggers the assigned component of the
   * clicked toolbar button
   *
   * @return {void}
   */
  topbarButtonCallback: function() {
    var topPanel = this.ownerCt.ownerCt;

    topPanel.currentlyShownPanel.hide();
    if (topPanel.currentlyClickedButton) {
      topPanel.currentlyClickedButton.toggle(false);
    }

    if (topPanel.currentlyClickedButton === this) {
      topPanel.currentlyClickedButton = null;
      topPanel.currentlyShownPanel = topPanel.get(topPanel.id + '-defaultPanel');
    } else {
      this.toggle(true);
      topPanel.currentlyClickedButton = this;
      topPanel.currentlyShownPanel = this.connectedWidget;
    }

    topPanel.currentlyShownPanel.show();
  },

  /**
   * Loads the filtering tree nodes with the given search word
   *
   * @param {Ext.form.TextField} textField
   * @return {void}
   */
  createFilterTree: function(textField) {
    var searchWord = textField.getValue();
    var isNumber = TYPO3.Utility.isNumber(searchWord);
    var hasMinLength = (searchWord.length > 2 || searchWord.length <= 0);
    if ((!hasMinLength && !isNumber) || searchWord === this.filteringTree.searchWord) {
      return;
    }

    this.filteringTree.searchWord = searchWord;
    if (this.filteringTree.searchWord === '') {
      this.app.activeTree = this.tree;
      this.tree.t3ContextNode = this.filteringTree.t3ContextNode;

      textField.setHideTrigger(true);
      this.filteringTree.hide();
      this.tree.show().refreshTree(function() {
        textField.focus(false, 500);
      }, this);

      if (this.filteringIndicator) {
        this.app.removeIndicator(this.filteringIndicator);
        this.filteringIndicator = null;
      }
    } else {
      var selectedNodeOnMainTree = this.app.getSelected();
      this.app.activeTree = this.filteringTree;

      if (!this.filteringIndicator) {
        this.filteringIndicator = this.app.addIndicator(
          this.createIndicatorItem(textField)
        );
      }

      textField.setHideTrigger(false);
      this.tree.hide();
      this.filteringTree.show().refreshTree(function() {
        if (selectedNodeOnMainTree) {
          // Try to select the currently selected node in the main tree in the filter tree
          var tree = this.app.getTree();
          var node = tree.getRootNode().findChild('realId', selectedNodeOnMainTree.attributes.nodeData.id, true);
          if (node) {
            tree.selectPath(node.getPath());
          }
        }
        textField.focus();
      }, this);
    }

    this.doLayout();
  },

  /**
   * Adds an indicator item to the page tree application for the filtering feature
   *
   * @param {Ext.form.TextField} textField
   * @return {void}
   */
  createIndicatorItem: function(textField) {
    return {
      border: false,
      id: this.app.id + '-indicatorBar-filter',
      cls: this.app.id + '-indicatorBar-item',
      html: '' +
      '<div class="alert alert-info">' +
      '<div class="media">' +
      '<div class="media-left">' +
      TYPO3.Components.PageTree.Icons.Info +
      '</div>' +
      '<div class="media-body">' +
      TYPO3.Components.PageTree.LLL.activeFilterMode +
      '</div>' +
      '<div class="media-right">' +
      '<a href="#" id="' + this.app.id + '-indicatorBar-filter-clear">' +
      TYPO3.Components.PageTree.Icons.Close +
      '</a>' +
      '</div>' +
      '</div>' +
      '</div>',
      filteringTree: this.filteringTree,

      listeners: {
        afterrender: {
          scope: this,
          fn: function() {
            var element = Ext.fly(this.app.id + '-indicatorBar-filter-clear');
            element.on('click', function() {
              textField.setValue('');
              this.createFilterTree(textField);
            }, this);
          }
        }
      }
    };
  },

  /**
   * Adds the necessary functionality and components for the filtering feature
   *
   * @return {void}
   */
  addFilterFeature: function() {
    var topPanelButton = new Ext.Button({
      id: this.id + '-button-filter',
      cls: 'btn btn-default btn-sm',
      text: TYPO3.Components.PageTree.Icons.Filter,
      tooltip: TYPO3.Components.PageTree.LLL.buttonFilter
    });

    var textField = new Ext.form.TriggerField({
      id: this.id + '-filter',
      cls: 'form-control input-sm typo3-pagetree-toppanel-filter',
      enableKeyEvents: true,
      triggerConfig: {
        tag: 'span',
        html: TYPO3.Components.PageTree.Icons.InputClear,
        cls: 'typo3-pagetree-toppanel-filter-clear'
      },
      value: TYPO3.Components.PageTree.LLL.searchTermInfo,

      listeners: {
        blur: {
          scope: this,
          fn: function(textField) {
            if (textField.getValue() === '') {
              textField.setValue(TYPO3.Components.PageTree.LLL.searchTermInfo);
              textField.addClass(this.id + '-filter-defaultText');
            }
          }
        },

        focus: {
          scope: this,
          fn: function(textField) {
            if (textField.getValue() === TYPO3.Components.PageTree.LLL.searchTermInfo) {
              textField.setValue('');
              textField.removeClass(this.id + '-filter-defaultText');
            }
          }
        },

        keydown: {
          fn: this.createFilterTree,
          scope: this,
          buffer: 1000
        }
      }
    });

    textField.setHideTrigger(true);
    textField.onTriggerClick = function() {
      textField.setValue('');
      this.createFilterTree(textField);
    }.createDelegate(this);

    var topPanelWidget = new Ext.Container({
      border: false,
      id: this.id + '-filterWrap',
      cls: this.id + '-item typo3-pagetree-toppanel-item',
      border: false,
      items: [textField],

      listeners: {
        show: {
          scope: this,
          fn: function(panel) {
            panel.get(this.id + '-filter').focus();
          }
        }
      }
    });

    this.addButton(topPanelButton, topPanelWidget);
  },

  /**
   * Creates the entries for the new node drag zone toolbar
   *
   * @return {void}
   */
  createNewNodeToolbar: function() {
    this.dragZone = new Ext.dd.DragZone(this.getEl(), {
      ddGroup: this.ownerCt.ddGroup,
      topPanel: this.ownerCt,

      endDrag: function() {
        this.topPanel.app.activeTree.dontSetOverClass = false;
      },

      getDragData: function(event) {
        this.proxyElement = document.createElement('div');
        if (event.getTarget('.x-btn') !== null) {
          var node = Ext.getCmp(event.getTarget('.x-btn').id);
          node.shouldCreateNewNode = true;
          return {
            ddel: this.proxyElement,
            item: node
          }
        }
      },

      onInitDrag: function() {
        this.topPanel.app.activeTree.dontSetOverClass = true;
        var clickedButton = this.dragData.item;

        this.proxyElement.shadow = false;
        this.proxyElement.innerHTML = '<div class="x-dd-drag-ghost-pagetree">' +
          '<span class="x-dd-drag-ghost-pagetree-icon">' + clickedButton.initialConfig.html + '</span>' +
          '<span class="x-dd-drag-ghost-pagetree-text">' + clickedButton.title + '</span>' +
          '</div>';

        this.proxy.update(this.proxyElement);
      }
    });

    // listens on the escape key to stop the dragging
    (new Ext.KeyMap(document, {
      key: Ext.EventObject.ESC,
      scope: this,
      buffer: 250,
      fn: function(event) {
        if (this.dragZone.dragging) {
          Ext.dd.DragDropMgr.stopDrag(event);
          this.dragZone.onInvalidDrop(event);
        }
      }
    }, 'keydown'));
  },

  /**
   * Creates the necessary components for new node drag and drop feature
   *
   * @return {void}
   */
  addDragDropNodeInsertionFeature: function() {
    var newNodeToolbar = new Ext.Toolbar({
      border: false,
      id: this.id + '-item-newNode',
      listeners: {
        render: {
          fn: this.createNewNodeToolbar
        }
      }
    });

    this.dataProvider.getNodeTypes(function(response) {
      var amountOfNodeTypes = response.length;
      if (amountOfNodeTypes > 0) {
        topPanelButton.show();
        for (var i = 0; i < amountOfNodeTypes; ++i) {
          response[i].template = this.getButtonTemplate();
          response[i].cls = 'typo3-pagetree-toppanel-drag-node';
          newNodeToolbar.addItem(response[i]);
        }
        newNodeToolbar.doLayout();
      }
    }, this);

    var topPanelButton = new Ext.Button({
      id: this.id + '-button-newNode',
      cls: 'btn btn-default btn-sm',
      text: TYPO3.Components.PageTree.Icons.NewNode,
      tooltip: TYPO3.Components.PageTree.LLL.buttonNewNode,
      hidden: true
    });

    this.addButton(topPanelButton, newNodeToolbar);
  },

  /**
   * Adds a button to the toolbar for the refreshing feature
   *
   * @return {void}
   */
  addRefreshTreeFeature: function() {
    var topPanelButton = new Ext.Button({
      id: this.id + '-button-refresh',
      cls: 'btn btn-default btn-sm',
      text: TYPO3.Components.PageTree.Icons.Refresh,
      tooltip: TYPO3.Components.PageTree.LLL.buttonRefresh,

      listeners: {
        click: {
          scope: this,
          fn: function() {
            this.app.activeTree.refreshTree();
          }
        }
      }
    });

    this.addButton(topPanelButton);
  }
});

// XTYPE Registration
Ext.reg('TYPO3.Components.PageTree.TopPanel', TYPO3.Components.PageTree.TopPanel);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
Ext.namespace('TYPO3.Components.PageTree');

/**
 * @class TYPO3.Components.PageTree.Actions
 *
 * Actions dedicated for the page tree
 *
 * @namespace TYPO3.Components.PageTree
 */
TYPO3.Components.PageTree.Actions = {

  /**
   * Evaluates a response from an ext direct call and shows a flash message
   * if it was an exceptional result
   *
   * @param {Object} response
   * @return {Boolean}
   */
  evaluateResponse: function(response) {
    if (response.success === false) {
      top.TYPO3.Notification.error('Exception', response.message);
      return false;
    }

    return true;
  },

  /**
   * Releases the cut and copy mode from the context menu
   *
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  releaseCutAndCopyModes: function(tree) {
    tree.t3ContextInfo.inCutMode = false;
    tree.t3ContextInfo.inCopyMode = false;

    if (tree.t3ContextNode) {
      tree.t3ContextNode.attributes.nodeData.t3InCutMode = false;
      tree.t3ContextNode.attributes.nodeData.t3InCopyMode = false;
      tree.t3ContextNode = null;
    }
  },

  /**
   * Updates an existing node with the given alternative. The new tree node
   * is returned afterwards.
   *
   * @param {Ext.tree.TreeNode} node
   * @param {Boolean} isExpanded
   * @param {Object} updatedNode
   * @param {Function} callback
   * @return {Ext.tree.TreeNode}
   */
  updateNode: function(node, isExpanded, updatedNode, callback) {
    if (!updatedNode) {
      return null;
    }

    updatedNode.uiProvider = node.ownerTree.uiProvider;
    var newTreeNode = new Ext.tree.TreeNode(updatedNode);

    var refreshCallback = this.restoreNodeStateAfterRefresh;
    if (callback) {
      refreshCallback = refreshCallback.createSequence(callback);
    }

    node.parentNode.replaceChild(newTreeNode, node);
    newTreeNode.ownerTree.refreshNode(newTreeNode, refreshCallback);

    return newTreeNode;
  },

  /**
   * Restores the node state
   *
   * @param {Ext.tree.TreeNode} node
   * @param {Boolean} isExpanded
   * @return {void}
   */
  restoreNodeStateAfterRefresh: function(node, isExpanded) {
    node.parentNode.expand(false, false);
    if (isExpanded) {
      node.expand(false, false);
    } else {
      node.collapse(false, false);
    }
  },

  /**
   * Shows deletion confirmation window
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @param {Function} callback
   * @param {Boolean} recursiveDelete
   * @return {void}
   */
  confirmDelete: function(node, tree, callback, recursiveDelete) {
    callback = callback || null;

    var title = TYPO3.Components.PageTree.LLL.deleteDialogTitle,
      message = TYPO3.Components.PageTree.LLL.deleteDialogMessage;
    if (recursiveDelete) {
      message = TYPO3.Components.PageTree.LLL.recursiveDeleteDialogMessage;
    }

    Ext.Msg.show({
      title: title,
      msg: message,
      buttons: Ext.Msg.YESNO,
      fn: function(answer) {
        if (answer === 'yes') {
          TYPO3.Components.PageTree.Actions.deleteNode(node, tree, callback);
          return true;
        }
        return false;
      },
      animEl: 'elId'
    });
  },

  /**
   * Deletes a node directly
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @param {Function} callback
   * @return {void}
   */
  deleteNode: function(node, tree, callback) {
    TYPO3.Components.PageTree.Commands.deleteNode(
      node.attributes.nodeData,
      function(response) {
        var succeeded = this.evaluateResponse(response);
        if (Ext.isFunction(callback)) {
          callback(node, tree, succeeded);
        }

        if (succeeded) {
          // the node may not be removed in workspace mode
          if (top.TYPO3.configuration.inWorkspace && response.id) {
            this.updateNode(node, node.isExpanded(), response);
          } else {
            node.remove();
          }
        }
      },
      this
    );
  },

  /**
   * Removes a node either directly or first shows deletion popup
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  removeNode: function(node, tree) {
    if (TYPO3.Components.PageTree.Configuration.displayDeleteConfirmation) {
      this.confirmDelete(node);
    } else {
      this.deleteNode(node, tree);
    }
  },

  /**
   * Restores a given node and moves it to the given destination inside the tree. Use this
   * method if you want to add it as the first child of the destination.
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @param {Ext.tree.TreeNode} destination
   * @return {void}
   */
  restoreNodeToFirstChildOfDestination: function(node, tree, destination) {
    TYPO3.Components.PageTree.Commands.restoreNode(
      node.attributes.nodeData,
      destination.attributes.nodeData.id,
      function(updatedNode) {
        if (this.evaluateResponse(updatedNode)) {
          var newTreeNode = new Ext.tree.TreeNode(
            Ext.apply(node.attributes, updatedNode)
          );
          destination.insertBefore(newTreeNode, destination.firstChild);
        }
      },
      this
    );
  },

  /**
   * Restores a given node and moves it to the given destination inside the tree. Use this
   * method if you want to add the node after the destination node.
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @param {Ext.tree.TreeNode} destination
   * @return {void}
   */
  restoreNodeAfterDestination: function(node, tree, destination) {
    TYPO3.Components.PageTree.Commands.restoreNode(
      node.attributes.nodeData,
      -destination.attributes.nodeData.id,
      function(updatedNode) {
        if (this.evaluateResponse(updatedNode)) {
          var newTreeNode = new Ext.tree.TreeNode(
            Ext.apply(node.attributes, updatedNode)
          );
          destination.parentNode.insertBefore(newTreeNode, destination.nextSibling);
        }
      },
      this
    );
  },

  /**
   * Collapses a whole tree branch
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  collapseBranch: function(node) {
    node.collapse(true);
  },

  /**
   * Expands a whole tree branch
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  expandBranch: function(node) {
    node.expand(true);
  },

  /**
   * Opens a popup windows for previewing the given node/page
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  viewPage: function(node) {
    var frontendWindow = window.open('', 'newTYPO3frontendWindow');
    TYPO3.Components.PageTree.Commands.getViewLink(
      node.attributes.nodeData,
      function(result) {
        frontendWindow.location = result;
        frontendWindow.focus();
      }
    );
  },

  /**
   * Creates a temporary tree mount point
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  mountAsTreeRoot: function(node, tree) {
    TYPO3.Components.PageTree.Commands.setTemporaryMountPoint(
      node.attributes.nodeData,
      function(response) {
        var app = Ext.getCmp('typo3-pagetree-tree').app;
        if (TYPO3.Components.PageTree.Configuration.temporaryMountPoint) {
          app.removeIndicator(
            app.temporaryMountPointInfoIndicator
          );
        }

        TYPO3.Components.PageTree.Configuration.temporaryMountPoint = response;
        app.addTemporaryMountPointIndicator();

        var selectedNode = app.getSelected();
        tree.stateId = 'Pagetree' + TYPO3.Components.PageTree.Configuration.temporaryMountPoint;
        tree.refreshTree(function() {
          var nodeIsSelected = false;
          if (selectedNode) {
            nodeIsSelected = app.select(
              selectedNode.attributes.nodeData.id
            );
          }

          var node = (nodeIsSelected ? app.getSelected() : null);
          if (node) {
            this.singleClick(node, tree);
          } else {
            this.singleClick(tree.getRootNode().firstChild, tree);
          }
        }, this);
      },
      this
    );
  },

  /**
   * Opens the edit page properties dialog
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  editPageProperties: function(node) {
    node.select();
    var returnUrl = TYPO3.Backend.ContentContainer.getUrl();
    if (returnUrl.indexOf('returnUrl') !== -1) {
      returnUrl = TYPO3.Utility.getParameterFromUrl(returnUrl, 'returnUrl');
    } else {
      returnUrl = encodeURIComponent(returnUrl);
    }

    var decodeReturnUrl = decodeURIComponent(returnUrl);
    var editPageId = TYPO3.Utility.getParameterFromUrl(decodeReturnUrl, 'id');
    if (parseInt(editPageId, 10) !== parseInt(node.attributes.nodeData.id, 10)) {
      returnUrl = encodeURIComponent(TYPO3.Utility.updateQueryStringParameter(decodeReturnUrl, 'id', node.attributes.nodeData.id));
    }

    TYPO3.Backend.ContentContainer.setUrl(
      TYPO3.settings.FormEngine.moduleUrl + '&edit[pages][' + node.attributes.nodeData.id + ']=edit&returnUrl=' + returnUrl
    );
  },

  /**
   * Opens the new page wizard
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  newPageWizard: function(node) {
    node.select();
    TYPO3.Backend.ContentContainer.setUrl(
      TYPO3.settings.NewRecord.moduleUrl + '&id=' + node.attributes.nodeData.id + '&pagesOnly=1'
    );
  },

  /**
   * Opens the info popup
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  openInfoPopUp: function(node) {
    launchView('pages', node.attributes.nodeData.id);
  },

  /**
   * Opens the history popup
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  openHistoryPopUp: function(node) {
    node.select();
    TYPO3.Backend.ContentContainer.setUrl(
      TYPO3.settings.RecordHistory.moduleUrl + '&element=pages:' + node.attributes.nodeData.id
    );
  },

  /**
   * Opens the export .t3d file dialog
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  exportT3d: function(node) {
    node.select();
    TYPO3.Backend.ContentContainer.setUrl(
      TYPO3.settings.ImportExport.moduleUrl +
      '&tx_impexp[action]=export&' +
      'id=0&tx_impexp[pagetree][id]=' + node.attributes.nodeData.id +
      '&tx_impexp[pagetree][levels]=0' +
      '&tx_impexp[pagetree][tables][]=_ALL'
    );
  },

  /**
   * Opens the import .t3d file dialog
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  importT3d: function(node) {
    node.select();
    TYPO3.Backend.ContentContainer.setUrl(
      TYPO3.settings.ImportExport.moduleUrl +
      '&id=' + node.attributes.nodeData.id +
      '&table=pages&tx_impexp[action]=import'
    );
  },

  /**
   * Enables the cut mode of a node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  enableCutMode: function(node, tree) {
    this.disableCopyMode(node, tree);
    node.attributes.nodeData.t3InCutMode = true;
    tree.t3ContextInfo.inCutMode = true;
    tree.t3ContextNode = node;
  },

  /**
   * Disables the cut mode of a node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  disableCutMode: function(node, tree) {
    this.releaseCutAndCopyModes(tree);
    node.attributes.nodeData.t3InCutMode = false;
  },

  /**
   * Enables the copy mode of a node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  enableCopyMode: function(node, tree) {
    this.disableCutMode(node, tree);
    node.attributes.nodeData.t3InCopyMode = true;
    tree.t3ContextInfo.inCopyMode = true;
    tree.t3ContextNode = node;
  },

  /**
   * Disables the copy mode of a node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  disableCopyMode: function(node, tree) {
    this.releaseCutAndCopyModes(tree);
    node.attributes.nodeData.t3InCopyMode = false;
  },

  /**
   * Pastes the cut/copy context node into the given node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  pasteIntoNode: function(node, tree) {
    if (!tree.t3ContextNode) {
      return;
    }

    if (tree.t3ContextInfo.inCopyMode) {
      // This is hard stuff to do. So increase the timeout for the AJAX request
      Ext.Ajax.timeout = 3600000;

      var newNode = tree.t3ContextNode = new Ext.tree.TreeNode(tree.t3ContextNode.attributes);
      newNode.id = 'fakeNode';
      node.insertBefore(newNode, node.childNodes[0]);
      node.attributes.nodeData.t3InCopyMode = false;
      this.copyNodeToFirstChildOfDestination(newNode, tree);

    } else if (tree.t3ContextInfo.inCutMode) {
      if (node.getPath().indexOf(tree.t3ContextNode.id) !== -1) {
        return;
      }

      node.appendChild(tree.t3ContextNode);
      node.attributes.nodeData.t3InCutMode = false;
      this.moveNodeToFirstChildOfDestination(node, tree);
    }
  },

  /**
   * Pastes a cut/copy context node after the given node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  pasteAfterNode: function(node, tree) {
    if (!tree.t3ContextNode) {
      return;
    }

    if (tree.t3ContextInfo.inCopyMode) {
      // This is hard stuff to do. So increase the timeout for the AJAX request
      Ext.Ajax.timeout = 3600000;

      var newNode = tree.t3ContextNode = new Ext.tree.TreeNode(tree.t3ContextNode.attributes);
      newNode.id = 'fakeNode';
      node.parentNode.insertBefore(newNode, node.nextSibling);
      node.attributes.nodeData.t3InCopyMode = false;
      this.copyNodeAfterDestination(newNode, tree);

    } else if (tree.t3ContextInfo.inCutMode) {
      if (node.getPath().indexOf(tree.t3ContextNode.id) !== -1) {
        return;
      }

      node.parentNode.insertBefore(tree.t3ContextNode, node.nextSibling);
      node.attributes.nodeData.t3InCutMode = false;
      this.moveNodeAfterDestination(node, tree);
    }
  },

  /**
   * Moves the current tree context node after the given node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  moveNodeAfterDestination: function(node, tree) {
    TYPO3.Components.PageTree.Commands.moveNodeAfterDestination(
      tree.t3ContextNode.attributes.nodeData,
      node.attributes.nodeData.id,
      function(response) {
        if (this.evaluateResponse(response) && tree.t3ContextNode) {
          this.updateNode(tree.t3ContextNode, tree.t3ContextNode.isExpanded(), response);
        }
        this.releaseCutAndCopyModes(tree);
      },
      this
    );
  },

  /**
   * Moves the current tree context node as the first child of the given node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  moveNodeToFirstChildOfDestination: function(node, tree) {
    TYPO3.Components.PageTree.Commands.moveNodeToFirstChildOfDestination(
      tree.t3ContextNode.attributes.nodeData,
      node.attributes.nodeData.id,
      function(response) {
        if (this.evaluateResponse(response) && tree.t3ContextNode) {
          this.updateNode(tree.t3ContextNode, tree.t3ContextNode.isExpanded(), response);
        }
        this.releaseCutAndCopyModes(tree);
      },
      this
    );
  },

  /**
   * Inserts a new node after the given node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  insertNodeAfterDestination: function(node, tree) {
    TYPO3.Components.PageTree.Commands.insertNodeAfterDestination(
      tree.t3ContextNode.attributes.nodeData,
      node.previousSibling.attributes.nodeData.id,
      tree.t3ContextInfo.serverNodeType,
      function(response) {
        if (this.evaluateResponse(response)) {
          this.updateNode(node, node.isExpanded(), response, function(node) {
            tree.triggerEdit(node);
          });
        }
        this.releaseCutAndCopyModes(tree);
      },
      this
    );
  },

  /**
   * Inserts a new node as the first child of the given node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  insertNodeToFirstChildOfDestination: function(node, tree) {
    TYPO3.Components.PageTree.Commands.insertNodeToFirstChildOfDestination(
      tree.t3ContextNode.attributes.nodeData,
      tree.t3ContextInfo.serverNodeType,
      function(response) {
        if (this.evaluateResponse(response)) {
          this.updateNode(node, true, response, function(node) {
            tree.triggerEdit(node);
          });
        }
        this.releaseCutAndCopyModes(tree);
      },
      this
    );
  },

  /**
   * Copies the current tree context node after the given node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  copyNodeAfterDestination: function(node, tree) {
    TYPO3.Components.PageTree.Commands.copyNodeAfterDestination(
      tree.t3ContextNode.attributes.nodeData,
      node.previousSibling.attributes.nodeData.id,
      function(response) {
        if (this.evaluateResponse(response)) {
          this.updateNode(node, true, response, function(node) {
            tree.triggerEdit(node);
          });
        }
        this.releaseCutAndCopyModes(tree);
      },
      this
    );
  },

  /**
   * Copies the current tree context node as the first child of the given node
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  copyNodeToFirstChildOfDestination: function(node, tree) {
    TYPO3.Components.PageTree.Commands.copyNodeToFirstChildOfDestination(
      tree.t3ContextNode.attributes.nodeData,
      node.parentNode.attributes.nodeData.id,
      function(response) {
        if (this.evaluateResponse(response)) {
          this.updateNode(node, true, response, function(node) {
            tree.triggerEdit(node);
          });
        }
        this.releaseCutAndCopyModes(tree);
      },
      this
    );
  },

  /**
   * Visibilizes a page
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  enablePage: function(node) {
    TYPO3.Components.PageTree.Commands.visiblyNode(
      node.attributes.nodeData,
      function(response) {
        if (this.evaluateResponse(response)) {
          this.updateNode(node, node.isExpanded(), response);
        }
      },
      this
    );
  },

  /**
   * Disables a page
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  disablePage: function(node) {
    TYPO3.Components.PageTree.Commands.disableNode(
      node.attributes.nodeData,
      function(response) {
        if (this.evaluateResponse(response)) {
          this.updateNode(node, node.isExpanded(), response);
        }
      },
      this
    );
  },

  /**
   * Clear cache of a page
   *
   * @param {Ext.tree.TreeNode} node
   * @return {void}
   */
  clearCacheOfPage: function(node) {
    TYPO3.Components.PageTree.Commands.clearCacheOfPage(
      node.attributes.nodeData
    );
  },

  /**
   * Reloads the content frame with the current module and node id
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @return {void}
   */
  singleClick: function(node, tree) {
    tree.selectNode(node);

    var separator = '?';
    if (currentSubScript.indexOf('?') !== -1) {
      separator = '&';
    }
    TYPO3.Backend.ContentContainer.setUrl(
      currentSubScript + separator + 'id=' + node.attributes.nodeData.id
    );
  },

  /**
   * Opens a configured url inside the content frame
   *
   * @param {Ext.tree.TreeNode} node
   * @param {TYPO3.Components.PageTree.Tree} tree
   * @param {Object} contextItem
   * @return {void}
   */
  openCustomUrlInContentFrame: function(node, tree, contextItem) {
    if (!contextItem.customAttributes || !contextItem.customAttributes.contentUrl) {
      return;
    }

    node.select();
    var nodeId = node.attributes.nodeData.id,
      idPattern = '###ID###';
    TYPO3.Backend.ContentContainer.setUrl(
      contextItem.customAttributes.contentUrl
        .replace(idPattern, nodeId)
        .replace(encodeURIComponent(idPattern), nodeId)
    );
  },

  /**
   * Updates the title of a node
   *
   * @param {String} newText
   * @param {String} oldText
   * @param {TYPO3.Components.PageTree.TreeEditor} treeEditor
   * @return {void}
   */
  saveTitle: function(newText, oldText, treeEditor) {
    // Save current editNode in case treeEditor.editNode changes before the ajax call completes
    var editedNode = treeEditor.editNode;

    if (newText === oldText || newText == '') {
      treeEditor.updateNodeText(
        editedNode,
        editedNode.attributes.nodeData.editableText,
        Ext.util.Format.htmlEncode(oldText)
      );
      return;
    }

    TYPO3.Components.PageTree.Commands.updateLabel(
      editedNode.attributes.nodeData,
      newText,
      function(response) {
        if (this.evaluateResponse(response)) {
          treeEditor.updateNodeText(editedNode, response.editableText, response.updatedText);
        } else {
          treeEditor.updateNodeText(
            editedNode,
            editedNode.attributes.nodeData.editableText,
            Ext.util.Format.htmlEncode(oldText)
          );
        }
        var currentTree = treeEditor.editNode.getOwnerTree();
        if (currentTree.currentSelectedNode !== null) {
          if (currentTree.currentSelectedNode.id === treeEditor.editNode.id) {
            this.singleClick(treeEditor.editNode, treeEditor.editNode.ownerTree, currentTree);
          }
          currentTree.currentSelectedNode.select();
        }
      },
      this
    );
  }
};

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
Ext.ns('Ext.ux.state');

// dummy constructor
Ext.ux.state.TreePanel = function() {
};

/**
 * State Provider for a tree panel
 */
Ext.override(Ext.ux.state.TreePanel, {
  /**
   * Initializes the plugin
   * @param {Ext.tree.TreePanel} tree
   * @private
   */
  init: function(tree) {
    tree.lastSelectedNode = null;
    tree.isRestoringState = false;
    tree.stateHash = {};

    // install event handlers on TreePanel
    tree.on({
      // add path of expanded node to stateHash
      beforeexpandnode: function(node) {
        if (this.isRestoringState) {
          return;
        }

        var saveID = (node.id === 'root' ? node.id : node.id.substr(1));
        this.stateHash[saveID] = 1;
      },

      // delete path and all subpaths of collapsed node from stateHash
      beforecollapsenode: function(node) {
        if (this.isRestoringState) {
          return;
        }

        var deleteID = (node.id === 'root' ? node.id : node.id.substr(1));
        delete this.stateHash[deleteID];
      },

      beforeclick: function(node) {
        if (this.isRestoringState) {
          return;
        }
        this.stateHash['lastSelectedNode'] = node.id;
      }
    });

    // update state on node expand or collapse
    tree.stateEvents = tree.stateEvents || [];
    tree.stateEvents.push('expandnode', 'collapsenode', 'click');

    // add state related props to the tree
    Ext.apply(tree, {
      // keeps expanded nodes paths keyed by node.ids
      stateHash: {},

      restoreState: function() {
        this.isRestoringState = true;
        // get last selected node
        for (var pageID in this.stateHash) {
          var pageNode = this.getNodeById((pageID !== 'root' ? 'p' : '') + pageID);
          if (pageNode) {
            pageNode.on({
              expand: {
                single: true,
                scope: this,
                fn: this.restoreState
              }
            });
            if (pageNode.expanded === false && pageNode.rendered == true) {
              pageNode.expand();
            }
          }
        }

        if (this.stateHash['lastSelectedNode']) {
          var node = this.getNodeById(this.stateHash['lastSelectedNode']);
          if (node) {
            var contentId = TYPO3.Backend.ContentContainer.getIdFromUrl() ||
              String(fsMod.recentIds['web']) || '-1';

            var hasContentFrameValidPageId = contentId !== '-1';
            var isCurrentSelectedNode = (
              String(node.attributes.nodeData.id) === contentId ||
              contentId.indexOf('pages' + String(node.attributes.nodeData.id)) !== -1
            );

            if (isCurrentSelectedNode) {
              this.selectPath(node.getPath());
            }

            var isSingleClickPossible = (this.app.isVisible() && this.commandProvider && this.commandProvider.singleClick);
            if (!hasContentFrameValidPageId && !isCurrentSelectedNode && isSingleClickPossible) {
              this.selectPath(node.getPath());
              this.commandProvider.singleClick(node, this);
            }
          }
        }

        this.isRestoringState = false;
      },

      // apply state on tree initialization
      applyState: function(state) {
        if (state) {
          Ext.apply(this, state);

          // it is too early to expand paths here
          // so do it once on root load
          this.root.on({
            load: {
              single: true,
              scope: this,
              fn: this.restoreState
            }
          });
        }
      },

      // returns stateHash for save by state manager
      getState: function() {
        return {stateHash: this.stateHash};
      }
    });
  }
});

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
Ext.namespace('TYPO3.Components.PageTree');

/**
 * @class TYPO3.Components.PageTree.App
 *
 * Page tree main application that controls setups the components
 *
 * @namespace TYPO3.Components.PageTree
 * @extends Ext.Panel
 */
TYPO3.Components.PageTree.App = Ext.extend(Ext.Panel, {
  /**
   * Panel id
   *
   * @type {String}
   */
  id: 'typo3-pagetree',

  /**
   * Border
   *
   * @type {Boolean}
   */
  border: false,

  /**
   * Layout Type
   *
   * @type {String}
   */
  layout: 'fit',

  /**
   * Monitor resize
   *
   * @type {Boolean}
   */
  monitorResize: true,

  /**
   * Active tree
   *
   * @type {TYPO3.Components.PageTree.Tree}
   */
  activeTree: null,

  /**
   * Main pagetree
   *
   * @type {TYPO3.Components.PageTree.Tree}
   */
  mainTree: null,

  /**
   * Local cache for node paths
   *
   * @type {object}
   */
  nodePaths: {},

  /**
   * Initializes the application
   *
   * Set's the necessary language labels, configuration options and sprite icons by an
   * external call and initializes the needed components.
   *
   * @return {void}
   */
  initComponent: function() {
    TYPO3.Components.PageTree.DataProvider.loadResources(function(response) {
      TYPO3.Components.PageTree.LLL = response['LLL'];
      TYPO3.Components.PageTree.Configuration = response['Configuration'];
      TYPO3.Components.PageTree.Icons = response['Icons'];

      this.mainTree = this.activeTree = new TYPO3.Components.PageTree.Tree({
        id: this.id + '-tree',
        deletionDropZoneId: this.id + '-deletionDropZone',
        ddGroup: this.id,
        stateful: true,
        stateId: 'Pagetree' + TYPO3.Components.PageTree.Configuration.temporaryMountPoint,
        stateEvents: [],
        autoScroll: true,
        autoHeight: true,
        autoWidth: true,
        plugins: [new Ext.ux.state.TreePanel()],
        commandProvider: TYPO3.Components.PageTree.Actions,
        treeDataProvider: TYPO3.Components.PageTree.DataProvider,
        monitorResize: true,
        app: this,
        listeners: {
          resize: {
            fn: function() {
              this.doLayout(true);
              TYPO3.Backend.doLayout();
            },
            scope: this,
            buffer: 250
          }
        }
      });

      var filteringTree = new TYPO3.Components.PageTree.FilteringTree({
        id: this.id + '-filteringTree',
        deletionDropZoneId: this.id + '-deletionDropZone',
        ddGroup: this.id,
        autoScroll: true,
        autoHeight: false,
        commandProvider: TYPO3.Components.PageTree.Actions,
        treeDataProvider: TYPO3.Components.PageTree.DataProvider,
        app: this
      }).hide();

      var topPanel = new TYPO3.Components.PageTree.TopPanel({
        cls: this.id + '-toppanel',
        dataProvider: TYPO3.Components.PageTree.DataProvider,
        filteringTree: filteringTree,
        ddGroup: this.id,
        tree: this.mainTree,
        app: this
      });

      var deletionDropZone = new TYPO3.Components.PageTree.DeletionDropZone({
        id: this.id + '-deletionDropZone',
        commandProvider: TYPO3.Components.PageTree.Actions,
        ddGroup: this.id,
        app: this,
        region: 'south',
        height: 35
      });

      var topPanelItems = new Ext.Panel({
        id: this.id + '-topPanelItems',
        cls: this.id + '-toppanel-items',
        border: false,
        region: 'north',
        height: 65,
        items: [
          topPanel, {
            border: false,
            id: this.id + '-indicatorBar'
          }
        ]
      });

      this.add({
        layout: 'border',
        border: false,
        monitorResize: true,
        items: [
          topPanelItems,
          {
            border: false,
            id: this.id + '-treeContainer',
            region: 'center',
            layout: 'fit',
            monitorResize: true,
            items: [this.mainTree, filteringTree]
          },
          deletionDropZone
        ]
      });

      if (TYPO3.Components.PageTree.Configuration.temporaryMountPoint) {
        topPanelItems.on('afterrender', function() {
          this.addTemporaryMountPointIndicator();
        }, this);
      }

      this.doLayout();
      this.selectRequestedPageId();

    }, this);

    TYPO3.Components.PageTree.App.superclass.initComponent.apply(this, arguments);
  },

  /**
   * Is true once initComponent has been called for rendering
   *
   * @returns {boolean}
   */
  isInitialized: function() {
    return this.mainTree !== null;
  },

  /**
   * Adds the temporary mount point indicator item
   *
   * @return {void}
   */
  addTemporaryMountPointIndicator: function() {
    this.temporaryMountPointInfoIndicator = this.addIndicator({
      border: false,
      id: this.id + '-indicatorBar-temporaryMountPoint',
      cls: this.id + '-indicatorBar-item',
      scope: this,
      listeners: {
        afterrender: {
          fn: function() {
            var element = Ext.fly(this.id + '-indicatorBar-temporaryMountPoint-clear');
            var me = this;
            element.on('click', function() {
              top.TYPO3.Storage.Persistent.unset('pageTree_temporaryMountPoint').done(
                function() {
                  TYPO3.Components.PageTree.Configuration.temporaryMountPoint = null;
                  me.removeIndicator(me.temporaryMountPointInfoIndicator);
                  me.getTree().refreshTree();
                  me.getTree().stateId = 'Pagetree';
                }
              );
            }, this);
          },
          scope: this
        }
      },
      html: '' +
      '<div class="alert alert-info">' +
      '<div class="media">' +
      '<div class="media-left">' +
      TYPO3.Components.PageTree.Icons.Info +
      '</div>' +
      '<div class="media-body">' +
      TYPO3.Components.PageTree.Configuration.temporaryMountPoint +
      '</div>' +
      '<div class="media-right">' +
      '<a href="#" id="' + this.id + '-indicatorBar-temporaryMountPoint-clear">' +
      TYPO3.Components.PageTree.Icons.Close +
      '</a>' +
      '</div>' +
      '</div>' +
      '</div>'
    });
  },

  /**
   * Adds an indicator item
   *
   * @param {Object} component
   * @return {void}
   */
  addIndicator: function(component) {
    if (component.listeners && component.listeners.afterrender) {
      component.listeners.afterrender.fn = component.listeners.afterrender.fn.createSequence(
        this.afterTopPanelItemAdded, this
      );
    } else {
      if (component.listeners) {
        component.listeners = {}
      }

      component.listeners.afterrender = {
        scope: this,
        fn: this.afterTopPanelItemAdded
      }
    }

    var indicator = Ext.getCmp(this.id + '-indicatorBar').add(component);
    this.doLayout();

    return indicator;
  },

  /**
   * Recalculates the top panel items height after an indicator was added
   *
   * @param {Ext.Component} component
   * @return {void}
   */
  afterTopPanelItemAdded: function(component) {
    var topPanelItems = Ext.getCmp(this.id + '-topPanelItems');
    topPanelItems.setHeight(topPanelItems.getHeight() + component.getHeight());
    this.doLayout();
  },

  /**
   * Removes an indicator item from the indicator bar
   *
   * @param {Ext.Component} component
   * @return {void}
   */
  removeIndicator: function(component) {
    var topPanelItems = Ext.getCmp(this.id + '-topPanelItems');
    topPanelItems.setHeight(topPanelItems.getHeight() - component.getHeight());
    Ext.getCmp(this.id + '-indicatorBar').remove(component);
    this.doLayout();
  },

  /**
   * Compatibility method that calls refreshTree()
   *
   * @return {void}
   */
  refresh: function() {
    this.refreshTree();
  },

  /**
   * Another compatibility method that calls refreshTree()
   *
   * @return {void}
   */
  refresh_nav: function() {
    this.refreshTree();
  },

  /**
   * Refreshes the tree and then selects the node defined by fsMod.recentIds['web']
   *
   * @return {void}
   */
  refreshTree: function() {
    this.activeTree.refreshTree(function() {
      this.selectRequestedPageId();
    }, this);
  },

  /**
   * Selects the node defined by fsMod.recentIds['web']
   *
   * @return {void}
   */
  selectRequestedPageId: function() {
    if (!isNaN(fsMod.recentIds['web']) && fsMod.recentIds['web'] !== '') {
      this.select(fsMod.recentIds['web']);
    }
  },

  /**
   * Returns the current active tree
   *
   * @return {TYPO3.Components.PageTree.Tree}
   */
  getTree: function() {
    return this.activeTree;
  },

  /**
   * Selects a node on the main tree defined by the page id.
   *
   * @param {int} pageId
   */
  select: function(pageId) {
    this.selectPageId(pageId);
  },

  selectPageId: function(pageId, allResults) {
    this.invokePageId(pageId, Ext.createDelegate(this.mainTree.selectPath, this.mainTree), allResults);
  },

  expandPageId: function(pageId, allResults) {
    this.invokePageId(pageId, Ext.createDelegate(this.mainTree.expandPath, this.mainTree), allResults);
  },

  /**
   * @param {int} pageId
   * @param {Function} callback
   * @param {Boolean} allResults
   */
  invokePageId: function(pageId, callback, allResults) {
    if (typeof this.nodePaths[pageId] !== 'undefined') {
      this.invokeNodePaths(this.nodePaths[pageId], pageId, callback, allResults);
    } else {
      var handler = function(nodePaths) {
        this.nodePaths[pageId] = nodePaths;
        this.invokeNodePaths(nodePaths, pageId, callback, allResults);
      };
      TYPO3.Components.PageTree.Commands.getNodePaths(pageId, handler, this);
    }
  },

  invokeNodePaths: function(nodePaths, pageId, callback, allResults) {
    if (!nodePaths.length) {
      return;
    }
    if (!allResults) {
      nodePaths = [nodePaths[0]];
    }
    var self = this;
    Ext.each(nodePaths, function(nodePath) {
      callback('/root/' + nodePath.join('/'), 'id', function() {
        self.mainTree.selectNode(self.mainTree.getSelectionModel().getSelectedNode());
      });
    });
  },

  /**
   * Returns the currently selected node of the currently active tree
   *
   * @return {Ext.tree.TreeNode}
   */
  getSelected: function() {
    var node = this.getTree().getSelectionModel().getSelectedNode();
    return node ? node : null;
  }
});

// XTYPE Registration
Ext.reg('TYPO3.Components.PageTree.App', TYPO3.Components.PageTree.App);

/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 *
 * modified by bmack to wrap it as jQuery module for the backend, will be dropped for twbs 4.0
 * please do not reference outside of the TYPO3 Core (not in your own extensions)
 * as this is preliminary as long as twbs does not support AMD modules
 * this file will be deleted once twbs 4 is included
 */
// IIFE for faster access to jQuery and save $use

;(function(factory) {
	if (typeof define === 'function' && define.amd) {
		// register bootstrap as requirejs module
		define("bootstrap", ["jquery"], function($) {
			factory($);
		});
	} else {
		factory(jQuery || TYPO3.jQuery);
	}
})(function(jQuery) {
	if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(a){"use strict";var b=a.fn.jquery.split(" ")[0].split(".");if(b[0]<2&&b[1]<9||1==b[0]&&9==b[1]&&b[2]<1||b[0]>3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(jQuery),+function(a){"use strict";function b(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in b)if(void 0!==a.style[c])return{end:b[c]};return!1}a.fn.emulateTransitionEnd=function(b){var c=!1,d=this;a(this).one("bsTransitionEnd",function(){c=!0});var e=function(){c||a(d).trigger(a.support.transition.end)};return setTimeout(e,b),this},a(function(){a.support.transition=b(),a.support.transition&&(a.event.special.bsTransitionEnd={bindType:a.support.transition.end,delegateType:a.support.transition.end,handle:function(b){if(a(b.target).is(this))return b.handleObj.handler.apply(this,arguments)}})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var c=a(this),e=c.data("bs.alert");e||c.data("bs.alert",e=new d(this)),"string"==typeof b&&e[b].call(c)})}var c='[data-dismiss="alert"]',d=function(b){a(b).on("click",c,this.close)};d.VERSION="3.3.7",d.TRANSITION_DURATION=150,d.prototype.close=function(b){function c(){g.detach().trigger("closed.bs.alert").remove()}var e=a(this),f=e.attr("data-target");f||(f=e.attr("href"),f=f&&f.replace(/.*(?=#[^\s]*$)/,""));var g=a("#"===f?[]:f);b&&b.preventDefault(),g.length||(g=e.closest(".alert")),g.trigger(b=a.Event("close.bs.alert")),b.isDefaultPrevented()||(g.removeClass("in"),a.support.transition&&g.hasClass("fade")?g.one("bsTransitionEnd",c).emulateTransitionEnd(d.TRANSITION_DURATION):c())};var e=a.fn.alert;a.fn.alert=b,a.fn.alert.Constructor=d,a.fn.alert.noConflict=function(){return a.fn.alert=e,this},a(document).on("click.bs.alert.data-api",c,d.prototype.close)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.button"),f="object"==typeof b&&b;e||d.data("bs.button",e=new c(this,f)),"toggle"==b?e.toggle():b&&e.setState(b)})}var c=function(b,d){this.$element=a(b),this.options=a.extend({},c.DEFAULTS,d),this.isLoading=!1};c.VERSION="3.3.7",c.DEFAULTS={loadingText:"loading..."},c.prototype.setState=function(b){var c="disabled",d=this.$element,e=d.is("input")?"val":"html",f=d.data();b+="Text",null==f.resetText&&d.data("resetText",d[e]()),setTimeout(a.proxy(function(){d[e](null==f[b]?this.options[b]:f[b]),"loadingText"==b?(this.isLoading=!0,d.addClass(c).attr(c,c).prop(c,!0)):this.isLoading&&(this.isLoading=!1,d.removeClass(c).removeAttr(c).prop(c,!1))},this),0)},c.prototype.toggle=function(){var a=!0,b=this.$element.closest('[data-toggle="buttons"]');if(b.length){var c=this.$element.find("input");"radio"==c.prop("type")?(c.prop("checked")&&(a=!1),b.find(".active").removeClass("active"),this.$element.addClass("active")):"checkbox"==c.prop("type")&&(c.prop("checked")!==this.$element.hasClass("active")&&(a=!1),this.$element.toggleClass("active")),c.prop("checked",this.$element.hasClass("active")),a&&c.trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active")),this.$element.toggleClass("active")};var d=a.fn.button;a.fn.button=b,a.fn.button.Constructor=c,a.fn.button.noConflict=function(){return a.fn.button=d,this},a(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(c){var d=a(c.target).closest(".btn");b.call(d,"toggle"),a(c.target).is('input[type="radio"], input[type="checkbox"]')||(c.preventDefault(),d.is("input,button")?d.trigger("focus"):d.find("input:visible,button:visible").first().trigger("focus"))}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(b){a(b.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(b.type))})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.carousel"),f=a.extend({},c.DEFAULTS,d.data(),"object"==typeof b&&b),g="string"==typeof b?b:f.slide;e||d.data("bs.carousel",e=new c(this,f)),"number"==typeof b?e.to(b):g?e[g]():f.interval&&e.pause().cycle()})}var c=function(b,c){this.$element=a(b),this.$indicators=this.$element.find(".carousel-indicators"),this.options=c,this.paused=null,this.sliding=null,this.interval=null,this.$active=null,this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",a.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",a.proxy(this.pause,this)).on("mouseleave.bs.carousel",a.proxy(this.cycle,this))};c.VERSION="3.3.7",c.TRANSITION_DURATION=600,c.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},c.prototype.keydown=function(a){if(!/input|textarea/i.test(a.target.tagName)){switch(a.which){case 37:this.prev();break;case 39:this.next();break;default:return}a.preventDefault()}},c.prototype.cycle=function(b){return b||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(a.proxy(this.next,this),this.options.interval)),this},c.prototype.getItemIndex=function(a){return this.$items=a.parent().children(".item"),this.$items.index(a||this.$active)},c.prototype.getItemForDirection=function(a,b){var c=this.getItemIndex(b),d="prev"==a&&0===c||"next"==a&&c==this.$items.length-1;if(d&&!this.options.wrap)return b;var e="prev"==a?-1:1,f=(c+e)%this.$items.length;return this.$items.eq(f)},c.prototype.to=function(a){var b=this,c=this.getItemIndex(this.$active=this.$element.find(".item.active"));if(!(a>this.$items.length-1||a<0))return this.sliding?this.$element.one("slid.bs.carousel",function(){b.to(a)}):c==a?this.pause().cycle():this.slide(a>c?"next":"prev",this.$items.eq(a))},c.prototype.pause=function(b){return b||(this.paused=!0),this.$element.find(".next, .prev").length&&a.support.transition&&(this.$element.trigger(a.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},c.prototype.next=function(){if(!this.sliding)return this.slide("next")},c.prototype.prev=function(){if(!this.sliding)return this.slide("prev")},c.prototype.slide=function(b,d){var e=this.$element.find(".item.active"),f=d||this.getItemForDirection(b,e),g=this.interval,h="next"==b?"left":"right",i=this;if(f.hasClass("active"))return this.sliding=!1;var j=f[0],k=a.Event("slide.bs.carousel",{relatedTarget:j,direction:h});if(this.$element.trigger(k),!k.isDefaultPrevented()){if(this.sliding=!0,g&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var l=a(this.$indicators.children()[this.getItemIndex(f)]);l&&l.addClass("active")}var m=a.Event("slid.bs.carousel",{relatedTarget:j,direction:h});return a.support.transition&&this.$element.hasClass("slide")?(f.addClass(b),f[0].offsetWidth,e.addClass(h),f.addClass(h),e.one("bsTransitionEnd",function(){f.removeClass([b,h].join(" ")).addClass("active"),e.removeClass(["active",h].join(" ")),i.sliding=!1,setTimeout(function(){i.$element.trigger(m)},0)}).emulateTransitionEnd(c.TRANSITION_DURATION)):(e.removeClass("active"),f.addClass("active"),this.sliding=!1,this.$element.trigger(m)),g&&this.cycle(),this}};var d=a.fn.carousel;a.fn.carousel=b,a.fn.carousel.Constructor=c,a.fn.carousel.noConflict=function(){return a.fn.carousel=d,this};var e=function(c){var d,e=a(this),f=a(e.attr("data-target")||(d=e.attr("href"))&&d.replace(/.*(?=#[^\s]+$)/,""));if(f.hasClass("carousel")){var g=a.extend({},f.data(),e.data()),h=e.attr("data-slide-to");h&&(g.interval=!1),b.call(f,g),h&&f.data("bs.carousel").to(h),c.preventDefault()}};a(document).on("click.bs.carousel.data-api","[data-slide]",e).on("click.bs.carousel.data-api","[data-slide-to]",e),a(window).on("load",function(){a('[data-ride="carousel"]').each(function(){var c=a(this);b.call(c,c.data())})})}(jQuery),+function(a){"use strict";function b(b){var c,d=b.attr("data-target")||(c=b.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,"");return a(d)}function c(b){return this.each(function(){var c=a(this),e=c.data("bs.collapse"),f=a.extend({},d.DEFAULTS,c.data(),"object"==typeof b&&b);!e&&f.toggle&&/show|hide/.test(b)&&(f.toggle=!1),e||c.data("bs.collapse",e=new d(this,f)),"string"==typeof b&&e[b]()})}var d=function(b,c){this.$element=a(b),this.options=a.extend({},d.DEFAULTS,c),this.$trigger=a('[data-toggle="collapse"][href="#'+b.id+'"],[data-toggle="collapse"][data-target="#'+b.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};d.VERSION="3.3.7",d.TRANSITION_DURATION=350,d.DEFAULTS={toggle:!0},d.prototype.dimension=function(){var a=this.$element.hasClass("width");return a?"width":"height"},d.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var b,e=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(e&&e.length&&(b=e.data("bs.collapse"),b&&b.transitioning))){var f=a.Event("show.bs.collapse");if(this.$element.trigger(f),!f.isDefaultPrevented()){e&&e.length&&(c.call(e,"hide"),b||e.data("bs.collapse",null));var g=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var h=function(){this.$element.removeClass("collapsing").addClass("collapse in")[g](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!a.support.transition)return h.call(this);var i=a.camelCase(["scroll",g].join("-"));this.$element.one("bsTransitionEnd",a.proxy(h,this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])}}}},d.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var b=a.Event("hide.bs.collapse");if(this.$element.trigger(b),!b.isDefaultPrevented()){var c=this.dimension();this.$element[c](this.$element[c]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var e=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return a.support.transition?void this.$element[c](0).one("bsTransitionEnd",a.proxy(e,this)).emulateTransitionEnd(d.TRANSITION_DURATION):e.call(this)}}},d.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},d.prototype.getParent=function(){return a(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(a.proxy(function(c,d){var e=a(d);this.addAriaAndCollapsedClass(b(e),e)},this)).end()},d.prototype.addAriaAndCollapsedClass=function(a,b){var c=a.hasClass("in");a.attr("aria-expanded",c),b.toggleClass("collapsed",!c).attr("aria-expanded",c)};var e=a.fn.collapse;a.fn.collapse=c,a.fn.collapse.Constructor=d,a.fn.collapse.noConflict=function(){return a.fn.collapse=e,this},a(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(d){var e=a(this);e.attr("data-target")||d.preventDefault();var f=b(e),g=f.data("bs.collapse"),h=g?"toggle":e.data();c.call(f,h)})}(jQuery),+function(a){"use strict";function b(b){var c=b.attr("data-target");c||(c=b.attr("href"),c=c&&/#[A-Za-z]/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,""));var d=c&&a(c);return d&&d.length?d:b.parent()}function c(c){c&&3===c.which||(a(e).remove(),a(f).each(function(){var d=a(this),e=b(d),f={relatedTarget:this};e.hasClass("open")&&(c&&"click"==c.type&&/input|textarea/i.test(c.target.tagName)&&a.contains(e[0],c.target)||(e.trigger(c=a.Event("hide.bs.dropdown",f)),c.isDefaultPrevented()||(d.attr("aria-expanded","false"),e.removeClass("open").trigger(a.Event("hidden.bs.dropdown",f)))))}))}function d(b){return this.each(function(){var c=a(this),d=c.data("bs.dropdown");d||c.data("bs.dropdown",d=new g(this)),"string"==typeof b&&d[b].call(c)})}var e=".dropdown-backdrop",f='[data-toggle="dropdown"]',g=function(b){a(b).on("click.bs.dropdown",this.toggle)};g.VERSION="3.3.7",g.prototype.toggle=function(d){var e=a(this);if(!e.is(".disabled, :disabled")){var f=b(e),g=f.hasClass("open");if(c(),!g){"ontouchstart"in document.documentElement&&!f.closest(".navbar-nav").length&&a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click",c);var h={relatedTarget:this};if(f.trigger(d=a.Event("show.bs.dropdown",h)),d.isDefaultPrevented())return;e.trigger("focus").attr("aria-expanded","true"),f.toggleClass("open").trigger(a.Event("shown.bs.dropdown",h))}return!1}},g.prototype.keydown=function(c){if(/(38|40|27|32)/.test(c.which)&&!/input|textarea/i.test(c.target.tagName)){var d=a(this);if(c.preventDefault(),c.stopPropagation(),!d.is(".disabled, :disabled")){var e=b(d),g=e.hasClass("open");if(!g&&27!=c.which||g&&27==c.which)return 27==c.which&&e.find(f).trigger("focus"),d.trigger("click");var h=" li:not(.disabled):visible a",i=e.find(".dropdown-menu"+h);if(i.length){var j=i.index(c.target);38==c.which&&j>0&&j--,40==c.which&&j<i.length-1&&j++,~j||(j=0),i.eq(j).trigger("focus")}}}};var h=a.fn.dropdown;a.fn.dropdown=d,a.fn.dropdown.Constructor=g,a.fn.dropdown.noConflict=function(){return a.fn.dropdown=h,this},a(document).on("click.bs.dropdown.data-api",c).on("click.bs.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.bs.dropdown.data-api",f,g.prototype.toggle).on("keydown.bs.dropdown.data-api",f,g.prototype.keydown).on("keydown.bs.dropdown.data-api",".dropdown-menu",g.prototype.keydown)}(jQuery),+function(a){"use strict";function b(b,d){return this.each(function(){var e=a(this),f=e.data("bs.modal"),g=a.extend({},c.DEFAULTS,e.data(),"object"==typeof b&&b);f||e.data("bs.modal",f=new c(this,g)),"string"==typeof b?f[b](d):g.show&&f.show(d)})}var c=function(b,c){this.options=c,this.$body=a(document.body),this.$element=a(b),this.$dialog=this.$element.find(".modal-dialog"),this.$backdrop=null,this.isShown=null,this.originalBodyPad=null,this.scrollbarWidth=0,this.ignoreBackdropClick=!1,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,a.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};c.VERSION="3.3.7",c.TRANSITION_DURATION=300,c.BACKDROP_TRANSITION_DURATION=150,c.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},c.prototype.toggle=function(a){return this.isShown?this.hide():this.show(a)},c.prototype.show=function(b){var d=this,e=a.Event("show.bs.modal",{relatedTarget:b});this.$element.trigger(e),this.isShown||e.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',a.proxy(this.hide,this)),this.$dialog.on("mousedown.dismiss.bs.modal",function(){d.$element.one("mouseup.dismiss.bs.modal",function(b){a(b.target).is(d.$element)&&(d.ignoreBackdropClick=!0)})}),this.backdrop(function(){var e=a.support.transition&&d.$element.hasClass("fade");d.$element.parent().length||d.$element.appendTo(d.$body),d.$element.show().scrollTop(0),d.adjustDialog(),e&&d.$element[0].offsetWidth,d.$element.addClass("in"),d.enforceFocus();var f=a.Event("shown.bs.modal",{relatedTarget:b});e?d.$dialog.one("bsTransitionEnd",function(){d.$element.trigger("focus").trigger(f)}).emulateTransitionEnd(c.TRANSITION_DURATION):d.$element.trigger("focus").trigger(f)}))},c.prototype.hide=function(b){b&&b.preventDefault(),b=a.Event("hide.bs.modal"),this.$element.trigger(b),this.isShown&&!b.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),a(document).off("focusin.bs.modal"),this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),this.$dialog.off("mousedown.dismiss.bs.modal"),a.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",a.proxy(this.hideModal,this)).emulateTransitionEnd(c.TRANSITION_DURATION):this.hideModal())},c.prototype.enforceFocus=function(){a(document).off("focusin.bs.modal").on("focusin.bs.modal",a.proxy(function(a){document===a.target||this.$element[0]===a.target||this.$element.has(a.target).length||this.$element.trigger("focus")},this))},c.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",a.proxy(function(a){27==a.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},c.prototype.resize=function(){this.isShown?a(window).on("resize.bs.modal",a.proxy(this.handleUpdate,this)):a(window).off("resize.bs.modal")},c.prototype.hideModal=function(){var a=this;this.$element.hide(),this.backdrop(function(){a.$body.removeClass("modal-open"),a.resetAdjustments(),a.resetScrollbar(),a.$element.trigger("hidden.bs.modal")})},c.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},c.prototype.backdrop=function(b){var d=this,e=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var f=a.support.transition&&e;if(this.$backdrop=a(document.createElement("div")).addClass("modal-backdrop "+e).appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",a.proxy(function(a){return this.ignoreBackdropClick?void(this.ignoreBackdropClick=!1):void(a.target===a.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus():this.hide()))},this)),f&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!b)return;f?this.$backdrop.one("bsTransitionEnd",b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):b()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var g=function(){d.removeBackdrop(),b&&b()};a.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):g()}else b&&b()},c.prototype.handleUpdate=function(){this.adjustDialog()},c.prototype.adjustDialog=function(){var a=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&a?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!a?this.scrollbarWidth:""})},c.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},c.prototype.checkScrollbar=function(){var a=window.innerWidth;if(!a){var b=document.documentElement.getBoundingClientRect();a=b.right-Math.abs(b.left)}this.bodyIsOverflowing=document.body.clientWidth<a,this.scrollbarWidth=this.measureScrollbar()},c.prototype.setScrollbar=function(){var a=parseInt(this.$body.css("padding-right")||0,10);this.originalBodyPad=document.body.style.paddingRight||"",this.bodyIsOverflowing&&this.$body.css("padding-right",a+this.scrollbarWidth)},c.prototype.resetScrollbar=function(){this.$body.css("padding-right",this.originalBodyPad)},c.prototype.measureScrollbar=function(){var a=document.createElement("div");a.className="modal-scrollbar-measure",this.$body.append(a);var b=a.offsetWidth-a.clientWidth;return this.$body[0].removeChild(a),b};var d=a.fn.modal;a.fn.modal=b,a.fn.modal.Constructor=c,a.fn.modal.noConflict=function(){return a.fn.modal=d,this},a(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(c){var d=a(this),e=d.attr("href"),f=a(d.attr("data-target")||e&&e.replace(/.*(?=#[^\s]+$)/,"")),g=f.data("bs.modal")?"toggle":a.extend({remote:!/#/.test(e)&&e},f.data(),d.data());d.is("a")&&c.preventDefault(),f.one("show.bs.modal",function(a){a.isDefaultPrevented()||f.one("hidden.bs.modal",function(){d.is(":visible")&&d.trigger("focus")})}),b.call(f,g,this)})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tooltip"),f="object"==typeof b&&b;!e&&/destroy|hide/.test(b)||(e||d.data("bs.tooltip",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",a,b)};c.VERSION="3.3.7",c.TRANSITION_DURATION=150,c.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},c.prototype.init=function(b,c,d){if(this.enabled=!0,this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.$viewport=this.options.viewport&&a(a.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var e=this.options.trigger.split(" "),f=e.length;f--;){var g=e[f];if("click"==g)this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this));else if("manual"!=g){var h="hover"==g?"mouseenter":"focusin",i="hover"==g?"mouseleave":"focusout";this.$element.on(h+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(i+"."+this.type,this.options.selector,a.proxy(this.leave,this))}}this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.getOptions=function(b){return b=a.extend({},this.getDefaults(),this.$element.data(),b),b.delay&&"number"==typeof b.delay&&(b.delay={show:b.delay,hide:b.delay}),b},c.prototype.getDelegateOptions=function(){var b={},c=this.getDefaults();return this._options&&a.each(this._options,function(a,d){c[a]!=d&&(b[a]=d)}),b},c.prototype.enter=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusin"==b.type?"focus":"hover"]=!0),c.tip().hasClass("in")||"in"==c.hoverState?void(c.hoverState="in"):(clearTimeout(c.timeout),c.hoverState="in",c.options.delay&&c.options.delay.show?void(c.timeout=setTimeout(function(){"in"==c.hoverState&&c.show()},c.options.delay.show)):c.show())},c.prototype.isInStateTrue=function(){for(var a in this.inState)if(this.inState[a])return!0;return!1},c.prototype.leave=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);if(c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusout"==b.type?"focus":"hover"]=!1),!c.isInStateTrue())return clearTimeout(c.timeout),c.hoverState="out",c.options.delay&&c.options.delay.hide?void(c.timeout=setTimeout(function(){"out"==c.hoverState&&c.hide()},c.options.delay.hide)):c.hide()},c.prototype.show=function(){var b=a.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(b);var d=a.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(b.isDefaultPrevented()||!d)return;var e=this,f=this.tip(),g=this.getUID(this.type);this.setContent(),f.attr("id",g),this.$element.attr("aria-describedby",g),this.options.animation&&f.addClass("fade");var h="function"==typeof this.options.placement?this.options.placement.call(this,f[0],this.$element[0]):this.options.placement,i=/\s?auto?\s?/i,j=i.test(h);j&&(h=h.replace(i,"")||"top"),f.detach().css({top:0,left:0,display:"block"}).addClass(h).data("bs."+this.type,this),this.options.container?f.appendTo(this.options.container):f.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var k=this.getPosition(),l=f[0].offsetWidth,m=f[0].offsetHeight;if(j){var n=h,o=this.getPosition(this.$viewport);h="bottom"==h&&k.bottom+m>o.bottom?"top":"top"==h&&k.top-m<o.top?"bottom":"right"==h&&k.right+l>o.width?"left":"left"==h&&k.left-l<o.left?"right":h,f.removeClass(n).addClass(h)}var p=this.getCalculatedOffset(h,k,l,m);this.applyPlacement(p,h);var q=function(){var a=e.hoverState;e.$element.trigger("shown.bs."+e.type),e.hoverState=null,"out"==a&&e.leave(e)};a.support.transition&&this.$tip.hasClass("fade")?f.one("bsTransitionEnd",q).emulateTransitionEnd(c.TRANSITION_DURATION):q()}},c.prototype.applyPlacement=function(b,c){var d=this.tip(),e=d[0].offsetWidth,f=d[0].offsetHeight,g=parseInt(d.css("margin-top"),10),h=parseInt(d.css("margin-left"),10);isNaN(g)&&(g=0),isNaN(h)&&(h=0),b.top+=g,b.left+=h,a.offset.setOffset(d[0],a.extend({using:function(a){d.css({top:Math.round(a.top),left:Math.round(a.left)})}},b),0),d.addClass("in");var i=d[0].offsetWidth,j=d[0].offsetHeight;"top"==c&&j!=f&&(b.top=b.top+f-j);var k=this.getViewportAdjustedDelta(c,b,i,j);k.left?b.left+=k.left:b.top+=k.top;var l=/top|bottom/.test(c),m=l?2*k.left-e+i:2*k.top-f+j,n=l?"offsetWidth":"offsetHeight";d.offset(b),this.replaceArrow(m,d[0][n],l)},c.prototype.replaceArrow=function(a,b,c){this.arrow().css(c?"left":"top",50*(1-a/b)+"%").css(c?"top":"left","")},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},c.prototype.hide=function(b){function d(){"in"!=e.hoverState&&f.detach(),e.$element&&e.$element.removeAttr("aria-describedby").trigger("hidden.bs."+e.type),b&&b()}var e=this,f=a(this.$tip),g=a.Event("hide.bs."+this.type);if(this.$element.trigger(g),!g.isDefaultPrevented())return f.removeClass("in"),a.support.transition&&f.hasClass("fade")?f.one("bsTransitionEnd",d).emulateTransitionEnd(c.TRANSITION_DURATION):d(),this.hoverState=null,this},c.prototype.fixTitle=function(){var a=this.$element;(a.attr("title")||"string"!=typeof a.attr("data-original-title"))&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},c.prototype.hasContent=function(){return this.getTitle()},c.prototype.getPosition=function(b){b=b||this.$element;var c=b[0],d="BODY"==c.tagName,e=c.getBoundingClientRect();null==e.width&&(e=a.extend({},e,{width:e.right-e.left,height:e.bottom-e.top}));var f=window.SVGElement&&c instanceof window.SVGElement,g=d?{top:0,left:0}:f?null:b.offset(),h={scroll:d?document.documentElement.scrollTop||document.body.scrollTop:b.scrollTop()},i=d?{width:a(window).width(),height:a(window).height()}:null;return a.extend({},e,h,i,g)},c.prototype.getCalculatedOffset=function(a,b,c,d){return"bottom"==a?{top:b.top+b.height,left:b.left+b.width/2-c/2}:"top"==a?{top:b.top-d,left:b.left+b.width/2-c/2}:"left"==a?{top:b.top+b.height/2-d/2,left:b.left-c}:{top:b.top+b.height/2-d/2,left:b.left+b.width}},c.prototype.getViewportAdjustedDelta=function(a,b,c,d){var e={top:0,left:0};if(!this.$viewport)return e;var f=this.options.viewport&&this.options.viewport.padding||0,g=this.getPosition(this.$viewport);if(/right|left/.test(a)){var h=b.top-f-g.scroll,i=b.top+f-g.scroll+d;h<g.top?e.top=g.top-h:i>g.top+g.height&&(e.top=g.top+g.height-i)}else{var j=b.left-f,k=b.left+f+c;j<g.left?e.left=g.left-j:k>g.right&&(e.left=g.left+g.width-k)}return e},c.prototype.getTitle=function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||("function"==typeof c.title?c.title.call(b[0]):c.title)},c.prototype.getUID=function(a){do a+=~~(1e6*Math.random());while(document.getElementById(a));return a},c.prototype.tip=function(){if(!this.$tip&&(this.$tip=a(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},c.prototype.enable=function(){this.enabled=!0},c.prototype.disable=function(){this.enabled=!1},c.prototype.toggleEnabled=function(){this.enabled=!this.enabled},c.prototype.toggle=function(b){var c=this;b&&(c=a(b.currentTarget).data("bs."+this.type),c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c))),b?(c.inState.click=!c.inState.click,c.isInStateTrue()?c.enter(c):c.leave(c)):c.tip().hasClass("in")?c.leave(c):c.enter(c)},c.prototype.destroy=function(){var a=this;clearTimeout(this.timeout),this.hide(function(){a.$element.off("."+a.type).removeData("bs."+a.type),a.$tip&&a.$tip.detach(),a.$tip=null,a.$arrow=null,a.$viewport=null,a.$element=null})};var d=a.fn.tooltip;a.fn.tooltip=b,a.fn.tooltip.Constructor=c,a.fn.tooltip.noConflict=function(){return a.fn.tooltip=d,this}}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.popover"),f="object"==typeof b&&b;!e&&/destroy|hide/.test(b)||(e||d.data("bs.popover",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.init("popover",a,b)};if(!a.fn.tooltip)throw new Error("Popover requires tooltip.js");c.VERSION="3.3.7",c.DEFAULTS=a.extend({},a.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),c.prototype=a.extend({},a.fn.tooltip.Constructor.prototype),c.prototype.constructor=c,c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle(),c=this.getContent();a.find(".popover-title")[this.options.html?"html":"text"](b),a.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof c?"html":"append":"text"](c),a.removeClass("fade top bottom left right in"),a.find(".popover-title").html()||a.find(".popover-title").hide()},c.prototype.hasContent=function(){return this.getTitle()||this.getContent()},c.prototype.getContent=function(){var a=this.$element,b=this.options;return a.attr("data-content")||("function"==typeof b.content?b.content.call(a[0]):b.content)},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")};var d=a.fn.popover;a.fn.popover=b,a.fn.popover.Constructor=c,a.fn.popover.noConflict=function(){return a.fn.popover=d,this}}(jQuery),+function(a){"use strict";function b(c,d){this.$body=a(document.body),this.$scrollElement=a(a(c).is(document.body)?window:c),this.options=a.extend({},b.DEFAULTS,d),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",a.proxy(this.process,this)),this.refresh(),this.process()}function c(c){return this.each(function(){var d=a(this),e=d.data("bs.scrollspy"),f="object"==typeof c&&c;e||d.data("bs.scrollspy",e=new b(this,f)),"string"==typeof c&&e[c]()})}b.VERSION="3.3.7",b.DEFAULTS={offset:10},b.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},b.prototype.refresh=function(){var b=this,c="offset",d=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),a.isWindow(this.$scrollElement[0])||(c="position",d=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var b=a(this),e=b.data("target")||b.attr("href"),f=/^#./.test(e)&&a(e);return f&&f.length&&f.is(":visible")&&[[f[c]().top+d,e]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){b.offsets.push(this[0]),b.targets.push(this[1])})},b.prototype.process=function(){var a,b=this.$scrollElement.scrollTop()+this.options.offset,c=this.getScrollHeight(),d=this.options.offset+c-this.$scrollElement.height(),e=this.offsets,f=this.targets,g=this.activeTarget;if(this.scrollHeight!=c&&this.refresh(),b>=d)return g!=(a=f[f.length-1])&&this.activate(a);if(g&&b<e[0])return this.activeTarget=null,this.clear();for(a=e.length;a--;)g!=f[a]&&b>=e[a]&&(void 0===e[a+1]||b<e[a+1])&&this.activate(f[a])},b.prototype.activate=function(b){
		this.activeTarget=b,this.clear();var c=this.selector+'[data-target="'+b+'"],'+this.selector+'[href="'+b+'"]',d=a(c).parents("li").addClass("active");d.parent(".dropdown-menu").length&&(d=d.closest("li.dropdown").addClass("active")),d.trigger("activate.bs.scrollspy")},b.prototype.clear=function(){a(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var d=a.fn.scrollspy;a.fn.scrollspy=c,a.fn.scrollspy.Constructor=b,a.fn.scrollspy.noConflict=function(){return a.fn.scrollspy=d,this},a(window).on("load.bs.scrollspy.data-api",function(){a('[data-spy="scroll"]').each(function(){var b=a(this);c.call(b,b.data())})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tab");e||d.data("bs.tab",e=new c(this)),"string"==typeof b&&e[b]()})}var c=function(b){this.element=a(b)};c.VERSION="3.3.7",c.TRANSITION_DURATION=150,c.prototype.show=function(){var b=this.element,c=b.closest("ul:not(.dropdown-menu)"),d=b.data("target");if(d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,"")),!b.parent("li").hasClass("active")){var e=c.find(".active:last a"),f=a.Event("hide.bs.tab",{relatedTarget:b[0]}),g=a.Event("show.bs.tab",{relatedTarget:e[0]});if(e.trigger(f),b.trigger(g),!g.isDefaultPrevented()&&!f.isDefaultPrevented()){var h=a(d);this.activate(b.closest("li"),c),this.activate(h,h.parent(),function(){e.trigger({type:"hidden.bs.tab",relatedTarget:b[0]}),b.trigger({type:"shown.bs.tab",relatedTarget:e[0]})})}}},c.prototype.activate=function(b,d,e){function f(){g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),h?(b[0].offsetWidth,b.addClass("in")):b.removeClass("fade"),b.parent(".dropdown-menu").length&&b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),e&&e()}var g=d.find("> .active"),h=e&&a.support.transition&&(g.length&&g.hasClass("fade")||!!d.find("> .fade").length);g.length&&h?g.one("bsTransitionEnd",f).emulateTransitionEnd(c.TRANSITION_DURATION):f(),g.removeClass("in")};var d=a.fn.tab;a.fn.tab=b,a.fn.tab.Constructor=c,a.fn.tab.noConflict=function(){return a.fn.tab=d,this};var e=function(c){c.preventDefault(),b.call(a(this),"show")};a(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',e).on("click.bs.tab.data-api",'[data-toggle="pill"]',e)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.affix"),f="object"==typeof b&&b;e||d.data("bs.affix",e=new c(this,f)),"string"==typeof b&&e[b]()})}var c=function(b,d){this.options=a.extend({},c.DEFAULTS,d),this.$target=a(this.options.target).on("scroll.bs.affix.data-api",a.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",a.proxy(this.checkPositionWithEventLoop,this)),this.$element=a(b),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};c.VERSION="3.3.7",c.RESET="affix affix-top affix-bottom",c.DEFAULTS={offset:0,target:window},c.prototype.getState=function(a,b,c,d){var e=this.$target.scrollTop(),f=this.$element.offset(),g=this.$target.height();if(null!=c&&"top"==this.affixed)return e<c&&"top";if("bottom"==this.affixed)return null!=c?!(e+this.unpin<=f.top)&&"bottom":!(e+g<=a-d)&&"bottom";var h=null==this.affixed,i=h?e:f.top,j=h?g:b;return null!=c&&e<=c?"top":null!=d&&i+j>=a-d&&"bottom"},c.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(c.RESET).addClass("affix");var a=this.$target.scrollTop(),b=this.$element.offset();return this.pinnedOffset=b.top-a},c.prototype.checkPositionWithEventLoop=function(){setTimeout(a.proxy(this.checkPosition,this),1)},c.prototype.checkPosition=function(){if(this.$element.is(":visible")){var b=this.$element.height(),d=this.options.offset,e=d.top,f=d.bottom,g=Math.max(a(document).height(),a(document.body).height());"object"!=typeof d&&(f=e=d),"function"==typeof e&&(e=d.top(this.$element)),"function"==typeof f&&(f=d.bottom(this.$element));var h=this.getState(g,b,e,f);if(this.affixed!=h){null!=this.unpin&&this.$element.css("top","");var i="affix"+(h?"-"+h:""),j=a.Event(i+".bs.affix");if(this.$element.trigger(j),j.isDefaultPrevented())return;this.affixed=h,this.unpin="bottom"==h?this.getPinnedOffset():null,this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix","affixed")+".bs.affix")}"bottom"==h&&this.$element.offset({top:g-b-f})}};var d=a.fn.affix;a.fn.affix=b,a.fn.affix.Constructor=c,a.fn.affix.noConflict=function(){return a.fn.affix=d,this},a(window).on("load",function(){a('[data-spy="affix"]').each(function(){var c=a(this),d=c.data();d.offset=d.offset||{},null!=d.offsetBottom&&(d.offset.bottom=d.offsetBottom),null!=d.offsetTop&&(d.offset.top=d.offsetTop),b.call(c,d)})})}(jQuery);
});
