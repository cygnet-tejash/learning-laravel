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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 38);
/******/ })
/************************************************************************/
/******/ ({

/***/ 38:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(39);


/***/ }),

/***/ 39:
/***/ (function(module, exports, __webpack_require__) {

var AjaxRequst = __webpack_require__(40);

var ajaxConfig = {
    url: "https://api.github.com/users/cygnet-tejash",
    data: {},
    type: "GET",
    success: function success(response) {
        if (response.status === 200) {
            var data = JSON.parse(response.responseText);
            console.log(data.login);
        }
    },
    error: function error(response) {
        // var data = JSON.parse(response);
        console.log(response);
    }
};

var ajax = new AjaxRequst(ajaxConfig);
ajax.sendRequest(ajax.success, ajax.error);
ajax.resetConfig();

/***/ }),

/***/ 40:
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

module.exports = function () {
    function AjaxRequst(options) {
        _classCallCheck(this, AjaxRequst);

        this.url = options.url;
        this.type = options.type ? options.type : "POST";
        this.data = options.data ? options.beforeSend : null;
        this.beforeSend = options.beforeSend ? options.beforeSend : null;
        this.success = options.success ? options.success : null;
        this.error = options.error ? options.error : null;
        this.complete = options.complete ? options.complete : null;

        // this.sendRequest(this.success, this.error);
        // this.resetConfig()
    }

    _createClass(AjaxRequst, [{
        key: "sendRequest",
        value: function sendRequest(successCallback, errorCallback) {

            var xhr = new XMLHttpRequest();

            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 300) {
                    console.log("success!", xhr);
                    successCallback(xhr);
                } else {
                    console.log("The request failed!");
                    errorCallback(xhr);
                }
            };

            xhr.open(this.type, this.url);

            xhr.send();
        }
    }, {
        key: "resetConfig",
        value: function resetConfig() {
            this.url = null;
            this.type = null;
            this.data = null;
            this.beforeSend = null;
            this.success = null;
            this.error = null;
            this.complete = null;
        }
    }]);

    return AjaxRequst;
}();

/***/ })

/******/ });