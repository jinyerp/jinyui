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
		$body = admin_shopskin("admin_designblock");	 
		$body = str_replace("{new}",skin_button("블럭추가","admin_designblock_new.php"),$body);  
		
	
		$query = "SELECT * FROM `shop_designblock` ";
		$result=mysql_db_query($mysql_dbname,str_replace("*","count(*)",$query),$connect);
    	$total=mysql_result($result,0,0);
		
		$result=mysql_db_query($mysql_dbname,$query,$connect);
		if(mysql_affected_rows()) {
		
			for($i=0,$j=1;$i<$total;$i++,$j++){
				$rows=mysql_fetch_array($result);
				
				$listform = admin_bodyskin("admin_designblock_list","pc","ko");
				
				if($rows[enable]) $listform = str_replace("{en}","▣",$listform);
				else $listform = str_replace("{en}","□",$listform);	
				
				$listform = str_replace("{code}","<a href='admin_designblock_edit.php?UID=$rows[Id]'>$rows[code]</a>",$listform);
				
			
				$list .= $listform;	
				
			}
			$body = str_replace("{datalist}","$list",$body); //# 완성된 LIST를 치환합니다.
		}
		
		
		
		//# 번역스트링 처리
		$body = _adminstring_converting($body);
					 
		echo $body;
	
	
		
	} else echo "<meta http-equiv='refresh' content='0; url=admin_login.php'>";
	


?>
