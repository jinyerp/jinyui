<?

	//*  OpenShopping V2.1
	//*  Program by : hojin lee
	//*

	//* 리셀러별 회원 고객 서비스 목록 
	//* 2016.01.29 : 코드수정

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

	include ($_SERVER['DOCUMENT_ROOT']."/func/css.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/pagination.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/members.php");
	include ($_SERVER['DOCUMENT_ROOT']."/func/reseller.php");
	
	//********** Ajax Process **********
	$ajaxkey = _formdata("ajaxkey");
	if(isset($_SESSION['ajaxkey']) == $ajaxkey) { // Ajax CallKey Securities Checking...
		
		// Sales 사용자 DB 접근.
		//include "./sales.php";

		$javascript = "<script>

			$('#priod').on('change',function(){
				var priod = $('#priod').val();
				var amount = $('#charge').val();

				if(priod == '1' ) {
					$('#pay_amount').val(amount);
					$('#discount').html(\"\");

				} else if(priod == '3' ) {
					amount = Number(amount) * 3 * 0.95;
					$('#pay_amount').val(amount);
					$('#discount').html(\"5%\");

				} else if(priod == 6 ) {
					amount = Number(amount) * 6 * 0.9;
					$('#pay_amount').val(amount);
					$('#discount').html(\"10%\");

				} else if(priod == 12 ) {
					amount = Number(amount) * 12 * 0.85;
					$('#pay_amount').val(amount);
					$('#discount').html(\"15%\");

				}
				//$('#discount').html(\"5%\");
				//alert(priod);
			});

			function form_submit(mode,uid){
				var url = \"ajax_reseller_editup.php?uid=\"+uid+\"&mode=\"+mode;
				$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('#mainbody').html(data);

                        }
            	});					
			}

		</script>";

		$body = $script._skin_page($skin_name,"reseller_service_renewal");
		// $body = $javascript._theme_page($site_env->theme,"service_reseller_renewal_view",$site_language,$site_mobile);


		$cookie_email = $_COOKIE['cookie_email']; // 로그인 이메일
		$mode = _formmode();
		$uid = _formdata("uid");
		$limit = _formdata("limit");
	
	
		// echo $ajaxkey;
		$body=str_replace("{formstart}","<form id='data' name='service' method='post' enctype='multipart/form-data'> 
					    				<input type='hidden' name='ajaxkey' value='$ajaxkey'>
					    				<input type='hidden' name='limit' value='$limit'>	    				
										<input type='hidden' name='uid' value='$uid'>",$body);
		$body = str_replace("{formend}","</form>",$body);
		

		$query = "select * from service.reseller WHERE `Id`='$uid'";
		if($rows = _mysqli_query_rows($query)){	
			$body = str_replace("{code}",$rows->code,$body);
			$body = str_replace("{email}",$rows->email,$body);

			$query = "select * from service.reseller_program where `Id`='".$rows->program."'";
			if($rows1 = _mysqli_query_rows($query)){
				$body = str_replace("{program}",$rows1->title,$body);
			}

			$body = str_replace("{expire}",$rows->expire,$body);


			$priod = "<select name='priod' id=\"priod\">
				<option value='1'>1개월</option>
				<option value='3'>3개월(5%할인)</option>
				<option value='6'>6개월(10%할인)</option>
				<option value='12'>12개월(15%할인)</option>
			</select>";
			$body = str_replace("{renewal_priod}",$priod,$body);
			$body = str_replace("{amount}",$rows->charge."<input type='hidden' name='charge' value=\"".$rows->charge."\" id=\"charge\">",$body);

			$body = str_replace("{discount}","<span id=\"discount\">-</span>",$body);


			$resellers1 = _reseller_rows($rows->email);

			$body = str_replace("{bankname}",$resellers1->bankname,$body);
			$body = str_replace("{bankswiff}",$resellers1->bankswiff,$body);
			$body = str_replace("{banknum}",$resellers1->banknum,$body);
			$body = str_replace("{bankuser}",$resellers1->bankuser,$body);

			$amount = $rows->charge;
			$body = str_replace("{pay_amount}","<input type='text' name='pay_amount' value=\"".$amount."\" id=\"pay_amount\" style=\"$css_textbox\">",$body);
			$body = str_replace("{pay_user}",_form_text("pay_user",$rows->pay_user,$css_textbox),$body);

			$body = str_replace("{description}","<textarea name='description' rows='10' style='$css_textarea'>".stripslashes($rows->description)."</textarea>",$body);	
			
			$body = str_replace("{form_submit}","
				<input type='button' value='연장신청' onclick=\"javascript:form_submit('renewal','".$uid."')\" style=\"".$css_btn_gray."\" >",$body);
		}

		echo $body;


	} else {
		$body = _thme_page($skin_name,"error");
		
		$msg = "오류. 페이지 접근 보안키값이 일치하지 않습니다.";
		$body = str_replace("<!--{error_message}-->",$msg,$body);
		echo $body;	
	}


	
?>