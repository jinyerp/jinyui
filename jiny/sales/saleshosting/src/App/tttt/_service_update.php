<?

	//*  OpenShopping V2.1
	//*  Program by : hojin lee
	//*  2016.01.11 
	//*

	//* 리셀러별 회원 고객 서비스 목록 
	//* 2016.01.27 : 생성 

	@session_start();
	
	include "./conf/dbinfo.php";
	include "./func/mysql.php";

	include "./func/datetime.php";
	include "./func/file.php";
	include "./func/form.php";
	include "./func/string.php";
	include "./func/javascript.php";
	
	include "./func/mobile.php";
	include "./func/language.php";
	include "./func/country.php";

	include "./func/site.php";	// 사이트 환경 설정

	include "./func/layout.php";
	include "./func/header.php";
	include "./func/footer.php";
	include "./func/menu.php";
	include "./func/category.php";
	include "./func/skin.php";

	include "./func/css.php";


	if(isset($_COOKIE['cookie_email'])){

		$body =  _skin_emptybody($skin_name);

		$_SESSION['ajaxkey'] = $ajaxkey = md5('ajaxkey'.$_SERVER['PHP_SELF'].$TODAYTIME.microtime()); 
		$javascript  = "<form id=\"data\" name='hosting' method='post' enctype='multipart/form-data'>";
		$javascript .= "<input type='hidden' name='ajaxkey' value='".$ajaxkey."'>";
		$javascript .= "<script>"._javascript_ajax_html("#mainbody","/ajax_service_update.php")."</script>";			
		$javascript .= "</form>";
		$body = str_replace("<!--{skin_emptybody}-->",$javascript,$body);
		
		echo $body;

	
	} else {
		// 사이트 로그인이 안되어 있는 경우, AJAX로 로그인 처리 요청
		$login_script = "<script>"._javascript_ajax_html("#mainbody","/ajax_login.php")."</script>";	
		$body =  _skin_emptybody($skin_name);
		$body = str_replace("<!--{skin_emptybody}-->",$login_script,$body);
		echo $body;
	}

		


?>