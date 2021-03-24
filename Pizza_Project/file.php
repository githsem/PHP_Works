<?php 
//$quotes = readfile('readme.txt');
//echo $quotes;

//$file = 'readme.txt';

//if(file_exists($file)){
   // echo readfile($file);

    //copy file
    //copy($file,'quotes.txt');
//}
//else{
    //echo 'file does not exist';
//}


$file = 'quotes.txt';
$handle = fopen($file,'r');
echo fread($handle, filesize($file));
fclose($handle);


?>