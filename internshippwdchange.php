<?php
session_start();

if(!empty($_POST["pwd"]) && !empty($_POST["npwd"]) && !empty($_POST["cnpwd"])){
    require_once("internship.class.php");
    $obj=new Login();
    $x=$obj->changepwd($_SESSION["user"],$_POST["pwd"],$_POST["npwd"]);
    if($x==1){
		$succ="Your Password Changed Successfully";
	}else{
		$err = "Invalid Password";
	}
}
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
<a href="myteam.php"  class='list-group-item' >My Team</a>
<a href="mylogs.php"  class='list-group-item' >My Achievements & Notice(s)</a>
<a href="addstdailylog.php"  class='list-group-item' >Add Daily Log</a>
<a href="showmydailylog.php"  class='list-group-item' >Show My Daily Log</a>
<a href="dailyscrumvlog.php"  class='list-group-item' >Daily Scrum V-Log</a>
<a href="internshippwdchange.php"  class='list-group-item active' >Change Password</a>
<a href="internshiplogout.php" class="list-group-item" >Logout</a>
                    </div>
                  </div><!--/span-->

                  <div class="col-xs-12 col-sm-9">
                    <div class="card">
                      <div class="card-header">
                        Change Password
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-3"></div>
                          <div class="col-sm-6">
                              <form class="form-signin" role="form" action="internshippwdchange.php" method="post"><br/>
                                  <input type="password" class="form-control" placeholder="Existing Password" name="pwd" required autofocus aria-describedby="sizing-addon2">
                                <br/>
                                  <input type="password" class="form-control" placeholder="New Password" name="npwd" required autofocus aria-describedby="sizing-addon2">
                                <br/>
                                  <input type="password" class="form-control" placeholder="Confirm New Password" name="cnpwd" required autofocus aria-describedby="sizing-addon2">
                                <br/>
                                <button class="btn btn-md btn-outline-success" type="submit">Confirm Update</button>
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
                          <div class="col-sm-3"></div>
                        </div>
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
