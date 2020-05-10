<html>
<head>
	<title>MAC270 Survey Retrieval</title>
</head>
<body>
<table border=1>
<tr>
<?php
$connection = mysqli_connect("localhost", "root", "", "projects");
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
	$result = mysqli_query($connection, "select * from survey");
	
	echo "<tr>";
	echo "<th>Last Name</th>";
	echo "<th>First Name</th>";
	echo "<th>Category</th>";
	echo "<th>First MAC270?</th>";
	echo "<th>Exhibits</th>";
	echo "<th>TDR</th>";
	echo "<th>Apple</th>";
	echo "<th>Avid</th>";
	echo "<th>Festival</th>";
	echo "<th>Academic Panels</th>";
	echo "<th>Papers</th>";
	echo "<th>Expectations</th>";
	echo "</tr>";
	
	While ($respondent = mysqli_fetch_array($result)) {
		$firstname = $respondent["firstname"];
		$lastname = $respondent["lastname"];
		$category = $respondent["category"];
		$first = $respondent["first"];
		$exhibits = $respondent["exhibits"];
		$tdr = $respondent["tdr"];
		$apple = $respondent["apple"];
		$avid = $respondent["avid"];
		$festival = $respondent["festival"];
		$academic = $respondent["academic"];
		$papers = $respondent["papers"];
		$expectations = $respondent["expectations"];
		
	echo "<tr>";
	echo "<td width=\"120\"><font size=\"2\">$lastname</font></td>";
	echo "<td width=\"80\"><font size=\"2\">$firstname</font></td>";
	echo "<td width=\"100\"><font size=\"2\">$category</font></td>";
	echo "<td width=\"20\"><font size=\"2\">$first</font></td>";
	echo "<td width=\"20\"><font size=\"2\">$exhibits</font></td>";
	echo "<td width=\"20\"><font size=\"2\">$tdr</font></td>";
	echo "<td width=\"20\"><font size=\"2\">$apple</font></td>";
	echo "<td width=\"20\"><font size=\"2\">$avid</font></td>";
	echo "<td width=\"20\"><font size=\"2\">$festival</font></td>";
	echo "<td width=\"20\"><font size=\"2\">$academic</font></td>";
	echo "<td width=\"20\"><font size=\"2\">$papers</font></td>";
	echo "<td width=\"20\"><font size=\"2\">$expectations</font></td>";
	echo "</tr>";
	}
	
		?>
		</tr>
		</table>
</body>
</html>