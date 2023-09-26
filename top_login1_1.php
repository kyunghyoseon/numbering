	<div id="top_login">
  
	  
	  <?
    if(!$_SESSION['userid'] )
	{
?>
          <a href="login_form.php">
			<i class="xi-user-o" style="color: #000; font-size: 28px;"></i>
		</a>
<?
	}
	else
	{
?>
		<?=$_SESSION['usernick']?>
		<a href="logout.php">
			<i class="xi-user-o" style="margin-left:7px;margin-top:4px"></i>
			<span style="display: block; font-size:0.6rem; margin-top: -9px; margin-left:3px">logout</span>
		</a>
<?
	}
?>
	  
     </div>