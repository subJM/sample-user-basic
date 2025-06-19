<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<div class="sub_content_arr">
    <div>
        <div class="subTitle_arr">
            <h2>추천인 <small>recommender</small></h2>
        </div>

        <ul class="result_menu">
            <li class="menu01"><a href="/recommend_list.asp">추천인</a></li>
            <li class="menu02"><a href="/recommend.asp">마일리지</a></li>
        </ul>

        <form name="frm" id="frm" action="/recommend_list.asp" method="post">
            <input type="hidden" name="page" value="1">
            <input type="hidden" name="code_group" value="">
            <input type="hidden" name="code_no" value="">
            <input type="hidden" name="code" value="">
            <div class="cont_back_arr01">
                <table width="100%" cellpadding="0" cellspacing="0" class="bbs-list-cash topth ">
                    <colgroup>
                        <col width="4%">
                        <col width="26%">
                        <col width="25">
                        <col width="20%">
                        <col width="25%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th align="center"><strong>no</strong></th>
                            <th align="center"><strong>추천인 아이디</strong></th>
                            <th align="center"><strong>추천인 닉네임</strong></th>
                            <th align="center"><strong>회원구분</strong></th>
                            <th align="center"><strong>가입일자</strong></th>
                        </tr>
                    </tbody>
                    <tbody id="lists">

                    </tbody>
                </table>

                <!-- 테이블 끝 -->

                <!-- 구분라인 시작 -->

                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td height="10"></td>
                        </tr>
                        <tr>
                            <td class="line2" align="center"><!-- <TABLE cellSpacing=0 cellPadding=0 id='speedpage'>
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
                            </td>
                        </tr>
                        <tr>
                            <td height="10"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>

    <div class="clear"></div>
</div>
<?= $this->endSection() ?>