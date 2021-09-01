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
	include "./func/butten.php";

	include "./func/css.php";

	// ================
	// 쇼핑몰 주문 확인 처리
	// ================	

	if(isset($_COOKIE['cookie_email'])){

		// 셀러 DB 및 각종 함수 include
		include "./sales.php";
		
		$skin_name = "default";
		$body = _skin_body("default","shop_country");
		
		$body = str_replace("</head>","<link href='/css/tabbar_style.css' rel='stylesheet' type='text/css'></link></head>",$body); 

		// 카테고리에 대한 자바스크립트 함수 정의
		// 
		
		$body .= "<script>
				function country_mode(mode,uid){
					var url = \"/ajax_shop_country_editup.php?uid=\"+uid+\"&mode=\"+mode;
					
					$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('#country_edit').html(data);
                        }
                    });
				}

                  function country_edit(mode,uid){
                  	var url = \"/ajax_shop_country_edit.php?uid=\"+uid+\"&mode=\"+mode;
					
                  	$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('#country_edit').html(data);
                        }
                    }); 	
                  }
                  </script>";
		
		
		$_SESSION['ajaxkey'] = $ajaxkey = md5('ajaxkey'.$_SERVER['PHP_SELF'].$TODAYTIME.microtime()); 
		$body=str_replace("{formstart}",$script."<form id='data' name='env' method='post' enctype='multipart/form-data' action='".$_SERVER['PHP_SELF']."'> 
					    		<input type='hidden' name='ajaxkey' value='$ajaxkey'>",$body);
		$body = str_replace("{formend}","</form>",$body);

		$button ="<input type='button' value='NEW' onclick=\"javascript:country_edit('new','0')\" style=\"".$css_btn_gray."\" >";          
		$body = str_replace("{new}",$button,$body);

		// 카테고리 리스트는
        // ajax 형태로 처리함.
		$_SESSION['ajaxkey'] = $ajaxkey = md5('ajaxkey'.$_SERVER['PHP_SELF'].$TODAYTIME.microtime()); 	
		$body = str_replace("{country_list}","
					<form name='cate' method='post' enctype='multipart/form-data' action='".$_SERVER['PHP_SELF']."'>
					   <input type='hidden' name='ajaxkey' value='$ajaxkey'>
					 
					<span id=\"country_list\">
					
					<script>
						$.ajax({
            				url:'/ajax_shop_country.php',
            				type:'post',
            				data:$('form').serialize(),
            				success:function(data){
            					$('#country_list').html(data);
            				}
        				});
    				</script>

					</span>
					</form>",$body);

		$body = str_replace("{edit}","<span id=\"country_edit\"></span>",$body);

		echo $body;

	
	} else {
		// 
		// 사이트 로그인이 안되어 있는 경우, 
		// AJAX로 로그인 처리 요청
		// 
		$skin_name = "default";
		$body = _skin_body("default","login");
		
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

		


?>