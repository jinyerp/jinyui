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
		
		$skin_name = "default";
		$body = _skin_body("default","site_members_agreement");
		$body = str_replace("</head>","<link href='/css/tabbar_style.css' rel='stylesheet' type='text/css'></link></head>",$body); 
		
		$body .= "<script>

				function agree_edit(mode,uid){
                  	$.ajax({
                        url:'/ajax_site_members_agreement_edit.php?uid='+uid+'&mode='+mode,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('.mainbody').html(data);
                        }
                    }); 	
                }
                
                function agree_list(limit){
                	// var search = document.pages.searchkey.value;
                	var url = \"/ajax_site_members_agreement.php?limit=\"+limit;
                	// +\"&search=\"+search;
                  	alert(url);

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

		// Form and Ajax Process
		$_SESSION['ajaxkey'] = $ajaxkey = md5('ajaxkey'.$_SERVER['PHP_SELF'].$TODAYTIME.microtime()); 	
		$body = str_replace("{agreement_list}","
					<form name='agree' method='post' enctype='multipart/form-data' action='".$_SERVER['PHP_SELF']."'>
					   <input type='hidden' name='ajaxkey' value='$ajaxkey'>
					<span id=\"agreement_list\">
					
					<script>
						$.ajax({
            				url:'/ajax_site_members_agreement.php',
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