<?php
header("Content-Type: image/jpeg");

// --- hitelesítés logikája pl. fizetett tartalmakhoz ...

print file_get_contents('https://www.rd.com/wp-content/uploads/2021/03/GettyImages-1133605325-scaled-e1617227898456.jpg');
?>

