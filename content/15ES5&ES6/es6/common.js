let Cookie = {
	set(name,val,expires,path,domain,secure){
		console.log('set Cookie')
	},
	get(name){
		return name
	}
}

function show(a=0,b=1){
	return a + b;
}

let myName = 'laoxie';
var str = `
	<h4>${myName}</h4>
`