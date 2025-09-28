<?Php
$jsonobj = '{"Patter":35, "Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
echo $obj->Patter;
echo ", ";
echo $obj->Ben;
echo ", ";
echo $obj->Joe;
?>