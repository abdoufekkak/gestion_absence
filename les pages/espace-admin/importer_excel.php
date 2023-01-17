<br>
<br>
<div align="center" style="margin-top:-45px;margin-left:20px">
    <form class="" action="" method="post" enctype="multipart/form-data">
        <input class="form-control-file" id="exampleFormControlFile1" type="file" name="excel" required value="">
        <button type="submit" style="background-color:blueviolet;" name="import">Import</button>
    </form>
</div>

<hr class="container">

<?php
		if(isset($_POST["import"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
			$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "../../uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require '../excelReader/excel_reader2.php';
			require '../excelReader/SpreadsheetReader.php';
           
			$reader = new SpreadsheetReader($targetDirectory);
		
     $verif=1;
		
		}
		?>
</body>

</html>