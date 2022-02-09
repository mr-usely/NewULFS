<?php
require_once("../../../Initialization/initialize.php");


if($session->is_logged_in()) {
  redirect_to("src/index.php?menu=dashboard");
  
}

  $UserID   = trim($_POST['imsUserID']);
  $Password = trim($_POST['imsPassword']);


  // Check database to see if username/password exist.
    $found_personnel = Personnel::authenticate($UserID, $Password);
  if ($found_personnel){
      $expired = Personnel::check_expiry($UserID);
      if ($expired){
          redirect_to("expired.php");
      } else {
        $session->login($found_personnel);
        Personnel::log_activity(1, $_SESSION['DistinctID'], 'Login', ' Logged-In');
        if(isset($_SESSION['linkpage'])){
			if(isset($_SESSION["linkReport"])){
				if(Personnel::checkUserAccessToReport($UserID, $_SESSION["linkReport"])){
					redirect_to($_SESSION['linkpage']);
				}else{
					redirect_to("src/index.php?menu=dashboard");
				}
			}else{
				redirect_to($_SESSION['linkpage']);
			}
		}else{
			redirect_to("src/index.php?menu=dashboard ");
		}
      }
  } else {
    // username/password combo was not found in the database
    Personnel::log_activity(2, $UserID, 'Invalid Login Attempt', $message);
    $message = "User ID and password combination incorrect.";
  }

?>