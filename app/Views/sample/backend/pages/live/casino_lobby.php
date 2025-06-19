<?= $this->extend(env('DOMAIN_NAME').'backend/layout/pages-layout');  ?>
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
        <h6><em class="ic"></em> 라이브카지노<small>live casino</small></h6>
        <ul class="submenu">
            <li>
                <div class="companys-title code1 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="1" data-gamecode="evolution_top_games"><img src="/backend/images/casino/casino_1.png?2"><span>에볼루션 <!-- EVOLUTION --></span></div>
            </li>
            <li>
                <div class="companys-title code29 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="29" data-gamecode="0"><img src="/backend/images/casino/casino_29.png?2"><span>플레이에이스 <!-- Playace --></span></div>
            </li>
            <li>
                <div class="companys-title code8 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="8" data-gamecode="casino"><img src="/backend/images/casino/casino_8.png?2"><span>드림게임 <!-- DreamGame --></span></div>
            </li>
            <li>
                <div class="companys-title code46 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="46" data-gamecode="BTV-baccarat"><img src="/backend/images/casino/casino_46.png?2"><span>벳게임즈 <!-- Betgames --></span></div>
            </li>
            <li>
                <div class="companys-title code47 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="47" data-gamecode="SWL-baccarat"><img src="/backend/images/casino/casino_47.png?2"><span>스카이윈드 <!-- Skywind --></span></div>
            </li>
            <li>
                <div class="companys-title code54 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="54" data-gamecode="SMG_titaniumLiveGames_MP_Baccarat"><img src="/backend/images/casino/casino_54.png?2"><span>마이크로게이밍 <!-- Micro Gaming --></span></div>
            </li>
            <li>
                <div class="companys-title code28 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="28" data-gamecode="speed"><img src="/backend/images/casino/casino_28.png?2"><span>보타(TG/PD) <!-- tg/pd --></span></div>
            </li>
            <li>
                <div class="companys-title code53 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="53" data-gamecode="dowin"><img src="/backend/images/casino/casino_53.png?2"><span>두윈카지노 <!-- dowin --></span></div>
            </li>
            <li>
                <div class="companys-title code60 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="60" data-gamecode="bal"><img src="/backend/images/casino/casino_60.png?2"><span>플레이테크카지노 <!-- Playtech Casino --></span></div>
            </li>
            <li>
                <div class="companys-title code13 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="13" data-gamecode="VGL-lobby"><img src="/backend/images/casino/casino_13.png?2"><span>비보게이밍 <!-- Vivo Gaming --></span></div>
            </li>
            <li>
                <div class="companys-title code63 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="63" data-gamecode="GINKGO01"><img src="/backend/images/casino/casino_63.png?2"><span>모티베이션 <!-- Motivation Games --></span></div>
            </li>
            <li>
                <div class="companys-title code67 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="67" data-gamecode="MGL_GRAND_LobbyAll"><img src="/backend/images/casino/casino_67.png?2"><span>MG Live Grand <!-- MG Live Grand --></span></div>
            </li>
            <li>
                <div class="companys-title code66 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="66" data-gamecode="lobby"><img src="/backend/images/casino/casino_66.png?2"><span>아스타 <!-- ASTAR --></span></div>
            </li>
            <li>
                <div class="companys-title code70 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="70" data-gamecode="dbcasinolobby"><img src="/backend/images/casino/casino_70.png?2"><span>DB카지노 <!-- DB Casino --></span></div>
            </li>
            <li>
                <div class="companys-title code73 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="73" data-gamecode="casino"><img src="/backend/images/casino/casino_73.png?2"><span>BG라이브카지노 <!-- BG Live Casino --></span></div>
            </li>
            <li>
                <div class="companys-title code72 hvr-wobble-vertical  hvr-outline-in " data-thirdpartycode="72" data-gamecode="LOBBY"><img src="/backend/images/casino/casino_72.png?2"><span>HRG <!-- HRG --></span></div>
            </li>
        </ul>
    </div>
</div>
<?= $this->endSection() ?>