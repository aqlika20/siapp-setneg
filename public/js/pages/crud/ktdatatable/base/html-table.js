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
        var superAdminHome = function superAdminHome() {
          var datatable = $('#super_admin_home').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Imported At Formatted',
              title: 'Imported At Formatted'
            }, {
              field: 'Imported Time Formatted',
              title: 'Imported Time Formatted'
            }, {
              field: 'Imported By Formatted',
              title: 'Imported By Formatted'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Status',
              title: 'Status'
            }]
          });
          $('#super_admin_home_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

        var superAdminReport = function superAdminReport() {
          var datatable = $('#super_admin_report').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Imported At Formatted',
              title: 'Imported At Formatted'
            }, {
              field: 'Imported Time Formatted',
              title: 'Imported Time Formatted'
            }, {
              field: 'Imported By Formatted',
              title: 'Imported By Formatted'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Status',
              title: 'Status'
            }]
          });
          $('#super_admin_report_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

        var superAdminUserManagement = function superAdminUserManagement() {
          var datatable = $('#super_admin_user_management').KTDatatable({
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
              field: 'Name',
              title: 'Name'
            }, {
              field: 'Email',
              title: 'Email'
            }, {
              field: 'Role',
              title: 'Role',
              template: function (row) {
                var role = {
                  1: { 'roleName': 'Super Admin' },
                  2: { 'roleName': 'PPIC' },
                  3: { 'roleName': 'Warehouse' },
                  4: { 'roleName': 'Production - Icing' },
                  5: { 'roleName': 'Production - Batching 1' },
                  6: { 'roleName': 'Production - Batching 2' },
                  7: { 'roleName': 'Filling' }
                };
                return role[row.Role].roleName;
              },
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
        var superAdminSettingProductDefinition = function superAdminSettingProductDefinition() {
          var datatable = $('#super_admin_setting_product_definition').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Product ID',
              title: 'Product ID',
            }, {
              field: 'SKU Name',
              title: 'SKU Name',
            }, {
              field: 'Notes',
              title: 'Notes',
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#super_admin_setting_product_definition_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Product ID');
          });
        };

        var superAdminSettingProductDefinitionDetail = function superAdminSettingProductDefinitionDetail() {
          var datatable = $('#super_admin_setting_product_definition_detail').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Comment',
              title: 'Comment',
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#super_admin_setting_product_definition_detail_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Comment');
          });
        };

        var superAdminSettingProductDefinitionDetailDetail = function superAdminSettingProductDefinitionDetailDetail() {
          var datatable = $('#super_admin_setting_product_definition_detail_detail').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Item ID',
              title: 'Item ID',
            }, {
              field: 'Item Desc',
              title: 'Item Desc',
            }, {
              field: 'Qty',
              title: 'Qty',
            }, {
              field: 'UoM',
              title: 'UoM',
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#super_admin_setting_product_definition_detail_detail_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Item ID');
          });
        };

        var superAdminSettingItemDefinition = function superAdminSettingItemDefinition() {
          var datatable = $('#super_admin_setting_item_definition').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Item ID',
              title: 'Item ID',
            }, {
              field: 'Item Desc',
              title: 'Item Desc',
            }, {
              field: 'Notes',
              title: 'Notes',
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#super_admin_setting_item_definition_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Item ID');
          });
        };

        var superAdminSettingSupplierDefinition = function superAdminSettingSupplierDefinition() {
          var datatable = $('#super_admin_setting_supplier_definition').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Type',
              title: 'Type',
            }, {
              field: 'Supplier ID',
              title: 'Supplier ID',
            }, {
              field: 'Supplier Desc',
              title: 'Supplier Desc',
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#super_admin_setting_supplier_definition_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Supplier ID');
          });
          $('#super_admin_setting_supplier_definition_search_type').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Type');
          });
          $('#super_admin_setting_supplier_definition_search_type').selectpicker();
        };

        var superAdminSettingShift = function superAdminSettingShift() {
          var datatable = $('#super_admin_setting_shift').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Shift',
              title: 'Shift',
            }]
          });
        }

        var superAdminSettingOperType = function superAdminSettingOperType() {
          var datatable = $('#super_admin_setting_oper_type').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Oper Type',
              title: 'Oper Type',
            }]
          });
        };

        var superAdminSettingRole = function superAdminSettingRole() {
          var datatable = $('#super_admin_setting_role').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Role',
              title: 'Role',
            }]
          });
        };

