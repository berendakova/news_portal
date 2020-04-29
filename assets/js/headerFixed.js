const element_class = 'menu-fixed';

let header = document.getElementsByClassName(element_class)[0];
const introH = document.getElementsByClassName('top-header')[0].clientHeight;
let scrollHeight = 0;
window.onscroll = function() {
	scrollHeight = document.documentElement.scrollTop;

	if (scrollHeight >= introH) {
		header.classList.add('active');
	} else {
		header.classList.remove('active');
	}
}