<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>
<script>
  $(document).ready(function() {
	$('.chat_icon').click(function() {
		$('.chat_box').toggleClass('active');
	});

	$('.my-conv-form-wrapper').convform({selectInputStyle: 'disable'})
});
</script>
<style>
  /*ChatBot*/
.chat_icon{
	position: fixed;
	bottom: 0;
	right: 30px;
	z-index: 1000;
	padding: 0;
	font-size: 80px;
	color: rgb(70, 80, 255);
	cursor: pointer;
}
.chat_box{
	width: 400px;
	height: 80vh;
	position: fixed;
	bottom: 100px;
	right: 30px;
	background:#b0a9ff;
	z-index: 1000;
	transition: all 0.3s ease-out;
	transform: scaleY(0);
}
.chat_box.active{
	transform: scaleY(1);
}
#messages{
	padding: 20px;
}
.my-conv-form-wrapper textarea{
	height: 30px;
	overflow: hidden;
	resize: none;
}
.hidden{
	display: none !important;
}

</style>
</head>
<body>
<!-- ChatBot -->

<div class="chat_icon" >
	<i class="fa fa-comment" aria-hidden="true"  ></i>
</div>

<div class="chat_box" >
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">
   
      <select data-conv-question="Merhba bik ! fi forsaShop kifh najmou na3wnouk? " name="category">
        <option value="WebDevelopment">Neheb Nechri ?</option>
        <option value="DigitalMarketing">Nehb Nbi3 ?</option>
        <option value="Contacts">Nehb Nebdel ?</option>
        <option value="problem">3ndi Probelem ?</option>
      </select>

      <div data-conv-fork="category">
        <div data-conv-case="WebDevelopment">
          <input type="text" name="domainName" data-conv-question="A3tini , esm el 9at3a eli tehb 3liha  ">    
        </div>
        <div data-conv-case="DigitalMarketing" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="chnwa, el 9at3a li theb tebi3ha"> 
        </div>
        <div data-conv-case="Contacts" data-conv-fork="first-question3">
          <input type="text" name="companyName" data-conv-question="chnwa , el 9at3a eli theb tebdel bih , snn od5l 3l partie echange"> 
        </div>
        <div data-conv-case="problem" data-conv-fork="first-question4">
          <input type="text" name="companyName" data-conv-question="chnwa , el problem s"> 
        </div>
      </div>

      <input type="text" name="name" data-conv-question="A3tini ,Esmek !">

      <input type="text" data-conv-question="Marhba bik !! {name}, <br> netchrfou eb m3rfetk ." data-no-answer="true">

      <input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">

      <select data-conv-question="Please Conform">
        <option value="Yes">Conform</option>
      </select>

  	</form>
	</div>
</div>
<!-- ChatBot end -->




<script type="text/javascript">
	portfolioList = document.querySelectorAll('.portfolio-box');
	portfolioList.forEach(function(portfolioPic) {
		portfolioPic.addEventListener('click',function(){
			bg = this.style.backgroundImage;
			document.getElementById('port_pop_pic_bg').classList.add("active")
			document.getElementById('port_pop_pic').style.backgroundImage = bg
			document.getElementById('port_pop_pic').classList.add("active")
		});	
	})
	document.getElementById('port_pop_pic_bg').addEventListener('click',function(){
			document.getElementById('port_pop_pic_bg').classList.remove("active")
			document.getElementById('port_pop_pic').classList.remove("active")
	})

  

</script>

</body>
</html>