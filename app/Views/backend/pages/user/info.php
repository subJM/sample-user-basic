<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<form name="frm" id="frm" method="post" action="/reconfirm.asp" autocomplete="off">
    <input type="hidden" name="mode" id="mode">
    <div class="sub_content_arr">
        <table border="0" cellspacing="0" cellpadding="0" align="center" style="width: 600px;/* color:#fff; */margin-top: 50px;margin-bottom: 20px;overflow:hidden;border: solid 1px #ccc;">
            <tbody>
                <tr>
                    <td height="50" colspan="2" style="text-align: center;color: #fff;font-size: 12px;    background: rgba(255,255,255,0.1); border-bottom: solid 1px #444;"> <strong style="color:#ff0000 ;">정보 보호를 위해서</strong> 회원님의 비밀번호를 다시 확인합니다.</td>
                </tr>
                <tr>
                    <td align="left" style="width:80px;color:#fff;padding-left: 82px;">
                        <p><strong>아이디</strong></p>
                    </td>
                    <td height="30" align="left" style=" padding:10px;">
                        <font size="2"><b>luby22</b></font>
                    </td>

                </tr>
                <tr>
                    <td align="left" style="width:80px;color:#fff;padding: 12px 0 12px 82px; ">
                        <p><strong>비밀번호</strong></p>
                    </td>
                    <td height="30" align="left" style="padding:10px;">
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <input type="password" name="passwd" id="passwd" class="sponsor_input" size="25" style="height: 40px; padding: 0 10px; margin: 0px ; border-radius: 6px; font-size: 14px;">

                            <button type="submit" class="ui-button_red" style="height: 40px; padding: 0 20px; font-size: 14px; border-radius: 6px;">확인</button>

                            <button type="button" class="ui_btn_gray next" style="height: 40px; padding: 0 20px; font-size: 14px; border-radius: 6px;">다음에 변경하기</button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>

        <br>
        <br>
        <br>
        <br>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <br>
        <br><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
</form>
<style>
    button {
        white-space: nowrap;
        box-sizing: border-box;
        font-size: 14px;
        padding: 0 20px;
        height: 40px;
    }
</style>
<?= $this->endSection() ?>