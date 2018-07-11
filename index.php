
<?php

$error="*";
if(empty( $_POST['tellphone']) and $_SERVER['REQUEST_METHOD']=="POST")
{
    $error= "please enter!!!!!!!!!";


}

if(isset($_POST['tellphone']) and !preg_match("/^[a-zA-Z ]*$/", $_POST['tellphone'])) {
     $error="$ darah";
}
//
//if( )
//{
//
//    $error="this is invalid";
//
//}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action=<?php $_SERVER['PHP_SELF'];   ?>>
    <input type="tel" name="tellphone"><?php echo $error ?>
    <input type="submit">




</form>
<?php
echo "<BR>".$_SERVER["REQUEST_METHOD"];



if(isset($_POST['tellphone'])  )
{
    echo $_POST['tellphone'];

}
$s="0913-153-2212";
$t=explode("-","$s");
var_dump($t);
FOREACH($t as $arr)
{
    echo $arr;
}
$arr=array(1,2,13,4);
echo implode(",",$arr);
//$string = "apple, banana, pineapple, grape, orange";
//$fruits = explode(", ", $string);
//var_dump($fruits);

?>
</body>
</html>