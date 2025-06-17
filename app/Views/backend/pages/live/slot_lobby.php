<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="/backend/css/casino_lobby.css">
<div class="sub_content_arr">
    <img src="/backend/images/logo.png?1113">

    <div class="ly001" style="">
        <div></div>
        <input type="hidden" id="bt_type" value="">


        <div class="ly002" style="display:none;">
            <div class="point_change" style="display:none;">
                <span id="ly003-close" style="cursor: pointer;"><i class="fa fa-times close-point-change"></i></span>
                <div class="my-wallet">
                    <div class="game-money">
                        <p>사이트 포인트(머니)</p>
                        <div><span class="sports_point">0</span></div>
                    </div>
                    <div class="sports-money">
                        <p>카지노 포인트</p>
                        <div><span class="casino_point">0</span></div>
                    </div>
                    <span class="arw-center"></span>
                </div>

                <div class="wallet-move">
                    <select id="w_from" name="w_from">
                        <option value="04">카지노 포인트</option>
                        <option value="01" selected="">사이트 포인트(머니)</option>
                    </select>
                    <span>&nbsp;에서</span>
                    <input type="text" id="amount" name="amount" placeholder="전환하실 포인트를 입력해 주세요." class="money">
                    <select id="w_to" name="w_to">
                        <option value="01">사이트 포인트(머니)</option>
                        <option value="04" selected="">카지노 포인트</option>
                    </select>
                    <span id="btnMoneyAct" class="ui-button_red" style="cursor: pointer;">전환하기</span>
                </div>
            </div>
        </div>
    </div>

    <div class="submain-img">

    </div>
    <div class="companys">
        <h6><em class="ic"></em> 슬롯게임 <small>slotgame</small></h6>
        <ul class="submenu">
            <li>
                <div class="companys-title2 code7 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=7&amp;bt_type=752"><img src="/backend/images/casino/slot_7.png?2"><span>프라그마틱슬롯</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code52 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=52&amp;bt_type=775"><img src="/backend/images/casino/slot_52.png?2"><span>프라그마틱슬롯2</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code9 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=9&amp;bt_type=753"><img src="/backend/images/casino/slot_9.png?2"><span>부운고</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code37 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=37&amp;bt_type=760"><img src="/backend/images/casino/slot_37.png?2"><span>PG소프트</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code17 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=17&amp;bt_type=754"><img src="/backend/images/casino/slot_17.png?2"><span>와즈단</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code25 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=25&amp;bt_type=756"><img src="/backend/images/casino/slot_25.png?2"><span>하바네로</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code34 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=34&amp;bt_type=758"><img src="/backend/images/casino/slot_34.png?2"><span>트리플프로필</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code35 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=35&amp;bt_type=759"><img src="/backend/images/casino/slot_35.png?2"><span>게임아트</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code40 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=40&amp;bt_type=761"><img src="/backend/images/casino/slot_40.png?2"><span>블루프린트</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code41 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=41&amp;bt_type=762"><img src="/backend/images/casino/slot_41.png?2"><span>썬더킥</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code42 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=42&amp;bt_type=763"><img src="/backend/images/casino/slot_42.png?2"><span>노리밋시티</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code43 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=43&amp;bt_type=764"><img src="/backend/images/casino/slot_43.png?2"><span>모빌롯츠</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code44 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=44&amp;bt_type=765"><img src="/backend/images/casino/slot_44.png?2"><span>플레이펄스</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code45 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=45&amp;bt_type=766"><img src="/backend/images/casino/slot_45.png?2"><span>드라군소프트</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code4 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=4&amp;bt_type=751"><img src="/backend/images/casino/slot_4.png?2"><span>시큐9</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code3 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=3&amp;bt_type=750"><img src="/backend/images/casino/slot_3.png?2"><span>에보플레이</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code24 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=24&amp;bt_type=755"><img src="/backend/images/casino/slot_24.png?2"><span>플레이스타</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code50 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=50&amp;bt_type=767"><img src="/backend/images/casino/slot_50.png?2"><span>Elk</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code49 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=49&amp;bt_type=768"><img src="/backend/images/casino/slot_49.png?2"><span>1x2게이밍</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code26 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=26&amp;bt_type=769"><img src="/backend/images/casino/slot_26.png?2"><span>플레이엔고</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code23 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=23&amp;bt_type=770"><img src="/backend/images/casino/slot_23.png?2"><span>플레이슨</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code55 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=55&amp;bt_type=771"><img src="/backend/images/casino/slot_55.png?2"><span>마이크로게이밍슬롯</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code22 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=22&amp;bt_type=772"><img src="/backend/images/casino/slot_22.png?2"><span>레드타이거</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code20 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=20&amp;bt_type=773"><img src="/backend/images/casino/slot_20.png?2"><span>넷엔트</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code56 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=56&amp;bt_type=774"><img src="/backend/images/casino/slot_56.png?2"><span>빅타임게이밍</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code6 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=6&amp;bt_type=776"><img src="/backend/images/casino/slot_6.png?2"><span>YGG</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code58 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=58&amp;bt_type=777"><img src="/backend/images/casino/slot_58.png?2"><span>아바타UX</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code59 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=59&amp;bt_type=778"><img src="/backend/images/casino/slot_59.png?2"><span>핵쏘</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code61 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=61&amp;bt_type=779"><img src="/backend/images/casino/slot_61.png?2"><span>플레이테크슬롯</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code64 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=64&amp;bt_type=780"><img src="/backend/images/casino/slot_64.png?2"><span>스카이윈드슬롯</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code65 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=65&amp;bt_type=781"><img src="/backend/images/casino/slot_65.png?2"><span>온리플레이</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code68 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=68&amp;bt_type=782"><img src="/backend/images/casino/slot_68.png?2"><span>FC Gaming</span></a></div>
            </li>
            <li>
                <div class="companys-title2 code69 hvr-wobble-vertical  hvr-outline-in"><a href="swix.asp?mode=slot_view&amp;thirdpartycode=69&amp;bt_type=783"><img src="/backend/images/casino/slot_69.png?2"><span>JDB Gaming</span></a></div>
            </li>
        </ul>
    </div>
</div>
<?= $this->endSection() ?>