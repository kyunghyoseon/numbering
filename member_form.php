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
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/numbering.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="https://kit.fontawesome.com/2597131e32.js" crossorigin="anonymous"></script>
    <script src="js/numbering.js"></script>
    <script src="js/num_slick.js"></script>

<script>

   function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

//    function check_nick()
//    {
//      window.open("check_nick.php?nick=" + document.member_form.nick.value,
//          "NICKcheck",
//           "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
//    }


//let reg_pw2 = /(?=.*[a-zA-ZS])(?=.*?[#?!@$%^&*-]).{6,24}/; // 문자와 특수문자 조합의 6~24 자리

function check_input()
   {
   // const re1 = /^[a-zA-Z0-9]{4,12}$/ ;  //가능하다
   const re1 =/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,10}$/;
    const id=document.member_form.id.value;
      if (!document.member_form.id.value)
      {
          alert("아이디를 입력하세요");    
          document.member_form.id.focus();
          return;
      }else if(!re1.test(id)){
        alert("6~10자의 영문자,숫자,특수기호 혼합해서 사용할 수 있습니다");
    return false;
      }


      if (!document.member_form.pass.value)
      {
          alert("비밀번호를 입력하세요");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("비밀번호확인을 입력하세요");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("이름을 입력하세요");    
          document.member_form.name.focus();
          return;
      }

    //   if (!document.member_form.nick.value)
    //   {
    //       alert("닉네임을 입력하세요");    
    //       document.member_form.nick.focus();
    //       return;
    //   }

      if (!document.member_form.hp.value)
      {
          alert("휴대폰 번호를 입력하세요");    
          document.member_form.hp.focus();
          return;
      }

      if (!document.member_form.email.value)
      {
          alert("Email을 입력하세요");    
          document.member_form.email.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      //휴대전화번호 체크
const hp1=document.member_form.hp.value;
const re2= /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;
if (!re2.test(hp1)) {
          alert('휴대전화번호를 다시 입력해주세요.'); 
          return false;
      }

// 이메일 체크
const email=document.member_form.email.value;
//const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 //위의 식도 가능하다
const re=/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;
if (!re.test(email)) {
    alert("@를 포함해서 입력해주세요");
    return false;
}
      document.member_form.submit();
   }

   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
    //   document.member_form.nick.value = "";
      document.member_form.hp.value = "";
         document.member_form.email.value = "";
	  
      document.member_form.id.focus();

      return;
   }
</script>
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

<!-- 회원가입 폼 -->
<div id="join_mem">
    <div id="form_join">
        <div id="join2">
            <form  name="member_form" method="post" action="insert.php">
                <h3 class="k-join" style="letter-spacing:-1px;"><img src="img/logo2.png" alt="logo"></h3>

                <hr>
                <label for="name">
                    <p style="text-align: left; font-size:12px; color:#000">ID</p>
                    <input type="text" name="id" placeholder="영문 소문자/숫자 4~16자" class="size1">
                    <a href="#"><img src="image/check_id.gif" onclick="check_id()"></a>
                </label>

                <label for="pass">
                    <p style="text-align: left; font-size:12px; color:#000">Password</p>
                    <input type="password" name="pass" placeholder="영문 대소문자/숫자 4~16자" class="size">
                </label>

                <label for="pass">
                    <p style="text-align: left; font-size:12px; color:#000">Password confirm</p>
                    <input type="password" name="pass_confirm" class="size">
                </label>

                <label for="name">
                    <p style="text-align: left; font-size:12px; color:#000">Name</p>
                    <input type="text" name="name" class="size">
                </label>

                <label for="tel">
                    <p style="text-align: left; font-size:12px; color:#000">Mobile</p>
                    <input type="tel" name="hp" class="size">
                </label>

                <label for="email">
                    <p style="text-align: left; font-size:12px; color:#000">E-mail</p>
                    <input type="email"  name="email" class="size">
                </label>
            </form>
            <button class="save btn" onclick="check_input()">Sign In</button>
            <button class="reset btn" onclick="reset_form()">Cancel</button>
        </div>
    </div>
</div>

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