$(document).ready(function() {
    $('.notrepeat').each(function(index, element){
        $(this).click(function () {
            if ( $(this).data('loading-text') ){
                $(this).html( $(this).data('loading-text') );
            }
            else {
                $(this).html("<i class='fa fa-circle-o-notch fa-spin'></i> データ送信中 ... ");
            }
            var jq_obj = $(this);
            setTimeout( function() {
                jq_obj.attr('disabled', true);
            }, 1, jq_obj );
        });
    });
});