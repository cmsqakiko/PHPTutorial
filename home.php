<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>
<?php

/*
This is to test the capabilities of PHP
*/
$varname = "variable";
$varname2 = "variable Name";
$varnum = 13;
$var = false;
null;

echo ("Hello World");                           /*Print something */
echo "<br>";                                    /* next pharagraph */
/*or*/
echo "Hello World";
echo "<br>";
echo strtolower($varname);                         /*pull up variable nad to lower case*/
echo  "<br>";
echo strtoupper($varname);                      /*pull up variable nad to upper case*/
echo "<br>";
echo strlen($varname);                             /*pull up variable and how long index is*/
echo "<br>";
echo $varname[1];                               /*Index Position*/
echo "<br>";
$varname[0] = "M";                               /*Change character in index*/
echo $varname;
$varname[0] = "V";  
echo "<br>";
echo $varname;
echo "<br>";
echo str_replace("variable","dar",$varname2);            /*change string*/
echo "<br>";
echo substr($varname2,9);                       /*grab a sub string*/
echo "<br>";
echo substr($varname2,9,2);                     /*grab a sub string with length*/




/*                                                                                                                                                                                      

Numbers*/

echo "<br>";
echo 19;
echo "<br>";
echo -19;
echo "<br>";
echo 19.19;
echo "<br>";
echo 5 + 9;
echo "<br>";
echo 10%3;                                             /* 10 divided by 3 == remainder of 1 */
echo "<br>";
$num = 19 ;
echo $num;
echo "<br>";
$num++;
echo "<br>";
echo $num;
echo "<br>";
$num = $num + 25;
echo "<br>";
echo $num;
echo "<br>";
$num += 25;
echo $num;
echo "<br>";
echo abs(-19);                          /*Absolute Value*/
echo "<br>";
echo pow(2,4);                             /*raise to a power*/
echo "<br>";
echo sqrt(144);                         /*square root*/
echo "<br>";
echo max(100, 40);
echo "<br>";
echo min(100,40); 
echo "<br>";
echo round(3.12378123);                     /* round to the nearest*/
echo "<br>";
echo ceil(3.12378123);                      /*round to highest*/
echo "<br>";
echo floor(3.12378123);                     /*round to lowest*/



/*get user input*/



?>







</body>

</html>