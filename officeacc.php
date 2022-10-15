<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');

$connect = mysqli_connect("localhost","root","jay123456789","recordsapp");

if(!$connect)
{   
die(mysqli_connect_error());
}  

for ($i=0; $i <= 19; $i++){   
$sql = "INSERT INTO recordsapp.office(name,contact_num,email,address,city,country,postal) values('".$faker->name."','".$faker->phoneNumber."','".$faker->email."','".$faker->address."','".$faker->city."','".$faker->country."','".$faker->postcode."')";     
mysqli_query($connect, $sql);}
