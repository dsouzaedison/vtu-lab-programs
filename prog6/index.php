<?php
if(!isset($_COOKIE['visitors']))
{
    $count=1;
}
else
{
    $count=$_COOKIE['visitors'];
    $count++;
}
$lifetime=2*30*24*60*60+time();
setcookie('visitors',$count,$lifetime);
echo "Total number of visitors who visited this page : $count";
