$(document).ready(function(){
    $("#subscribe").click(function(){
        var lid = $("#lid").val();
        console.log(lid);

        var data = {
            'lid' : lid
        };

        $.ajax({
            type: "POST",
            url: "index.new.php?r=Auction&a=actionAjaxSubscribe",
            data: data,
            cache: false,
            success: function(result){

                console.log("end");
                console.log(result);
               //window.location.href = "./index.php";

            }
        });

        return false;
    });
});