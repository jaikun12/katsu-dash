<?php
function sum_age($table,$attrib,$num){
    global $connection;
    $query = mysqli_query($connection,"SELECT $attrib FROM $table WHERE child_age = $num;");
    $total_age = 0;
    while($r=mysqli_fetch_array($query)){
      $total_age++;
    }
    return $total_age;
  }
  ?>