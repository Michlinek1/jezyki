<?php


if(!empty($_POST['jezyki'])){
    echo "<p><b>" .$_POST['imie']."</b> Michał wybrał(a) języki: ";
    echo "<ul>";
    foreach($_POST['jezyki'] as $wartosc){
        echo "<li>$wartosc</li>";
    }
}
echo "<ul>";
















?>