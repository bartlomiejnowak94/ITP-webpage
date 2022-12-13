jQuery(document).ready(function($){

    // hide the topbutton on page load/ready.
    $('#to-top-button').hide();

    //Check to see if the window is top if not then display button
    $('body').scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#to-top-button').show().fadeIn();
        } else {
            $('#to-top-button').fadeOut().hide();
        }
    });
});