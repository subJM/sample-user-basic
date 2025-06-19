<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<div class="sub_content_arr">
    <div>
        <form name="frm" id="frm" action="/customer.asp" method="post">
            <input type="hidden" name="page" value="1">
            <input type="hidden" name="code_group" value="65">
            <input type="hidden" name="code_no" value="65">
            <input type="hidden" name="code" value="6">
            <div class="subTitle_customer">
                <h2>고객센터 <small>customer center</small></h2>
            </div>
            <!-- 서브타이틀 -->

            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="topth">
                <tbody>
                    <tr align="center">
                        <th width="30"><input type="checkbox" id="check_all" name="check_all" value=""></th>
                        <th width="70" height="24">번호</th>
                        <th>제목</th>
                        <th width="126" align="left" style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;작성자</th>
                        <th width="110" style="">작성일시</th>
                        <th width="70" style="">조회수</th>
                    </tr>
                </tbody>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="bbs-list">
                <tbody>

                </tbody>
                <tbody id="lists">

                </tbody>
            </table>

            <!-- 페이징 시작 -->
            <div class="list_bottom_btn_left"><a href="javascript:void(0);" onfocus="this.blur()" class="ui_btn_gray btnChoiceDel">선택삭제</a></div>
            <div class="list_bottom_btn_right">
                <a href="javascript:void(0);" class="ui_btn_blue" name="btnCustomer" id="btnCustomer" style="display:none; color:#fff; cursor:pointer;">계좌문의</a>&nbsp;
                <a href="javascript:void(0);" class="ui_btn_red" name="newPop" id="newPop" style="cursor:pointer;">글쓰기</a>
            </div>
            <div class="clear"> </div>
            <div class="paging_list"> <!--<TABLE cellSpacing=0 cellPadding=0 id='speedpage'>
<TR>
<TD align=center style='PADDING:2px 4px 0 2px' valign=middle>
<img src="/backend/images/icon/end_1.gif" class="mt03" border="0">
<img src="/backend/images/icon/next_1.gif" class="mt03" border="0">
</td>
<TD bgcolor=#DDDDDD noWrap width=1 height=13></TD><TD align=center  style='PADDING:2px 0 0 4px;'>
<img src="/backend/images/icon/next.gif" class="mt03" border="0">
<img src="/backend/images/icon/end.gif" class="mt03" border="0">
</td></tr></table>

-->
                <div class="tf_pagination">
                    <ul>
                        <li><a id="pre-btn" href="javascript:void(0);"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                        <li><a class="active">1</a></li>
                        <li><a id="next-btn" href="javascript:void(0);"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                <!--
                var btnArr = ['/backend/images/btn_first.png', '/backend/images/btn_prev.png', '/backend/images/btn_next.png', '/backend/images/btn_last.png'];
                $.each($("img.mt03"), function(i) {
                    $(this).attr("src", btnArr[i]);
                });
                //
                -->
            </script>
            <!--div class="search_zone_arr">
						<select class="input_text" name="keyfiled" id="keyfield" style="height:21px;font-family:돋움" align="absmiddle">
								<option value="title" selected>제목</option><option value="id" >아이디</option><option value="name" >작성자</option>
						</select>
						<input class="input_text" type="text" name="keyword" id="keyword" value="" style="height:16px;font-family:돋움; color:#000;" align="absmiddle">
						<input type="image" src="/backend/images/btn_search001.png" align="absmiddle" >
				</div-->
        </form>
        <div class="clear"> </div>
    </div>
    <div class="clear"></div>
