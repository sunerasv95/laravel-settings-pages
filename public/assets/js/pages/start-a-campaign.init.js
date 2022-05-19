$(document).ready(function() {
    $("#campaignsteps-nav-pills-wizard").bootstrapWizard({
        tabClass: "nav nav-pills nav-justified"
    })

    // $('#campaignsteps-nav-pills-wizard').bootstrapWizard({onTabClick: function(tab, navigation, index) {
		
	// 	return false;
	// }});

    $('#campaignsteps-nav-pills-wizard a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  
        //update progress
        var step = $(e.target).data('step');
        var percent = (parseInt(step) / 6) * 100;
        
        $('.progress-bar').css({width: percent + '%'});
        // $('.progress-bar').text("Step " + step + " of 6");
        
        //e.relatedTarget // previous tab
        
      })

    
    $("#campaignsteps-nav-pills-wizard .twitter-bs-wizard-nav li a").on("click", function() {
       
        $(this).parent().siblings().find("a.active").removeClass("active").addClass("visited");
        
     });

     $('#campaignsteps-nav-pills-wizard .next').on("click", function() {
        $('#campaignsteps-nav-pills-wizard .twitter-bs-wizard-nav li a').parent().find("a.active").addClass("visited");
    });

     $('#campaignsteps-nav-pills-wizard .previous').on("click", function() {
        $('#campaignsteps-nav-pills-wizard .twitter-bs-wizard-nav li a').parent().find("a.active").addClass("visited");
    });
     
    // $('#campaignsteps-nav-pills-wizard a[href="#images-video-info"]').on("click", function() {
       
    //     $('.twitter-bs-wizard-pager-link .next').addClass("visited");
    //   });


    
         
     
    // $("#campaignsteps-nav-pills-wizard .twitter-bs-wizard-nav li a").on("click", function() {
       
    //     $(this).parent().siblings().find("a.active").removeClass("active").addClass("visited");   
                  
    //     $( "#campaignsteps-nav-pills-wizard .twitter-bs-wizard-nav li a.active" ).parent().nextAll().addClass("before");

    //  });
   
    // $('#campaignsteps-nav-pills-wizard .twitter-bs-wizard-nav li a').on('click', function(){
    //     $(this).parent().addClass('current').siblings().removeClass('current').siblings().nextAll('li:not(.current)').addClass('123');
       
    //   });
        
    // $("#campaignsteps-nav-pills-wizard .twitter-bs-wizard-nav li a.visited.active").on("click", function() {
       
    //     $(this).parent().siblings().find("a.visited.active").nextAll().removeClass('visited');  

        
    //  });

    



    $("input[name='unlimited']").click(function () {
        $("input[name='removedisable']").prop('checked', false);
        $('.inputDisabled').attr("disabled", true);
    });
    $("input[name='removedisable']").click(function () {
        $('.inputDisabled').removeAttr("disabled");
        $('.unlimited').prop('checked', false);
    });

    $("input[name='anyone']").click(function () {
        $("input[name='private']").prop('checked', false);
        $('.show-code').css('display', 'none');
    });
    $("input[name='private']").click(function () {
        $("input[name='anyone']").prop('checked', false);
        $('.show-code').css('display', 'block');
    });

    $("input[name='fullday']").click(function () {
        $("input[name='specifictime']").prop('checked', false);
        $('.specifictime-panel').css('display', 'none');
    });
    $("input[name='specifictime']").click(function () {
        $("input[name='fullday']").prop('checked', false);
        $('.specifictime-panel').css('display', 'flex');
    });

    $("input[name='hasyes']").click(function () {
        $("input[name='hasno']").prop('checked', false);
        $('.hasreward-panel').css('display', 'flex');
    });
    $("input[name='hasno']").click(function () {
        $("input[name='hasyes']").prop('checked', false);
        $('.hasreward-panel').css('display', 'none');
    });

    $("input[name='distributedyes']").click(function () {
        $("input[name='distributedno']").prop('checked', false);
        $('.pointsdistributed-panel').css('display', 'flex');
    });
    $("input[name='distributedno']").click(function () {
        $("input[name='distributedyes']").prop('checked', false);
        $('.pointsdistributed-panel').css('display', 'none');
    });
    
    


}), $(".select2").select2();
