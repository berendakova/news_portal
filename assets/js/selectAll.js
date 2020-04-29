let flag = false;

function selectAll(class_name)  {
	const elements = document.querySelectorAll('.' + class_name);
	const btn = document.querySelector('.get-all');
	const checked = "Снять выбор";
	const unChecked = "Выбрать все";

	for(let i = 0;i < elements.length;i++){
		for(let j = 0;j < elements[i].childNodes.length;j++){
			if(elements[i].childNodes[j].type === "checkbox"){
				if(elements[i].childNodes[j].checked && flag == true) {
					elements[i].childNodes[j].checked = false;
				}
				if(elements[i].childNodes[j].checked == false && flag == false){
					elements[i].childNodes[j].checked = true;
				}
			}
		}
	}
	flag = !flag;
	if(flag == true){
		btn.innerHTML = checked;
	} else {
		btn.innerHTML = unChecked;
	}
}