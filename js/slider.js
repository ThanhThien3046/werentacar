$(function() {
    $('.slider').slick({
            infinite: true,
            dots:true,
            autoplaySpeed:3000,
            slidesToShow: 1,
            centerMode: true, //要素を中央寄せ
            centerPadding:'0', //両サイドの見えている部分のサイズ
            autoplay:true, //自動再生
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                centerMode:false, 
                centerPadding:false,
            }},]
        });
});

$(function() {	
$('#start_datepicker').datepicker({
        dateFormat: "yy/mm/dd",
        onSelect: function(e){
            $('#end_datepicker').datepicker('option', 'minDate', new Date(e));
        },
        });
    
        $('#end_datepicker').datepicker({
            dateFormat: "yy/mm/dd",
            onSelect: function(e){
                $('#start_datepicker').datepicker('option', 'maxDate', new Date(e));
            }
        });
    });

$(function() {
    var coeff = 1000 * 60 * 60;
    $(document).ready(function() {
    $("#start_datepicker").datepicker({ dateFormat: "yy/mm/dd"}).datepicker("setDate", new Date());
    $("#end_datepicker").datepicker({ dateFormat: "yy/mm/dd"}).datepicker("setDate", new Date());
    $('#end_timepicker,#start_timepicker,#startundecided_timepicker,#endundecided_timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 60,
            minTime: '09:00',
            maxTime: '19:00',
            defaultTime: new Date(Math.ceil(new Date().getTime() / coeff) * coeff),
            startTime: '9:00',
            dynamic: false,
            dropdown: true,
            scrollbar: false
        });
    });
});

