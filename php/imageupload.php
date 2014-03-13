
<?php
require 'dbconnect.php';
require 'imagemanipulator.php';

if (empty($_SESSION)) { session_start(); }
$session_id = $_SESSION['user_id']; //$session id
$old_avatar = $_SESSION['avatar'];
$path = "../img/profiles/";

	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(2048*2048))
						{
 							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
       					    $tmp = new ImageManipulator($_FILES['photoimg']['tmp_name']);
						    $newImage = $tmp->resample(150, 150);
                    // saving file to uploads folder
                     $tmp->save($path . $actual_image_name);

              				mysql_query("UPDATE t_users SET avatar='$actual_image_name' WHERE user_id=$session_id") or die(MYSQL_ERROR);
								$_SESSION['avatar'] = $actual_image_name;	
							     echo "<img src='img/profiles/".$actual_image_name."'  class='preview img-thumbnail' width= '150' height= '150px'>";
								   if ($old_avatar != 'default-user.png') {
                                    unlink($path . $old_avatar);
                                   }
                                }
							else
			                    echo "Error";
						}
						else
						echo "Onjuist bestandsformaat.";					
						}
						else
						echo "Onjuist bestandsformaat.";	
				}
				
			
				
			exit;
		

?>