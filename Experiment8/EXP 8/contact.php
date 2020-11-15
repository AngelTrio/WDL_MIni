<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="web design, website development, web application development, print design, database development, ecommerce websites, search engine optimization, packaging design" />
<meta name="description" content="Design Chemical, Bangkok provides web design, website development, web application development, print design, database development, ecommerce websites, search engine optimization &amp; packaging design." />
<meta name="robots" content="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://www.designchemical.com/favicon.ico" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<?php include("header.php") ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
	var $loading = $('<div class="loading"><img src="/media/images/loading.gif" alt="" /></div>');
	$(".default").each(function(){
		var defaultVal = $(this).attr('title');
		$(this).focus(function(){
			if ($(this).val() == defaultVal){
				$(this).removeClass('active').val('');
			}
		});
		$(this).blur(function() {
			if ($(this).val() == ''){
				$(this).addClass('active').val(defaultVal);
			}
		})
		.blur().addClass('active');
	});
	$('.btn-submit').click(function(e){
		var $formId = $(this).parents('form');
		var formAction = $formId.attr('action');
		defaulttextRemove();
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		$('li',$formId).removeClass('error');
		$('span.error').remove();
		$('.required',$formId).each(function(){
			var inputVal = $(this).val();
			var $parentTag = $(this).parent();
			if(inputVal == ''){
				$parentTag.addClass('error').append('<span class="error">Required field</span>');
			}
			if($(this).hasClass('email') == true){
				if(!emailReg.test(inputVal)){
					$parentTag.addClass('error').append('<span class="error">Enter a valid email address.</span>');
				}
			}
		});
		if ($('span.error').length == "0") {
			$formId.append($loading.clone());
			$('fieldset',$formId).hide();
			$.post(formAction, $formId.serialize(),function(data){
				$('.loading').remove();
				$formId.append(data).fadeIn();
			});
		}
		e.preventDefault();
	});
});
function defaulttextRemove(){
	$('.default').each(function(){
		var defaultVal = $(this).attr('title');
		if ($(this).val() == defaultVal){
			$(this).val('');
		}
	});
}
</script>
</head>
<body id="demo">
	<?php include("nav.php") ?>
<div id="stick" style="margin-top: 5%; margin-left: 35%;">
  <div id="wrap-content">
    <div id="content">
	  <div class="page wrap sidecol">
	  <div class="col-main float-left">
		  <form id="form-contact" class="styled" action="test_submit.htm" method="post">
		    <fieldset style="background-color: gray; border:1px solid black">
			  <legend>Contact Form</legend>
			  <ol>
			    <li class="form-row">
				  <label style="color: #fff;">Email:</label>
				  <input id="input-email" type="text" class="text-input required email default" name="email" value="" title="Enter Your Email Address" />
				</li>
				<li class="form-row">
				  <label style="color: #fff;">Name:</label>
				  <input id="input-name" type="text" class="text-input required default" name="name" value="" title="Enter Your Full Name" />
				</li>
				<li class="form-row">
				  <label style="color: #fff;">Phone:</label>
				  <input id="input-phone" type="text" class="text-input" name="phone" value="" required>
				</li>
				<li class="form-row">
				  <label style="color: #fff;">Comments:</label>
				  <textarea id="input-message" class="text-area" name="message" cols="40" rows="8" required></textarea>
				</li>
				<li class="button-row text-right">
				  <input class="btn-submit" type="submit" value="Submit" name="submit" style="width: 70px;" >
				</li>
			  </ol>
			</fieldset>
		  </form>	
	  </div>
	  <div class="col-side float-right">    

	  </div>
	  <div class="clear page-btm"></div>
	  </div>
	</div>
  </div>
</div>
</body>
</html>
