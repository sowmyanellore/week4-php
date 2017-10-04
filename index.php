<?php

$date =  date('Y-m-d', time());
echo "The value of \$date:" .  $date ."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br> <br>1. Replaced '-' with '/' in date <br>";
echo   "The value of \$date: ".str_replace("-","/",$date)."<br>";
$date1 = str_replace("-","/",$date);

echo "<br>" . "2.To compare date & tar and print accordingly"."<br>";
$t = strcmp($date,$tar) ;
if($t < 0){
	echo "the past";}
elseif($t == 0){
	echo "Oops" ;}
else{
	echo"the future";}


echo "<br>" . "<br>" . "3. print the position of / in date" . "<br>";
for($i=0;$i<strlen($date1);$i++)
{
if($date1[$i]=='/')
{
echo " ".$i; 
}
}


echo "<br><br>4.To print number of words in: The value of $date:2017-10-03";
$cont = "The value of $date:2017-10-03";
echo "<br>". "No.of words : " . str_word_count($cont);

echo "<br><br>5.The length of $date:";
echo "<br>length of the string : " . strlen($date);

echo "<br><br>6. ASCII value of first character of date- $date";
echo "<br>" . "ASCII value   :  " . ord($date);

echo "<br><br>7. To return the last two charcters of date";
echo "<br>" . "Last characters : " . substr($date,-2);

echo "<br><br> 8.Convert date into array & delimit '/' it with space<br>";
$dateElements=explode("/",$date1);
for($i=0;$i<count($dateElements);$i++)
{
echo $dateElements[$i]." ";
}
echo "<br>";

echo "<br>9. Done with FOREACH function";
foreach($year as $value)
{
if(((int)$value)%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
echo "<br>";
}


function findLeapYearwhile($year)
{
echo "<br>10.Done with WHILE function";
$i=0;
while($i<count($year))

{
if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
++$i;

echo "<br>";
}
}
echo "<br> 11. Done with SWITCH case";
for ($i=0;$i<count($year);$i++)

{echo "<br>";
switch ($year{$i})
{
case "2012": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "396": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "300": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "2000": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "1089": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "1100": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
}
}
?>