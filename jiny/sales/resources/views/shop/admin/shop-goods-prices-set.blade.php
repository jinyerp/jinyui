<x-theme>
	<x-main class="p-4">
		<x-main-content class="bg-white p-4">
			
		</x-main-content>
	</x-main>
</x-theme>

{formstart}
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td style="font-size:12px;padding:10px;"> 
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td width="100" style="font-size:12px;padding:10px;">판매가격 :</td>
		<td style="font-size:12px;padding:10px;" width="200">{sell_currency}</td>
		<td style="font-size:12px;padding:10px;" width="200">{prices_sell}</td>
		<td style="font-size:12px;padding:10px;">일반 소비자 가격입니다.</td>
	</tr>
	<tr>
		<td width="100" style="font-size:12px;padding:10px;">B2B(도매) 단가 :</td>
		<td style="font-size:12px;padding:10px;" width="200">{b2b_currency}</td>
		<td style="font-size:12px;padding:10px;" width="200">{prices_b2b}</td>
		<td style="font-size:12px;padding:10px;">도매쇼핑몰 쇼핑시 적용가격, 입점 및 납품시 적용 
		기준가격입니다.</td>
	</tr>
	<tr>
		<td width="100" style="font-size:12px;padding:10px;">매입가격 :</td>
		<td style="font-size:12px;padding:10px;" width="200">{buy_currency}</td>
		<td style="font-size:12px;padding:10px;" width="200">{prices_buy}</td>
		<td style="font-size:12px;padding:10px;">판매재고 / 매출계산시 적용되는 가격입니다.</td>
	</tr>
</table>
		</td>
	</tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td style="font-size:12px;padding:10px;" align="center"> 선택한 상품을 상기 
		가격으로 일괄 변경합니다. {form_submit} </td>
	</tr>
</table>
{formend}