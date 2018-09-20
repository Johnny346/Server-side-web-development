<?php

include('../group7Connection/connection.php');
// this script gets new messages from the contact table WHERE comment_status = 0
// script is used by the manager to view most recently sent messages
if(isset($_POST['view'])){

  if($_POST["view"] != ''){
     $update_query = "UPDATE group7.contact SET comment_status = 1 WHERE comment_status=0";
     mysqli_query($connection, $update_query);
  }

  $query = "SELECT * FROM group7.contact ORDER BY contactID DESC LIMIT 4";
  $result = mysqli_query($connection, $query);
  $output = '';

  if(mysqli_num_rows($result) > 0){

  $count = 1;

    while($row = mysqli_fetch_array($result)){

        $output .= '
                <li>'.$count.'
                <strong>Sender: '.$row["contactName"].'</strong><br />
                <small><em>Message Subject: '.$row["contactSubject"].'</em></small>
                </li>
                ';
        $count = $count + 1;
    }

  }else{
      $output .= '<li><a href="#" class="text-bold text-italic">No messages Found</a></li>';
  }

  $status_query = "SELECT * FROM group7.contact WHERE comment_status=0";
  $result_query = mysqli_query($connection, $status_query);
  $count = mysqli_num_rows($result_query);

  $data = array(
     'notification' => $output,
     'unseen_notification'  => $count
  );

  echo json_encode($data);
}else{
  echo "end";
}
?>