<x-theme>
	<x-main class="p-4">
		<x-main-content class="bg-white p-4">
			
		</x-main-content>
	</x-main>
</x-theme>

{formstart}
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td style="font-size:12px;padding:10px;" width="50%"> 메인 카테고리 : ( 마스터 입점 
		상품 분류 입니다)</td>
		<td style="font-size:12px;padding:10px;" width="50%"> Shop 카테고리 : 운영 쇼핑몰 
		카테고리 분류 입니다.</td>
	</tr>
	<tr>
		<td style="font-size:12px;padding:10px;" width="50%"> {main_cate}</td>
		<td style="font-size:12px;padding:10px;" width="50%"> {cate}</td>
	</tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td style="font-size:12px;padding:10px;" align="center"> 선택한 상품을 상기 
		카테고리로 일괄 변경합니다. {form_submit} </td>
	</tr>
</table>
{formend}