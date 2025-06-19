<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<div class="sub_content_arr">
    <div>
        <form name="frm" id="frm" action="/notice.asp" method="post">
            <input type="hidden" name="page" value="1">
            <input type="hidden" name="code_group" value="65">
            <input type="hidden" name="code_no" value="65">
            <input type="hidden" name="code" value="7">
            <div class="subTitle_notice">
                <h2>공지 &amp; 규정 <small>notice</small></h2>
            </div>
            <!-- 서브타이틀 -->

            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="topth">
                <tbody>
                    <tr align="center">
                        <th width="70" height="24">번호</th>
                        <th>제목</th>
                        <th width="126" align="left" style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;작성자</th>
                        <th width="110" style="">작성일시</th>
                        <th width="70" style="display:none">조회수</th>
                    </tr>
                </tbody>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="bbs-list">
                <tbody>
                    <tr class="notice">
                        <td width="70" height="30" align="center" class="num"><img src="/backend/images/icon_notice.gif"></td>
                        <td class="subject" style="text-align:left"><a href="?mode=read&amp;seq=170&amp;code_group=65&amp;code_no=65&amp;code=7&amp;Page.IsBack.List=JTJGbm90aWNlJTJFYXNwJTNG"><b>
                                    <font style="color:#609f9f;">◎</font>
                                    <font style="color:#FFFFFF">미니게임 이용 규정</font>
                                    <font style="color:#609f9f;">◎</font>
                                </b> </a><span class="num_style"></span> </td>
                        <td width="126" class="writer" style=""><img src="/backend/images/grade/manager.gif?2017-09-15" align="absmiddle" style="width: 24px;"> 관리자 </td>
                        <td width="110" align="center" class="date" style="">-</td>
                        <td width="70" align="center" class="hit" style="display:none"></td>
                    </tr>
                    <tr class="notice">
                        <td width="70" height="30" align="center" class="num"><img src="/backend/images/icon_notice.gif"></td>
                        <td class="subject" style="text-align:left"><a href="?mode=read&amp;seq=169&amp;code_group=65&amp;code_no=65&amp;code=7&amp;Page.IsBack.List=JTJGbm90aWNlJTJFYXNwJTNG"><b>
                                    <font style="color:#609f9f;">◎</font>
                                    <font style="color:#FFFFFF">베팅금 및 당첨 상한가</font>
                                    <font style="color:#609f9f;">◎</font>
                                </b> </a><span class="num_style"></span> </td>
                        <td width="126" class="writer" style=""><img src="/backend/images/grade/manager.gif?2017-09-15" align="absmiddle" style="width: 24px;"> 관리자 </td>
                        <td width="110" align="center" class="date" style="">-</td>
                        <td width="70" align="center" class="hit" style="display:none"></td>
                    </tr>
                    <tr class="notice">
                        <td width="70" height="30" align="center" class="num"><img src="/backend/images/icon_notice.gif"></td>
                        <td class="subject" style="text-align:left"><a href="?mode=read&amp;seq=38&amp;code_group=65&amp;code_no=65&amp;code=7&amp;Page.IsBack.List=JTJGbm90aWNlJTJFYXNwJTNG"><b>
                                    <font style="color:#609f9f;">◎</font>
                                    <font style="color:#FFFFFF">USDT 출금 규정 안내</font>
                                    <font style="color:#609f9f;">◎</font>
                                </b> </a><span class="num_style"></span> </td>
                        <td width="126" class="writer" style=""><img src="/backend/images/grade/manager.gif?2017-09-15" align="absmiddle" style="width: 24px;"> 관리자 </td>
                        <td width="110" align="center" class="date" style="">-</td>
                        <td width="70" align="center" class="hit" style="display:none"></td>
                    </tr>
                    <tr class="notice">
                        <td width="70" height="30" align="center" class="num"><img src="/backend/images/icon_notice.gif"></td>
                        <td class="subject" style="text-align:left"><a href="?mode=read&amp;seq=37&amp;code_group=65&amp;code_no=65&amp;code=7&amp;Page.IsBack.List=JTJGbm90aWNlJTJFYXNwJTNG"><b>
                                    <font style="color:#609f9f;">◎</font>
                                    <font style="color:#FFFFFF">USDT 입금 규정 안내</font>
                                    <font style="color:#609f9f;">◎</font>
                                </b> </a><span class="num_style"></span> </td>
                        <td width="126" class="writer" style=""><img src="/backend/images/grade/manager.gif?2017-09-15" align="absmiddle" style="width: 24px;"> 관리자 </td>
                        <td width="110" align="center" class="date" style="">-</td>
                        <td width="70" align="center" class="hit" style="display:none"></td>
                    </tr>
                    <tr class="notice">
                        <td width="70" height="30" align="center" class="num"><img src="/backend/images/icon_notice.gif"></td>
                        <td class="subject" style="text-align:left"><a href="?mode=read&amp;seq=33&amp;code_group=65&amp;code_no=65&amp;code=7&amp;Page.IsBack.List=JTJGbm90aWNlJTJFYXNwJTNG"><b>
                                    <font style="color:#609f9f;">◎</font>
                                    <font style="color:#FFFFFF">USDT 콤프 및 롤링 안내</font>
                                    <font style="color:#609f9f;">◎</font>
                                </b> </a><span class="num_style"></span> </td>
                        <td width="126" class="writer" style=""><img src="/backend/images/grade/manager.gif?2017-09-15" align="absmiddle" style="width: 24px;"> 관리자 </td>
                        <td width="110" align="center" class="date" style="">-</td>
                        <td width="70" align="center" class="hit" style="display:none"></td>
                    </tr>
                    <tr class="notice">
                        <td width="70" height="30" align="center" class="num"><img src="/backend/images/icon_notice.gif"></td>
                        <td class="subject" style="text-align:left"><a href="?mode=read&amp;seq=11&amp;code_group=65&amp;code_no=65&amp;code=7&amp;Page.IsBack.List=JTJGbm90aWNlJTJFYXNwJTNG"><b>
                                    <font style="color:#609f9f;">◎</font>
                                    <font style="color:#FFFFFF">USDT 카지노 이용안내</font>
                                    <font style="color:#609f9f;">◎</font>
                                </b> </a><span class="num_style"></span> </td>
                        <td width="126" class="writer" style=""><img src="/backend/images/grade/manager.gif?2017-09-15" align="absmiddle" style="width: 24px;"> 관리자 </td>
                        <td width="110" align="center" class="date" style="">-</td>
                        <td width="70" align="center" class="hit" style="display:none"></td>
                    </tr>
                    <tr class="notice">
                        <td width="70" height="30" align="center" class="num"><img src="/backend/images/icon_notice.gif"></td>
                        <td class="subject" style="text-align:left"><a href="?mode=read&amp;seq=10&amp;code_group=65&amp;code_no=65&amp;code=7&amp;Page.IsBack.List=JTJGbm90aWNlJTJFYXNwJTNG"><b>
                                    <font style="color:#609f9f;">◎</font>
                                    <font style="color:#FFFFFF">양방 및 프로모션 악용제재 안내</font>
                                    <font style="color:#609f9f;">◎</font>
                                </b> </a><span class="num_style"></span> </td>
                        <td width="126" class="writer" style=""><img src="/backend/images/grade/manager.gif?2017-09-15" align="absmiddle" style="width: 24px;"> 관리자 </td>
                        <td width="110" align="center" class="date" style="">-</td>
                        <td width="70" align="center" class="hit" style="display:none"></td>
                    </tr>
                    <tr class="notice">
                        <td width="70" height="30" align="center" class="num"><img src="/backend/images/icon_notice.gif"></td>
                        <td class="subject" style="text-align:left"><a href="?mode=read&amp;seq=9&amp;code_group=65&amp;code_no=65&amp;code=7&amp;Page.IsBack.List=JTJGbm90aWNlJTJFYXNwJTNG"><b>
                                    <font style="color:#609f9f;">◎</font>
                                    <font style="color:#FFFFFF">베팅거절사례</font> (베팅무효)<font style="color:#609f9f;">◎</font>
                                </b> </a><span class="num_style"></span> </td>
                        <td width="126" class="writer" style=""><img src="/backend/images/grade/manager.gif?2017-09-15" align="absmiddle" style="width: 24px;"> 관리자 </td>
                        <td width="110" align="center" class="date" style="">-</td>
                        <td width="70" align="center" class="hit" style="display:none"></td>
                    </tr>
                </tbody>
                <tbody id="lists">

                </tbody>
            </table>

            <!-- 페이징 시작 -->
            <div class="list_bottom_btn_left"> </div>
            <div class="list_bottom_btn_right">
                <a href="javascript:void(0);" class="ui_btn_blue" name="btnCustomer" id="btnCustomer" style=" color:#fff; cursor:pointer;display:none">계좌문의</a>&nbsp;
                <a href="javascript:void(0);" class="ui_btn_red" name="newPop" id="newPop" style="cursor:pointer;display:none">글쓰기</a>
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
<?= $this->endSection() ?>