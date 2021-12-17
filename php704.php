<?php
//define variable
$hello="Hello";

//define function
$hi = function()use($hello){//collee
    return "Hello $hello";
};

echo $hi();