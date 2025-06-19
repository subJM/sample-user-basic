<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<form name="frm" id="exchange" >
    <input type="hidden" name="mode" id="mode">
    <div class="sub_content_arr">
        <div>
            <div class="subTitle_arr">
                <h2>환전하기 <small>exchange </small></h2>
            </div>

            <div class="cont_back_arr01">
                <div class="cash_notice_zone">

                    <div class="title">환전방법 </div>
                    <ul>
                        <li>⭐️ 환전 신청 매뉴얼 ⭐️<br>
                            <br>
                            1회 최소 환전 금액: 10,000 원<br>
                            1회 최대 환전 금액: 제한 없음<br>
                            1일 최대 환전 금액: 제한 없음<br>
                            <br>
                            ✅ 24시간 동안 환전 횟수에 관계없이, 1원 단위까지 자유롭게 출금이 가능합니다.<br>
                            <br>
                            ✅ 환전 신청 시 등록된 지갑 주소를 반드시 확인해 주시기 바랍니다.<br>
                            등록된 지갑 주소와 환전받을 지갑 주소가 다를 경우, 사이트 내 고객센터나 텔레그램 고객센터로 문의해 주세요.<br>
                            ❓ 등록된 지갑 주소는 환전 신청 버튼 위에서 확인할 수 있으며, 잘못된 주소 입력 시 발생하는 문제에 대해 <br>
                            당사는 책임을 지지 않으니 유의해 주세요.<br>
                            <br>
                            ✅ 환전은 TRC20 네트워크를 통해서만 가능합니다.<br>
                            등록된 지갑 주소가 TRC20 네트워크 주소가 아닌 경우, 환전이 불가하며 자동으로 취소 처리됩니다.<br>
                            ❓ 지갑 주소가 TRC20인지 ERC20인지 확인하려면, 회원님의 지갑 주소 형식을 확인해야 합니다.<br>
                            ERC20 USDT 주소는 일반적으로 '0x'로 시작하며, TRC20 USDT 주소는 대문자 'T'로 시작합니다.<br>
                            <br>
                            ✅ 환전은 USDT (테더)로 진행되며, 해외 거래소 시세를 기준으로 책정됩니다.<br>
                            회원님의 개인 지갑 및 제약 없이 USDT 수령이 가능한 해외 거래소 계정 지갑만 환전이 가능합니다.<br>
                            국내 거래소(업비트, 빗썸, 코인원 등) 계정 지갑으로는 환전이 불가하니 참고해 주세요.<br>
                            <br>
                            ✅ 해외 거래소 계정 지갑을 사용하는 경우, 해당 거래소의 입출금 규정을 반드시 확인하시기 바랍니다.<br>
                            해외 거래소 규정으로 인한 금전적 불이익에 대해서는 당사에서 책임을 지지 않으므로 신중히 이용해 주세요.<br>
                            <br>
                            ✅ 본사에서는 [보유금 전액]에 대해 출금 신청을 요구할 수 있습니다.<br>
                            <br>
                            ✅ 위 규정을 준수하지 않아 발생한 금전적 손실에 대해서는 당사에서 책임을 지지 않습니다.
                        </li>
                    </ul>
                </div>
                <div class="cashzone_talbe_arr">
                    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="cash_zone_table bbs-list">
                        <tbody>
                            <tr>
                                <th>보유금액</th>
                                <td align="left" style="padding:10px; ">&nbsp;&nbsp;<b>
                                        <font color="#f22200" size="3">0 원</font>
                                    </b></td>
                            </tr>
                            <tr>
                                <th>환전금액</th>
                                <td style="padding:10px; ">
                                    <input name="money" type="text" maxlength="12" class="exchangeInput money bg_input" id="money" onkeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                    &nbsp;&nbsp; <a href="javascript:void(0);" class="ui_btn_gray" onclick="SELECT_MONEY(10000)" style="cursor:pointer;">1만원</a> <a href="javascript:void(0);" class="ui_btn_gray" onclick="SELECT_MONEY(30000)" style="cursor:pointer;"> 3만원</a> <a href="javascript:void(0);" class="ui_btn_gray" onclick="SELECT_MONEY(50000)" style="cursor:pointer;">5만원</a> <a href="javascript:void(0);" class="ui_btn_gray" onclick="SELECT_MONEY(100000)" style="cursor:pointer;">10만원</a> <a href="javascript:void(0);" class="ui_btn_gray" onclick="SELECT_MONEY(200000)" style="cursor:pointer;">20만원</a> <a href="javascript:void(0);" class="ui_btn_gray" onclick="SELECT_MONEY(300000)" style="cursor:pointer;">30만원</a> <a href="javascript:void(0);" class="ui_btn_gray" onclick="SELECT_MONEY(500000)" style="cursor:pointer;">50만원</a> <a href="javascript:void(0);" class="ui_btn_gray" onclick="SELECT_MONEY(1000000)" style="cursor:pointer;">100만원</a>

                                    <a href="javascript:void(0);" class="ui_btn_gray" onclick="SELECT_MONEY(5000000)" style="cursor:pointer;">500만원</a>



                                    <a href="javascript:void(0);" class="ui_btn_blue" onclick="SELECT_MONEY(0)" style="cursor:pointer;">정정</a>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" colspan="2" style="padding:10px; "><span style="color: #ff3434;font-size: 12px;font-weight: normal;">최소 <span class="money" style="text-align: right; padding-right: 5px; font-weight: bold;">10,000원</span>이상, <span class="money" style="text-align: right; padding-right: 5px; font-weight: bold;">1원</span> 단위로 환전 가능합니다.</span></td>
                            </tr>
                            <tr>
                                <td align="left" colspan="2" style="padding:10px; ">
                                    <ul>
                                        <li style="margin: 4px 0;"><strong>거래은행</strong> : USDT-Trc20</li>
                                        <li style="margin: 4px 0;"><strong>계좌번호</strong> : TUCTWEgVD8kdf3kmNChRrtrH5fogED****</li>
                                        <li style="margin: 4px 0;"><strong>예금주</strong> : 루비</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cash_bottom_btn">
                    <button class="ui-button_red" type="image">환전신청</button>
                </div>
                <div class="tab-pane fade" id="cash0202">
                    <style type="text/css">
                        .btnDel {
                            line-height: 25px !important;
                            height: 25px !important;
                        }

                        .cash-list0021 td {
                            border-bottom: solid 1px #ccc;
                        }
                    </style>

                    <div class="">
                        <div class="">
                            <table border="0" cellpadding="0" cellspacing="0" class="topth cash-list0021" width="100%">
                                <tbody>
                                    <tr class="info betting_th">
                                        <th class="hidden-xs">번호</th>
                                        <th>신청날짜</th>
                                        <th>환전금액</th>
                                        <th>계좌번호</th>
                                        <th class="hidden-xs">예금주</th>
                                        <th class="hidden-xs">환전날짜</th>
                                        <th>상태</th>
                                        <th>삭제</th>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="text-center">
                                <div class="tf_pagination">
                                    <ul>
                                        <li><a id="pre-btn" href="javascript:void(0);"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                                        <li><a class="active">1</a></li>
                                        <li><a id="next-btn" href="javascript:void(0);"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>




                            <!-- 실제 레이아웃 -->
                        </div>
                    </div>
                </div>
            </div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="bank-time-table">
                <tbody>
                    <tr>
                        <th>국민은행</th>
                        <td>00:00 ~ 00:10</td>
                        <th>우리은행</th>
                        <td>00:00 ~ 00:10</td>
                        <th>신한은행</th>
                        <td>00:00 ~ 00:10</td>
                    </tr>
                    <tr>
                        <th>농협</th>
                        <td>23:55 ~ 00:35</td>
                        <th>축협</th>
                        <td>00:00 ~ 00:10</td>
                        <th>기업은행</th>
                        <td>00:00 ~ 00:30</td>
                    </tr>
                    <tr>
                        <th>하나은행</th>
                        <td>00:00 ~ 00:10</td>
                        <th>우체국</th>
                        <td>04:00 ~ 05:00</td>
                        <th>SC제일</th>
                        <td>11:40 ~ 00:40</td>
                    </tr>
                    <tr>
                        <th>외환은행</th>
                        <td>23:55 ~ 00:05</td>
                        <th>시티은행</th>
                        <td>23:40 ~ 00:05</td>
                        <th>수협</th>
                        <td>11:50 ~ 00:30</td>
                    </tr>
                    <tr>
                        <th>신협</th>
                        <td>23:50 ~ 00:10</td>
                        <th>새마을금고</th>
                        <td>00:00 ~ 00:30</td>
                        <th>상호저축은행</th>
                        <td>23:00 ~ 08:00</td>
                    </tr>
                    <tr>
                        <th>경기은행</th>
                        <td>23:40 ~ 00:50</td>
                        <th>경남은행</th>
                        <td>23:50 ~ 00:00</td>
                        <th>광주은행</th>
                        <td>00:00 ~ 00:20</td>
                    </tr>
                    <tr>
                        <th>부산은행</th>
                        <td>00:00 ~ 00:05</td>
                        <th>제주은행</th>
                        <td>00:00 ~ 00:10</td>
                        <th>전북은행</th>
                        <td>23:50 ~ 00:05</td>
                    </tr>
                    <tr>
                        <th>대구은행</th>
                        <td>23:50 ~ 00:50</td>
                        <th>미래에셋</th>
                        <td>23:30 ~ 00:30</td>
                        <th>삼성증권</th>
                        <td>23:50 ~ 00:10</td>
                    </tr>
                    <tr>
                        <th>한화투자</th>
                        <td>01:45 ~ 02:15</td>
                        <th>SK증권</th>
                        <td>23:50 ~ 06:00</td>
                        <th>현대증권</th>
                        <td>23:45 ~ 00:15</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="clear"></div>
    </div>
    <input type="hidden" name="bank" id="bank" value="USDT-Trc20">
    <input type="hidden" name="account" id="account" value="TUCTWEgVD8kdf3kmNChRrtrH5fogED****">
    <input type="hidden" name="depositor" id="depositor" value="루비">
