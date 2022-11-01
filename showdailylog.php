<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Internship - Web Development</title>
    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="print" href="css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

    html {
      position: relative;
      min-height: 100%;
    }

    body {
      /* Margin bottom by footer height */
      margin-bottom: 60px;
      /*background-color: #DFE2DB;
        background-color: #FDF3E7;*/
        background-color: #F5F3EE;
    }
    .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 60px;
      background-color: #f5f5f5;
    }

    .doprint{
    	display: none;
    }

    .rightcenter{
    	text-align: center;
    }

    .leftcenter{
    	text-align: center;
    }

    @media (min-width: 768px) {
      .rightcenter{
        text-align: right;
      }
      .leftcenter{
        text-align: left;
      }
    }

    @media print {
       .dontprint { display: none !important; }
       .doprint { display: block !important; }
    }

    .font16{
      font-size: 16px;
      font-family: monospace;
    }
    </style>
<?php
require_once("head.php");
?>
  </head>
  <body>
		<br />    <div class="container-fluid font16">
        <div class="row">
		  <div class="col-xs-12 col-sm-3" id="sidebar" role="navigation">
			<div class="list-group dontprint">
			  <span class="list-group-item">
                <?php
                echo $_SESSION["user"];
                ?>
            </span>
<a href="internshiphome.php"  class='list-group-item' >Home</a>
<a href="myprofile.php"  class='list-group-item' >My Profile</a>
<a href="myteam.php"  class='list-group-item' >My Team</a>
<a href="mylogs.php"  class='list-group-item' >My Achievements & Notice(s)</a>
<a href="addstdailylog.php"  class='list-group-item' >Add Daily Log</a>
<a href="showmydailylog.php"  class='list-group-item active' >Show My Daily Log</a>
<a href="dailyscrumvlog.php"  class='list-group-item' >Daily Scrum V-Log</a>
<a href="internshippwdchange.php"  class='list-group-item' >Change Password</a>
<a href="internshiplogout.php" class="list-group-item" >Logout</a>
			</div>
		  </div><!--/span-->

		  <div class="col-xs-12 col-sm-9">
			<div class="card">
			  <div class="card-header ">
				My Daily Log
			  </div>
			  <div class="card-body">			  
<form class="form-horizontal" role="form" action="showdailylog.php" method="post">
<div class="row">
      <label for="inputId" class="col-sm-3 form-label">Select Student:*</label>
      <div class="col-sm-5">
          <select name="stid" id="inputId" class="form-select" required="required" >
          <?php
          if($_SESSION["user"]=="M0100007" || $_SESSION["user"]=="M0100008" || $_SESSION["user"]=="M0100011" || $_SESSION["user"]=="M0100014" || $_SESSION["user"]=="M0100017"){
				    echo "<option value=''> -- Select Student ID -- </option><option value='M0100007'>M0100007 - GOWNI SAIKRISHNA </option><option value='M0100008'>M0100008 - SIRIVELLA RAJASEKHAR REDDY</option><option value=M0100011>M0100011 - Bakka Manohar</option><option value='M0100014'>M0100014 - BUDILI HARISH</option><option value='M0100017'>M0100017 - Mude Shankar Naik</option>";	  
          }
          if($_SESSION["user"]=="M0100001" || $_SESSION["user"]=="M0100004" || $_SESSION["user"]=="M0100006" || $_SESSION["user"]=="M0100013" || $_SESSION["user"]=="M0100018"){
            echo "<option value=''> -- Select Student ID -- </option><option value='M0100001'>M0100001 - Gulimcherla Roopesh Reddy </option><option value='M0100004'>M0100004 - Vuruturu Syam Sundar</option><option value=M0100006>M0100006 - Adnan Hussain H Md</option><option value='M0100013'>M0100013 - Paluri Venkata Sumanth</option><option value='M0100018'>M0100018 - Inayat Ayaz Ganaie</option>";	  
          }
          if($_SESSION["user"]=="M0100002" || $_SESSION["user"]=="M0100009" || $_SESSION["user"]=="M0100010" || $_SESSION["user"]=="M0100012" || $_SESSION["user"]=="M0100016"){
            echo "<option value=''> -- Select Student ID -- </option><option value='M0100002'>M0100002 - Sake Chanakya Sai </option><option value='M0100009'>M0100009 - Mohammed Imthiyaz Basha</option><option value=M0100010>M0100010 - Sasi Mahendran Sasankan Lakshman</option><option value='M0100014'>M0100012 - Budili Harish</option><option value='M0100017'>M0100016 - Palle Nithin Kumar</option>";	  
          }
        ?>			
        </select>			
      </div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />
    <div class="row">
      <label for="inputDate" class="col-sm-3 form-label">Select Date:*</label>
      <div class="col-sm-5">
          <select name="stdate" id="inputDate" class="form-select" required="required" >
          <option value=""> -- Select Date-- </option><option value="03-09-2022">03-09-2022</option>	<option value="05-09-2022">05-09-2022</option><option value="06-09-2022">06-09-2022</option><option value="07-09-2022">07-09-2022</option>	<option value="08-09-2022">08-09-2022</option><option value="09-09-2022">09-09-2022</option><option value="10-09-2022">10-09-2022</option><option value="12-09-2022">12-09-2022</option><option value="13-09-2022">13-09-2022</option><option value="14-09-2022">14-09-2022</option><option value="15-09-2022">15-09-2022</option><option value="16-09-2022">16-09-2022</option><option value="17-09-2022">17-09-2022</option><option value="20-09-2022">20-09-2022</option><option value="23-09-2022">23-09-2022</option><option value="24-09-2022">24-09-2022</option>			  
			</select>			
      </div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />		
	      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-5 text-right">
          <input type="hidden" name="todo" value="showstudentlog" />
          <button type="submit" class="btn btn-secondary">Show Student Log</button>
        </div>
        <div class="col-sm-4">&nbsp;</div>
      </div>
</form>

			 			  </div>
			</div>
			<br />
			
			<div class="card">
			  <div class="card-body">
              <?php
              if(!empty($_POST["stid"]) && !empty($_POST["stdate"])){
              require_once("internship.class.php");
              $obj = new Login();	
              $arr = $obj->readdailylog($_POST["stid"],$_POST["stdate"]);
              echo "<table class='table table-bordered'><tr><th>".$arr[0]['stid']."</th><th>"."   "."</th></tr>";
              echo "<table class='table table-bordered'><tr><th>".'Time / Duration'."</th><th>".'Log'."</th></tr>";
              for($i=0;$i<count($arr);$i++){
                echo "<tr><td>".$arr[$i]["stdate"]." ".$arr[$i]["fromhour"].":".$arr[$i]["frommin"]." - ".$arr[$i]["stdate"]." ".$arr[$i]["tohour"].":".$arr[$i]["tomin"]."</td><td>".$arr[$i]["stlog"]."</td></tr>";
            }
            echo "</table>";
        }
            ?>
							  </div>
			</div>
			
		  </div>
		</div>
    </div>
  <div class="footer dontprint" style="border-top:1px solid #cccccc">  <div class="container">  <div class="row">  <div class="col-sm-6"><br/>  <span class="text-success">&copy; Copyright Makeincollege Software Solutions Pvt. Ltd. | <a href="terms.html">Terms&nbsp;&&nbsp;Conditions</a></span> </div> <div class="col-sm-6" align="right"><br/>  		</div>  	</div>  </div>  </div>  
  <?php
require_once("footer.php");
?>
</body>  </html>
