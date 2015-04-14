<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-home').slicknav({
					prependTo:'#navigation-menu-home'
				});
			});
			$(function(){
				$('#menu-ourteam').slicknav({
					prependTo:'#navigation-menu-ourteam'
				});
			});
			$(function(){
				$('#menu-patientinfo').slicknav({
					prependTo:'#navigation-menu-patientinfo'
				});
			});
			$(function(){
				$('#menu-services').slicknav({
					prependTo:'#navigation-menu-services'
				});
			});
			$(function(){
				$('#menu-patientform').slicknav({
					prependTo:'#navigation-menu-patientform'
				});
			});
			$(function(){
				$('#menu-newbuffalo').slicknav({
					prependTo:'#navigation-menu-newbuffalo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });		
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">

            <h1>Powered by <a href="http://mobilegrows.com/" rel="external">MobileGrows</a>|<a href="http://www.loreenicholasdds.com//" rel="external">DesktopSite</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/01.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/02.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/03.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/04.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/05.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>


				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Our Office  </a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Doctor  </a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Our Team  </a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Hours & Direction </a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Services  </a></div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">New Patients/Appointment  </a></div>
              </div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Insurance </a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Testimonials</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Interactive Tooth  Meridian Chart</a></div>
                    </div>

					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>
		 </div>
		  

		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page home ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="home" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-home">
						<ul id="menu-home">
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Office </a></li>
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Doctor </a></li>
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Hours & Direction </a></li>
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">New Patients/Appointment</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Grooming</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Interactive Tooth  Meridian Chart</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
						</ul>
					</section>
					<p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
                    <p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>
				</div>

			</div>	
				
				
		</div>
		
	<!-- page home ends ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		

		<!--contact form///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Office </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Doctor </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Hours & Direction </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">New Patients/Appointment</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Grooming</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Interactive Tooth  Meridian Chart</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>	
					<div>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/>
							Message:
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea>
							<input type="submit" value="Send" name="submit" class="btn">
						</form>
					</div>
				</div>
			</div>
		
		</div>

		<!--page contact ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		<!--Our Office///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="Our-Office" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-ourteam">
							<ul id="menu-ourteam">
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Office </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Doctor </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Hours & Direction </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">New Patients/Appointment</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Grooming</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Interactive Tooth  Meridian Chart</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
                    <p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>
                </div>
			</div>
		
		</div>
		<!--Our Office ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Daycare///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="Daycare" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-patientinfo">
							<ul id="menu-patientinfo">
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Office </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Doctor </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Hours & Direction </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">New Patients/Appointment</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Grooming</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Interactive Tooth  Meridian Chart</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
                    <p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>
                </div>
			</div>
		
		</div>
		<!--Daycare ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Boarding///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="Boarding" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-services">
							<ul id="menu-services">
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Office </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Doctor </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Hours & Direction </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">New Patients/Appointment</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Grooming</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Interactive Tooth  Meridian Chart</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
                    <p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>
                </div>
			</div>
		
		</div>
		<!--Boarding ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Biography///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="david" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
				<img src="img/dr_mcneil.jpg" alt="">
				<p>
				I grew up in Cincinnati, Ohio and went to college at Amherst College in Massachusetts.  I attended the University of Cincinnati College of Medicine, graduating in 1985, and then had a residency in psychiatry at Rush University Medical  Center in Chicago.  Since then I have worked in private practice.  I see patients in my offices and in a number of geriatric long-term care facilities (nursing homes).  I am on several Advisory Panels for pharmaceutical companies and have served as a spokesman for the National Institute of Mental Health.
 
				Prior to attending medical school I worked in health-care administration and management consulting.  I chose medicine because of the opportunity to serve others.
				 
				During medical school I thought of becoming a neurologist or family practitioner, but decided to go into psychiatry because I came to appreciate that emotional pain and mental dysfunction can be more debilitating and more difficult to overcome or adjust to than many physical ailments. 
				 
				I am a member of the American Society for Clinical Psychopharmacology, the Anxiety Disorders Association of America, the Obsessive-Compulsive Foundation, the Illinois Psychiatric Society, and the American Psychiatric Association.  I am board certified by the American Board of Psychiatry and Neurology.
				</p>	
					
				</div>
			</div>
		
		</div>
		<!--Biography///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Biography///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="sylvia" data-role="page" data-theme="<?php echo $theme ?>" >
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
				<img src="img/sylvia.jpg" alt="">
				<p>
				Note:<br>
				Passed in 1998, the Illinois Nurse Practitioner Act enabled Registered Nurses who have undertaken advanced specialized training to work with physicians in caring for patients.  After completing their training and passing a licensing exam, Nurse Practitioners are able to diagnose and treat patients on their own – including writing prescriptions – so long as their clinical activity is conducted in collaboration with a licensed physician.
				 
				I was born, raised, and studied in Chicago, IL.  After graduating  Magna Cum Laude with a Bachelor of Science in Nursing from Rush  University in 1998, I began my nursing career on the Geriatric Psychiatric unit at Rush University Medical Center.  I worked with older adults with psychiatric and medical illnesses. During the time that I was earning my Master of Science in Nursing  degree, I worked full-time as Nurse Coordinator  at the White Crane Wellness Center’s Adult Day Wellness Program and I was also  an evening charge nurse at a dementia care facility.  In 2003  I received  my MSN from Rush University as both a Geriatric and Adult Nurse Practitioner.
				 
				I now see patients at several long-term care facilities in the
				Chicagoland area for psychiatric evaluations and medication management.  Additionally, I co-present with Dr. McNeil to healthcare professionals on various clinical issues in geriatric psychiatry.  I provide in-service training to long-term care facility nurses on psychotropic medications, recognizing side-effects of these medications, and dealing with problem behaviors.
				 
				I am board-certified as an Adult Nurse Practitioner and a Gerontological Nurse Practitioner by the American Nurses Credentialing Center. I am licensed by the state of Illinois as an Advanced Practice Nurse. I have also been a member of Sigma Theta Tau International Honor Society of Nursing since 1998, a member of the Chicagoland Gerontological Advanced Practice Nurses since 2001, and a member of the Illinois Society of Advanced Practice Nursing since 2004.  I am fluent in the Polish language.
				</p>	
					
				</div>
			</div>
		
		</div>
		<!--Biography///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Rates///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="Rates" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-patientform">
							<ul id="menu-patientform">
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Office </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Doctor </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Hours & Direction </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">New Patients/Appointment</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Grooming</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Interactive Tooth  Meridian Chart</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
                    <p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>
				</div>
			</div>
		
		</div>
		<!--Rates ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Rules///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="Rules" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-newbuffalo">
							<ul id="menu-newbuffalo">
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Office </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Doctor </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Hours & Direction </a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">New Patients/Appointment</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Insurance</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Testimonials</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Grooming</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Interactive Tooth  Meridian Chart</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
                    <p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>
				</div>
			</div>
		
		</div>
		<!--rules ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" >		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
		</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" >
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////-->
	
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		
	</body>
</html>
