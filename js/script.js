(function (d, w) {
	var html = d.documentElement,
		body = d.body;
		
	var addButton = $('#add-button');
	
	$('.bind-evt').on('change keyup paste', function (e) {
		var isTitle = $(this).hasClass('bind-evt-title'),
			id = $(this).attr('data-id'),
			title,
			content;
		
		if (isTitle) {
			content = $('#note-' + id);	
			title = $(this);			
		}
		else {
			title = $('#title-' + id);	
			content = $(this);	
		}
		
		if(typeof(s) != 'undefined') clearTimeout(s);
		
		s = setTimeout(function(){		
				$.post('app/save.php', {
					titleFieldID: id,
					title: $(title).val(),
					content: $(content).val()
				}, function (data) {					
					console.log(data);
				});
		
				console.log("saved");
			},250);
		
	});
	
	$(addButton).click(function(){
		$.post('app/add.php', function (data) {					
			console.log(data);
		});
	});
})(document, window);