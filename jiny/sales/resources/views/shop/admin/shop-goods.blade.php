<x-theme>
	<x-main class="p-4">
		<x-main-content class="bg-white p-4">
			
		</x-main-content>
	</x-main>
</x-theme>

<div align="center">

<table border="0" width="1200" cellspacing="0" cellpadding="0">
	<tr>
		<td style="border:1px solid #E9E9E9;font-size:12px;padding:10px;" bgcolor="#FFFFFF">
		{formstart}<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;" bgcolor="#E9E9E9">
				쇼핑몰 : 상품목록</td>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
				 </td>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
				 </td>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
				 </td>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
				{new}</td>
			</tr>
		</table>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="font-size:12px;padding:2px;" width="200">{country}</td>
				<td style="font-size:12px;padding:10px;" width="200">{seller}</td>
				<td style="font-size:12px;padding:2px;" width="100" align="right">
				검색 :</td>
				<td style="font-size:12px;padding:2px;padding-right:10px;">{search_key}</td>				
				<td style="font-size:12px;padding:2px;" width="100">{search}</td>
			</tr>
		</table>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="font-size:12px;padding:2px;" width="200">{enable}</td>
				<td style="font-size:12px;padding:10px;" width="150">{soldout}</td>
				<td style="font-size:12px;padding:2px;" width="150" align="right">
				{stock}</td>
				<td style="font-size:12px;padding:2px;">{category}</td>				
				<td style="font-size:12px;padding:2px;" width="100">{list_num}</td>
			</tr>
		</table>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="font-size:12px;padding-right:10px;" width="30">{checkall}</td>
				<td style="font-size:12px;padding-right:10px;" width="80">{check_disable}</td>
				<td style="font-size:12px;padding-right:10px;" width="80">{check_enable}</td>
				<td style="font-size:12px;padding-right:10px;" width="80">{delete}</td>
				<td style="font-size:12px;padding-right:10px;" width="80">{cate_remove}</td>	
				<td style="font-size:12px;padding-right:10px;" width="80">{cate_add}</td>			
				<td style="font-size:12px;padding-right:10px;"> </td>
			</tr>
		</table>
		<p>{goods_list}</p>
		{formend}</td>
	</tr>
	</table>

</div>