'use strict';

var Cookie = {
	set: function set(name, val, expires, path, domain, secure) {
		console.log('set Cookie');
	},
	get: function get(name) {
		return name;
	}
};

function show() {
	var a = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
	var b = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 1;

	return a + b;
}

var myName = 'laoxie';
var str = '\n\t<h4>' + myName + '</h4>\n';
