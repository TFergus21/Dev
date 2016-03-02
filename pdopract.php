<?php
$username=""
$password="jellyfish"
$hostname=localhost;

try
{
$handler = new PDO('msql:host= '.$hostname.'dbname=firstdatabase',$username, $password);
}