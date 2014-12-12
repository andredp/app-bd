<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/14
 * Time: 15:15
 */

namespace views;

class AuctionTransactionView extends View {

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
        <div class="container" style="padding-top: 20px;>
            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <button type="submit" class="btn btn-primary" id="atomic-subscribe" name="login-button">Inscrever</button>
                </div>
            </div>
        </div>


        <?php

        echo '<div class="container">';

        echo("<table>");
        echo("<tr><td>ID</td><td>NIF</td><td>diahora</td><td>NrDoDia</td><td>nome</td><td>tipo</td><td>valorbase</td><td></td><td></tr>\n");

        foreach ($this->model->getRecord() as $row) {
            $lid = $row["lid"];
            echo("<tr><td>");
            echo($lid); echo("</td><td>");
            echo($row["nif"]); echo("</td><td>");
            echo($row["dia"]); echo("</td><td>");
            echo($row["nrleilaonodia"]); echo("</td><td>");
            echo utf8_encode($row["nome"]); echo("</td><td>");
            echo($row["tipo"]); echo("</td><td>");
            echo($row["valorbase"]); echo("</td><td>");
            echo("<div class='checkbox'>");
            echo("<label>");
            echo("<input type='checkbox' value='$lid'>");
            echo("</label>");
            echo("</div>");
            echo("</td></tr>");

        }
        echo("</table>\n");

        echo "</div>";

        include_once(__DIR__ . "/../footer.php");

    }
} 