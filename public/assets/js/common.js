$(window).scroll(function () {
    if($(window).scrollTop() > 125) {
        $(".mobile-nav-panel").addClass('sticky');
        $(".topnav").addClass('sticky');
    } else {
        $(".mobile-nav-panel").removeClass('sticky');
        $(".topnav").removeClass('sticky');
    }
});


$('.custom-notification-section').on('click', function(event){    
    var events = $._data(document, 'events') || {};    
    events = events.click || [];    
    for(var i = 0; i < events.length; i++) {        
        if(events[i].selector) {

            //Check if the clicked element matches the event selector            
            if($(event.target).is(events[i].selector)) {               
                 events[i].handler.call(event.target, event);            
            }
            // Check if any of the clicked element parents matches the             
            // delegated event selector (Emulating propagation)            
            $(event.target).parents(events[i].selector).each(function(){                
                events[i].handler.call(this, event); });        
            }    
        }    event.stopPropagation(); //Always stop propagation
});
$('.user-downdown-custom').on('click', function(event){    
    var events = $._data(document, 'events') || {};    
    events = events.click || [];    
    for(var i = 0; i < events.length; i++) {        
        if(events[i].selector) {

            //Check if the clicked element matches the event selector            
            if($(event.target).is(events[i].selector)) {               
                 events[i].handler.call(event.target, event);            
            }
            // Check if any of the clicked element parents matches the             
            // delegated event selector (Emulating propagation)            
            $(event.target).parents(events[i].selector).each(function(){                
                events[i].handler.call(this, event); });        
            }    
        }    event.stopPropagation(); //Always stop propagation
});



// $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
//     $('#calendar').fullCalendar('rerenderEvents');
// });

$("input[name='individual']").click(function () {
    $('.individual-element').css('display', 'block');
    $('.organisation-element').css('display', 'none');
    $('.organisation').prop('checked', false);
});
$("input[name='organisation']").click(function () {
    $('.organisation-element').css('display', 'block');
    $('.individual-element').css('display', 'none');
    $('.individual').prop('checked', false);
});



// Go to Top

$(function(){

    // Scroll Event

    $(window).on('scroll', function(){

        var scrolled = $(window).scrollTop();

        if (scrolled > 500) $('.go-top').addClass('active');

        if (scrolled < 500) $('.go-top').removeClass('active');

    });

    // Click Event

    $('.go-top').on('click', function() {

        $("html, body").animate({ scrollTop: "0" },  500);

    });



$('.campaigns-list-row .read-more[data-toggle="collapse"]').click(function() {
    $(this).toggleClass( "active" );
    if ($(this).hasClass("active")) {
        $(this).text("View less");
    } else {
        $(this).text("More details");
    }
});    

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})


// Scroll Utility

// $(window).on('scroll', function(){

//     var scrolled = $(window).scrollTop();

//     if (scrolled > 300) $('.fixedContainer-utilitypanel').addClass('active');

//     if (scrolled < 300) $('.fixedContainer-utilitypanel').removeClass('active');

// });

$(".close-utility").click(function(){
    $(".fixedContainer-utilitypanel").hide();
  });


});


