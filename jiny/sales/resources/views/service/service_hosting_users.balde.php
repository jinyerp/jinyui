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
				<b>서비스 : </b>고객리스트</td>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
				&nbsp;</td>
				<td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">{new}</td>
				
			</tr>
		</table>
		
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="font-size:12px;padding:10px;">&nbsp;</td>
				<td style="font-size:12px;padding:10px;" width="100" align="right">검색 :</td>
				<td style="font-size:12px;padding:10px;;" width="200">{search_key}</td>				
				<td style="font-size:12px;padding:10px;" width="100">{search}</td>
				<td style="font-size:12px;padding:10px;" width="100">{list_num}</td>
			</tr>
		</table>
		{list}
		{formend}
		</td>
	</tr>
</table>