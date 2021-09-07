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

	include ($_SERVER['DOCUMENT_ROOT']."/func/site.php");	// 사이트 환경 설정
		
	include ($_SERVER['DOCUMENT_ROOT']."/func/layout.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/header.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/footer.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/menu.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/category.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/skin.php");

	include ($_SERVER['DOCUMENT_ROOT']."/func/error.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/css.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/pagination.php");
	
	/////////////
	$javascript = "<script>
		function edit(mode,uid,limit){
            var url = \"seller_shop_edit.php\";		
			var form = document.sales;
			form.action = url;  //이동할 페이지
  			form.mode.value = mode;
  			form.uid.value = uid;
  			form.limit.value = limit;
			
			form.submit();	
        }

        function list(limit){
			var url = \"ajax_seller_shop.php\";
        	var form = document.site;
        	form.limit.value = limit;

			ajax_html('#mainbody',url);
    	}

    	// 상단버튼
		$('#check_all').on('click',function(){
			trans_chkall();
		});	
       	function trans_chkall(){
       		var submit = false;
       		var chk = document.getElementsByName('TID[]');
       				
       		for(var i=0;i<chk.length;i++){
       			if(document.sales.chk_all.checked == true) chk[i].checked = true;
       			else chk[i].checked = false;
       		}
 		} 

 		// 리스트 변경
 		$('#list_num').on('change',function(){
        	list(0);
    	});

    	// 국가
 		$('#country').on('change',function(){
        	list(0);
    	});
			
	</script>";

	//********** Ajax Process **********
	$ajaxkey = _formdata("ajaxkey");
	if(isset($_SESSION['ajaxkey']) == $ajaxkey) { // Ajax CallKey Securities Checking...
			
		// Sales 사용자 DB 접근.
		include ($_SERVER['DOCUMENT_ROOT']."/conf/sales.php");


		$body = $javascript._theme_page($site_env->theme,"scm_seller_shop",$site_language,$site_mobile);
		$body = str_replace("<!--{#side_menu}-->", _submenu("default",$site_language,177),$body);

		if(isset($_COOKIE['cookie_email']))	{
			$email = $_COOKIE['cookie_email'];
		}
				
		$mode = _formmode();
		$limit = _formdata("limit"); 		
		$search = _formdata("searchkey");
		
		// 출력 목록수 지정
		$_block_num = 10;
		if(!$_list_num = _formdata("list_num")) $_list_num = 10;
		$body = str_replace("{list_num}", _listnum_select($_list_num),$body);

		
		$body = str_replace("{formstart}","<form name='sales' method='post' enctype='multipart/form-data'>
								<input type='hidden' name='mode'>
								<input type='hidden' name='uid'>
								<input type='hidden' name='limit' value='$limit'>
								<input type='hidden' name='searchkey' value='$search'>
								<input type='hidden' name='list_num' value='$list_num'>
					   			<input type='hidden' name='ajaxkey' value='".$ajaxkey."'>",$body);
		$body = str_replace("{formend}","</form>",$body);


		$button ="<input type='button' value='입점망' onclick=\"javascript:location.replace('seller_list.php')\" id=\"css_btn_gray\">";          
		$body = str_replace("{new}",$button,$body);

		
		$searchkey = _formdata("searchkey");
		$body = str_replace("{search_key}","<input type='text' name='searchkey' value='$searchkey' style=\"$css_textbox\" >",$body);
		$button_search ="<input type='button' value='검색' onclick=\"javascript:list('0')\" style=\"".$css_btn_gray."\" >";           
		$body = str_replace("{search}",$button_search,$body);

		$country_rowss = _country_rows();
		$body = str_replace("{country}", _html_form_select_json("country",$css_textbox,"country",$country_rowss,$site_country,"code","name","국가별 창고위치") ,$body);

		///////////////////
		// 상품 목록을 검색
		$query = "select * from service.scm_shop where shop_email = '$email'";
		if($searchkey) {
			$query .= " and business like '%".$searchkey."%' ";
		}
		
		$query .= "order by Id desc ";
		
		$total = _sales_query_count($query); // 전체 또는 검색된 데이터 갯수를 얻음.

		// 검색된 데이터 내에서 , limit 설정 
		if($limit) $query .= "LIMIT $limit , $_list_num"; else $query .= "LIMIT 0 , $_list_num ";
		// echo $query;

		/*
		$list = "<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tr>";
		$list .= "<td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width='20'> <input type='checkbox' name='chk_all' id=\"check_all\"> </td>";				
		$list .= "<td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width='120'>등록일자</td>
					  <td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width='50'>국가</td>
					  <td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;'>사업장</td>
					  <td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width='200'>도메인</td>
					  </tr>
					</table>";
		*/
		$datalist_width = array(20, 120, 50, 0, 200);
		$list = _table_datalist($datalist_width, array("<input type='checkbox' name='chk_all' id=\"check_all\">", "등록일자", "국가", "사업장", "도메인"));				


		if($rowss = _sales_query_rowss($query)){

			

			if( ($total - $limit) < $_list_num ) $count = $total - $limit; else $count = $_list_num;
			for($i=0;$i<$count;$i++){
				$rows = $rowss[$i];

				// 거래처: 활성화 체크
				if($rows->auth) {
					$title_name = "<a href='#' onclick=\"javascript:edit('shop','".$rows->Id."','".$limit."')\">".$rows->shop_name."</a>";
				} else $title_name = "<a href='#' onclick=\"javascript:edit('shop','".$rows->Id."','".$limit."')\">
									<span style=\"text-decoration:line-through;\">".$rows->shop_name."</span></a>";

				$tid = "<input type='checkbox' name='TID[]' value='".$rows->Id."'>";
				/*
				$list .= "<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
							<tr>";
				$list .= "<td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width='20'>".$tid."</td>";
				$list .= "<td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width='120'>".$rows->regdate."</td>
							<td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width='50'>".$rows->shop_country."</td>
						  <td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;'>".$title_name."</td>
						  <td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width='200'>".$rows->shop_domain."</td>
							</tr>
						</table>";
				*/

				$list .= _table_datalist($datalist_width, array($tid, $rows->regdate, $rows->shop_country, $title_name, $rows->shop_domain));						


			}
			
			$list .= _pagination($_list_num,$_block_num,$limit,$total);
			$body = str_replace("{datalist}",$list,$body);
		
		} else {
			$msg = "사업자 목록이 없습니다.";
			$list .= _msg_tableCell( _string($msg, $site_language) );
			$body = str_replace("{datalist}",$list,$body);
			
		}

		echo $body;	
	
	} else {
		include ($_SERVER['DOCUMENT_ROOT']."/site/ajax_error.php");
	}

	
?>