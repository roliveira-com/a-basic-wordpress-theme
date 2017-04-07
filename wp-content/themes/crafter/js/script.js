	jQuery(document).ready(function($) {

			//Anomation at load -----------------
			Pace.on('done', function(event) {

			});//Pace

			 wow = new WOW(
                    {
                      offset:       150,
                    }
            )
            wow.init();

            $("body").on('click', '#primary-menu > li > a[href^="#"]', function(event) {
            	event.preventDefault();
            	/* Act on the event */
            	$("html, body").animate({
			    	scrollTop: $( $(this).attr('href') ).offset().top
			    }, 1000);
            });


			$(".ql_scroll_top").click(function() {
			  $("html, body").animate({ scrollTop: 0 }, "slow");
			  return false;
			});

			$("#primary-menu > li > ul > li.dropdown").each(function(index, el) {
				$(el).removeClass('dropdown').addClass('dropdown-submenu');
			});


			//PhotoSwipe for About Section
			initPhotoSwipe('.about-gallery', '.about-gallery-image a', '');

			//Team Section
			//Wait to images load
			$team_wrap = $('.team-wrap');
			$team_wrap.imagesLoaded(  function( $images, $proper, $broken ) {

				$team_wrap.flickity({
					cellAlign: 'center',
					contain: true,
					prevNextButtons: false,
					pageDots: true,
					autoPlay: 5000,
					watchCSS: true
				});

			});//images loaded

			//Clients Section
			//Wait to images load
			$clients_wrap = $('.clients-wrap');
			$clients_wrap.imagesLoaded(  function( $images, $proper, $broken ) {

				$clients_wrap.flickity({
					cellAlign: 'center',
					contain: true,
					prevNextButtons: false,
					pageDots: false,
					autoPlay: 5000
				});

			});//images loaded



			$('.dropdown-toggle').dropdown();


			$('*[data-toggle="tooltip"]').tooltip();


			//Sidebar Menu Function
			$('#sidebar .widget ul:not(.product-categories) li ul').parent().addClass('hasChildren').append("<i class='fa fa-angle-down'></i>");
			var children;
			$("#sidebar .widget ul:not(.product-categories) li").hoverIntent(
				function () {
					children = $(this).children("ul");
					if($(children).length > 0){ $(children).stop(true, true).slideDown('fast'); }
				},
				function () {
				  $(this).children('ul').stop(true, true).slideUp(500);
				}
			);
			//Footer Menu Function
			$('footer .widget ul:not(.product-categories) li ul').parent().addClass('hasChildren').append("<i class='fa fa-angle-down'></i>");
			var children;
			$("footer .widget ul:not(.product-categories) li").hoverIntent(
				function () {
					children = $(this).children("ul");
					if($(children).length > 0){ $(children).stop(true, true).slideDown('fast'); }
				},	
				function () {
				  $(this).children('ul').stop(true, true).slideUp(500);
				}
			);

			//Front page menu
			var trigger = false;
			$("#open-full-menu").click(function(){
				if (trigger == false) {
					trigger = true;
					$('#nav').css('display', 'block');
					$(this).addClass('is-active');
				}else{
					trigger = false;
					$('#nav').css('display', 'none');
					$(this).removeClass('is-active');
				};

				$('.nav li').click(function(){
					$('#nav').css('display', 'none');
					$('#open-full-menu').removeClass('is-active');
				})

			});

			//enviando evento de clique para o Google Analytics
			$('#btn-inscrever').click(function(e){
				e.preventDefault();
				console.info("Botão Inscrever clicado");
				ga('send', 'event', 'clique', 'inscrever', {
				    hitCallback: function() {
				    	console.info('Dados enviados ao GA');
				      	window.location.href = "http://inscrevase.triggers.com.br";
				  }
				});		  		
			});
			

			//Flip gallery configs na página de mentores e iniciativas sociais
			$(".fancybox").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 300,

				closeEffect : 'elastic',
				closeSpeed  : 300,

				closeClick : true,

				mouseWheel : false,

				arrows: false,

				beforeShow: function () {
					this.title = $(this.element).attr('title');
					this.title = '<h3>' + this.title + '</h3>' + '<p>' + $(this.element).parents('.portfolio-item').find('img').attr('alt') + '</p>';
				},

				helpers : {
					title : {
						type: 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(0,0,0,0.8)'
						}
					}
				}
			});

});