</div>
<script language="JavaScript" type="text/javascript">
	var popup;

	$(document).ready(function() {
        
        $(".subTitle_freeboard").append("<h2>자유게시판 <small>free board</small></h2>");
		$(".subTitle_customer").append("<h2>고객센터 <small>customer center</small></h2>");
		$(".subTitle_event").append("<h2>이벤트 <small>event</small></h2>");
		$(".subTitle_notice").append("<h2>공지사항 <small>notice</small></h2>");

		$(".writer").find("img").css({width:"24px"});


		var _bgcolor;
		$.each($("#lists").find("tr"), function() {
			$(this).mouseenter(function() {
				_bgcolor = $(this).attr("bgColor");
				$(this).attr("bgColor", "");
			}).mouseleave(function() {
				$(this).removeAttr("bgColor");
			});

			var writer = $(this).find("span.name");
			writer.text(writer.text());
		});

		$("#pagesize").change(function() {
			location.href = "?pagesize="+$(this).val()+"&code_group="+$("#code_group").val()+"&code_no="+$("#code_no").val()+"&code="+$("#code").val()+"";
		});

		$("#newPop").click(function() {
			location.href = '/board/customer_write?mode=write&code_group=65&code_no=65&code=6&Page.IsBack.List=JTJGY3VzdG9tZXIlMkVhc3AlM0Y='	
		}).css("cursor", "pointer");

		$("#btnCustomer").click(function() {
			$.get("/include/bank.num.builder.asp", {
			}, function(json) {
				if (json.val6 == "3" || json.val6 == "7") {
					if ("N" == "Y" ) {
						alert("휴면회원은 게좌문의 글을 작성할 수 없습니다.");
						return false;
					}
				}
				if (json.val6 == "3") {
					if (confirm("고객센터에 계좌문의 글을 남기시겠습니까?")) {
						location.href = "write.asp?mode=accountInquire&code=6"
					} else {
						return false;
					}
				} else if (json.val6 == "7") {
					$('.account_request').show();
				} else {
					location.href = "cash_01.asp"
				}
			});
		});

		$("#btnInactive").click(function() {
			if (confirm("고객센터에 휴면해지 문의 글을 남기시겠습니까?")) {				
				location.href = "write.asp?mode=accountInquire&qtype=inactive&code=6"
			} else {
				return false;
			}
		});

		$(".btnChoiceDel").click(function() { // 삭제버튼 클릭시에...
			if ($("input[name=seq]:checked").length == 0) {
				alert("삭제할 게시물을 선택해 주세요.");
			}
			else {
				if (confirm("정말 삭제하시겠습니까?")) {
					$("#frm").attr("action", "?mode=delete&Page.IsBack.List=JTJGY3VzdG9tZXIlMkVhc3AlM0Y=");
					$("#frm").submit();
				}
			}
		});

		$("#btnCopy").click(function() {
			
			if ($("input[name=seq]:checked").length == 0)
				alert("복사할 게시물을 선택해 주세요.");
			else {
				var arr = new Array()
				$("input[name=seq]:checked").each(function(i) {
					arr[i] = $(this).val();
				});
				
				popup = new popupClass();
				popup.title = "게시물 복사"
				popup.modal = true;
				popup.position = "center";
				popup.padding = "4px 4px 4px 4px"

				popup.$open("/toto-mgmt/bbs/bbs_info.asp?mode=frmCopy&code=6&seq="+arr.join(","), "popup", "top=0, left=0, width=630, height=380, scrollbars=Y");
			}
		}).css("cursor","pointer");
		$("#btnMove").click(function() {
			
			if ($("input[name=seq]:checked").length == 0)
				alert("이동할 게시물을 선택해 주세요.");
			else {

				var arr = new Array()
				$("input[name=seq]:checked").each(function(i) {
					arr[i] = $(this).val();
				});
				popup = new popupClass();
				popup.title = "게시물 이동"
				popup.modal = true;
				popup.position = "center";
				popup.padding = "4px 4px 4px 4px"

				popup.$open("/toto-mgmt/bbs/bbs_info.asp?mode=frmMove&code=6&seq="+arr.join(","), "popup", "top=0, left=0, width=630, height=380, scrollbars=Y");
			}
		}).css("cursor","pointer");

		$("#check_all").click(function() { // 전체선택 or 해제
			if ($(this).attr("checked")) {
				$("input[name=seq]").each(function() {
					$(this).attr("checked", true) 
				});
			} else {
				$("input[name=seq]").each(function() {
					$(this).attr("checked", false) 
				});
			}
		});

		$("img.bettinfo").each(function() {
			if ($(this).attr("seq") != "") {
				$(this).css("display", "");
			}
		});
	});
	// 체크박스 체크/해제
	function CheckAll(checkBoxes, checked) {
		var i;
		if(checkBoxes.length)
		{
			for(i=0;i<checkBoxes.length;i++)
				checkBoxes[i].checked=checked
		}
		else
			checkBoxes.checked=checked
	}
	function page_location( mode, seq ) {
		var IsPostBack = "code_group=65&code_no=65&seq=" + seq + "&Page.IsBack.List=JTJGY3VzdG9tZXIlMkVhc3AlM0Y=";
		switch (mode) {
			case "list": location.href = "";
			break;
			case "modify": location.href = "write.asp?" + IsPostBack +"&mode=modify";
			break;
			case "delete":
			if (confirm("정말 삭제하시겠습니까? \n\n이 게시판에 등록된 모든 게시물을 삭제합니다."))
				location.href = "?mode=delete&" + IsPostBack;
			break;
		}
	}
</script>
<?= $this->endSection() ?>