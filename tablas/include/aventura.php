<?php 
    $aventuragames = array("the legendof link","farcry","rayman");
    $output = "<tr>Aventura</tr> <br>";
    foreach ($aventuragames as $game) {
        $output .= "<tr>$game</tr> <br>";
    } 
    echo $output
?>