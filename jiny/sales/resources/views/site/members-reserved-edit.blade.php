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
                    사이트: 
    예약 이메일</td>
                    <td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
                     </td>
                    <td style="border-bottom:1px solid #E9E9E9;font-size:12px;padding:2px;" width="100" bgcolor="#E9E9E9">
                     </td>

                </tr>
            </table>
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td style="font-size:12px;padding:10px;" width="100" valign="top">
                    활성화 :</td>
                    <td style="font-size:12px;padding:10px;" valign="top">{enable}</td>
                </tr>
                <tr>
                    <td style="font-size:12px;padding:10px;" width="100" valign="top">
                    등록일자:</td>
                    <td style="font-size:12px;padding:10px;" valign="top">{regdate}</td>
                </tr>
                <tr>
                    <td style="font-size:12px;padding:10px;" width="100" valign="top">
                    이메일 : </td>
                    <td style="font-size:12px;padding:10px;" valign="top">{email}</td>
                </tr>
                <tr>
                    <td style="font-size:12px;padding:10px;" width="100" valign="top">
                    설명 : </td>
                    <td style="font-size:12px;padding:10px;" valign="top">{description}</td>
                </tr>
                </table>
            <p align="center">{form_submit}</p>
            <p>{formend} </td>
        </tr>
        </table>

    </div>