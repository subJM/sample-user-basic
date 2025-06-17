
<div class="sub_content_arr_bg">
<div class="user-info-arr">
  <div class="user-info-cont">
    <div class="noticeText"><img src="/backend/images/megaPhone.png">
      <marquee direction="left">
      <b><font color="#FFFFFF">☞ ▶필독◀ USDT카지노는 테더 입출금 전용으로, 이용 전 공지사항 숙지 바랍니다. 평생주소 : 테더접속.com ☜</font></b>&nbsp;&nbsp;&nbsp;</marquee>
    </div>
    <button id="login-btn1" type="submit" class="fadeIn fourth login-modal" value="LOGIN" border="0"><i class="fi fi-rr-user-unlock"></i> 로그인</button>
    <a id="join-btn1" class="fadeIn fourth" href="info_anony.asp"><i class="fi fi-rr-features"></i> 회원가입</a> </div>
</div>
<script language="JavaScript" type="text/javascript">  
	  $(document).ready(function() {
		$(".login-modal").click(function(){			

			$(".modal").fadeIn();
		});
		  
		$(".modal-close").click(function(){
			$(".modal").fadeOut();
		});	
		});	  
</script> 
<div class="modal">
  <div class="modal_content"> <img src="/backend/images/logingirl.png?5" class="logingirl"><i class="fi fi-rr-cross-circle modal-close"></i> 
    <form id="frm" name="frm" method="post" action="/login.asp" class="lg_frm_arr">
      <img src="/backend/images/logo.png?111" class="frm-logo">
      <h4>LOGIN</h4>
      <input name="userid" type="text" id="userid" class="fadeIn second" size="15" maxlength="20" style="ime-mode:disabled" placeholder="아이디">
      <input name="passwd" type="password" id="passwd" class="fadeIn third" size="15" maxlength="20" placeholder="비밀번호">
      <button id="login-btn" type="submit" class="fadeIn fourth" value="LOGIN" border="0">로그인</button>
      <a id="join-btn" class="fadeIn fourth" href="info_anony.asp">회원가입</a>
    </form>
    <form name="securedfrm" id="securedfrm" method="post" action="/login.asp">
      <input type="hidden" name="mode" id="mode">
      <input type="hidden" id="secureduserid" name="secureduserid">
      <input type="hidden" id="securedpasswd" name="securedpasswd">
    </form>
  </div>
</div>
<!-- <div id="popup-zone"> <div id="popup_12" class="divFrame" style="top: 50px; left: 400px; width: 500px; height: 830px; position: absolute; padding: 0px; z-index: 100000;"><iframe id="content_popup_12" name="content_popup_12" src="popup.asp?seq=12" width="100%" height="830" scrolling="no" frameborder="0" style="border: 0px;"></iframe></div></div> -->
