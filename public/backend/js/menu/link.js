function menu_link(menuName)
{
    if(top.MainFrm == null)
    {
        location.href = "leo/main.asp" ;
    }
    
    if(menuName=="home")
    {
         location.href = "leo/main.asp" ;
    }
    else if(menuName=="m1") //proto
    {
        location.href="/game/BetGame.asp?game_type=smp"; 
    }
    else if(menuName=="m2") //hand 
    {
        location.href="/game/BetGame.asp?game_type=handicap"; 
    }
    else if(menuName=="m3")//sp
    {
        location.href="/game/BetGame.asp?game_type=special"; 
    }
    else if(menuName=="m4")//game result
    {
        location.href="/game/BetResult.asp";  
    }
    else if(menuName=="m5")//guide
    {
        location.href="/guide/Game.asp"; 
    }
    else if(menuName=="m6")//freeboard
    {
        location.href="/freeboard/Board_List.asp"; 
    }
    else if(menuName=="m7")//event
    {
        location.href="/event/Board_List.asp"; 
    }
    else if(menuName=="m8")//support
    {
        location.href="/support/Answer_List.asp"; 
    }
    else if(menuName=="m9")//board
    {
        location.href="/flashgame/list.asp";
    }       
    else if(menuName=="m10")//flashgame
    {
        location.href="/flashgame/list.asp";
    }     
    else if(menuName=="top1")//머니충전
    { 
        location.href="/money/charge.asp"; 
    }
    else if(menuName=="top2")//머니환전
    { 
        location.href="/money/exchange.asp"; 
    }
    else if(menuName=="top3")//나의베팅
    { 
        location.href="/member/mybet.asp"; 
    }
    else if(menuName=="top4_1")//로그아웃
    { 
        top.location.href="/login/Logout_Proc.asp"; 
    }
    else if(menuName=="top4_2")//로그인
    { 
        location.href="/"; 
    }                
    else if(menuName=="top5")//정보수정
    { 
        location.href="member-info.asp"; 
    }          
    else
    {
        alert("페이지 준비중 입니다.");
    }
}    

function openLive()
{
    location.href = "/live/livescore.asp";
}