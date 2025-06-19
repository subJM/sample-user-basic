<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<form name="frm" id="frm" method="post" action="?mode=insert&amp;code=6">
    <input type="hidden" name="seq" id="seq" value="">
    <input type="hidden" name="code_group" value="65">
    <input type="hidden" name="code_no" value="65">
    <input type="hidden" name="thread" value="">
    <input type="hidden" name="depth" value="">
    <input type="hidden" name="Page.IsBack.List" value="JTJGY3VzdG9tZXIlMkVhc3AlM0Y=">
    <input type="hidden" name="bm_seq" id="bm_seq" value="">
    <input type="hidden" name="coin_seq" id="coin_seq" value="">
    <div class="sub_content_arr">
        <div>
            <div class="subTitle_customer">
                <h2>고객센터 <small>customer center</small></h2>
            </div>
            <!-- 서브타이틀 -->

            <!-- Content Start -->

            <!-- 테이블 시작 -->
            <div class="cont_back_arr01">
                <table cellpadding="3" cellspacing="1" width="100%" class="bbs-list-new">
                    <tbody>
                        <tr style="display:none">
                            <td align="left" class="bg_gray01" width="100" height="30" style="padding-top:5px;padding-left:10px;">별 명</td>
                            <td align="left"><input name="name" id="name" type="text" class="input_01" size="20" value=""></td>
                        </tr>
                        <tr style="display:none">
                            <td align="left" class="bg_gray01" width="100" height="30" style="padding-top:5px;padding-left:10px;">등 급</td>
                            <td align="left">
                                <div class="ddOutOfVision" style="height:0px;overflow:hidden;position:absolute;" id="temp4_msddHolder">
                                    <select name="temp4" id="temp4" style="width:200px; ">
                                        <option value="" selected="selected">회원등급</option>

                                    </select>
                                </div>
                                <div id="temp4_msdd" class="dd" style="width: 190.4px;">
                                    <div id="temp4_title" class="ddTitle" style="color: rgb(0, 0, 0);"><span id="temp4_arrow" class="arrow"></span><span class="ddTitleText" id="temp4_titletext"><span class="ddTitleText">회원등급</span></span></div>
                                    <div id="temp4_child" class="ddChild" style="width: 188.4px;"><a href="javascript:void(0);" class="selected enabled" style="[object CSSStyleDeclaration]" id="temp4_msa_0"><span class="ddTitleText">회원등급</span></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="bg_gray01" width="100" height="30" style="padding-top:5px;padding-left:10px;">제 목</td>
                            <td align="left"><input type="text" name="title" id="title" value="" size="100" style="width:98%;" class="input_01"></td>
                        </tr>
                        <tr>
                            <td align="left" class="bg_gray01" width="100" height="30" style="padding-top:5px;padding-left:10px;">옵 션</td>
                            <td align="left"><input type="hidden" name="notice" id="notice" value="N">

                                <input type="hidden" name="tag" id="tag" value="Y">


                                <input type="hidden" name="secret_chk" id="secret_chk" value="Y">
                                <input type="checkbox" id="secret_chk" checked="true" disabled="true"> <label for="secret_chk">비밀글</label>
                                <!--
                            &nbsp; <a href="javascript:void(0);" id="bettingListAdd" class="ui_btn_red">베팅내역파일첨부</a>
                            &nbsp; <a href="javascript:void(0);" id="prizeListAdd" class="ui_btn_red">당첨내역첨부</a></td>
                              -->
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div id="betting_list">
                                    <style type="text/css">
                                        .trIngGame {
                                            background: none;
                                        }

                                        .trIngGame td table td {
                                            border: none;
                                        }

                                        .betting-result {
                                            border: solid 1px #444;
                                        }
                                    </style>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div id="prize_list"> </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="100" colspan="2" align="left" class="trIngGame" style="padding-top:5px;padding-left:10px; background:none;"><textarea name="content" id="content" cols="100" rows="20" style="width:98%;"></textarea></td>
                        </tr>
                    </tbody>
                    <? /* ?>
                    <tbody style="display:none">
                        <tr>
                            <th><strong>· 파일첨부</strong></th>
                            <td align="left"><!-- 싱글모드 -->

                                <div id="_attachSingle" style="display:">
                                    <div>
                                        <input type="file" name="UploadFile" id="UploadFile" class="bg_input01" style="width:50%">
                                        &nbsp;
                                        용량제한 <span class="num_style b" style="color:red">1048576</span> KB
                                    </div>
                                    <div style="padding:5px 0 5px 0">
                                        <loop name="fileList"> <img src="/FileUploader/FileView.asp?FilePath=Board/thumb1/" height="40" align="top">
                                            <input type="checkbox" name="d_seq" id="d_seq" value="">
                                            파일삭제
                                        </loop>
                                    </div>
                                </div>

                                <!-- 멀티모드 -->

                                <table id="_attachMulti" cellspacing="0" cellpadding="0" style="display:">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100" id="_thumb" style="border:1px solid #333333" align="center"> 이미지<br>
                                                                미리보기 </td>
                                                            <td style="padding-left:5px;"><select name="_attachfile" id="_attachfile" size="7" multiple="" style="border:1px solid #333333;FONT-SIZE: 12px; WIDTH: 520px;background-color:#000000" class="font_12_808080">
                                                                </select></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td>
                                                <table width="80" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td height="25" align="center"><img src="/backend/images/btn/btn_file.gif" width="55" height="19" onclick="__open('/FileUploader/FileUploader.asp?bbs_seq=', 'FileUploader', 'width=430, height=350, scrollbars=yes')" style="cursor:pointer"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="25" align="center"><img src="/backend/images/btn/btn_filedelet.gif" width="55" height="19" onclick="_attachfile_delete()" style="cursor:pointer"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="25" align="center"><img src="/backend/images/btn/btn_top.gif" width="55" height="19" onclick="_attachfile_move('_attachfile', 'up')" style="cursor:pointer"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="25" align="center"><img src="/backend/images/btn/btn_down.gif" width="55" height="19" onclick="_attachfile_move('_attachfile', 'down')" style="cursor:pointer"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:5px" height="25">
                                                <font color="red">Tip : 파일이 <u>이미지</u> 일 경우 <b>파일명에 더블클릭</b>을 하시면 해당 이미지를 내용에 추가하실 수 있습니다.</font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                    <? */ ?>

                </table>
                <div class="board_wirte_bottom">
                    <button type="image" class="ui_btn_red" style="cursor:pointer;">저장</button>
                    &nbsp; <a href="javascript:history.back();" class="ui_btn_gray">목록</a> <br>
                    <br>
                </div>
            </div>
            <!-- 테이블 끝 -->

            <!-- 게시판 버튼 시작 -->

            <div class="clear"> </div>
        </div>

        <div class="clear"></div>
    </div>
