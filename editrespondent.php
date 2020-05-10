<html>
<head>
<title>Edit a Respondent</title>
</head>
<body>
<?php
$dbcnx = mysqli_connect("localhost", "root","","projects"); 
 
if (isset($_POST['submit'])): 
 
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $category=$_POST['category'];
    $first=$_POST['first'];
    $exhibits=$_POST['exhibits'];
    $tdr=$_POST['tdr'];
    $apple=$_POST['apple'];
    $avid=$_POST['avid'];
    $festival=$_POST['festival'];
    $academic=$_POST['academic'];
    $papers=$_POST['papers'];
    $expectations=$_POST['expectations'];
    $id = $_POST['id']; 
 
$sql = "UPDATE MAC 270 SET
    firstname='$firstname',
    lastname='$lastname',
    category='$category',
    first='$first',
    exhibits='$exhibits',
    tdr='$tdr',
    apple='$apple',
    avid='$avid',
    festival='$festival',
    academic='$academic',
    papers='$papers',
    expectations='$expectations'
    WHERE id='$id'";
if (mysqli_query($sql)) {
    
    echo('<p>Respondent edited</p>');
}
else {
    echo('<p>Error editing respondent: ' .mysqli_error() . '</p>');
}
?>
<p><a href="admin-students(1).php">Back to the Administration Page</a></p>
<?php
    else:
// Allow the user to edit another respondent
    $id = (isset($_GET['id']) ? $_GET['id'] : '');
    $respondent= mysqli_query($dbcnx,"SELECT * FROM survey WHERE id='$id'");
    if (!$respondent) {
        die("Error fetching respondent details: " .mysqli_error($respondent));
    } 
 
  $respondent = mysqli_fetch_array($respondent); 
 
    $firstname = $respondent['firstname'];
    $lastname = $respondent['lastname'];
    $category = $respondent['category'];
    $first = $respondent['first'];
    $exhibits = $respondent['exhibits'];
    $tdr = $respondent['tdr'];
    $apple = $respondent['apple'];
    $avid = $respondent['avid'];
    $festival = $respondent['festival'];
    $academic = $respondent['academic'];
    $papers = $respondent['papers'];
    $expectations = $respondent['expectations'];
 
    $firstname = htmlspecialchars($firstname);
    $lastname = htmlspecialchars($lastname);
    $category = htmlspecialchars($category);
    $first = htmlspecialchars($first);
    $exhibits = htmlspecialchars($exhibits);
    $tdr = htmlspecialchars($tdr);
    $apple = htmlspecialchars($apple);
    $avid = htmlspecialchars($avid);
    $festival = htmlspecialchars($festival);
    $academic = htmlspecialchars($academic);
    $papers = htmlspecialchars($papers);
    $expectations = htmlspecialchars($expectations);
?> 
 
<form action="<?=$_SERVER['PHP_SELF']?>" method="post"> 
 
<p>Edit the Respondent:
    <br />First Name: <input name="firstname" type="text" value="<?=$firstname?>" size="20" maxlength="255" />
    <br />Last Name: <input name="lastname" type="text" value="<?=$lastname?>" />
    <p /> Category: <input name="category" type="text" value="<?=$category?>" />
    <p /> 
 
First BEA Convention?:
    <select name="first">
        <?php
        for($i = 0; $i <= 1; $i++) {
            echo "\n<option value=\"".$i."\"";
            if($first == $i) echo " selected";
            echo ">".$i."</option>";
        }
        ?>
    </select>
    <BR />
    Exhibit Rating:
    <select name="exhibits">
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "\n<option value=\"".$i."\"";
            if($exhibits == $i)
                echo " selected";
                echo ">".$i."</option>";
        }
        ?>
    </select>
    <BR />
    TDR Rating:
    <select name="tdr">
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "\n<option value=\"".$i."\""; 

            if($tdr == $i) echo " selected";
            echo ">".$i."</option>";
        }
        ?>
    </select>
    <BR />
    Apple Rating:
    <select name="apple">
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "\n<option value=\"".$i."\"";
            if($apple == $i) echo " selected";
            echo ">".$i."</option>";
        }
        ?>
    </select>
    <BR />
    Avid Rating:
    <select name="avid">
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "\n<option value=\"".$i."\"";
            if($avid == $i) echo " selected";
            echo ">".$i."</option>";
        }
        ?>
    </select>
    <BR />
    Festival Rating:
    <select name="festival">
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "\n<option value=\"".$i."\"";
            if($festival == $i) echo " selected";
            echo ">".$i."</option>";
        }
        ?>
    </select>
    <BR />
    Academic Panels Rating:
    <select name="academic">
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "\n<option value=\"".$i."\"";
            if($academic == $i) echo " selected";
            echo ">".$i."</option>";
        }
        ?>
    </select>
    <BR />
    Competitive Papers Rating:
    <select name="papers">
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "\n<option value=\"".$i."\"";
            if($papers == $i) echo " selected";
            echo ">".$i."</option>";
        }
        ?>
    </select>
    <BR />
    Expectations Rating:
    <select name="expectations">
        <?php
        for($i = 1; $i <= 5; $i++) {
            echo "\n<option value=\"".$i."\"";
            if($expectations == $i) echo " selected";
            echo ">".$i."</option>";
        }
        ?>
    </select>
    <BR /> 
 
<p />
    <input type="hidden" name="id" value="<?=$id?>" /><p> 
    <input type="submit" name="submit" value="SUBMIT" /> 
    <p /> </form > 
 
<?php
    endif;
?>
</body>
</html>