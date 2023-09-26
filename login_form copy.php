<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>html5문서</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/numbering02.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="https://kit.fontawesome.com/53a8c415f1.js" crossorigin="anonymous"></script>
    <script src="js/numbering02.js"></script>
    <script src="js/num_slick.js"></script>
		<style>
body,html {
    width:100%;
    /* height:100%; */
}
body {
    background: #333;
}
/* #login {
    width:100%;
    border:1px solid gray;
    height:600px; 
    padding:10px 5px;
    position:absolute;
    left:50%;top:50%;
    margin-left:-130px;
    margin-top:-60px;
    border-color:rgba(255,255,255,0.6);
    background:transparent;
}
p.center a {
    background:rgba(255,255,255,0.9);
    color: #000;  
    display:inline-block;
    font-weight: bold;
    width: 7em;
    padding: 6px 10px 6px 10px;
    margin-top: 10px;
    text-transform: uppercase;
    position:relative; top:6px;
}
p.center a:hover{
    background-color: #000;  
    color:#fff;
    cursor: pointer;
}
  
  p.center a.mm {margin-top:3px;}
  
  input[type=submit] {
    background:rgba(255,255,255,0.9);
    color: #000;
    font-weight: bold;
    width: 8.5em;
    padding: 6px 2px 6px 2px;
    margin-top: 10px;
    text-transform: uppercase;
}
input[type=submit]:hover {
    background-color: #000;  
    color:#fff;
    cursor: pointer;
} */
.header_text{
    width: 100%;
    display: flex;
    justify-content: center;
}
.num_text{
    display: flex;
    justify-content: center;
    animation: num_text 4s infinite linear;
    position: fixed;
    background: #fff;
    height: 130px;
    /* margin-top: 43px; */
}
.num_text li{
    display: flex;
    justify-content: space-between;
    padding: 3px 90px;
    font-size: 85px;
    font-weight: bold;
}
@keyframes num_text {
    0% { margin-right: 1500px;}
    100% {margin-right: -0px;}
    0% {margin-right: 1500px;}
}

.tablet {display: none;}
#new1 {display: none;}
.pcmenu {display: none;}
#new2 {display: none;}

/* pc 메뉴바 */
.pcmenu{
    position: relative;
    width: 100%;
    height: 55px;
    margin-top: 130px;
    position: fixed;
    left: 0;
    top: 0;
    background: #000000;
    z-index: 9999999;
    margin-bottom: 80px;
}
.line{
    position: absolute;
    width: 100%;
    height: 30px;
    border-bottom: 1px solid #afafaf;
    top: 30px;
    /* display:none; */
}
.menubox{
    width: 100%;
    position: relative;
    /* height: 100%; */
}
.nav2 {
    float:left;
}

.nav2 > li {
    float:left;
}
.nav2 >li >a {
    font-size:13px;
    font-weight: normal;
    height:56px;
    display:block;
    padding:0px 15px 0;
    line-height: 52px;
    color: #fff;
}
.nav2 >li >a:hover{
    color: rgb(114, 78, 36);
}
.sub2 {
    width:100%;
    height:550px;
    background: #ffffff;
    position: absolute;
    left:0;
    display:none;
    color:#000000;
    /*text-align:center;*/ 
    font-size:13px;
    top: 55px;
} 
.sub3 {
    width:100%;
    margin-top: -25px;
    display: flex;
    justify-content: space-between;
}
.sub3> ul> li {
    padding: 8px;
}
.sub3> ul> li> a:hover{
    color: rgb(114, 78, 36);
}

