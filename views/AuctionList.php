<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/14
 * Time: 15:15
 */

class AuctionList {

    private $model;
    private $controller;

    public function __construct($model, $controller) {
        $this->model = $model;
        $this->controller = $controller;
    }

    public function render() {

        $this->model->setQuery('SELECT * FROM leilao');
        $this->model->execute();

        echo '<div class="container">';

        echo("<table>");
        echo("<tr><td>ID</td><td>nif</td><td>diahora</td><td>NrDoDia</td><td>nome</td><td>tipo</td><td>valorbase</td></tr>\n");
        $idleilao = 0;

        foreach($this->model->getTableRecord() as $row){
            $idleilao = $idleilao +1;
            echo("<tr><td>");
            echo($idleilao); echo("</td><td>");
            echo($row["nif"]); echo("</td><td>");
            echo($row["dia"]); echo("</td><td>");
            echo($row["nrleilaonodia"]); echo("</td><td>");
            echo utf8_encode($row["nome"]); echo("</td><td>");
            echo($row["tipo"]); echo("</td><td>");
            echo($row["valorbase"]); echo("</td><td>");
            $leilao[$idleilao]= array($row["nif"],$row["dia"],$row["nrleilaonodia"]);
        }
        echo("</table>\n");

        echo "</div>";
    }
} 