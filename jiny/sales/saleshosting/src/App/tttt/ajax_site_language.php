<?

	@session_start();
	
	//********** Ajax Process **********
	if(isset($_SESSION['ajaxkey']) == isset($_POST['ajaxkey'])) { // Ajax CallKey Securities Checking...
		
		include "./conf/dbinfo.php";
		include "./func/mysql.php";

		include "./func/file.php";
		include "./func/form.php";
		
	include "./func/mobile.php";
	include "./func/language.php";
	include "./func/country.php";
	include "./func/site.php";
	include "./func/layout.php";
	include "./func/header.php";
	include "./func/footer.php";
	include "./func/menu.php";
	include "./func/category.php";
	include "./func/skin.php";

	include "./func/error.php";
	
		include "./func/datetime.php";
		include "./func/goods.php";
		include "./func/orders.php";
	
		// Sales 사용자 DB 접근.
		include "./sales.php";

		
		if(isset($_SESSION['language'])){
			$site_language = $_SESSION['language'];
		} else {
			$site_language = "ko";
		}

		// 장바구니 섹션 존재 유무를 검사.
		if(isset($_SESSION['cartlog'])){
			$cartlog = $_SESSION['cartlog'];
		} else {
			$cartlog = md5('cartlog'.$TODAYTIME.microtime()); 
			$_SESSION['cartlog'] = $cartlog;			
		}

		if(isset($_COOKIE['cookie_email'])){
			$cookie_email = $_COOKIE['cookie_email'];
		} else {
			$cookie_email = "";
		}

		/*
    	if(isset($_POST['mode'])){
    		$mode = $_POST['mode'];
    	} else if(isset($_GET['mode'])) {
    		$mode = $_GET['mode'];
		}
		*/


		//$skin_name = "default";
		// $body = _skin_page("default","site_language");

		$mode = _formmode();

		///////////////////
		// 주문목록 및 이력 출력  
		$query = "select * from `site_language` order by regdate desc";
		if($rowss = _sales_query_rowss($query)){	

			$seller="";
			$sub_shipping = 0;
			$sub_shipping_method = "";
			$list ="";
			for($i=0,$total_prices=0,$sub_prices=0; $i<count($rowss); $i++){
				$rows = $rowss[$i];

				$list .= "<table border='0' width='100%' cellspacing='0' cellpadding='0'><tr>";
				
				if($rows->enable) $list .= "<td width='20' id=\"table_td\"> <a href='#' onclick=\"javascript:language_mode('disable','".$rows->Id."')\">▣</a></td>";
				else $list .= "<td width='20' id=\"table_td\"> <a href='#' onclick=\"javascript:language_mode('enable','".$rows->Id."')\">□</a></td>";

				$list .= "<td width='50'>".$rows->code."</td>";
				$list .= "<td width='100'>".$rows->replace_code."</td>";
				$list .= "<td style='font-size:12px;padding:10px;'><a href='#' onclick=\"javascript:language_edit('edit','".$rows->Id."')\" >".$rows->name."</a></td>";
				$list .= "</tr></table>";

			

			}

			echo $list;
			//$body = str_replace("{language_list}",$list,$body);
			//echo $body;
			

		} else {
			$msg = "언어 목록이 없습니다.";
			echo $msg;
		}	
		
	} else {
		$body = _skin_page($skin_name,"error");
		
		$msg = "오류. 페이지 접근 보안키값이 일치하지 않습니다.";
		$body = str_replace("<!--{error_message}-->",$msg,$body);
		echo $body;	
	}

	
?>