.k-tmenu{
    width: 20%;
    display: flex;
}
.k-tmenu img{
    width: 100%;
}
.k-navi {
    width:100%;
    justify-content: space-between;
}
.k-navi > li {
    float:right;
    /* width:45px; */
    position:relative;
    margin: 5px 10px 5px 10px;
}
.k-navi > li > a {
    display:block;
    text-align:center;
}
.s_img{
    padding-top: 2px;
}
.k-navi > li .k-sub2 {
    position:absolute;
    left:0;
    top:30px;
    display:none;
    z-index:9999;
}
.k-navi .k-sub2 li a {
    display:block;
    height:20px;
    padding:0px 21px 0px 0px;
    width: 45px;
    margin-top: 8px;
}
.k-sub2 img{
    width: 100%;
}   
#top_login {
    float:right;
}
#top_login a{
    color: #fff;
    /* border:  1px solid red; */
}
/* #top_login img{
    width: 30%;
} */
/* footer 부분 */
footer{
    width: 100%;
    height: 300px;
    line-height: 20px;
    background: #000000;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
footer h1{
    margin-bottom: 25px;
    color: #fff;
}
footer h1 a{
    color: #fff;
}
.footer_text p{
    display: inline-block;
    margin-bottom: 18px;
    padding: 0 10px 0 10px;
    color: #fff;
}
.footer_text a{
    font-size: 0.8rem;
    color: #fff;
}
footer p{
    font-size: 0.6rem;
    padding: 2px;
    color: #fff;
}


		</style>
		</head>
	<body>

<!-- 상단 슬라이드 텍스트 부분-->
<header>
    <nav class="header_text">
        <ul class="num_text">
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
            <a href="#"><li>NUMBERING</li></a>
        </ul>
    </nav>
</header>

<!-- pc 메뉴바 --> 
<header class="pcmenu">
    <nav class="menubox cf">
        <ul class="nav1">
            <li class="a1 a22"><a href="#"><img src="img/logo.png" alt="logo"></a></li>

            <li class="a1"><a href="#">SHOP</a>
                <div class="sub">
                    <div class="sub1 cf">
                        <ul class="list1">
                            <li class="m_img1"><a href="#"><img src="img/sb_img1.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list2">
                            <li class="margin1"><a href="#">Shop All</a></li>
                        </ul>
                        <ul class="list3">
                            <li class="margin1"><a href="#">Women</a></li>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Earring</a></li>
                            <li><a href="#">Ring</a></li>
                            <li><a href="#">Bracelet</a></li>
                            <li><a href="#">Anklet</a></li>
                            <li><a href="#">Belt</a></li>
                            <li><a href="#">Ready To Wear</a></li>
                            <li><a href="#">Etc</a></li>
                        </ul>
                        <ul class="list4">
                            <li class="margin1"><a href="#">men</a></li>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Earring</a></li>
                            <li><a href="#">Ring</a></li>
                            <li><a href="#">Bracelet</a></li>
                            <li><a href="#">Anklet</a></li>
                            <li><a href="#">Belt</a></li>
                        </ul>
                        <ul class="list5">
                            <li class="m_img2"><a href="#"><img src="img/sb_img2.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list5">
                            <li class="m_img2"><a href="#"><img src="img/sb_img2.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list6">
                            <li><a href="#">Review</a></li>
                            <li><a href="#">Sizing</a></li>
                            <li><a href="#">Agreement</a></li>
                            <li><a href="#">Notice</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="a1"><a href="#">TOP 20</a>
                <div class="sub">
                    <div class="sub1 cf">
                        <ul class="list1">
                            <li class="m_img1"><a href="#"><img src="img/sb_img1.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list2">
                            <li class="margin1"><a href="#">Shop All</a></li>
                        </ul>
                        <ul class="list3">
                            <li class="margin1"><a href="#">Women</a></li>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Earring</a></li>
                            <li><a href="#">Ring</a></li>
                            <li><a href="#">Bracelet</a></li>
                            <li><a href="#">Anklet</a></li>
                            <li><a href="#">Belt</a></li>
                            <li><a href="#">Ready To Wear</a></li>
                            <li><a href="#">Etc</a></li>
                        </ul>
                        <ul class="list4">
                            <li class="margin1"><a href="#">men</a></li>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Earring</a></li>
                            <li><a href="#">Ring</a></li>
                            <li><a href="#">Bracelet</a></li>
                            <li><a href="#">Anklet</a></li>
                            <li><a href="#">Belt</a></li>
                        </ul>
                        <ul class="list5">
                            <li class="m_img2"><a href="#"><img src="img/sb_img2.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list6">
                            <li><a href="#">Review</a></li>
                            <li><a href="#">Sizing</a></li>
                            <li><a href="#">Agreement</a></li>
                            <li><a href="#">Notice</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="a1"><a href="#">CAMPAIGN</a>
                <div class="sub">
                    <div class="sub1 cf">
                        <ul class="list1">
                            <li class="m_img1"><a href="#"><img src="img/sb_img1.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list2">
                            <li class="margin1"><a href="#">Shop All</a></li>
                        </ul>
                        <ul class="list3">
                            <li class="margin1"><a href="#">Women</a></li>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Earring</a></li>
                            <li><a href="#">Ring</a></li>
                            <li><a href="#">Bracelet</a></li>
                            <li><a href="#">Anklet</a></li>
                            <li><a href="#">Belt</a></li>
                            <li><a href="#">Ready To Wear</a></li>
                            <li><a href="#">Etc</a></li>
                        </ul>
                        <ul class="list4">
                            <li class="margin1"><a href="#">men</a></li>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Earring</a></li>
                            <li><a href="#">Ring</a></li>
                            <li><a href="#">Bracelet</a></li>
                            <li><a href="#">Anklet</a></li>
                            <li><a href="#">Belt</a></li>
                        </ul>
                        <ul class="list5">
                            <li class="m_img2"><a href="#"><img src="img/sb_img2.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list6">
                            <li><a href="#">Review</a></li>
                            <li><a href="#">Sizing</a></li>
                            <li><a href="#">Agreement</a></li>
                            <li><a href="#">Notice</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="a1"><a href="#">ABOUT</a>
                <div class="sub">
                    <div class="sub1 cf">
                        <ul class="list1">
                            <li class="m_img1"><a href="#"><img src="img/sb_img1.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list2">
                            <li class="margin1"><a href="#">Shop All</a></li>
                        </ul>
                        <ul class="list3">
                            <li class="margin1"><a href="#">Women</a></li>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Earring</a></li>
                            <li><a href="#">Ring</a></li>
                            <li><a href="#">Bracelet</a></li>
                            <li><a href="#">Anklet</a></li>
                            <li><a href="#">Belt</a></li>
                            <li><a href="#">Ready To Wear</a></li>
                            <li><a href="#">Etc</a></li>
                        </ul>
                        <ul class="list4">
                            <li class="margin1"><a href="#">men</a></li>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Earring</a></li>
                            <li><a href="#">Ring</a></li>
                            <li><a href="#">Bracelet</a></li>
                            <li><a href="#">Anklet</a></li>
                            <li><a href="#">Belt</a></li>
                        </ul>
                        <ul class="list5">
                            <li class="m_img2"><a href="#"><img src="img/sb_img2.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list6">
                            <li><a href="#">Review</a></li>
                            <li><a href="#">Sizing</a></li>
                            <li><a href="#">Agreement</a></li>
                            <li><a href="#">Notice</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <nav class="k-tmenu">
                <ul class="k-navi">
                    <!-- 우측 상단 메뉴바(로그인,회원가입) -->
                        <li><? include "top_login1.php"; ?></li>
                    <!-- <li><a href="#"><img src="img/icon5.png" alt="icon"></a></li>
                    <li><a href="#"><img src="img/icon6.png" alt="icon"></a></li>
                    <li><a href="#"><img src="img/icon4.png" alt="icon"></a></li> -->
        
                    <li><a href="#"><img src="img/icon1.png" alt="icon"></a>
                        <ul class="k-sub2">
                            <li><a href="#"><img src="img/icon2.png" alt="icon"></a></li>
                            <li><a href="#"><img src="img/icon3.png" alt="icon"></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </ul>
    </nav>
</header>
<div id="login">
    <form  name="member_form" method="post" action="login.php"> 
    <h3 class="login" style="letter-spacing:-1px;">Sign in to Web</h3>

	<p> 
        <label for="name">ID<br></label><input type="text" id="name" name="id" placeholder="아이디를 입력하세요" class="size">
    </p>
    <p>    
        <label for="pwd">Password<br></label><input type="password" id="pwd" name="pass" placeholder="아이디를 입력하세요" class="size">
    </p>
    <p class="find">
        <a href="id_screen.php" class="mm">아이디찾기</a> 
        <a href="pw_screen.php" class="mm">비밀번호찾기</a>
    </p>
    <p class="center1"> 
        <input type="submit"  value="로그인"> 
        <a href="member_form.php">회원가입</a>
        <!-- <a href="id_screen.php" class="mm">아이디찾기</a> 
        <a href="pw_screen.php" class="mm">비밀번호찾기</a> -->
    </p>

	</form>
</div>
     
 
<!-- <footer>
    <h1><a href="#">NUMBERING</a></h1>
        <div class="footer_text">
            <p><a href="#">Privacy</a></p>
            <p><a href="#">Agreement</a></p>
            <p><a href="#">Help</a></p>
            <p><a href="#">Sizing</a></p>
            <p><a href="#">Facebook</a></p>
            <p><a href="#">Instagram</a></p>
        </div>
    <p>(04782) 10F,53, Seongsuil-ro 6-gil, Seongodong-gu, Seoul, Republic of Korea</p>
    <p>Numbering Corp.</p>
</footer> -->
  
</body>
</html>