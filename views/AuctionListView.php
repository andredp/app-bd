<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/14
 * Time: 15:15
 */

require_once(__DIR__ . '/View.php');

class AuctionListView extends View {
    public function __construct($model, $controller) {
        parent::__construct($model, $controller);
    }

    public function prepare() {
        $this->model->execute();
    }

    public function render() {
        echo '<div class="container">';

        echo("<table>");
        echo("<tr><td>ID</td><td>NIF</td><td>diahora</td><td>NrDoDia</td><td>nome</td><td>tipo</td><td>valorbase</td></tr>\n");
        $idleilao = 0;

        foreach ($this->model->getTableRecord() as $row) {
            $idleilao += 1;
            echo("<tr><td>");
            echo($idleilao); echo("</td><td>");
            echo($row["nif"]); echo("</td><td>");
            echo($row["dia"]); echo("</td><td>");
            echo($row["nrleilaonodia"]); echo("</td><td>");
            echo utf8_encode($row["nome"]); echo("</td><td>");
            echo($row["tipo"]); echo("</td><td>");
            echo($row["valorbase"]); echo("</td><td>");

        }
        echo("</table>\n");

        echo "</div>";
    }
} 