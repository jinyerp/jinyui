<?

	@session_start();

	include "./conf/dbinfo.php";
	include "./func/mysql.php";

	include "./func/file.php";
	include "./func/form.php";
	include "./func/skin.php";
	include "./func/datetime.php";
	include "./func/butten.php";

	// echo "admin_menu";

	// $skin_name = "default";
	// $body = _skin_body("default","site_menu");
		
	// echo $body;
		

	// ================
	// 쇼핑몰 주문 확인 처리
	// ================	

	// if(isset($_COOKIE['cookie_email'])){

		// 셀러 DB 및 각종 함수 include
		// include "./sales.php";
		
		$skin_name = "default";
		$body = _skin_body("default","site_menu");
		
		$body = str_replace("</head>","<link href='/css/tabbar_style.css' rel='stylesheet' type='text/css'></link></head>",$body); 

		// 
		// 카테고리에 대한 자바스크립트 함수 정의
		// 
		$body .= "<script>
				function menu_mode(mode,uid){
					var url = \"/ajax_admin_menu_editup.php?uid=\"+uid+\"&mode=\"+mode;
					// alert(url);
					$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('#menu_edit').html(data);
                        }
                    });
				}

                function menu_edit(mode,uid){
                  	var url = \"/ajax_admin_menu_edit.php?uid=\"+uid+\"&mode=\"+mode;	
                  	alert(url);
                  	$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('#menu_edit').html(data);
                        }
                    }); 	
                }

                function menu_setting(){
                  	var url = \"/ajax_admin_menu_set.php\";	
                  	$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('#menu_edit').html(data);
                        }
                    }); 	
                }
                </script>";


		// 카테고리 리스트는
        // ajax 형태로 처리함.
		$_SESSION['ajaxkey'] = $ajaxkey = md5('ajaxkey'.$_SERVER['PHP_SELF'].$TODAYTIME.microtime()); 
		$body = str_replace("{formstart}","<form name='menu' method='post' enctype='multipart/form-data' action='".$_SERVER['PHP_SELF']."'>
					   <input type='hidden' name='ajaxkey' value='$ajaxkey'>",$body);
		$body = str_replace("{formend}","</form>",$body);

		$button ="<input type='button' value='NEW' onclick=\"javascript:menu_edit('new','0')\" id=\"".$btn_style_gray."\" >";          
		$body = str_replace("{new}",$button,$body);

		$button ="<input type='button' value='Setting' onclick=\"javascript:menu_setting()\" id=\"".$btn_style_gray."\" >";          
		$body = str_replace("{setting}",$button,$body);


		$body = str_replace("{menu_list}","<span id=\"menu_list\">
					<script>
						$.ajax({
            				url:'/ajax_admin_menu.php',
            				type:'post',
            				data:$('form').serialize(),
            				success:function(data){
            					$('#menu_list').html(data);
            				}
        				});
    				</script>
					</span>",$body);

		$body = str_replace("{edit}","<span id=\"menu_edit\"></span>",$body);

		

		echo $body;

	

	/*
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
	*/

		


?>