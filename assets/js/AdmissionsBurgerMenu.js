if (screen.width <= 991) {
	const menu = document.querySelector('.admissions-nav');

	menu.addEventListener('click',(elem) => {
		console.log(1);
		if(elem.target.classList.contains('admissions-nav-link')){
			let item = elem.target.parentNode;
			item.classList.toggle('active');
		}

		if(elem.target.classList.contains('title')){
			let item = elem.target.parentNode.parentNode;
			item.classList.toggle('active');
		}

		if(elem.target.classList.contains('second-step-link')){
			let item = elem.target.parentNode;
			item.classList.toggle('active');
		}
	});
}