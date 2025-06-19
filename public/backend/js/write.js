$(document).ready(function() {
    
    if (bOptEditor == "Y") { // Html 모드 사용하기라면...
        // Create the editor again, with the appropriate settings.
        editor = CKEDITOR.replace( 'content', {
            enterMode		: Number( "2" ),
            shiftEnterMode	: Number( "2" ), 
            skin			: "v2" 
        });
    }
    
    _attachfile_insert();
    var btn_flag = false;
    $("#frm").submit(function() {
        if(!btn_flag) {
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
                "border":"1px solid #3EAF0E", "padding":"1px", "imeMode":"active"
            });
        }).blur(function() {
            $(this).css({
                "border":"1px solid #DDDDDD", "padding":"1px"
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
            seq : fileSeq,
            bbs_seq : bbsSeq
        }, function(xml) {
            
            var maxWid = 100;
            var maxHei = 98;
            
            if (xml.fields("width") != "0" && xml.fields("height") != "0")	{

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

                $("#_thumb").html("<img src='/FileUploader/FileView.asp?FilePath="+name+"' width='"+maxWid+"' height='"+maxHei+"'>");
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
            seq : fileSeq,
            bbs_seq : bbsSeq
        }, function(xml) {
            
            var maxWid = 600;
            var maxHei = 750;
            
            if (xml.fields("width") != "0" && xml.fields("height") != "0")	{

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
                InsertHTML("<img src='/FileUploader/FileView.asp?FilePath="+name+"' width='"+maxWid+"' height='"+maxHei+"'>")
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
        if ( oEditor.mode == 'wysiwyg' ) {
            // Insert the desired HTML.
            oEditor.insertHtml( html );
        }
        else
            alert( 'You must be on WYSIWYG mode!' );
    } else {
        $("#content").val($("#content").val() + html);
    }
    
    
}


function jsSelectClear(argObj) {
    for (var i=argObj.length-1; i>=0; i--) {
        argObj.options[i] = null;
    }
}
function _attachfile_insert() { // 
    
    var attachfile = document.getElementById("_attachfile");
    jsSelectClear(attachfile);

    // 새로운 방식
    var seq = new Array();
    var file_name = new Array();
    var file_size = new Array();

    $.get("/FileUploader/FileSelecter.asp", {
        bbs_seq : $("#seq").val()
    }, function(xml) {
        eval(xml);
        for (var i=0; i<seq.length; i++) {
            attachfile.options[i] = new Option(file_name[i] + " (" + file_size[i] + ")", seq[i]);
        }
    });
}
function _attachfile_delete() {
    var obj = document.getElementById("_attachfile");
    var seq = new Array();
    var j=0;
    for (var i=0; i<obj.length; i++) {
        if (obj.options[i].selected == true) {
            seq[j] = obj.options[i].value;
            j++;
        }
    }

    if (confirm("선택한 파일을 삭제하시겠습니까?"))	{
        // 결과값을 저장한다.
        $.get("/FileUploader/FileUploaderDel.asp", {
            seq : seq.join(","),
            bbs_seq : parseInt($("#seq").val(), 10) // 본문 키
        }, function(xml) {
            if (xml == "Y") {
                for (var i=0; i<obj.length; i++) { // 해당목록을 seledt box에서 삭제한다.
                    for (var j=0; j<seq.length; j++) {
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
        case 'first': obj.insertBefore(opt, obj.options[0]); break; 
        case 'last': obj.appendChild(opt); break; 
        case 'up': if (idx > 0) obj.insertBefore(opt, obj.options[idx-1]); break; 
        case 'down': if (idx < obj.options.length-1) obj.insertBefore(obj.options[idx+1], opt); break; 
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