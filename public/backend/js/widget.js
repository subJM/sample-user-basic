if ($('.main_json').length > 0 ) {
	$('.main_json').each(function() {
		var att_data = {};

		$.each(this.attributes, function() {
			if (this.name.startsWith('data-')) {
				var key = this.name.slice(5).replace(/-(.)/g, function(_, char) {
					return char.toUpperCase();
				});
				att_data[key] = $(this).val();
			}
		});
		
		var $this = $(this);

		$.ajax({
			type : 'get',
			url : '/json/main.asp',
			data : 	att_data,
			dataType:"JSON",
			success :function(res) {
				if (att_data.mode === undefined) {
					for (key in res) {
						_res = res[key];
						if ($('.'+key).length > 0 ) {
							if (typeof(_res) == 'object') {
								for (key2 in _res) {
									$('.'+key2).text(_res[key2]);
								}
							}
						}
					}
				} else {
					//template = $this.find('.main_json_template').html();
					template = $this.html();
					var html = '';
					for (i = 0; i < res.length; i++) {
						_res = res[i];
						result = template;

						for (key in _res) result = result.replace('[['+key+']]', _res[key]).trim();
						html += result;
					}
					//$this.html(html);
					$this.after(html);
					$this.remove();
				}
			}
		});
	});
}