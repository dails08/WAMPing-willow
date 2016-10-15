<html>
   <body>
      <form action="upload.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="database" /><br><br>
		 <input type="date" name="start">  Start Date (yyyy-mm-dd)</input><br><br>
		 <input type="date" name="end">  End Date (yyyy-mm-dd)</input><br><br>
         <input type="submit"/>
      </form>
<?php
   if(isset($_FILES['database'])){
      $errors= array();
	  //print_r($_FILES);
	  //echo $_FILES['database']['error'];
      $file_name = $_FILES['database']['name'];
      $file_tmp =$_FILES['database']['tmp_name'];
      $file_type=$_FILES['database']['type'];
      
      
	 move_uploaded_file($file_tmp,"Guardbase_be.accdb");
	 shell_exec(escapeshellarg("C:\Program Files\R\R-3.3.1\bin\Rscript.exe") . " driver.R " . $_POST['start'] . " " . $_POST['end']);
	 //echo '<p>'. $file_tmp .'</p>';
	 echo '<a href="OpsReportv4.html">Ops Report</a>';

   }
   
	//echo phpinfo();

?>

      
      
   </body>
</html>