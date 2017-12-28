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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 51);
/******/ })
/************************************************************************/
/******/ ({

/***/ 51:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(52);


/***/ }),

/***/ 52:
/***/ (function(module, exports) {

// Calendar picker - controller handles formatting
$('#datepicker input').datepicker({
	todayBtn: "linked"
});

// Get the client id and load its data into invoice edit
$('#client_id').change(function () {
	var value = this.value;
	var source = '/client/' + value;
	$.ajax(source, {
		success: function success(data) {
			var json = JSON.parse(data);
			console.log(json['first_name']);
			$('.client-name').html(json['first_name'] + ' ' + json['last_name']);
			$('.client-address').html(json['address']);
			$('.client-email').html(json['email']);
			$('.client-phone').html(json['phone_number']);
		},
		error: function error() {
			console.log('error retrieving client');
		}
	});
});

// get the line total and sum it up
function sumLineTotals() {
	var getQuantity = $('#quantity_1').val();
	var getRate = $('#rate_1').html();
	var lineTotal = getQuantity * parseFloat(getRate);
	$('#line_total_1').html(lineTotal.toFixed(2));
}

//  get all line totals push them into an array and sum the values
function sumFinalTotal() {
	var valuesArray = [];
	$('.line-total').each(function () {
		valuesArray.push(parseFloat($(this).html()));
	});
	for (var i = 0; i < valuesArray.length; i++) {
		var sum = +valuesArray[i];
	}
	$('#invoice_total').val(sum.toFixed(2));
}

sumLineTotals();
sumFinalTotal();

// when qty changes recalculate totals
$('#quantity_1').change(function () {
	sumLineTotals();
	sumFinalTotal();
});

$('#service_id').change(function () {
	var value = this.value;
	var source = '/getservice/' + value;
	console.log(source);
	$.ajax(source, {
		success: function success(data) {
			var json = JSON.parse(data);
			$('.service-description').html(json['description']);
			$('.service-rate').html(json['sale_price']);
			sumLineTotals();
			sumFinalTotal();
		},
		error: function error() {
			console.log('error retrieving service');
		}
	});
});

var startCount = 1;

$('.add-service').on('click', function (e) {
	e.preventDefault();
	startCount++;
	console.log(startCount);

	// to do make these elements dynamic based on current count.
	// Each element count will be the new index - can change count to 0;

	$('#services-list').append('<tr><td class="col-md-4"><div class="form-group"><select id="service_id" name="service_id" class="form-control"><option value="1" selected="selected" disabled="disabled">Select a service</option> <option value="1">Consulting Fee</option> <option value="2">Design Fee</option> <option value="4">Development Fee</option> <option value="3">SEO Optimization</option></select></div></td> <td class="col-md-5"><p class="service-description">Service description placeholder.</p></td> <td class="col-md-1"><div class="form-group"><label for="quantity" class="control-label sr-only">Service</label> <input type="text" placeholder="1" name="quantity" id="quantity_1" value="1" class="form-control text-center quantity"></div></td> <td class="col-md-1"><p id="rate_1" class="service-rate">10.00</p></td> <td class="col-md-1"><p id="line_total_1" class="line-total">10.00</p></td></tr>');
});

/***/ })

/******/ });