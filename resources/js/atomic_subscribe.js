
$(document).ready(function(){
    $("#atomic-subscribe").click(function(){

        var lids = [];

        $(".checkbox input:checked").each(function () {
                lids.push($(this).val());
            }
        );

        var data = {
            'lids': lids
        };

        $.ajax({
            type: "POST",
            url: "index.php?r=AuctionTransaction&a=actionAjaxAuctionTransaction",
            data: data,
            cache: false,
            success: function(result){
                console.log(result);
            }
        });

        return false;
    });
});