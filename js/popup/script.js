idleTime = 0;
$(document).ready(function(){
	$limit = 5;
	
	if ($.cookie('test_status') != '1') {
		$('.cookie').html;
		$.get('form.html', function(data) {
			$('.subs-popup').html(data);
		});
		function timerIncrement() {
			idleTime = idleTime + 1;
			if (idleTime > $limit) { 
				$('.subs-popup ').show();
				idleTime = 0;
			}
		}
		
		// Increment the idle time counter every second.
		var idleInterval = setInterval(timerIncrement, 1000); // 1 second

		// Zero the idle timer on mouse movement.
		$(this).mousemove(function (e) {
			idleTime = 0;
		});
		$(this).keypress(function (e) {
			idleTime = 0;
		});
		
		$.cookie('test_status', '1', { expires: 30 });
	} else {
		$('.cookie').html;
	}
});