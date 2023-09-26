<?
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['username']);
  // unset($_SESSION['usernick']);
 
  echo("
       <script>
          location.href = 'numbering.html';  
         </script>
       ");  // location.href = 'main.html';  ->  이동할 페이지로 감

?> 


