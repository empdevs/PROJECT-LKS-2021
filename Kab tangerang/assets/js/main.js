let header = document.getElementById('header');
let nav = document.getElementById('nav');
let toggle = document.getElementById('toggle');
let img_toggle = document.getElementById('img-toggle');
toggle.addEventListener('click', function(e){
	e.preventDefault();
	if(header.classList.contains('active')){
		header.classList.remove('active');
		img_toggle.src = './assets/images/hamburger.png';
		nav.classList.remove('active');
	} else {
		header.classList.add('active');
		img_toggle.src = './assets/images/close.png';
		nav.classList.add('active');
	}
})