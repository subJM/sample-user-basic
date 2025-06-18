<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<div class="sub_content_arr">
    <div class="subTitle_arr">
        <h2><em class="ic"></em> 내쪽지함 <small>message box</small></h2>
    </div>
    <div class="sub-cont-arr">
        <form name="frm" id="frm" action="/memo.asp" method="post">
            <input type="hidden" name="page" value="1">
            <input type="hidden" name="code_group" value="65">
            <input type="hidden" name="code_no" value="65">
            <input type="hidden" name="code" value="">
            <input type="hidden" name="MemoMode" id="mode">
            <input type="hidden" name="ListType" value="R">
            <input type="hidden" name="no_read_cnt" id="no_read_cnt" value="0">

            <div class="cont_back_arr01">
                <table width="100%" cellpadding="0" cellspacing="0" class="bbs-list-cash topth">
                    <colgroup>
                        <col width="5%">
                        <col width="">
                        <col width="20%">
                        <col width="10%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th align="center"><strong>선택</strong></th>
                            <th align="center"><strong>제목</strong></th>
                            <th align="center"><strong>받은일시</strong></th>
                            <th align="center"><strong>상태</strong></th>
                        </tr>
                    </tbody>
                    <tbody id="lists">
                        <tr height="30" class="memo_view" data-memo-num="4334" style="cursor: pointer;">
                            <td onclick="event.cancelBubble=true"><input type="checkbox" name="seq" id="seq" value="4334"></td>
                            <td align="center">안녕하세요 USDT 카지노 입니다.</td>
                            <td align="center">06-14 14:54</td>
                            <td class="memo_status4334">읽음</td>
                        </tr>
                        <tr id="memo_view_4334" style="display:none">
                            <td colspan="8">안녕하세요 USDT 카지노 입니다.<br><br><img src="//i.imgur.com/qlH7txs.png"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="margin-top:10px;">

                <button type="button" class="ui-button_gray" onclick="checkAll()">전체선택</button>
                <button type="button" class="ui_btn_red" id="btnDelete">선택삭제</button>
                <button type="button" class="ui_btn_red" id="btnRead">선택읽기</button>

            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>