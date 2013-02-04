!function ($) {
	$(function() {
    	var $window = $(window)

		$('#myCarousel').carousel({
     		interval: 2100
    	})

		$('.disabled').tooltip({
      		selector: "a[rel=tooltip]"
      	})
		
		$('.disabled').tooltip()
	})
}(window.jQuery)