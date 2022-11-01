<?php
session_start();
$err = '';

if(!empty($_POST["id"]) && !empty($_POST["pwd"])){
	
	require_once("internship.class.php");
	$obj = new Login();	
	$res = $obj->checkLogin($_POST["id"],$_POST["pwd"]);

	if($res==1){
		$_SESSION["user"] = $_POST["id"];
		header('Location: internshiphome.php');
	}else{
		$err = "Invalid Credentials";
	}
}
require_once("head.php");
?>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<br/><br/><br/><h2 class="text-center">Login Page</h2>
		<form action="index.php" method="post">
			<input class="form-control" type="text" name="id" placeholder="Enter Id" /><br />
			<input type="password" class="form-control" name="pwd" placeholder="Enter Password" /><br />
			<input type="submit" value="Login" class="btn btn-outline-success" />
		</form>
			<?php
			if(!empty($err)){
				echo '<div class="alert alert-danger">'.$err.'</div>';
			}
			?>		
	</div>
	</div class="col-sm-3"></div>
</div>

<?php
require_once("footer.php");
?>