// PPIC 
        var ppicAvailablePrO = function ppicAvailablePrO() {
          var datatable = $('#ppic_available_pro').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO',
            }, {
              field: 'SKU Name',
              title: 'SKU Name',
            }, {
              field: 'Comment',
              title: 'Comment',
            }, {
              field: 'Seq Total',
              title: 'Seq Total',
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
        };

        var ppicIcingSugarRequest = function ppicIcingSugarRequest() {
          var datatable = $('#ppic_icing_request').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PO Target',
              title: 'PO Target',
            }, {
              field: 'Weight',
              title: 'Weight',
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
        }

        var ppicBlending = function ppicBlending() {
          var datatable = $('#ppic_blending').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name',
            }, {
              field: 'Status',
              title: 'Status',
            }, {
              field: 'Seq No',
              title: 'Seq No',
            }]
          });
        }

        var ppicReportGeneral = function ppicReportGeneral() {
          var datatable = $('#ppic_report_general').KTDatatable({
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
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Imported At Formatted',
              title: 'Imported At Formatted',
            }, {
              field: 'Imported Time Formatted',
              title: 'Imported Time Formatted',
            }, {
              field: 'Imported By Formatted',
              title: 'Imported By Formatted',
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Status',
              title: 'Status'
            }]
          });
          $('#ppic_report_general_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

        var ppicReportProduction = function ppicReportProduction() {
          var datatable = $('#ppic_report_production').KTDatatable({
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
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO',
            }, {
              field: 'Operation',
              title: 'Operation',
            }, {
              field: 'Equipment',
              title: 'Equipment',
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Sublot No',
              title: 'Sublot No'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Sent To SAP',
              title: 'Sent To SAP'
            }, {
              field: 'Tumbler',
              title: 'Tumbler'
            }, {
              field: 'RpM',
              title: 'RpM'
            }, {
              field: 'Duration In Second',
              title: 'Duration In Second'
            }, {
              field: 'User',
              title: 'User'
            }, {
              field: 'Last Produced At Formatted',
              title: 'Last Produced At Formatted'
            }, {
              field: 'Last Produced Time Formatted',
              title: 'Last Produced Time Formatted'
            }]
          });
          $('#ppic_report_production_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

        var ppicReportConsumption = function ppicReportConsumption() {
          var datatable = $('#ppic_report_consumption').KTDatatable({
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
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO',
            }, {
              field: 'Operation',
              title: 'Operation',
            }, {
              field: 'Equipment',
              title: 'Equipment',
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Sublot No',
              title: 'Sublot No'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Sent To SAP',
              title: 'Sent To SAP'
            }, {
              field: 'User',
              title: 'User'
            }, {
              field: 'Consumed At Formatted',
              title: 'Consumed At Formatted'
            }, {
              field: 'Consumed Time Formatted',
              title: 'Consumed Time Formatted'
            }]
          });
          $('#ppic_report_consumption_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

// Warehouse
        var warehouseAvailablePrO = function warehouseAvailablePrO() {
          var datatable = $('#warehouse_available_pro').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO',
            }, {
              field: 'SKU Name',
              title: 'SKU Name',
            }, {
              field: 'Comment',
              title: 'Comment',
            }, {
              field: 'Seq Total',
              title: 'Seq Total',
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
        };

        var warehouseIcingSugar = function warehouseIcingSugar() {
          var datatable = $('#warehouse_icing_sugar').KTDatatable({
            pagination: false,
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: 'Received',
              title: 'Received'
            }, {
              field: 'Icing Sugar Batch No',
              title: 'Icing Sugar Batch No'
            }, {
              field: 'Refined Sugar Batch No ',
              title: 'Refined Sugar Batch No '
            }, {
              field: 'Dextrin Batch No',
              title: 'Dextrin Batch No'
            }, {
              field: 'Multiwall Batch No',
              title: 'Multiwall Batch No'
            }, {
              field: 'Total',
              title: 'Total'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#warehouse_icing_sugar_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Icing Sugar Batch No');
          });
        };

        var warehouseBeritaAcara = function warehouseBeritaAcara() {
          var datatable = $('#warehouse_berita_acara').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Hold At Formatted',
              title: 'Hold At Formatted'
            }, {
              field: 'Hold Time Formatted',
              title: 'Hold Time Formatted'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Sublot No',
              title: 'Sublot No'
            }, {
              field: 'Description',
              title: 'Description'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#warehouse_berita_acara_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

        var warehouseIncomingMaterialMajorMinorItemHold = function warehouseIncomingMaterialMajorMinorItemHold() {
          var datatable = $('#warehouse_incoming_material_major_minor_item_hold').KTDatatable({
            pagination: false,
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: 'Sublot No',
              title: 'Sublot No'
            }, {
              field: 'Problem Desc',
              title: 'Problem Desc',
              sortable: false,
              width: 200
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Quality',
              title: 'Quality'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }]
          });
          $('#warehouse_incoming_material_major_minor_item_hold_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Sublot No');
          });
        };

        var warehouseStockListMajorMinorItem = function warehouseStockListMajorMinorItem() {
          var datatable = $('#warehouse_stock_list_major_minor_item').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#warehouse_stock_list_major_minor_item_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

        var warehouseStockListMajorMinorItemDetail = function warehouseStockListMajorMinorItemDetail() {
          var datatable = $('#warehouse_stock_list_major_minor_item_detail').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Lot No',
              title: 'Lot No'
            }, {
              field: 'Sublot No',
              title: 'Sublot No'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Quality',
              title: 'Quality'
            }, {
              field: 'Received At Formatted',
              title: 'Received At Formatted'
            }, {
              field: 'Received Time Formatted',
              title: 'Received Time Formatted'
            }, {
              field: 'Expired At Formatted',
              title: 'Expired At Formatted'
            }, {
              field: 'Expired Time Formatted', 
              title: 'Expired Time Formatted'
            }]
          });
          $('#warehouse_stock_list_major_minor_item_detail_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Sublot No');
          });
        };

        var warehouseStockListOther = function warehouseStockListOther() {
          var datatable = $('#warehouse_stock_list_other').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Supplier',
              title: 'Supplier'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Actual Weight',
              title: 'Actual Weight'
            }, {
              field: 'Received At Formatted',
              title: 'Received At Formatted'
            }, {
              field: 'Received Time Formatted',
              title: 'Received Time Formatted'
            }, {
              field: 'Expired At Formatted',
              title: 'Expired At Formatted'
            }, {
              field: 'Expired Time Formatted', 
              title: 'Expired Time Formatted'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#warehouse_stock_list_other_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Batch No');
          });
        };

        var warehouseStockListOtherDetail = function warehouseStockListOtherDetail() {
          var datatable = $('#warehouse_stock_list_other_detail').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'SSCC No',
              title: 'SSCC No'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Grade',
              title: 'Grade'
            }]
          });
          $('#warehouse_stock_list_other_detail_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'SSCC No');
          });
        };

        var warehouseReportMajorMinorItem = function warehouseReportMajorMinorItem() {
          var datatable = $('#warehouse_report_major_minor_item').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#warehouse_report_major_minor_item_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

        var warehouseReportMajorMinorItemDetail = function warehouseReportMajorMinorItemDetail() {
          var datatable = $('#warehouse_report_major_minor_item_detail').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Lot No',
              title: 'Lot No'
            }, {
              field: 'Sublot No',
              title: 'Sublot No'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Quality',
              title: 'Quality'
            }, {
              field: 'Received At Formatted',
              title: 'Received At Formatted'
            }, {
              field: 'Received Time Formatted',
              title: 'Received Time Formatted'
            }, {
              field: 'Expired At Formatted',
              title: 'Expired At Formatted'
            }, {
              field: 'Expired Time Formatted', 
              title: 'Expired Time Formatted'
            }]
          });
          $('#warehouse_report_major_minor_item_detail_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Sublot No');
          });
        };

        var warehouseReportOther = function warehouseReportOther() {
          var datatable = $('#warehouse_report_other').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Supplier',
              title: 'Supplier'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Actual Weight',
              title: 'Actual Weight'
            }, {
              field: 'Received At Formatted',
              title: 'Received At Formatted'
            }, {
              field: 'Received Time Formatted',
              title: 'Received Time Formatted'
            }, {
              field: 'Expired At Formatted', 
              title: 'Expired At Formatted'
            }, {
              field: 'Expired Time Formatted', 
              title: 'Expired Time Formatted'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#warehouse_report_other_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Batch No');
          });
        };

        var warehouseReportOtherDetailList = function warehouseReportOtherDetailList() {
          var datatable = $('#warehouse_report_other_detail_list').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'SSCC No',
              title: 'SSCC No'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Grade',
              title: 'Grade'
            }]
          });
          $('#warehouse_report_other_detail_list_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'SSCC No');
          });
        };

        var warehouseReportOtherDetailUsage = function warehouseReportOtherDetailUsage() {
          var datatable = $('#warehouse_report_other_detail_usage').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Lot No',
              title: 'Lot No'
            }, {
              field: 'Sublot No',
              title: 'Sublot No'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Actual Weight',
              title: 'Actual Weight'
            }]
          });
          $('#warehouse_report_other_detail_usage_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

        var warehouseDeliveryNoteProduction = function warehouseDeliveryNoteProduction() {
          var datatable = $('#warehouse_delivery_note_production').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Status',
              title: 'Status'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }]
          });
        };

        var warehouseDeliveryNoteIcingProductionDextrinStock = function warehouseDeliveryNoteIcingProductionDextrinStock() {
          var datatable = $('#warehouse_delivery_note_production_dextrin_stock').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Weight',
              title: 'Weight'
            }]
          });
        };

        var warehouseDeliveryNoteIcingProcessRefinedSugarStock = function warehouseDeliveryNoteIcingProcessRefinedSugarStock() {
          var datatable = $('#warehouse_delivery_note_icing_process_refined_sugar_stock').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Weight',
              title: 'Weight'
            }]
          });
        };

        var warehouseDeliveryNoteIcingProcessDextrinStock = function warehouseDeliveryNoteIcingProcessDextrinStock() {
          var datatable = $('#warehouse_delivery_note_icing_process_dextrin_stock').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Weight',
              title: 'Weight'
            }]
          });
        };

        var warehouseDeliveryNoteIcingProcessMultiwallStock = function warehouseDeliveryNoteIcingProcessMultiwallStock() {
          var datatable = $('#warehouse_delivery_note_icing_process_multiwall_stock').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Piece',
              title: 'Piece'
            }]
          });
        };

        var warehouseDeliveryNoteIcingProcessRequestStock = function warehouseDeliveryNoteIcingProcessRequestStock() {
          var datatable = $('#warehouse_delivery_note_icing_process_request_stock').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Requested At Formatted',
              title: 'Requested At Formatted'
            }, {
              field: 'PO Target',
              title: 'PO Target'
            }, {
              field: 'Weight',
              title: 'Weight'
            }]
          });
        };

        var warehouseDeliveryNotePackagingFillingStock = function warehouseDeliveryNotePackagingFillingStock() {
          var datatable = $('#warehouse_delivery_note_packaging_filling_stock').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Weight',
              title: 'Weight'
            }]
          });
        };        