</form>
<script language="JavaScript">
    var editor;
    var bOptEditor = "N";
    var bOptContentLen = "0";

    $(document).ready(function() {
        $(".subTitle_freeboard").append("<h2>USDT 도움말 <small></small></h2>");
        $(".subTitle_customer").append("<h2>고객센터 <small>customer center</small></h2>");
        $(".subTitle_event").append("<h2>이벤트 <small>event</small></h2>");
        $(".subTitle_notice").append("<h2>공지 & 규정 <small>notice</small></h2>");

        if (bOptEditor == "Y") {
            $("#height_control").hide();
        }
        getBettingList();
        getPrizeList();

        $("#bettingListAdd").click(function() {
            window.open("/betting_info.asp", "betting_info", "width=1040, height=768, scrollbars=yes");
        });

        $("#prizeListAdd").click(function() {
            window.open("/prize_info.asp", "betting_info", "width=1040, height=768, scrollbars=yes");
        });

        if (bOptContentLen != "0") {
            $("#content").parent().append("<span class=\"font_11_yellow\" style=\"padding:0px 0px 5px 10px\">내용은 최소 <font color=\"#FF5603\">" + bOptContentLen + "</font>자 이상 등록가능합니다.</span>");
        }

        // $("#temp4").children("option[value='']").attr("selected", true).end().msDropDown().data("dd");
        // var pObj = $("div.ddTitle").css("color", "#000000").find(".ddTitleText").eq(0);
        // var pObj_img = pObj.find("img");
        // if (pObj_img.length > 0) {
        //     if (pObj_img.attr("src").ext().Left(3) == "swf") {
        //         pObj.prepend("<a href=\"" + pObj_img.attr("src") + "\" class=\"flash\"></a>");
        //         pObj_img.remove();
        //     }
        // }
        $("div.ddChild").find("a").each(function() {
            var img = $(this).find("img");
            if (img.length > 0) {
                if (img.attr("src").ext().Left(3) == "swf") {
                    $(this).prepend("<a href=\"" + img.attr("src") + "\" class=\"flash\"></a>").find("a.flash").flash({
                        "width": "20",
                        "height": "20",
                        "wmode": "opaque"
                    });
                    img.remove();
                }
            }
        });
        $("a.flash").each(function() {
            $(this).flash({
                "width": "20",
                "height": "20",
                "wmode": "opaque"
            });
        });
    });

    function regCancel() {
        if (confirm("등록을 취소하시겠습니가?")) {
            location.href = '/customer.asp?';
        }
    }

    // 베팅리스트
    function getBettingList() {
        $.get("/betting_list.asp", {
            "bm_seq": $("#bm_seq").val()
        }, function(xml) {
            if (xml != "") {
                $("#betting_list").html(xml);
            }
        });
    }

    // 룰렛, 복권 당첨리스트
    function getPrizeList() {
        if ($("#coin_seq").val() != "") {
            $.get("/prize_list.asp", {
                "coin_seq": $("#coin_seq").val(),
                "coin_id": "luby22"
            }, function(xml) {
                if (xml != "") {
                    $("#prize_list").html(xml);
                }
            });
        }
    }
