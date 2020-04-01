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

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	font-size: 20px;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
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
<script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
		case "I" :
            document.getElementById("subject").options[0]=new Option("Select subject","");
            break;
		case "II" :
            document.getElementById("subject").options[0]=new Option("Select subject","");
            break;
        case "III" :
            document.getElementById("subject").options[0]=new Option("Select subject","");
            document.getElementById("subject").options[1]=new Option("MATHS3","MATHS3");
            document.getElementById("subject").options[2]=new Option("DBMS","DBMS");
			document.getElementById("subject").options[3]=new Option("DSA","DSA");
			document.getElementById("subject").options[4]=new Option("OOPM","OOPM");
			document.getElementById("subject").options[5]=new Option("ADC","ADC");
			document.getElementById("subject").options[6]=new Option("PADC","PADC");
            break;
		case "IV" :
            document.getElementById("subject").options[0]=new Option("Select subject","");
            document.getElementById("subject").options[1]=new Option("CN","CN");
            document.getElementById("subject").options[2]=new Option("AT","AT");
			document.getElementById("subject").options[3]=new Option("ITC","ITC");
			document.getElementById("subject").options[4]=new Option("WP","WP");
			document.getElementById("subject").options[5]=new Option("MATHS4","MATHS4");
			document.getElementById("subject").options[6]=new Option("COA","COA");
            break;
		case "V" :
            document.getElementById("subject").options[0]=new Option("Select subject","");
            document.getElementById("subject").options[1]=new Option("OS","OS");
            document.getElementById("subject").options[2]=new Option("ADBMS","ADBMS");
			document.getElementById("subject").options[3]=new Option("MCES","MCES");
			document.getElementById("subject").options[4]=new Option("OST","OST");
			document.getElementById("subject").options[5]=new Option("CGVR","CGVR");
            break;
		case "VI" :
            document.getElementById("subject").options[0]=new Option("Select subject","");
            document.getElementById("subject").options[1]=new Option("SE","SE");
            document.getElementById("subject").options[2]=new Option("SWS","SWS");
			document.getElementById("subject").options[3]=new Option("DMBI","DMBI");
			document.getElementById("subject").options[4]=new Option("AIT","AIT");
			document.getElementById("subject").options[5]=new Option("DS","DS");
            break;		
		case "VII" :
            document.getElementById("subject").options[0]=new Option("Select subject","");
            document.getElementById("subject").options[1]=new Option("SPM","SPM");
            document.getElementById("subject").options[2]=new Option("CC","CC");
			document.getElementById("subject").options[3]=new Option("IS","IS");
			document.getElementById("subject").options[4]=new Option("WT","WT");
			document.getElementById("subject").options[5]=new Option("IP","IP");
            break;		
		case "VIII" :
            document.getElementById("subject").options[0]=new Option("Select subject","");
            document.getElementById("subject").options[1]=new Option("STQA","STQA");
            document.getElementById("subject").options[2]=new Option("SNMR","SNMR");
			document.getElementById("subject").options[3]=new Option("CSM","CSM");
			document.getElementById("subject").options[4]=new Option("BDA","BDA");
			break;		
        
        }
        return true;
    }
    </script>

</head>
<body >
<div class="wrapper row3">

  <?php
  include ("home.html");
$today = date("j/ n/ Y");
// define variables and set to empty values
$teachernameErr = $semErr = $branchErr = $subjectErr = $dateErr =  $rollnoErr = "";
$teachername = $sem = $branch = $subject =  $date =  $rollno = "";

