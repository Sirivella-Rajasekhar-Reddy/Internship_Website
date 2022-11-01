<?php
session_start();
$err = "";
$succ = "";
if(!empty($_POST["dailyscrumdate"]) && !empty($_POST["video_url"])){
	require_once("internship.class.php");
	$obj = new Login();	
	$res = $obj->addscrumvlog($_POST["dailyscrumdate"],$_POST["video_url"]);
	if($res==1){
		$succ="Your daily scrum vlog inserted.";
	}else{
		$err = "Invalid Credentials";
	}
}
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
<a href="showmydailylog.php"  class='list-group-item' >Show My Daily Log</a>
<a href="dailyscrumvlog.php"  class='list-group-item active' >Daily Scrum V-Log</a>
<a href="internshippwdchange.php"  class='list-group-item' >Change Password</a>
<a href="internshiplogout.php" class="list-group-item" >Logout</a>
			</div>
		  </div><!--/span-->

		  <div class="col-xs-12 col-sm-9">
			  		  
			<div class="card">
			  <div class="card-header ">

        <?php
          if($_SESSION["user"]=="M0100007" || $_SESSION["user"]=="M0100008" || $_SESSION["user"]=="M0100011" || $_SESSION["user"]=="M0100014" || $_SESSION["user"]=="M0100017"){
				    echo "Add Daily Scrum VLogs ( Team-1 )";
          }
          if($_SESSION["user"]=="M0100001" || $_SESSION["user"]=="M0100004" || $_SESSION["user"]=="M0100006" || $_SESSION["user"]=="M0100013" || $_SESSION["user"]=="M0100018"){
            echo "Add Daily Scrum VLogs ( Team-2 )";          
          }
          if($_SESSION["user"]=="M0100002" || $_SESSION["user"]=="M0100009" || $_SESSION["user"]=="M0100010" || $_SESSION["user"]=="M0100012" || $_SESSION["user"]=="M0100016"){
            echo "Add Daily Scrum VLogs ( Team-3 )";          
          }
        ?>	
				
			  </div>
			  <div class="card-body">

<form class="form-horizontal" role="form" action="dailyscrumvlog.php" method="post">

    <div class="row">
      <label for="inputDate" class="col-sm-3 form-label">Select Date:*</label>
      <div class="col-sm-5">
          <select name="dailyscrumdate" id="inputDate" class="form-select" required="required" />
				<option value=""> -- Select Date-- </option><option value="03-09-2022">03-09-2022</option>	<option value="05-09-2022">05-09-2022</option><option value="06-09-2022">06-09-2022</option><option value="07-09-2022">07-09-2022</option>	<option value="08-09-2022">08-09-2022</option><option value="09-09-2022">09-09-2022</option><option value="10-09-2022">10-09-2022</option><option value="12-09-2022">12-09-2022</option><option value="13-09-2022">13-09-2022</option><option value="14-09-2022">14-09-2022</option><option value="15-09-2022">15-09-2022</option><option value="16-09-2022">16-09-2022</option><option value="17-09-2022">17-09-2022</option><option value="20-09-2022">20-09-2022</option><option value="23-09-2022">23-09-2022</option><option value="24-09-2022">24-09-2022</option>			  
			</select>		  		
      </div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />	
	<div class="row">
      <label for="inputId" class="col-sm-3 form-label">VLog URL (Youtube):*</label>
      <div class="col-sm-5">
          <input type="text" name="video_url" class="form-control" maxlength="60" required="required" />
      </div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />
	
	      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-5 text-right">
          <input type="hidden" name="todo" value="addvlog" />
          <button type="submit" class="btn btn-secondary">Submit Daily Scrum V-Log</button>
        </div>
        <div class="col-sm-4">&nbsp;</div>
      </div>
</form>
      <?php
			if(!empty($err)){
				echo '<div class="alert alert-danger">'.$err.'</div>';
			}
      if(!empty($succ)){
				echo '<div class="alert alert-success">'.$succ.'</div>';
			}
			?>
			 			  </div>
			</div>
			<br />
				
			<div class="card">
			  <div class="card-header ">
				Daily Scrum VLogs ( Team-1 )
			  </div>
			  <div class="card-body">
        <?php
        require_once("internship.class.php");
        if($_SESSION["user"]=="M0100007" || $_SESSION["user"]=="M0100008" || $_SESSION["user"]=="M0100011" || $_SESSION["user"]=="M0100014" || $_SESSION["user"]=="M0100017"){
          $obj = new Login();	
          $arr = $obj->readscrumvlog();
          echo "<table class='table table-bordered'><tr><th>".'Date'."</th><th>".'Video Link'."</th></tr>";
          for($i=0;$i<count($arr);$i++){
            $x=$arr[$i]['video_url'];
            echo "<tr><td>".$arr[$i]["dailyscrumdate"]."</td><td><a href='$x' target='_blank'>".$arr[$i]["video_url"]."</td></tr>";
          }
          echo "</table>";
        }
        if($_SESSION["user"]=="M0100001" || $_SESSION["user"]=="M0100004" || $_SESSION["user"]=="M0100006" || $_SESSION["user"]=="M0100013" || $_SESSION["user"]=="M0100018"){
          $obj = new Login();	
          $arr = $obj->readscrumvlog2();
          echo "<table class='table table-bordered'><tr><th>".'Date'."</th><th>".'Video Link'."</th></tr>";
          for($i=0;$i<count($arr);$i++){
            $x=$arr[$i]['video_url'];
            echo "<tr><td>".$arr[$i]["dailyscrumdate"]."</td><td><a href='$x' target='_blank'>".$arr[$i]["video_url"]."</td></tr>";
          }
          echo "</table>";         
        }
        if($_SESSION["user"]=="M0100002" || $_SESSION["user"]=="M0100009" || $_SESSION["user"]=="M0100010" || $_SESSION["user"]=="M0100012" || $_SESSION["user"]=="M0100016"){
          $obj = new Login();	
          $arr = $obj->readscrumvlog3();
          echo "<table class='table table-bordered'><tr><th>".'Date'."</th><th>".'Video Link'."</th></tr>";
          for($i=0;$i<count($arr);$i++){
            $x=$arr[$i]['video_url'];
            echo "<tr><td>".$arr[$i]["dailyscrumdate"]."</td><td><a href='$x' target='_blank'>".$arr[$i]["video_url"]."</td></tr>";
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
