function urlParam(name) {
	var results = new RegExp('[\\?&amp;]' + name + '=([^&amp;#]*)').exec(window.location.href);
	if (results) {
		return results[1] || 0;
	} else {
		return '';
	}
}

function activateFadeIn(classOrId, speed) {
	$(classOrId).css({
		"display" : "none"
	}).fadeIn(speed);
}

function getFocus(classname) {
	$(classname).focus(function() {
		$(this).addClass("actives");
	});

	$(classname).blur(function() {
		$(this).removeClass("actives");
	});
}

function minus(minus) {
	var minus = $(minus);
	$(minus + ":contains('-')").addClass("red");
}

function NumOnlyBind(k) {
	$(k).keydown(function(e) {
		if ((e.which != 190 || $(this).val().indexOf('.') != -1) && (e.which < 48 || e.which > 57) && (e.which != 8)) {
			e.preventDefault();
		}
	});
}

function showStatus(message) {
	$("body").after("<div class='message'></div><div class='screen'></div>");

	$(".message").css({
		"padding" : "50px 50px",
		"background" : "#ffffff",
		"borderRadius" : "5px",
		"position" : "fixed",
		"top" : "25%",
		"zIndex" : "999",
		"textAlign" : "center",
		"left" : (parseInt($(window).width()) - parseInt($(".message").outerWidth() / 2) + "px")
	});

	$(".screen").css({
		"width" : "100%",
		"height" : "100%",
		"background" : "rgba(0,0,0,0.5)",
		"position" : "fixed",
		"left" : "0",
		"top" : "0"
	});

	$(".message").html(message);

	setInterval(function() {
		$(".message, .screen").fadeOut(500, function() {
			$(".message, .screen").remove();
		});
	}, 2000);
}

function rowCheck(row) {
	$(row).click(function() {
		if($(this).find("input:checkbox").is(":checked")) {
			$(this).find("input:checkbox").prop("checked", false);
			$(this).removeClass("hover-sel");
		}else {
			$(this).find("input:checkbox").prop("checked", true);
			$(this).addClass("hover-sel");
		}
	});
}

$(document).ready(function() {
	getFocus(".mod, .mod-num, .mod-ovr");
	activateFadeIn("#main-ctn, #login-ctn");
	minus(".minus");
	
	// Show status
	if(urlParam('cmd') == 'sc') {
		showStatus("保存しました。");
	}else if(urlParam('cmd') == 'scdel') {
		showStatus("完全に削除しました。");
	}else if(urlParam('cmd') == 'scupd') {
		showStatus("完全に編集しました。");
	}else if(urlParam('cmd') == 'f') {
		showStatus("エラーです。");
	}
});

