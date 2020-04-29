window.onload = function() {
	if(screen.width >= 992){
		menuOffsetLeftShift();
		hiddenContentWidth();
	} else{
		secondStepLinkRemoveAtrHref();
	}
}

window.addEventListener('scroll', function() {
		if(screen.width >= 992){
		menuOffsetLeftShift();
		hiddenContentWidth();
	}
});

function hiddenContentWidth() {
	let items = document.querySelectorAll('.hidden-content');
	let width = document.querySelector('.menu-fixed').clientWidth + 'px';
	for(let i = 0;i < items.length;i++){
		items[i].style.width = width;
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