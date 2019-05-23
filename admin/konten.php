<?php
@$pages_dir='pages';
if(!empty($_GET['page'])){
	$pages=scandir($pages_dir,0);
	unset($pages[0],$pages[1]);
	$page=$_GET['page'];
	if(in_array($page.'.php', $pages)){
		include($pages_dir.'/'.$page.'.php');
	}else{
		echo'Oops Page Not Found';
	}
}else{
	include($pages_dir.'/home.php');
}
?>