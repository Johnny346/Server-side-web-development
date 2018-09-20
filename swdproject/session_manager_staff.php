<?php
//start session for manager or staff
   session_start();
   if(isset($_SESSION['staff_id']))
   {

  	//start staff session and display log out link and link to staff page
   	$user_id = $_SESSION['staff_id'];


	echo "<hr/>
        <a href='logout.php'>Log Out</a>
        <br/>
        <a href='staff.php'>Staff admin</a>
        <hr/>";


   } else  if(isset($_SESSION['manager_id']))
   {
    //start manager session and display log out link and link to manager page
    $user_id = $_SESSION['manager_id'];

    echo "<hr/>
          <div class='container-fluid'>
                <div class='row'>
                  <div class='col-md-4'>
                    <a href='logout.php'>Log Out</a>
                    <br/>
                    <a href='manager.php'> Manager admin</a>
                  </div>
                  <div class='col-md-4'>
                  </div>
                  <div class='col-md-4'>
                       <h4>Most Recent Messages</h4>
                        <ul>
                          <li class='dropdown'>
                              <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='label label-pill label-danger count' style='border-radius:10px;''></span> <span class='glyphicon glyphicon-bell' style='font-size:18px;''></span></a>
                               <ul class='dropdown-menu'><h5>From:</h5></ul>
                          </li>
                     </ul>
                </div>
              </div>
               <br />
         </div>
         <hr/>";

//this script is to show the last four messages sent from the contact form
// allows manager to quickly receive notifications of new messages
echo "<script>
$(document).ready(function(){

 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:'fetch.php',
   method:'POST',
   data:{view:view},
   dataType:'json',
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }

 load_unseen_notification();


 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });

 setInterval(function(){
  load_unseen_notification();;
 }, 5000);

});
</script>";
   }


?>