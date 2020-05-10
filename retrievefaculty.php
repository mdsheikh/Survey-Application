<html>
<head>
	<title>MAC270 Survey Retrieval</title>
</head>
<body>

    <?php 
    $connection = mysqli_connect("localhost", "root", "", "projects");
 
$result = mysqli_query($connection, "SELECT lastname, category, expectations FROM survey WHERE category = 'faculty' "); 
 
echo "<TABLE BORDER=1>";  while ($myrow = mysqli_fetch_array($result)) { echo "<TR><TD width=300 height=50>";  echo "Lastname: "; echo $myrow["lastname"];   echo "<BR>";  echo "Category: "; echo $myrow["category"];   echo "<BR>";  echo "Expectations: "; echo $myrow["expectations"];   echo "<BR>";  }  echo "</TABLE>";  ?>


</body>
</html>