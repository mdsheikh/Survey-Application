<html>
<head>
 <title> Survey</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="styleform.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
    <div id="container">
        <h1> Survey Form </h1>
  
    </div>
<form action="surveypost.php" method="POST">
First Name:<br> <input type="text" name="firstname"><br>
Last Name: <br><input type="text" name="lastname">
<p>Did you attend MAC270 as a faculty member, student, exhibitor or industry professional?</p>
<select name="category" size="1">
    <option value="faculty">Faculty Member</option>
    <option value="student">Student</option>
    <option value="exhibitor">Exhibitor</option>
    <option value="industry">Industry Professional</option>
</select><br><br>

<label>Was this your first MAC270 Course? </label><br>
Yes:<input type="radio" value="1" name="first"><br />
No:<input type="radio" value="0" name="first"><br />  

<p>On a 10 point scale, how valuable were the following events? (i.e. 1=not valualble, 10=extremely valuable)</p>
<label>Exhibit Hall</label>
<select name="exhibits" size="1">
    <option value="1"> 1</option>
    <option value="2"> 2</option>
    <option value="3"> 3</option>
    <option value="4"> 4</option>
    <option value="5"> 5</option>
    <option value="6"> 6</option>
    <option value="7"> 7</option>
    <option value="8"> 8</option>
    <option value="9"> 9</option>
    <option value="10"> 10</option>
</select><br>

<label>Technology Demostration Room</label>
<select name="tdr" size="1">
    <option value="1"> 1</option>
    <option value="2"> 2</option>
    <option value="3"> 3</option>
    <option value="4"> 4</option>
    <option value="5"> 5</option>
    <option value="6"> 6</option>
    <option value="7"> 7</option>
    <option value="8"> 8</option>
    <option value="9"> 9</option>
    <option value="10"> 10</option>
</select><br>

<label>Apple  Hands-On Lab</label>
<select name="apple" size="1">
    <option value="1"> 1</option>
    <option value="2"> 2</option>
    <option value="3"> 3</option>
   <option value="4"> 4</option>
    <option value="5"> 5</option>
    <option value="6"> 6</option>
    <option value="7"> 7</option>
    <option value="8"> 8</option>
    <option value="9"> 9</option>
    <option value="10"> 10</option>
</select><br>

<label>Avid Hands-On Lab</label>
<select name="avid" size="1">
    <option value="1"> 1</option>
   <option value="2"> 2</option>
    <option value="3"> 3</option>
   <option value="4"> 4</option>
    <option value="5"> 5</option>
    <option value="6"> 6</option>
    <option value="7"> 7</option>
    <option value="8"> 8</option>
    <option value="9"> 9</option>
    <option value="10"> 10</option>
</select><br>

<label>MAC Festival of Media</label>
<select name="festival" size="1">
    <option value="1"> 1</option>
    <option value="2"> 2</option>
    <option value="3"> 3</option>
    <option value="4"> 4</option>
    <option value="5"> 5</option>
    <option value="6"> 6</option>
    <option value="7"> 7</option>
    <option value="8"> 8</option>
    <option value="9"> 9</option>
    <option value="10"> 10</option>
</select><br>

<label>Academic Panel Sessions</label>
<select name="academic" size="1">
    <option value="1"> 1</option>
    <option value="2"> 2</option>
    <option value="3"> 3</option>
    <option value="4"> 4</option>
    <option value="5"> 5</option>
    <option value="6"> 6</option>
    <option value="7"> 7</option>
    <option value="8"> 8</option>
    <option value="9"> 9</option>
    <option value="10"> 10</option>
</select><br>

<label>Competitive Paper Sessions</label>
<select name="papers" size="1">
    <option value="1"> 1</option>
    <option value="2"> 2</option>
    <option value="3"> 3</option>
    <option value="4"> 4</option>
    <option value="5"> 5</option>
    <option value="6"> 6</option>
    <option value="7"> 7</option>
    <option value="8"> 8</option>
    <option value="9"> 9</option>
    <option value="10"> 10</option>
</select><br>

<p>I would say that the MAC270 Convention live up to my expectations (1=strongly disagree, 2=disagree, 3=unsure, 4=agree, 5=strongly agree)</p>
<select name="expectations" size="1">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br><br>
 <input type="submit" value="Submit">
 <input type="reset" value="Reset">

</form>    
<script type="text/javascript" src=""></script>
 </body>
</html>