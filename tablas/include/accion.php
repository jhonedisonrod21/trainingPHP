<?php 
    $actiongames = array("gta","cod","mafia");
    $output = "<tr>Accion</tr> <br>";
    foreach ($actiongames as $game) {
        $output .= "<tr>$game</tr> <br>";
    }
?>