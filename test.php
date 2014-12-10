<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09/12/14
 * Time: 19:35
 */

//include("class/Singleton.php");

?>
<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script src="./bower_components/modernizr/modernizr.js"></script>
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){

    // AJAX Code To Submit Form.
    $.ajax({
    type: "POST",
    url: "index.php",
    //data: dataString,
    cache: false,
    success: function(result){
        alert(result);
    }
    });


});
    </script>



<html>
<body>
<h1>asfasdfasdfasfasf</h1>

</body>
</html>
