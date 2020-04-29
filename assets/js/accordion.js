let accordion = document.querySelectorAll('.accordion-wrapper');

for(let i = 0;i < accordion.length;i++){
	accordion[i].addEventListener('click',(elem) => {
			console.log(elem.target);
			if(elem.target.classList.contains('accordion-item-hedaer')){
				elem.parentNode.classList.toggle('active');
			}
			if(elem.target.classList.contains('icon')){
				elem.target.parentNode.parentNode.parentNode.classList.toggle('active');
			}
			if(elem.target.classList.contains('accordion-title')){
				elem.target.parentNode.parentNode.classList.toggle('active');
			}
		});
}