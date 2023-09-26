<? 
	session_start(); 
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>html5문서</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/numbering.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="https://kit.fontawesome.com/2597131e32.js" crossorigin="anonymous"></script>
    <script src="js/numbering.js"></script>
    <script src="js/num_slick.js"></script>

    </head>
<body>

<!-- 상단 슬라이드 텍스트 부분-->
<header>
    <nav class="header_text">
        <ul class="num_text">
        <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
            <a href="numbering.html"><li>NUMBERING</li></a>
        </ul>
    </nav>
</header>

<!-- 모바일 햄버거메뉴바, 로그인, 마이페이지 아이콘 부분 -->
<div class="h_menu">
    <nav class="xi cf">
        <li><? include "top_login1_1.php"; ?></li>   
        <li><a href="#">
            <i class="xi-cart-o" style="color: #000000; font-size: 27px;"></i>
        </a></li>
        <li class="s_img"><a href="#">
            <i class="xi-search" style="color: #000000; font-size: 24px;"></i>
        </a></li>             
    </nav>
    <button class="hamburger">
        <a href="#"><i class="xi-bars"></i></a>
    </button>
</div>

<!-- 모바일 햄버거 메뉴 -->
<nav class="hammenu">  
    <ul>
      <li class="color"><a href="numbering_sub.html">WOMEN
        <a href="#"><i class="xi-plus"></i></a>
          <ul class="sub">
              <li><a href="#">Necklace</a></li>
              <li><a href="#">Earring</a></li>
              <li><a href="#">Ring</a></li>
              <li><a href="#">Bracelet</a></li>
              <li><a href="#">Anklet</a></li>
              <li><a href="#">Belt</a></li>
              <li><a href="#">Ready To Wear</a></li>
              <li><a href="#">Etc</a></li>
          </ul>
      </li>
      
      <li class="color"><a href="#">MEN
        <a href="#"><i class="xi-plus"></i></a>
          <ul class="sub">
              <li><a href="#">Necklace</a></li>
              <li><a href="#">Earring</a></li>
              <li><a href="#">Ring</a></li>
              <li><a href="#">Bracelet</a></li>
              <li><a href="#">Belt</a></li>
              <li><a href="#">Etc</a></li>
          </ul>
      </li>
      
      <li class="color"><a href="#">CAMPAIGN</a></li>
      <li class="color"><a href="#">REVIEW</a></li>
      <li class="color"><a href="#">SIZING</a></li>
      <li class="color"><a href="#">NOTICE</a></li>
    </ul>
</nav>  <!--모바일 햄버거메뉴 종류-->

<!-- 태블릿 상단 메뉴바 부분 -->
<header class="tablet"> 
    <nav class="tmenu">
        <ul class="nav1">
            <li class="a1"><a href="numbering_sub.html">SHOP</a>
                <div class="sub">
                    <div class="sub1 cf">
                        <div class="line"></div>
                        <ul class="list2">
                            <li class="margin1" id="shopAll"><a href="numbering_sub.html">Shop All</a></li>
                            <!--링크에 서브2 페이지 걸기-->
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
                        <ul class="list5_1">
                            <li class="m_img2"><a href="#"><img src="img/sb_img3.jpg" alt="img"></a></li>
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
                    <div class="line"></div>
                    <div class="sub1 cf">
                        <ul class="list2_1">
                            <li class="margin2"><a href="#">Top 20</a></li>
                            <li class="m_img2"><a href="#"><img src="img/sb_img4.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list3_1">
                            <li class="m_img2"><a href="#"><img src="img/sb_img5.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list4_1">
                            <li class="m_img2"><a href="#"><img src="img/sb_img6.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list5_2">
                            <li class="m_img2"><a href="#"><img src="img/sb_img7.jpg" alt="img"></a></li>
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
                    <div class="line"></div>
                    <div class="sub1 cf">
                        <ul class="list7">
                            <li class="margin2"><a href="#">Campaign</a></li>
                            <li class="m_img2"><a href="#"><img src="img/sb_img8.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list8">
                            <li class="m_img2"><a href="#"><img src="img/sb_img9.jpg" alt="img"></a></li>
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
            </li>
            <nav class="k-tmenu">
                <ul class="k-navi">
                    <!-- 우측 상단 메뉴바(로그인,회원가입) -->
                    <li class="s_img"><a href="#">
                        <i class="xi-search" style="color: #fff; font-size: 24px;"></i>
                    </a></li>             
                    <li><a href="#">
                        <i class="xi-cart-o" style="color: #fff; font-size: 27px;"></i>
                    </a></li>
                    <li><? include "top_login1.php"; ?></li>   
                    <li><a href="#">
                        <img class="i_1" src="img/icon1.png" alt="icon"></a>
                        <ul class="k-sub2">
                            <li><a href="#"><img src="img/icon2.png" alt="icon"></a></li>
                            <li><a href="#"><img src="img/icon3.png" alt="icon"></a></li>
                        </ul>
                    </li>             
                </ul>
            </nav>
        </ul>
