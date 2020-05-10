<html>
<head>
	<title>MAC270 Survey Administration</title>
</head>
<body bgcolor="#ccccff">
<h1> MAC270 Survey Administration</h1>
<a href="survey-students.php"><b>ADD</b> a New Respondent</a>
<p><a href="searchrespondent.php"><b>SEARCH</b> for a Respondent</a>
<p><a href="editrespondent.php"><b>UPDATE</b> a Respondent</a>
<p><a href="deleterespondent.php"><b>DELETE</b> for a Respondent</a>
<p><b><font size="+1">Respondent by Category</font></b><br>
<a href="retrievestudent.php">Student Respondents</a><br>
<a href="retrievefaculty.php">Faculty Respondents</a><br>
<a href="retrieveindustry.php">Industry Respondents</a><br>
<p><b><font size="+1">Complete List of Respondents</font></b><br>

<p>
<table border=1>
<tr>
<td valign=top width="40"><font size="2">ID</font></td>
<td valign=top width="140"><font size="2">Last Name</font></td>
<td valign=top width="100"><font size="2">First Name</font>
<td valign=top width="70"><font size="2">Category</font>
<td valign=top width="60"><font size="2">First MAC270</font>
<td valign=top width="50"><font size="2">Exhibits</font></td>
<td valign=top width="40"><font size="2">TDR</font></td>
<td valign=top width="50"><font size="2">Apple</font></td>
<td valign=top width="50"><font size="2">Avid</font></td>
<td valign=top width="60"><font size="2">Festival</font></td>
<td valign=top width="60"><font size="2">Academic Panels</font></td>
<td valign=top width="80"><font size="2">Competitive Papers</font></td>
<td valign=top width="80"><font size="2">Expectations</font></td>
<td valign=top width="40"><font size="2">&nbsp;</font></td>
<td valign=top width="60"><font size="2">&nbsp;</font></td>
</tr>
<tr>

<?php
 $connection = mysqli_connect("localhost", "root", "", "projects");
/*if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
*/
echo "<FONT SIZE=\"2\"><a href=\"?order=id\">Order by ID</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=lastname\">Order by Last Name</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=firstname\">Order by First Name</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=category\">Order by Category</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=first\">Order by First MAC270?</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=exhibits\">Order by Exhibits</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=tdr\">Order by TDR</a></FONT> | 
<FONT SIZE=\"2\"><a href=\"?order=apple\">Order by Apple</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=avid\">Order by Avid</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=festival\">Order by Festival</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=academic\">Order by Academic</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=papers\">Order by Papers</a></FONT> |
<FONT SIZE=\"2\"><a href=\"?order=expectations\">Order by Expectations</a></FONT>
<p>";

if(empty($_GET["order"])) $order = "lastname";
	else $order = $_GET["order"];
//$sql = "SELECT * FROM survey";
    
$result =mysqli_query($connection,"SELECT * FROM survey ORDER BY ".$order." ASC") or
    die("Connection failed.".mysqli_error($connection));
    
/*$result = mysqli_query($connection,$sql)
	or die("Connection failed.".mysqli_error($connection));*/

While ($respondent = mysqli_fetch_array($result)) {
		$id = $respondent["id"];
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

echo "<TABLE BORDER=1><TR>";
echo "<TD VALIGN=TOP WIDTH=\"40\"><B>$id</B>";
echo "<TD VALIGN=TOP WIDTH=\"140\"><B>$lastname</B>";
echo "<TD VALIGN=TOP WIDTH=\"100\"><B>$firstname</B>";
echo "<TD VALIGN=TOP WIDTH=\"70\"><B>$category</B>";
echo "<TD VALIGN=TOP WIDTH=\"60\"><B>$first</B>";
echo "<TD VALIGN=TOP WIDTH=\"50\"><B>$exhibits</B>";
echo "<TD VALIGN=TOP WIDTH=\"40\"><B>$tdr</B>";
echo "<TD VALIGN=TOP WIDTH=\"50\"><B>$apple</B>";
echo "<TD VALIGN=TOP WIDTH=\"50\"><B>$avid</B>";
echo "<TD VALIGN=TOP WIDTH=\"60\"><B>$festival</B>";
echo "<TD VALIGN=TOP WIDTH=\"60\"><B>$academic</B>";
echo "<TD VALIGN=TOP WIDTH=\"80\"><B>$papers</B>";
echo "<TD VALIGN=TOP WIDTH=\"80\"><B>$expectations</B>";
echo "<TD WIDTH=\"40\"><FONT SIZE=\"2\">
<a href='editrespondent.php?id=$id'>Edit</a></FONT>";
    echo "<TD WIDTH=\"60\"><FONT SIZE=\"2\">
    <a href='deleterespondent.php?id=$id'>Delete</a></FONT>";    
    
    
echo "</TR></TABLE>";
} 
?>
    </tr>
</table>
<p>
<?php
echo "<STRONG>Total Number of Respondents:</STRONG>
".mysqli_num_rows($result);
?>
</body>
</html>