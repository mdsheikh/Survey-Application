<html>
    <head>
        <title>MAC270 Survey</title>
    </head>
    <body>
        <?php
        $connection = mysqli_connect("localhost","root","","projects");
        if (!$connection) {
            die("Database Connection Failed" . mysqli_error($connection));
        }
        $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
        $category = mysqli_real_escape_string($connection, $_POST['category']);
        $first = mysqli_real_escape_string($connection, $_POST['first']);
        $exhibits = mysqli_real_escape_string($connection, $_POST['exhibits']);
        $tdr = mysqli_real_escape_string($connection, $_POST['tdr']);
        $apple = mysqli_real_escape_string($connection, $_POST['apple']);
        $avid = mysqli_real_escape_string($connection, $_POST['avid']);
        $festival = mysqli_real_escape_string($connection, $_POST['festival']);
        $academic = mysqli_real_escape_string($connection, $_POST['academic']);
        $papers = mysqli_real_escape_string($connection, $_POST['papers']);
        $expectations = mysqli_real_escape_string($connection, $_POST['expectations']);
 
        $sql = "insert into survey (firstname, lastname, category, first, exhibits, tdr, apple, avid, festival, academic, papers, expectations) values ('$firstname', '$lastname', '$category', '$first', '$exhibits', '$tdr', '$apple', '$avid', '$festival', '$academic', '$papers', '$expectations')";
        if(mysqli_query($connection, $sql)) {
            echo "Data Added";
        }
        else {
            echo "Information Not Entered: $sql." . mysqli_error($connection);
        }
        ?>
    </body>
</html>