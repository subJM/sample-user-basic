<?= $this->extend(env('DOMAIN_NAME').'backend/layout/pages-layout');  ?>
<?= $this->section('content') ?>
<div class="coinWin" style="display: none;">
    <i id="coiniframe_close" class="fa fa-times" style="cursor: pointer;"></i>
    <iframe id="coiniframe" width="100%" height="100%" frameborder="0" marginwidth="0" marginheight="0" src=""></iframe>
</div>
<form name="frm" id="frm" method="post" action="/cash_01_royalcoin.asp">
    <input type="hidden" name="mode" id="mode">
    <input type="hidden" name="mb_9" id="mb_9" value="">
    <input type="hidden" name="tx_id" id="tx_id">

    <div class="sub_content_arr">

        <div class="subTitle_arr">
            <h2>충전하기 <small>rechange</small></h2>
        </div>
        <div class="sub-cont-arr">
            <div class="cont_back_arr01">
                <div class="cash_notice_zone ">
                    <div class="title">결제안내</div>
                    <ul>
                        <li>1. '코인구매'를 클릭하고 전송할 코인 금액을 입력 후 '입금주소확인'을 클릭합니다.<br>
                            <br>
                            2. '입금주소'를 복사 혹은 큐알코드를 촬영해서 본인의 지갑에서 코인을 전송합니다.<br>
                            <br>
                            3. 코인을 전송하고 난 후, '코인조회'를 클릭해서 원화로 환산된 금액을 확인합니다.<br>
                            <br>
                            4. '충전신청'을 클릭하면 정상적으로 충전이 완료됩니다.<br>
                            <br>
                            ※ 해외 거래소 지갑을 이용하실 경우, 가입 시 등록한 개인 지갑 주소와는 관계없이 <br>
                            　거래소의 해외 지갑 주소로 전송됩니다. 만약 해외 거래소에서 저희 USDT 카지노 지갑으로 송금하실 경우, <br>
                            　송금한 테더의 수량과 전송 시간을 고객센터(사이트 내 또는 텔레그램)로 알려주시면, 확인 후 신속하게 처리해 드리겠습니다.<br>
                            <br>
                            ※ 안내받은 입금 주소로 USDT를 보내실 때, 신청하신 수량과 다르더라도 실제 입금된 USDT 수량에 맞춰 충전이 처리됩니다.<br>
                            <br>
                            ※ 신청금액과 다른 금액을 전송하거나, 본인의 지갑이 아닌 다른 지갑에서 코인 전송을 하는 경우 코인조회가 되지 않습니다. 이런 경우 관리자에게 문의해 주시기 바랍니다.<br>
                            <br>
                            ※ USDT(테더)는 TRC20 네트워크를 통해 전송되므로, 전송 수수료로 TRON(트론) 코인이 사용됩니다. 따라서, 수수료에 해당하는 만큼의 TRON(트론) 코인을 보유하고 있어야 합니다.
                        </li>
                    </ul>
                </div>
                <div class="cashzone_talbe_arr">
                    <table width="100%" cellspacing="0" cellpadding="0" class="cash_zone_table ">
                        <tbody>
                            <tr>
                                <th>코인충전</th>
                                <td id="bank_info" align="left" style="padding:10px; ">
                                    <button type="button" id="coinProc" class="ui_btn_green">코인입금</button>
                                    <a href="" id="test" target="_blank" style="display:none;"></a>
                                </td>
                            </tr>

                            <tr>
                                <th><strong>충전금액</strong></th>
                                <td align="left" style="padding:10px; ">
                                    <input name="point" type="text" class="bg_input money" id="point" size="25" value="0" readonly="">원
                                    <input type="button" class="ui_btn_yellow" id="getBalance" value="코인조회">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cash_bottom_btn">
                    <button class="ui-button_red" type="image">충전신청</button>
                </div>
            </div>
            <div class="tab-pane fade" id="cash0102">
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
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="topth cash-list0021">
                        <tbody>
                            <tr class="info betting_th">
                                <th class="hidden-xs">번호</th>
                                <th>신청날짜</th>
                                <th>충전금액</th>
                                <th class="hidden-xs">입금자명</th>
                                <th>충전날짜</th>
                                <th class="hidden-xs">충전/환급 포인트</th>
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
                </div>



            </div>

        </div>
        <div class="clear"></div>
    </div>
