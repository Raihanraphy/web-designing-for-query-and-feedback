<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head><center>
<body>
<br>
     <nav>
         <li> You can Enter Name </li>
         <li> You can choose to be Anonymus</li>
         <li> Don not enter Name if you wanted to Be anonymus</li><br>
     </nav>

<fieldset>
<legend >Message to the Athority</legend>
 <form method="post">
     <h1> Enter User Name: </h1>
     
     
     <br>
     
     <input type="text" name="Name">
     <br><br>

<textarea name="text" cols="120" rows="15" placeholder="text"> </textarea>    
<br><br>
<input type="submit" name="submit">
	
</form>
    </fieldset>

   
    
</body>
    </center>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=school",'root','');

if (isset($_POST["submit"])) {
    $Name= $_POST["Name"];
    $text= $_POST["text"];
    $sql=$con->prepare("INSERT INTO text (Name,text) VALUES ('$Name','$text')");
    $sql-> execute();
    
    ?>
    <center>
    <fieldset>
        <legend>
            Feedbacks
        </legend>
         <p>Thanks for Approaching</p><br>
          <br>
        <p>  <?php echo $Name ?></p><br>
           <textarea>
            <?php echo $text ?>
        </textarea>
        
    </fieldset>
</center>
<?php
		
		
}
?>
