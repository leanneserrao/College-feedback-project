<!DOCTYPE html>
<!--
Template Name: Kelaby
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Faculty module</title>

<style>
.error {color: #FF0000;}

form {
	font-size: 20px;
}

select {
	width: 150px;
}

.space {
	padding-left: 25%;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "I" :
            document.getElementById("sem").options[0]=new Option("Select sem","");
            document.getElementById("sem").options[1]=new Option("I","I");
            document.getElementById("sem").options[2]=new Option("II","II");
            break;
		case "II" :
            document.getElementById("sem").options[0]=new Option("Select sem","");
            document.getElementById("sem").options[1]=new Option("III","III");
            document.getElementById("sem").options[2]=new Option("IV","IV");
            break;
		case "III" :
            document.getElementById("sem").options[0]=new Option("Select sem","");
            document.getElementById("sem").options[1]=new Option("V","V");
            document.getElementById("sem").options[2]=new Option("VI","VI");
            break;
		case "IV" :
            document.getElementById("sem").options[0]=new Option("Select sem","");
            document.getElementById("sem").options[1]=new Option("VII","VII");
            document.getElementById("sem").options[2]=new Option("VIII","VIII");
            break;		
        
        }
        return true;
    }
    </script>
	
	
</head>
<body>

<div class="wrapper row3">


<?php
include("home.html");
$rollnoErr =  $yearErr = $semErr =  "";
 $rollno =  $year = $sem =  "";

if(!empty($_POST['submit'])) {
	$error = false;

if (empty($_POST["rollno"])) {
    $rollnoErr = "Roll no is required";
			$error=true;
  } else{
    $rollno = test_input($_POST["rollno"]);
  }
  
  if(array_key_exists('rollno', $_POST))
  {
    if(!preg_match('/^[0-9]{6}$/', $_POST['rollno']))
    {
      $rollnoErr = 'Invalid Number!';
	  		$error=true;
    }
  }
  
 if (empty($_POST["year"])) {
    $yearErr = " Please select your year";
			$error=true;
  } else {
    $year = test_input($_POST["year"]);
  }
  
  
  
  if (empty($_POST["sem"])) {
    $semErr = "Semester is required";
			$error=true;
  } else {
    $sem = test_input($_POST["sem"]);
  }
  
  if(false === $error)
	{
		//Validation Success!
		//Do form processing like email, database etc here
		
 
require 'connection.php';
$conn    = Connect();
$rollno    = $conn->real_escape_string($_POST['rollno']);
$year   = $conn->real_escape_string($_POST['year']);
$sem    = $conn->real_escape_string($_POST['sem']);

$query   = "INSERT into pg1_login (s_roll_no,year,sem) VALUES('" . $rollno . "','" . $year . "','" . $sem . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 

 
$conn->close();
 

		
		
		header('Location: choice-login.php');
	}
  
  
 

}

function validate_roll($data)
{
  return preg_match("/^[0-5]*$/", $data);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<br><center><h2><b>Student Feedback System</h2></b></center>
<br><center><h3><b>Login Form</h3></b></center>
<p><span class="error"></span></p>
<form method="post"    action="?">
 Roll no:
  <input type="text" name="rollno" value="<?php echo $rollno;?>"><span class="error">* <?php echo $rollnoErr;?></span><br>
  

<br>
<div class="category_div" id="category_div">Year:
        <select id="year" name="year" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">

&nbsp&nbsp&nbsp&nbsp  <option value="">&nbsp&nbsp&nbsp&nbspSelect year</option>
  <option  <?php if (isset($year) && $year=="I") echo "checked";?> value="I">I</option>
  <option <?php if (isset($year) && $year=="II") echo "checked";?> value="II">II</option>
  <option <?php if (isset($year) && $year=="III") echo "checked";?> value="III">III</option>
  <option <?php if (isset($year) && $year=="IV") echo "checked";?> value="IV">IV</option>
</select> <span class="error">* <?php echo $yearErr;?></span>
</div>
<br>

<div class="sub_category_div" id="sub_category_div">Semester:
        <script type="text/javascript" language="JavaScript">
        document.write('<select name="sem" id="sem"><option value="">Select sem</option></select>')
		
        </script>
        <noscript>
  &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp<select name="sem" id="sem">
  &nbsp&nbsp&nbsp&nbsp<option  <?php if (isset($sem) && $sem=="I") echo "checked";?> value="I">I</option>
  <option <?php if (isset($sem) && $sem=="II") echo "checked";?> value="II">II</option>
  <option <?php if (isset($sem) && $sem=="III") echo "checked";?> value="III">III</option>
  <option <?php if (isset($sem) && $sem=="IV") echo "checked";?> value="IV">IV</option>
  <option <?php if (isset($sem) && $sem=="V") echo "checked";?> value="V">V</option>
  <option <?php if (isset($sem) && $sem=="VI") echo "checked";?> value="VI">VI</option>
  <option <?php if (isset($sem) && $sem=="VII") echo "checked";?> value="VII">VII</option>
  <option <?php if (isset($sem) && $sem=="VIII") echo "checked";?> value="VIII">VIII</option>
</select><span class="error">* <?php echo $semErr;?></span>
        </noscript>
    </div>

  


 <br><br>
 <input type="submit" class="submit"  name="submit" value=" Login " >  </form>

  
  
</div>
</body>
</html>