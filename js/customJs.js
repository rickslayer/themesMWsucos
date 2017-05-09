jQuery(function ($) {
$("span.menu").click(function(){
                    $(" ul.navig").slideToggle("slow" , function(){
                    });
                });




 $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });



     $().UItoTop({ easingType: 'easeOutQuart' });
});

