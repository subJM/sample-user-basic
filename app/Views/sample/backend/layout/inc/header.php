<div class="user-info-arr">
  <div class="user-info-cont">
    <? if (!empty(session('userdata'))) { ?>
      <div class="noticeText" style="width:90%">
        <img src="/backend/images/megaPhone.png">
        <marquee direction="left">
          <b>
            <font color="#FFFFFF">☞ ▶필독◀ USDT카지노는 테더 입출금 전용으로, 이용 전 공지사항 숙지 바랍니다. 평생주소 : 테더접속.com ☜</font>
          </b>&nbsp;&nbsp;&nbsp;
        </marquee>
      </div>

      <button id="login-btn1" type="submit" class="fadeIn fourth login-modal" value="LOGIN" border="0"><i class="fi fi-rr-user-unlock"></i> 로그인</button>
      <a id="join-btn1" class="fadeIn fourth" href="info_anony.asp"><i class="fi fi-rr-features"></i> 회원가입</a>
  <? } else { ?>
  <div class="noticeText" style="width:70%">
    <img src="/backend/images/megaPhone.png">
    <marquee direction="left">
      <b>
        <font color="#FFFFFF">☞ ▶필독◀ USDT카지노는 테더 입출금 전용으로, 이용 전 공지사항 숙지 바랍니다. 평생주소 : 테더접속.com ☜</font>
      </b>&nbsp;&nbsp;&nbsp;
    </marquee>
  </div>
  <ul class="user-info01">
    <li><span class="level_icon"><img src="/backend/images/20250422045448399482902791.png" align="absmiddle"></span> <strong id="mb_nick">루비</strong>님 </li>
    <li><a href="cash_01.asp"><i class="fi fi-rs-circle-w"></i> <span class="mb_point">0</span>원 </a></li>
    <li><a href="javascript:void(0);" class="PointChange" intmp="1" style="cursor: pointer;"><i class="fi fi-rs-circle-m"></i> <strong class="mb_mileage">0</strong>원 [전환]</a></li>
    <li><i class="fi fi-rs-circle-c"></i>카지노머니 : <span class="casino_point">0</span>
      <button type="button" class="getCasinoPoint" onclick="javascript:getCasinoPoint();"> 조회 </button>
      <button type="button" class="chageCasinoPoint" onclick="javascript:chageCasinoPoint();"> 머니전환 </button>
    </li>
    <li><a href="/logout.asp" onfocus="this.blur()" title="로그아웃"><i class="fi fi-rr-sign-out-alt"></i> 로그아웃</a></li>
  </ul>
  <? } ?>
  </div>
</div>
<script language="JavaScript" type="text/javascript">
  $(document).ready(function() {
    $(".login-modal").click(function() {

      $(".modal").fadeIn();
    });

    $(".modal-close").click(function() {
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