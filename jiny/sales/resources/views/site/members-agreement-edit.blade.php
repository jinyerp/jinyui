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
                    사이트: 동의서 입력</td>
                    <td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
                     </td>
                    <td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
                     </td>

                </tr>
            </table>
            <table border="0" width="978" cellspacing="0" cellpadding="0">
                <tr>
                    <td style="font-size:12px;padding:10px;" width="80"><font size="2">활성화:</font></td>
                    <td style="font-size:12px;padding:10px;"><font size="2">{enable}</font></td>
                </tr>
                <tr>
                    <td style="font-size:12px;padding:10px;" width="80">
                    <font size="2">필수동의:</font></td>
                    <td style="font-size:12px;padding:10px;"><font size="2">{require}</font></td>
                    </tr>
                <tr>
                    <td style="font-size:12px;padding:10px;" width="80">
                    코드</td>
                    <td style="font-size:12px;padding:10px;">{code}</td>
                    </tr>
            </table>
            <p>{language_html}</p>
            <p align="center">{form_submit}</p>
            <p>{formend} </td>
        </tr>
        </table>

    </div>