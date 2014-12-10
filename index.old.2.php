<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09/12/14
 * Time: 16:28
 */
?>

<?php require_once('head.php'); ?>

<header class="navbar navbar-default navbar-static-top">
    <div class="container">
        <!--
        <div class="navbar-header">
            <a href="#" class="navbar-brand">
                <img class="logo" src="./img/logo.png" alt="logo">
            </a>
        </div>
        -->
    </div>
</header>

<div class="container">
    <!--
    <ul class="breadcrumb"><li><a href="/basic/web/index.php">Home</a></li>
        <li class="active">Login</li>
    </ul>
    -->
    <div class="site-login">
        <h1>Login</h1>

        <p>Please fill out the following fields to login:</p>

        <form id="login-form" class="form-horizontal" method="post">

            <input type="hidden" name="_csrf" value="am1QdWhfeHMADChMMToeBzwJNSFRbyseIB8pEyAVSyAdCjNNJhwrHQ==">

            <div class="form-group field-loginform-username required">
                <label class="col-lg-1 control-label" for="username">Username</label>

                <div class="col-lg-3"><input type="text" id="username" class="form-control" name="username"></div>

                <div class="col-lg-8"><p class="help-block help-block-error"></p></div>
            </div>

            <div class="form-group field-loginform-password required">
                <label class="col-lg-1 control-label" for="pin">Password</label>

                <div class="col-lg-3"><input type="password" id="pin" class="form-control" name="pin"></div>

                <div class="col-lg-8"><p class="help-block help-block-error">error</p></div>
            </div>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <button type="submit" class="btn btn-primary" id="submit" name="login-button">Login</button>
                </div>
            </div>

        </form>
<!--
        <script>
            $(document).ready(function(){
                $("#submit").click(function(){
                    var username = $("#username").val();
                    var pin = $("#pin").val();
                    var data = 'username=' + username +
                        'pin=' + pin;

                    $.ajax({
                        type: "POST",
                        url: "login.php",
                        data: data,
                        cache: false,
                        success: function(result){
                            alert(result);
                        }
                    });

                    return false;
                });
            });
        </script>-->

    </div>
</div>
<!--
<div class="container" style="padding: 80px;">
    <div class="row">
        <div class="col-md-12">
            <span style="padding-bottom: 30px" class="lead-icon glyphicon glyphicon-tasks"></span>
            <p class="lead-text">Lorem ipsum</p>
        </div>


    </div>
</div>
-->

<?php include_once('footer.php'); ?>

