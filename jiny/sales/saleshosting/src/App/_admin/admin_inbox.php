<?
	//* ////////////////////////////////////////////////////////////
	//* salesking 다국어 쇼핑몰 V 1.0 
	//* 2014.12.30
	//* Program By : hojin lee 
	//*
	
	@session_start();
	
	include "../dbinfo.php";
	$connect=mysql_connect($mysql_localhost,$mysql_user,$mysql_password) or die("Source database can not connect.");
	
	include "../language.php"; //# 사이트 언어, 지역 설정
	include "../mobile.php";

	include "./func_adminskin.php"; //# 스킨 레이아웃 함수들...
	
	include "../func_files.php"; 
	include "../func_datetime.php";
	include "../func_javascript.php";
	
	include "./func_adminstring.php";
	
	if($_COOKIE[adminemail]){ ///////////////
	
    	//# 화면 디자인 템플릿을 스킨 읽어옵니다.
		$body = admin_shopskin("admin_inbox");
		
		$body = str_replace("{status}",$_GET['status'],$body); 
		
		$query = "select * from `shop_apibox` ";
		$result=mysql_db_query($mysql_dbname,str_replace("*","count(*)",$query),$connect);
    	$total=mysql_result($result,0,0);
		
		$result=mysql_db_query($mysql_dbname,$query,$connect);
		if(mysql_affected_rows()) {
			for($i=0;$i<$total;$i++){
				$rows=mysql_fetch_array($result);
				
				if($MOBILE == "mobile") {
					$list .= "<table border='0' cellpadding='5' cellspacing='5' width='100%'><tr>";
					$list .= "<td width='150' bgcolor='ffffff'> <font size=2> $rows[apiname]</font></td>";
					$list .= "<td bgcolor='ffffff'> <font size=2> <a href='admin_inboxedit.php?UID=$rows[Id]'>$rows[addesskey]</a></font></td>";
				
					$list .= "</tr></table>";
				
					$list .= "<table border='0' width='100%' cellspacing='0' cellpadding='0' bgcolor='#e4e4e3' height='1'><tr><td></td></tr></table>";
		
				} else {
					$list .= "<table border='0' cellpadding='5' cellspacing='5' width='100%'><tr>";
					$list .= "<td width='150' bgcolor='ffffff'> <font size=2> $rows[apiname]</font></td>";
					$list .= "<td bgcolor='ffffff'> <font size=2> <a href='admin_inboxedit.php?UID=$rows[Id]'>$rows[accesskey]</a></font></td>";
				
					$list .= "</tr></table>";
				
					$list .= "<table border='0' width='100%' cellspacing='0' cellpadding='0' bgcolor='#e4e4e3' height='1'><tr><td></td></tr></table>";
				
				}
			}
		}
		
		$body = str_replace("{datalist}","$list",$body); 
	 
		//# 번역스트링 처리
		$body = _adminstring_converting($body);
		
		echo $body;
	
	
		
	} else echo "<meta http-equiv='refresh' content='0; url=admin_login.php'>";
	


?>