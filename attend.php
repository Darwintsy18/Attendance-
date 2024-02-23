<?php
$name = $_POST['name'] . "\n";
$file = fopen('attend.txt', 'a');
fwrite($file, $name);
fclose($file);
echo 'Attendance saved successfully.';
?>