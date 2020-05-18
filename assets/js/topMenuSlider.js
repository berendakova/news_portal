let topSliderIndex = 0;
let topSlider = document.querySelectorAll('.opened-top-menu-item');

function topMenuSlider(elem)  {
	if(elem == 'arrow-right') {
		topSlider[topSliderIndex].classList.toggle('active');
		topSliderIndex++;
		if(topSliderIndex == topSlider.length){
			topSliderIndex = 0
		}
		topSlider[topSliderIndex].classList.toggle('active');
	}
	if(elem == 'arrow-left') {
		topSlider[topSliderIndex].classList.toggle('active');
		topSliderIndex--;
		if(topSliderIndex == -1){
			topSliderIndex = topSlider.length - 1
		}
		topSlider[topSliderIndex].classList.toggle('active');
	}
}