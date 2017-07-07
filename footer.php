<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="text-center">
						<a href="#intro" class="totop"><i class="pe-7s-angle-up pe-3x"></i></a>
						<br>
						<img src="img/logo-meghna.png" class="img-responsive"/>
						<div class="social-widget">
							
							
							<ul class="team-social">
									<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>						
							
						</div>
						<div class="footer-menu">
								<ul id="footer_menu" class="menu">
									<li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
										<a href="">Pidro</a>
									</li>
									<li id="menu-item-1478" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1478">
										<a href="">Tappy Postman</a>
									</li>
									<li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32">
										<a href="">Money Rules</a>
									</li>
									<li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30">
										<a href="how-we-work.php">How We Work</a>
									</li>
									<li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29">
										<a href="how-we-play.php">How We Play</a>
									</li>
									<li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28">
										<a href="">Careers</a>
									</li>
									<li id="menu-item-1191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1191">
										<a href="contactus.php">Contact Us</a>
									</li>
									<!--li id="menu-item-34" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34">
										<a href="">Blog</a>
									</li-->
									<li id="menu-item-1337" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1337">
										<a href="Privacy_Policy.php">Privacy Policy</a>
									</li>
									<li id="menu-item-1338" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1338">
										<a href="Terms&Services.php">Terms Of Service</a>
									</li>
								</ul>
							</div>	
						<!--img src="img/logo-meghna.png" class="img-responsive"/-->
						<p class="foot_para"><b>All trademarks referenced herein are the properties of their respective owners.<br>
							&copy; 2016 SkyWaltz&reg; Digital Services (P) Limited. All rights reserved.</b></p>
                       
					</div>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/slippry.min.js"></script> 
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/morphext.min.js"></script>
	<script src="js/gmap.js"></script>
	<script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>

  <script>

     var currentBackground = 0;

     var backgrounds = [];

        backgrounds[0] = 'img/images/2basic_theme.png';

        backgrounds[1] = 'img/images/2candy_theme.png';

        backgrounds[2] = 'img/images/2future_theme.png';
    
        function changeBackground() {
          
            currentBackground++;

            if(currentBackground > 2) currentBackground = 0;

            $('.slick-img').fadeOut(400,function() {
                $(".slick-img-fade").attr('src',backgrounds[currentBackground]);
                $('.slick-img').fadeIn(400);
            });


            setTimeout(changeBackground, 5000);
        }

        $(document).ready(function() {

            setTimeout(changeBackground, 5000);  

        });

    </script>


	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/custom.js"></script>
 	<script src="js/main.js"></script>
    <script src="js/bootstrap.min.theme.js"></script>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<!--script type="text/javascript">
      $(document).ready(function() {
    	$('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
   
</script-->
	<script type="text/javascript">
		$("#example-one li a").on('click',function(){
			var a=this.id;
			console.log(a);
			if(a=='item1'){
				$("#parallaximg_exp").animate({ opacity: 0}, 0).css('background-image','url(img/images/gaming_test_desktop.png)').animate({opacity: 1}, 1000);
				$(".para_explore").text('In the first phase of the game’s life, this is where we brainstorm, ideate, develop quick iterations for playable versions, and test it all. After the prototype is greenlit, we move to pre-production where we construct the timeline and scope of the project, assemble a team, and begin building a business case.');
			}
			else if(a=='item2'){
				$("#parallaximg_exp").animate({ opacity: 0}, 0).css('background-image','url(img/images/launch-1.png)').animate({opacity: 1}, 1000);
				$(".para_explore").text('We’re live everywhere! Now begins the bread and butter of being a games company. We constantly improve, develop, expand, monitor, and interact with our users to make the greatest game we can.');
			}
			else if(a=='item3'){
				$("#parallaximg_exp").animate({ opacity: 0}, 0).css('background-image','url(img/images/1808x756.jpg)').animate({opacity: 1}, 1000);
				$(".para_explore").text('Now we’re at full power. This is where we hone the game economy, continue the art and tech development, and perform play tests. We also begin working on the overall brand and marketability of the game, and perform a lot of quality assurance testing. If it’s all good, we hope for a soft launch green light.');
			}
			else{
				$("#parallaximg_exp").animate({ opacity: 0}, 0).css('background-image','url(img/images/1808x756-1.jpg)').animate({opacity: 1}, 1000);
				$(".para_explore").text('Here, we officially release the game to a small audience. The marketing team prepares for the main launch while we also measure, analyze, and improve the game before a final green light which is based on this launch’s performance.');
			}				
		});	
		
		
		$("#example-two li a").on('click',function(){
			var a=this.id;
			console.log(a);
			if(a=='item_1'){
				$("#parallaximg_exp1").animate({ opacity: 0}, 0).css('background-image','url(img/images/art-1.png)').animate({opacity: 1}, 1000);
				$(".para_explore").text('In the first phase of the game’s life, this is where we brainstorm, ideate, develop quick iterations for playable versions, and test it all. After the prototype is greenlit, we move to pre-production where we construct the timeline and scope of the project, assemble a team, and begin building a business case.');
			}
			else if(a=='item_2'){
				$("#parallaximg_exp1").animate({ opacity: 0}, 0).css('background-image','url(img/images/Tech_desktop.png)').animate({opacity: 1}, 1000);
				$(".para_explore").text('We’re live everywhere! Now begins the bread and butter of being a games company. We constantly improve, develop, expand, monitor, and interact with our users to make the greatest game we can.');
			}
			
			else{
				$("#parallaximg_exp1").animate({ opacity: 0}, 0).css('background-image','url(img/images/product.png)').animate({opacity: 1}, 1000);
				$(".para_explore").text('Here, we officially release the game to a small audience. The marketing team prepares for the main launch while we also measure, analyze, and improve the game before a final green light which is based on this launch’s performance.');
			}				
		});	
	</script>
 <script>
	    var ParallaxManager, ParallaxPart;
	    ParallaxPart = (function() {
	      function ParallaxPart(el) {
	        this.el = el;
	        this.speed = parseFloat(this.el.getAttribute("data-parallax-speed"));
	        this.maxScroll = parseInt(this.el.getAttribute("data-max-scroll"));
	      }
	      ParallaxPart.prototype.update = function(scrollY) {
	        if (scrollY > this.maxScroll) { return; }
	        var offset = -(scrollY * this.speed);
	        this.setYTransform(offset);
	      };
	      ParallaxPart.prototype.setYTransform = function(val) {
	        jQuery(this.el).css("margin-top",val);
	      };
	      return ParallaxPart;
	    })();

	    ParallaxManager = (function() {
	      ParallaxManager.prototype.parts = [];
	      function ParallaxManager(elements) {

	        if (typeof elements === "array" && elements.length) {
	          this.elements = elements;
	        }
	        if (typeof elements === 'object' && elements.item) {
	          this.elements = Array.prototype.slice.call(elements);
	        } else if (typeof elements === 'string') {
	          this.elements = document.querySelectorAll(elements);
	        if (this.elements.length === 0) {
	            // alert("Parallax: No elements found");
	        }
	          this.elements = Array.prototype.slice.call(this.elements);
	        } else {
	          // alert("Parallax: Element variable is not a querySelector string, Array, or NodeList");
	        }
	        for (var i in this.elements) {
	          this.parts.push(new ParallaxPart(this.elements[i]));
	        }
	        window.addEventListener("scroll", this.onScroll.bind(this));

	      }
	      ParallaxManager.prototype.onScroll = function() {
	        window.requestAnimationFrame(this.scrollHandler.bind(this));
	      };
	      ParallaxManager.prototype.scrollHandler = function() {
	        var scrollY = Math.max(window.pageYOffset, 0);
	        for (var i in this.parts) { this.parts[i].update(scrollY); }
	      };

	      return ParallaxManager;

	    })();

	    new ParallaxManager('.parallax-layer');

   </script>

</body>

</html>
