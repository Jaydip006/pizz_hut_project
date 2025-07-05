<?php

date_default_timezone_set("asia")
define("FILENAME",$_SERVER[DOCUMENT_ROOT]."php/error.log");
define("ISDEBUG,true");
define("SERVER","localhost:3306");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","php24");
function LogError($error)
{
    $ErrorDateTime=date("D d-m-Y h:i:s A");
    $code=$error->getCode();
    $message=$error->getmessage();
    $line=$error->getLine();
    $file=$error->getFile();
    $ErrorMessage="\n Error Code $code ErrorDetail $message on $ErrorDate Time in file $file at line no $line";
    file_put_contents(FILENAME,$ErrorMessage,FILE_APPEND|LOCK_EX);
    if(ISDEBUG==true)
       echo $ErrorMessage;
    else
        echo"oops,something went wrong, we are trying to findout the problem . please come after somtime";
    exit();
}
$db=null;
try
{
    $db=new PDO("mysql:host=".SERVER.";dbname=".DATABASE,USERNAME,PASSWORD);
    $db->setAttribute(PDO::ATTE_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
?>