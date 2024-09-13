export default function() {
	var url = window.location.href

	var regExp = /\/\/([^)]+)\//;
	var matches = regExp.exec(url);

	// For test
	// - = v002.japan-cg.com
	// . = japan-cg.com
	var subdomain = matches[1].split(".")

	if(subdomain[0] === "v002") {
		return subdomain[0]+"_"
	}else{
		return ""
	}
}