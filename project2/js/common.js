/**
 * @author Pyi Nyein Kyaw
 */
$(document).ready(function() {
	//for language bar
	var nav = $("#lang-bar");
	var navs = $(".lang-text a");
	var menus = $(".menu a");

	// Menu
	menus.hoverIntent({
		over : function() {
			var t = $(this);
			t.animate({
				top : "0"
			}, 300, 'easeOutQuart');
		},
		out : function() {
			var t = $(this);
			t.animate({
				top : "-42px"
			}, 300, 'easeOutQuart');
		}
	});

	/*
	MM = 27 + 10(padding) = 37
	EN = 27 + 10(padding) = 37
	padding = -10px
	*/
	var w = 64;
	nav.addClass("invisible");
	var l;

	navs.click(function() {
		var t = $(this);
		if (navs.hasClass("processing")) {
			return;
		}
		navs.addClass("processing");

		if (nav.hasClass("visible")) {
			nav.removeClass("visible");
			nav.addClass("invisible");
			t.css({
				backgroundPosition : "0 0"
			});
			l = -w;
		} else if (nav.hasClass("invisible")) {
			nav.removeClass("invisible");
			nav.addClass("visible");
			t.css({
				backgroundPosition : "-20px 0"
			});
			l = 0;
		}

		nav.animate({
			left : l
		}, 500, 'easeOutQuart', function() {
			navs.removeClass("processing");
		});

		// 1. linear
		// 2. swing
		// 3. easeInQuad
		// 4. easeOutQuad
		// 5. easeInOutQuad
		// 6. easeInCubic
		// 7. easeOutCubic
		// 8. easeInOutCubic
		// 9. easeInQuart
		// 10. easeOutQuart
		// 11. easeInOutQuart
		// 12. easeInQuint
		// 13. easeOutQuint
		// 14. easeInOutQuint
		// 15. easeInExpo
		// 16. easeOutExpo
		// 17. easeInOutExpo
		// 18. easeInSine
		// 19. easeOutSine
		// 20. easeInOutSine
		// 21. easeInCirc
		// 22. easeOutCirc
		// 23. easeInOutCirc
		// 24. easeInElastic
		// 25. easeOutElastic
		// 26. easeInOutElastic
		// 27. easeInBack
		// 28. easeOutBack
		// 29. easeInOutBack
		// 30. easeInBounce
		// 31. easeOutBounce
		// 32. easeInOutBounce
	});
});
