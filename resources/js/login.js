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
            url: "validations.php?validation=login",
            data: data,
            cache: false,
            success: function(result){
                console.log(result);
            }
        });

        return false;
    });
});