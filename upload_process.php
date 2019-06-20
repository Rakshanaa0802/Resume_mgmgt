<?php

require_once"config.php";

error_reporting(0);
session_start();



if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	
	if(isset($_FILES["files"]) && $_FILES["files"]["error"] == 0)
	{
		    
			
			
			$_SESSION['message'] = 'Data added successfully';
			$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
			$filename = $_FILES["files"]["name"];
			$filetype = $_FILES["files"]["type"];
			$filesize = $_FILES["files"]["size"];
			$doc_name = $_SESSION['username']."_".$_FILES["files"]["name"];
			$user = $_SESSION['username'];
			
			
			
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$maxsize  = 5 * 1024 * 1024;
			
			if(!array_key_exists($ext, $allowed))
			{
			
				 
			    header("Location: upload.php?msg=1");
			
			}
			
			
			if($filesize > $maxsize)
			{
				
				header("Location: upload.php?msg=2");
			}
			
			if(in_array($filetype, $allowed))
			{
				if(file_exists("uploads/". $filename))
				{
					
					header("Location: upload.php?msg=3");
				}
				else{
					move_uploaded_file($_FILES["files"]["tmp_name"],"uploads/" . $filename);
					$sql = "INSERT INTO doc_mgmt(doc_name,doc_type,emp_code,filename,path,size) values ('$doc_name','$ext','$user','$filename','uploads/$filename',$filesize)";
				if(mysqli_query($link,$sql))
					{
						if (isset($_SESSION['message']))
					{ 
						
						header("Location: upload.php?msg=4");
						
					}
					}
				else
				{
						
						header("Location: upload.php?msg=5");
				}
					
				}
				
			}
			else{
				
				header("Location: upload.php?msg=6");
			}
			
	}
	else{
		
		header("Location: upload.php?msg=7");
	}
}

mysqli_close($link);
?>