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


    function dynamicdropdown1(listindex1)
    {
        switch (listindex1)
        {
    case "Ms.Lakshmi  Gadhikar" :
            document.getElementById("email").options[0]=new Option("lakshmi.gadhikar@fcrit.ac.in","lakshmi.gadhikar@fcrit.ac.in");
            break;
    case "Ms.Archana Shirke" :
            document.getElementById("email").options[0]=new Option("archana.shirke@fcrit.ac.in","archana.shirke@fcrit.ac.in");
            break;
    case "Ms. Trupti Lotlikar" :
            document.getElementById("email").options[0]=new Option("trupti.lotlikar@fcrit.ac.in","trupti.lotlikar@fcrit.ac.in");
            break;
    case "Ms. Dhanashree Hadsul" :
            document.getElementById("email").options[0]=new Option("dhanashree.hadsul@fcrit.ac.in","dhanashree.hadsul@fcrit.ac.in");
            break;
    case "Ms.  Parmita Das" :
            document.getElementById("email").options[0]=new Option("paramita.das@fcrit.ac.in","paramita.das@fcrit.ac.in");
            break;
    case "Ms. Mukta Nivelkar" :
            document.getElementById("email").options[0]=new Option("mukta.nivelkar@fcrit.ac.in","mukta.nivelkar@fcrit.ac.in");
            break;
    case "Ms. Poonam Bari" :
            document.getElementById("email").options[0]=new Option("poonam.bari@fcrit.ac.in","poonam.bari@fcrit.ac.in");
            break;
    case "Mr. Anand Pardeshi" :
            document.getElementById("email").options[0]=new Option("anand.pardeshi@fcrit.ac.in","anand.pardeshi@fcrit.ac.in");
            break;
    case "Ms. Kalpana Wani" :
            document.getElementById("email").options[0]=new Option("kalpana.wani@fcrit.ac.in","kalpana.wani@fcrit.ac.in");
            break;
    case "Ms. Prachi Goel" :
            document.getElementById("email").options[0]=new Option("prachi.goel@fcrit.ac.in","prachi.goel@fcrit.ac.in");
            break;
    case "Ms. Smita Rukhande" :
            document.getElementById("email").options[0]=new Option("smita.rukhande@fcrit.ac.in","smita.rukhande@fcrit.ac.in");
            break;
    case "Ms.Rupali Deshmukh" :
            document.getElementById("email").options[0]=new Option("rupali.deshmukh@fcrit.ac.in","rupali.deshmukh@fcrit.ac.in");
            break;
    case "Mr. Suraj Khandare" :
            document.getElementById("email").options[0]=new Option("suraj.khandare@fcrit.ac.in","suraj.khandare@fcrit.ac.in");
            break;
    case "Ms. Jaya" :
            document.getElementById("email").options[0]=new Option("jayagupta286@gmail.com","jayagupta286@gmail.com");
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
  


if(false === $error)
  {
    //Validation Success!
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
<br><center><h3><b>Faculty Summary</h3></b></center>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


<div class="category_div1" id="category_div1">Teacher name:   
 <select id="teachername" name="teachername" style="width: 250px;"  onchange="javascript: dynamicdropdown1(this.options[this.selectedIndex].value);">
 
  <option >Select any teacher</option>
  <option >Ms.Lakshmi  Gadhikar</option>
  <option >Ms.Archana Shirke</option>
  <option >Ms. Trupti Lotlikar</option>
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


  <div class="sub_category_div1" id="sub_category_div1">Email:
        <script type="text/javascript" language="JavaScript">
        document.write('<select name="email" id="email" style="width: 250px;" >teacher email id<option value=""></option></select>')
    </script>
   <noscript>
   
  </select><span class="error"> * <?php echo $emailErr;?></span>
 </noscript>
 </div>
 <br>
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
 <input type="reset" name="reset"> </form>
 <br>
 <B><center>Summary Generated</center></B>
 <br>
<b>
 <?php
 echo "Teacher name :$teachername";  echo "\t\t\t\t\t\t\t Subject: $subject"; echo "\t\t\t\t\t\t\tSemester: $sem";
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
</b><br><b><br>
<?php
$query2="SELECT COUNT(*) as  tp2  FROM   expert_lectures WHERE sem='$sem' AND subject='$subject'";
$bool_query2=mysqli_query($connection,$query2);
$val2=mysqli_fetch_assoc($bool_query2);
echo("Total Students filled feedback= $val2[tp2]");
?>
</b>
<br><br>
<table id=t01 height="400" width="900">
  <tr>
    <th width="10">Sr No.</th>
    <th width="30">Quality</th>
  <th width="30">Excellent%</th>
  <th width="30">Good%</th>
  <th width="30">Satisfactory%</th>
  <th width="30">Poor%</th>
  </tr>

  <tr>
    <th> 1. </td>
    <th>Organization</td>
<td>  <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q1='E' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);
$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}

//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q1='G' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q1='S' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q1='P' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}

//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
  </tr>


  <tr> 
    <th> 2. </td>
    <th>Preparation</td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q2='E' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q2='G' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q2='S' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q2='P' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
  </tr>


<tr>   
    <th> 3. </td>
    <th>Clarity</td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q3='E' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}

//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q3='G' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?>
</td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q3='S' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}

//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q3='P' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
  </tr>


<tr>    
    <th> 4. </td>
    <th>Explanation</td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q4='E' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q4='G' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q4='S' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q4='P' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
  </tr>

<tr>    
    <th> 5. </td>
    <th>Interaction</td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q5='E' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q5='G' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q5='S' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q5='P' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
  </tr>

<tr>    
    <td>  </td>
    <td> </td>
<th>Always%</th>
    <th>Sometimes%</th>
<th>Never%</th>   
  </tr>

<tr>    
    <th> 6. </td>
    <th>Practical Relevance </td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q7='A' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q7='ST' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
<td>
 <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q7='N' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>   
  </tr>

<tr>    
    <td>  </td>
    <td></td>
<th >Yes%</th>
    <th>No%</th>
  </tr>

<tr>    
    <th> 7. </td>
    <th>Reference Guidance</td>
<td> <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q8='Y' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q8='NO' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
  </tr>

<tr>    
    <td> </td>
    <td></td>
<th>Excellent%</th>
  <th>Good%</th>
  <th>Satisfactory%</th>
  <th>Poor%</th>

<tr>    
      <th> 8. </td>
      <th>Overall Interaction</td>
  <td> <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q6='E' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
    <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q6='G' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}

//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
  <td>
   <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q6='S' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
      <td>
     <?php  
//echo "$teachername";
//$result = mysql_query('SELECT subject from  faculty where t_name="Ms Kalpana Wani"',$connection);


$query="SELECT COUNT(*) as tp  FROM faculty WHERE f_q6='P' AND t_name='$teachername' AND subject='$subject'";
$bool_query=mysqli_query($connection,$query);
$val=mysqli_fetch_assoc($bool_query);

$query1="SELECT COUNT(*) as tp1 FROM faculty WHERE  t_name='$teachername' AND subject='$subject'";
$bool_query1=mysqli_query($connection,$query1);
$val1=mysqli_fetch_assoc($bool_query1);
if( $val1["tp1"]==0 )
{echo(0);}
else{
$per=($val["tp"]/$val1["tp1"])*100;


echo(round($per,2));}
//$row = mysql_fetch_array($result);
//echo $row['total'];
      
?></td>
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
?>
 </div>

 
</body>
</html>