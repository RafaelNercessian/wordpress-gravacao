jQuery(document).ready(function($){
    $('#evento').countdown('2020/10/10', function(event) {
        $('#dias').html(event.strftime('%D Dias'));
        $('#horas').html(event.strftime('%H Horas'));
        $('#minutos').html(event.strftime('%M Min.'));
        $('#segundos').html(event.strftime('%S Seg.'));
    });
})