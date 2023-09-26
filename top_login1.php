	<div id="top_login">
	  
	  <?
    if(!$_SESSION['userid'] )
	{
?>
        <a href="login_form.php">
			<i class="xi-user-o" style="color: #fff; font-size: 28px;"></i>
		</a>
<?
	}
	else
	{
?>
		<?=$_SESSION['usernick']?>
		<a href="logout.php">
			<i class="xi-user-o" style="margin-left:4px"></i>
			<span style="display: block; font-size:0.6rem; margin-top: -9px;">logout</span>
		</a> 
<?
	}
?>
	  
     </div>