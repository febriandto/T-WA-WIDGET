<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Document</title>
</head>
<body>
	
	<style>
		input:focus{
			outline-width: 0;
		}
		.t-wa-wrapper{
			background: #fff;
		  width: 350px;
		  position: fixed;
		  bottom: 0;
		  left: 1000px;
		  height: 300px;
		  border-top-right-radius: 5px;
		  border-top-left-radius: 5px;
		  overflow: hidden;
		  transform: translateY(500px);
		  box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.2);
		  transition: 1s;
		  opacity: 0;
		}
		.t-wa-close{
			position: absolute;
			right: 10px;
			top: 10px;
			cursor: pointer;
		}
		.t-wa-header{
			padding: 10px;
			background: #1ec47b;
		}
		.t-wa-header img{
			border-radius: 50%;
			width: 80px;
			margin: auto;
			display: block;
			padding: 10px;
		}
		.t-wa-header p{
			text-align:center;
			color: white;
			margin: 0
		}
		.t-wa-body{
			background: #efefef;
  		width: 100%;
  		height: 37%;
		}
		.t-wa-body .bubble{
			padding: 20px;
			border-radius: 5px;
			position: relative;
		}
		.t-wa-body .text{
			color: #333;
			padding: 10px;
			background: #e4fec8;
			box-shadow: 1px 2px 5px 0px rgba(0,0,0,.1);
		}
		.text::before {
		  width: 0;
		  height: 0;
		  border-left: 15px solid transparent;
		  border-right: 15px solid transparent;
		  border-top: 15px solid #e4fec8;
		  content: "";
		  position: absolute;
		  left: 4px;
		  top: 10px;
		}
		.t-wa-footer{
			width: 100%;
			position: relative;
		}
		.t-wa-footer input[type="text"]{
			width: 85%;
			padding: 10px;
			border-width: 0;
		}
		.t-wa-footer svg:hover{
			cursor: pointer;
		}
		.t-wa-copyright{
			text-align: center;
		  font-size: small;
		  background: #1ec47b;
		  color: white;
		}
	</style>

	<a href="#" onclick=" $('.t-wa-wrapper').css({'transform' : 'translateY(' + 0 + ')', 'opacity' : '1' }); ">
		<div style="background: #1ec47b;width: 126px;position: fixed;bottom: 0;left: 145px;">
			<span style="color: white;text-align: center;display: block;padding: 6px;font-size: 16px;">Whatsapp</span>
		</div>
	</a>

	<div class="t-wa-wrapper">

		<svg onclick=" $('.t-wa-wrapper').css({'transform' : 'translateY(' + 500 + 'px)', 'opacity' : '0' }); " class="t-wa-close" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
		width="24" height="24"
		viewBox="0 0 172 172"
		style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M49.5575,44.72l-4.8375,4.8375l36.55,36.4425l-36.55,36.4425l4.8375,4.8375l36.6575,-36.4425l36.55,36.4425l4.8375,-4.8375l-36.55,-36.4425l36.55,-36.4425l-4.8375,-4.8375l-36.55,36.4425z"></path></g></g>
		</svg>

  	<div class="t-wa-header">
  		<div style="background: url('logo.png');width: 80px;height: 80px;border-radius: 50%;background-position: center;background-size: cover;margin: 10px auto;"></div>
	  	<p>Ahmad Solikhin</p>
  	</div>
  	
  	<div class="t-wa-body">
  		<div class="bubble">
  			<span class="text">hi... what can i do for you?</span>
  		</div>
  	</div>

  	<div class="t-wa-footer">
	  	<input type="text" id="t-wa-text" placeholder="Reply to Ahmad Solikhin">
	  	<svg id="t-wa-send" style="position: absolute;top: 20%;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
				width="16" height="16"
				viewBox="0 0 172 172"
				style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M10.07813,10.16211l20.24024,65.08789h130.93164zM30.31836,86l-20.24024,65.0459l151.17188,-65.0459z"></path></g></g>
			</svg>
	  	<div class="t-wa-copyright">
	  		<span>by transisimedia</span>
	  	</div>
  	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script>
		
		$("#t-wa-send").on("click", function(){
			window.open("https://wa.me/6281355538777?text="+$('#t-wa-text').val() );
		});

		$('#t-wa-text').keypress(function (e) {
		 var key = e.which;
		 if(key == 13)  // the enter key code
		  {
		  	window.open("https://wa.me/6281355538777?text="+$('#t-wa-text').val() );
		    return false;
		  }
		});
	</script>
</body>
</html>