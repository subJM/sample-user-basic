// 영어,숫자만 가능
function ch(obj){
	var str = obj.src;
	if(str.indexOf('_up.png') < 0){         
	ss = str.substr(0, str.indexOf('.png'))      
	obj.src = ss + "_up.png?10";                         
	}else{                                      
	ss = str.substr(0, str.indexOf('_up.png?1'))
	obj.src = ss + ".png?10";
	}
}

function EnNumCheck(word)
{
	  var str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	  for (i=0; i< word.length; i++)
	  {
		idcheck = word.charAt(i);
		for (j = 0 ;  j < str.length ; j++)
		{
		  if (idcheck == str.charAt(j)) break;
		  if (j+1 == str.length)
		  {
			return false;
		  }
		}
	  }
	  return true;
}

function NumCommaCheck(word)
{
	var str = ",1234567890";
	for (i=0; i< word.length; i++)
	  {
		idcheck = word.charAt(i);
		for (j = 0 ;  j < str.length ; j++)
		{
		  if (idcheck == str.charAt(j)) break;
		  if (j+1 == str.length)
		  {
			return false;
		  }
		}
	  }
	  return true;
}

function NumDash(word)
{
	var str = "-1234567890";
	for (i=0; i< word.length; i++)
	  {
		idcheck = word.charAt(i);
		for (j = 0 ;  j < str.length ; j++)
		{
		  if (idcheck == str.charAt(j)) break;
		  if (j+1 == str.length)
		  {
			return false;
		  }
		}
	  }
	  return true;
}

function NumCheck(word)
{
	var str = "1234567890";
	  for (i=0; i< word.length; i++) {
			idcheck = word.charAt(i);
			for (j = 0 ;  j < str.length ; j++)
			{
		  	if (idcheck == str.charAt(j)) break;
		  	if (j+1 == str.length)
		  	{
					return false;
		  	}
			}
	  }
	  return true;
}


//	전화번호 체크[숫자로만 구성되고 3 ~ 4개의 길이를 가져야 함]
function IsPhoneChek(strNumber)
{
	var regExpr = /^[0-9]{3,4}$/;
	
	if ( regExpr.test( strNumber ) )
		return true;
	else
		return false;
}


function keyCheck(){
  if(event.keyCode < 48 || event.keyCode > 57)// 0~9의 ASCII코드의 값 범위
  {
   alert("숫자만 사용할수 있습니다");
   event.returnValue= false ;//숫자가 아닌경우 입력이 안됨   
  }
}




//숫자만 입력가능 (콤마 가능)
//onKeyup="javascript:FnOnlyNumber(this)"
//style='IME-MODE: disabled'
function FnOnlyNumber(frm) {
	var e1 = event.srcElement;
	var num ="-+0123456789";
	var f = frm;
	event.returnValue = true;

	for (var i=0;i<e1.value.length;i++) {
		if(-1 == num.indexOf(e1.value.charAt(i)) && ","!=e1.value.charAt(i)) {
			event.returnValue = false;
		}
	}
	  
	if (!event.returnValue) {
		alert("숫자만 입력하세요");
		e1.value="";
	}
	e1.focus();
}    

//숫자만 입력가능 (콤마 가능)
//onKeyup="javascript:FnUserNumber(this)" style='IME-MODE: disabled'
//style='IME-MODE: disabled'
function FnUserNumber(frm) {
	var e1 = event.srcElement;
	var num ="-+0123456789/. ";
	var f = frm;
	event.returnValue = true;

	for (var i=0;i<e1.value.length;i++) {
		if(-1 == num.indexOf(e1.value.charAt(i))) {
			event.returnValue = false;
		}
	}
	  
	if (!event.returnValue) {
		alert("숫자만 입력하세요");
		e1.value="";
	}
	e1.focus();
}    

//숫자만 입력가능 (콤마 가능)
//onKeyup="javascript:FnUserNumber(this)" style='IME-MODE: disabled'
//style='IME-MODE: disabled'
function FnUserMoney(frm) {
	var e1 = event.srcElement;
	var num ="0123456789,";
	var f = frm;
	event.returnValue = true;

	for (var i=0;i<e1.value.length;i++) {
		if(-1 == num.indexOf(e1.value.charAt(i))) {
			event.returnValue = false;
		}
	}
	  
	if (!event.returnValue) {
		alert("숫자만 입력하세요");
		e1.value="";
	}
	e1.focus();
}  

//////////////////////////////////////////////////////
//onKeyup="javascript:FnAddComma(this)"
 function FnAddComma(frm) {

  str = FnDelComma(frm.value);

  len = str.length;
  str1 = "";

  for(i=1; i<=len; i++) {
   str1 = str.charAt(len-i)+str1;
   if((i%3 == 0)&&(len-i != 0)) str1 = ","+str1;
  }
  frm.value=str1;
 }

