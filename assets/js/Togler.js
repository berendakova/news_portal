function Togler(class_name)  {
	const elem = document.querySelector('.' + class_name);
	elem.classList.toggle('active');
}