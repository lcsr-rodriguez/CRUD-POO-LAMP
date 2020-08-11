<?php


$data = $students->index(); 

while($row = mysqli_fetch_array($data)){
    echo $row["name"];
}


?>