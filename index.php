<!doctype html>
<html lang="en">
<head>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php
$array = [[]];
echo"<table border='1' >";
for($i=0;$i<5;$i++){
    echo "<tr>";
    for($j=0;$j<10;$j++){
        $array[$i][$j]=rand(1,100);
        echo "<td align='center'>";
        echo $array[$i][$j]." ";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>