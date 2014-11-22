<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 11/22/2014
 * Time: 11:48 AM
 */
$db = mysql_connect('localhost' ,'mysql_user' ,'mysql_password');
if(!$db) {
    die('die could not connect:' .mysql_errno());
}
echo 'Connected successfully !';
mysql_close($db);