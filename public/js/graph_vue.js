(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
//var x_axis;
//var y_axis;
//
//$('.form-get-history button[type=submit]').click(function(e){
//    e.preventDefault();
//
//    $('#response div').remove();
//    $('#save_button').append('<span id="loading" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');
//
//    var formData = new FormData(document.getElementById("form-get-history"));
//
//    $.ajax({
//        headers: {
//            "X-Authorization": $('#api_key').attr('content')
//        },
//        type: "POST",
//        url: $('#form-get-history').attr('action'),
//        cache: false,
//        contentType: false,
//        processData: false,
//        data: formData,
//        success: function (data) {
//            y_axis=data;
//            y_axis=y_axis.split(" ");
//            graph();
//        }
//    });
//});
//
//
//
//function graph() {
//    x_axis="['2014-06-01T00:00:00','2014-07-01T00:00:00','2014-08-01T00:00:00','2014-09-01T00:00:00','2014-10-01T00:00:00','2014-11-01T00:00:00','2014-12-01T00:00:00','2015-01-01T00:00:00','2015-02-01T00:00:00','2015-03-01T00:00:00','2015-04-01T00:00:00','2015-05-01T00:00:00','2015-06-01T00:00:00','2015-07-01T00:00:00','2015-08-01T00:00:00','2015-09-01T00:00:00','2015-10-01T00:00:00','2015-11-01T00:00:00','2015-12-01T00:00:00','2016-01-01T00:00:00','2016-02-01T00:00:00','2016-03-01T00:00:00','2016-04-01T00:00:00','2016-05-01T00:00:00']";
//
//    //x_axis=x_axis.split(" ");
//
//
//    var data = {
//        labels: x_axis,
//
//        datasets: [
//            {
//                data: y_axis
//            }
//        ]
//    };
//
//    var context = document.querySelector('#graph').getContext('2d');
//
//    new Chart(context).Line(data);
//
//}
//
"use strict";

},{}]},{},[1]);

//# sourceMappingURL=graph_vue.js.map
