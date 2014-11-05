$(document).ready(function() {

	$('#backToTop').click(function () {
		$.fn.fullpage.moveTo(1);
	});

	$(window).resize(function() {
		$.fn.fullpage.destroy('all');
		initFullpage();
	});

	initFullpage();

	function initFullpage(){
		$('#fullpage').fullpage({
			verticalCentered: true,
			resize : false,
			anchors:['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 
					 'tenth', 'eleventh', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen',
					 'eightteen', 'nineteen', 'twenty', 'twentyone', 'twentytwo', 'twentythree', 'twentyfour'],
			scrollingSpeed: 700,
			easing: 'easeInQuart',
			menu: false,
			navigation: true,
			navigationPosition: 'right',
			navigationTooltips: ['Введение', 'С ДР!', 'Андрей Шумков', 'Андрей Григорьев', 'Антон Сапожников', 
								 'Наташа Пальчех', 'Артем Гапеев', 'Виктор Козуб', 'Сергей Рынкевич', 'Анна Садовская', 
								 'Максим Рогов', 'Кирилл Чугаинов', 'Максим Шутков', 'Настя Балашко', 'Сергей Миско', 
								 'Саша Янковский', 'Вова Шараев', 'Яна Кенда', 'Илья Угляница', 'Вадим Ткачев',  'Напоследок', 
								 'eleventh', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen'],
			slidesNavigation: true,
			slidesNavPosition: 'bottom',
			loopBottom: false,
			loopTop: false,
			loopHorizontal: true,
			autoScrolling: true,
			scrollOverflow: false,
			css3: false,
			normalScrollElements: '#element1, .element2',
			normalScrollElementTouchThreshold: 5,
			keyboardScrolling: true,
			touchSensitivity: 15,
			continuousVertical: false,
			animateAnchor: true,
			menu: '#myMenu',

			onLeave: function(index, nextIndex, direction){},
			afterLoad: function(anchorLink, index){},
			afterRender: function(){},
			afterResize: function(){},
			afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
			onSlideLeave: function(anchorLink, index, slideIndex, direction){}
		});
	}
});