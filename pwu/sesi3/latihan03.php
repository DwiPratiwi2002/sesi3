<?php
    $buah = array("Salak", "Nanas", "Rambutan", "Durian");

    foreach($buah as $nval){
        echo "Buah ".$nval."<br>";
    }
    echo "<hr>";
    echo "<ol>";
    foreach($buah as $nval){
        echo "<li> ".$nval."</li>";
    
    }
    echo "</ol>";