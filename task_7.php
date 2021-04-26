<?php
$text = "The main factor of the PHP language is usability. PHP should provide the programmer with the means to quickly and efficiently solve the assigned tasks. The practical nature of PHP is due to five important characteristics: tradition, simplicity, efficiency, safety, flexibility. There is another characteristic that makes PHP especially attractive: it's free! Moreover, with open source codes (Open Source). The PHP language will seem familiar to programmers in different fields. Many language constructions are borrowed from C, Perl. PHP code is very similar to that found in typical C or Pascal programs. This significantly reduces the initial effort when learning PHP. PHP is a language that combines the advantages of Perl and C and is specifically aimed at working on the Internet, a language with a universal (albeit with some reservations) and clear syntax. And although PHP is a fairly young language, it has gained such popularity among web programmers,undefined which at the moment is almost the most popular language for creating web applications (scripts). undefined";

$new_text = wordwrap($text, 80, "*");

var_dump($new_text) ;

$mass[]=explode("*", $new_text);
echo '<pre>';
print_r($mass);
echo '</pre>';

$s=80;

echo "------------------------------------------------------------------------------------------------------------";
echo '</br>';

for ($i=0; $i<=count($mass[0]); $i++){
    $new_mass=[];
    $new_mass[] =$mass[0][$i];
    $str= implode($new_mass);
    $strL= $s-(strlen($str));
    $str_new =  preg_replace('# #', '&nbsp ',$str,$strL);
    echo '<pre>';
    echo $str_new;
    echo '</pre>';
}