
<?php

// Setting model for this view
include(__DIR__ . '/../models/TableRecordModel.php');

$tableRecord = new TableRecordModel();
$tableRecord->setQuery('SELECT * FROM leilao');
$tableRecord->execute();

echo("<table border=\"1\">\n");
echo("<tr><td>ID</td><td>nif</td><!--<td>diahora</td>--><td>NrDoDia</td><td>nome</td><td>tipo</td><td>valorbase</td></tr>\n");
$idleilao = 0;

foreach($tableRecord->getTableRecord() as $row){
    $idleilao = $idleilao +1;
    echo("<tr><td>");
    echo($idleilao); echo("</td><td>");
    echo($row["nif"]); echo("</td><td>");
    //echo($row["diahora"]); echo("</td><td>");
    echo($row["nrleilaonodia"]); echo("</td><td>");
    echo($row["nome"]); echo("</td><td>");
    echo($row["tipo"]); echo("</td><td>");
    echo($row["valorbase"]); echo("</td><td>");
    //$leilao[$idleilao]= array($row["nif"],$row["diahora"],$row["nrleilaonodia"]);
}
echo("</table>\n");