if(!empty($_POST['submit'])) {
	$error = false;


	
   if (empty($_POST["teachername"])) {
    $teachernameErr = "Teacher name is required";
	$error=true;
  } else {
    $teachername = test_input($_POST["teachername"]);
  }
  

if (empty($_POST["subject"])) {
    $subjectErr = "Subject name is required";
	$error=true;
  } else {
    $subject = test_input($_POST["subject"]);
  }
  
  $teachername = test_input($_POST["subject"]);
if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
  $subjectErr = "Only letters and white space allowed"; 
  $error=true;
}
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
  
 
    
  if (empty($_POST["sem"])) {
    $classErr = "Sem is required";
	$error=true;
  } else{
    $class = test_input($_POST["sem"]);
  }
  
  if(array_key_exists('rollno', $_POST))
  {
    if(!preg_match('/^[0-9]{6}$/', $_POST['rollno']))
    {
      $rollnoErr = 'Invalid Number!';
	  $error=true;
    }
  }
  
  
  if (empty($_POST["branch"])) {
    $branchErr = "Branch is required";
	$error=true;
  } else {
    $branch = test_input($_POST["branch"]);

  }

 
  
  if (empty($_POST["date"])) {
    $dateErr = "date is required";
	$error=true;
  } else {
    $date = test_input($_POST["date"]);
  }
  
  
  if(false === $error)
	{
		//Validation Success!
		//Do form processing like email, database etc here
		
 
require 'gvar.php';
$conn    = Connect();
$teachername    = $conn->real_escape_string($_POST['teachername']);
$sem    = $conn->real_escape_string($_POST['sem']);
$rollno    = $conn->real_escape_string($_POST['rollno']);
$subject   = $conn->real_escape_string($_POST['subject']);
$branch    = $conn->real_escape_string($_POST['branch']);
$date    = $conn->real_escape_string($_POST['date']);
$response1    = $conn->real_escape_string($_POST['response1']);
$response2    = $conn->real_escape_string($_POST['response2']);
$response3    = $conn->real_escape_string($_POST['response3']);
$response4    = $conn->real_escape_string($_POST['response4']);
$response5    = $conn->real_escape_string($_POST['response5']);
$response6    = $conn->real_escape_string($_POST['response6']);
$response7    = $conn->real_escape_string($_POST['response7']);
$response8    = $conn->real_escape_string($_POST['response8']);


$query   = "INSERT into faculty(t_name,sem,branch,subject,rollno,date,f_q1,f_q2,f_q3,f_q4,f_q5,f_q6,f_q7,f_q8) VALUES('" . $teachername . "','" . $sem . "','" . $branch . "','" . $subject . "','" . $rollno . "','" . $date . "','" . $response1 . "','" . $response2 . "','" . $response3 . "','" . $response4 . "','" . $response5 . "','" . $response6 . "','" . $response7 . "','" . $response8 . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 

 
$conn->close();
 

		
		
		header('Location: next1css.php');
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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<br><center><h3><b>Faculty Feedback Form</h3></b></center>
 Teacher name:   
 <select name="teachername" style="width: 250px;" >
  <option >Select any teacher</option>
  <option >Ms.Lakshmi  Gadhikar</option>
  <option >Ms.Archana Shirke</option>
  <option  >Ms. Trupti Lotlikar</option>
  <option>Ms. Dhanashree Hadsul</option>
  <option  >Ms.  Parmita Das</option>
  <option  >Ms. Mukta Nivelkar</option>
  <option  >Ms. Poonam Bari</option>
  <option >Mr. Anand Pardeshi</option>
  <option >Ms. Kalpana Wani</option>
  <option >Ms. Prachi Goel</option>
  <option >Ms. Smita Rukhande</option>
  <option >Ms.Rupali Deshmukh</option>
  <option >Mr. Suraj Khandare</option>
  <option >Ms. Jaya </option>
 </select><span class="error"> * <?php echo $teachernameErr;?></span>
  <br><br>
<div class="category_div" id="category_div">Sem:
<select id="sem" name="sem" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
   
<option value="">Select sem</option>
  <option  <?php if (isset($sem) && $sem=="I") echo "checked";?> value="I">I</option>
  <option  <?php if (isset($sem) && $sem=="I") echo "checked";?> value="II">II</option>
  <option  <?php if (isset($sem) && $sem=="I") echo "checked";?> value="III">III</option>
  <option  <?php if (isset($sem) && $sem=="I") echo "checked";?> value="IV">IV</option>
  <option  <?php if (isset($sem) && $sem=="I") echo "checked";?> value="V">V</option>
  <option  <?php if (isset($sem) && $sem=="I") echo "checked";?> value="VI">VI</option>
  <option  <?php if (isset($sem) && $sem=="I") echo "checked";?> value="VII">VII</option>
  <option  <?php if (isset($sem) && $sem=="I") echo "checked";?> value="VIII">VIII</option>
  
</select><span class="error"> * <?php echo $semErr;?></span> 
</div>
<br>

<div class="sub_category_div" id="sub_category_div">Subject:
        <script type="text/javascript" language="JavaScript">
        document.write('<select name="subject" id="subject"><option value="">Select subject</option></select>')
		</script>
   <noscript>
   <select name="subject" id="subject">
  <option value="DS">DS</option>
  <option value="DMBI">DMBI</option>
  <option value="AIT">AIT</option>
  <option value="SE">SE</option>
  <option value="SWS">SWS</option>
  <option value="ADBMS">ADBMS</option>
  <option value="OS">OS</option>
  </select><span class="error"> * <?php echo $subjectErr;?></span>
 </noscript>
 </div>
<br>
 Branch:
<select id="branch" name="branch" >
  <option>Select any branch</option>
  <option >IT</option>
  <option >Computer</option>
  <option>MECH</option>
  <option >EXTC</option>
</select><span class="error"> * <?php echo $branchErr;?></span>




 <br><br>
   Roll no:
  <input type="text" name="rollno" value="<?php echo $rollno;?>"><span class="error"> * <?php echo $rollnoErr;?></span>  

<br><br>
<text> Date:</text>
  <input type="text" name="date" value="<?php echo $today;?>">
  <span class="error">* <?php echo $dateErr;?></span>
  <br><br>


<table id="t01">
<tr>
<th colspan="7">Note: kindly encircle choice of remark.</th>
</tr>

  <tr height="75">
    <font-size="20px"> <th>Q.No</th>
    <th>Quality</th> 
<th>Questions</th>
    <th colspan="4">Remark</th>
  </font></tr>
   <tr height="45">
    <th></th>
    <th></th> 
    <th></th>
<th>E</th>
	<th>G</th>
	<th>S</th>
	<th>P</th>
	
  </tr>
  
  <tr>
    <td>1</td>
<td>Organization</td>
    <td>How well were the lectures oragnized ?</td>
	<td>
	
  <input type="radio" name="response1" required <?php if (isset($response1) && $response1=="1") echo "checked";?> value="E" > </td>
  <td><input type="radio" name="response1" required <?php if (isset($response1) && $response1=="2") echo "checked";?>value="G"></td>
  <td><input type="radio" name="response1" required <?php if (isset($response1) && $response1=="3") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response1" required <?php if (isset($response1) && $response1=="4") echo "checked";?>value="P"></td>

  </tr>
 <tr>
    <td>2</td>
<td>Preparation</td>
    <td>The preparation for lecture was ?</td>
	<td>
	
  <input type="radio" name="response2" required <?php if (isset($response2) && $response2=="1") echo "checked";?> value="E" ></td>
  <td><input type="radio" name="response2" required <?php if (isset($response2) && $response2=="2") echo "checked";?> value="G"></td>
  <td><input type="radio" name="response2" required <?php if (isset($response2) && $response2=="3") echo "checked";?> value="S"> </td>
  <td><input type="radio" name="response2" required <?php if (isset($response2) && $response2=="4") echo "checked";?> value="P"></td>


  </tr>
 <tr>
    <td>3</td>
<td>Clarity</td>
    <td>Did the lectures have clarity of speech ?</td>
	<td>
	
  <input type="radio" name="response3" required <?php if (isset($response3) && $response3=="1") echo "checked";?> value="E"   ></td>
  <td><input type="radio" name="response3"  required <?php if (isset($response3) && $response3=="2") echo "checked";?> value="G"></td>
  <td><input type="radio" name="response3" required <?php if (isset($response3) && $response3=="3") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response3" required <?php if (isset($response3) && $response3=="4") echo "checked";?> value="P"></td>

  </tr>
 <tr>
    <td>4</td>
<td>Explanation</td>
    <td>Understading the subject by student ?</td>
	<td>
	
  <input type="radio" name="response4" required <?php if (isset($response4) && $response4=="1") echo "checked";?> value="E"  ></td>
  <td><input type="radio" name="response4" required <?php if (isset($response4) && $response4=="2") echo "checked";?> value="G"></td>
  <td><input type="radio" name="response4"  required <?php if (isset($response4) && $response4=="3") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response4" required <?php if (isset($response4) && $response4=="4") echo "checked";?> value="P"></td>


  </tr>
 <tr>
    <td>5</td>
<td>Interaction</td>
    <td>Involvement of the student by the teachers in learning process ?</td>
	<td>
	
  <input type="radio" name="response5" required <?php if (isset($response5) && $response5=="1") echo "checked";?> value="E"  ></td>
  <td><input type="radio" name="response5" required <?php if (isset($response5) && $response5=="2") echo "checked";?> value="G"></td>
  <td><input type="radio" name="response5" required <?php if (isset($response5) && $response5=="3") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response5" required <?php if (isset($response5) && $response5=="4") echo "checked";?> value="P"></td>


  </tr>
 <tr>
    <td>6</td>
<td>Overall effectivenence</td>
    <td>How do you rate the overall effectivness of the teacher ?</td>
	<td>
	
  <input type="radio" name="response6" required <?php if (isset($response6) && $response6=="1") echo "checked";?> value="E" ></td>
  <td><input type="radio" name="response6" required <?php if (isset($response6) && $response6=="2") echo "checked";?> value="G" ></td>
  <td><input type="radio" name="response6" required <?php if (isset($response6) && $response6=="3") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response6" required <?php if (isset($response6) && $response6=="4") echo "checked";?> value="P"></td>


  </tr>

    <tr>
    <td></td>
<td></td>
    <td></td>
	<th>A</th>
 <th>S</th>
  <th >N</th>
  <th></th>


  </tr>
  <td>7</td>
<td>Practical Relevance</td>
    <td>Does the lecturer relate the subject to day-to-day life / Industry ?</td>
	<td>
	
  <input type="radio" name="response7" value="A" required ></td>
  <td><input type="radio" name="response7" value="ST" ></td>
  <td><input type="radio" name="response7" value="N"></td>
  <td></td>

   <tr>
    <td></td>
<td></td>
    <td></td>
	<th>Yes</th>
  <th>NO </th>
  <td></td>
  <td></td>


  </tr>
<tr>
    <td>8</td>
<td>Reference Guidance</td>
    <td>Was guidance offered about the reference material ?</td>
	<td>
	
  <input type="radio" name="response8" value="Y" required></td>
  <td><input type="radio" name="response8" value="NO"></td>
  <td></td>
  <td></td>


  </tr>
  <tr height="55">
  <td></td>
  <th colspan="6">Note:  E:Excellent   G:Good    S:Satisfactory    P:Poor    A:Always     ST:Sometimes     N:Never</th>
  </tr>
  
</table><br>
<input type="submit" name="submit" value="Submit">  </form>

  
</div>
</body>
</html>