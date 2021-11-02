<?php
	session_start();
	if(isset($_SESSION['login_success']) && isset($_SESSION['login_success'])!=NULL)
	    unset($_SESSION['login_success']);
	    echo "
	            <script type='text/javascript'>
	                window.alert('Đăng xuất thành công');
	                window.location.href='login.php';
	            </script>
	        ";

;?>