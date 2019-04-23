/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\xampp\\htdocs\\bike_sprint\\resources\\js\\app.js: Unexpected token (19:0)\n\n  17 |     QrcodeCapture\n  18 |   },\n> 19 | ))\n     | ^\n  20 | \n  21 | /**\n  22 |  * The following block of code may be used to automatically register your\n    at Parser.raise (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:3851:17)\n    at Parser.unexpected (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5167:16)\n    at Parser.parseIdentifierName (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:7007:18)\n    at Parser.parseIdentifier (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:6985:23)\n    at Parser.parseMaybePrivateName (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:6350:19)\n    at Parser.parsePropertyName (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:6806:98)\n    at Parser.parseObjectMember (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:6707:10)\n    at Parser.parseObj (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:6641:25)\n    at Parser.parseExprAtom (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:6274:21)\n    at Parser.parseExprSubscripts (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5914:23)\n    at Parser.parseMaybeUnary (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5894:21)\n    at Parser.parseExprOps (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5781:23)\n    at Parser.parseMaybeConditional (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5754:23)\n    at Parser.parseMaybeAssign (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5701:21)\n    at Parser.parseExprListItem (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:6977:18)\n    at Parser.parseCallExpressionArguments (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:6121:22)\n    at Parser.parseSubscript (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:6016:29)\n    at Parser.parseSubscripts (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5935:19)\n    at Parser.parseExprSubscripts (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5924:17)\n    at Parser.parseMaybeUnary (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5894:21)\n    at Parser.parseExprOps (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5781:23)\n    at Parser.parseMaybeConditional (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5754:23)\n    at Parser.parseMaybeAssign (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5701:21)\n    at Parser.parseExpression (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:5649:23)\n    at Parser.parseStatementContent (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:7420:23)\n    at Parser.parseStatement (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:7291:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:7868:25)\n    at Parser.parseBlockBody (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:7855:10)\n    at Parser.parseTopLevel (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:7220:10)\n    at Parser.parse (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:8863:17)\n    at parse (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\parser\\lib\\index.js:11135:38)\n    at parser (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:170:34)\n    at normalizeFile (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:138:11)\n    at runSync (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\core\\lib\\transformation\\index.js:44:43)\n    at runAsync (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\core\\lib\\transformation\\index.js:35:14)\n    at process.nextTick (C:\\xampp\\htdocs\\bike_sprint\\node_modules\\@babel\\core\\lib\\transform.js:34:34)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\bike_sprint\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\bike_sprint\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });