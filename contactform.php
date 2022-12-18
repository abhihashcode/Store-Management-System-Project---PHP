<?php
// The contact Us Form wont work with Local Host but it will work on Live Server
if(isset($_REQUEST['submit'])) {
 // Checking for Empty Fields
 if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")){
  // msg displayed if required field missing

  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  
 } else {
  $name = $_REQUEST['name'];
  $subject = $_REQUEST['subject'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];
  $sql = "INSERT INTO msg (msg_name, msg_subject,msg_email, msg_text) VALUES('$name', '$subject', '$email','$message')";
  if($conn->query($sql) == TRUE){
    $regmsg = '<div class="alert alert-success mt-2" role="alert">Succefully Taken</div>';
  } else {
    $regmsg = '<div class="alert alert-danger mt-2" role="alert">Something Went Wrong</div>';
  }
}
}
?>

<div class="col-md-8"> <!-- Start 1st Column -->
  <form action="" method="POST">
   <input type="text" class="form-control" name="name" placeholder="Name"><br>
   <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
   <input type="email" class="form-control" name="email" placeholder="Email"><br>
   <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
   <input type="submit" class="btn btn-primary" value="Send" name="submit"><br><br>
   <?php if(isset($regmsg)) {echo $regmsg;} ?>
  </form>
</div> <!-- End 1st Column -->