<?php
ob_start();
session_start();
?>
 
 
    <div class="container">

      <div class="starter-template">
        <?php
					$msg = '';
					if (isset($_GET['action'])) {
					if ($_GET['action'] == 'succeed') {
						$msg = 'Logged successfully...';
						echo '<p class="lead">' . $msg . '</p>';
						header('Refresh: 2; URL=index.php?p=userpage');
						//http://localhost/abc/?p=memberprogram
						//header('Refresh: 2; URL="'.SITE_NAME.'"?p=memberprogram');
					}
					else if ($_GET['action'] == 'timeover') {
						session_unset();
						session_destroy();
						$msg = 'Inactivity so long, now sign-in again.';
						echo '<p class="lead">' . $msg . '</p>';
						header('Refresh: 2; URL=login.php');
					}
					else if ($_GET['action'] == 'logout') {
						session_unset();
						session_destroy();
						$msg = 'Logged out. Now come back to homepage';
						echo '<p class="lead">' . $msg . '</p>';
						header("Location: /sms/index.php"); /* Redirect browser */
exit();
						//header('Refresh: 2; URL=index.php');
						//header('Refresh: 2; URL=login.php');
						// header('Refresh: 2; URL='. $_SERVER['PHP_SELF'] .'');
					}
					
					else if ($_GET['action'] == 'invalid_permission') {
						session_unset();
						session_destroy();
						$msg = 'Invalid permission. Come back to homepage...';
						echo '<p class="lead">' . $msg . '</p>';
						header('Refresh: 2; URL=index.php');
					}
					
				} else {
					header('Location: index.php');	
				}
			?>
      <h2 class="text-center">
      <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); ?>" target="_self">Home <span class="glyphicon glyphicon-home"></span></a></h2>
      
      
      </div>
    </div><!-- /.container -->
 
