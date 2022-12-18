<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Search Bar using PHP</title>
</head>
<body>
<fieldset>
<legend>
Search Queue 
</legend>
<center>




<h1>Online Job Platform</h1>

<form method="post">
 <ul> <h2> Choose Certain Criteria for Your Job Avaliablities!</h2></ul>  
<label for="Type">Criteria:</label>
<select name="Job" id="Job">
  <option value="Programer">Programmer</option>
  <option value="Developer">Developer</option>
  <option value="manager">manager</option>
  <option value="Else">Other Jobs</option>
</select>
<br><br>
<input type="submit" name="submit">
	
</form>

    
</center>
    </fieldset>
</body>
</html>

<?php

$con = mysqli_connect("localhost","root","","school");
if (isset($_POST["submit"])) {
    $str1 = $_POST["Job"];
    
    
	$sql = "SELECT * FROM `jobs` WHERE Criteria ='$str1'" ;
    $sth= $con-> query($sql);
    if($sth-> num_rows > 0){
         while($row= $sth->fetch_assoc()){
        ?><center>
        <table>
   
    <tr><th>Salary</th><th>Company Name</th></tr>
			<tr>
               <td><?php echo $row["Salary"] ?></td>
                <td><?php echo $row["Company Name"]; ?></td>
                
			</tr>
</table>
    </center>
     <?php
      } 
          
		
    }
}
?>