</form>

<script type="text/javascript">
    $(document).ready(function() {

        money_list();

        $("#money").focus();
        // 세자리 마다 콤마 찍기
        $(".money").each(function() {
            $(this).keyup(function() {
                $(this).val($(this).val().replace(/\,/gi, "").money());
            });
        });


        $("span.money").each(function() {
            $(this).text($(this).text().money());
        }).css("font-weight", "bold");


        $("#exchange").submit(function() {
            var point = $(".mb_point").eq(0).text().replace(/\,/gi, ""); // 보유금액
            var pri = $("#money").val().replace(/\,/gi, ""); // 환전금액
            var pri2 = parseInt(pri / 10000) * 10000;

            if ($("#money").val() != "") {
                if (!pri.isNum()) {
                    alert("금액은 숫자만 입력 가능합니다.");
                    $("#money").focus();
                    return false;
                }
            }

            var exMoneyMin = 10000;
            var exMoneyUnit = 1;

            if (pri < exMoneyMin) {
                alert("환전금액을 정확히 입력해 주십시오.\n\n" + String(exMoneyMin).money() + "원 이상부터 환전가능합니다.");
                $("#money").focus();
                return false;
            }

            if (exMoneyUnit > 0) {
                if (pri % exMoneyUnit != 0) {
                    alert("환전금액은 " + String(exMoneyUnit).money() + "원 단위로만 가능합니다.");
                    $("#money").focus();
                    return false;
                }
            }

            if (parseInt(pri, 10) > parseInt(point, 10)) {
                alert('보유금액보다 환전금액이 더 많습니다.\n금액을 정확히 기재해 주세요.');
                $("#money").focus();
                return false;
            }

            if (!$("#bank").checkField("거래은행을 입력해 주시기 바랍니다.")) return false;
            if (!$("#account").checkField("계좌번호를 정확히 입력해 주시기 바랍니다.")) return false;
            if (!$("#depositor").checkField("계좌번호를 정확히 입력해 주시기 바랍니다.")) return false;

            $("#mode").val("money_insert");
        });
    });

    function money_list(page) {
        // $.ajax({
        //     url: "/cash_02_1.asp",
        //     data: {
        //         "mode": "ajax",
        //         "page": page
        //     },
        //     cache: false,
        //     success: function(data) {
        //         $("#cash0202").empty().append(data);
        //     }
        // });
    }

    function SELECT_MONEY(Values) {
        var cValue

        cValue = document.getElementById("money").value.num();
        if (cValue == "") cValue = 0;
        if (!isNaN(Values)) {
            if (Values == "0") {
                document.getElementById("money").value = 0;
            } else {
                moneys = parseInt(cValue, 10) + parseInt(Values, 10);
                document.getElementById("money").value = String(moneys).money();
            }
        }
        document.getElementById("money").focus();
    }
</script>
<?= $this->endSection() ?>