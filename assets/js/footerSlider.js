let index = 0;
let nav = document.querySelectorAll('.footer-menu-item');

function footerSlider(elem)  {
	if(elem == 'arrow-right') {
		nav[index].classList.toggle('active');
		index++;
		if(index == nav.length){
			index = 0
		}
		nav[index].classList.toggle('active');
	}
	if(elem == 'arrow-left') {
		nav[index].classList.toggle('active');
		index--;
		if(index == -1){
			index = nav.length - 1
		}
		nav[index].classList.toggle('active');
	}
}