<?php
session_start();
require ('db.php');

$select= "SELECT * FROM single_user";
$select_result= mysqli_query($db, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>DIU Defense</title>

    <!-- STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- /STYLES -->

</head>

<body>

    <!-- WRAPPER ALL -->
    <div class="wrapper_all">

        <div id="popup_blog">
            <div class="container">
                <div class="inner_popup scrollable"></div>
            </div>
            <span class="close"><a href="#"></a></span>
        </div>

        <!-- PRELOADER -->
        <div class="preloader">
            <div class="spinner_wrap">
                <div class="spinner"></div>
            </div>
        </div>
        <!-- /PRELOADER -->

        <!-- MOBILE MENU -->
        <div class="mobile_header_wrap">
            <div class="main_wrap">
                <div class="logo">
                    <img src="img/logo/Logo.png" alt="" />
                </div>
                <div class="trigger">
                    <div class="hamburger hamburger--collapse-r">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile_menu_wrap">
                <div class="mob_menu">
                    <ul class="anchor_nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#instructions">instructions</a></li>
                        <li><a href="#TitleDefense">Title Defense</a></li>
                        <li><a href="#Supervisor">Supervisor</a></li>
                        <li><a href="#Notice">Notice</a></li>
                        <li><a href="#Sign in">Sign in</a></li>
												<li><a href="logout.php">Log out</a></li>
												<li class="text-white">Admin login <button type="button" class="btn btn-secondary btn-sm"><a href="login2.php">login</a></button></li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- /MOBILE MENU -->

        <!-- CONTENT -->
        <div class="content">

            <!-- LEFTPART -->
            <div class="leftpart_wrap">
                <div class="leftpart_inner">
                    <div class="logo_wrap">
                        <a href="#"><img src="img/logo/Logo.png" alt="" /></a>
                    </div>
                    <div class="menu_list_wrap">
                        <ul class="anchor_nav">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#instructions">instructions</a></li>
                            <li><a href="#TitleDefense">Title Defense</a></li>
                            <li><a href="#Supervisor">Supervisor</a></li>
                            <li><a href="#Notice">Notice</a></li>
                            <li><a href="#Signin">Sign in</a></li>
														<li><a href="logout.php">Log out</a></li>
														<li class="text-white">Admin login <button type="button" class="btn btn-secondary btn-sm"><a href="login2.php">login</a></button></li>

                        </ul>
                    </div>
                    <div class="leftpart_bottom">
                        <!-- <div class="social_wrap">
						<ul>
							<li><a href="#"><i class="xcon-facebook"></i></a></li>
							<li><a href="#"><i class="xcon-twitter"></i></a></li>
							<li><a href="#"><i class="xcon-linkedin"></i></a></li>
							<li><a href="#"><i class="xcon-instagram"></i></a></li>
							<li><a href="#"><i class="xcon-behance"></i></a></li>
						</ul>
					</div> -->
                    </div>
                    <a class="resize" href="#"><i class="xcon-angle-left"></i></a>
                </div>
            </div>
            <!-- /LEFTPART -->

            <!-- RIGHTPART -->
            <div class="rightpart">
                <div class="rightpart_inner">
                    <div class="section" id="home">
                        <div class="hero_header_wrap">
                            <div class="universal_box_wrap">
                                <div class="bg_wrap">
                                    <div class="overlay_image hero jarallax" data-speed="0.1"></div>
                                    <div class="overlay_color hero"></div>
                                </div>
                                <div class="content hero">
                                    <div class="inner_content">
                                        <div class="image_wrap">
                                            <img src="img/hero/img.jpg" alt="" />
                                        </div>
                                        <div class="name_holder">
                                            <h3>DIU <span>Defense</span></h3>
                                        </div>
                                        <div class="text_typing">
                                            <p>Final Year <span class="animation_text_word"></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="arrow_wrap bounce anchor">
                                    <a href="#instructions"><i class="xcon-angle-double-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- instructions -->
                    <div class="section relative" id="instructions">
                        <div class="about_wrapper_all">
                            <div class="container">
                                <div class="title_holder">
                                    <h3>About DIU Defense</h3>
                                    <span>Welcome to the Official Site of Project/Internship Committee of CSE, DIU</span>
                                </div>
                                <div class="about_wrap">
                                    <div class="author_wrap">
                                        <div class="leftbox">
                                            <div class="about_image_wrap parallax" data-relative-input="true">
                                                <div class="image layer" data-depth="0.1">
                                                    <img src="img/instructions/550x640.jpg" alt="" />
                                                    <div class="inner" data-img-url="img/instructions/1.jpg"></div>
                                                </div>
                                                <div class="border layer" data-depth="0.2">
                                                    <img src="img/instructions/550x640.jpg" alt="" />
                                                    <div class="inner"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="rightbox">
                                            <div class="mini_title_holder">
                                                <h4>Final Year <span class="animation_text_word"></span></h4>
                                            </div>
                                            <div class="definition">
                                                <p>Daffodil International University (DIU) is one of the renowned universities of Bangladesh. Department of Computer Science and Engineering (CSE) is one of the most important organ of this university. All the final year students have to do a mandatory year-long development project, research project or internship. For the ease of students to find necessary information about Final Year Project or Internship, this repository is created.

                                                    <br><br>
                                                    <p><strong>
                                                            <font size="3.5">About the Project/Internship Committee :</font>
                                                        </strong></p>
                                                    Project/Internship Committee is a dedicated committee accompanied by four faculty members from CSE department. This committee actively performs starting from the title defense, carried through the follow-ups till the Final Defense. The each and every tasks performed by the committee is concerned and advised by the Honorable Head of the Department, Prof. Dr. Syed Akhter Hossain. The contact information about the members of this committee could be found in the Contact Information tab. In the Department of Computer Science and Engineering (CSE) of Daffodil International University (DIU), final year students are involved in development projects, research projects or internship works. There is no bindings for students so far in choosing any of the above mentioned area to complete the six credit requirements.
                                                </p>
                                            </div>
                                            <!-- <div class="about_short_contact_wrap">
											<ul>
												<li>
													<span><label>Birthday:</label> 01.07.1990</span>
												</li>
												<li>
													<span><label>Age:</label> 28</span>
												</li>
												<li>
													<span><label>City:</label> New York, USA</span>
												</li>
												<li>
													<span><label>Interests:</label> Soccer, UFC</span>
												</li>
												<li>
													<span><label>Study:</label> Chicago University</span>
												</li>
												<li>
													<span><label>Degree:</label> Master</span>
												</li>
												<li>
													<span><label>Website:</label> <a href="#">www.mywebsite.com</a></span>
												</li>
												<li>
													<span><label>Mail:</label> <a href="mailto:example@gmail.com">mymail&#64;gmail.com</a></span>
												</li>
												<li>
													<span><label>Phone:</label> <a href="#">+77 022 177 05 05</a></span>
												</li>
												<li>
													<span><label>Twitter:</label> <a href="#">&#64;myusername</a></span>
												</li>
											</ul>
										</div> -->
                                            <div class="buttons_wrap">
                                                <ul>
                                                    <li>
                                                        <a href="https://sites.google.com/daffodilvarsity.edu.bd/picsediu/downloads"><span>Download Required Info</span></a>
                                                    </li>
                                                    <!-- <li class="anchor">
													<a href="#Sign in"><span>Send Message</span></a>
												</li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SKILLS -->
                    <div class="section">
                        <div class="skills_wrap">
                            <div class="container">
                                <div class="inner_wrap">
                                    <div class="leftbox">
                                        <div class="mini_title_holder">
                                            <h4><strong>## Semester wise PROJECT timeline</strong></h4>
                                        </div>
                                        <p>
                                            <font size="4"><strong> # </strong> For <strong>Day shift students</strong>, projects or internship will continue starting from L3-T3 and end after completion of L4-T4, without exceptions.<br><br> <strong> # </strong> For <strong>Evening shift students</strong>, projects or internship will continue starting from 7th Semester and end after completion of 9th Semester, without exceptions.
                                                <br><br>Therefore, if you are a L3-T2 (Day) or 6th Semester (Evening) student, start planning for your project ideas, team members and so on.</font>
                                        </p>
                                    </div>
                                    <div class="rightbox">
                                        <p> <strong>For Day Shift</strong> </p>
                                        <img src="img/instructions/111.jpg" alt="" /><br><br>
                                        <p> <strong>For Evening Shift</strong> </p>
                                        <img src="img/instructions/222.jpg" alt="" /><br>

                                        <!-- <div class="progress_bar_wrap_total">
										<div class="progress_wrap" data-size="small" data-round="c" data-strip="off">
											<div class="progress" data-value="95" data-color="#000">
												<span><span class="label">Wordpress - <span class="experience">5 years of experience</span></span><span class="number">95%</span></span>
												<div class="bar_bg"><div class="bar_wrap"><div class="bar"></div></div></div>
											</div>
											<div class="progress" data-value="85" data-color="#000">
												<span><span class="label">Css - <span class="experience">3 years of experience</span></span><span class="number">85%</span></span>
												<div class="bar_bg"><div class="bar_wrap"><div class="bar"></div></div></div>
											</div>
											<div class="progress" data-value="75" data-color="#000">
												<span><span class="label">HTML - <span class="experience">4 years of experience</span></span><span class="number">75%</span></span>
												<div class="bar_bg"><div class="bar_wrap"><div class="bar"></div></div></div>
											</div>
											<div class="progress" data-value="90" data-color="#000">
												<span><span class="label">After Effect - <span class="experience">6 years of experience</span></span><span class="number">90%</span></span>
												<div class="bar_bg"><div class="bar_wrap"><div class="bar"></div></div></div>
											</div>
										</div>
									</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /SKILLS -->





                    <!-- NEWS -->
                    <div class="section" id="TitleDefense">
                        <div class="news_wrap">
                            <div class="container">
                                <div class="title_holder news">
                                    <h3 style="color:black;">Title Defense</h3>
                                    <span>Check out Title Defense Information</span>
                                </div>
                                <div class="list_wrap blog_list">
                                    <ul class="total">
                                        <li class="wow fadeInUp" data-wow-duration="1.2s">
                                            <div class="inner_list">
                                                <div class="image_wrap">
                                                    <img class="small" src="img/blog/500x350.jpg" alt="" />
                                                    <img class="big" src="img/blog/1170x450.jpg" alt="" />
                                                    <div class="news_image" data-url="img/blog/1.jpg"></div>
                                                    <a class="link_news" href="index.php
														"></a>
                                                </div>
                                                <div class="definitions_wrap">
                                                    <div class="date_wrap">
                                                        <p>Title defense one stop information<a href="index.php
															">DIU</a></p>
                                                    </div>
                                                    <div class="title_holder">
                                                        <h3><a href="index.php
															">Title Defense Registration Instructions</a></h3>
                                                    </div>
                                                    <div class="definition">
                                                        <p>Before starting your registration for Title Defense of current semester, check if you have all the necessary information. The required information for ...</p>
                                                    </div>
                                                    <div class="full_def">
                                                        <p><strong>
                                                                <font size="4">Before starting your registration for Title Defense of current semester, check if you have all the necessary information. The required information for successful registration you will need:</font>
                                                            </strong>
                                                        </p> <br><br>
                                                        <p>
                                                            <font size="4">
                                                                <strong>1.</strong> Your team information (Team members ID, name, DIU email address, Phone Number)<br><br>
                                                                <strong>2.</strong> Your tentative title<br><br>
                                                                <strong>3.</strong> Your preferred choice (Development Project/ Research Project/ Internship)<br><br>
                                                                <strong>4.</strong> Your preferred area of interest (In development projects: Andriod, iOS Mobile Application development, Web Solutions, JAVA Applications, Game Development etc. In research projects: Data Mining, Big Data, Could Computing, Human Computer Interaction, Natural Language Processing, Machine Learning, Internet of Things (IoT), Networking, Robotics, Bioinformatics, Software Engineering, Embedded Systems, Image Processing, Pattern Recognition etc.)<br><br>
                                                                <strong>5.</strong> Your preferred choice of Supervisors. You can give choice of maximum three (3) supervisors. Make sure your area of interest matched with your supervisors area of interest. <br> <br>
                                                            </font>
                                                        </p>
                                                        <p> <strong>Your final year project or internship starts with the mandatory Title Defense. Title defense is the defense where each team have to present their project idea.</strong> <br><br><br>
                                                            <font size="5" color="red">Title Defense Presentation focuses on:</font> <br><br>
                                                            <strong>1.</strong> Project/Internship Title,<br><br>
                                                            <strong>2.</strong> Project Type (Development, Research or Internship),<br><br>
                                                            <strong>3.</strong> Motivation of the project,<br><br>
                                                            <strong>4.</strong> Objectives of the project and<br><br>
                                                            <strong>5.</strong> Expected Outcome from this proposed project.<br><br>
                                                            <p>For Title Defense presentation, you have to create a Google Site for your team. The Google Site must have the above mentioned topics including your team information (Team Name, Members Name, ID) and Supervisor, Co-supervisors Information (Name and Designation). <br>For Title Defense presentation, you have to create a Google Site for your team. The Google Site must have the above mentioned topics including your team information (Team Name, Members Name, ID) and Supervisor, Co-supervisors Information (Name and Designation). </p>

                                                        </p>
                                                        <a href="https://sites.google.com/daffodilvarsity.edu.bd/picsediu/supervisors-den?authuser=0" class="btn btn-info" role="button">Click here for current Supervisor</a>
                                                    </div>

                                                    <div class="read_more">
                                                        <a href="#"><span>Read More</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <div class="inner_list">
                                                <div class="image_wrap">
                                                    <img class="small" src="img/blog/500x350.jpg" alt="" />
                                                    <img class="big" src="img/blog/1170x450.jpg" alt="" />
                                                    <div class="news_image" data-url="img/blog/2.jpg"></div>
                                                    <a class="link_news" href="index.php"></a>
                                                </div>
                                                <div class="definitions_wrap">
                                                    <div class="date_wrap">
                                                        <p>Title Defense Registration Process, <a href="index.php">DIU</a></p>
                                                    </div>
                                                    <div class="title_holder">
                                                        <h3><a href="index.php">Title Defense Registration Process</a></h3>
                                                    </div>
                                                    <div class="definition">
                                                        <p>Before starting your registration for Title Defense of current semester, check if you have all the necessary information. The required information for ...</p>
                                                    </div>
                                                    <div class="full_def">
                                                        <p><strong>
                                                                <font size="4">Only one member from each team should fill up this form. Multiple submission are strictly not encouraged.</font>
                                                            </strong>
                                                        </p> <br><br>
                                                        <p>
                                                            <font size="4">
                                                                <strong>Firstly</strong>, You have to put your team information (No of Students, Shift and Choice of Project/Internship). <strong>Secondly</strong>, you have to provide all the members Student ID, Name, DIU Email Address and Phone Number. Thirdly, you have to provide a tentative title and your area of interest. The "Tentative Title" should be understandable with the "Area of Interest". If you don't find your area in the list choose "Others" option and name the area. <strong>Finally</strong>, you have to provide three choices of your preferred Supervisor.<strong> It is not guaranteed that your first choice of supervisor will be assigned.</strong> Assigning supervisor is subject to the rules and regulations set by the project/internship committee.<br><br>
                                                                <p>
                                                                    <font size="5" color="red"> Stepping to the registration : </font> <br><br>
                                                                    <font size="4"><strong>First Step:</strong></font><br>
                                                                    <strong>1.</strong> Choose No of Students in your team. According to the rules, maximum 3 member teams are allowed. (If you want to make a team having 4 members you have to proceed with a "Formal Application to the Head of The Department" and have to fill up a different form which is available in CSE department. If you have an approved application (approved by Head of the Department), then you don't have to submit this registration.<br><br>


                                                                    <strong>2.</strong>Choose your shift (Day or Evening). Day shift Students cannot merge a team with Evening Shift students and vice versa.<br><br>
                                                                    <strong>3.</strong> Choose your choice (Project or Internship). Choosing "Project" will include development project and research project both.<br><br>
                                                                    <font size="4"><strong>Second Step:</strong></font><br>
                                                                    <strong>1.</strong>Provide your team members Student ID, Name, DIU Email Address and Phone Number. All the fields are mandatory to be filled.<br><br>
                                                                    <font size="4"><strong>Third Step:</strong></font><br>
                                                                    <strong>1.</strong>Provide a Tentative Title and Area of Interest. You can change your tentative title after assigning a supervisor consulting with him/her, But you cannot change your area of interest after assigning a supervisor to your team.<br><br>
                                                                    <font size="4"><strong>fourth Step:</strong></font><br>
                                                                    <strong>1.</strong>Provide Three (3) supervisors name and Initial. Select your preferred supervisor initial from the drop-down list. Choices are based on your priority.<br><br>
                                                                    <a href="https://sites.google.com/daffodilvarsity.edu.bd/picsediu/supervisors-den?authuser=0" class="btn btn-info" role="button">Click here for current Supervisor list</a>


                                                            </font>
                                                        </p>
                                                    </div>

                                                    <div class="read_more">
                                                        <a href="#"><span>Read More</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.4s">
                                            <div class="inner_list">
                                                <div class="image_wrap">
                                                    <img class="small" src="img/blog/500x350.jpg" alt="" />
                                                    <img class="big" src="img/blog/1170x450.jpg" alt="" />
                                                    <div class="news_image" data-url="img/blog/3.jpg"></div>
                                                    <a class="link_news" href="index.php"></a>
                                                </div>
                                                <div class="definitions_wrap">
                                                    <div class="date_wrap">
                                                        <p>Title Defense Registration<br><a href="index.php">DIU</a></p>
                                                    </div>
                                                    <div class="title_holder">
                                                        <h3><a href="index.php">Title Defense Registration,DIU</a></h3>
                                                    </div>
                                                    <div class="definition">
                                                        <!-- <p>Having a solid, trusted brand is important for your company to thrive. If your target audience does not know or trust ...</p> -->
                                                    </div>
                                                    <div class="full_def">
                                                        <!-- <p>Having a solid, trusted brand is important for your company to thrive. If your target audience does not know or trust your brand, how will you ever increase your customer base and sales? Here are six innovative strategies you can use to increase brand awareness and help your business thrive. Inviting influencers into your niche is a great way to increase brand awareness and hopefully drive sales. When influencers have an established audience that knows and trusts them, once they mention your product(s) and discuss your brand in their content, those mentions will expand your reach and increase peoples awareness of your product. Ikonick is a perfect example of a company that works directly with influencers: It sells canvas art for your home and office. The way Ikonick uses influencers involves providing them with art and having those influencers pose with the art, then share the photos on social media. "Our relationships are an important part of our business,"  co-founder Mark Mastrandrea told me. "Our relationships make up our community, and the community is how our brand grows." Ikonick uses all types of influencers, from Instagram photographers to celebrities. The companys social strategy has enabled it to scale and grow exponentially because its influencers become part of its sales team -- even ambassadors. The relationship is mutually rewarding, Mastrandrea said. Companies can also offer to sponsor influencers at an event (if they do that sort of thing) and even use them as spokespersons for their brand and product(s). A lot of CrossFit-related companies do this, including Rogue Fitness, which sponsors certain athletes with clothing. The athlete then becomes a walking billboard for the company. Have you ever received an order that came in branded packaging? Rather than see it as just another shipment, perhaps you felt that that that special branding made the package seem like a gift. The team knows that the product experience doesn't commence at first use, but rather at the unboxing stage. How companies present their brand, and the story they tell through their design and graphics, can create an emotional connection with the customer that may last even longer than the product itself.</p> -->
                                                    </div>
                                                    <div class="wrap">
                                                        <a href="register.php"><button type="button" class="btn btn-outline-info">Click here for registration</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /NEWS -->



                    <!-- TESTIMONIALS -->
                    <div class="section" id="testimonials">
                        <div class="testimonials_wrapper_all">
                            <div class="universal_box_wrap">
                                <div class="bg_wrap">
                                    <div class="overlay_image testimonial jarallax" data-speed="0"></div>
                                    <div class="overlay_color testimonial"></div>
                                </div>
                                <div class="content testimonial">
                                    <div class="testimonial_wrap">
                                        <div class="container">
                                            <div class="carousel_wrap">
                                                <ul class="owl-carousel">
                                                    <li class="item">
                                                        <div class="inner">
                                                            <div class="quotebox_wrap">
                                                                <i class="xcon-quote-left"></i>
                                                            </div>
                                                            <div class="definitions_wrap">
                                                                <p style="color:orange">“Pre-Phase I”</p>
                                                            </div>
                                                            <div class="name_holder">
                                                                <p>As mentioned above the main task as a final year student is to do registration properly and attend the title defense. For day-shift students (L3-T3), they have to attend the title defense in pre-phase I. For evening-shift students (7th Semester), they have to attend the title defense on their pre-phase as they have only one semester for pre-phase.
                                                                    <br><br>
                                                                    <font size="5" color="red"> Steps to attend the Title Defense : </font> <br><br>
                                                                    <strong>1.</strong> Complete Title Defense Registration Online.<br><br>


                                                                    <strong>2.</strong> A supervisor and a co-supervisor will be assigned by the project/internship committee<br><br>
                                                                    <strong>3.</strong> Contact with your supervisor and consult about your project idea and preparation of title defense<br><br>
                                                                    <strong>4.</strong> Attend the Title Defense.<br><br>
                                                                    <strong>5.</strong> Get the result of Title Defense from your supervisor.<br><br>
                                                                </p>
                                                                <p>For each above mentioned steps, you will get formal emails from project/internship committee. If you are not getting any email, check if your email is properly added in the studentcse@diu.edu.bd, Contact CSE office for further query regarding email issues.<br>After successful completion of title defense, in pre-phase I you have to attend another follow-up presentation in front of your supervisor. After title defense all the follow-ups until the phase-II will be managed and instructed by supervisors. </p> <br>
                                                            </div>
                                                            <div class="definitions_wrap">
                                                                <p style="color:orange">“Pre-Phase II”</p>
                                                            </div>
                                                            <div class="name_holder">
                                                                <p>Pre-phase II is only for day-shift students (L4-T1). In this semester you have to face two follow-ups (one before midterm and one before semester final) and show your progress in project. All the follow-ups are managed and instructed by supervisors. Contact your supervisor to know the date of follow-ups. <br> Project/internship committee will circulate notice emails to each supervisor and project teams about the follow-up dates. <br> <br>
                                                                    <p style="color:lightblue"> <strong> Follow-ups </strong></p> <br>
                                                                    <p>Follow-ups are for demonstrating progress done in the project so far. Both development work and report completion progress should be presented in front of supervisor.</p>
                                                                    <br><br>

                                                            </div>
                                                            <div class="definitions_wrap">
                                                                <p style="color:orange">“Phase I”</p>
                                                            </div>
                                                            <div class="name_holder">
                                                                <p>In phase I, both day-shift (L4-T2) and evening-shift (8th Semester) students have to be involved in final year project. In this semester you have to complete the following tasks.<br> <br>
                                                                    <strong>Follow-ups</strong>
                                                                    Follow-ups are for demonstrating progress done in the project so far. Both development work and report completion progress should be presented in front of supervisor.
                                                                    <br><br>
                                                                    <strong>1.</strong> Follow-Up 1<br><br>
                                                                    <strong>2.</strong> Follow-Up 2<br><br>
                                                                    <p><strong>Follow-ups will be completed as instructed by supervisor in the same fashion it is done in pre-phases.</strong></p> <br><br>
                                                            </div>
                                                            <div class="definitions_wrap">
                                                                <p style="color:orange">“Phase II”</p>
                                                            </div>
                                                            <div class="name_holder">
                                                                <p>In phase II, both day-shift (L4-T3) and evening-shift (9th Semester) students have to be involved in final year project. In this semester you have to complete the following tasks.<br> <br>
                                                                    <strong>Follow-ups</strong>
                                                                    Follow-ups are for demonstrating progress done in the project so far. Both development work and report completion progress should be presented in front of supervisor.
                                                                    <br><br>
                                                                    <strong>1.</strong> Follow-Up 1<br><br>
                                                                    <strong>2.</strong> Pre-defense<br><br>
                                                                    <p><strong>Follow-up 1 will be completed as instructed by supervisor in the same fashion it is done in previous phases. There will be no second follow-up in phase II, but yo have to face the pre-defense.</strong></p> <br>
                                                            </div>
                                                            <!-- pre-defense start -->
                                                            <div class="definitions_wrap">
                                                                <p style="color:orange">“PRE-DEFENSE”</p>
                                                            </div>
                                                            <div class="name_holder">
                                                                <p>Pre-defense is considered to be trail of final defense and all the senior faculty members are considered to be the judge of pre-defense. Pre-defense presentation is a pre-requisite to face the final defense, thus it is mandatory. For pre-defense you have to complete the following task.
                                                                    <br><br>
                                                                    <font size="5" color="red"> Steps of to attend Pre-defense : </font> <br><br>
                                                                    <strong>1.</strong> Complete all the follow-ups in previous phases.<br><br>
                                                                    <strong>2.</strong> Consult with the supervisor to send your team information to the project/internship committee within the deadline.<br><br>
                                                                    <strong>3.</strong> Get instructions from project/internship committee through email.<br><br>
                                                                    <strong>4.</strong> Attend the pre-defense presentation with your project Google Site, printed report, screen-cast videos and other necessary documents as instructed in the email.<br><br>
                                                                    <strong>5.</strong> Get the result of Pre-defense from your supervisor.<br><br>
                                                                </p>
                                                                <p>Pre-defense are usually arranged before semester final of each semester. For notifications about project pre-defense find notices in Notice Board.</p> <br>
                                                            </div>
                                                            <div class="definitions_wrap">
                                                                <p style="color:orange">“FINAL-DEFENSE”</p>
                                                            </div>
                                                            <div class="name_holder">
                                                                <p>Final defense is the last and final presentation you have to face to defend your final year project, research or internship works. This is called defense as you have to defend each and every issues (requirement analysis, project planning, implementations, testing, validation, verification, version control, report writing, synchronization between development work and report). Usually the most senior faculties are considered to become the judge of final defense and additionally there must be one or more external faculties from other universities.
                                                                    <br><br>
                                                                    <font size="5" color="red"> Steps to attend the Final Defense : </font> <br><br>
                                                                    <strong>1.</strong> Attend the pre-defense successfully.<br><br>
                                                                    <strong>2.</strong> Consult with supervisor and do modifications as mentioned by the pre-defense judges.<br><br>
                                                                    <strong>3.</strong> Get instructions from project/internship committee through email.<br><br>
                                                                    <strong>4.</strong> Attend the Final Defense presentation with your project Google Site, printed report, screen-cast videos and other necessary documents as instructed in the email.<br><br>
                                                                    <strong>5.</strong> Get the result from the Exam Controller office.<br><br>
                                                                </p>
                                                                <p>Pre-defense are usually arranged before semester final of each semester. For notifications about project pre-defense find notices in Notice Board.</p> <br>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="inner">
                                                            <div class="quotebox_wrap">
                                                                <i class="xcon-quote-left"></i>
                                                            </div>
                                                            <div class="definitions_wrap">
                                                                <p>“Add text 2”</p>
                                                            </div>
                                                            <div class="name_holder">
                                                                <p>(Text from Manik Anowar)</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="inner">
                                                            <div class="quotebox_wrap">
                                                                <i class="xcon-quote-left"></i>
                                                            </div>
                                                            <div class="definitions_wrap">
                                                                <p>“Add text 3”</p>
                                                            </div>
                                                            <div class="name_holder">
                                                                <p>(Text from Manik Anowar)</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /TESTIMONIALS -->

                    <!-- COUNTERBOX -->
                    <div class="section">
                        <div class="container">
                            <div class="counter_wrap" data-col="4" data-delay="300">
                                <ul class="counter_list miniboxes">
                                    <li>
                                        <div class="inner minibox">
                                            <h3><span><span class="counter" data-from="0" data-to="2222" data-speed="3000">0</span></span></h3>
                                            <span>Projects Completed</span>
                                        </div>
                                    </li>
                                    <!-- <li>
									<div class="inner minibox">
										<h3><span><span class="counter" data-from="0" data-to="333" data-speed="3000">0</span>K</span></h3>
										<span>Lines of Code</span>
									</div>
								</li>
								<li>
									<div class="inner minibox">
										<h3><span><span class="counter" data-from="0" data-to="8888" data-speed="3000">0</span></span></h3>
										<span>Happy Clients</span>
									</div>
								</li>
								<li>
									<div class="inner minibox">
										<h3><span><span class="counter" data-from="0" data-to="777" data-speed="3000">0</span>+</span></h3>
										<span>My Awwwards</span>
									</div>
								</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /COUNTERBOX -->

                    <!-- Pre Defense -->


                    <!-- Supervisor -->
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                    <div class="section" id="Supervisor">
                        <div class="services_wrap">
                            <div class="container">
                                <div class="title_holder">
                                    <h3>Supervisor's</h3>
                                    <span>Who would be my Supervisor?</span>
                                    <p class="font-weight-light">A list of faculty members of CSE department who will be assigned as supervisor for final year project or internships is approved by honorable head of the department and here is the list.
                                        Find supervisors area of interest from their faculty profile and choose your ideal supervisor.</p>
                                </div>
                                <!-- <div class="rightbox my-4">

                                    <p> <strong> Click for All Supervisor List</strong>
                                        <a href="https://drive.google.com/file/d/1HS16NxR7E2vzoqAUtapCAkjN3RSjdBga/view">
                                            <button type="button" class="btn btn-outline-info">Supervisor's List</button>
                                    </p>
                                    </a>
                                </div> -->
                                <!-- <?php
                                if(isset($_SESSION['user_type'])){
                                ?>
                                <div class="rightbox my-4">

                                    <p> <strong> View Progress</strong>
                                        <a href="single_users.php">
                                            <button type="button" class="btn btn-outline-info">View</button>
                                    </p>
                                    </a>
                                </div>
                            <?php } ?> -->

																<!-- <?php
                                if(isset($_SESSION['supervisor_id'])){
                                ?>
                                <div class="rightbox my-4">

                                    <p> <strong> View Users</strong>
                                        <a href="users.php">
                                            <button type="button" class="btn btn-outline-info">View Users</button>
                                    </p>
                                    </a>
                                </div>
                            <?php } ?> -->

                            <!-- <?php
                            if(isset($_SESSION['supervisor_id'])){
                             ?>
                                <div class="rightbox my-4">

                                    <p> <strong> Add Supervisor</strong>
                                        <a href="Supervisor_view.php">
                                            <button type="button" class="btn btn-outline-info">Add</button>
                                    </p>
                                    </a>
                                </div>
                            <?php } ?> -->
                                <?php
                                if(!isset($_SESSION['login'])){
                                 ?>

                                <div class="rightbox my-4">

                                    <p> <strong> Login</strong>
                                        <a href="login.php">
                                            <button type="button" class="btn btn-outline-info">User/Supervisor</button>
                                    </p>
                                    </a>
                                </div>
                            <?php } ?>
                                <div class="row mix">
                                    <div class="col-lg-12 mb-2">
                                        <div class="p-3 mb-2 text-center text-white" style="background: #041230">
                                            <h2 class="mb-3 mt-3"><strong>Category wise Supervisor list</strong></h2>
                                            <div class="mixit-button">
                                              <div class="btn">

                                                  <button class="mb-1" style="border:none;padding: 5px;border-radius: 5px;" type="button" data-filter="all"> <span class="p-1">All</span></button>
                                                  <button class="mb-1" style="border:none;padding: 5px;border-radius: 5px;" type="button" data-filter=".machine_learning"><img class="svg mb-1" src="img/svg/camera-diaphragm.svg" alt="" /> <span class="p-1">Machine Learning & Deep Learning</span> </button>
                                                  <button type="button" style="border:none;padding: 5px;border-radius: 5px;" data-filter=".web_design"><img class="svg mb-1" src="img/svg/new-tab.svg" alt="" /> <span class="p-1">Web Design</span></button>
                                                  <button class="mb-1" style="border:none;padding: 5px;border-radius: 5px;" type="button" data-filter=".image_processing"><img class="svg mb-1" src="img/svg/layers.svg" alt="" /> <span class="p-1">Image Processing & Signal Processing</span> </button>
                                                  <button class="mb-1" style="border:none;padding: 5px;border-radius: 5px;" type="button" data-filter=".computer_vision"><img class="svg mb-1" src="img/svg/share.svg" alt="" /> <span class="p-1">Computer Vision</span></button>
                                                  <button class="mb-1" style="border:none;padding: 5px;border-radius: 5px;" type="button" data-filter=".artificial_intellegence"><img class="svg mb-1" src="img/svg/adobe-illustrator.svg" alt="" /> <span class="p-1">Artificial Intelligence(AI)</span> </button>
                                                  <button class="mb-1" style="border:none;padding: 5px;border-radius: 5px;" type="button" data-filter=".argumented_reality"><img class="svg mb-1" src="img/svg/seo-performance-marketing-graphic.svg" alt="" /> <span class="p-1">Argumented Reality(AR) & Virtual Reality(VR)</span></button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php foreach ($select_result as $value) {?>

                                    <div class="ml-4 mb-2 mix <?php echo $value['field'];?> card item" style="width: 18rem;" data-order="1">
                                        <img class="card-img-top" src="uploads/users/<?php echo $value['photo'];?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"> <?php echo $value['name'] ?> </h5>
                                            <h6 class="card-title"><?php echo $value['email'] ?> </h6>
                                            <h6 class="card-title"><?php echo $value['employee_ID'] ?> </h6>
                                            <h6 class="card-title"><?php echo $value['field'] ?> </h6>
                                            <h6 class="card-title"><?php echo $value['phone'] ?> </h6>

                                            <!-- <a href="single_superviosr.php?id=<?php echo $value['id'];?>" class="btn btn-primary">VIEW</a> -->
                                        </div>
                                    </div>
                                      <?php    } ?>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- /Supervisor -->

                        <!-- NEWS -->
                        <div class="section" id="Notice">
                            <div class="news_wrap">
                                <div class="container">
                                    <div class="title_holder news">
                                        <h3 style="color:black;">Notice</h3>
                                        <span>Check out our latest Notice</span>
                                    </div>
                                    <div class="list_wrap blog_list">
                                        <ul class="total">
                                            <li class="wow fadeInUp" data-wow-duration="1.2s">
                                                <div class="inner_list">
                                                    <div class="image_wrap">
                                                        <img class="small" src="img/blog/500x350.jpg" alt="" />
                                                        <img class="big" src="img/blog/1170x450.jpg" alt="" />
                                                        <div class="news_image" data-url="img/blog/1.jpg"></div>
                                                        <a class="link_news" href="index.php
												"></a>
                                                    </div>
                                                    <div class="definitions_wrap">
                                                        <div class="date_wrap">
                                                            <p>January 22, 2018 <a href="index.php
													">Logos</a></p>
                                                        </div>
                                                        <div class="title_holder">
                                                            <h3><a href="index.php
													">Career Development Center, DIU</a></h3>
                                                        </div>
                                                        <div class="definition">
                                                            <p>If you are reading this, you probably plan to start a small business or a side hustle very soon. And you probably have ...</p>
                                                        </div>
                                                        <div class="full_def">
                                                            <p>If you are reading this, you probably plan to start a small business or a side hustle very soon. And you probably have a couple of questions running through your mind like: Do I really need that logo? Or Yep, I really need one. But how can I get it on a budget? This post was created to help you bring system out of confusion so you can get the best out of your business and enter the market full force. First of all, yes, you do need a logo, and it does not really matter how big or small your business is. Even if you making a craft soap and sell it to your relatives and friends, you still need a logo. If you plan to monetize an idea, you need a logo for it. Otherwise your work, your efforts, your image and your future brand belong to everyone, like grapes at a grocery store. But most importantly, the final design you come up with should be effective enough to promote your business and get you that place in the sun. Here are a few tips that will make the whole process easier and more fun. The first step to a killer logo is an idea. So start feeding your brain with new impressions and experiences. Use anything that works for you. Try hiking and gain inspiration from nature. Or visit an art gallery. Meditation, photography, action sports In a nutshell, any kind of activity that fills you up with energy and joy may help you get that revolutionary idea. It is always useful to browse the websites (or social media profiles) of your potential rivals to not only judge their logos but to practice analysis. Do you find your competitor logo effective or attractive? Try to think of the ways it helps the rival company to be profitable. Is there something you would change? Why? All of these questions can really help you to improve your own perception of your brand as well as the future marketing strategy. Find out what the strengths and weaknesses of your rivals are and benefit from that knowledge. When it comes to logo design, there are and always will be several safe choices like bold and elegant black and white logos or serif font wordmarks. But if you are striving to get that killer logo, do not be afraid to cross the line and try something rebellious. Go out there and get to know the latest design trends. For example, you may experiment with the bold colors like Ultra Violet, which is the Pantone color of the year, by the way. Or play with the typography and color gradients.</p>
                                                        </div>
                                                        <div class="popup_share_wrap">
                                                            <ul>
                                                                <li><a href="#">Facebook</a></li>
                                                                <li><a href="#">Twitter</a></li>
                                                                <li><a href="#">Linkedin</a></li>
                                                                <li><a href="#">Behance</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="read_more">
                                                            <a href="#"><span>Read More</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                                <div class="inner_list">
                                                    <div class="image_wrap">
                                                        <img class="small" src="img/blog/500x350.jpg" alt="" />
                                                        <img class="big" src="img/blog/1170x450.jpg" alt="" />
                                                        <div class="news_image" data-url="img/blog/2.jpg"></div>
                                                        <a class="link_news" href="index.php"></a>
                                                    </div>
                                                    <div class="definitions_wrap">
                                                        <div class="date_wrap">
                                                            <p>February 07, 2018 <a href="index.php">Illustrator</a></p>
                                                        </div>
                                                        <div class="title_holder">
                                                            <h3><a href="index.php">How to Autumn Clean Your Design Career?</a></h3>
                                                        </div>
                                                        <div class="definition">
                                                            <p>Spring cleaning is not just about washing windows and clearing away cobwebs. Your design career also needs a thorough ...</p>
                                                        </div>
                                                        <div class="full_def">
                                                            <p>Whether you are a freelancer or an in-house designer, or at a studio or agency, you will probably have to rebrand at the and Whether you are a freelancer or an in-house designer, or at a studio or agency, you will probably have to rebrand at the and Whether yo are a freelancer or an in-house designer, or at a studio or agency, you'll probably have to rebrand at the andWhether you are a freelancer or an in-house designer, or at a studio or agency, you will probably have to rebrand at the andWhether yo are a freelancer or an in-house designer, or at a studio or agency, you will probably have to rebrand at the and.Whether you are a freelancer or an in-house designer, or at a studio or agency, you will probably have to rebrand at the and Whether you are a freelancer or an in-house designer, or at a studio or agency, you will probably have to rebrand at the andWhether youa are a freelancer or an in-house designer, or at a studio or agency.</p>
                                                        </div>
                                                        <div class="popup_share_wrap">
                                                            <ul>
                                                                <li><a href="#">Facebook</a></li>
                                                                <li><a href="#">Twitter</a></li>
                                                                <li><a href="#">Linkedin</a></li>
                                                                <li><a href="#">Behance</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="read_more">
                                                            <a href="#"><span>Read More</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.4s">
                                                <div class="inner_list">
                                                    <div class="image_wrap">
                                                        <img class="small" src="img/blog/500x350.jpg" alt="" />
                                                        <img class="big" src="img/blog/1170x450.jpg" alt="" />
                                                        <div class="news_image" data-url="img/blog/3.jpg"></div>
                                                        <a class="link_news" href="index.php"></a>
                                                    </div>
                                                    <div class="definitions_wrap">
                                                        <div class="date_wrap">
                                                            <p>April 12, 2018 <a href="index.php">Branding</a></p>
                                                        </div>
                                                        <div class="title_holder">
                                                            <h3><a href="index.php">Innovative Ways to Increase Brand</a></h3>
                                                        </div>
                                                        <div class="definition">
                                                            <p>Having a solid, trusted brand is important for your company to thrive. If your target audience does not know or trust ...</p>
                                                        </div>
                                                        <div class="full_def">
                                                            <p>Having a solid, trusted brand is important for your company to thrive. If your target audience does not know or trust your brand, how will you ever increase your customer base and sales? Here are six innovative strategies you can use to increase brand awareness and help your business thrive. Inviting influencers into your niche is a great way to increase brand awareness and hopefully drive sales. When influencers have an established audience that knows and trusts them, once they mention your product(s) and discuss your brand in their content, those mentions will expand your reach and increase peoples awareness of your product. Ikonick is a perfect example of a company that works directly with influencers: It sells canvas art for your home and office. The way Ikonick uses influencers involves providing them with art and having those influencers pose with the art, then share the photos on social media. "Our relationships are an important part of our business," co-founder Mark Mastrandrea told me. "Our relationships make up our community, and the community is how our brand grows." Ikonick uses all types of influencers, from Instagram photographers to celebrities. The companys social strategy has enabled it to scale and grow exponentially because its influencers become part of its sales team -- even ambassadors. The relationship is mutually rewarding, Mastrandrea said. Companies can also offer to sponsor influencers at an event (if they do that sort of thing) and even use them as spokespersons for their brand and product(s). A lot of CrossFit-related companies do this, including Rogue Fitness, which sponsors certain athletes with clothing. The athlete then becomes a walking billboard for the company. Have you ever received an order that came in branded packaging? Rather than see it as just another shipment, perhaps you felt that that that special branding made the package seem like a gift. The team knows that the product experience doesn't commence at first use, but rather at the unboxing stage. How companies present their brand, and the story they tell through their design and graphics, can create an emotional connection with the customer that may last even longer than the product itself.</p>
                                                        </div>
                                                        <div class="popup_share_wrap">
                                                            <ul>
                                                                <li><a href="#">Facebook</a></li>
                                                                <li><a href="#">Twitter</a></li>
                                                                <li><a href="#">Linkedin</a></li>
                                                                <li><a href="#">Behance</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="read_more">
                                                            <a href="#"><span>Read More</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /NEWS -->

                        <!-- CONTACT & FOOTER -->
                        <div class="section" id="Signin">
                            <div class="container">
                                <div class="title_holder contact">
                                    <h3>REGISTRATION</h3>
                                    <span>Get in touch with us</span>
                                </div>
                            </div>
                            <div class="footer_contact_wrapper_all">
                                <div class="contact_wrap_all">
                                    <div class="container">
                                        <div class="leftbox">
                                            <div class="mini_title_holder contact">
                                                <h4>Get in Touch</h4>
                                            </div>
                                        </div>
                                        <div class="rightbox">
                                            <div class="contact_wrap">
                                                <div class="main_input_wrap">
                                                    <form action="http://frenify.com/" method="post" class="contact_form" id="contact_form">
                                                        <div class="wrap">
                                                            <a href="register.php"><button type="button" class="btn btn-outline-primary">Click here for registration</button></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_wrap">
                                    <div class="container">
                                        <p>&copy; Daffodil International University</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /CONTACT & FOOTER -->

                    </div>
                </div>
                <!-- /RIGHTPART -->

                <a class="totop" href="#"></a>

            </div>
        </div>
        <!-- / WRAPPER ALL -->

        <!-- SCRIPTS -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
        <script src="js/plugins.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/init.js"></script>
        <!-- /SCRIPTS -->

</body>

</html>
