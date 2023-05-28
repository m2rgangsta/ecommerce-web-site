<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css" class="rel">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" class="rel">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" class="rel">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" class="rel">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" class="rel">
    <title>ForsaShop</title>
</head>
<body>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+216 29 290 967</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt=""></div><a href="mailto:makram.benrhouma@gmail.com">contact@hortensia.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
                            <div class="top_bar_user">
								<div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
								<div><a href="#">Login</a></div>
                                <div class="user_icon"><img src="images/register.jpg" alt=""></div>
								<div><a href="#">Register</a></div>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="images/vendeur.jpg" alt=""></div>
								<div><a href="#"  > vendeur espace</a></div>
                                <div class="user_icon"><img src="images/echange.jpg" alt=""></div>
								<div><a href="#">echange espace</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">ForsaShop</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown" style="display: none;">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
                                        
									</form>
                                    
								</div>
							</div>
						</div>
					</div>


						

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">


					<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
  								<path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
								</svg></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Share</a></div>
									<div class="wishlist_count">0</div>
								</div>
							</div>


						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">loved</a></div>
									<div class="wishlist_count">0</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
										<div class="cart_count"><span>3</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Cart</a></div>
										<div class="cart_price">185Dt</div>
									</div>
								</div>
							</div>

							

						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav ">
			<div class="container">
				<div class="row">
					<div class="col">
					<div class="main_nav_content d-flex flex-row">

<!-- Categories Menu -->



<!-- Main Nav Menu -->

<div class="main_nav_menu ms-auto"">
	<ul class="standard_dropdown main_nav_dropdown">
		<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
		<li class="hassubs">
			<a href="#">all categories<i class="fas fa-chevron-down"></i></a>
			<ul>
				<li>
					<a href="#">Lenovo<i class="fas fa-chevron-down"></i></a>
					<ul>
						<li><a href="#">Lenovo 1<i class="fas fa-chevron-down"></i></a></li>
						<li><a href="#">Lenovo 3<i class="fas fa-chevron-down"></i></a></li>
						<li><a href="#">Lenovo 2<i class="fas fa-chevron-down"></i></a></li>
					</ul>
				</li>
				<li><a href="#">DELL<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">APPLE<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">HP<i class="fas fa-chevron-down"></i></a></li>
			</ul>
		</li>
		<li class="hassubs">
			<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
			<ul>
				<li>
					<a href="#">APPLE<i class="fas fa-chevron-down"></i></a>
					<ul>
						<li><a href="#">Laptop<i class="fas fa-chevron-down"></i></a></li>
						<li><a href="#">Mobiles<i class="fas fa-chevron-down"></i></a></li>
						<li><a href="#">Ipads<i class="fas fa-chevron-down"></i></a></li>
					</ul>
				</li>
				<li><a href="#">Samsung<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">Lenovo<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">DELL<i class="fas fa-chevron-down"></i></a></li>
			</ul>
		</li>
		<li class="hassubs">
			<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="#">Shop<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">Product<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">Blog<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">Blog Post<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">Regular Post<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">Cart<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="#">Contact<i class="fas fa-chevron-down"></i></a></li>
			</ul>
		</li>
		<li><a href="#">Shop<i class="fas fa-chevron-down"></i></a></li>
		<li><a href="#">Contact<i class="fas fa-chevron-down"></i></a></li>
	</ul>
</div>


</header>				
	
	<div style="height: 300px"></div>

</div>









<script>
	$(document).ready(function()
{
	"use strict";

	var menuActive = false;
	var header = $('.header');
	setHeader();
	initCustomDropdown();
	initPageMenu();

	function setHeader()
	{
	
		if(window.innerWidth > 991 && menuActive)
		{
			closeMenu();
		}
	}

	function initCustomDropdown()
	{
		if($('.custom_dropdown_placeholder').length && $('.custom_list').length)
		{
			var placeholder = $('.custom_dropdown_placeholder');
			var list = $('.custom_list');
		}

		placeholder.on('click', function (ev)
		{
			if(list.hasClass('active'))
			{
				list.removeClass('active');
			}
			else
			{
				list.addClass('active');
			}

			$(document).one('click', function closeForm(e)
			{
				if($(e.target).hasClass('clc'))
				{
					$(document).one('click', closeForm);
				}
				else
				{
					list.removeClass('active');
				}
			});

		});

		$('.custom_list a').on('click', function (ev)
		{
			ev.preventDefault();
			var index = $(this).parent().index();

			placeholder.text( $(this).text() ).css('opacity', '1');

			if(list.hasClass('active'))
			{
				list.removeClass('active');
			}
			else
			{
				list.addClass('active');
			}
		});


		$('select').on('change', function (e)
		{
			placeholder.text(this.value);

			$(this).animate({width: placeholder.width() + 'px' });
		});
	}

	/* 

	4. Init Page Menu

	*/

	function initPageMenu()
	{
		if($('.page_menu').length && $('.page_menu_content').length)
		{
			var menu = $('.page_menu');
			var menuContent = $('.page_menu_content');
			var menuTrigger = $('.menu_trigger');

			//Open / close page menu
			menuTrigger.on('click', function()
			{
				if(!menuActive)
				{
					openMenu();
				}
				else
				{
					closeMenu();
				}
			});

			//Handle page menu
			if($('.page_menu_item').length)
			{
				var items = $('.page_menu_item');
				items.each(function()
				{
					var item = $(this);
					if(item.hasClass("has-children"))
					{
						item.on('click', function(evt)
						{
							evt.preventDefault();
							evt.stopPropagation();
							var subItem = item.find('> ul');
						    if(subItem.hasClass('active'))
						    {
						    	subItem.toggleClass('active');
								TweenMax.to(subItem, 0.3, {height:0});
						    }
						    else
						    {
						    	subItem.toggleClass('active');
						    	TweenMax.set(subItem, {height:"auto"});
								TweenMax.from(subItem, 0.3, {height:0});
						    }
						});
					}
				});
			}
		}
	}

	function openMenu()
	{
		var menu = $('.page_menu');
		var menuContent = $('.page_menu_content');
		TweenMax.set(menuContent, {height:"auto"});
		TweenMax.from(menuContent, 0.3, {height:0});
		menuActive = true;
	}

	function closeMenu()
	{
		var menu = $('.page_menu');
		var menuContent = $('.page_menu_content');
		TweenMax.to(menuContent, 0.3, {height:0});
		menuActive = false;
	}

	   
});
</script>






</body>
</html>
    
