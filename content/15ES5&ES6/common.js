let Cookie = {
	set(name, val, expires, path, domain, secure) {
		console.log(`set Cookie`);
	},
	get(name) {
		return name;
	}
};

let show = (a,b)=>a+b;

let myName = `laoxie`;
let str = `<h4>${myName}</h4>`;
