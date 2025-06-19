<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<div class="sub_content_arr">
    <div>
        <form name="frm" id="frm" action="/event.asp" method="post">
            <input type="hidden" name="page" value="1">
            <input type="hidden" name="code_group" value="65">
            <input type="hidden" name="code_no" value="65">
            <input type="hidden" name="code" value="4">
            <h2>프로모션 <small>promotion</small></h2>
            <!-- 서브타이틀 -->
            <ul class="tabs">
                <li class="li_tot active" rel="tab1">전체 (3)</li>
                <li rel="tab2" class=""></li>
                <li rel="tab3" class=""></li>
                <li rel="tab4"></li>
                <li rel="tab5"></li>
                <li rel="tab6"></li>
                <li rel="tab7"></li>
                <li rel="tab8"></li>
                <li rel="tab9"></li>
                <li rel="tab10"></li>
                <li rel="tab11"></li>
            </ul>
            <div class="tab_container">
                <div id="tab1" class="tab_content" style="display: block;">
                    <ul class="event_listv">
                        <li category="전체"><a href="javascript:void(0)">
                                <div class="upZone"><img src="//i.imgur.com/JDVBpdb.png"></div>
                                <div class="bottomZone">
                                    <h3 class="txtFrame"><b>정킷 프로모션</b> </h3> <strong class="goPromotion" seq="7">상세보기</strong>
                                </div>
                            </a> </li>
                        <li category="전체"><a href="javascript:void(0)">
                                <div class="upZone"><img src="//i.imgur.com/B86GeIL.png"></div>
                                <div class="bottomZone">
                                    <h3 class="txtFrame"><b>럭키휠 프로모션</b> </h3> <strong class="goPromotion" seq="6">상세보기</strong>
                                </div>
                            </a> </li>
                        <li category="전체"><a href="javascript:void(0)">
                                <div class="upZone"><img src="//i.imgur.com/22jpzPT.png"></div>
                                <div class="bottomZone">
                                    <h3 class="txtFrame"><b>이사 프로모션</b> </h3> <strong class="goPromotion" seq="4">상세보기</strong>
                                </div>
                            </a> </li>
                    </ul>
                </div>
                <div id="tab2" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
                <div id="tab3" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
                <div id="tab4" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
                <div id="tab5" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
                <div id="tab6" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
                <div id="tab7" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
                <div id="tab8" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
                <div id="tab9" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
                <div id="tab10" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
                <div id="tab11" class="tab_content" style="display: none;">
                    <ul class="event_lists"></ul>
                </div>
            </div>
            <div class="modal01">
                <div class="modal01-cont"> <i class="fa fa-times-circle-o modal01-close" aria-hidden="true"></i>
                    <div class="title"></div>
                    <div class="leftPic"></div>
                    <div class="rightTxt"></div>
                </div>
            </div>

            <!-- 페이징 시작 -->
            <div class="list_bottom_btn_left"></div>
            <div class="list_bottom_btn_right"> </div>
            <div class="clear"> </div>
            <div class="paging_list">
                <div class="tf_pagination">
                    <ul>
                        <li><a id="pre-btn" href="javascript:void(0);"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                        <li><a class="active">1</a></li>
                        <li><a id="next-btn" href="javascript:void(0);"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

        </form>
        <div class="clear"> </div>
    </div>
    <div class="clear"></div>
</div>

<style>
ul.tabs {
    width: 100%;
    color: #fff;
    margin: 0;
    padding: 0;
    height: 45px;
    box-sizing: border-box;
}
ul.tabs li {
    position: relative;
    float: left;
    text-align: center;
    cursor: pointer;
    width: 9.09%;
    padding: 0;
	 height: 45px;
    line-height: 45px;
    border: 1px solid #444;
    border-left: 0;
    font-size: 14px;
    font-weight: bold;
    box-sizing: border-box;
}
ul.tabs li:first-child {
    border-left: 1px solid #444;
}
ul.tabs li.active {
    background-color: #333;
    color: #5bd6bd;
}
.tab_container {
    margin-top: 10px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px solid #444;
    width: 100%;
}
.tab_content {
    padding: 20px;
}
.event_listv {
    display: flex;
    flex-wrap: wrap;
    justify-content: left;
}
.event_listv li {
    width: 32.33%;
    margin: 0.5%;
    box-sizing: border-box;
    transition: .4s ease-out;
    position: relative;
   
}


.event_lists {
    display: flex;
    flex-wrap: wrap;
    justify-content: left;
}
.event_lists li {
    width: 32.33%;
    margin: 0.5%;
    box-sizing: border-box;
    transition: .4s ease-out;
    position: relative;
    
}

.upZone {
  
  
    cursor: pointer;
  
 
}
.upZone img {
    width: 100%;
    height: auto;
    display: block;
    transition: .4s ease-out;
}
.upZone:hover img {
    transform: scale(1.05);
    margin: 0 auto;
    display: block;
}
.bottomZone {
    padding: 5px 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.bottomZone h3 {
    color: #fff;
    font-size: 1vw;
    font-weight: 700;
    display: inline-block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;

}
.goPromotion {
    color: #fff;
    padding: 10px;
    text-decoration: none;
    background-color: #333;
    border-radius: 20px;
    font-size: .6vw;
    cursor: pointer;
    transition: .3s ease-out;

}
.modal01 {
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    top: 0;
    left: 0;
    display: none;
    z-index: 99999;
}
.modal01-cont {
    box-sizing: border-box;
    box-shadow: #000 0.1em 0.1em 0.3em;
    line-height: 23px;
    cursor: pointer;
    background: #fff;
    z-index: 999999;
    position: fixed;
    left: 10%;
    right: 10%;
    bottom: 10%;
    top: 10%;
    background: #111;
    border-radius: 10px;
    padding: 20px;
}
.modal01-close {
    font-size: 30px;
    position: absolute;
    right: 20px;
    top: 20px;
	color: #ff0000
}
.modal01-cont .title {
    font-size: 30px;
    color: #fff;
    margin-bottom: 15px;
    display: block;
    font-weight: bold;
    height: 40px;
}
.leftPic {
    float: left;
    width: 35%;
	display: none;
}
.leftPic img {
    width: 100%;
}
.rightTxt {
    float: right;
    width: 100%;
    text-align: center;
    height: 90%;
    overflow-y: scroll;
}
.rightTxt img {
    width: 90%;
}
.rightTxt::-webkit-scrollbar {
width: 6px;
}
.rightTxt::-webkit-scrollbar-thumb {
background-color: #5bd6bd;
border-radius: 10px;
background-clip: padding-box;
border: 2px solid transparent;
}
.rightTxt::-webkit-scrollbar-track {
background-color: #000;
border-radius: 10px;
}
	ul.tabs li:nth-child(9) { display: none;}
	ul.tabs li:nth-child(10) { display: none;}
	ul.tabs li:nth-child(11) { display: none;}

</style>
<?= $this->endSection() ?>