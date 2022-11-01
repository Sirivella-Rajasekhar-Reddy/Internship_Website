<?php
session_start();
if(!empty($_GET['htno'])){
  echo "raju";
  require_once("internship.class.php");
  $obj=new Login();
  $arr=$obj->readdata($_GET["htno"]);
  $x=0;
  for($i=0;$i<count($arr);$i++){
    if($arr[$i]["id"]==$_GET["htno"]){
      $x=1;
    }
  }
  if($x==0){
    header('Location: adddetails.php');
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
        <div class="row row-offcanvas row-offcanvas-left">

                  <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                    <div class="list-group dontprint">
                      <span class="list-group-item">
                      <?php
                echo $_SESSION["user"];
                ?>
                      </span>
<a href="internshiphome.php"  class='list-group-item' >Home</a>
<a href="myprofile.php"  class='list-group-item active' >My Profile</a>
<a href="myteam.php"  class='list-group-item' >My Team</a>
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
                      <div class="card-body">
                        <style>
@media (min-width: 768px){
  .form-horizontal .control-data {
    padding-top: 7px;
  }
}
</style>
<form class="form-horizontal" role="form" action="myteam.php" method="post" enctype="multipart/form-data">

    <div class="row">
      <label for="inputHtno" class="col-sm-3 control-label">Intern ID</label>
      <div class="col-sm-5 control-data"><?php echo $arr[0]["id"]; ?> </div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />
    <div class="row">
      <label for="inputName" class="col-sm-3 control-label">Student Name</label>
      <div class="col-sm-5 control-data"><?php echo $arr[0]["name"]; ?></div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />
    <div class="row">
      <label for="inputFName" class="col-sm-3 control-label">Father Name</label>
      <div class="col-sm-5 control-data"><?php echo $arr[0]["fname"]; ?></div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />
    <div class="row">
      <label for="inputGender" class="col-sm-3 control-label">Gender</label>
      <div class="col-sm-5 control-data"><?php echo $arr[0]["gender"]; ?></div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />
    <div class="row">
      <label for="inputGender" class="col-sm-3 control-label">Contact</label>
      <div class="col-sm-5 control-data"><?php echo $arr[0]["num"]; ?></div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />
    <div class="row">
      <label for="inputEmail" class="col-sm-3 control-label">Email</label>
      <div class="col-sm-5 control-data"><?php echo $arr[0]["email"]; ?></div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
	<br />
    <div class="row">
      <label for="inputWebsite" class="col-sm-3 control-label">Website</label>
      <div class="col-sm-5 control-data">
        <a href="<?php echo $arr[0]["name"]; ?>" target="_blank"><?php echo $arr[0]["website"]; ?></a>      </div>
      <div class="col-sm-4">&nbsp;
      </div>
    </div>
</form>

<form class="form-horizontal" role="form" action="editdetails.php" method="post" enctype="multipart/form-data"><input type="hidden" name="htno" value="M0100008" /><div class="form-group"><div class="col-sm-3"></div><div class="col-sm-5 text-right"><input type="hidden" name="todo" value="gotoedit" /><button type="submit" class="btn btn-secondary">Edit Details</button></div><div class="col-sm-4">&nbsp;</div></div></form>                      </div>
                    </div>
                  </div>
            </div>
    </div>

  <div class="footer dontprint" style="border-top:1px solid #cccccc">  <div class="container">  <div class="row">  <div class="col-sm-6"><br/>  <span class="text-success">&copy; Copyright Makeincollege Software Solutions Pvt. Ltd. | <a href="terms.html">Terms&nbsp;&&nbsp;Conditions</a></span> </div> <div class="col-sm-6" align="right"><br/>  		</div>  	</div>  </div>  </div>  
  <?php
require_once("head.php");
?>
</body>  </html>
