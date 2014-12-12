
<div id="header">

    <div class="header container">

        <div class="row">

            <div class="col-md-12">

                <img class="logo" src="resources/img/logo.png">
                <h3 class="logo-title">Leilões</h3>

            </div>

        </div>

    </div>

<?php
    if (\utils\Session::isLoggedIn()) {
        echo("<header class='navbar-default'>");
        echo("<div class='container'>");
        echo("<ul class='nav navbar-nav'>");
        echo("<li class='active'><a href='index.php?r=Auction'>Leilões</a></li>");
        echo("<li><a href='index.php?r=Bid'>Meus Leilões</a></li>");
        echo("<li><a href='index.php?r=AuctionTransaction'>Leilões Transação</a></li>");
        echo("</ul>");
        echo("</div>");
        echo("</header>");
    }
?>
</div>