const element_class = 'menu-fixed';

let header = document.querySelector('.' + element_class);
const introH = document.querySelector('.top-header').getBoundingClientRect().height;
let scrollHeight = 0;
window.onscroll = function() {
	scrollHeight = document.documentElement.scrollTop;
	if (scrollHeight >= 60) {
		header.classList.add('active');
	} else {
		header.classList.remove('active');
	}
}