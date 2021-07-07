<?php
$name = "boleta.pdf";
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition", "inline");

// The PDF source is in original.pdf
readfile("original.pdf");
?>

<div>
<h1>Hola Mundo</h1>
</div>
