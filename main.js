(function(){
	// Save a reference to the global object (`window` in the browser, `exports`
	// on the server).
	var root = this;

	// Save the previous value of the `Yaman` variable, so that it can be
	// restored later on, if `noConflict` is used.
	var previousYaman = root.Yaman;

	// Create local references to array methods we'll want to use later.
	var array = [];
	var push = array.push;
	var slice = array.slice;
	var splice = array.splice;

	// The top-level namespace. All public Yaman classes and modules will
	// be attached to this. Exported for both the browser and the server.
	var Yaman;
	if (typeof exports !== 'undefined') {
		Yaman = exports;
	} else {
		Yaman = root.Yaman = {};
	}

	// Current version of the library. Keep in sync with `package.json`.
	Yaman.VERSION = '1.0.0';	
}).call(this);