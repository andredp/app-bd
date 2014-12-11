<?php

//require_once(__DIR__ . '/View.php');

namespace views;

class LoginView extends View {

    public function __construct($model) {
        parent::__construct($model);
    }

    public function prepare() {
        $this->model->execute();
    }

    public function render() {

        include_once(__DIR__ . "/../head.php");
        include_once(__DIR__ . "/../navigation.php");
        ?>
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

                        <div class="col-lg-8"><p class="help-block help-block-error"></p></div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <button type="submit" class="btn btn-primary" id="submit" name="login-button">Login</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>


<?php
        include_once(__DIR__ . "/../footer.php");
    }


}
