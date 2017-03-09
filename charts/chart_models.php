<?php
function sum_age($table,$attrib,$num){
    global $connection;
    $query = mysqli_query($connection,"SELECT $attrib FROM $table WHERE child_age = $num;");
    $total = 0;
    while($r=mysqli_fetch_array($query)){
      $total++;
    }
    return $total;
  }

  function sum_resp($table,$attrib,$num){
    global $connection;
    $query = mysqli_query($connection,"SELECT $attrib FROM $table WHERE responses = '$num';");
    $total = 0;
    while($r=mysqli_fetch_array($query)){
      $total++;
    }
    return $total;
  }

function count_likes($webtoonID) { 
        global $connection;

        $query = "SELECT * from wt_likes WHERE webtoonID='$webtoonID'";
        $result = mysqli_query($connection, $query); 
        $count = mysqli_num_rows($result);  

        return $count;
    }

    function cleanup_shortcode_fix($content) {
    $array = array('[' => '[', ']' => ']', ']<br />' => ']', ']<br>' => ']');
    $content = strtr($content, $array);
    return $content;
}
  ?>
