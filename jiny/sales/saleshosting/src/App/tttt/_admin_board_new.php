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
		
	////////////////////////
	
	$_SESSION['nonce'] = $nonce = md5('goodname'.microtime());

	if($_COOKIE[adminemail]){ ///////////////
		$code = $_GET['code'];
		
		//# 화면 디자인 템플릿을 스킨 읽어옵니다.
		$body = admin_shopskin("admin_board_new");	
  
    	$body=str_replace("{formstart}","<form name='board' method='post' enctype='multipart/form-data' action='admin_board_newup.php'> 
					    				<input type='hidden' name='nonce' value='$nonce'>
					    				<input type='hidden' name='code' value='$code'>
					    				<input type='hidden' name='mode' value='newup'>",$body);
		$body = str_replace("{formend}","</form>",$body);
					
		$body = str_replace("{title}","<input type='text' name='title' $cssFormStyle >",$body);
		
		$body = str_replace("{html}","<textarea name='html' rows='8' style='width:100%'>$html</textarea><script>
            CKEDITOR.replace( 'html' );
        </script>",$body);		
		
		$body = str_replace("{file1}","<input type='file' name='userfile1' >",$body);
		$body = str_replace("{file2}","<input type='file' name='userfile2' >",$body);
		
			
		$body = str_replace("{submit}","<input type='submit' name='reg' value='작성' $css_submit >",$body);
							
		//# 번역스트링 처리
		$body = _adminstring_converting($body);
		
		echo $body;

	
	} else echo "<meta http-equiv='refresh' content='0; url=admin_login.php'>";
	
?>

