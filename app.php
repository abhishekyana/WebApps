<?php
echo "Creating a new file\n";
$matter = $_GET["matter"];
$key = $_GET["key"];
$newfile = $_GET['newfile'];
if ($newfile=='newfile')
{
$myfile = fopen($key.".txt", "w+") or die("Unable to open file!");
} else {
$myfile = fopen($key.".txt", "a+") or die("Unable to open file!");
}
fwrite($myfile, $matter);
// echo "Key is $key <br>";
// echo $key;
// $myfile = fopen($key.".txt", "a+") or die("Unable to open file!");
// fwrite($myfile, $name);
// $txt = "Abhishek Yanamandra\n";
// fwrite($myfile, $txt);
// $txt = "Yanamandra Abhishek\n";
// fwrite($myfile, $txt);
// fclose($myfile);
// echo "Created a new file";
?>
