$(document).ready(function(){
    $("#submit").click(function(){
        var username = $("#username").val();
        var pin = $("#pin").val();
        var data = {
            'username' : username,
            'pin' : pin
        };

        $.ajax({
            type: "POST",
            url: "login.php",
            data: data,
            cache: false,
            success: function(result){
                console.log(result);
            }
        });

        return false;
    });
});