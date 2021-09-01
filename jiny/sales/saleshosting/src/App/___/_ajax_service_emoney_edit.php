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
	include "./func/orders.php";
	include "./func/butten.php";

	include "./func/css.php";
	
	//********** Ajax Process **********
	if(isset($_SESSION['ajaxkey']) == isset($_POST['ajaxkey'])) { // Ajax CallKey Securities Checking...
		
		// Sales 사용자 DB 접근.
		//include "./sales.php";

		$script = "<script>

				function form_submit(mode,uid){
					var url = \"/ajax_service_emoney.php?uid=\"+uid+\"&mode=\"+mode;
					$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('.mainbody').html(data);

                        }
                    });
					
				}

				function form_delete(mode,uid){
					var url = \"/ajax_service_emoney.php?uid=\"+uid+\"&mode=\"+mode;
					
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

		


		$cookie_email = $_COOKIE['cookie_email']; // 로그인 이메일
		$mode = _formmode();
		$uid = _formdata("uid");
		$limit = _formdata("limit");
		$search = _formdata("searchkey");
		$cate = _formdata("cate");
		
		if($mode == "pay_out"){
			$body = $script._skin_page($skin_name,"service_emoney_payout");
		
		} else if($mode == "pay_in"){
			$body = $script._skin_page($skin_name,"service_emoney_payin");

		}	

		$ajaxkey = _formdata("ajaxkey");
		$body=str_replace("{formstart}","<form id='data' name='service' method='post' enctype='multipart/form-data'> 
					    				<input type='hidden' name='ajaxkey' value='$ajaxkey'>
					    				<input type='hidden' name='limit' value='$limit'>
					    				<input type='hidden' name='searchkey' value='$search'>		    				
										<input type='hidden' name='uid' value='$uid'>",$body);
		$body = str_replace("{formend}","</form>",$body);
		
		echo "mode = $mode <br>";

		$body = str_replace("{regdate}",_form_date("regdate",$reseller_rows->regdate,$css_textbox),$body);
		$body = str_replace("{name}",_form_text("name",$reseller_rows->name,$css_textbox),$body);
		$body = str_replace("{emoney}",_form_text("emoney",$reseller_rows->emoney,$css_textbox),$body);


		if($mode == "pay_out"){
			$body = str_replace("{form_submit}","
				<input type='button' value='출금요청' onclick=\"javascript:form_submit('payout_up','".$uid."')\" style=\"".$css_btn_gray."\" >
				",$body);

		} else if($mode == "pay_in"){
			$body = str_replace("{form_submit}","
				<input type='button' value='입금처리' onclick=\"javascript:form_submit('payin_up','".$uid."')\" style=\"".$css_btn_gray."\" >
				",$body);

		} if($mode == "edit"){
			$query = "select * from `service_reseller` WHERE `Id`='$uid'";
			if($reseller_rows = _mysqli_query_rows($query)){	
				$body = str_replace("{form_submit}","
				<input type='button' value='수정' onclick=\"javascript:form_submit('".$mode."','".$uid."')\" style=\"".$css_btn_gray."\" >
				<input type='button' value='삭제' onclick=\"javascript:form_delete('delete','".$uid."')\" style=\"".$css_btn_gray."\" >
				",$body);
			}

		} else if($mode == "new"){
			$body = str_replace("{form_submit}","
				<input type='button' value='저장' onclick=\"javascript:form_submit('".$mode."','".$uid."')\" style=\"".$css_btn_gray."\" >
				",$body);

		}	
		
		/*
		$body = str_replace("{email}",_form_text("email",$reseller_rows->email,$css_textbox),$body);
		$body = str_replace("{name}",_form_text("name",$reseller_rows->name,$css_textbox),$body);
		$body = str_replace("{code}",_form_text("code",$reseller_rows->code,$css_textbox),$body);
		$body = str_replace("{domain}",_form_text("domain",$reseller_rows->domain,$css_textbox),$body);


		if($reseller_rows->email == $_COOKIE['cookie_email']){
				// 자기 본인 정보는 승인 및 활성화 수정이 불가능함				
				if($reseller_rows->enable) $body = str_replace("{enable}","<input type='checkbox' name='enable' readonly checked >",$body);
				else $body = str_replace("{enable}","<input type='checkbox' name='enable' readonly>",$body);

				if($reseller_rows->auth_req) $body = str_replace("{auth_req}","<input type='checkbox' name='auth_req' readonly checked >",$body);
				else $body = str_replace("{auth_req}","<input type='checkbox' name='auth_req' readonly>",$body);

				$body = str_replace("{sub}","<input type='text' name='sub' value='".$reseller_rows->sub."' style=\"$css_textbox\" readonly>",$body);
				$body = str_replace("{margin}","<input type='text' name='margin' value='".$reseller_rows->margin."' style=\"$css_textbox\" readonly>",$body);

				$body = str_replace("{setup}","<input type='text' name='setup' value='".$reseller_rows->setup."' style=\"$css_textbox\" readonly>",$body);
				$body = str_replace("{charge}","<input type='text' name='charge' value='".$reseller_rows->charge."' style=\"$css_textbox\" readonly>",$body);
				$body = str_replace("{expire}","<input type='text' name='expire' value='".$reseller_rows->expire."' style=\"$css_textbox\" readonly>",$body);

		} else {
				// 상품판매 활성화 : 비활성화시 상품노출 안됨
				if($reseller_rows->enable) $body = str_replace("{enable}",_form_check_enable("on"),$body);
				else $body = str_replace("{enable}",_form_check_enable(""),$body);

				if($reseller_rows->auth_req) $body = str_replace("{auth_req}","<input type='checkbox' name='auth_req' checked >",$body);
				else $body = str_replace("{auth_req}","<input type='checkbox' name='auth_req' >",$body);

				$body = str_replace("{sub}",_form_text("sub",$reseller_rows->sub,$css_textbox),$body);
				$body = str_replace("{margin}",_form_text("margin",$reseller_rows->margin,$css_textbox),$body);

				$body = str_replace("{setup}",_form_text("setup",$reseller_rows->setup,$css_textbox),$body);
				$body = str_replace("{charge}",_form_text("charge",$reseller_rows->charge,$css_textbox),$body);
				$body = str_replace("{expire}",_form_text("expire",$reseller_rows->expire,$css_textbox),$body);
		}

		//# 리셀러 그레이드
		$form_grade = "<select name='grade' style=\"$css_textbox\" >";
		$query = "select * from service_reseller_grade where enable ='on'";
		if($rowss = _mysqli_query_rowss($query)){	
			for($i=0;$i<count($rowss);$i++){
				$rows1 = $rowss[$i];
				if($reseller_rows->grade == $rows1->Id) $form_grade .= "<option value='".$rows1->Id."' selected>".$rows1->title." / Margin: ".$rows1->margin."% / max Dipth: ".$rows1->level."</option>"; 
				else $form_grade .= "<option value='".$rows1->Id."'>".$rows1->title." / Margin ".$rows1->margin."% / max Dipth: ".$rows1->level."</option>";
			}
		}
		$form_grade .= "</select>";
		$body = str_replace("{reseller_grade}",$form_grade,$body);


		$body = str_replace("{bankname}",_form_text("bankname",$reseller_rows->bankname,$css_textbox),$body);
		$body = str_replace("{bankswiff}",_form_text("bankswiff",$reseller_rows->bankswiff,$css_textbox),$body);
		$body = str_replace("{banknum}",_form_text("banknum",$reseller_rows->banknum,$css_textbox),$body);
		$body = str_replace("{bankuser}",_form_text("bankuser",$reseller_rows->bankuser,$css_textbox),$body);		

		$body = str_replace("{description}","<textarea name='description' rows='10' style='$css_textarea'>".stripslashes($reseller_rows->description)."</textarea>",$body);	
		*/

		echo $body;


	} else {
		$body = _skin_page($skin_name,"error");
		
		$msg = "오류. 페이지 접근 보안키값이 일치하지 않습니다.";
		$body = str_replace("<!--{error_message}-->",$msg,$body);
		echo $body;	
	}


	
?>