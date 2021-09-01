<?
	//*  OpenShopping V2.1
	//*  Program by : hojin lee
	//*  
	//*

	// update : 2016.01.09 = 코드정리 

	@session_start();
	
	include "./conf/dbinfo.php";
	include "./func/mysql.php";

	include "./func/datetime.php";
	include "./func/file.php";
	include "./func/form.php";
	include "./func/string.php";
	include "./func/javascript.php";
	
	include "./func/mobile.php";
	include "./func/language.php";
	include "./func/country.php";

	include "./func/site.php";	// 사이트 환경 설정

	include "./func/layout.php";
	include "./func/header.php";
	include "./func/footer.php";
	include "./func/menu.php";
	include "./func/category.php";
	include "./func/skin.php";

	include "./func/error.php";


	include "./func/goods.php";
	include "./func/orders.php";
	include "./func/butten.php";

	include "./func/css.php";
	include "./func/curl.php";

	

	$javascript = "<script>
		function form_submit(mode,uid){
					var url = \"/ajax_shop_goods_editup.php?uid=\"+uid+\"&mode=\"+mode;
					var formData = new FormData($('#data')[0]);
					$.ajax({
						url:url,
        				type: 'POST',
        				data: formData,
        				async: false,
        				success: function (data) {
        					$('#mainbody').html(data);
        				},
        				cache: false,
        				contentType: false,
        				processData: false
    				});
					
		}

		function form_delete(mode){	
			var returnValue = confirm(\"삭제하겠습니까?\");
			if(returnValue == true){		

				var url = \"/ajax_shop_goods_editup.php?mode=\"+mode;
				var form = document.goods;
				// form.mode.value = mode;
				// alert(form.mode.value);

				$.ajax({
                	url:url,
                	type:'post',
                	data:$('form').serialize(),
                	success:function(data){
                    	$('#mainbody').html(data);
                	}
            	});
			}
		}
				function goods_relation(mode,uid){
					var url = \"/ajax_shop_goods_relation.php?uid=\"+uid+\"&mode=\"+mode;
					
					$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('#mainbody').html(data);

                        }
                    });
				}

				function resales(mode,gid){
					var url = \"/ajax_shop_goods_resales.php?gid=\"+gid+\"&mode=\"+mode;
					
					$.ajax({
                        url:url,
                        type:'post',
                        data:$('form').serialize(),
                        success:function(data){
                            $('#mainbody').html(data);

                        }
                    });
				}




		function relation(mode,uid){
				var maskHeight = $(document).height();  
				var maskWidth = $(window).width();

				//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
				$('#popup_mask').css({'width':maskWidth,'height':maskHeight});
				
				// 팡법창 크기 계산
				//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
				// popup_size(1000,500);
				var width = 800;
				var height = 500;
				var left = ($(window).width() - width )/2;
				var top = ( $(window).height() - height )/2;			
				$('#popup_body').css({'width':width,'height':height,'left':left,'top':50}); 			  
    
    			//마스크의 투명도 처리
    			$('#popup_mask').fadeTo(\"slow\",0.8); 
				$('#popup_body').show();

				// 팝업 내용을 Ajax로 읽어옴
				var url = \"/ajax_shop_goods_relation_new.php?uid=\"+uid+\"&mode=\"+mode;
				$.ajax({
            		url:url,
            		type:'post',
            		data:$('form').serialize(),
            		success:function(data){
                		$('#popup_body').html(data);

                		var maskHeight1 = $(document).height();  
						var maskWidth1 = $(window).width();

						//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
						$('#popup_mask').css({'width':maskWidth1,'height':maskHeight1});
            		}
        		}); 
		}

		function relation_remove(gid){
			var relation_goods = $('#relation_goods').val();
			//alert(relation_goods);
			var result = relation_goods.replace(gid+';','');
			$('#relation_goods').val(result);

			//var relation = $('#relation_goods').val();
			// alert(relation);

			$.ajax({
            	url:'/ajax_shop_goods_relation.php?relation='+result,
               	type:'post',
               	data:$('form').serialize(),
               	success:function(data){
                   	$('#relation_list').html(data);
               	}
            });
		}

		function image_upload(mode,gid){
			var url = \"/ajax_shop_goods_files.php?gid=\"+gid+\"&mode=\"+mode;
			var formData = new FormData($('#data')[0]);
			$.ajax({
				url:url,
        		type: 'POST',
        		data: formData,
        		async: false,
        		success: function (data) {
        			$('#images_files').html(data);
        		},
        		cache: false,
        		contentType: false,
        		processData: false
    		});
		}

		function image_remove(mode,gid,images){
			var url = '/ajax_shop_goods_files.php?gid='+gid+'&mode='+mode+'&images='+images;
			alert(url);
			$.ajax({
                url:url,
                type:'post',
                data:$('form').serialize(),
                success:function(data){
                   	$('#images_files').html(data);
                }
            });
		}

	</script>";




	//********** Ajax Process **********
	$ajaxkey = _formdata("ajaxkey");
	if(isset($_SESSION['ajaxkey']) == $ajaxkey) { // Ajax CallKey Securities Checking...
		
		// Sales 사용자 DB 접근.
		include "./sales.php";


		/////////////
		$body = "<script src=\"/js/tabbar.js\"></script>\n".$javascript._skin_page($skin_name,"shop_goods_detail");
		//$body = str_replace("</head>","</head>",$body);
		//$body = str_replace("</head>","<script src=\"/js/tabbar.js\"></script>\n"."</head>",$body);


		$cookie_email = $_COOKIE['cookie_email']; // 로그인 이메일
		$mode = _formmode();
		$uid = _formdata("uid");
		$limit = _formdata("limit");
		$search = _formdata("searchkey");
		$category = _formdata("category");
		$_enable = _formdata("_enable");
		$lis_tnum = _formdata("lis_tnum");
		$_soldout = _formdata("_soldout");
		
		// echo "category = $category <br>";
		$body=str_replace("{formstart}","<form id='data' name='good' method='post' enctype='multipart/form-data'> 
					    				<input type='hidden' name='ajaxkey' value='$ajaxkey'>
					    				<input type='hidden' name='limit' value='$limit'>
					    				<input type='hidden' name='searchkey' value='$search'>	
					    				<input type='hidden' name='category' value='$category'>
					    				<input type='hidden' name='_enable' value='$_enable'>
						<input type='hidden' name='list_num' value='$list_num'>
						<input type='hidden' name='_soldout' value='$_soldout'>	    					    				
										<input type='hidden' name='uid' value='$uid'>",$body);
		$body = str_replace("{formend}","</form>",$body);
		
			
			
			
			
		if($goods = _shop_goods_rows($uid)){

			$form_submit  = "<input type='button' value='수정' onclick=\"javascript:form_submit('".$mode."','".$uid."')\" style=\"".$css_btn_gray."\" > ";
			$form_submit .= "<input type='button' value='삭제' onclick=\"javascript:form_delete('delete')\" style=\"".$css_btn_gray."\" >  ";
			
			if(isset($goods->sales_gid)){
			} else {	
				$form_submit  .= "<input type='button' value='관리연동' onclick=\"javascript:sales_submit('".$mode."','".$uid."')\" style=\"".$css_btn_gray."\" > ";
			}

			$body = str_replace("{form_submit}",$form_submit,$body);

		} else {
			$form_submit = "<input type='button' value='저장' onclick=\"javascript:form_submit('".$mode."','".$uid."')\" style=\"".$css_btn_gray."\" >";
			$body = str_replace("{form_submit}",$form_submit,$body);			
		}





			// 상품판매 활성화 : 비활성화시 상품노출 안됨
			if($goods->enable) $body = str_replace("{enable}",_form_check_enable("on"),$body);
			else $body = str_replace("{enable}",_form_check_enable(""),$body);

			// 판매기간 설정
			if($goods->check_priod) $body = str_replace("{check_priod}",_form_checkbox("check_priod","on"),$body);
			else $body = str_replace("{check_priod}",_form_checkbox("check_priod",""),$body);

			if($goods->startselling){
				$body = str_replace("{startselling}",_form_date("start",$goods->startselling,$css_textbox),$body);
				$body = str_replace("{endselling}",_form_date("end",$goods->endselling,$css_textbox),$body);
			} else {
				$body = str_replace("{startselling}",_form_date("start",$TODAY,$css_textbox),$body);
				$body = str_replace("{endselling}",_form_date("end",$goods->endselling,$css_textbox),$body);
			}

			// 상품노출 우선순위
			$body = str_replace("{pos}",_form_number("pos",$goods->pos,$css_textbox),$body);


			//====================================
			// 판매자, 상품등록자 
			function _shop_seller_select($seller){
				global $css_textbox;
				global $cookie_email;
				$query = "select * from `resales_seller` ";
				$seller_select = "<select name='seller' style=\"$css_textbox\">";
				$seller_select .= "<option value='".$cookie_email."'>직접등록</option>";
				if($rowss = _sales_query_rowss($query)){	
					
					for($i=0;$i<count($rowss);$i++){
						$rows1 = $rowss[$i];
						if($seller == $rows1->email){
							$seller_select .= "<option value='".$rows1->email."' selected>".$rows1->name."</option>";
						} else $seller_select .= "<option value='".$rows1->email."'>".$rows1->name."</option>";
					}				
				}
				$seller_select .= "</select>";
				return $seller_select;
			}

			$body = str_replace("{seller}",_shop_seller_select($goods->seller),$body);

			// 입점상품 : 승인여부 체크
			if($goods->seller_auth) $body = str_replace("{seller_auth}",_form_checkbox("seller_auth","on"),$body);
			else $body = str_replace("{seller_auth}",_form_checkbox("seller_auth",""),$body);

			// 입점상품 : 대리배송, 대리배송은 기존 재고량과 상관이 없습 
			if($goods->seller_order) $body = str_replace("{seller_order}",_form_checkbox("seller_order","on"),$body);
			else $body = str_replace("{seller_order}",_form_checkbox("seller_order",""),$body);


		
			// 상품별 판매국가 : 수동으로 지정 가능 , multi select 문으로 작성	
			function _shop_country_select($goods){
				global $css_multiselect;
				$query = "select * from `shop_country` ";	
				if($rowss = _sales_query_rowss($query)){	
					$country_check = explode(";",$goods->sales_country);
					
					$sales_country = "<select multiple name='sales_country[]' size='10' style='$css_multiselect'>";
			
					for($i=0;$i<count($rowss);$i++){
						$rows1 = $rowss[$i];
						
						if($goods->sales_country){ //배송 가능 지역
							for($country_flag = NULL, $k=0;$k<count($country_check); $k++) if($country_check[$k] == $rows1->code) $country_flag = "TRUE";
							if($country_flag) $sales_country .= "<option value='".$rows1->code."' selected>".$rows1->code."</option>";
							else $sales_country .= "<option value='".$rows1->code."'>".$rows1->code."</option>";
						} else $sales_country .= "<option value='".$rows1->code."' selected>".$rows1->code."</option>";
					}
					$sales_country .= "</select>";
				}
				return $sales_country;
			}

			$body = str_replace("{sales_country}",_shop_country_select($goods),$body);

			function _shop_salescountry_select($goods){
				global $css_textbox;
				$query = "select * from `shop_country` ";	
				if($rowss = _sales_query_rowss($query)){					
					$seller_country = "<select name='country' style=\"$css_textbox\">";
					for($i=0;$i<count($rowss);$i++){
						$rows1 = $rowss[$i];
						if($goods->country == $rows1->code){
							$seller_country .= "<option value='".$rows1->code."' selected>".$rows1->code."</option>";
						} else $seller_country .= "<option value='".$rows1->code."'>".$rows1->code."</option>";
					}
					
					$seller_country .= "</select>";
				}

				return $seller_country; 
			}
				
			$body = str_replace("{country}",_shop_salescountry_select($goods),$body);
			

			//# ***********************************************************************************************************

			// 마스터 카테고리 출력
			$master_cate = _curl_post("http://www.saleshosting.co.kr/service_goods_cate.php",$goods->master_cate);
			$body = str_replace("{main_cate}",$master_cate,$body);



			// 상품 기본 카테고리
			function _shop_category_select($goods,$site_language){
				$css_multiselect = "width:100%;
				height:400px;	
				font-size:12px;	
				border:1px solid #d8d8d8;";


				$query = "select * from `shop_cate` ";
				// $query .= "where code = 'default' ";
				$query .= "order by pos desc";	
				if($rowss = _sales_query_rowss($query)){

					$check = explode(";",$goods->cate);
					$cate = "<select multiple name='cate[]' size='30' style='$css_multiselect'>";
					
					for($i=0;$i<count($rowss);$i++){
						
						$rows= $rowss[$i];
						$cate .= "<option value='".$rows->Id."' ";
					
						for($k=0;$k<count($check); $k++){
							if($check[$k] == $rows->Id) $cate .= "selected";
						}
				
						$title = stripslashes($rows->title);
						$title_name = json_decode($title);

						for($j=0,$space="";$j<$rows->level;$j++) $space .= "&nbsp;&nbsp;└"; 

						$cate .= ">$space".$title_name->$site_language."</option>";

					}
					$cate .= "</select>";	
					
				}
				
				return $cate;
			} 

			$body = str_replace("{cate}",_shop_category_select($goods,$site_language),$body);
			// $body = str_replace("{cate}",$cate,$body);



			// 무료배송 
			if($goods->free_shipping) $body = str_replace("{free_shipping}",_form_checkbox("free_shipping","on"),$body);
			else $body = str_replace("{free_shipping}",_form_checkbox("free_shipping",""),$body);

			// 주문 문구 입력
			$body = str_replace("{ordertext}",_form_checkbox("ordertext",$goods->ordertext),$body);

			// 주문 문구 입력
			$body = str_replace("{attach}",_form_checkbox("attach",$goods->attach),$body);

			// 블로그 주소 입력
			$body = str_replace("{blog}",_form_text("blog",$goods->blog,$css_textbox),$body);

			// 유트브 주소입력
			$body = str_replace("{youtube}",_form_textarea("youtube",$goods->youtube,"5",$css_textbox),$body);


			// 싱품 바코드 
			// $body = str_replace("{barcode}","<input type='text' name='barcode' value='".$goods->barcode."' id=\"cssFormStyle\" >",$body);			
			$body = str_replace("{barcode}",_form_text("barcode",$goods->barcode,$css_textbox),$body);

			// 상품코드 
			// $body = str_replace("{goodcode}","<input type='text' name='goodcode' value='".$goods->code."' id=\"cssFormStyle\" >",$body);
			$body = str_replace("{goodcode}",_form_text("goodcode",$goods->goodcode,$css_textbox),$body);

			// 모델명
			// $body = str_replace("{model}","<input type='text' name='model' value='".$goods->model."' id=\"cssFormStyle\" >",$body);
			$body = str_replace("{model}",_form_text("model",$goods->model,$css_textbox),$body);

			// 브랜드
			// $body = str_replace("{brand}","<input type='text' name='brand' value='".$goods->brand."' id=\"cssFormStyle\" >",$body);
			$body = str_replace("{brand}",_form_text("brand",$goods->brand,$css_textbox),$body);


			//# ***********************************************************************************************************

			// =============
			// 상품설명 : 가격표시
			if($goods->check_prices) $body = str_replace("{check_prices}",_form_checkbox("check_prices","on"),$body);
			else $body = str_replace("{check_prices}",_form_checkbox("check_prices",""),$body);
			
			// 상품설명 : 회원가격전용
			if($goods->check_memprices) $body = str_replace("{check_memprices}",_form_checkbox("check_memprices","on"),$body);
			else $body = str_replace("{check_memprices}",_form_checkbox("check_memprices",""),$body);
			
			// 상품설명 : 스팩표시
			if($goods->check_spec) $body = str_replace("{check_spec}",_form_checkbox("check_spec","on"),$body);
			else $body = str_replace("{check_spec}",_form_checkbox("check_spec",""),$body);
			
			// 상품설명 : 서브타이틀 표시
			if($goods->check_subtitle) $body = str_replace("{check_subtitle}",_form_checkbox("check_subtitle","on"),$body);
			else $body = str_replace("{check_subtitle}",_form_checkbox("check_subtitle",""),$body);
			
			// 상품설명 : USD 가격표시
			if($goods->check_usd) $body = str_replace("{check_usd}",_form_checkbox("check_usd","on"),$body);
			else $body = str_replace("{check_usd}",_form_checkbox("check_usd",""),$body);
			
			if($goods->check_goodname) $body = str_replace("{check_goodname}",_form_checkbox("check_goodname","on"),$body);
			else $body = str_replace("{check_goodname}",_form_checkbox("check_goodname",""),$body);

			
			// ***** ***** ***** *****
			
			//# 매입 / B2B / 판매 가격 설정
			$query = "select * from `shop_currency`";
			if($rowss = _sales_query_rowss($query)){
				$buy_currency = "<select name='buy_currency' style=\"$css_textbox\" >";
				$b2b_currency = "<select name='b2b_currency' style=\"$css_textbox\" >";
				$sell_currency = "<select name='sell_currency' style=\"$css_textbox\" >";

				for($ii=0;$ii<count($rowss);$ii++){
					$rows1=$rowss[$ii];

					if($goods->buy_currency == $rows1->currency) {
						$buy_currency .= "<option value='".$rows1->currency."' selected>".$rows1->currency."-".$rows1->name."</option>"; 
					} else {
						$buy_currency .= "<option value='".$rows1->currency."'>".$rows1->currency."-".$rows1->name."</option>";
					}

					if($goods->b2b_currency == $rows1->currency) {
						$b2b_currency .= "<option value='".$rows1->currency."' selected>".$rows1->currency."-".$rows1->name."</option>"; 
					} else {
						$b2b_currency .= "<option value='".$rows1->currency."'>".$rows1->currency."-".$rows1->name."</option>";
					}

					if($goods->sell_currency == $rows1->currency) {
						$sell_currency .= "<option value='".$rows1->currency."' selected>".$rows1->currency."-".$rows1->name."</option>"; 
					} else {
						$sell_currency .= "<option value='".$rows1->currency."'>".$rows1->currency."-".$rows1->name."</option>";
					}
				}

				$buy_currency .= "</select>";
				$b2b_currency .= "</select>";
				$sell_currency .= "</select>";

				$body = str_replace("{buy_currency}",$buy_currency,$body);
				$body = str_replace("{b2b_currency}",$b2b_currency,$body);
				$body = str_replace("{sell_currency}",$sell_currency,$body);

				//$body = str_replace("{prices_buy}","<input type='text' name='prices_buy' value='".$goods->prices_buy."' id=\"cssFormStyle\" >",$body);
				$body = str_replace("{prices_buy}",_form_text("prices_buy",$goods->prices_buy,$css_textbox),$body);
				//$body = str_replace("{prices_b2b}","<input type='text' name='prices_b2b' value='".$goods->prices_b2b."' id=\"cssFormStyle\" >",$body);
				$body = str_replace("{prices_b2b}",_form_text("prices_b2b",$goods->prices_b2b,$css_textbox),$body);
				//$body = str_replace("{prices_sell}","<input type='text' name='prices_sell' value='".$goods->prices_sell."' id=\"cssFormStyle\"  >",$body);
				$body = str_replace("{prices_sell}",_form_text("prices_sell",$goods->prices_sell,$css_textbox),$body);
			}
					

					
							
			// 부가세, 부가세율, 재고	
			/*		
			if($goods->vat) {
				$body = str_replace("{vat}","<input type='checkbox' name='vat' checked>",$body);
			} else {
				$body = str_replace("{vat}","<input type='checkbox' name='vat' >",$body);
			}

			*/
			$body = str_replace("{vat}",_form_checkbox("vat",$goods->vat),$body);

			// $body = str_replace("{vatrate}","<input type='text' name='vatrate' value='".$goods->vatrate."' id=\"cssFormStyle\"  >",$body);
			$body = str_replace("{vatrate}",_form_text("vatrate",$goods->vatrate,$css_textbox),$body);

			// 재고수량 및 판매체크
			// ========================
			// 품절표시 : 체크시 상품 품절, 주문 방지
			if($goods->soldout) $body = str_replace("{soldout}",_form_checkbox("soldout","on"),$body);
			else $body = str_replace("{soldout}",_form_checkbox("soldout",""),$body);
			
			// 재고 주문연동 : 재고 부족시에도 주문 가능
			if($goods->stock_check) $body = str_replace("{stock_check}",_form_checkbox("stock_check","on"),$body);
			else $body = str_replace("{stock_check}",_form_checkbox("stock_check",""),$body);

			$body = str_replace("{stock}",_form_text("stock",$goods->stock,$css_textbox),$body);
			$body = str_replace("{safe_stock}",_form_text("safe_stock",$goods->safe_stock,$css_textbox),$body);

			// ===========================
			// 할인
			if($goods->discount) $body = str_replace("{discount}",_form_checkbox("discount","on"),$body);
			else $body = str_replace("{discount}",_form_checkbox("discount",""),$body);

			$body = str_replace("{discount_rate}",_form_text("discount_rate",$goods->discount_rate,$css_textbox),$body);
			$body = str_replace("{discount_endpriod}",_form_date("discount_endpriod",$goods->discount_endpriod,$css_textbox),$body);


			

			//# ***********************************************************************************************************
							
			//# 상품이미지	
			$body = str_replace("{imgsize}",_form_text("imgsize",$goods->imgsize,$css_textbox),$body);
			$body = str_replace("{mobile_imgsize}",_form_text("mobile_imgsize",$goods->mobile_imgsize,$css_textbox),$body);

			if($goods->images_outline) $body = str_replace("{images_outline}",_form_checkbox("images_outline","on"),$body);
			else $body = str_replace("{images_outline}",_form_checkbox("images_outline",""),$body);
			$body = str_replace("{outline_color}",_form_text("outline_color",$goods->images_outline_color,$css_textbox),$body);
			$body = str_replace("{outline_width}",_form_text("outline_width",$goods->images_outline_width,$css_textbox),$body);

			$body = str_replace("{watermark}",_form_text("watermark",$goods->watermark,$css_textbox),$body);

			// 이미지 정보 포시
			
			if($goods->images1) {
				$img_url = "http://".$sales_db->domain."/".$goods->images1;
				$body = str_replace("{goodimg1}","<img src='".$img_url."' border='0' width='150'>",$body);
				$body = str_replace("{goodimg1_upload}",_form_file("userfile1",$css),$body);
				$body = str_replace("{goodimg1_filename}",$img_url,$body);

			} else {
				$body = str_replace("{goodimg1}","이미지1",$body);
				$body = str_replace("{goodimg1_upload}",_form_file("userfile1",$css),$body);
				$body = str_replace("{goodimg1_filename}","",$body);
			}

				
			if($goods->images2) {
				$img_url = "http://".$sales_db->domain."/".$goods->images2;
				$body = str_replace("{goodimg2}","<img src='".$img_url."' border='0' width='150'>",$body);
				$body = str_replace("{goodimg2_upload}",_form_file("userfile2",$css),$body);
				$body = str_replace("{goodimg2_filename}",$img_url,$body);
			} else {
				$body = str_replace("{goodimg2}","이미지2",$body);
				$body = str_replace("{goodimg2_upload}",_form_file("userfile2",$css),$body);
				$body = str_replace("{goodimg2_filename}","",$body);		
			}

				
			if($goods->images3) {
				$img_url = "http://".$sales_db->domain."/".$goods->images3;
				$body = str_replace("{goodimg3}","<img src='".$img_url."' border='0' width='150'>",$body);
				$body = str_replace("{goodimg3_upload}",_form_file("userfile3",$css),$body);
				$body = str_replace("{goodimg3_filename}",$img_url,$body);
			} else {
				$body = str_replace("{goodimg3}","이미지3",$body);
				$body = str_replace("{goodimg3_upload}",_form_file("userfile3",$css),$body);
				$body = str_replace("{goodimg3_filename}","",$body);
			}

			if($goods->images4) {
				$img_url = "http://".$sales_db->domain."/".$goods->images4;
				$body = str_replace("{goodimg4}","<img src='".$img_url."' bo4der='0' width='150'>",$body);
				$body = str_replace("{goodimg4_upload}",_form_file("userfile3",$css),$body);
				$body = str_replace("{goodimg4_filename}",$img_url,$body);
			} else {
				$body = str_replace("{goodimg4}","이미지4",$body);
				$body = str_replace("{goodimg4_upload}",_form_file("userfile4",$css),$body);
				$body = str_replace("{goodimg4_filename}","",$body);
			}

			if($goods->images5) {
				$img_url = "http://".$sales_db->domain."/".$goods->images5;
				$body = str_replace("{goodimg5}","<img src='".$img_url."' bo4der='0' width='150'>",$body);
				$body = str_replace("{goodimg5_upload}",_form_file("userfile5",$css),$body);
				$body = str_replace("{goodimg5_filename}",$img_url,$body);
			} else {
				$body = str_replace("{goodimg5}","이미지5",$body);
				$body = str_replace("{goodimg5_upload}",_form_file("userfile5",$css),$body);
				$body = str_replace("{goodimg5_filename}","",$body);
			}

			if($goods->images6) {
				$img_url = "http://".$sales_db->domain."/".$goods->images4;
				$body = str_replace("{goodimg6}","<img src='".$img_url."' bo4der='0' width='150'>",$body);
				$body = str_replace("{goodimg6_upload}",_form_file("userfile6",$css),$body);
				$body = str_replace("{goodimg6_filename}",$img_url,$body);
			} else {
				$body = str_replace("{goodimg6}","이미지6",$body);
				$body = str_replace("{goodimg6_upload}",_form_file("userfile6",$css),$body);
				$body = str_replace("{goodimg6_filename}","",$body);
			}

			if($goods->images7) {
				$img_url = "http://".$sales_db->domain."/".$goods->images7;
				$body = str_replace("{goodimg7}","<img src='".$img_url."' bo4der='0' width='150'>",$body);
				$body = str_replace("{goodimg7_upload}",_form_file("userfile7",$css),$body);
				$body = str_replace("{goodimg7_filename}",$img_url,$body);
			} else {
				$body = str_replace("{goodimg7}","이미지6",$body);
				$body = str_replace("{goodimg7_upload}",_form_file("userfile7",$css),$body);
				$body = str_replace("{goodimg7_filename}","",$body);
			}

			if($goods->images8) {
				$img_url = "http://".$sales_db->domain."/".$goods->images8;
				$body = str_replace("{goodimg8}","<img src='".$img_url."' bo4der='0' width='150'>",$body);
				$body = str_replace("{goodimg8_upload}",_form_file("userfile8",$css),$body);
				$body = str_replace("{goodimg8_filename}",$img_url,$body);
			} else {
				$body = str_replace("{goodimg8}","이미지8",$body);
				$body = str_replace("{goodimg8_upload}",_form_file("userfile8",$css),$body);
				$body = str_replace("{goodimg8_filename}","",$body);
			}

			if($goods->images9) {
				$img_url = "http://".$sales_db->domain."/".$goods->images9;
				$body = str_replace("{goodimg9}","<img src='".$img_url."' bo4der='0' width='150'>",$body);
				$body = str_replace("{goodimg9_upload}",_form_file("userfile9",$css),$body);
				$body = str_replace("{goodimg9_filename}",$img_url,$body);
			} else {
				$body = str_replace("{goodimg9}","이미지9",$body);
				$body = str_replace("{goodimg9_upload}",_form_file("userfile9",$css),$body);
				$body = str_replace("{goodimg9_filename}","",$body);
			}
			

			/*
			function _form_goods_imgupload($images,$rows){
				global $sales_db;
				if($rows->$images) {
					$img_url = "http://".$sales_db->domain."/".$rows->$images;
					// $body  = _html_div($images,"float:left;width:150px;","<img src='".$rows->$images."' border='0' style='max-width:100%;height:auto;'>");
					//$body .= _html_div($images,"float:left;width:auto;", _html_div($images,"width:100%", _form_file("user".$images,$css))._html_div($images,"width:100%",$img_url) );
					//return _html_div_clearfix($body,"width:100%");
				
					$body = "<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
							<tr>
							<td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width=\"150\" rowspan=\"2\" valign=\"top\">
							"._html_div($images,"width:150px;","<img src='".$rows->$images."' border='0' style='max-width:100%;height:auto;'>")."
							</td>
							<td style='font-size:12px;padding:10px;' valign=\"top\">"._form_file("user".$images,$css)."</td>
							</tr>
							<tr>
								<td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' valign=\"top\">$img_url</td>
							</tr>
							</table>";

					return $body;

				} else {
					//$body = _html_div($images,"width:100%",_form_file("user".$images,$css));
					//return $body;

					$body = "<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
							<tr>
							<td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' width=\"150\" rowspan=\"2\" valign=\"top\">
							$images
							</td>
							<td style='font-size:12px;padding:10px;' valign=\"top\">"._form_file("user".$images,$css)."</td>
							</tr>
							<tr>
								<td style='border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;' valign=\"top\">$img_url</td>
							</tr>
							</table>";

					return $body;

				}
				
			}

			$body = str_replace("{images1}",_form_goods_imgupload("images1",$goods),$body);
			$body = str_replace("{images2}",_form_goods_imgupload("images2",$goods),$body);
			$body = str_replace("{images3}",_form_goods_imgupload("images3",$goods),$body);
			$body = str_replace("{images4}",_form_goods_imgupload("images4",$goods),$body);
			$body = str_replace("{images5}",_form_goods_imgupload("images5",$goods),$body);
			$body = str_replace("{images6}",_form_goods_imgupload("images6",$goods),$body);
			$body = str_replace("{images7}",_form_goods_imgupload("images7",$goods),$body);
			$body = str_replace("{images8}",_form_goods_imgupload("images8",$goods),$body);
			$body = str_replace("{images9}",_form_goods_imgupload("images9",$goods),$body);
			*/


			//# 첨부파일 
			/*
			$body = str_replace("{filename1}",_form_file("userfile6",$css),$body);
			if($goods->detail1){
				$body = str_replace("{filelink1}","&lt;img src='".$goods->detail1."' border=0&gt;",$body);
				$body = str_replace("{filename1_upload}","",$body);
			} else {
				$body = str_replace("{filelink1}","",$body);
				$body = str_replace("{filename1_upload}","",$body);
			}

			$body = str_replace("{filename2}",_form_file("userfile7",$css),$body);
			if($goods->detail2){
				$body = str_replace("{filelink2}","&lt;img src='".$goods->detail2."' border=0&gt;",$body);
				$body = str_replace("{filename2_upload}","",$body);
			} else {
				$body = str_replace("{filelink2}","",$body);
				$body = str_replace("{filename2_upload}","",$body);
			}

			$body = str_replace("{filename3}",_form_file("userfile8",$css),$body);
			if($goods->detail3){
				$body = str_replace("{filelink3}","&lt;img src='".$goods->detail3."' border=0&gt;",$body);
				$body = str_replace("{filename3_upload}","",$body);
			} else {
				$body = str_replace("{filelink3}","",$body);
				$body = str_replace("{filename3_upload}","",$body);
			}
			*/

			//# ***********************************************************************************************************
			// 관련 이미지 ajax로 출력
			$body = str_replace("{html_images_upload}",_form_file("userfile",$css),$body);	
			$body = str_replace("{upload}","<input type='button' value='업로드' onclick=\"javascript:image_upload('upload','".$uid."')\" style=\"".$css_btn_gray."\" >",$body);	
			$body = str_replace("{images_files}","
					<span id=\"images_files\">			
					<script>						
						$.ajax({
                        	url:'/ajax_shop_goods_files.php?gid=$uid',
                        	type:'post',
                        	data:$('form').serialize(),
                        	success:function(data){
                            	$('#images_files').html(data);
                        	}
                    	});
					</script>
					</span>",$body);

			//#언어별 상품명, 상품설명
			$query1 = "select * from `site_language` ";	
			if($rowss1 = _sales_query_rowss($query1)){
					
				$products_language = "";
				$products_forms = "";
				for($i=0;$i<count($rowss1);$i++){
					$rows1=$rowss1[$i];

					if($rows1->code == $site_language){
						$products_language .= "<input id='tab-$i' type='radio' name='goods_language' value='".$rows1->code."' checked=\"checked\">";
					} else {
						$products_language .= "<input id='tab-$i' type='radio' name='goods_language' value='".$rows1->code."'>";
					}
									
					$products_language .= "<label for='tab-$i'>".$rows1->code."</label>";
									
						
					$desktop = $rows1->code;
					$mobile = $rows1->code."_m";
									
					$query1 = "select * from `shop_goods_html` WHERE `goods`='$uid' and `mobile`='pc' and `language`='".$rows1->code."'";
					if($goods_rows = _sales_query_rows($query1)){
						$desktop_html = stripslashes($goods_rows->html);
					} else $desktop_html = "";

					$query1 = "select * from `shop_goods_html` WHERE `goods`='$uid' and `mobile`='m' and `language`='".$rows1->code."'";
					if($goods_rows = _sales_query_rows($query1)){
						$mobile_html = stripslashes($goods_rows->html);
					} else $mobile_html = "";

					//$goodstring = _goodstring($UID,$rows1[code]);
					$code = $rows1->code;		
					$products_forms .="<div class='tab-$i_content' style='border:1px solid #D2D2D2;' bgcolor='#FAFAFA'>
													   
											<table border='0' width='100%' cellspacing='5' cellpadding='5' >
											<tr>
												<td width='110' align='right'>상품명(".$rows1->code.")</td>
												<td>"._form_textarea("goodname_".$rows1->code,stripslashes(json_decode($goods->goodname)->$code),"2",$css_textarea)."</td>
											</tr>
											<tr>
												<td width='110' align='right'>스팩(".$rows1->code.")</td>
												<td>"._form_textarea("spec_".$rows1->code,stripslashes(json_decode($goods->spec)->$code),"2",$css_textarea)."</td>
											</tr>
											<tr>
												<td width='110' align='right'>간략설명(".$rows1->code.")</td>
												<td>"._form_textarea("subtitle_".$rows1->code,stripslashes(json_decode($goods->subtitle)->$code),"3",$css_textarea)."</td>
											</tr>
											<tr>
												<td width='110' align='right'>옵션(".$rows1->code.")</td>
												<td>"._form_textarea("optionitem_".$rows1->code,stripslashes(json_decode($goods->optionitem)->$code),"2",$css_textarea)."</td>
											</tr>
											
											</table>

											<table border='0' width='100%' cellspacing='5' cellpadding='5' >
											<tr><td valign='top'>HTML PC</td></tr>
											<tr><td>"._form_textarea($rows1->code,$desktop_html,"25",$css_textarea)."</td></tr>
											<tr><td valign='top'>HTML MOBILE</td></tr>
											<tr><td>"._form_textarea($rows1->code."_m",$mobile_html,"25",$css_textarea)."</td></tr>
											</table>
													   
										</div>";									 
									
				}
								
				$body = str_replace("{selling_language_form}","<div id='css_tabs'> $products_language $products_forms </div>",$body);			
								
			}
			

			//# ***********************************************************************************************************
			//# 관련 상품 설정 및 출력

			// 관련상품 출력 
			if($goods->relation_check) $body = str_replace("{relation_check}",_form_checkbox("relation_check","on"),$body);
			else $body = str_replace("{relation_check}",_form_checkbox("relation_check",""),$body);

			// 관련상품 출력 형태
			$body = str_replace("{relation_type}",_form_text("relation_type",$goods->relation_type,$css_textbox),$body);
			$body = str_replace("{relation_cols}",_form_text("relation_cols",$goods->relation_cols,$css_textbox),$body);
			$body = str_replace("{relation_rows}",_form_text("relation_rows",$goods->relation_rows,$css_textbox),$body);
			$body = str_replace("{relation_imgsize}",_form_text("relation_imgsize",$goods->relation_imgsize,$css_textbox),$body);

			$body = str_replace("{relation_goods}","<input type=text name='relation_goods' value='".$goods->relation_goods."' id=\"relation_goods\" style=\"$css_textbox\">",$body);

			$body = str_replace("{relation_new}","<input type='button' value='관련추가' onclick=\"javascript:relation('relation','".$uid."')\" style=\"".$css_btn_gray."\" >",$body);

			// 관심 상품 ajax로 출력			
			$body = str_replace("{relation_list}","
					<span id=\"relation_list\">					
					<script>
						
						var relation_goods = $('#relation_goods').val();
						// alert(relation);

						$.ajax({
                        	url:'/ajax_shop_goods_relation.php?relation_goods='+relation_goods,
                        	type:'post',
                        	data:$('form').serialize(),
                        	success:function(data){
                            	$('#relation_list').html(data);

                        	}
                    	});
					</script>
					</span>",$body);
			

			//# ***********************************************************************************************************
			//# 상품입점 

			// 상품입점 ajax로 출력			
			$body = str_replace("{resales_goods}","
					<span id=\"resales_goods\">					
					<script>
						$.ajax({
                        	url:'/ajax_shop_goods_resales.php?gid='+$uid,
                        	type:'post',
                        	data:$('form').serialize(),
                        	success:function(data){
                            	$('#resales_goods').html(data);

                        	}
                    	});
					</script>
					</span>",$body);

			//# ***********************************************************************************************************
			//# 개별 HTML 스킨

			$body = str_replace("{html_skin}",_form_textarea("html_skin",$goods->html_skin,"30",$css_textarea),$body);


			echo $body;


	} else {
		$body = _skin_page($skin_name,"error");
		
		$msg = "오류. 페이지 접근 보안키값이 일치하지 않습니다.";
		$body = str_replace("<!--{error_message}-->",$msg,$body);
		echo $body;	
	}


	
?>