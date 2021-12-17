<?php
$message = function(){
    return "Lamba";
};
//Closer
echo get_class($message);
echo "<br />";
echo gettype($message);