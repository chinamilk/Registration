<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($title); ?></title>

</head>

<body>
	<div align="center">
		<div>
			<h1><?php echo ($title); ?></h1>
		</div>
		
		<div>
			<form action="/Registration/Admin/Admin/login/" method="post">
				<p>
	        		<label>用户名</label>
	        		<input class="text-input" type="text"  name="username"/>
	      		</p>
	      		
	      		<p>
	        		<label>密码</label>
	        		<input class="text-input" type="password" name="password"/>
	      		</p>
	      		
				<p>
					<label><button class="button" type="submit" formaction="/Registration/Admin/Admin/registerIndex/">注册</button></label>
					<label><input type="submit" value="登录"/></label>
					<label><input type="reset" value="重新输入"></label>
				</p>
			</form>
		</div>
	</div>
</body>
</html>