// JavaScript Document
$(function() {
	function isEnterNumber(evt, element) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (
            (charCode < 48 || charCode > 57))
            return false;
        return true;
    }   
	function addCommas(nStr)
	{
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	} 
	
	// Xu ly trang nhap luong nhan vien
	$(document).on('keyup', '.field', function(event){
		if(isEnterNumber(event, this)){
			var nhanvien_id = $(this).data('nhanvien_id');
			var field = $(this).data('field');
			var value = this.value;
			if( value == ''){
				value=0;
			}
			$('#label'+nhanvien_id+field).html(addCommas(value)+'&nbsp;&nbsp;');
		}
	});
	
	$(document).on('blur', '.field', function(event){
		var luong_id = $(this).data('luong_id');
		var nhanvien_id = $(this).data('nhanvien_id');
		var field = $(this).data('field');
		var value = this.value;
		if($.isNumeric( value )){
			$('#label'+nhanvien_id+field).html(addCommas(value)+'&nbsp;&nbsp;');
			$.ajax({
				url:"index.php?r=nhanvienLuong/UpdateField",
				type:"POST",
				data:{'luong_id': luong_id, 'field':field,'value':value},
		  	});
		}
	});
	
	// Xu ly trang tinh luong
	
});