// Produciton Icing

        var productionicingDeliveryNote = function productionicingDeliveryNote() {
          var datatable = $('#production_icing_delivery_note').KTDatatable({
            pagination: false,
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Selected',
              title: 'Selected'
            }, {
              field: 'Icing Sugar Batch No',
              title: 'Icing Sugar Batch No'
            }, {
              field: 'Refined Sugar Batch No ',
              title: 'Refined Sugar Batch No '
            }, {
              field: 'Dextrin Batch No',
              title: 'Dextrin Batch No'
            }, {
              field: 'Multiwall Batch No',
              title: 'Multiwall Batch No'
            }, {
              field: 'Total',
              title: 'Total'
            }]
          });
          $('#production_icing_delivery_note_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Icing Sugar Batch No');
          });
        };

        var productionicingIncomingMaterial = function productionicingIncomingMaterial() {
          var datatable = $('#production_icing_incoming_material').KTDatatable({
            pagination: false,
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: 'Received',
              title: 'Received',
              sortable: false,
            }, {
              field: 'Date',
              title: 'Date',
              sortable: false,
              width: 200
            }, {
              field: 'Time',
              title: 'Time',
              sortable: false,
              width: 200
            }, {
              field: 'PO Target',
              title: 'PO Target'
            }, {
              field: 'Shift',
              title: 'Shift'
            }, {
              field: 'Refined Sugar Batch No ',
              title: 'Refined Sugar Batch No '
            }, {
              field: 'Refined Sugar Weight',
              title: 'Refined Sugar Weight'
            }, {
              field: 'Dextrin Batch No',
              title: 'Dextrin Batch No'
            }, {
              field: 'Dextrin Weight',
              title: 'Dextrin Weight'
            }, {
              field: 'Multiwall Batch No',
              title: 'Multiwall Batch No'
            }, {
              field: 'Multiwall Piece',
              title: 'Multiwall Piece'
            }, {
              field: 'Total',
              title: 'Total'
            }]
          });
          $('#production_icing_incoming_material_search_query_1').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Refined Sugar Batch No ');
          });
          $('#production_icing_incoming_material_search_query_2').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Dextrin Batch No');
          });
          $('#production_icing_incoming_material_search_query_3').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Multiwall Batch No');
          });
        };

        var productionicingIcingProcess = function productionicingIcingProcess() {
          var datatable = $('#production_icing_icing_process').KTDatatable({
            pagination: false,
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Selected',
              title: 'Selected',
              sortable: false,
            }, {
              field: 'Icing Sugar Batch No',
              title: 'Icing Sugar Batch No'
            }, {
              field: 'PO Target',
              title: 'PO Target'
            }, {
              field: 'Shift',
              title: 'Shift'
            }, {
              field: 'Refined Sugar Batch No ',
              title: 'Refined Sugar Batch No '
            }, {
              field: 'Refined Sugar Weight',
              title: 'Refined Sugar Weight',
              sortable: false,
              width: 200
            }, {
              field: 'Dextrin Batch No',
              title: 'Dextrin Batch No'
            }, {
              field: 'Dextrin Weight',
              title: 'Dextrin Weight',
              sortable: false,
              width: 200
            }, {
              field: 'Multiwall Batch No',
              title: 'Multiwall Batch No'
            }, {
              field: 'Multiwall Piece',
              title: 'Multiwall Piece',
              sortable: false,
              width: 200
            }, {
              field: 'Total',
              title: 'Total',
              sortable: false,
              width: 200
            }]
          });
          $('#production_icing_icing_process_search_query_1').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Refined Sugar Batch No ');
          });
          $('#production_icing_icing_process_search_query_2').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Dextrin Batch No');
          });
          $('#production_icing_icing_process_search_query_3').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Multiwall Batch No');
          });
        };

        var productionicingReport = function productionicingReport() {
          var datatable = $('#production_icing_report').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Icing Sugar Batch No',
              title: 'Icing Sugar Batch No'
            }, {
              field: 'Shift',
              title: 'Shift'
            }, {
              field: 'Refined Sugar Batch No ',
              title: 'Refined Sugar Batch No '
            }, {
              field: 'Dextrin Batch No',
              title: 'Dextrin Batch No'
            }, {
              field: 'Multiwall Batch No',
              title: 'Multiwall Batch No'
            }, {
              field: 'Total',
              title: 'Total'
            }]
          });
          $('#production_icing_report_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Icing Sugar Batch No');
          });
        };

