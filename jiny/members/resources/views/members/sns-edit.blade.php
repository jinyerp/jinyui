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
                    <td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:10px;" bgcolor="#E9E9E9">사이트:
                    SNS</td>
                    <td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
                     </td>
                    <td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9"> </td>

                </tr>
            </table>
            <table border="0" width="978" cellspacing="0" cellpadding="0">
                <tr>
                    <td style=font-size:12px;padding:10px; width="80">
                    <font size="2">도메인 :</font></td>
                    <td style=font-size:12px;padding:10px;><font size="2">{domain}</font></td>
                </tr>
            </table>
            <table border="0" width="978" cellspacing="0" cellpadding="0">
                <tr>
                    <td style=font-size:12px;padding:10px;>SNS : 네이버</td>
                </tr>
                </table>
            <table border="0" width="978" cellspacing="0" cellpadding="0">
                <tr>
                    <td style=font-size:12px;padding:10px; width="150">
                    네이버 Client_Id :</td>
                    <td style=font-size:12px;padding:10px;>{client_id}</td>
                    </tr>
                <tr>
                    <td style=font-size:12px;padding:10px; width="150">
                    네이버 Secret :</td>
                    <td style=font-size:12px;padding:10px;>{client_secret}</td>
                    </tr>
                <tr>
                    <td style=font-size:12px;padding:10px; width="150">
                    네이버 Callback</td>
                    <td style=font-size:12px;padding:10px;>{callback}</td>
                    </tr>
            </table>
            <table border="0" width="978" cellspacing="0" cellpadding="0">
                <tr>
                    <td style=font-size:12px;padding:10px;>SNS : Facebook</td>
                </tr>
                </table>
            <table border="0" width="978" cellspacing="0" cellpadding="0">
                <tr>
                    <td style=font-size:12px;padding:10px; width="150">
                    facebook:</td>
                    <td style=font-size:12px;padding:10px;>{facebook}</td>
                    </tr>
            </table>
            <p> </p>
            <p align="center">{form_submit}</p>
            <p>{formend} </td>
        </tr>
        </table>

    </div>
