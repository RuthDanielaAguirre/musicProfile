<?php
$menu = [
    ["platillo" => "Ramen", "precio" => 12.5],
    ["platillo" => "Sushi", "precio" => 15.0],
    ["platillo" => "Tempura", "precio" => 9.75]
];
?>

<?= renderMenuList($menu); ?>