// production batching 1 
        var productionbatching1MaterialCheckingPro = function productionbatching1MaterialCheckingPro() {
          var datatable = $('#production_batching_1_material_checking_pro_id').KTDatatable({
            data: {
              
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }]
          });
        };

        var productionbatching1BeritaAcara = function productionbatching1BeritaAcara() {
          var datatable = $('#production_batching_1_berita_acara').KTDatatable({
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Hold At Formatted',
              title: 'Hold At Formatted'
            }, {
              field: 'Hold Time Formatted',
              title: 'Hold Time Formatted'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'SSCC/Sublot No',
              title: 'SSCC/Sublot No'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Description',
              title: 'Description'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
          $('#production_batching_1_berita_acara_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

        var productionbatching1BeritaAcaraEdit = function productionbatching1BeritaAcaraEdit() {
          var datatable = $('#production_batching_1_berita_acara_edit').KTDatatable({
            pagination: false,
            data: {
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Lot No',
              title: 'Lot No'
            }, {
              field: 'Current Sublot No',
              title: 'Current Sublot No'
            }, {
              field: 'New Sublot No',
              title: 'New Sublot No'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'UoM',
              title: 'UoM'
            }, {
              field: 'Quality',
              title: 'Quality'
            }, {
              field: 'Expired At Formatted',
              title: 'Expired At Formatted'
            }, {
              field: 'Expired Time Formatted',
              title: 'Expired Time Formatted'
            }]
          });
          $('#production_batching_1_berita_acara_edit_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Current Sublot No');
          });
        };

        var productionbatching1Report = function productionbatching1Report() {
          var datatable = $('#production_batching_1_report').KTDatatable({
            data: {
              pageSize: 11,
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Shift',
              title: 'Shift'
            }, {
              field: 'Seq Total',
              title: 'Seq Total'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }]
          });
          $('#production_batching_1_delivery_note_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'PrO');
          });
        };

