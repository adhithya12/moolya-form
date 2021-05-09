<?php
$con=new mysqli("remotemysql.com","bsH0pV8s45","j0M2EalHEG","bsH0pV8s45");
$dob=$_POST["date"];
$email=$_POST["email"];

$data=$con->query("select * from form where email='".$email."' and dob='".$dob."'");
if($data->num_rows>0)
while($row=$data->fetch_assoc()){
echo "Hey <span id=\"bold\">".$row["first_name"]." ".$row["last_name"]."!</span><br> You're born on <span id=\"bold\">".$row["dob"]."</span>";
if($row["intern"]=="yes") echo ". You are an intern.";
else echo ". You aren't an intern.";
echo " This is your Email - <span id=\"bold\">".$row["email"].".</span> <br>The feedback I recieved from you is <span id=\"bold\">\"".$row["feedback"]."\" </span><br>";
echo "<button type='button' class='submit' id='redirect2' onclick='func()'>Go back to registration form</button>";
}
else{
echo "data invalid";
echo "<button type='button' class='submit' id='redirect2' onclick='func()'>Go back to registration form</button>";}
$con->close();
?> 
    
