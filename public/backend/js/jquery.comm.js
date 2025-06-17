jQuery.fn.checkField = function(str) {
	if ($(this).length == 0) {
		alert($(this).selector + ' 가 존재하지 않습니다. 관리자에게 문의해주세요');
	} else {
		console.log($(this).length);
		if ($(this).val().match(/\S/) == null) {
			alert(str);
			$(this).focus();
			return false;
		} else {
			return true;
		}
	}
};