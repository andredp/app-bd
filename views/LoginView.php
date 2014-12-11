<?php
/**
 * Created by PhpStorm.
 * User: andredp
 * Date: 10/12/14
 * Time: 22:18
 */

require_once(__DIR__ . '/View.php');

class LoginView extends View {

    public function __construct($model, $controller) {
        parent::__construct($model, $controller);
    }

    protected function render() {

        /*
         * <div class="container">
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
         */

    }
}