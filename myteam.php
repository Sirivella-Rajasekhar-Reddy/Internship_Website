<?php
session_start();
require_once("head.php");
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

  </head>
  <body>
		<br />    <div class="container-fluid font16">
        <div class="row row-offcanvas row-offcanvas-left">
		  <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="list-group dontprint">
			  <span class="list-group-item">
        <?php
          echo $_SESSION["user"];
        ?>
        </span>
<a href="internshiphome.php"  class='list-group-item' >Home</a>
<a href="myprofile.php"  class='list-group-item' >My Profile</a>
<a href="myteam.php"  class='list-group-item active' >My Team</a>
<a href="mylogs.php"  class='list-group-item' >My Achievements & Notice(s)</a>
<a href="addstdailylog.php"  class='list-group-item' >Add Daily Log</a>
<a href="showmydailylog.php"  class='list-group-item' >Show My Daily Log</a>
<a href="dailyscrumvlog.php"  class='list-group-item' >Daily Scrum V-Log</a>
<a href="internshippwdchange.php"  class='list-group-item' >Change Password</a>
<a href="internshiplogout.php" class="list-group-item" >Logout</a>
			</div>
		  </div><!--/span-->

		  <div class="col-xs-12 col-sm-9">
			<div class="card">
			  <div class="card-header ">
				My Team
			  </div>
			  <div class="card-body">
          <?php
          if($_SESSION["user"]=="M0100007" || $_SESSION["user"]=="M0100008" || $_SESSION["user"]=="M0100011" || $_SESSION["user"]=="M0100014" || $_SESSION["user"]=="M0100017"){
            echo "<div></div><div class='row'><div class='col-sm-4'><a href='./stinfo.php?htno=M0100007' ><div class='card'><div class='card-header text-center'><h4>"."M0100007"."</h4><h5>"."GOWNI SAIKRISHNA "."</h5></div></div></a></div><div class='col-sm-4'><a href='./stinfo.php?htno=M0100008' ><div class='card'><div class='card-header text-center'><h4>"."M0100008"."</h4><h5>"."SIRIVELLA RAJASEKHAR REDDY"."</h5></div></div></a></div><div class='col-sm-4'><a href='./stinfo.php?htno=M0100011' ><div class='card'><div class='card-header text-center'><h4>"."M0100011"."</h4><h5>"."Bakka Manohar"."</h5></div></div></a></div></div><div class='row'><div class='col-sm-4'><a href='./stinfo.php?htno=M0100014' ><div class='card'><div class='card-header text-center'><h4>M0100014</h4><h5>BUDILI HARISH</h5></div></div></a></div><div class='col-sm-4'><a href='./stinfo.php?htno=M0100017' ><div class='card'><div class='card-header text-center'><h4>M0100017</h4><h5>Mude Shankar Naik</h5></div></div></a></div></div>			  </div>";
          }
          if($_SESSION["user"]=="M0100001" || $_SESSION["user"]=="M0100004" || $_SESSION["user"]=="M0100006" || $_SESSION["user"]=="M0100013" || $_SESSION["user"]=="M0100018"){
            echo "<div></div><div class='row'><div class='col-sm-4'><a href='./stinfo.php?htno=M0100001' ><div class='card'><div class='card-header text-center'><h4>"."M0100001"."</h4><h5>"."Gulimcherla Roopesh Reddy "."</h5></div></div></a></div><div class='col-sm-4'><a href='./stinfo.php?htno=M0100004' ><div class='card'><div class='card-header text-center'><h4>"."M0100004"."</h4><h5>"."Vuruturu Syam Sundar"."</h5></div></div></a></div><div class='col-sm-4'><a href='./stinfo.php?htno=M0100006' ><div class='card'><div class='card-header text-center'><h4>"."M0100006"."</h4><h5>"."Adnan Hussain H Md"."</h5></div></div></a></div></div><div class='row'><div class='col-sm-4'><a href='./stinfo.php?htno=M0100013' ><div class='card'><div class='card-header text-center'><h4>M0100013</h4><h5>Paluri Venkata Sumanth</h5></div></div></a></div><div class='col-sm-4'><a href='./stinfo.php?htno=M0100018' ><div class='card'><div class='card-header text-center'><h4>M0100018</h4><h5>Inayat Ayaz Ganaie</h5></div></div></a></div></div>			  </div>";
          }
          if($_SESSION["user"]=="M0100002" || $_SESSION["user"]=="M0100009" || $_SESSION["user"]=="M0100010" || $_SESSION["user"]=="M0100012" || $_SESSION["user"]=="M0100016"){
            echo "<div></div><div class='row'><div class='col-sm-4'><a href='./stinfo.php?htno=M0100002' ><div class='card'><div class='card-header text-center'><h4>"."M0100002"."</h4><h5>"."Sake Chanakya Sai "."</h5></div></div></a></div><div class='col-sm-4'><a href='./stinfo.php?htno=M0100009' ><div class='card'><div class='card-header text-center'><h4>"."M0100009"."</h4><h5>"."Mohammed Imthiyaz Basha"."</h5></div></div></a></div><div class='col-sm-4'><a href='./stinfo.php?htno=M0100010' ><div class='card'><div class='card-header text-center'><h4>"."M0100010"."</h4><h5>"."Sasi Mahendran Sasankan Lakshman"."</h5></div></div></a></div></div><div class='row'><div class='col-sm-4'><a href='./stinfo.php?htno=M0100012' ><div class='card'><div class='card-header text-center'><h4>M0100012</h4><h5>Ismail Mohamed Haji Yusuf</h5></div></div></a></div><div class='col-sm-4'><a href='./stinfo.php?htno=M0100016' ><div class='card'><div class='card-header text-center'><h4>M0100016</h4><h5>Palle Nithin Kumar</h5></div></div></a></div></div>			  </div>";
          }
				//<div></div><div class="row"><div class="col-sm-4"><a href="./stinfo.php?htno=M0100007" ><div class="card"><div class="card-header text-center"><h4>M0100007</h4><h5>GOWNI SAIKRISHNA </h5></div></div></a></div><div class="col-sm-4"><a href="./stinfo.php?htno=M0100008" ><div class="card"><div class="card-header text-center"><h4>M0100008</h4><h5>SIRIVELLA RAJASEKHAR REDDY</h5></div></div></a></div><div class="col-sm-4"><a href="./stinfo.php?htno=M0100011" ><div class="card"><div class="card-header text-center"><h4>M0100011</h4><h5>Bakka Manohar</h5></div></div></a></div></div><div class="row"><div class="col-sm-4"><a href="./stinfo.php?htno=M0100014" ><div class="card"><div class="card-header text-center"><h4>M0100014</h4><h5>BUDILI HARISH</h5></div></div></a></div><div class="col-sm-4"><a href="./stinfo.php?htno=M0100017" ><div class="card"><div class="card-header text-center"><h4>M0100017</h4><h5>Mude Shankar Naik</h5></div></div></a></div></div>			  </div>
        ?>
        </div>
		  </div>
		</div>
    </div>
  <div class="footer dontprint" style="border-top:1px solid #cccccc">  <div class="container">  <div class="row">  <div class="col-sm-6"><br/>  <span class="text-success">&copy; Copyright Makeincollege Software Solutions Pvt. Ltd. | <a href="terms.html">Terms&nbsp;&&nbsp;Conditions</a></span> </div> <div class="col-sm-6" align="right"><br/>  		</div>  	</div>  </div>  </div>  
  <?php
require_once("footer.php");
?>
</body>  </html>
