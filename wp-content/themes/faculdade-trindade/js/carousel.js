
var swiper = new Swiper(".at-teacher_carousel", {
	slidesPerView: 4,
	spaceBetween: 30,
	loop: true,
	navigation: {
		nextEl: ".at-all-teacher_btns .swiper-button-next",
		prevEl: ".at-all-teacher_btns .swiper-button-prev",
	},
	breakpoints: {
		0: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
		999: {
			slidesPerView: 4,
			spaceBetween: 30,
		},
	},
});

var swiper = new Swiper(".at-testimony_carousel", {
	slidesPerView: 1,
	spaceBetween: 30,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	// navigation: {
	// 	nextEl: ".swiper-button-next",
	// 	prevEl: ".swiper-button-prev",
	// },
	breakpoints: {
		0: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 1,
			spaceBetween: 30,
		},
		999: {
			slidesPerView: 1,
			spaceBetween: 30,
		},
	},
});
var disciplinas_carousel = new Swiper(".at-disciplinas_carousel", {
	slidesPerView: 1,
	spaceBetween: 30,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});