<?php
  include 'config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $country=$inpText."%";
    $sql ="select country_name from country where country_name like'$country'" ;
    $select_data=mysql_query($sql);

   


    if($row=mysql_fetch_array($select_data)){
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['country_name'] . '</a>';
        while ($row=mysql_fetch_array($select_data)){
            echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['country_name'] . '</a>';
        } 
     }
     else{
        echo '<p class="list-group-item border-1">No Record</p>';
     }
        exit();
    }




    if ($result) {
      foreach ($result as $row) {
       
      }
    } else {
     
    }
?>