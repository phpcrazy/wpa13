

Overlay = (function(){
	
	return function(settings){
		
	//--Priviledged properties
	
		this.settings = jQuery.extend({
			parent: document.body,
			minTop: 50,
			fallbackId: 'fallback',
			overlayId: 'overlay',
			duration: 800,
			effect: 'swing',
			hasCloseBtn: true,
			closeBtnClass: 'close',
			closeBtnText: 'x',
			hasFallbackClick: true	
			
		}, ( !settings ? new Array() : settings) );
		
		this.fallback = document.getElementById(this.settings.fallbackId);
		if(!this.fallback)
		{
			this.fallback = document.createElement('div');
			this.fallback.setAttribute('id',this.settings.fallbackId);
			jQuery(this.fallback).css({
				display: 'none',
				opacity: 0
			});
			jQuery(this.settings.parent).append(this.fallback);
		}
		if(this.settings.hasFallbackClick)
		{
			jQuery(this.fallback).bind('click',{obj:this},function(event){
				event.data.obj.hide();
			});
		}
		
		this.overlay = document.getElementById(this.settings.overlayId);
		if(!this.overlay)
		{
			this.overlay = document.createElement('div');
			this.overlay.setAttribute('id',this.settings.overlayId);
			jQuery(this.overlay).css({
				display: 'none',
				opacity: 0
			});
			jQuery(this.settings.parent).append(this.overlay);
		}
		
		
		if(this.settings.hasCloseBtn) this.addCloseBtn();
		
		this.is_on = false;
		
	}; // Return

})();


Overlay.prototype = {
	
	resize: function(settings)
	{
		settings = jQuery.extend({
			// If the dimensions have not been specified use current
			width: jQuery(this.overlay).width(),
			height: jQuery(this.overlay).height(),
			callback: null	
		},(typeof settings === 'object') ? settings : {});
		
		this.overlay.style.width = settings.width + 'px';
		this.overlay.style.height = settings.height + 'px';
		
		if(settings.callback) settings.callback();
		
		return this.position();
	},
	
	position: function(settings)
	{
		settings = jQuery.extend({
			// If the dimensions have not been specified use current
			width: jQuery(this.overlay).innerWidth(),
			height: jQuery(this.overlay).innerHeight(),
			callback: null	
		},(typeof settings === 'object') ? settings : {});
		
		
		// calculate the top position of  the overlay
		var top = Math.round((jQuery(window).scrollTop() + (jQuery(window).height() / 2)) - (settings.height / 2));
		// if the overlay is taller than the available height set it to display at zero position
		if(top < (jQuery(window).scrollTop() + this.settings.minTop)) top = (jQuery(window).scrollTop() + this.settings.minTop);
		
		this.overlay.style.top = top + 'px';
		this.overlay.style.marginLeft = '-' + Math.round(settings.width / 2) + 'px';
		
		if(settings.callback) settings.callback();
		
		return this;
	},
	
	show: function(settings)
	{
		if(this.is_on) return this;
		
		settings = jQuery.extend({
			animate: true,
			callback: null	
		},(typeof settings === 'object') ? settings : {});
		
		jQuery(this.overlay).add(this.fallback).css({
			display: 'block',
			opacity: 0
		});
		
		this.position();
		
		jQuery(this.overlay).stop().animate(
			{opacity:1},
			(settings.animate) ? this.settings.duration : 0, 
			this.settings.effect
		);
		
		jQuery(this.fallback).stop().animate(
			{opacity:1},
			(settings.animate) ? this.settings.duration : 0, 
			this.settings.effect,
			settings.callback
		);
		
		this.is_on = true;
		
		return this;
	},
	
	hide: function(settings)
	{
		settings = jQuery.extend({
			animate: true,
			callback: null	
		},(typeof settings === 'object') ? settings : {});
		
		var obj = this;
		
		jQuery(this.overlay).stop().animate(
			{opacity:0},
			(settings.animate) ? this.settings.duration : 0, 
			this.settings.effect
		);
		
		jQuery(this.fallback).stop().animate(
			{opacity:0},
			(settings.animate) ? this.settings.duration : 0, 
			this.settings.effect,
			function(){
				obj.fallback.style.display = 'none';
				obj.overlay.style.display = 'none';
				if(typeof settings.callback === 'function') settings.callback();
			}
		);
		
		this.is_on = false;
		
		return this;
	},
	
	content: function(settings)
	{
		settings = jQuery.extend({
			html: '',
			callback: null
		},(typeof settings === 'object') ? settings : {});
		
		jQuery(this.overlay).html(settings.html);
		
		if(this.settings.hasCloseBtn) this.addCloseBtn();
		
		if(typeof settings.callback === 'function')settings.callback();
		
		return this;
	},
	
	addCloseBtn: function(){
		var a = document.createElement('a');
		a.setAttribute('href','#');
		a.className = this.settings.closeBtnClass;
		a.appendChild(document.createTextNode(this.settings.closeBtnText));
		this.overlay.appendChild(a);
		
		var obj = this;
		jQuery(a).click(function($e){
			$e.preventDefault();
			obj.hide();	
		});
	}
	
};

