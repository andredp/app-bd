<?php

namespace views;

class BidDetailView extends View {

    public function __construct($model) {
        parent::__construct($model);
    }

    public function prepare() {
        $this->model->execute();
    }

    public function render() {
        include_once(__DIR__ . "/../head.php");
        include_once(__DIR__ . "/../navigation.php");

        // Entrada do leilão com um certo id
        echo("<div class='container'>");
        echo("<table>");
        echo("<tr><td>ID</td><td>NIF</td><td>Tempo Restante</td><td>nome</td><td>valorbase</td></tr>\n");

        foreach ($this->model->getStoredRecord("bdetail") as $row) {
            echo("<tr><td>");
            echo($row['lid']); echo("</td><td>");
            echo($row["nif"]); echo("</td><td>");
            echo($row["rem"]); echo("</td><td>");
            echo utf8_encode($row["nome"]); echo("</td><td>");
            echo($row["valorbase"]); echo("</td><td>");
        }

        echo("</table>\n");

        echo "</div>";

        // Entrada do leilão com um certo id
        echo("<div class='container'>");
        echo("<table>");
        echo("<tr><td>NIF</td><td>Nome</td><td>Valor</td></tr>\n");

        foreach ($this->model->getStoredRecord("bids") as $row) {
            echo("<tr><td>");
            echo($row['pessoa']); echo("</td><td>");
            echo(utf8_encode($row["nome"])); echo("</td><td>");
            echo($row["valor"]); echo("</td><td>");
        }

        echo("</table>\n");

        echo "</div>";

        ?>
        <div class="container">
            <div class="site-login">
                <form id="login-form" class="form-horizontal" method="post" style="padding-top: 50px;">

                    <input type="hidden" name="_csrf" value="am1QdWhfeHMADChMMToeBzwJNSFRbyseIB8pEyAVSyAdCjNNJhwrHQ==">

                    <div class="form-group field-loginform-username required">
                        <label class="col-lg-1 control-label" for="username">Valor</label>

                        <div class="col-lg-3"><input type="text" id="bid" class="form-control" name="username"></div>

                        <div class="col-lg-8"><p class="help-block help-block-error"></p></div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <button type="submit" class="btn btn-primary" id="bid-button" name="login-button">Licitar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <?php

        include_once(__DIR__ . "/../footer.php");
    }
} 