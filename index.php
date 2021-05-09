<!DOCTYPE HTML>
<html>
<head>
<title>Form</title>
<link rel="stylesheet" href="css/index.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>

</head>
<body>
<form  method="post" action="controllers/submit.php" id="regform">
<div class="form" id="reg">
<div class="container">
<div class="row"><div class="col-12" id="header">Moolya Assignment Form</div></div>
<div class="row input_field">
<div class="col-4">First name </div><div class="col-8"><input type="text" placeholder="eg:Tony" id="first_name" name="first_name" autofocus class="textbox" required></div>
</div>
<div class="row input_field">
<div class="col-4"> Last name </div><div class="col-8"><input type="text" placeholder="eg:Stark" id="last_name" name="last_name" class="textbox" required></div>
</div>
<div class="row input_field">
<div class="col-4"> Are you an intern?</div><div class="col-8"><pre><input type="radio" name="intern" id="yes" value="yes" required><label for="yes"> Yes</label>   <input type="radio" name="intern" id="no" value="no" required><label for="no"> No</label></pre></div>
</div>
<div class="row input_field">
<div class="col-4"> Email Id </div><div class="col-8"><input type="email" placeholder="eg:tonystark@mail.com" id="email" name="email" class="textbox" required></div>
</div>
<div class="row input_field">
<div class="col-4">D.O.B </div><div class="col-8"><input type="date" placeholder="date of birth" name="date" id="date" class="textbox" required></div>
</div>
<div class="row input_field">
<div class="col-4">Feedback </div><div class="col-8"><textarea placeholder="Any feedbacks" id="feedback" name="feedback" class="textbox" required></textarea></div>
</div>
</div>
<button type="submit" id="submit" class="submit">Submit</button>
<input type="button" id="search_btn" value="Want to search your data? click here">
</div>
</form>
<div class="form" id="sub"></div>
<div class="form" id="search">
<form action="search.php" method="post" id="searchform">
<div class="container">
<div class="row"><div class="col-12" id="header">Enter your Email and Date of birth to get your details</div></div>
<div class="row input_field">
<div class="col-4"> Email Id </div><div class="col-8"><input type="email" placeholder="eg:tonystark@mail.com" id="email2" name="email" class="textbox" required></div>
</div>
<div class="row input_field">
<div class="col-4">D.O.B </div><div class="col-8"><input type="date" placeholder="date of birth" name="date" id="date2" class="textbox" required></div>
</div>
<button type='Submit' class='submit'>Search</button>
</form>
<button type='button' class='submit' id="redirect1">Go back to registration form</button>
</div>
</div>
</body>
</html>