</form>
<script type="text/javascript">
    <!--
    function money_list(page) {
        $.ajax({
            url: "/cash_01_1.asp",
            data: {
                "mode": "ajax",
                "page": page
            },
            cache: false,
            success: function(data) {
                $("#cash0102").empty().append(data);
            }
        });
    }

    money_list();

    $(document).ready(function() {
        // 세자리 마다 콤마 찍기
        $(".money").each(function() {
            $(this).keyup(function() {
                $(this).val($(this).val().replace(/\,/gi, "").money());
            });
        });

        $("span.money").each(function() {
            $(this).text($(this).text().money());
        }).css("font-weight", "bold");

        $("input[name=chk]").each(function() {
            $(this).click(function() {
                $("#point").val($(this).val())
            });
        });

        $("#frm").submit(function() {
            if (!$("#point").checkField("충전금액을 입력해주십시오.")) return false;


            if ($("#tx_id").val() == "") {
                alert('코인조회를 해주세요.');
                return false;
            }
            if ($("input[name='point_type']").length > 0) {
                if ($('input[name="point_type"]:checked').val() == undefined) {
                    alert("이용할 게임을 선택해 주세요.")
                    return false;
                }
            }
            var point = $("#point").val().replace(/\,/gi, "");
            if (point.isNum()) {
                point = point.int()
            }

            if (point < 1) {
                alert("0원 이상 신청 가능합니다.");
                return false;
            }
            $("#mode").val("point_insert");
        });

        function replace_phonenumber(pn) {
            return pn.substring(0, 3) + "****" + pn.substring(7);
        }

        // 충전공지사항
        var bank_notice = "";
        if (bank_notice != "") {
            $("#bank_notice").css("display", "").find("td").eq(1).html(
                "<img src=\"/html/usdt/images/icon/board_new.gif\"> " + bank_notice
            );
        }

        $('#coinProc').click(function() {
            $.get("/modal/coin_deposit", {
                "mode": "getUrl"
            }, function(data) {
                console.log(data);
                if (data.status === true) {
                    $('#coiniframe').attr('src', data.url);
                    $('.coinWin').show();
                } else {
                    alert(data.msg);
                }
            }, "json")
        });

        $('#coiniframe_close').click(function() {
            $('.coinWin').hide();
            $('#coiniframe').attr('src', '');
        }).css("cursor", "pointer");


        $("#getBalance").click(function() {
            $.get("cash_01_royalcoin.asp", {
                "mode": "getBalance"

            }, function(data) {
                if (data.status === true) {
                    alert("조회가 완료되었습니다.");
                    $('#point').val(data.krw);
                    $('#tx_id').val(data.tx_id);

                } else {
                    alert(data.msg);
                }
            }, "json")
        });

    });

    window.addEventListener('message', function(event) {
        if (event.data.type === 'COPY_TO_CLIPBOARD') {
            const textArea = document.createElement('textarea');
            textArea.value = event.data.text;
            textArea.style.position = 'fixed';
            textArea.style.left = '-9999px';
            document.body.appendChild(textArea);

            try {
                textArea.select();
                document.execCommand('copy');
                console.log('부모 페이지에서 복사 성공');
            } catch (err) {
                console.error('부모 페이지에서 복사 실패:', err);
            } finally {
                document.body.removeChild(textArea);
            }
        }
    });


    //
    -->
</script>
<style type="text/css">
    .cash_zone_table td a {
        width: 28.5% !important;
    }

    .coinWin {
        position: fixed;
        left: 50%;
        top: 50px;
        transform: translate(-50%, 0);
        z-index: 999;
        width: 500px;
        height: 730px;
    }

    .coinWin .fa-times {
        font-size: 20px;
        position: absolute;
        left: 5px;
        top: 5px;
        color: #FF0000
    }
</style>
<?= $this->endSection() ?>