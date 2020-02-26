<?php 
    $deportegames = array("nba","fifa","pes");
    $output = "<tr>Deportes</tr> <br>";
    foreach ($deportegames as $game) {
        $output .= "<tr>$game</tr> <br>";
    }
    echo $output
?>