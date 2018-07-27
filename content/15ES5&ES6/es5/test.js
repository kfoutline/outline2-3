"use strict";

var Cookie = {
	set: function set(name, val, expires, path, domain, secure) {
		console.log("set Cookie");
	},
	get: function get(name) {
		return name;
	}
};

var show = function show(a, b) {
	return a + b;
};

var myName = "laoxie";
var str = "<h4>" + myName + "</h4>";
