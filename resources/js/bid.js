
$(document).ready(function(){
    $("#bid-button").click(function(){
        var valor = $("#bid").val();

        var data = {
            'valor' : valor
        };

        $.ajax({
            type: "POST",
            url: "index.php?r=BidDetail&a=actionAjaxBid",
            data: data,
            cache: false,
            success: function(result){
                console.log(result);
                location.reload();
            }
        });

        return false;
    });
});