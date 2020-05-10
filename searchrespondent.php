<html>
    <head>
        <title>MAC270 Survey</title>
    </head>
    <body>
    
    <?php
        $dbcnx = mysqli_connect("localhost", "root","","projects");
    
    ?>
    <table border='0'>
        <tr> <td class="big"><strong>Search</strong></td> </tr>
        
        
        <tr> <td> <form method="GET" action="searchrespondent.php"> <input type=hidden name=search value="search">
        <input type=text name="q" maxlength=255 size=30<?php if(isset($_GET["q"])) print " value=\"".$_GET["q"]."\"";?>> <select name="type">  <option value="firstname"<?php if(@$_GET["type"] == "firstname") echo " SELECTED";
               ?>>First Name</option>
            <option value="lastname"<?php if(@$_GET["type"] == "lastname") echo " SELECTED"; ?>>Last Name</option>
            <option value="category"<?php if(@$_GET["type"] == "category") echo " SELECTED";
                    ?>>Category</option>
            <option value="id"<?php if(@$_GET["type"] == "id")
    echo " SELECTED";
                    ?>>ID</option> </select> 
        <input type="submit" value="Search"> </form> </td> </tr>

    </table> 
 
 
<?php 
 
if(!empty($_GET["q"])) {
    echo "<strong>Search Results:</strong><br />";
    $sortField = "id";
    $order = "ASC";
    $type = $_GET["type"];
    $q = addslashes($_GET["q"]);
    $q = explode("+", $q);
    $query = "SELECT * FROM survey WHERE 1=1";
    foreach($q AS $q) {
        $query .= " AND ".$type." LIKE '%$q%'";
    }
    $query .= " ORDER BY ".$sortField." ".$order;
    $result = mysqli_query($dbcnx,$query);
    while($row = mysqli_fetch_array($result)) {
        echo "<a href=\"editrespondent.php?id=".$row["id"]."\">".$row["id"]."</a> - ".$row["firstname"]." ".$row["lastname"].", ".$row["category"]."<br />\n";
    } 

echo "<STRONG>Total Results:</STRONG> ".mysqli_num_rows($result); } 
 ?>
    </body>
</html>