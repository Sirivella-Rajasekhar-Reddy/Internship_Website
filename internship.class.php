<?php
class Login{
	public function checkLogin($id, $pwd){
		$return_val = 0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry = $obj->prepare("select id from logindb where id=? and pwd=?");
			$qry->bind_param("ss",$id,$pwd);
			if($qry->execute()){
				$qry->bind_result($ids);
				while($qry->fetch()){
					$return_val = 1;
				}
			}
		}catch(exception $e){
		}	
		return $return_val;
	}
    public function changepwd($id,$pwd,$npwd){
        $return_val=0;
        try{
            $obj=new mysqli("localhost","root","","internshipdb");
            $qry=$obj->prepare("update logindb set pwd=? where id=? and pwd=?");
            $qry->bind_param("sss",$npwd,$id,$pwd);
            if($qry->execute()){
				$return_val = 1;
            }
        }catch(exception $e){            
        }
        return $return_val;
    }
	public function adddetails($id, $name,$fname,$gender,$num,$email,$website){
		$return_val = 0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry = $obj->prepare("insert into adddetailsdb(id,name,fname,gender,num,email,website) values(?,?,?,?,?,?,?)");
			$qry->bind_param("sssssss",$id, $name,$fname,$gender,$num,$email,$website);
			if($qry->execute()){
				$return_val=1;
			}
		}catch(exception $e){
		}	
		return $return_val;
	}
	public function modifydetails($id, $name,$fname,$gender,$num,$email,$website,$k){
		$return_val = 0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry = $obj->prepare("update adddetailsdb set id=?,name=?,fname=?,gender=?,num=?,email=?,website=? where id=?");
			$qry->bind_param("ssssssss",$id, $name,$fname,$gender,$num,$email,$website,$k);
			if($qry->execute()){
				$return_val=1;
			}
		}catch(exception $e){
		}	
		return $return_val;
	}
	public function readdata($k){
		$arr=array();
		$i=0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry=$obj->prepare("SELECT * FROM adddetailsdb WHERE id=? ");
			$qry->bind_param("s",$k);
			if($qry->execute())
			{   
				$qry->bind_result($id, $name,$fname,$gender,$num,$email,$website);
				
				while($qry->fetch())
				{
					$arr[$i]=array();
					$arr[$i]["id"]=$id;
					$arr[$i]["name"]=$name;
					$arr[$i]["fname"]=$fname;
					$arr[$i]["gender"]=$gender;
					$arr[$i]["num"]=$num;
					$arr[$i]["email"]=$email;
					$arr[$i]["website"]=$website;
					$i++;
				}
				return $arr;
			}
		}catch(exception $e){
		}
	}
	public function addscrumvlog($x,$y){
		$return_val=0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry = $obj->prepare("insert into scrumdb(dailyscrumdate,video_url) values(?,?)");
			$qry->bind_param("ss",$x,$y);
			if($qry->execute()){
				$return_val=1;
			}
			return $return_val;

		}catch(exception $e){
		}
	}
	public function readscrumvlog(){
		$arr=array();
		$i=0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry=$obj->prepare("SELECT dailyscrumdate,video_url from scrumdb");
			$qry->execute();
			$qry->bind_result($dailyscrumdate,$video_url);
			while($qry->fetch())
			{
				$arr[$i]=array();
				$arr[$i]["dailyscrumdate"]=$dailyscrumdate;
				$arr[$i]["video_url"]=$video_url;
				$i++;
			}
			return $arr;
		}catch(exception $e){
		}
	}
	public function readscrumvlog2(){
		$arr=array();
		$i=0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry=$obj->prepare("SELECT dailyscrumdate,video_url from scrumdb2");
			$qry->execute();
			$qry->bind_result($dailyscrumdate,$video_url);
			while($qry->fetch())
			{
				$arr[$i]=array();
				$arr[$i]["dailyscrumdate"]=$dailyscrumdate;
				$arr[$i]["video_url"]=$video_url;
				$i++;
			}
			return $arr;
		}catch(exception $e){
		}
	}
	public function readscrumvlog3(){
		$arr=array();
		$i=0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry=$obj->prepare("SELECT dailyscrumdate,video_url from scrumdb3");
			$qry->execute();
			$qry->bind_result($dailyscrumdate,$video_url);
			while($qry->fetch())
			{
				$arr[$i]=array();
				$arr[$i]["dailyscrumdate"]=$dailyscrumdate;
				$arr[$i]["video_url"]=$video_url;
				$i++;
			}
			return $arr;
		}catch(exception $e){
		}
	}
	public function adddailylog($stid,$stdate,$fromhour,$frommin,$tohour,$tomin,$stlog){
		$return_val=0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry = $obj->prepare("insert into dailylogdb(stid,stdate,fromhour,frommin,tohour,tomin,stlog) values(?,?,?,?,?,?,?)");
			$qry->bind_param("sssssss",$stid,$stdate,$fromhour,$frommin,$tohour,$tomin,$stlog);
			if($qry->execute()){
				$return_val=1;
			}
			return $return_val;

		}catch(exception $e){
		}
	}
	public function readdailylog($stid,$stdate){
		$arr=array();
		$i=0;
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry=$obj->prepare("SELECT * FROM dailylogdb where stid=? and stdate=? ");
			$qry->bind_param("ss",$stid,$stdate);
			if($qry->execute())
			{   
				$qry->bind_result($stid,$stdate,$fromhour,$frommin,$tohour,$tomin,$stlog);
				while($qry->fetch())
				{
					$arr[$i]=array();
					$arr[$i]["stid"]=$stid;
				    $arr[$i]["stdate"]=$stdate;
				    $arr[$i]["fromhour"]=$fromhour;
					$arr[$i]["frommin"]=$frommin;
				    $arr[$i]["tohour"]=$tohour;
				    $arr[$i]["tomin"]=$tomin;
					$arr[$i]["stlog"]=$stlog;
				    $i++;
				}
			return $arr;
			}
		}catch(exception $e){
		}
	}
	public function readachievements($k){
		$succ="";
		try{
			$obj = new mysqli("localhost","root","","internshipdb");
			$qry=$obj->prepare("SELECT acievement FROM achievements WHERE stid=? ");
			$qry->bind_param("s",$k);
			if($qry->execute())
			{   
				$qry->bind_result($acievement);
				
				while($qry->fetch())
				{
					$succ=$acievement;
				}
				echo $succ;
				return $succ;
			}
		}catch(exception $e){
		}
	}
	
}

?>