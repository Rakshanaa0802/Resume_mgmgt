<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Resume_management</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>
<?php
session_start();
error_reporting(0);
                    // Include config file
                    require_once "config.php";
					require_once "header.php";
					require_once "footer.php";
					 if(!isset($_SESSION['username'])){
					 header('location:login.php');}
					 
?>
<body class="">
  <div class="wrapper ">
    
	<div class ="main-panel">
	
	
	
	
	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
				<?php if($_GET['msg'] == 1) { ?>
	
	<div>Error: Select a valid file format</div>
	<?php } ?>
	
	<?php if($_GET['msg'] == 2) { ?>
	
	<div> Error: File's size is larger than the allowed limit.</div>
	<?php } ?>
	
	<?php if($_GET['msg'] == 3) { ?>
	
	<div> Error: File already exists </div>
	<?php } ?>
	
	<?php if($_GET['msg'] == 4) { ?>
	
	<div> Data added successfully</div>
	<?php } ?>
	
	<?php if($_GET['msg'] == 5) { ?>
	
	<div> Error: Data not inserted </div>
	<?php } ?>
	
	<?php if($_GET['msg'] == 6) { ?>
	
	<div> Error: There was a problem </div>
	<?php } ?>
	<?php if($_GET['msg'] == 7) { ?>
	
	<div> Error: Something went wrong! Try again</div>
	<?php } ?>
	
                  <h3 class="card-title">Add Documents</h3>
                  <p class="card-category">Choose Your File</p>
                </div>
				<div class="card-body">
				<div class="container mt-3">
  
               <form class="well" action="upload_process.php" method="post" enctype="multipart/form-data">
                  <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="files">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
                    <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 5 MB is allowed.</p>
                  </div>
                  <input type="submit" class="btn btn-lg btn-primary" value="Upload">
				  <a href="dashboard.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
          </div>
		  

    
  
</div>

				
</div>

                 
				</div>
    </div></div></div></div></div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>

 
	</body>

</html>
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
				
			    header("upload.php?msg=1");
			}
		
			
			elseif($filesize > $maxsize)
			{
				
				header("upload.php?msg=2");
			}
			else
			{if(in_array($filetype, $allowed))
			{
				if(file_exists("uploads/". $filename))
				{
					
					header("upload.php?msg=3");
				}
				else{
					move_uploaded_file($_FILES["files"]["tmp_name"],"uploads/" . $filename);
					
				}
				$sql = "INSERT INTO doc_mgmt(doc_name,doc_type,emp_code,filename,path,size) values ('$doc_name','$ext','$user','$filename','uploads/$filename',$filesize)";
				if(mysqli_query($link,$sql))
					{
						if (isset($_SESSION['message']))
					{ 
						
						header("upload.php?msg=4");
						
					}
					}
				else
				{
						
						header("upload.php?msg=5");
				}
			}
			else{
				
				header("upload.php?msg=6");
			}
			}
	}
	else{
		
		header("upload.php?msg=7");
	}
}

mysqli_close($link);
?>