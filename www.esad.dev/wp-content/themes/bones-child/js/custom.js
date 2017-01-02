jQuery(function($){

    $('.slider').bxSlider({
        slideWidth: 320,
        minSlides: 2,
        maxSlides: 3,
        moveSlides: 1,
        slideMargin: 85,
        pager: false,
        auto: true,
        pause: 4000,
        autoStart: true,
        autoHover: true
    });

    $(".menu-item a, #home-article-title a, #back-to-blog a, .text-container a").click(function(){
        $( "#container" ).fadeOut(function() {
            document.getElementById("loader").style.display = "block";
        });                
    })


    $('#toggle').toggle( 
        function() {
            $('#popout').animate({ left: 0 }, 'slow', function() {
                $('#toggle').html('<span class="glyphicon glyphicon-align-justify"></span>');
            });
        }, 
        function() {
            $('#popout').animate({ left: -250 }, 'slow', function() {
                $('#toggle').html('<span class="glyphicon glyphicon-align-justify"></span>');
            });
        }
    );


    $("#menu-navbar li a").click(function(){
        $('#toggle').click();
    });


    if (window.location.href.indexOf("/blog/") >= 0) {
        $("#menu-item-69").addClass("current-menu-item");
    }

})