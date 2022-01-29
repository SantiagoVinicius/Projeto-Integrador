(function(){
	$(function(){
		$.each($('#launch-list li'), function(i, value){
			var img = new Image();
			img.src = $(this).data('bg');
		});

		$('#launch-list').on('click', 'li span', function(e){
			var $listEl = $(this).parent();
			$('#game-title').html($(this).html());
			$('#game-desc').html($listEl.data('desc'));
			$('#content').css('background-image', 'url("' + $listEl.data('bg') + '")');
		})
	});
})();