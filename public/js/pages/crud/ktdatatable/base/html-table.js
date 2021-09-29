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

        // Private functions
      
        // demo initializer
        // var groupByTable = function groupByTable() {
        //   var dataJSONArray = JSON.parse(
        //     '[{"RecordID":1,"Nama":"Grub 1","NIP":"12345523455123","Instansi":"BADAN RISET DAN INOVASI NASIONAL","Status":1,"Type":3,"Orders":[{"Jabatan":"Andika Purnomo","Periode":"817161514"},{"Jabatan":"Arjuna Weda","Periode":"918178374"},{"Jabatan":"Arlambang Pambudie","Periode":"12312311"},{"Jabatan":"Lala Cyanticka","Periode":"9181716154"}]},\n' +
        //     '{"RecordID":2,"Nama":"Grub 2","NIP":"12312312312","Instansi":"BADAN RISET DAN INOVASI NASIONAL","Status":3,"Type":3,"Orders":[{"Jabatan":"Ariel Sibolutanggang","Pangkat":"IV/c","Periode":"2021/2022","NoPertek":"456789056788","TanggalPertek":"3/5/2021"},{}]},\n' +
        //     '{"RecordID":3,"Nama":"Grub 3","NIP":"12312312","Instansi":"BADAN RISET DAN INOVASI NASIONAL","Status":4,"Type":4,"Orders":[{"Jabatan":"Arsyaf Albuquerque","Pangkat":"IV/c","Periode":"2021/2022","NoPertek":"92827625242425","TanggalPertek":"3/5/2021"},{}]},\n' +
        //     '{"RecordID":345,"Nama":"Grub 4","NIP":"1231231231231","Instansi":"BADAN RISET DAN INOVASI NASIONAL","Status":2,"Type":3,"Orders":[{"Jabatan":"Hendrawan Susilo Adi","Pangkat":"IV/c","Periode":"2021/2022","NoPertek":"14124121312","TanggalPertek":"3/5/2021"},{}]},\n' +
        //     '{"RecordID":350,"Nama":"Grub 5","NIP":"345345345345","Instansi":"BADAN RISET DAN INOVASI NASIONAL","Status":3,"Type":3,"Orders":[{"Jabatan":"Ramos Raditya Anaki","Pangkat":"IV/c","Periode":"2021/2022","NoPertek":"45678945678","TanggalPertek":"3/5/2021"},{}]}]');
      
        //   var datatable = $('.groupByTable').KTDatatable({
        //     // datasource definition
        //     data: {
        //       type: 'local',
        //       source: dataJSONArray,
        //       pageSize: 10, // display 20 records per page
        //     },
        //     // data: {
        //     //   saveState: {
        //     //     cookie: false
        //     //   }
        //     // },
        //     // layout definition
        //     layout: {
        //       scroll: false,
        //       height: null,
        //       footer: false,
        //     },
      
        //     sortable: true,
      
        //     filterable: false,
      
        //     pagination: true,
      
        //     detail: {
        //       title: 'Load sub table',
        //       content: subTableInit,
        //     },
      
        //     search: {
        //       input: $('#kt_datatable_search_query'),
        //       key: 'generalSearch'
        //     },
      
        //     // columns definition
        //     columns: [
        //       {
        //         field: 'RecordID',
        //         title: '',
        //         sortable: false,
        //         width: 30,
        //         textAlign: 'center',
        //       }, {
        //         field: 'Nama',
        //         title: 'Grub',
        //         width: 200,
      
        //       }, {
        //         field: '',
        //         title: '',
        //       }, {
        //         field: '',
        //         title: '',
        //       }, {
        //         field: 'Status',
        //         title: '',
        //         Align:'right',
        //         template: function(row) {
        //           var status = {
        //             1: {'title': 'JF Analis SDMA Muda', 'class': 'label-primary'},
        //             2: {'title': 'Pengelola Lainnya', 'class': ' label-danger'},
        //             3: {'title': 'JF Analis SDMA Pertama ', 'class': ' label-success'},
        //             4: {'title': 'JF Analis SDMA Terampil', 'class': ' label-info'},
        //             5: {'title': 'Warning', 'class': ' label-warning'},
        //           };
        //           return '<span class="label ' + status[row.Status].class + ' label-inline label-pill">' + status[row.Status].title + '</span>';
        //         },
        //       },  {
        //         field: '',
        //         title: '',
        //         autoHide: false,
        //         // callback function support for column rendering
        //         template: function(row) {
        //           var status = {
        //             1: {'title': 'Online', 'state': 'danger'},
        //             2: {'title': 'Retail', 'state': 'primary'},
        //             3: {'title': 'Telah di Verifikasi', 'state': 'success'},
        //           };
        //           return '<span class="label label-' + status[row.Type].state + ' label-dot"></span>&nbsp;<span class="font-weight-bold text-' + status[row.Type].state +
        //             '">' +
        //             status[row.Type].title + '</span>';
        //         },
        //       }, {
        //         field: 'Actions',
        //         title: '',
        //         sortable: false,
        //         textAlign:'right',
        //         overflow: 'visible',
        //         template: function() {
        //           return '\
        //           <a href="#" class="btn btn-outline-success">\
        //           <i class="flaticon2-poll-symbol"></i> Distribusikan Ke Grub\
        //         </a>\
        //                        \
        //                      \
        //                     ';
        //         },
        //       }],
        //   });
      
        //   $('#kt_datatable_search_status').on('change', function() {
        //     datatable.search($(this).val().toLowerCase(), 'Status');
        //   });
      
        //   $('#kt_datatable_search_type').on('change', function() {
        //     datatable.search($(this).val().toLowerCase(), 'Type');
        //   });
      
        //   $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
        // };

        // var subTableInit = function(e) {
        //   $('<div/>').attr('id', 'child_data_local_' + e.data.RecordID).appendTo(e.detailCell).KTDatatable({
        //     data: {
        //       type: 'local',
        //       source: e.data.Orders,
        //       pageSize: 6,
        //     },
      
        //     // layout definition
        //     layout: {
        //       scroll: true,
        //       height: 600,
        //       footer: false,
        //     },
        //     pagination: false,
        //     sortable: true,
      
        //     // columns definition
        //     columns: [
        //       {
        //         field: 'Jabatan',
        //         title: 'Nama Anggota',
      
        //       }, {
        //         field: '',
        //         title: '',
        //         width: 100
        //       }, {
        //         field: 'Periode',
        //         title: 'NIP',
        //       }, {
        //         field: 'Actions',
        //         title: '',
        //         sortable: false,
        //         textAlign:'right',
        //         overflow: 'visible',
        //         template: function() {
        //           return '\
        //           <a href="#" class="btn btn-light-info btn-sm">\
        //           Distribusikan\
        //         </a>\
        //                        \
        //                      \
        //                     ';
        //         },
        //       }, {
        //         field: '',
        //         title: '',
        //       }],
        //   });
        // };

        var jabatanFungsional = function jabatanFungsional() {
          var datatable = $('#jabatan_fungsional').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false,
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
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
          $('#super_admin_user_management_search_role').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Role');
          });
          $('#super_admin_user_management_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Email');
          });
          $('#super_admin_user_management_search_role').selectpicker();
        };

        var groupByTable = function groupByTable() {
          var datatable = $('.groupByTable').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false,
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Nama',
              title: 'Nama'
            }, {
              field: 'NIP',
              title: 'NIP'
            }, {
              field: 'Aksi',
              title: 'Aksi',
              sortable: false,
              width: 200
            }]
          });
          $('#super_admin_user_management_search_role').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Role');
          });
          $('#super_admin_user_management_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Email');
          });
          $('#super_admin_user_management_search_role').selectpicker();
        };

        return {
          // Public functions
          init: function init() {
            // init demo
            jabatanFungsional();
            groupByTable();

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