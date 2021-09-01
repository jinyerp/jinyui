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

	// 환경설정 읽어보기
	require_once ($_SERVER['DOCUMENT_ROOT']."/admin/admin_tableslist.cfg.php");

	$javascript = "<script>
		function mode(mode,uid,limit){
			var url = \"ajax_".$_tableName."_editup.php\";
			var form = document.sales;
			form.action = url;  //이동할 페이지
  			form.mode.value = mode;
  			form.uid.value = uid;
  			form.limit.value = limit;
			
			ajax_html('#mainbody',url);         	
        }

		function edit(mode,uid,limit){
            var url = \"".$_tableName."_edit.php\";		
			var form = document.sales;
			form.action = url;  //이동할 페이지
  			form.mode.value = mode;
  			form.uid.value = uid;
  			form.limit.value = limit;
			
			form.submit();	
        }

        function list(limit){
			var url = \"ajax_".$_tableName.".php\";
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

		$body = $javascript._theme_page($site_env->theme,$_tableName,$site_language,$site_mobile);
		$submenu_id = _formdata("submenu_id");
		$body = str_replace("<!--{#side_menu}-->", _submenu($_current_menuCode,$site_language,$submenu_id),$body);
		


		// POST키값을 기준으로 변수 = 값 지정.
		// hidden 값으로 처리
		$arr = array_keys($_POST);
		for($i=0;$i<count( $arr );$i++){
			$key_name = $arr[$i];
			${$key_name} = _formdata($key_name);

			$hidden .= "<input type='hidden' name='".$key_name."' value='".${$key_name}."'>";
		}

		$hidden .= "<input type='hidden' name='mode'>";
		$hidden .= "<input type='hidden' name='uid'>";
		$hidden .= "<input type='hidden' name='limit'>";

		$body = str_replace("{formstart}","<form name='sales' method='post' enctype='multipart/form-data'>".$hidden,$body);
		$body = str_replace("{formend}","</form>",$body);


		// 출력 목록수 지정		
		if(!$_list_num = _formdata("list_num")) $_list_num = 10;
		$body = str_replace("{list_num}", _listnum_select($_list_num),$body);
		
		
		


		$button ="<input type='button' value='신규추가' onclick=\"javascript:edit('new','0','0')\" id=\"css_btn_new\">";          
		$body = str_replace("{new}",$button,$body);

		
		$searchkey = _formdata("searchkey");
		$body = str_replace("{search_key}","<input type='text' name='searchkey' value='$searchkey' id=\"search_box\">",$body);
		$button_search ="<input type='button' value='검색' onclick=\"javascript:list('0')\" id=\"css_btn_search\">";           
		$body = str_replace("{search}",$button_search,$body);

		$country_rowss = _country_rows();
		$body = str_replace("{country}", _html_form_select_json("country",$css_textbox,"country",$country_rowss,$site_country,"code","name","국가별 창고위치") ,$body);


		// $body = str_replace("{compaign_plan}", _tableField_Id("crm_campaign_plan","campaign_plan",$plan),$body);
		$body = str_replace("{table_name}",$table_name,$body);

		///////////////////
		// 상품 목록을 검색
		$query = "select * from ".$_tableName." ";
		// query where절 처리 ...
		
		if($searchkey || count($_where)>0 ){
			$query .= "where ";

			for($i=0;$i<count($_where);$i++){
				echo $_where[$i]['field']."<br>";
				echo _formdata($_where[$i]['field']);
				$query .= $_where[$i]['field']." = '"._formdata($_where[$i]['field'])."' and ";
			}

			if($searchkey) $query .= "$_search_keyField like '%".$searchkey."%' and ";

			$query .= ";";
			$query = str_replace("and ;","",$query); // where 절을 ;으로 마감 후 and ; 를 처리
		}
		
		
		$query .= " order by ".$_orderKey." ".$_orderSort." ";
		
		// 전체 또는 검색된 데이터 갯수를 얻음.
		$total = _sales_query_count($query); 
		echo $query."<br>";

		// 검색된 데이터 내에서 , limit 설정 
		if($limit) $query .= "LIMIT $limit , $_list_num"; else $query .= "LIMIT 0 , $_list_num ";
		//echo $query."<br>";

		$list .= _dataTitleHeader($_titleName);


		if($rowss = _sales_query_rowss($query)){

			if( ($total - $limit) < $_list_num ) $count = $total - $limit; else $count = $_list_num;
			for($i=0;$i<$count;$i++){
				$rows = $rowss[$i];

				// 거래처: 활성화 체크
				if($rows->enable) {
					$editHref = "<a href='#' onclick=\"javascript:edit('edit','".$rows->Id."','".$limit."')\">".$rows->$_editFiled."</a>";
				} else $editHref = "<a href='#' onclick=\"javascript:edit('edit','".$rows->Id."','".$limit."')\">
									<span style=\"text-decoration:line-through;\">".$rows->$_editFiled."</span></a>";

				$tid = "<input type='checkbox' name='TID[]' value='".$rows->Id."'>";		

				$comment = stripslashes($rows->comment);

				$list .= _dataListRows($_titleName, array(
							$tid, 
							$editHref,
							$rows->list_type,
							$rows->field_name,
							$rows->list_width,
							$rows->pos, 
							$comment 
						));

			}
			
			$list .= _pagination($_list_num,$_block_num,$limit,$total);
			$body = str_replace("{datalist}","<div id=\"data_rows\">".$list."</div>",$body);
		
		} else {
			$list .= _msg_tableCell( _string($noListMsg, $site_language) );
			$body = str_replace("{datalist}","<div id=\"data_rows\">".$list."</div>",$body);
			
		}

		echo $body;		
	
	} else {
		include ($_SERVER['DOCUMENT_ROOT']."/site/ajax_error.php");
	}	


	
?>
