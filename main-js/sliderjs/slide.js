(function($, window, document){
	$.fn.activeSliderVer1 = function(){ 
		var slider = this,
				item = slider.find(".item"),
				next = slider.find(".next"),
				throttleNext,
				prev = slider.find(".prev"),
				throttlePrev,
				i = 0,
				interval;
		// Helpers
		function stopInterval(){
			clearInterval(interval);
		}
		function checkIfGreaterThan(){
			if(i == item.length){
				i = 0
			} 
		}
		function checkIfLessThan(){
			if(i < 0){
				i = item.length - 1
			} 
		}
		
		// Sliding Action Function 
		function slidingAction(){
			item.eq(i).fadeIn().siblings().fadeOut();
		}
		slidingAction();
		
		// Main Slider Function
		function sliderFn(){

			function slidingFn(){
				// Interval 
				interval = setInterval(function(){
					slidingAction();
					i++
					checkIfGreaterThan();
				}, 6500);
			}slidingFn();

			//Contrallers
				// Next
				function nextFn(){
					stopInterval();
					i++;
					checkIfGreaterThan();
					slidingAction();
					slidingFn();
				}
				throttleNext = _.throttle(nextFn, 510);
				next.click(throttleNext);
				// Prev
				function prevFn(){
					stopInterval();
					i--;
					checkIfLessThan();
					slidingAction();
					slidingFn();
				}
				throttlePrev = _.throttle(prevFn, 510);
				prev.click(throttlePrev);
		}sliderFn();
	};
	
	$(".slider.ver1").activeSliderVer1();
	
	
	$.fn.activeSliderVer2 = function (slides){ 
		
			var slider = this,
					itemsMask =  slider.find(".mask"),
					item = itemsMask.find(".item"),
					next = slider.find(".next"),
					throttleNext,
					prev = slider.find(".prev"),
					throttlePrev,
					interval,
					length = item.length,
					itemWidth = itemsMask.outerWidth() / slides,
					itemsWidth = length * itemWidth,
					move = itemWidth;
		itemsMask.width(itemsWidth);
		item.width(slider.outerWidth() / slides);
			// Helpers
			function stopInterval(){
				clearInterval(interval);
			}
			function checkIfGreaterThan(){
				if(move >= (itemsWidth - itemWidth * (slides - 1)) ){
					move = 0;
				}
			}
			function checkIfLessThan(){
				if(move < 0){
					move = itemsWidth - (itemWidth * slides);
				}
			}

			// Sliding Action Function
			function slidingAction(){
				itemsMask.animate( {
					"margin-left" : '-' + move + "px",
				} , 500);
			}
			// Main Slider Function
			function sliderFn(){
			function slidingFn(){
				interval = setInterval(function(){
					slidingAction();
					move += itemWidth;
					checkIfGreaterThan();
				}, 6500);
			}slidingFn();
			
			//Contrallers
				// Next
				function nextFn(){
					stopInterval();
					move += itemWidth;
					checkIfGreaterThan();
					slidingAction();
					slidingFn();
				}
				throttleNext = _.throttle(nextFn, 510);
				next.click(throttleNext);
				// Prev
				function prevFn(){
					stopInterval();
					move -= itemWidth;
					checkIfLessThan();
					slidingAction();
					slidingFn();
				}
				throttlePrev = _.throttle(prevFn, 510);
				prev.click(throttlePrev);
		}
	
		if(length > slides){
			sliderFn();
		}
			
	};
	
}(window.jQuery, window, document));