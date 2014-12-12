<?php

namespace views;

class BidView extends View {

    public function __construct($model) {
        parent::__construct($model);
    }

    public function prepare() {
        $this->model->execute();
    }

    public function render() {
        include_once(__DIR__ . "/../head.php");
        include_once(__DIR__ . "/../navigation.php");


        echo '<div class="container">';

        echo("<table>");
        echo("<tr><td>ID</td><td>NIF</td><td>diahora</td><td>NrDoDia</td><td>nome</td><td>tipo</td><td>valorbase</td></tr>\n");

        foreach ($this->model->getRecord() as $row) {
            echo("<tr><td>");

            echo("<a href='index.php?r=BidDetail&p=" . $row['lid'] . "'>");
            echo($row['lid']);  echo("</td><td>");
            echo("</a>");
            echo($row["nif"]); echo("</td><td>");
            echo($row["dia"]); echo("</td><td>");
            echo($row["nrleilaonodia"]); echo("</td><td>");
            echo utf8_encode($row["nome"]); echo("</td><td>");
            echo($row["tipo"]); echo("</td><td>");
            echo($row["valorbase"]); echo("</td></tr>");
        }
        echo("</table>\n");

        echo "</div>";

        include_once(__DIR__ . "/../footer.php");
    }
} 