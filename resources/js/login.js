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
            url: "index.new.php?r=login&a=actionAjaxSubmit",
            data: data,
            cache: false,
            success: function(result){
                console.log(result);
            }
        });

        return false;
    });
});