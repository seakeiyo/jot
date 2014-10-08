(function (d, w) {
	var html = d.documentElement,
		body = d.body,
		
		titleField1 = $('#title-1'),
		noteTextArea = $('#note-1');
		
	/*$(titleField1).add(noteTextArea).on('change keyup paste', function (e) {
		if(typeof(s) != 'undefined') clearTimeout(s);
		
		s = setTimeout(function(){		
				$.post('php/save.php', {
					titleFieldID: titleField1.attr('id'),
					title: titleField1.val(),
					content: noteTextArea.val()
				}, function (data) {					
					console.log(data);
				});
		
				console.log("saved");
			},1000);
	});*/
	
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
			},1000);
		
		//	console.log('Wawa ' + $(this).attr('id') + ' ' + $(counterpart).attr('id'));
	});
})(document, window);