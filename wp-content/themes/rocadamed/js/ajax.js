jQuery(document).ready(function($){
    $(".form").submit(function(e) {
       e.preventDefault();
       
       
       var form_data = $(this).serialize();
        $.ajax({
        type: "POST",
        url: "send.php",
        data: form_data,
        success: function() {
            $('.modal-form').fadeOut();
            $('.overlay').fadeIn();
            $('.modal-ok').fadeIn();
        } // забыли закрыть success
        });
       
    });
});