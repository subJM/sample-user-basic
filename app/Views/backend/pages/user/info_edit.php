<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<div class="sub_content_arr">
   <div>
  <div class="subTitle_arr"><h2>회원정보 <small>member info</small></h2></div>
  <form name="frm" id="frm" method="post" action="/info_edit.asp" autocomplete="off">
    <input type="hidden" name="mode" id="mode">
    <input type="hidden" name="mb_id_enabled" value="" id="mb_id_enabled">
    <input type="hidden" name="mb_nick_enabled" value="000" id="mb_nick_enabled">
    <input type="hidden" id="userid" value="">
    <!-- Content Start -->
    <style type="text/css">

	</style>
    <div class="cont_back_arr01">
      <div class="cashzone_talbe_arr">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="member-info-table001">
          <tbody>
            <tr>
              <td class="titletext" align="left"><strong>아이디</strong></td>
              <td align="left"><span>[<strong>luby22</strong>]</span> &nbsp;&nbsp;</td>
            </tr>
            <!--tr>
              <td class="titletext" align="left" ><strong>추천인코드</strong></td>
              <td  align="left"><span >[<strong>9750657</strong>] <font size="2">- 추천인코드 변경은 고객센터로 문의바랍니다.</font></span></td>
            </tr-->
            <tr>
              <td class="titletext" align="left"><strong>패스워드</strong></td>
              <td align="left"><input name="passwd" type="password" id="passwd" size="25" class="input0319">
                - 수정시에 입력해 주세요.</td>
            </tr>
            <tr>
              <td class="titletext" align="left"><strong>패스워드확인</strong></td>
              <td align="left"><input name="re_passwd" type="password" id="re_passwd" size="25" class="input0319">
                - 수정시에 입력해 주세요.</td>
            </tr>
            <!--tr style="">
              <td class="titletext" align="left" ><strong>환전비밀번호</strong></td>
              <td  align="left"><button type="button" name="mb_9_btn" id="mb_9_btn" class="ui_btn_red" >환전비밀번호 변경↓</button></td>
            </tr -->
            <tr>
              <td class="titletext" align="left"><strong>이름</strong></td>
              <td align="left"><font size="2">[<b>루*</b>]</font>
                <input name="mb_name" type="hidden" id="mb_name" class="input0319">
                <span style="color: #bbb;"> </span></td>
            </tr>
			<tr style="display:none;">
              <td class="titletext" align="left"><strong>생년월일</strong></td>
              <td align="left">
					<input type="text" name="mb_birth" id="mb_birth" size="25" value="" class="input0319">
					<font size="2" color="#ff0000">ex) 880808-1</font>
					<span style="color: #bbb;display:inline-block;"> [잘못 입력된 경우 고객센터로 문의 주세요]</span>
				</td>
            </tr>
            <tr>
              <td class="titletext" align="left"><strong>거래은행</strong></td>
              <td align="left"><font size="2">[<b>*****</b>]</font>
                <input type="hidden" name="bk_name" id="bk_name" class="input0319"></td>
            </tr>
            <tr>
              <td class="titletext" align="left"><strong>계좌번호</strong></td>
              <td align="left"><font size="3">[<b>TUC************</b>]</font> &nbsp; -  &nbsp;
                <input name="bk_number" type="hidden" id="bk_number" class="input0319">
                <span style="color: #bbb;display:inline-block;">계좌변경은 고객센터로 문의바랍니다. &nbsp;<b><font size="2" color="#ff0000">단, 예금주는 변경이 불가능합니다.</font></b></span></td>
            </tr>
            <tr>
              <td class="titletext" align="left"><strong>별명</strong></td>
              <td align="left"><font size="2">[<b>루비</b>]</font>
                <input name="mb_nick" type="hidden" id="mb_nick" size="25" class="input0319">
                <span id="msg_mb_nick"></span></td>
            </tr>
            <tr>
              <td class="titletext" align="left"><strong>핸드폰번호</strong></td>
              <td colspan="2" align="left"><font size="2">[<b>010********</b>]</font>
                <input type="hidden" name="hp_auth" id="hp_auth" value="" disabled="">
                <input name="mb_cel" id="mb_cel" type="hidden" value="0">
                <span style="color: #bbb;display:inline-block;">- 수정시 관리자에게 요청하세요.</span></td>
              <!-- <td  align="left">
						<input type="checkbox" name="mb_sms" id="mb_sms" value="Y"  />
						<span style="color: #bbb;display:inline-block;">- 적중시 문자로 받습니다. (원하시는 분들만 선택하세요)적중 결과외에 김급공지나 문제가 있을경우에는 제한되지 않습니다.</span>
					</td> -->
            </tr>
            <!-- <tr>
					<td class="titletext" align="left" ><strong>인증번호</strong></td>
					<td  colspan="2" align="left">
						<input name="auth_key" type="text"  id="auth_key" size="20"  /> <span style="color: #bbb;">- 10분이내로 인증번호를 입력하셔야 합니다.</span>
						</td>
				</tr> -->
            <tr>
              
              
            </tr>
            <!-- tr>
					<td class="titletext" align="left" ><strong>추천인 ID</strong></td>
					<td  align="left"></td>
				</tr -->
            <tr>
              <td class="titletext" align="left"><strong>알림설정</strong></td>
              <td colspan="2" align="left"><span style="display:inline-block">                  <input type="checkbox" name="cfgSound" id="cfgSound" value="04" style="vertical-align:middle">                  충전신청 &nbsp;</span><span style="display:inline-block">                  <input type="checkbox" name="cfgSound" id="cfgSound" value="05" checked="" style="vertical-align:middle">                  충전완료 &nbsp;</span><span style="display:inline-block">                  <input type="checkbox" name="cfgSound" id="cfgSound" value="06" style="vertical-align:middle">                  환전신청 &nbsp;</span><span style="display:inline-block">                  <input type="checkbox" name="cfgSound" id="cfgSound" value="07" checked="" style="vertical-align:middle">                  환전완료 &nbsp;</span><span style="display:inline-block">                  <input type="checkbox" name="cfgSound" id="cfgSound" value="01" checked="" style="vertical-align:middle">                  쪽지도착 &nbsp;</span><span style="display:inline-block">                  <input type="checkbox" name="cfgSound" id="cfgSound" value="02" style="vertical-align:middle">                  새글등록 &nbsp;</span><span style="display:inline-block">                  <input type="checkbox" name="cfgSound" id="cfgSound" value="03" checked="" style="vertical-align:middle">                  답변등록 &nbsp;</span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="btnSubmit" style="padding:20px; text-align:center;">
        <button type="image" class="ui_btn_yellow" style="display:inline-block">확인</button>
      </div>
    </div>
  </form>
   </div>
       
        <div class="clear"></div>
</div>
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