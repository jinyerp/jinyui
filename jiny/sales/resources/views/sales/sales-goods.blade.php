<x-jinyui-theme theme="jinyerp" class="bootstrap">
	<div class="container-fluid p-0">
		<h1 class="h3 mb-3">판매관리 : 제품목록</h1>
		<div class="flex flex-row justify-between">
			<div>
				<x-jinyui::button.button class="btn-secondary">Manual</x-jinyui::button.button>
			</div>
			<div>
				<x-jinyui::button.button class="btn-primary">삭제</x-jinyui::button.button>
				<x-jinyui::button.button class="btn-primary">추가</x-jinyui::button.button>
			</div>
		</div>
	<div>


		{formstart}
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="font-size:12px;padding:10px;" width="100">{products}</td>
<td style="font-size:12px;padding:10px;" width="100">{bom}</td>				
				<td style="font-size:12px;padding:10px;" width="100">{house}</td>
<td style="font-size:12px;padding:10px;" width="100">{enable}</td>
<td style="font-size:12px;padding:10px;"> </td>
				<td style="font-size:12px;padding:10px;" width="80" align="right">검색:</td>
				<td style="font-size:12px;padding:10px;" width="200">{search_key}</td>
				<td style="font-size:12px;padding:10px;" width="80">{search}</td>
				<td style="font-size:12px;padding:10px;" width="80">{list_num}</td>
			</tr>
		</table>
	{formend}

	<x-jinyui-card>
		<x-jinyui::table.basic>
			{datalist}
		</x-jinyui::table.basic>
	</x-jinyui-card>

</x-jinyui-theme>

