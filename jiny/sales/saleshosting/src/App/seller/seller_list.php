<?

    //*  WebLib V1.5
    //*  Program by : hojin lee
    //*  
    //*
    // update : 2016.01.04 = 코드정리 

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

    include ($_SERVER['DOCUMENT_ROOT']."/func/site.php");   // 사이트 환경 설정
        
    include ($_SERVER['DOCUMENT_ROOT']."/func/layout.php");
    include ($_SERVER['DOCUMENT_ROOT']."/func/header.php");
    include ($_SERVER['DOCUMENT_ROOT']."/func/footer.php");
    include ($_SERVER['DOCUMENT_ROOT']."/func/menu.php");
    include ($_SERVER['DOCUMENT_ROOT']."/func/category.php");
    include ($_SERVER['DOCUMENT_ROOT']."/func/skin.php");
    include ($_SERVER['DOCUMENT_ROOT']."/func/pagination.php");

    include ($_SERVER['DOCUMENT_ROOT']."/func/members.php");

	// ================
	// 쇼핑몰 주문 확인 처리
	// ================	

	if(isset($_COOKIE['cookie_email'])){
		include ($_SERVER['DOCUMENT_ROOT']."/conf/sales.php");  

        $body =  _theme_emptybody($skin_name);
    
        // Form and Ajax Process
        $_SESSION['ajaxkey'] = $ajaxkey = md5('ajaxkey'.$_SERVER['PHP_SELF'].$TODAYTIME.microtime()); 
        $body = str_replace("<!--{skin_emptybody}-->","
                    <form name='goods' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='ajaxkey' value='$ajaxkey'>
                        <script>"._javascript_ajax_html("#mainbody","ajax_seller_list.php")."</script>             
                    </form>",$body);
        echo $body;
	
	} else {
		// 사이트 로그인이 안되어 있는 경우, AJAX로 로그인 처리 요청
        $login_script = "<script>"._javascript_ajax_html("#mainbody",$path_ajax_login)."</script>"; 
        $body =  _theme_emptybody($skin_name);
        $body = str_replace("<!--{skin_emptybody}-->",$login_script,$body);
        echo $body; 



		echo $body.$login_script;
	}

		


?>