</script>
<script>
    $(document).ready(function() {

        if (bOptEditor == "Y") { // Html 모드 사용하기라면...
            // Create the editor again, with the appropriate settings.
            editor = CKEDITOR.replace('content', {
                enterMode: Number("2"),
                shiftEnterMode: Number("2"),
                skin: "v2"
            });
        }

        // _attachfile_insert();
        var btn_flag = false;
        $("#frm").submit(function() {
            if (!btn_flag) {
                if (!$("#title").checkField("제목을 입력해 주세요 !")) return false;
                if (bOptEditor == "Y") { // Html 모드 사용하기라면...
                    if (CKEDITOR.instances.content.getData() == "") {
                        alert("내용을 입력해 주세요.");
                        CKEDITOR.instances.content.focus();
                        return false;
                    }
                } else {
                    if (!$("#content").checkField("내용을 입력해 주세요 !")) return false;
                }

                $("#submitBtn").innerText = "작성하신 데이터를 서버로 전송중입니다...";
                btn_flag = true;
            } else {
                alert("작성하신 데이터를 서버로 전송중입니다...");
                return false;
            }
        });

        $("#title").focus();
        $(".click_popup").each(function() {
            $(this).focus(function() {
                $(this).css({
                    "border": "1px solid #3EAF0E",
                    "padding": "1px",
                    "imeMode": "active"
                });
            }).blur(function() {
                $(this).css({
                    "border": "1px solid #DDDDDD",
                    "padding": "1px"
                });
            });
        })

        // 클릭한 파일이 이미지라면.. 좌측에 썸네일 이미지를 보여준다.
        $("#_attachfile").change(function() {

            // 파일 기본키
            var fileSeq = parseInt($(this).val(), 10);

            // 본문 키
            var bbsSeq = parseInt($("#seq").val(), 10);

            $.get("/FileUploader/FileTypeSelecter.asp", {
                seq: fileSeq,
                bbs_seq: bbsSeq
            }, function(xml) {

                var maxWid = 100;
                var maxHei = 98;

                if (xml.fields("width") != "0" && xml.fields("height") != "0") {

                    var wid = parseInt(xml.fields("width"), 0);
                    var hei = parseInt(xml.fields("height"), 0);
                    var name = xml.fields("filename"); // 경로와 같이 넘어온다.

                    // 이미지 크기가 가로가 크다면...
                    // 최대 크기보다 원본이미지가 크다면...
                    if (maxWid < wid || maxHei < hei) {
                        if (wid > hei) {
                            maxHei = (maxWid * hei) / wid;
                        } else {
                            maxWid = (maxHei * wid) / hei;
                        }
                    } else {
                        maxWid = wid;
                        maxHei = hei;
                    }

                    $("#_thumb").html("<img src='/FileUploader/FileView.asp?FilePath=" + name + "' width='" + maxWid + "' height='" + maxHei + "'>");
                } else {
                    $("#_thumb").html("이미지<br>미리보기");
                }
            });
        }).dblclick(function() {

            // 파일 기본키
            var fileSeq = parseInt($(this).val(), 10);

            // 본문 키
            var bbsSeq = parseInt($("#seq").val(), 10);

            $.get("/FileUploader/FileTypeSelecter.asp", {
                seq: fileSeq,
                bbs_seq: bbsSeq
            }, function(xml) {

                var maxWid = 600;
                var maxHei = 750;

                if (xml.fields("width") != "0" && xml.fields("height") != "0") {

                    var wid = xml.fields("width");
                    var hei = xml.fields("height");
                    var name = xml.fields("filename");

                    // 최대 크기보다 원본이미지가 크다면...
                    if (maxWid < wid || maxHei < hei) {
                        // 이미지 크기가 가로가 크다면...
                        if (wid > hei) {
                            maxHei = (maxWid * hei) / wid;
                        } else {
                            maxWid = (maxHei * wid) / hei;
                        }
                    } else {
                        maxWid = wid;
                        maxHei = hei;
                    }
                    InsertHTML("<img src='/FileUploader/FileView.asp?FilePath=" + name + "' width='" + maxWid + "' height='" + maxHei + "'>")
                } else {
                    alert("이미지가 아닙니다.\n\n이미지만 본문내용에 추가할 수 있습니다.");
                }
            });
        })
    });

    function InsertHTML(html) {

        if (bOptEditor == "Y") { // 에디터를 사용한다면...
            // Get the editor instance that we want to interact with.
            var oEditor = CKEDITOR.instances.content;

            // Check the active editing mode.
            if (oEditor.mode == 'wysiwyg') {
                // Insert the desired HTML.
                oEditor.insertHtml(html);
            } else
                alert('You must be on WYSIWYG mode!');
        } else {
            $("#content").val($("#content").val() + html);
        }


    }


    // function jsSelectClear(argObj) {
    //     for (var i = argObj.length - 1; i >= 0; i--) {
    //         argObj.options[i] = null;
    //     }
    // }

    // function _attachfile_insert() { // 

    //     var attachfile = document.getElementById("_attachfile");
    //     jsSelectClear(attachfile);

    //     // 새로운 방식
    //     var seq = new Array();
    //     var file_name = new Array();
    //     var file_size = new Array();

    //     $.get("/FileUploader/FileSelecter.asp", {
    //         bbs_seq: $("#seq").val()
    //     }, function(xml) {
    //         eval(xml);
    //         for (var i = 0; i < seq.length; i++) {
    //             attachfile.options[i] = new Option(file_name[i] + " (" + file_size[i] + ")", seq[i]);
    //         }
    //     });
    // }

    function _attachfile_delete() {
        var obj = document.getElementById("_attachfile");
        var seq = new Array();
        var j = 0;
        for (var i = 0; i < obj.length; i++) {
            if (obj.options[i].selected == true) {
                seq[j] = obj.options[i].value;
                j++;
            }
        }

        if (confirm("선택한 파일을 삭제하시겠습니까?")) {
            // 결과값을 저장한다.
            $.get("/FileUploader/FileUploaderDel.asp", {
                seq: seq.join(","),
                bbs_seq: parseInt($("#seq").val(), 10) // 본문 키
            }, function(xml) {
                if (xml == "Y") {
                    for (var i = 0; i < obj.length; i++) { // 해당목록을 seledt box에서 삭제한다.
                        for (var j = 0; j < seq.length; j++) {
                            if (obj.options[i].value == seq[j]) {
                                obj.options[i] = null;
                            }
                        }
                    }
                }
            });

        }
    }

    function _attachfile_move(id, mode) {
        var obj = document.getElementById(id);
        var idx = obj.selectedIndex;
        if (idx < 0) idx = obj.selectedIndex = 0;

        var opt = obj.options[obj.selectedIndex];

        switch (mode) {
            case 'first':
                obj.insertBefore(opt, obj.options[0]);
                break;
            case 'last':
                obj.appendChild(opt);
                break;
            case 'up':
                if (idx > 0) obj.insertBefore(opt, obj.options[idx - 1]);
                break;
            case 'down':
                if (idx < obj.options.length - 1) obj.insertBefore(obj.options[idx + 1], opt);
                break;
        }
    }

    function textarea_decrease(id, row) {
        if (document.getElementById(id).rows - row > 0)
            document.getElementById(id).rows -= row;
    }

    function textarea_original(id, row) {
        document.getElementById(id).rows = row;
    }

    function textarea_increase(id, row) {
        document.getElementById(id).rows += row;
    }
</script>
<?= $this->endSection() ?>