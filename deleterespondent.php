<html>
    <head>
        <title>MAC270 Survey</title>
    </head>
    <body>
    
    <?php 
    $connection = mysqli_connect("localhost","root","","projects"); $id=@$_GET['id']; 
 
if(@$_GET["confirm"] == "yes") {
$ok1=mysqli_query($connection,"DELETE FROM survey WHERE id='$id'");
if ($ok1) {
echo('<p>Respondent deleted successfully</p>');
}
else {
echo('<p>Error deleting respondent from database</p>');
}
}
else echo "Confirm deletion of row with an ID of $id? <a href=\"deleterespondent.php?id=$id&confirm=yes\">Yes</a>";
?>
<p><a href="admin-students(1).php">Back to the Administration Page</a></p>  
    
    </body>
</html>