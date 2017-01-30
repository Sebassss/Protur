/**
 * Created by Ivan on 27/01/2017.
 */
$(function(){

    function loadPage(viewFile){

        $.ajax({
            url: "views/"+viewFile+".php",
            type: "GET",
            global: true,
            cache:false

        }).done(function(data) {

            //console.log(data)
            $(".mainContent").html(data);
        });
    }

    $("#solicitudes").click(function(){
       loadPage("solicitudes");
    });


});