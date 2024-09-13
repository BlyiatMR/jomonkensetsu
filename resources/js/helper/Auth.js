export default function(value = false) {
	if(localStorage.getItem('token')) {
		return true
	}

	return value
}