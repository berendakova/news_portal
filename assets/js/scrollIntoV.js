function scrollIntoV(element_class) {
	const el = document.querySelector('.' + element_class);
	window.scroll({top: el.offsetTop, behavior: 'smooth'});
}

function scrollToTop(){
	window.scroll({top: 0, behavior: 'smooth'});
}