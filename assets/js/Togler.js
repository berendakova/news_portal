function Togler()  {
	for(let i = 0;i < arguments.length;i++){
		let elem = document.querySelector('.' + arguments[i]);
		elem.classList.toggle('active');
	}
}