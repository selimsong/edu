<!DOCTYPE html>
<html>
<head>
<title>Demo Beautiful Registration Form with HTML5 and CSS3</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv28/images/icon.ico />
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url();  ?>css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url();  ?>css/demo.css" media="all" />
    
</head>
<body>
 <div class="container">
			<header>
				<h1><strong>注册</strong></h1>
            </header>       
      <div  class="form">
    		<form id="contactform" action="<?php  echo site_url('/signup/create'); ?>" method="post"> 
    			<p class="contact"><label for="name">Account Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 

                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required=""> 

            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
  </div>       

</body>
</html>
