/******/ (function (modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if (installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
      /******/
    }
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
      /******/
    };
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
    /******/
  }
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function (exports, name, getter) {
/******/ 		if (!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
      /******/
    }
    /******/
  };
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function (exports) {
/******/ 		if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
      /******/
    }
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
    /******/
  };
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function (value, mode) {
/******/ 		if (mode & 1) value = __webpack_require__(value);
/******/ 		if (mode & 8) return value;
/******/ 		if ((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if (mode & 2 && typeof value != 'string') for (var key in value) __webpack_require__.d(ns, key, function (key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
    /******/
  };
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function (module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
    /******/
  };
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function (object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 92);
  /******/
})
/************************************************************************/
/******/({

/***/ "./resources/metronic/js/pages/crud/ktdatatable/base/html-table.js":
/*!*************************************************************************!*\
  !*** ./resources/metronic/js/pages/crud/ktdatatable/base/html-table.js ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

      "use strict";
      // Class definition

      var KTDatatableHtmlTableDemo = function () {

        var tbAdministrasi = function tbAdministrasi() {
          var datatable = $('#tb_administrasi').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            },
            rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false,
              class: 'datatable-bordered',
            },
            columns: [{
              field: 'Tanggal Agenda',
              title: 'Tanggal Agenda'
            }, {
              field: 'No Surat',
              title: 'No Surat'
            }, {
              field: 'Instansi Pengusul',
              title: 'Instansi Pengusul'
            }, {
              field: 'Jenis Usulan',
              title: 'Jenis Usulan'
            }, {
              field: 'NIP',
              title: 'NIP'
            }, {
              field: 'Nama',
              title: 'Nama'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#no_surat').on('keyup', function () {
            datatable.search($(this).val().toLowerCase(), 'NIP');
          });
        };

        var tbAdministrasi2 = function tbAdministrasi2() {
          var datatable = $('#tb_administrasi2').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            },
            rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false,
              class: 'datatable-bordered',
            },
            columns: [{
              field: 'Tanggal Agenda',
              title: 'Tanggal Agenda'
            }, {
              field: 'No Surat',
              title: 'No Surat'
            }, {
              field: 'Instansi Pengusul',
              title: 'Instansi Pengusul'
            }, {
              field: 'Jenis Usulan',
              title: 'Jenis Usulan'
            }, {
              field: 'NIP',
              title: 'NIP'
            }, {
              field: 'Nama',
              title: 'Nama'
            }, {
              field: 'Jabatan',
              title: 'Jabatan'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#no_surat2').on('keyup', function () {
            datatable.search($(this).val().toLowerCase(), 'NIP');
          });
        };

        var tbBaru = function tbBaru() {
          var datatable = $('#tb_baru').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            },
            rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false,
              class: 'datatable-bordered',
            },
            columns: [{
              field: 'Tanggal Agenda',
              title: 'Tanggal Agenda'
            }, {
              field: 'No Surat',
              title: 'No Surat'
            }, {
              field: 'Instansi Pengusul',
              title: 'Instansi Pengusul'
            }, {
              field: 'Jenis Usulan',
              title: 'Jenis Usulan'
            }, {
              field: 'NIP',
              title: 'NIP'
            }, {
              field: 'Nama',
              title: 'Nama'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#no_surat').on('keyup', function () {
            datatable.search($(this).val().toLowerCase(), 'NIP');
          });
        };

        var tbProses = function tbProses() {
          var datatable = $('#tb_proses').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            },
            rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false,
              class: 'datatable-bordered',
            },
            columns: [{
              field: 'Tanggal Agenda',
              title: 'Tanggal Agenda'
            }, {
              field: 'No Surat',
              title: 'No Surat'
            }, {
              field: 'Instansi Pengusul',
              title: 'Instansi Pengusul'
            }, {
              field: 'Jenis Usulan',
              title: 'Jenis Usulan'
            }, {
              field: 'NIP',
              title: 'NIP'
            }, {
              field: 'Nama',
              title: 'Nama'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#no_surat').on('keyup', function () {
            datatable.search($(this).val().toLowerCase(), 'NIP');
          });
        };

        var tbPending = function tbPending() {
          var datatable = $('#tb_pending').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            },
            rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false,
              class: 'datatable-bordered',
            },
            columns: [{
              field: 'Tanggal Agenda',
              title: 'Tanggal Agenda'
            }, {
              field: 'No Surat',
              title: 'No Surat'
            }, {
              field: 'Instansi Pengusul',
              title: 'Instansi Pengusul'
            }, {
              field: 'Jenis Usulan',
              title: 'Jenis Usulan'
            }, {
              field: 'NIP',
              title: 'NIP'
            }, {
              field: 'Nama',
              title: 'Nama'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#no_surat').on('keyup', function () {
            datatable.search($(this).val().toLowerCase(), 'NIP');
          });
        };

        var tbTolak = function tbTolak() {
          var datatable = $('#tb_tolak').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            },
            rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false,
              class: 'datatable-bordered',
            },
            columns: [{
              field: 'Tanggal Agenda',
              title: 'Tanggal Agenda'
            }, {
              field: 'No Surat',
              title: 'No Surat'
            }, {
              field: 'Instansi Pengusul',
              title: 'Instansi Pengusul'
            }, {
              field: 'Jenis Usulan',
              title: 'Jenis Usulan'
            }, {
              field: 'NIP',
              title: 'NIP'
            }, {
              field: 'Nama',
              title: 'Nama'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#no_surat').on('keyup', function () {
            datatable.search($(this).val().toLowerCase(), 'NIP');
          });
        };

        return {
          // Public functions
          init: function init() {
            // init demo
            tbAdministrasi();
            tbAdministrasi2();
            tbBaru();
            tbProses();
            tbPending();
            tbTolak();

          }
        };
      }();

      jQuery(document).ready(function () {
        KTDatatableHtmlTableDemo.init();
      });

      /***/
    }),

/***/ 92:
/*!*******************************************************************************!*\
  !*** multi ./resources/metronic/js/pages/crud/ktdatatable/base/html-table.js ***!
  \*******************************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

      module.exports = __webpack_require__(/*! C:\laragon\www\zfix\resources\metronic\js\pages\crud\ktdatatable\base\html-table.js */"./resources/metronic/js/pages/crud/ktdatatable/base/html-table.js");


      /***/
    })

  /******/
});