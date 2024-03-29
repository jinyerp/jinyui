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
	include "./func/goods.php";
	include "./func/orders.php";
	include "./func/butten.php";
	include "./func/css.php";

	// ERP Library
	include "./lib/company.php";
	include "./lib/goods.php";
	include "./lib/trans.php";
	include "./lib/report.php";



	if(isset($_COOKIE['cookie_email'])){
		include "./sales.php";

		$script = "<script>
				function form_submit(mode,uid){
					var url = \"/ajax_sales_manager_editup.php?uid=\"+uid+\"&mode=\"+mode;
					var formData = new FormData($('#data')[0]);
					$.ajax({
						url:url,
        				type: 'POST',
        				data: formData,
        				async: false,
        				success: function (data) {
        					$('.mainbody').html(data);
        				},
        				cache: false,
        				contentType: false,
        				processData: false
    				});
					
				}

				function form_delete(mode,uid){
					var url = \"/ajax_sales_manager_editup.php?uid=\"+uid+\"&mode=\"+mode;
					
					$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('.mainbody').html(data);

                        }
                    });
				}
		</script>";


		$body = $script._skin_page($skin_name,"sales_manager_edit");

		$mode = _formmode();
		$uid = _formdata("uid");
		//echo "uid = $uid <br>";
		$limit = _formdata("limit");
		$ajaxkey = _formdata("ajaxkey");

		// echo $mode;
		
		$body=str_replace("{formstart}","<form id='data' name='manager' method='post' enctype='multipart/form-data'> 
					    				<input type='hidden' name='ajaxkey' value='$ajaxkey'>
					    				<input type='hidden' name='limit' value='$limit'>		    				
										<input type='hidden' name='uid' value='$uid'>",$body);
		$body = str_replace("{formend}","</form>",$body);
		

		$query = "select * from `sales_manager` where Id = '$uid'";
		// echo $query."<br>";
    	if($rows= _sales_query_rows($query)){
    		$body = str_replace("{form_submit}",$script."
				<input type='button' value='수정' onclick=\"javascript:form_submit('".$mode."','".$uid."')\" style=\"".$css_btn_gray."\" > 
				<input type='button' value='삭제' onclick=\"javascript:form_delete('delete','".$uid."')\" style=\"".$css_btn_gray."\" >
				",$body);
    	} else {
    		$body = str_replace("{form_submit}",$script."
				<input type='button' value='저장' onclick=\"javascript:form_submit('".$mode."','".$uid."')\" style=\"".$css_btn_gray."\" >
				",$body);
    	}	
		
		if(isset($rows->enable)) $body = str_replace("{enable}",_form_check_enable($rows->enable),$body);
			else $body = str_replace("{enable}",_form_check_enable("on"),$body);

		$body = str_replace("{lastname}","<input type='text' name='lastname'  value='".$rows->lastname."' style=\"$css_textbox\">",$body);
		$body = str_replace("{firstname}","<input type='text' name='firstname'  value='".$rows->firstname."' style=\"$css_textbox\">",$body);
		$body = str_replace("{fax}","<input type='text' name='fax'  value='".$rows->fax."' style=\"$css_textbox\">",$body);
		$body = str_replace("{phone}","<input type='text' name='phone'  value='".$rows->phone."' style=\"$css_textbox\">",$body);
		$body = str_replace("{parts}","<input type='text' name='parts'  value='".$rows->part."' style=\"$css_textbox\">",$body);
		$body = str_replace("{email}","<input type='text' name='email'  value='".$rows->email."' style=\"$css_textbox\">",$body);
		$body = str_replace("{password}","<input type='text' name='password'  value='".$rows->password."' style=\"$css_textbox\">",$body);
		$body = str_replace("{comment}","<input type='text' name='comment'  value='".$rows->comment."' style=\"$css_textbox\">",$body);	

		echo $body;	

	} else {
		// 사이트 로그인이 안되어 있는 경우, AJAX로 로그인 처리 요청
		$body = _skin_body($skin_name,"login");
		
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

		echo $body.$login_script;
	}	



	/*
	include "./dbinfo.php";
	$connect=mysql_connect($mysql_localhost,$mysql_user,$mysql_password) or die("Source database can not connect.");

	include "language.php"; 
	include "mobile.php";
	
	include "./func_skin.php"; 
	include "./func_files.php"; 
	include "./func_datetime.php";
	include "./func_javascript.php";
	include "./func_log.php";
	
	include "./func_string.php";
	
	
	if(!isset($_COOKIE[Session]) && !isset($_COOKIE[email]) ) login();    
	else { //////////////////////////////////////////
	

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
			$mode = $_POST['mode']; if(!$mode) $mode = $_GET['mode'];
    		$UID = $_GET['UID']; if(!$UID) $UID = $_POST['UID'];
    		
    		
    		switch($mode){
    			case 'del':
    				
    				$query = "select * from `sales_manager` where members_id = '$MEM[Id]' and Id = '$UID'";
    				$result=mysql_db_query($mysql_dbname,$query,$connect);
					if(  mysql_num_rows($result)  ){ 
		    			$rows=mysql_fetch_array($result);
		    		
		    			if($rows[master]){
		    				msg_alert("마스터 직원은 삭제가 되지 않습니다.");
		    			} else {
		    				$query = "DELETE FROM `sales_manager` WHERE `Id`='$UID'";
    						mysql_db_query($mysql_dbname,$query,$connect);
		    			}
		    		}		
    				
    				echo "<script> history.go(-1); </script>";
    				
    				break;
    			case 'editup':
    			
					$email = $_POST['email'];
					$password = $_POST['password'];
    			
    				$manager = $_POST['manager'];
    				$phone = $_POST['phone']; 
    				$fax = $_POST['fax']; $fax = str_replace("-","",$fax);
    				$mobile = $_POST['mobile']; $mobile = str_replace("-","",$mobile);
    				$part = $_POST['part']; 
    				
    				$comment = $_POST['comment'];
    			
    			
    				$chk_goods = $_POST['chk_goods'];
					$chk_com = $_POST['chk_com'];
					$chk_sell = $_POST['chk_sell'];
					$chk_sell_auth = $_POST['chk_sell_auth'];
					$chk_buy = $_POST['chk_buy'];
					$chk_buy_auth = $_POST['chk_buy_auth'];
					$chk_pay = $_POST['chk_pay'];
					$chk_user = $_POST['chk_user'];
					$chk_b2b = $_POST['chk_b2b'];
					$chk_report = $_POST['chk_report'];
    			
    		
    				if(!$email) msg_alert("오류! 이메일이 없습니다.");
    				else if(!$password) msg_alert("오류! 비밀번호가 없습니다.");
    				else if(!$manager) msg_alert("오류! 직원 이름이 없습니다.");
    				else {
    				
    					$query = "select * from `sales_manager` where members_id = '$MEM[Id]' and Id = '$UID'";
    					$result=mysql_db_query($mysql_dbname,$query,$connect);
						if(  mysql_num_rows($result)  ){ 
		    				$rows=mysql_fetch_array($result);
		    			
		    				if($email != $rows[email]){
		    				//# 이메일 주소를 변경한 경우 중복을 검색함.
		    					$query = "select * from sales_manager where email = '$email'";
								$result=mysql_db_query($mysql_dbname,$query,$connect);
								if(  mysql_num_rows($result)  ) msg_alert("중복된 이메일주소 입니다.");
								else {
									$query="UPDATE `sales_manager` SET `part`='$part', `name`='$manager', `email`='$email', `password`='$password', 
									`fax`='$fax', `phone`='$phone', `mobile`='$mobile',`memo`='$comment',
									`chk_goods` = '$chk_goods',`chk_com` = '$chk_com',`chk_sell` = '$chk_sell', `chk_sell_auth` = '$chk_sell_auth',
									`chk_buy` = '$chk_buy', `chk_buy_auth` = '$chk_buy_auth',`chk_pay` = '$chk_pay', `chk_user` = '$chk_user',
									`chk_b2b` = '$chk_b2b', `chk_report` = '$chk_report' WHERE `Id`='$UID'";
    								mysql_db_query($mysql_dbname,$query,$connect);
    							}
    							
    							// 관리자 쿠키 재설정
    							setcookie("manager",$email,0,"/");
    							
		    				} else {
		    					$query="UPDATE `sales_manager` SET `part`='$part', `name`='$manager', `password`='$password', 
									`fax`='$fax', `phone`='$phone', `mobile`='$mobile',`memo`='$comment',
									`chk_goods` = '$chk_goods',`chk_com` = '$chk_com',`chk_sell` = '$chk_sell', `chk_sell_auth` = '$chk_sell_auth',
									`chk_buy` = '$chk_buy', `chk_buy_auth` = '$chk_buy_auth',`chk_pay` = '$chk_pay', `chk_user` = '$chk_user',
									`chk_b2b` = '$chk_b2b', `chk_report` = '$chk_report' WHERE `Id`='$UID'";
    							mysql_db_query($mysql_dbname,$query,$connect);
		    				
		    				}
		    			}	
		    			
    					
    				
    				}
    
    			

    				echo "<script> history.go(-2); </script>";	
    			
    				break;
    			default:
    				
    			
    				$query = "select * from `sales_manager` where members_id = '$MEM[Id]' and Id = '$UID'";
    				$result=mysql_db_query($mysql_dbname,$query,$connect);
					if(  mysql_num_rows($result)  ){ 
		    			$rows=mysql_fetch_array($result);
		    			
		    			$body = shopskin("sales_manager_new");
    				
    					//# 좌측 메뉴 표시
    					$leftBody = "<table border='0' cellpadding='5' cellspacing='5' width='100%'>";
						$query = "select * from `sales_manager` group by part desc";
						$result=mysql_db_query($mysql_dbname,$query,$connect);
		    			if( mysql_num_rows($result) ){
    		
		    				while(1){
		    					$rows1=mysql_fetch_array($result);
		    					if($rows1[part]) {

		    						$query = "select count(*) from `sales_manager` where members_id = '$MEM[Id]' and `part` = '$rows[part]' ";
									$result1=mysql_db_query($mysql_dbname,$query,$connect);
		    						$total=mysql_result($result1,0,0); 
		    						if($total >0){
		    							$leftBody .= "<tr><td width='5' valign='top'><font color='#3B5998' size='2'>▪</font></td>
		    							  <td><font size=2><a href='sales_manager.php?part=$rows1[part]'>$rows1[part]</a> ($total)</font></td></tr>";
		    						} else {
		    							$leftBody .= "<tr><td width='5' valign='top'><font color='#3B5998' size='2'>▪</font></td>
		    							  <td><font size=2><a href='sales_manager.php?part=$rows1[part]'>$rows1[part]</a></font></td></tr>";	
									}
		    					} else break;
		    				}
		    						
		    			}
						$leftBody .= "</table>";
						$body = str_replace("{manager_parts}","$leftBody ",$body);
						
						
						$body=str_replace("{formstart}","<form name='form1' method='post' enctype='multipart/form-data' action='sales_manager_edit.php'> 
										<input type='hidden' name='UID' value='$UID'>
					    				<input type='hidden' name='mode' value='editup'>",$body);
						$body = str_replace("{formend}","</form>",$body);
						
						$body = str_replace("{email}","<input type='text' name='email' value='$rows[email]' $cssFormStyle placeholder='이메일'>",$body);	
						$body = str_replace("{password}","<input type='text' name='password' value='$rows[password]' $cssFormStyle placeholder='암호'>",$body);
			
						$body = str_replace("{manager}","<input type='text' name='manager' value='$rows[name]' $cssFormStyle placeholder='담당자'>",$body);
						$body = str_replace("{phone}","<input type='text' name='phone' value='$rows[phone]' $cssFormStyle placeholder='전화번호'>",$body);
						$body = str_replace("{fax}","<input type='text' name='fax' value='$rows[fax]' $cssFormStyle placeholder='팩스'>",$body);
						$body = str_replace("{mobile}","<input type='text' name='mobile' value='$rows[mobile]' $cssFormStyle placeholder='핸드폰'>",$body);
						$body = str_replace("{parts}","<input type='text' name='part' value='$rows[part]' $cssFormStyle placeholder='부서'>",$body);
			
						$body = str_replace("{comment}","<textarea name='comment' rows='10' style='width:100%;margin:-3px;border:2px inset #eee' placeholder='메모'>$rows[memo]</textarea>",$body);
		
		
						if($rows[chk_goods]) $body = str_replace("{chk_goods}","<input type='checkbox' name='chk_goods' checked>",$body);
						else $body = str_replace("{chk_goods}","<input type='checkbox' name='chk_goods' >",$body);
						
						if($rows[chk_com]) $body = str_replace("{chk_com}","<input type='checkbox' name='chk_com' checked>",$body);
						else $body = str_replace("{chk_com}","<input type='checkbox' name='chk_com' >",$body);
						
						if($rows[chk_sell]) $body = str_replace("{chk_sell}","<input type='checkbox' name='chk_sell' checked>",$body);
						else $body = str_replace("{chk_sell}","<input type='checkbox' name='chk_sell' >",$body);
						
						if($rows[chk_sell_auth]) $body = str_replace("{chk_sell_auth}","<input type='checkbox' name='chk_sell_auth' checked>",$body);
						else $body = str_replace("{chk_sell_auth}","<input type='checkbox' name='chk_sell_auth' >",$body);
						
						if($rows[chk_buy]) $body = str_replace("{chk_buy}","<input type='checkbox' name='chk_buy' checked>",$body);
						else $body = str_replace("{chk_buy}","<input type='checkbox' name='chk_buy' >",$body);
						
						if($rows[chk_buy_auth]) $body = str_replace("{chk_buy_auth}","<input type='checkbox' name='chk_buy_auth' checked>",$body);
						else $body = str_replace("{chk_buy_auth}","<input type='checkbox' name='chk_buy_auth' >",$body);
						
						if($rows[chk_pay]) $body = str_replace("{chk_pay}","<input type='checkbox' name='chk_pay' checked>",$body);
						else $body = str_replace("{chk_pay}","<input type='checkbox' name='chk_pay' >",$body);
						
						if($rows[chk_user]) $body = str_replace("{chk_user}","<input type='checkbox' name='chk_user' checked>",$body);
						else $body = str_replace("{chk_user}","<input type='checkbox' name='chk_user' >",$body);
						
						if($rows[chk_b2b]) $body = str_replace("{chk_b2b}","<input type='checkbox' name='chk_b2b' checked>",$body);
						else $body = str_replace("{chk_b2b}","<input type='checkbox' name='chk_b2b' >",$body);
						
						if($rows[chk_report]) $body = str_replace("{chk_report}","<input type='checkbox' name='chk_report' checked>",$body);
						else $body = str_replace("{chk_report}","<input type='checkbox' name='chk_report' >",$body);
						
						$body = str_replace("{submit}","<input type='submit' name='reg' value='수정' $butten_style>",$body);
						$body = str_replace("{login}","",$body);			
					
						$body = str_replace("{delete}",skin_button("삭제","sales_manager_edit.php?mode=del&UID=$UID"),$body); 
						
							
						
						
					}		
    				break;
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

