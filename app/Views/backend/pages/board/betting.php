<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<div class="sub_content_arr">
    <div>
        <form name="frm" id="frm" action="/betting_01.asp" method="post">
            <!-- Content Start -->
            <div class="subTitle_arr">
                <h2>베팅내역 <small>betting history</small></h2>
            </div>
            <div class="tabmenu01"> <strong>경기선택</strong>
                <select name="bt_type" class="select" id="bt_type">
                    <option value="">전체</option>
                    <option value="892" {bt_type.selected}="">스페이스 8</option>
                    <option value="873" {bt_type.selected}="">스피드 6</option>
                    <option value="875" {bt_type.selected}="">스피드 4</option>
                    <option value="874" {bt_type.selected}="">메이즈 2</option>
                    <option value="13" {bt_type.selected}="">가상축구</option>
                    <option value="14" {bt_type.selected}="">개경주</option>
                    <option value="116" {bt_type.selected}="">경마</option>
                </select>

                &nbsp; <strong>&nbsp;기간선택</strong>
                <input type="text" name="bt_regist_s" id="bt_regist_s" size="11" value="2025-06-12">
                ~
                <input type="text" name="bt_regist_e" id="bt_regist_e" size="11" value="2025-06-19">
                <button type="submit" class="ui_btn_green" value="검색"> 검색 </button>
            </div>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tbody>

                    <tr>
                        <td align="right"><!-- <a href="cart.asp"><img src="/backend/images/cart-button.png" alt="카트보기" style="position: absolute;top: 6px;right: -10px;" /></a> -->



                            <!-- 테이블 목록 시작 -->


                            <script type="text/javascript">
                                <!--
                                $.each($("td.noSelected"), function() {
                                    switch (String($(this).attr("bgColor")).toLowerCase()) {
                                        case "#707018":
                                            $(this).addClass("Selected").removeClass("noSelected");
                                            break;
                                        case "#2c5499":
                                            $(this).addClass("Selected").removeClass("noSelected");
                                            break;
                                        case "#89277c":
                                            $(this).addClass("Selected").removeClass("noSelected");
                                            break;
                                    }
                                });
                                //
                                -->
                            </script>

                            <!-- 구분라인 시작 -->

                            <br>
                            <p></p>
                            <div id="listnumber01" style="width:100%;text-align:middle;"><!-- <TABLE cellSpacing=0 cellPadding=0 id='speedpage'>
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
                            <p></p>
                            <br>
                            <table cellpadding="0" cellspacing="0" width="100%" style="border-top: 1px solid #444;width: 100%;">
                                <tbody>
                                    <tr>
                                        <td height="10"></td>
                                    </tr>
                                    <tr>
                                        <td class="line2" align="center"><br>
                                            <br>
                                            <a href="javascript:void(0);" class="bbs_copy ui_btn_red" style="cursor:pointer">베팅내역 올리기</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="color:#ff0;padding: 12px;"><select class="select" id="bbs_code">
                                                <option value="">복사할 게시판선택</option>
                                                <option value="6">1:1고객센터</option>
                                            </select>
                                            <button type="button" id="btnSubmit" class="bbs_copy ui_btn_gray" value="복사하기">복사하기</button>
                                            <button type="button" id="btnChoiceDel" class="ui_btn_blue" value="선택삭제">선택삭제</button>
                                            <button type="button" id="btnTotalDel" class="ui_btn_red" value="전체삭제">전체삭제</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- 구분라인 끝 -->

                            <!-- 경기결과 번호 시작 -->
                            <!-- <table cellpadding="0" cellspacing="0" width="100%">

						<tbody>
							<tr>
							<td height="50">
								<div align="center">

									<a href="MyBet.asp?PAGE=1"><img src="/backend/images/btn_first.gif" align="absmiddle"></a>&nbsp;
									<img src="/backend/images/btn_prev.gif" align="absmiddle">&nbsp;&nbsp;
									&nbsp;
									<font color="#7bb00f" style="font-weight:bold;font-size:13px">1</font>&nbsp;&nbsp;
									&nbsp;
									<img src="/backend/images/btn_next.gif" align="absmiddle">

								</div>
							</td>
						</tr>
						</tbody>
						</table> -->
                            <!-- 경기결과 번호 끝 -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <div class="clear"></div>
</div>
<?= $this->endSection() ?>