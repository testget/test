<?php
$name = test_input("ali");
if (!preg_match("/^[a-zA-Z ]*$/",$name))
{
$nameErr = "فیلد نام  فقط شامل حروف و خط فاصله است";
}
?>