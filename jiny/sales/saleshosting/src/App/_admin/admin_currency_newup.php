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

		
	////////////////////////
	
	if($_COOKIE[adminemail]){ ///////////////
	
	
		if($_SESSION['nonce'] != $_POST['nonce']){
			$_SESSION['nonce'] = NULL;	
			echo "<meta http-equiv='refresh' content='0; url=admin_currency.php'>";

		} else {
		///////////////////////////
		// 섹션 중복처리 방지 기능
	
			$_SESSION['nonce'] = NULL;

			$currency = $_POST['currency'];
    		$currencyid = $_POST['currencyid'];
    		$currencyname = $_POST['currencyname'];
    		$enable = $_POST['enable'];
    		
    		$currency_align = $_POST['currency_align'];
			$currency_mark = $_POST['currency_mark'];
			$currency_rate = $_POST['currency_rate'];	
    						

			if(!$currency) msg_alert("오류! 통화코드 없습니다.");
    		else {
    			$query = "INSERT INTO `shop_currency` (`currency`, `currencyid`, `name`, `enable`, `currency_align`, `currency_mark`, `currency_rate`) 
    			VALUES ('$currency', '$currencyid', '$currencyname', '$enable', '$currency_align', '$currency_mark', '$currency_rate');";
				mysql_db_query($mysql_dbname,$query,$connect);    				
			}    						    			
    						    			
    		// echo "<meta http-equiv='refresh' content='0; url=admin_currency.php'>";
    		page_back2();
    	

		///// ##### SESSION END ##### /////
			
		}
	
	} else echo "<meta http-equiv='refresh' content='0; url=admin_login.php'>";
	
?>
