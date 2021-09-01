<?
	
	@session_start();

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
	include "./func/datetime.php";

	// ================
	// 쇼핑몰 주문 확인 처리
	// ================	

	if(isset($_COOKIE['cookie_email'])){
		include "./sales.php";
		
		
		$body =  _skin_emptybody($skin_name);
		// $body = str_replace("</head>","<link href='/css/tabbar_style.css' rel='stylesheet' type='text/css'></link></head>",$body); 

		// Form and Ajax Process
		$_SESSION['ajaxkey'] = $ajaxkey = md5('ajaxkey'.$_SERVER['PHP_SELF'].$TODAYTIME.microtime()); 	
		$body = str_replace("<!--{skin_emptybody}-->","
					<form name='goods' method='post' enctype='multipart/form-data'>
					   <input type='hidden' name='ajaxkey' value='$ajaxkey'>
					<span id=\"goods_list\">
					
					<script>
						$.ajax({
            				url:'/ajax_sales_goods.php',
            				type:'post',
            				data:$('form').serialize(),
            				success:function(data){
            					$('.mainbody').html(data);
            				}
        				});
    				</script>

					</span>
					</form>",$body);

		echo $body;

	
	} else {
		// 사이트 로그인이 안되어 있는 경우, AJAX로 로그인 처리 요청
		$body =  _skin_emptybody($skin_name);

		$login_script = "<script>
				$.ajax({
            		url:'/ajax_login.php',
            		type:'post',
            		data:$('form').serialize(),
            		success:function(data){
            			$('#mainbody').html(data);
            		}
        		});
		</script>";
		$body = str_replace("<!--{skin_emptybody}-->",$login_script,$body);
		echo $body;
	}

		


/*
	@session_start();
	
	include "./dbinfo.php";
	$connect=mysql_connect($mysql_localhost,$mysql_user,$mysql_password) or die("Source database can not connect.");

	include "language.php"; //# 사이트 언어, 지역 설정
	include "mobile.php";
	
	include "./func_skin.php"; //# 스킨 레이아웃 함수들...
	include "./func_files.php"; 
	include "./func_datetime.php";
	include "./func_javascript.php";
	include "./func_log.php";
	
	include "./func_string.php";
	
	
	if(!isset($_COOKIE[Session]) && !isset($_COOKIE[email]) ) {
		$msg = "회원 로그인이 필요합니다.";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
       			<script>
       				alert(\"$msg\");
       				location.href=\" ./sales_login.php \";
    			</script>"; 
	} else { //////////////////////////////////////////

		$query = "select * from `sales_members` where email = '$_COOKIE[email]'";
    	$result=mysql_db_query($mysql_dbname,$query,$connect);
		if(  mysql_num_rows($result)  ){ 
			$MEM=mysql_fetch_array($result);
			
			//# DB부하 분산: 고객 데이터 DB 서버 정보 추출...
			$query = "select * from `sales_server` where Id = '$MEM[server]'";
    		$result=mysql_db_query($mysql_dbname,$query,$connect);
			if(  mysql_num_rows($result)  )	{
				$server=mysql_fetch_array($result);
				$dbconnect=mysql_connect($server[ip],$server[userid],$server[password],true) or die("user database can not connect.");
			} else {
				$dbconnect = $connect;
				$server[dbname] = $mysql_dbname;
			}

			
			//////////////////////////////////////////////////////////////////
			

			
			//////////////////////////////////////////////////////////////////
			
			$company = $_GET['company']; if(!$company) $company = $_POST['company'];
			$VIEW = $_GET['view'];
			
			$body = shopskin("sales_goods");
			$body = str_replace("{new}",_button_blue("상품등록","sales_goods_new.php?company=$company"),$body);
			
			include "sales_goods_left.php";
			
			if($company){
				$query = "select * from `sales_company_$MEM[Id]` where Id = '$company' order by regdate desc";
				// $result=mysql_db_query($mysql_dbname,$query,$connect);
				$result=mysql_db_query($server[dbname],$query,$dbconnect);
		    	if( mysql_num_rows($result) ) {
		    		$rows=mysql_fetch_array($result);
					$body = str_replace("{companyName}","<font size=2>: <b>$rows[company]</b></font>",$body);
				}else $body = str_replace("{companyName}",": 등록되지 않은 거래처 입니다.",$body);
			} else 	$body = str_replace("{companyName}","",$body);

			$body = str_replace("{new}","",$body);


			$body=str_replace("{formstart}","<form name='form1' method='post' enctype='multipart/form-data' action='".$_SERVER['PHP_SELF']."'> 
					    						 <input type='hidden' name='company' value='$company'>
					    						 <input type='hidden' name='mode' value='search'>",$body);
			$body = str_replace("{formend}","</form>",$body);


				
			$body = str_replace("{goods}","<input type='text' name='goods' $cssFormStyle placeholder='검색 상품명'>",$body);	
			$body = str_replace("{submit}","<input type='submit' name='reg' $btn_style_gray value='검색' >",$body);
					
					
			$barcodeMode = "goodlist"; 
			$url_return = "sales_goods.php?";		
			$body = str_replace("{scan}","<butten onclick='showBarcode(\"$barcodeMode \",\" $url_return\")'><img src='./images/barcode.gif' width=30 border=0></butten>",$body);
			//$body = str_replace("{scan}",_button_green("바코드",""),$body);
			
			
			
			
			$search = $_POST['search']; $goods = $_POST['goods'];			
			$query = "select * from `sales_goods_$MEM[Id]` ";
			$query .= " where ";
				
			if($mode == "search" || $company || $VIEW || $_GET['barcode'] || $_GET['cate']){	
				
						
				$barcode = $_GET['barcode'];
				if($barcode)  $query .= " `barcode` = '$barcode' and ";
						
				if($mode == "search") $query .= " `name` like '%$goods%' and ";
						
				if($company) $query .= "`company` = '$company' and ";
						
				if($VIEW == "self") $query .= "`albacode` = '$ALBA[albacode]' and ";
				else if($VIEW == "extern") $query .= "`albacode` != '$ALBA[albacode]' and ";
				else if($VIEW == "exsales") $query .= "`exsales` = 'checked' and ";
						
				if($_GET['cate']) $query .= "`cate` = '".$_GET['cate']."' and ";
			}
			$query .= " bom IS NULL ";
			$query .= " order by cate desc, Id desc";
			$query = str_replace("and  order","order",$query);
					
			// $result = mysql_db_query($mysql_dbname,str_replace("*","count(*)",$query),$connect);
			$result = mysql_db_query($server[dbname],str_replace("*","count(*)",$query),$dbconnect);
    		$total = mysql_result($result,0,0);
    		// $result=mysql_db_query($mysql_dbname,$query,$connect);
    		$result=mysql_db_query($server[dbname],$query,$dbconnect);
    		if( mysql_num_rows($result) ){ 
    				
				for($i=0;$i<$total;$i++){
	    			$rows=mysql_fetch_array($result);
	    			
	    			$listform = bodyskin("sales_goods_list",$_SESSION['mobile'],$_SESSION['language']);
	
					if($rows[images]) $listform = str_replace("{images}","<img src='$rows[images]' border=0 width=50>","$listform");
					else $listform = str_replace("{images}","","$listform");
					
					if($rows[mem] != $MEM[Id] && $rows[auth] != "on") $auth = "<em style='font-size:10px;padding:1px;background-color:#aaaaaa;'><a href='sales_goods_auth.php?UID=$rows[Id]'>승인요청</a></em>";	
					else $auth = "";
					
					$listform = str_replace("{goodname}","<a href='sales_goods_edit.php?mode=edit&UID=$rows[Id]'>$rows[name]</a> $auth",$listform);
					$listform = str_replace("{stock}","<a href='sales_goodstock.php?GID=$rows[Id]'>$rows[stock]</a>","$listform");
					$listform = str_replace("{sell}","$rows[prices_sell]","$listform");
					$listform = str_replace("{buy}","$rows[prices_buy]","$listform");
	    			$list .= $listform;
	    			
	    	
	    		}
	    		
	    		$body=str_replace("{databody}",$list,$body);
			} else {
	    		$listform = bodyskin("sales_nodata",$_SESSION['mobile'],$_SESSION['language']);
				$listform = str_replace("{nodata}","등록된 상품이 없습니다.",$listform);
	    		$body=str_replace("{databody}",$listform,$body);
	    		
	    		
			
				if($_GET['barcode']) {
					$msg = "검색된 ".$_GET['barcode']."바코드 상품이 없습니다. ";
					echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
       				<script>
       					alert(\"$msg\");
    				</script>"; 
				}
			
	    		
	    		
	    	}
	    		
		    		
		    		
		
		
		
		
			//////////////////////////////////////////////////////////////////		
		
		} else msg_alert("오류! 회원정보를 읽어 올수 없습니다.");
		
		
		//# 번역스트링 처리
		$body = _string_converting($body);
		echo $body;
	
	}
	
	mysql_close($connect);
	mysql_close($dbconnect);	

	*/

?>
