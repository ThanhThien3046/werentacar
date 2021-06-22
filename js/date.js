$(function(){
	jQuery('.cal-dep').datepicker({
		format: 'yyyy-mm-dd',
		language: 'ja',
		autoclose: true,
		clearBtn: false,
		multidate:false,
		todayHighlight:true,
		startDate: Date()
	}).on('changeDate', function(e) {
		sd = jQuery(this).val();//出発日
		var sdDate = moment(jQuery(this).val());//比較用出発日
		var edDate = jQuery('.cal-arv').val();//返却日
		if(sdDate.isAfter(edDate) == true) {//出発日が返却日を超えた場合
			jQuery('.cal-arv').val(sd);
			jQuery('.cal-arv').datepicker('setDate', sd);
		}
	});
	$(".cal-dep").datepicker("setDate", "+1d");
});
//返却日
$(function() {
	jQuery('.cal-arv').datepicker({
		format: 'yyyy-mm-dd',
		language: 'ja',
		autoclose: true,
		clearBtn: false,
		multidate:false,
		todayHighlight:true,
		setDate: Date(),
		startDate: Date()
	}).on('changeDate', function(e) {
		ed = jQuery(this).val();//返却日
		var edDate = moment(jQuery(this).val());//比較用返却日
		var sdDate = jQuery('.cal-dep').val();//出発情報取得
		if(edDate.isAfter(sdDate) == false) {//返却日が出発日以前を選択した場合
			jQuery('.cal-dep').val(ed);
			jQuery('.cal-dep').datepicker('setDate', ed);
		}
	});
	$(".cal-arv").datepicker("setDate", "+1d");
});