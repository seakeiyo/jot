(function (d, w) {
	var html = d.documentElement,
		body = d.body,
		
		titleField1 = $('#title-1'),
		noteTextArea = $('#note-1');
		
	$(titleField1).add(noteTextArea).on('change keyup paste', function (e) {
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
	});
})(document, window);