<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
  
// Set the current working directory
$directory = "c:/Myfiles";
   
// Returns array of files
$files1 = scandir($directory);
   
// Count number of files and store them to variable
$num_files = count($files1) - 3;
  
echo "Count:". $num_files;
  
?>
</body>
</html>