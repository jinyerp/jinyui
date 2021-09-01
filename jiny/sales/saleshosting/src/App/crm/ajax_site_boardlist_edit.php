<?php

	@session_start();

	include ($_SERVER['DOCUMENT_ROOT']."/conf/dbinfo.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/mysql.php");

	include ($_SERVER['DOCUMENT_ROOT']."/func/datetime.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/file.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/form.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/string.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/javascript.php");

	include ($_SERVER['DOCUMENT_ROOT']."/func/mobile.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/language.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/country.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/currency.php");

	include ($_SERVER['DOCUMENT_ROOT']."/func/site.php");	// 사이트 환경 설정
		
	include ($_SERVER['DOCUMENT_ROOT']."/func/layout.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/header.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/footer.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/menu.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/category.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/skin.php");

	include ($_SERVER['DOCUMENT_ROOT']."/func/error.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/css.php");

	// 환경설정 읽어보기
	require_once ($_SERVER['DOCUMENT_ROOT']."/crm/site_boardlist.cfg.php");

	// 자바스크립트 루틴 : form edit
	require_once("inc.javascript_edit.php");


	
	
	//********** Ajax Process **********
	$ajaxkey = _formdata("ajaxkey");
	if(isset($_SESSION['ajaxkey']) == $ajaxkey) { // Ajax CallKey Securities Checking...

		// Sales 사용자 DB 접근.
		include ($_SERVER['DOCUMENT_ROOT']."/conf/sales.php");


		// POST키값을 기준으로 변수 = 값 지정.
		// hidden 값으로 처리
		$arr = array_keys($_POST);
		for($i=0;$i<count( $arr );$i++){
			$key_name = $arr[$i];
			${$key_name} = _formdata($key_name);

			if($key_name == "mode"){

			} else if($key_name == "uid"){

			} else if($key_name == "limit"){

			} else 
			$hidden .= "<input type='hidden' name='".$key_name."' value='".${$key_name}."'>";
		}
	
		// 템플릿 디자인 읽기
		$body = $javascript._theme_page($site_env->theme,$_tableName."_edit",$site_language,$site_mobile);
		$body = str_replace("<!--{#side_menu}-->", _submenu($_current_menuCode,$site_language,$submenu_id),$body);

		

		// $hidden .= "<input type='hidden' name='mode' value='$mode'>";
		$hidden .= "<input type='hidden' name='uid' value='$uid'>";
		$hidden .= "<input type='hidden' name='limit' value='$limit'>";

		$body = str_replace("{formstart}","<form id='data' name='sales' method='post' enctype='multipart/form-data'>".$hidden,$body);
		$body = str_replace("{formend}","</form>",$body);
		

		$query = "select * from $_tableName where Id = '$uid'"; 
		$_log_history .= $query."<br>";
    	if($rows= _sales_query_rows($query)){
    		// ******
    		// 수정모드
    		$form_submit  = "<input type='button' value='수정' onclick=\"javascript:form_submit('edit','".$uid."')\" id=\"css_btn_edit\"> &nbsp;&nbsp;";
			$form_submit .= "<input type='button' value='삭제' onclick=\"javascript:form_submit('delete','".$uid."')\" id=\"css_btn_delete\" >";
    		$body = str_replace("{form_submit}",$form_submit,$body);
    		
    		if($rows->enable) $body = str_replace("{enable}",_form_check_enable("on"),$body);
			else $body = str_replace("{enable}",_form_check_enable(""),$body);

    	} else {
    		// ******
    		// 신규모드
    		$form_submit  = "<input type='button' value='저장' onclick=\"javascript:form_submit('new','".$uid."')\" id=\"css_btn_edit\">";
    		$body = str_replace("{form_submit}",$form_submit,$body);
    		
    		$body = str_replace("{enable}",_form_check_enable("on"),$body);

    	}	
		
		

		
    	$body = str_replace("{youtube_manual}","<a href='#' onclick=\"javascript:youtube_manual('sales_business_edit')\"><img src='../images/youtube.jpg' border='0' width='30'> 메뉴얼</a>",$body);

    	// 폼문 인크루드 처리 
		// require_once("inc_form_loop.php");
		require_once("inc.form_loop.php");

		echo $body;

	} else {
		include ($_SERVER['DOCUMENT_ROOT']."/site/ajax_error.php");
	}	

	
?>