</header>  <!--테블릿 메뉴바 종류-->

<!-- pc 메뉴바 --> 
<header class="pcmenu">
    <nav class="menubox cf">
        <ul class="nav2">
            <li class="a1"><a href="numbering_sub.html">SHOP</a>
                <div class="sub2">  <!--기존 sub-->
                    <div class="sub3 cf">  <!--기존 sub1-->
                        <div class="line"></div>
                        <ul class="list2">
                            <li class="margin1" id="shopAll"><a href="numbering_sub.html">Shop All</a></li>
                            <!--링크에 서브2 페이지 걸기-->
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
                        <ul class="list5_1">
                            <li class="m_img2"><a href="#"><img src="img/sb_img3.jpg" alt="img"></a></li>
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
                <div class="sub2">
                    <div class="sub3 cf">
                        <div class="line"></div>
                        <ul class="list2_1">
                            <li class="margin2"><a href="#">Top 20</a></li>
                            <li class="m_img2"><a href="#"><img src="img/sb_img4.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list3_1">
                            <li class="m_img2"><a href="#"><img src="img/sb_img5.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list4_1">
                            <li class="m_img2"><a href="#"><img src="img/sb_img6.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list5_2">
                            <li class="m_img2"><a href="#"><img src="img/sb_img7.jpg" alt="img"></a></li>
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
                <div class="sub2">
                    <div class="sub3 cf">
                        <div class="line"></div>
                        <ul class="list7">
                            <li class="margin2"><a href="#">Campaign</a></li>
                            <li class="m_img2"><a href="#"><img src="img/sb_img8.jpg" alt="img"></a></li>
                        </ul>
                        <ul class="list8">
                            <li class="m_img2"><a href="#"><img src="img/sb_img9.jpg" alt="img"></a></li>
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
            </li>
            <nav class="k-tmenu">
                <ul class="k-navi">
                    <!-- 우측 상단 메뉴바(로그인,회원가입) -->
                    <li class="s_img"><a href="#">
                        <i class="xi-search" style="color: #fff; font-size: 24px;"></i>
                    </a></li>             
                    <li><a href="#">
                        <i class="xi-cart-o" style="color: #fff; font-size: 27px;"></i>
                    </a></li>
                    <li><? include "top_login1.php"; ?></li>   
                    <li><a href="#">
                        <img class="i_1" src="img/icon1.png" alt="icon"></a>
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

<div id="con">
    <div id="k-login">
        <div id="k-login_form"><!--로그인 폼-->
        <form name="member_form" method="post" action="login.php">
            <h3 class="k-login" style="letter-spacing:-1px;"><img src="img/logo2.png" alt="logo"></h3>

            <hr>
            <label for="name">
            <p style="text-align: left; font-size:12px; color:#000">ID</p>
            <input type="text" id="name" name="id" placeholder="아이디를 입력하세요" class="size">
            </label>

            <label for="pwd">
            <p style="text-align: left; font-size:12px; color:#000">Password </p>
            <input type="password" id="pwd" name="pass" placeholder="비밀번호를 입력하세요" class="size">
            </label>

            <p>
                <input type="submit" value="Sign in" class="btn">
            </p>
        </form>
            <hr>
            <p class="find">
                <span><a href="id_screen.php">아이디 찾기</a></span>
                <span><a href="pw_screen.php">비밀번호 찾기</a></span>
                <span><a href="member_form.php" >회원가입</a></span>
            </p>

            <p class="kakao_bt1">
                <!-- <img src="img/kakao.png" alt="카카오톡 아이콘"> -->
                <img src="img/kakao3.png" alt="카카오톡 아이콘">
            </p>
            <button class="kakao_bt">카카오톡 로그인</button>
        </div>
    </div>
</div><!--con-->

<footer>
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
</footer>
  
</body>
</html>