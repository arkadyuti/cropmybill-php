<?php

$options = [

"site" => "Smartprix",

"users" => [

10 => [

"name" => "Hitesh",

"city" => "Delhi"

],

34 => [

"name" => "Abhinav",

"city" => "Bharatpur"

],

],

"location" => [

"address" => [

"pincode" => "110035",

"city" => "Delhi",

],

"near" => "Shastri Nagar Metro",

],

];

$template = "{{=site}} is located at pincode {{=location.address.pincode}} near

{{=location.near}}. Users of {{=site}} are: {{@users}} User ID: {{=_key}}, name: {{=_val.name}},

city: {{=_val.city}}. {{/@users}}";

//var_dump($options);
//echo '<br>';

foreach ($options as &$value) {
    var_dump($value);
}











?>