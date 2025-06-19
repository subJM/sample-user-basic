<?= $this->extend('backend/layout/pages-layout'); ?>
<?= $this->section('content') ?>
<form name="frm" id="frm" action="/result.asp" method="post">
    <input type="hidden" name="mode" id="mode">
    <input type="hidden" name="divd" id="divd" value="">
    <input type="hidden" name="eprice" id="eprice" value="">
    <input type="hidden" name="bt_type" id="bt_type" value="0">

    <!-- 컨텐츠 영역 시작 -->
    <div class="sub_content_arr">
        <div>
            <div class="subTitle_arr">
                <h2>경기결과 <small>result</small></h2>
            </div>

            <ul class="result_menu">
                <li><a href="?bt_type=892">스페이스 8</a></li>
                <li><a href="?bt_type=873">스피드 6</a></li>
                <li><a href="?bt_type=875">스피드 4</a></li>
                <li><a href="?bt_type=874">메이즈 2</a></li>
                <li><a href="?bt_type=13">가상축구</a></li>
                <li><a href="?bt_type=14">개경주</a></li>
                <li><a href="?bt_type=116">경마</a></li>
            </ul>
            <!--게시판목록-->
            <table width="100%" align="center" cellpadding="0" cellspacing="0" class="topth" style="table-layout:fixed;">
                <colgroup>
                    <col width="9%">
                    <col width="4%">
                    <col width="18%">
                    <col width="25%">
                    <col width="6%">
                    <col width="25%">
                    <col width="8%">
                    <col width="5%">
                </colgroup>
                <tbody>
                    <tr>
                        <th>경기일시</th>
                        <th></th>
                        <th>리그</th>
                        <th>승(홈팀)</th>
                        <th>무</th>
                        <th>패(원정팀)</th>
                        <th>스코어</th>
                        <th>결과</th>
                    </tr>

                    <!--게시판분류-->

                </tbody>
            </table>
            <table width="100%" align="center" cellpadding="0" cellspacing="3" class="result-table">
                <colgroup>
                    <col width="9%">
                    <col width="4%">
                    <col width="18%">
                    <col width="25%">
                    <col width="6%">
                    <col width="25%">
                    <col width="8%">
                    <col width="5%">
                </colgroup>
                <tbody id="sub-content">
                    <tr height="30">
                        <td align="center">06/19 10:08</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 163회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>우1언오 오버</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>우1언오 언더</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 1 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:08</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 163회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>좌1언오 오버</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>좌1언오 언더</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:08</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 163회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>우1위 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>우1위 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:08</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 163회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>좌1위 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>좌1위 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:08</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 163회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>우합 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>우합 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:08</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 163회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>좌합 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>좌합 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:08</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 163회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>합산 좌</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>1.95</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>합산 우</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 1 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:08</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 163회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>갯수 좌</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>1.95</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>갯수 우</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 1 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 162회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>우1언오 오버</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>우1언오 언더</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 162회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>좌1언오 오버</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>좌1언오 언더</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 162회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>우1위 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>우1위 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 162회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>좌1위 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>좌1위 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 1 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 162회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>우합 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>우합 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 1 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 162회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>좌합 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>좌합 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 1 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 162회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>합산 좌</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>1.95</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>합산 우</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 162회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>갯수 좌</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>1.95</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>갯수 우</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드식스5 1등 맞추기 98회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>5</font>
                                        </td>
                                        <td width="50" align="right"> 5.70</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="Selected2"><span>1</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">5.70 </td>
                                        <td align="right">
                                            <font>6</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 0 </td>
                        <td align="center">무</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드식스5 1등 맞추기 98회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>3</font>
                                        </td>
                                        <td width="50" align="right"> 5.70</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>1</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">5.70 </td>
                                        <td align="right">
                                            <font>4</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드식스5 1등 맞추기 98회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>1</font>
                                        </td>
                                        <td width="50" align="right"> 5.70</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="Selected2"><span>1</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">5.70 </td>
                                        <td align="right">
                                            <font>2</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 0 </td>
                        <td align="center">무</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드식스5 1~3등 98회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td> 숫자합 오버</td>
                                        <td width="50" align="right"><img src="/backend/images/over.gif"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>10.5</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 <img src="/backend/images/under.gif"></td>
                                        <td align="right">숫자합 언더 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">8 : 0 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드식스5 1~3등 98회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>숫자합 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>숫자합 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 1 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드식스5 1등 98회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td> 1등 오버</td>
                                        <td width="50" align="right"><img src="/backend/images/over.gif"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>3.5</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 <img src="/backend/images/under.gif"></td>
                                        <td align="right">1등 언더 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">3 : 0 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:05</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드식스5 1등 98회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>1등 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>1등 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:03</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드포5 1~3등 97회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td> 숫자합 오버</td>
                                        <td width="50" align="right"><img src="/backend/images/over.gif"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>7.5</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 <img src="/backend/images/under.gif"></td>
                                        <td align="right">숫자합 언더 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">8 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:03</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드포5 1~3등 97회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>숫자합 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>숫자합 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 1 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:03</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드포5 1등 97회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td> 1등 오버</td>
                                        <td width="50" align="right"><img src="/backend/images/over.gif"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>2.5</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 <img src="/backend/images/under.gif"></td>
                                        <td align="right">1등 언더 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:03</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드포5 1등 97회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>1등 홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>1등 짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:03</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 메이즈투5 97회차</td>
                        <td align="left" style="padding-left:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>97회차 <font color="#0072ff">홀</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">97회차 <font color="#ff0000">짝</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">0 : 1 </td>
                        <td align="center">패</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:02</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 161회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>우1언오 오버</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>우1언오 언더</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                    <tr height="30">
                        <td align="center">06/19 10:02</td>
                        <td align="center"></td>
                        <td align="left" class="leagueT"> 스피드에잇3 161회차</td>
                        <td align="left" style="padding-left:5px;" class="Selected2">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <font>좌1언오 오버</font>
                                        </td>
                                        <td width="50" align="right"> 1.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" class="noSelected"><span>VS</span></td>
                        <td align="left" style="padding-right:5px;" class="noSelected">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td width="50" align="left">1.95 </td>
                                        <td align="right">
                                            <font>좌1언오 언더</font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center">1 : 0 </td>
                        <td align="center">승</td>
                    </tr>
                </tbody>
            </table>
            <table width="100%" align="center" cellpadding="2" cellspacing="5">
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="tf_pagination">
                                <ul>
                                    <li><a id="pre-btn" href="javascript:void(0);"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                                    <li><a class="active">1</a></li>
                                    <li><a href="?page=2&amp;code=&amp;keyfield=&amp;keyword=&amp;bt_type=0&amp;bt_item=0">2</a></li>
                                    <li><a href="?page=3&amp;code=&amp;keyfield=&amp;keyword=&amp;bt_type=0&amp;bt_item=0">3</a></li>
                                    <li><a href="?page=4&amp;code=&amp;keyfield=&amp;keyword=&amp;bt_type=0&amp;bt_item=0">4</a></li>
                                    <li><a href="?page=5&amp;code=&amp;keyfield=&amp;keyword=&amp;bt_type=0&amp;bt_item=0">5</a></li>
                                    <li><a id="next-btn" href="?page=6&amp;code=&amp;keyfield=&amp;keyword=&amp;bt_type=0&amp;bt_item=0"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
        </div>
        <div class="clear"></div>
    </div>

    <!-- 실제 레이아웃 -->
</form>
<?= $this->endSection() ?>