//금액입력시 콤마와 숫자만
//onKeyup="javascript:FnAddCommaMoney(this)"
function FnAddCommaMoney(frm) {
	FnUserMoney(frm);

  str = FnDelComma(frm.value);
  len = str.length;
  str1 = "";

  for(i=1; i<=len; i++) {
   str1 = str.charAt(len-i)+str1;
   if((i%3 == 0)&&(len-i != 0)) str1 = ","+str1;
  }
  frm.value=str1;
 }

////////////////////////////
 function FnComma(str) {

	str=FnDelComma(str)
  len = str.length;
  str1 = "";

  for(i=1; i<=len; i++) {
   str1 = str.charAt(len-i)+str1;
   if((i%3 == 0)&&(len-i != 0)) str1 = ","+str1;
  }

  return str1;

 }


// 입력값 콤마 제거하기
  function FnDelComma(str) {   
    var f = str;
    return f.replace(/,/g,"");;
  }
///////////////////////////////////////////////////////


/************************거꾸로 가는 시간***********************/
var sec=0
var min=0

function StartTimeInit()
{
	sec=59
	min= parseInt($("#TimeDisplay").attr("seedTime"), 10) - 1;
	TimeStart();
}
function TimeStart()
{
	document.getElementById("TimeDisplay").innerText=min+"분 "+sec+"초"
	go=setTimeout("TimeStart()",1000)
	sec--;
	if(String(sec).length==1){sec="0"+String(sec);}
	if(sec==0)
	{
		sec=59;
		min--;
	}
	//alert(min);
	if (min<=-1) {
		location.href="/logout.asp";
		return;
	}
}
/************************거꾸로 가는 시간 끝***********************/



function FnClock() {
	var now=new Date()
	var intYear = now.getYear();  
	var intDate = now.getDate();
	var intMon = now.getMonth()+1;
  
	var hrs= now.getHours()
	var mins=now.getMinutes()
	var secs=now.getSeconds()
	if (intMon < 10) {
  		month = "0"+intMon;
	} else {
  		month = intMon;
	}
	if (intDate < 10) {
  		date = "0"+intDate;
	} else {
  		date = intDate;
	}  
  
	var disp=((hrs>12) ? (hrs-12) : hrs) + ":"
	disp+=((mins<10) ? "0" + mins : mins) + ":" + ((secs<10) ? "0" + secs : secs)
	disp+=((hrs>12) ? " 오후" : " 오전")
	disp = intYear + "/" + month +"/"+ date +" "+disp;
	//status=disp + "    Welcome to MyHome !!! Everyday enjoy bet !!!";

// to make it in the form feild..just use the same
//scripting as above..but just add this next line in
//place off "status=disp"

document.all.clock.innerText=disp

setTimeout("FnClock()", 1000);
}
//STOP HIDING-->




function goMenu(menu)
{
	var url = "/";

	switch(menu){
		case 1:
			url	=	"/member/";
			break;
		case 10:
			url	=	"/game/BetGame.asp?game_type=smp";
			break;
		case 11:
			url	=	"/game/BetGame.asp?game_type=handicap";
			break;
		case 12:
			url	=	"/game/BetGame.asp?game_type=special";
			break;
		case 20:
			url	=	"/event/Board_List.asp";
			break;
		case 30:
			url	=	"/game/BetResult.asp";
			break;
		case 31:
			url	=	"/result/?kind=H";
			break;
		case 32:
			url	=	"/result/?kind=S";
			break;
		case 40:
			url	=	"/freeboard/Board_List.asp";
			break;
		case 50:
			url	=	"/support/Answer_List.asp";
			break;
		case 51:
			url	=	"/customer/?kind=Q";
			break;
		case 52:
			url	=	"/customer/?kind=M";
			break;
		case 60:
			url	=	"/guide/role.asp";
			break;
		case 61:
			url	=	"/rule/?kind=B";
			break;
		case 62:
			url	=	"/rule/?kind=H";
			break;
		case 63:
			url	=	"/rule/?kind=S";
			break;
		case 70:
			url	=	"/money/charge.asp";
			break;
		case 71:
			url	=	"/charge/?mode=history";
			break;
		case 80:
			url	=	"/money/exchange.asp";
			break;
		case 81:
			url	=	"/exchange/?mode=history";
			break;
		case 90:
			url	=	"/member/mybet.asp";
			break;
		case 100:
			url	=	"/message/";
			break;
		default:
			url	=	"/main/";
	}
	document.location.href=url;
}

function menu00()	
    { goMenu(0); }
function menu01()	
    { goMenu(10); }
	
function menu02()	
    { goMenu(11); }
	
function menu03()	
    { goMenu(12); }
	
function menu04()	
    { goMenu(20); }
	
function menu05()	
    { goMenu(30); }
	
function menu06()	
    { goMenu(40); }
	
function menu07()	
    { goMenu(50); }
	
function menu08()	
    { goMenu(60); }
	

function menu09()	
    { goMenu(70); }

function menu10()	
    { goMenu(80); }

function menu11()	
    { goMenu(90); }
function menu12()	
    { goMenu(100); }


function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}