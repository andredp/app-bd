$(document).ready(function(){
    $("#subscribe").click(function(){
        var username = $("#username").val();
        var pin = $("#pin").val();
        var data = {
            'username' : username,
            'pin' : pin
        };

        $.ajax({
            type: "POST",
            url: "index.new.php?r=Auction&a=actionAjaxSubscribe",
            data: data,
            cache: false,
            success: function(result){
               console.log(result);
               //window.location.href = "./index.php";

            }
        });

        return false;
    });
});