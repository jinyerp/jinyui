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

	include "./func/error.php";
	
	include "./func/datetime.php";
	include "./func/goods.php";
	include "./func/members.php";


	//********** Ajax Process **********
	if(isset($_SESSION['ajaxkey']) == isset($_POST['ajaxkey'])) { // Ajax CallKey Securities Checking...
		
		// Sales 사용자 DB 접근.
		include "./sales.php";

		$mode = _formmode();
		//echo "mode = $mode <br>";
		$uid = _formdata("uid");
		$email = _formdata("email");
		//echo "uid = $uid <br>";

		
		function _ajax_pagecall_script($url,$ajaxkey){
			
			echo "<script>
				$.ajax({
            		url:'".$url."?ajaxkey=".$ajaxkey."',
            		type:'post',
            		data:$('form').serialize(),
            		success:function(data){
            			$('.mainbody').html(data);
            		}
        		});
    			</script>";
    		
    	}		

    	function _form_uploadfile($formname,$filename){
    		if($_FILES[$formname]['tmp_name']){
    			// 파일 확장자 검사
    			
    			$ext = substr($_FILES[$formname]['name'], strrpos($_FILES[$formname]['name'], '.') + 1); 
    			if ($ext == "php" || $ext == "php3" || $ext == "php4" || $ext == "php5" || $ext == "kr") exit;
    			else {
    				if($filename == ""){
    					// 지정한 파일명이 없는경우, 올려진 파일명 원본으로 이름을 지정
    					move_uploaded_file($_FILES[$formname]['tmp_name'], $_FILES[$formname]['name']);
    				} else {
    					
    					move_uploaded_file($_FILES[$formname]['tmp_name'], $filename.".".$ext);
    				}
    				$files['filename'] = $filename;
    				$files['name'] = $_FILES[$formname]['name'];
    				$files['ext'] = $ext;
    				return $files;
    			}  
				
    		} else return NULL;
		}

		if($mode == "delete"){
			
    		$query = "DELETE FROM `sales_goods_house` WHERE `Id`='$uid'";
    		_sales_query($query);

    		$query = "ALTER TABLE `sales_goods` DROP COLUMN `stock_".$uid."`";
    		_sales_query($query);
    	

		} else {

			$query = "select * from `sales_goods_house` where Id='$uid'";
			if($rows = _sales_query_rows($query)){
				// 수정 
				
					$query = "UPDATE `sales_goods_house` SET ";
					
					if($enable = _formdata("enable")) $query .= "`enable`='on' ,"; else $query .= "`enable`='' ,";
					
					$manager = _formdata("manager"); $query .= "`manager`='$manager' ,";
					$name = _formdata("name"); $query .= "`name`='$name' ,";
					$post = _formdata("post"); $query .= "`post`='$post' ,";
					$state = _formdata("state"); $query .= "`state`='$state' ,";
					$city = _formdata("city"); $query .= "`city`='$city' ,";
					$address = _formdata("address"); $query .= "`address`='$address' ,";
					$phone = _formdata("phone"); $query .= "`phone`='$phone' ,";
					$tel = _formdata("tel"); $query .= "`tel`='$tel' ,";
					$fax = _formdata("fax"); $query .= "`fax`='$fax' ,";
					$comment = _formdata("comment"); $query .= "`comment`='$comment' ,";
					$country = _formdata("house_country"); $query .= "`country`='$country' ,";

					$business = _formdata("business"); $query .= "`business`='$business' ,";
					$company = _formdata("company"); $query .= "`company`='$company' ,";


					$query .= "WHERE `Id`='$uid'";
					$query = str_replace(",WHERE","WHERE",$query);
					_sales_query($query);

				
			} else {
				// 삽입 
				
		
					$insert_filed .= "`regdate`,";
					$insert_value .= "'$TODAYTIME',";

					if($enable = _formdata("enable")){
						$insert_filed .= "`enable`,";
						$insert_value .= "'on',";
					}

					if($name = _formdata("name")){
						$insert_filed .= "`name`,";
						$insert_value .= "'$name',";
					}

					if($manager = _formdata("manager")){
						$insert_filed .= "`manager`,";
						$insert_value .= "'$manager',";
					}

					if($post = _formdata("post")){
						$insert_filed .= "`post`,";
						$insert_value .= "'$post',";
					}

					if($address = _formdata("address")){
						$insert_filed .= "`address`,";
						$insert_value .= "'$address',";
					}

					if($phone = _formdata("phone")){
						$insert_filed .= "`phone`,";
						$insert_value .= "'$phone',";
					}

					if($state = _formdata("state")){
						$insert_filed .= "`state`,";
						$insert_value .= "'$state',";
					}

					if($city = _formdata("city")){
						$insert_filed .= "`city`,";
						$insert_value .= "'$city',";
					}

					if($fax = _formdata("fax")){
						$insert_filed .= "`fax`,";
						$insert_value .= "'$fax',";
					}

					if($tel = _formdata("tel")){
						$insert_filed .= "`tel`,";
						$insert_value .= "'$tel',";
					}

					if($country = _formdata("house_country")){
						$insert_filed .= "`country`,";
						$insert_value .= "'$country',";
					}

					if($comment = _formdata("comment")){
						$insert_filed .= "`comment`,";
						$insert_value .= "'$comment',";
					}

					if($business = _formdata("business")){
						$insert_filed .= "`business`,";
						$insert_value .= "'$business',";
					}

					if($company = _formdata("company")){
						$insert_filed .= "`company`,";
						$insert_value .= "'$company',";
					}
					
					$query = "INSERT INTO `sales_goods_house` ($insert_filed) VALUES ($insert_value)";
					$query = str_replace(",)",")",$query);
					_sales_query($query);
			
				$query = "select * from `sales_goods_house` WHERE `name`='$name' and `regdate`='$TODAYTIME' order by Id desc";
				if($rows = _sales_query_rows($query)){
					$query = "ALTER TABLE `sales_goods` ADD COLUMN `stock_".$rows->Id."` varchar(20) CHARACTER SET 'utf8' NULL;";
					_sales_query($query);
				}
				
			}	

			// _ajax_pagecall_script("/ajax_sales_house.php",_formdata("ajaxkey"));

		}

		$ajaxkey = _formdata("ajaxkey");
		$url = "/ajax_sales_house.php";
		echo "<script>
				$.ajax({
            		url:'".$url."?ajaxkey=".$ajaxkey."',
            		type:'post',
            		data:$('form').serialize(),
            		success:function(data){
            			$('#house').html(data);
            		}
        		});
    			</script>";

    	$ajaxkey = _formdata("ajaxkey");
		$url = "/ajax_sales_goods.php";
		echo "<script>
				$.ajax({
            		url:'".$url."?ajaxkey=".$ajaxkey."',
            		type:'post',
            		data:$('form').serialize(),
            		success:function(data){
            			$('#goods').html(data);
            		}
        		});
    			</script>";	

		
	} else {
		$body = _skin_page($skin_name,"error");
		
		$msg = "오류. 페이지 접근 보안키값이 일치하지 않습니다.";
		$body = str_replace("<!--{error_message}-->",$msg,$body);
		echo $body;	
	}



