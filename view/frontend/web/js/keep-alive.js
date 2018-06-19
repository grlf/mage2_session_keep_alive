define([
    'jquery'
],
function($) {
   "use strict";
   return function(config, element) {
       setInterval(function() {
           $.post('/rest/V1/customers/me/keep-alive');
       },(parseInt(config.refresh_seconds) * 1000));
   }
});