
<ul>
<?php
foreach($zoznam as $klucStranky => $hodnota){
    echo "<li><a class='navbar-brand text-dark'  href='?stranka=home'>{$hodnota->menu}</a></li>";
}

?>
</ul>