<?php
include 'includes/functions.php';

$profile = [
    "nombre" => "Ruth Daniela Aguirre",
    "stack" =>["PHP", "JS", "PYTHON", "JAVA"],
    "hobby" =>"Salir con mi perro"
];
?>
<?= renderProfile($profile);?>