// Filling
        var fillingIncomingMaterial = function fillingIncomingMaterial() {
          var datatable = $('#filling_incoming_material').KTDatatable({
            data: {
              pageSize: 5,
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: 'Received',
              title: 'Received',
              sortable: false,
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Weight',
              title: 'Weight'
            }]
          });
          $('#filling_incoming_material_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Batch No');
          });
        };

        var fillingfillingprocessFillInFillingProcess = function fillingfillingprocessFillInFillingProcess() {
          var datatable = $('#filling_filling_process_fill_in_pro_available').KTDatatable({
            data: {
              
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            },{
              field: 'Seq No',
              title: 'Seq No'
            }]
          });
        };

        var fillingfillingprocessFillInAluminiumFoilStock = function fillingfillingprocessFillInAluminiumFoilStock() {
          var datatable = $('#filling_filling_process_fill_in_packaging_stock').KTDatatable({
            data: {
              
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Qty',
              title: 'Qty'
            }, {
              field: 'Action',
              title: 'Action',
              sortable: false,
              width: 200
            }]
          });
        };

        var fillingReport = function fillingReport() {
          var datatable = $('#filling_report').KTDatatable({
            data: {
              
              saveState: {
                cookie: false
              }
            }, rows: {
              autoHide: false
            },
            layout: {
              scroll: true,
              customScrollbar: false
            },
            columns: [{
              field: '#',
              title: '#'
            }, {
              field: 'Item ID',
              title: 'Item ID'
            }, {
              field: 'Item Desc',
              title: 'Item Desc'
            }, {
              field: 'Batch No',
              title: 'Batch No'
            }, {
              field: 'PrO',
              title: 'PrO'
            }, {
              field: 'SKU Name',
              title: 'SKU Name'
            }, {
              field: 'Comment',
              title: 'Comment'
            }, {
              field: 'Seq No',
              title: 'Seq No'
            }, {
              field: 'Shift',
              title: 'Shift'
            }]
          });
          $('#filling_report_search_query').on('input', function () {
            datatable.search($(this).val().toLowerCase(), 'Batch No');
          });
        };

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

        return {
          // Public functions
          init: function init() {
            // init demo
            jabatanFungsional();
            superAdminHome();
            superAdminReport();
            superAdminUserManagement();
            superAdminSettingProductDefinition();
            superAdminSettingProductDefinitionDetail();
            superAdminSettingProductDefinitionDetailDetail();
            superAdminSettingItemDefinition();
            superAdminSettingSupplierDefinition();
            superAdminSettingShift();
            superAdminSettingOperType();
            superAdminSettingRole();

            ppicAvailablePrO();
            ppicIcingSugarRequest();
            ppicBlending();
            ppicReportGeneral();
            ppicReportProduction();
            ppicReportConsumption();

            warehouseAvailablePrO();
            warehouseIncomingMaterialMajorMinorItemHold();
            warehouseStockListMajorMinorItem();
            warehouseStockListMajorMinorItemDetail();
            warehouseStockListOther();
            warehouseStockListOtherDetail();
            warehouseIcingSugar();
            warehouseDeliveryNoteProduction();
            warehouseDeliveryNoteIcingProductionDextrinStock();
            warehouseDeliveryNoteIcingProcessRefinedSugarStock();
            warehouseDeliveryNoteIcingProcessDextrinStock();
            warehouseDeliveryNoteIcingProcessMultiwallStock();
            warehouseDeliveryNoteIcingProcessRequestStock();
            warehouseDeliveryNotePackagingFillingStock();
            warehouseBeritaAcara();
            warehouseReportMajorMinorItem();
            warehouseReportMajorMinorItemDetail();
            warehouseReportOther();
            warehouseReportOtherDetailList();
            warehouseReportOtherDetailUsage();

            productionicingDeliveryNote();
            productionicingIncomingMaterial();
            productionicingIcingProcess();
            productionicingReport();

            productionbatching1MaterialCheckingPro();
            productionbatching1BeritaAcara();
            productionbatching1BeritaAcaraEdit();
            productionbatching1Report();

            fillingIncomingMaterial();
            fillingfillingprocessFillInFillingProcess();
            fillingfillingprocessFillInAluminiumFoilStock();
            fillingReport();

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