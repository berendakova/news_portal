window.onload = function() {
	let universityAdmissionCarousel = document.querySelector('.university-admission-wrapper').querySelector('.carousel-item');
	let universityAdmissionIndicators = document.querySelector('.university-admission-wrapper').querySelector('.names-item');
	universityAdmissionCarousel.classList.add('active');
	universityAdmissionIndicators.classList.add('active');

	if(screen.width >= 992){
		hiddenContentHeight();
		menuOffsetLeftShift();
		hiddenContentWidth();
	} else{
		secondStepLinkRemoveAtrHref();
	}
	if(screen.width >= 768){
		mainMenu();
	}
}

window.addEventListener('scroll', function() {
	if(screen.width >= 992){
		hiddenContentHeight();
		menuOffsetLeftShift();
		hiddenContentWidth();
	}
});

window.onresize = function() {
	if(screen.width >= 992){
		hiddenContentHeight();
		menuOffsetLeftShift();
		hiddenContentWidth();
	} else{
		secondStepLinkRemoveAtrHref();
	}
	if(screen.width >= 768){
		let openedElements = document.querySelectorAll('.opened-top-menu-item');
		openedElements[topSliderIndex].classList.remove('active');
		mainMenu();
	} else {
		let openedElements = document.querySelectorAll('.opened-top-menu-item');
		let closedElements = document.querySelectorAll('.closed-top-menu-item');
		let closedItemsWrapper = document.querySelector('.closed-items');
		closedItemsWrapper.classList.remove('active');

		for(let i = 0;i < openedElements.length;i++){
			openedElements[i].classList.remove('active');
			closedElements[i].classList.add('active');
		}
		openedElements[topSliderIndex].classList.add('active');
		closedElements[topSliderIndex].classList.remove('active');
	}
}

function hiddenContentWidth() {
	let items = document.querySelectorAll('.hidden-content');
	let width = document.querySelector('.menu-fixed').clientWidth + 'px';
	for(let i = 0;i < items.length;i++){
		items[i].style.width = width;
	}
}

function hiddenContentHeight() {
	let items = document.querySelectorAll('.hidden-content')
	let screenHeight = document.documentElement.clientHeight;
	let nav  = document.querySelector('.admissions-nav-wrapper');
	for(let i = 0;i < items.length;i++){
		items[i].style.maxHeight = screenHeight - nav.getBoundingClientRect().bottom + 'px';
	}
}

function menuOffsetLeftShift() {
 	let offsetLeft;
	let offsetRelativeToElems = document.querySelectorAll('.admissions-nav-item');
	let movableElements = document.querySelectorAll('.hidden-content');

	for(let i = 0;i < movableElements.length;i++){
		offsetLeft = offsetRelativeToElems[i].getBoundingClientRect().left;
		movableElements[i].style.left = -offsetLeft + 'px';
	}
}

function secondStepLinkRemoveAtrHref() {
	let elements = document.querySelectorAll('.second-step-link');

	for(let i = 0;i < elements.length;i++){
		elements[i].removeAttribute('href');
	}
}

function mainMenu(){
	let openedElements = document.querySelectorAll('.opened-top-menu-item');
	let closedElements = document.querySelectorAll('.closed-top-menu-item');
	let maxWidth = document.querySelector('.main-menu-wrapper').getBoundingClientRect().width;
	let width = 0;
	let j;
	let n = 5;


	for(let i = 0;i < 5;i++){
		if(width + 160 <= maxWidth - 25){
			width += 160;
			openedElements[i].classList.add('active');
			closedElements[i].classList.remove('active');
		} else {
			width += 160;
			openedElements[i].classList.remove('active');
			closedElements[i].classList.add('active');
		}
	}

	for(let i = 5;i < closedElements.length;i++){
		closedElements[i].classList.add('active');
	}

}