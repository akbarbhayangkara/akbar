document.addEventListener('contextmenu', function(e) {
	e.preventDefault();
});
document.onkeydown = function(e) {
	if (e.ctrlKey &&
			(e.keyCode === 67 ||
			 e.keyCode === 86 ||
			 e.keyCode === 85 ||
			 e.keyCode === 16 ||
			 e.keyCode === 73 ||
			 e.keyCode === 117)) {
			return false;
	} else {
			return true;
	}
};