/*
	@session_start();
	if($_SESSION['nonce'] != $_POST['nonce']){
		$_SESSION['nonce'] = NULL;	
	} else {
		///////////////////////////
		// 섹션 중복처리 방지 기능

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
	
	
		if( !isset( $_COOKIE[Session]) && !isset($_COOKIE[email]) ) {
		  	$msg = "회원 로그인이 필요합니다.";
			echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
       			<script>
       				alert(\"$msg\");
       				location.href=\" ./sales_login.php \";
    			</script>";
		} else { //////////////////////////////////////////
		
			$query = "select * from `sales_members` where email = '$_COOKIE[email]'";
    		// echo $query; 
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
			
    			$enable = $_POST['enable'];
				
				$housename = $_POST['housename'];
    			$manager = $_POST['manager'];
    			
    			$phone = $_POST['phone']; 
    			$fax = $_POST['fax']; $fax = str_replace("-","",$fax);
    			$address = $_POST['address']; 
    			
    			$memo = $_POST['memo'];
    			
    		
    			if( !$housename ) msg_alert("오류! 창고명이 없습니다.");
    			else {
					
					$query = "INSERT INTO sales_warehouse_$MEM[Id] (`regdate`, `enable`, `housename`, `manager`, `phone`, `fax`, `memo`) 
    								VALUES ('$TODAY', '$enable', '$housename', '$manager', '$phone', '$fax', '$memo')";
    				mysql_db_query($server[dbname],$query,$dbconnect);
					
					
					//echo $query;
					echo "<script> history.go(-2); </script>";
				}	
				
    				
		
				//////////////////////////////////////////////////////////////////		
		
			} else msg_alert("오류! 회원정보를 읽어 올수 없습니다.");
	
		}
	

	} ///// ##### SESSION END ##### /////
	
	mysql_close($connect);
	mysql_close($dbconnect);	
	
	*/
?>

