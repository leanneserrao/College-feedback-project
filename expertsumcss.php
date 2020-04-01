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
</head>
<body >
<div class="wrapper row3">
  <h1>
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
<body>

<?php
include("home.html");
$facilitatornameErr = $semErr = $branchErr = $subjectErr = $topicnameErr = "";
$facilitatorname = $sem = $branch = $subject = $topicname = ""  ;

if(!empty($_POST['submit'])) {
  $error = false;
  
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
  
  
if (empty($_POST["sem"])) {
    $semErr = "Sem is required";
  $error=true;
  } else{
    $sem = test_input($_POST["sem"]);
  }

if (empty($_POST["subject"])) {
    $subjectErr = "Subject name is required";
  $error=true;
  } else {
    $subject = test_input($_POST["subject"]);
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
 
  
  


if(false === $error)
  {
    //val2idation Success!
    //Do form processing like email, database etc here
    
        
  
  }
  
  

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error"></span></p>
<center><h3><b>Expert Summary</h3></b></center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

 <text> Facilitator's name: </text>
  <input type="text"  name="facilitatorname" value="<?php echo $facilitatorname;?>">
  <span class="error">* <?php echo $facilitatornameErr;?></span>
  <br><br> 

<text >Topic name:</text>
  <input type="text" name="topicname" value="<?php echo $topicname;?>">
  <span class="error">* <?php echo $topicnameErr;?></span><br><br>


<div class="category_div" id="category_div">Sem:
<select id="sem" name="sem" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
   
<option >Select sem</option>
  <option   >I</option>
  <option  >II</option>
  <option   >III</option>
  <option >IV</option>
  <option  >V</option>
  <option >VI</option>
  <option >VII</option>
  <option  >VIII</option>
  
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

 <input type="submit" name="submit" value="next">  <br>
 <input type="reset" name="reset"> </form><br>


<B><center>Summary Generated</center></B>
 <br>
<b>
 <?php
 echo "Facilitator name :$facilitatorname";  echo "\t\t\t\t\t\t\t Subject: $subject"; echo "\t\t\t\t\t\t\tSemester: $sem";
//$connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server

//$db = mysql_select_db("login_form", $connection); // Selecting Database
$connection = mysqli_connect("localhost", "root", "","login_form"); // Establishing Connection with Server

//$query = mysql_query('select * from faculty where t_name="$teachername" AND subject="$subject"', $connection);
/*while ($row = mysql_fetch_array($query)) 
{
echo "Teacher Name:{$row['t_name']},Branch:{$row['branch']},Subject:{$row['subject']},Semester:{$row['sem']}";
echo "<br>";
}*/
?>
</b>


 
<br><b><b><br>
<?php
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
echo("Total Students filled feedback= $val2[tp2]");
?>
</b></b><br>
    <table id=t01 height="400" width="900">
  <tr>
    <th width="10">Sr No.</th>
    <th width="30">Category</th>
  <th width="30">Poor%</th>
  <th width="30">Satisfactory%</th>
  <th width="30">Ok%</th>
  <th width="30">Good%</th>
<th width="30">Excellent%</th>
  </tr>

  <tr>
    <th> 1. </th>
    <th>Relevance of the topics covered to the subject</th>
<td> <?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q1 ='P' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}  
?></td>
    <td> 
<?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q1 ='S' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
     
?>

</td>
<td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q1 ='O' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
     
?></td>
    <td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q1 ='G' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}     
?></td>
 <td><?php 
 $query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q1 ='E' AND sem='$sem' AND subject='$subject'";
$bool_query11=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query11);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
?>
</td>
  </tr>


  <tr> 
    <th> 2. </th>
    <th>Level of understanding of the topic covered</th>
<td> <?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q2 ='P' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
     
?></td>
    <td> 
<?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q2 ='S' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
?>

</td>
<td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q2 ='O' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
     
?></td>
    <td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q2 ='G' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}     
?></td>
 <td><?php 
 $query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q2 ='E' AND sem='$sem' AND subject='$subject'";
$bool_query11=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query11);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
?>
</td>
  </tr>


<tr>   
    <th> 3. </th>
    <th>How interactive was the session?</th>
<<td> <?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q3 ='P' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
     
?></td>
    <td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q3 ='S' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}     
?></td>
<td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q3 ='O' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}     
?></td>
    <td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q3 ='G' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}    
?></td>

 <td><?php 
 $query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q3 ='E' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}?>
</td>
  </tr>


<tr>    
    <th> 4. </th>
    <th>Practical relevance</th>
<td> <?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q4 ='P' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
     
?></td>
    <td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q4 ='S' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}     
?></td>
<td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q4 ='O' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
?></td>
    <td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q4 ='G' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
     
?></td>
 <td><?php 
 $query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q4 ='E' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
?>
</td>
  </tr>

<tr>    
    <th> 5. </th>
    <th>Overall effectiveness of session</th>
<td> <?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q5 ='P' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
     
?></td>
    <td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q5 ='S' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}     
?></td>
<td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q5 ='O' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}     
?></td>
    <td><?php  

$query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q5 ='G' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}    
?></td>
 <td><?php 
 $query1="SELECT COUNT(*) as  tp  FROM   expert_lectures WHERE ex_q5 ='E' AND sem='$sem' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val2=mysqli_fetch_assoc($bool_query1);
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
if( $val2["tp2"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val2["tp2"])*100;


echo(round($per,2));}
?>
</td>
  </tr>
</table>

<button style="position: absolute; left: 50%; right: 50%;"onclick="myFunction()">
 <span class="label"></span>
  <span class="glyphicon glyphicon-print"></span><b>Print</b>
</button></button>
<script>
$('#button').click(function(e) {
  $("#submit .label").text("New Search");
});
function myFunction() {
    window.print();
}
</script>
<?php
mysqli_close($connection); // Closing Connection with Server
?></h1>
  </div>
</body>
</html>