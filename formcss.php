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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <h1>
  <?php
  include("home.html");
$today = date("j/ n/ Y");
// define variables and set to empty values
$studentnameErr = $facilitatornameErr = $rollnoErr = $topicnameErr = $classErr = $subject = $dateErr = "";
$studentname = $facilitatorname = $rollno = $topicname = $class = $subjectErr = $date = "";

if(!empty($_POST['submit'])) {
	$error = false;


	
   if (empty($_POST["studentname"])) {
    $studentnameErr = "Student name is required";
	$error=true;
  } else {
    $studentname = test_input($_POST["studentname"]);
  }
  
  $studentname = test_input($_POST["studentname"]);
if (!preg_match("/^[a-zA-Z ]*$/",$studentname)) {
  $studentnameErr = "Only letters and white space allowed"; 
  $error=true;
}
  
  if (empty($_POST["facilitatorname"])) {
    $facilitatornameErr = "Facilitator name is required";
	$error=true;
  } else {
    $facilitatorname = test_input($_POST["facilitatorname"]);
  }
  
  $facilitatorname = test_input($_POST["facilitatorname"]);
if (!preg_match("/^[a-zA-Z ]*$/",$facilitatorname)) {
  $facilitatornameErr = "Only letters and white space allowed"; 
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
  
  
  if (empty($_POST["topicname"])) {
    $topicnameErr = "Topic name is required";
	$error=true;
  } else {
    $topicname = test_input($_POST["topicname"]);

  }

  $name = test_input($_POST["topicname"]);
if (!preg_match("/^[a-zA-Z ]*$/",$topicname)) {
  $topicnameErr = "Only letters and white space allowed"; 
  $error=true;
}

 if (empty($_POST["subject"])) {
    $subjectErr = "subject name is required";
  $error=true;
  } else {
    $subject = test_input($_POST["subject"]);

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
$studentname    = $conn->real_escape_string($_POST['studentname']);
$facilitatorname    = $conn->real_escape_string($_POST['facilitatorname']);
$rollno    = $conn->real_escape_string($_POST['rollno']);
$topicname   = $conn->real_escape_string($_POST['topicname']);
$class    = $conn->real_escape_string($_POST['sem']);
$subject   = $conn->real_escape_string($_POST['subject']);
$date    = $conn->real_escape_string($_POST['date']);
$response1    = $conn->real_escape_string($_POST['response1']);
$response2    = $conn->real_escape_string($_POST['response2']);
$response3    = $conn->real_escape_string($_POST['response3']);
$response4    = $conn->real_escape_string($_POST['response4']);
$response5    = $conn->real_escape_string($_POST['response5']);
$suggestion    = $conn->real_escape_string($_POST['suggestion']);

$query   = "INSERT into expert_lectures(s_name,f_name,s_roll_no,topic_name,sem,subject,date,ex_q1,ex_q2,ex_q3,ex_q4,ex_q5,ex_sugg) VALUES('" . $studentname . "','" . $facilitatorname . "','" . $rollno . "','" . $topicname . "','" . $class . "','" . $subject . "','" . $date . "','" . $response1 . "','" . $response2 . "','" . $response3 . "','" . $response4 . "','" . $response5 . "','" . $suggestion . "')";
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

<br><center><h3><b>Expert Feedback Form</h3></b></center>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Student name:   
  <input type="text"  name="studentname" value="<?php echo $studentname;?>">
  <span class="error">* <?php echo $studentnameErr;?></span>
  <br>
 <text class= "space">  <br>Facilitator's name: </text>
   <input type="text"  name="facilitatorname" value="<?php echo $facilitatorname;?>">
  <span class="error">* <?php echo $facilitatornameErr;?></span>
  <br><br> 
  Roll no:
  <input type="text" name="rollno" value="<?php echo $rollno;?>"><span class="error"> * <?php echo $rollnoErr;?></span>
  <br>
  
  <text class="space"> <br>Topic name:</text>
  <input type="text" name="topicname" value="<?php echo $topicname;?>">
  <span class="error">*<?php echo $topicnameErr;?></span><br><br>

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
  
</select><span class="error"> * <?php echo $classErr;?></span> 
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
  
 <text class="space"> <br> Date:</text>
  <input type="text" name="date" value="<?php echo $today;?>">
  <span class="error">* <?php echo $dateErr;?></span>


<br><br>
<table id="t01">
<tr>
<th colspan="7">Note: Please give your rating "P"-POOR, "S"-SATISFACTORY, "O"-OK, "G"-GOOD, "E"-EXCELLENT.</th>
</tr>

  <tr height="75">
    <font-size="20px"> <th>Sr No</th>
    <th>Categories</th> 
    <th colspan="5">Response</th>
  </font></tr>
   <tr height="45">
    <th></th>
    <th></th> 
    <th>P</th>
	<th>S</th>
	<th>O</th>
	<th>G</th>
	<th>E</th>
  </tr>
  
  <tr>
    <td>1</td>
    <td>Relevance of the topics covered to the subject</td>
	<td>
	
  <input type="radio" name="response1" required <?php if (isset($response1) && $response1=="1") echo "checked";?> value="P" ></td>
  <td><input type="radio" name="response1" required <?php if (isset($response1) && $response1=="2") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response1" required <?php if (isset($response1) && $response1=="3") echo "checked";?> value="O"></td>
  <td><input type="radio" name="response1" required <?php if (isset($response1) && $response1=="4") echo "checked";?> value="G"></td>
  <td><input type="radio" name="response1" required <?php if (isset($response1) && $response1=="5") echo "checked";?> value="E"></td>  

  </tr>
  
  <tr>
    <td>2</td>
    <td>Level of understanding of the topics covered</td>
	<td>
  <input type="radio" name="response2" required <?php if (isset($response2) && $response2=="1") echo "checked";?> value="P" ></td>
  <td><input type="radio" name="response2"  <?php if (isset($response2) && $response2=="2") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response2"  <?php if (isset($response2) && $response2=="3") echo "checked";?> value="O"></td>
  <td><input type="radio" name="response2"  <?php if (isset($response2) && $response2=="4") echo "checked";?>  value="G"></td>
  <td><input type="radio" name="response2"  <?php if (isset($response2) && $response2=="5") echo "checked";?> value="E"></td>  

  </tr>
  
  <tr>
    <td>3</td>
    <td>Interactiveness of the session</td>
	<td>
  <input type="radio" name="response3" required <?php if (isset($response3) && $response3=="1") echo "checked";?> value="P" ></td>
  <td><input type="radio" name="response3" required <?php if (isset($response3) && $response3=="2") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response3" required <?php if (isset($response3) && $response3=="3") echo "checked";?> value="O"></td>
  <td><input type="radio" name="response3" required <?php if (isset($response3) && $response3=="4") echo "checked";?>  value="G"></td>
  <td><input type="radio" name="response3" required <?php if (isset($response3) && $response3=="5") echo "checked";?> value="E"></td>
 

  </tr>
  
  <tr>
    <td>4</td>
    <td>Practical relevance of the topic</td>
	<td>
  <input type="radio" name="response4" required <?php if (isset($response4) && $response4=="1") echo "checked";?> value="P" ></td>
  <td><input type="radio" name="response4" required <?php if (isset($response4) && $response4=="2") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response4" required <?php if (isset($response4) && $response4=="3") echo "checked";?> value="O"></td>
  <td><input type="radio" name="response4" required <?php if (isset($response4) && $response4=="4") echo "checked";?>  value="G"></td>
  <td><input type="radio" name="response4" required <?php if (isset($response4) && $response4=="5") echo "checked";?> value="E"></td>

  </tr>
  
  <tr>
    <td>5</td>
    <td>Overall effectiveness of the session</td>
	<td>
  <input type="radio" name="response5" required <?php if (isset($response5) && $response5=="1") echo "checked";?> value="P" ></td>
  <td><input type="radio" name="response5" required <?php if (isset($response5) && $response5=="2") echo "checked";?> value="S"></td>
  <td><input type="radio" name="response5" required <?php if (isset($response5) && $response5=="3") echo "checked";?> value="O"></td>
  <td><input type="radio" name="response5" required <?php if (isset($response5) && $response5=="4") echo "checked";?>  value="G"></td>
  <td><input type="radio" name="response5" required <?php if (isset($response5) && $response5=="5") echo "checked";?> value="E"></td>  

  </tr>
  
  <tr height="55">
  <td></td>
  <th colspan="6">Suggestion:<input type="text" name="suggestion" style="width: 90%;" > </th>
  </tr>
  
</table><br>
<input type="submit" name="submit" value="Submit">  </form>
</h1>
  
</div>
</body>
</html>