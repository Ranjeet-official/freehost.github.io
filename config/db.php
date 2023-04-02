<?php
$conn = mysqli_connect('localhost','root','','ranjit');
$q = mysqli_select_db($conn,'ranjit');

if($q)
{
    echo "cannect";
}
else{
    echo "not connect";
}

?>