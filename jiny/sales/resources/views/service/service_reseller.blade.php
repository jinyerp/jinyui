<x-theme>
	<x-main class="p-4">
		<x-main-content class="bg-white p-4">
			
		</x-main-content>
	</x-main>
</x-theme>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td style="border:1px solid #E9E9E9;font-size:12px;padding:10px;" bgcolor="#FFFFFF" >
		{formstart}
		
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;" bgcolor="#E9E9E9">
				<b>리셀러&nbsp; : </b>체널 트리구조</td>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="90" bgcolor="#E9E9E9">
				{regist_check}</td>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="90" bgcolor="#E9E9E9">
				{renewal_check}</td>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">{new}</td>
				
			</tr>
		</table>
		
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="font-size:12px;padding:10px;" width="150">{country}</td>
				<td style="font-size:12px;padding:10px;">{name}</td>
				<td style="font-size:12px;padding:10px;" width="150">적립금 :
				{emoney}</td>
				<td style="font-size:12px;padding:10px;" width="50" align="right">검색:</td>
				<td style="font-size:12px;padding:10px;" width="200">{search_key}</td>
				<td style="font-size:12px;padding:10px;" width="80">{search}</td>
				<td style="font-size:12px;padding:10px;" width="80">{list_num}</td>
			</tr>
		</table>
		
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="font-size:12px;padding:10px;" width="100%" valign="top">
				{reseller_list}</td>
			</tr>
		</table>
		{formend}
		</td>
	</tr>
</table>