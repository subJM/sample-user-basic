<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<div class="sub_content_arr">
    <div>
        <div class="subTitle_arr">
            <h2>출석하기 <small>attendance</small></h2>


            <ul class="result_menu">
                <li><a href="/attendance2.asp">출석부</a></li>
                <li style="display:;"><a href="/event_wheel.asp">룰렛게임</a></li>
                <li style="display:none;"><a href="/event_lottery.asp">복권긁기</a></li>
            </ul>


        </div>
        <form name="frm" action="<%=Page.ASP_SELF(0)%>" method="post">
            <input type="hidden" name="page" value="">
            <input type="hidden" name="code_no" value="">
            <div class="attend-top">
                <button type="button" id="beforeMonth" data-value="2025-05"><i class="fa fa-angle-double-left" aria-hidden="true"></i> 이전달</button>
                <span id="nowMonth">2025-06</span>
                <button type="button" id="nextMonth" data-value="2025-07">다음달 <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
            </div>
            <table width="100%" height="" border="0" cellpadding="0" cellspacing="0" id="t_calendar">
                <tbody>
                    <tr>
                        <th width="15%" align="center" class="td_title_bg b">
                            <font color="red">일</font>
                        </th>
                        <th width="14%" align="center" class="td_title_bg b">월</th>
                        <th width="14%" align="center" class="td_title_bg b">화</th>
                        <th width="14%" align="center" class="td_title_bg b">수</th>
                        <th width="14%" align="center" class="td_title_bg b">목</th>
                        <th width="14%" align="center" class="td_title_bg b">금</th>
                        <th width="15%" align="center" class="td_title_bg b">
                            <font color="#006699">토</font>
                        </th>
                    </tr>
                </tbody>
                <tbody id="lists">
                    <tr>
                        <td class="at att_off att_disabled" data-date="2025-06-01" align="right" bgcolor="" style=""> <span> 1</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-02" align="right" bgcolor="" style=""> <span> 2</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-03" align="right" bgcolor="" style=""> <span> 3</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-04" align="right" bgcolor="" style=""> <span> 4</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-05" align="right" bgcolor="" style=""> <span> 5</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-06" align="right" bgcolor="" style=""> <span> 6</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-07" align="right" bgcolor="" style=""> <span> 7</span></td>
                    </tr>
                    <tr>
                        <td class="at att_off att_disabled" data-date="2025-06-08" align="right" bgcolor="" style=""> <span> 8</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-09" align="right" bgcolor="" style=""> <span> 9</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-10" align="right" bgcolor="" style=""> <span> 10</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-11" align="right" bgcolor="" style=""> <span> 11</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-12" align="right" bgcolor="" style=""> <span> 12</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-13" align="right" bgcolor="" style=""> <span> 13</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-14" align="right" bgcolor="" style=""> <span> 14</span></td>
                    </tr>
                    <tr>
                        <td class="at att_off att_disabled" data-date="2025-06-15" align="right" bgcolor="" style=""> <span> 15</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-16" align="right" bgcolor="" style=""> <span> 16</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-17" align="right" bgcolor="" style=""> <span> 17</span></td>
                        <td class="at att_off att_disabled" data-date="2025-06-18" align="right" bgcolor="" style=""> <span> 18</span></td>
                        <td class="at att_off att_enable" data-date="2025-06-19" align="right" bgcolor="" style="cursor: pointer;"> <span> 19</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="at att_give att_disabled" data-date="2025-06-20" align="right" bgcolor="" style=""> <span> 20</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="at att_give att_disabled" data-date="2025-06-21" align="right" bgcolor="" style=""> <span> 21</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="at att_give att_disabled" data-date="2025-06-22" align="right" bgcolor="" style=""> <span> 22</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="at att_give att_disabled" data-date="2025-06-23" align="right" bgcolor="" style=""> <span> 23</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="at att_give att_disabled" data-date="2025-06-24" align="right" bgcolor="" style=""> <span> 24</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="at att_give att_disabled" data-date="2025-06-25" align="right" bgcolor="" style=""> <span> 25</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="at att_give att_disabled" data-date="2025-06-26" align="right" bgcolor="" style=""> <span> 26</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="at att_give att_disabled" data-date="2025-06-27" align="right" bgcolor="" style=""> <span> 27</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="at att_give att_disabled" data-date="2025-06-28" align="right" bgcolor="" style=""> <span> 28</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="at att_give att_disabled" data-date="2025-06-29" align="right" bgcolor="" style=""> <span> 29</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="at att_give att_disabled" data-date="2025-06-30" align="right" bgcolor="" style=""> <span> 30</span>
                            <p>코인<br><strong>1</strong> 개</p>
                        </td>
                        <td class="_top _right">&nbsp;</td>
                        <td class="_top _right">&nbsp;</td>
                        <td class="_top _right">&nbsp;</td>
                        <td class="_top _right">&nbsp;</td>
                        <td class="_top _right">&nbsp;</td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>

<style type="text/css">
    .attend-top {
        text-align: center;
        margin-bottom: 10px;
    }

    .attend-top button {
        margin: 0 10px;
        font-family: Nanum Square !important;
        font-size: 20px;
    }

    #nowMonth {
        font-family: Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
        font-size: 40px;
        color: #C30000;
    }

    #t_calendar {
        border: solid 1px #ccc;
        border-collapse: collapse;
    }

    #t_calendar th {
        height: 40px;
        line-height: 40px;
        font-weight: bold;
        border: 1px solid #444;
        border-top: solid 2px #ff0000;
        background: #222;
    }

    #t_calendar td {
        height: 80px;
        text-align: center;
        position: relative;
        border: 1px solid #444 !important;
    }

    #t_calendar td span {
        position: absolute;
        left: 10px;
        top: 10px;
        font-weight: bold;
    }

    .att_on {
        background: url('/backend/images/icon-attend-o.png?111') no-repeat center center !important;
    }

    .att_off {
        background: url('/backend/images/icon-attend-x.png?111') no-repeat center center !important;
        opacity: 0.7;
    }

    .att_enable {
        background: rgba(50, 50, 50, 0.1) url("/backend/images/icon-attend-click.png?111") no-repeat center center !important;
        color: #ff0000;
    }

    .att_enable:hover {
        opacity: 0.6;
    }

    .att_give p {
        background: url("/backend/images/icon-happy01.png?13") no-repeat 30px center !important;
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        padding: 20px 0 0 90px;
        text-align: left;
    }

    .att_give p strong {
        color: #EF0003;
        font-weight: bold;
    }

    .result_menu2 {
        position: absolute;
        top: 0px;
        right: 10px;
        display: block;
        height: 54px;
    }

    .result_menu2 li a {
        width: inherit;
        padding: 0 5px;
        color: #ffffff;
    }
</style>
<?= $this->endSection() ?>