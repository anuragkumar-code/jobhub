@extends('layouts.head')

@section('content')

<header class="header sticky-bar">

    <div class="container">

        <div class="main-header">

            <div class="header-left">

                <div class="header-logo">

                    <a href="{{url('/')}}" class="d-flex"><img alt="jobhub" src="images/jobhub-logo.svg" /></a>

                </div>

                <div class="header-nav">

                    <nav class="nav-main-menu d-none d-xl-block">

                        <ul class="main-menu">

                            <!-- <li>

                                <a class="active" href="index.html">Home</a>

                            </li> -->

                            <li class="has-children">

                                <a href="job-grid.html">Services</a>

                                <ul class="sub-menu mega-menu">

                                   

                                    <div class="tab">

                                        <button class="tablinks" onmouseover="openCity(event, 'WebDevelopment')">Web Development</button>

                                        <button class="tablinks" onmouseover="openCity(event, 'MobileDevelopment')">Mobile Development</button>

                                        <button class="tablinks" onmouseover="openCity(event, 'UIUXDesign')">UI/UX Design</button>

                                        <button class="tablinks" onmouseover="openCity(event, 'CMSDevelopment')">CMS Development</button>

                                        <button class="tablinks" onmouseover="openCity(event, 'DatabaseDevelopment')">Database Development</button>

                                        <button class="tablinks" onmouseover="openCity(event, 'Testing&QA')">Testing & QA</button>

                                        <button class="tablinks" onmouseover="openCity(event, 'CloudServerManagement')">Cloud-Server Management</button>

                                        <button class="tablinks" onmouseover="openCity(event, 'IoTDevelopment')">IoT Development</button>

                                        <button class="tablinks" onmouseover="openCity(event, 'AI/MLDevelopment')">AI/ML Development</button>

                                        <button class="tablinks" onmouseover="openCity(event, 'BlockChainDevelopment')">BlockChain Development</button>

                                      </div>


                                      <div id="WebDevelopment" class="tabcontent">

                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                                <a href="index.html">Javascript</a>

                                                <a href="index.html">Node.js</a>

                                                <a href="index.html">Angular.js</a>

                                                <a href="index.html">Laravel</a>

                                                <a href="index.html">Python</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>

                                                <a href="index.html">Media & Social</a>

                                                <a href="index.html">Finance</a>

                                                <a href="index.html">Health Care</a>

                                                <a href="index.html">E-commerce</a>

                                                <a href="index.html">Travel & Booking</a>

                                                <a href="index.html">Education</a>

                                                <a href="index.html">Food</a>

                                                <a href="index.html">Real Estate</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Location</h3>

                                                <a href="index.html">Chennai</a>

                                        </div>



                                      </div>


                                      <div id="MobileDevelopment" class="tabcontent">


                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                            <a href="index.html">React Native</a>

                                            <a href="index.html">Flutter</a>

                                            <a href="index.html">Kotlin</a>

                                            <a href="index.html">Ionic</a>

                                            <a href="index.html">Xamarin</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>

                                            <a href="index.html">E-commerce</a>

                                            <a href="index.html">Education</a>

                                            <a href="index.html">Media & Social</a>

                                            <a href="index.html">Finance</a>

                                            <a href="index.html">Health Care</a>

                                            <a href="index.html">Real Estate</a>

                                            <a href="index.html">Food</a>

                                            <a href="index.html">Travel & Booking</a>

                                        </div>

                                        

                                      </div>









                                      <div id="UIUXDesign" class="tabcontent">

                                        

                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                            <a href="index.html">PhotoShop</a>

                                            <a href="index.html">Adobe XD</a>

                                            <a href="index.html">Figma</a>

                                            <a href="index.html">Canva</a>

                                            <a href="index.html">Marvel</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>

                                            <a href="index.html">E-commerce</a>

                                            <a href="index.html">Education</a>

                                            <a href="index.html">Finance</a>

                                            <a href="index.html">Food</a>

                                            <a href="index.html">Health Care</a>

                                            <a href="index.html">Real Estate</a>

                                            <a href="index.html">Travel & Booking</a>

                                            <a href="index.html">Media & Social</a>

                                        </div>



                                      </div>







                                      <div id="CMSDevelopment" class="tabcontent">

                                        

                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                            <a href="index.html">WordPress</a>

                                            <a href="index.html">Shopify</a>

                                            <a href="index.html">Magento</a>

                                            <a href="index.html">Drupal</a>

                                            <a href="index.html">SiteCore</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>

                                            <a href="index.html">Education</a>

                                            <a href="index.html">Media & Social</a>

                                            <a href="index.html">Finance</a>

                                            <a href="index.html">Food</a>

                                            <a href="index.html">Health Care</a>

                                            <a href="index.html">Travel & Booking</a>

                                            <a href="index.html">E-commerce</a>

                                            <a href="index.html">Real Estate</a>

                                        </div>





                                      </div>







                                      <div id="DatabaseDevelopment" class="tabcontent">

                                        

                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                            <a href="index.html">MySQL</a>

                                            <a href="index.html">MongoDB</a>

                                            <a href="index.html">PostgreSQL</a>

                                            <a href="index.html">Redis</a>

                                            <a href="index.html">Hadoop</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>

                                            <a href="index.html">E-commerce</a>

                                            <a href="index.html">Education</a>

                                            <a href="index.html">Finance</a>

                                            <a href="index.html">Food</a>

                                            <a href="index.html">Health Care</a>

                                            <a href="index.html">Real Estate</a>

                                            <a href="index.html">Travel & Booking</a>

                                            <a href="index.html">Media & Social</a>

                                        </div>



                                      </div>





                                      <div id="Testing&QA" class="tabcontent">

                                        

                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                                <a href="index.html">Selenium</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>

                                            <a href="index.html">E-commerce</a>

                                            <a href="index.html">Education</a>

                                            <a href="index.html">Media & Social</a>

                                            <a href="index.html">Finance</a>

                                            <a href="index.html">Health Care</a>

                                            <a href="index.html">Real Estate</a>

                                            <a href="index.html">Travel & Booking</a>

                                            <a href="index.html">Food</a>

                                        </div>



                                       



                                      </div>







                                      <div id="CloudServerManagement" class="tabcontent">

                                        

                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                            <a href="index.html">Amazon Web Services</a>

                                            <a href="index.html">Google Cloud</a>

                                            <a href="index.html">Microsoft Azure</a>

                                            <a href="index.html">Docker</a>

                                            <a href="index.html">Oracle Cloud</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>

                                            <a href="index.html">Education</a>

                                            <a href="index.html">Media & Social</a>

                                            <a href="index.html">Finance</a>

                                            <a href="index.html">Food</a>

                                            <a href="index.html">Health Care</a>

                                            <a href="index.html">Travel & Booking</a>

                                            <a href="index.html">E-commerce</a>

                                            <a href="index.html">Real Estate</a>

                                        </div>



                                      </div>







                                      <div id="IoTDevelopment" class="tabcontent">

                                        

                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                                <a href="index.html">SalesForce IoT</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>

                                            <a href="index.html">E-commerce</a>

                                            <a href="index.html">Education</a>

                                            <a href="index.html">Finance</a>

                                            <a href="index.html">Real Estate</a>

                                            <a href="index.html">Health Care</a>

                                            <a href="index.html">Travel & Booking</a>

                                            <a href="index.html">Media & Social</a>

                                            Food

                                        </div>



                                      </div>







                                      <div id="AI/MLDevelopment" class="tabcontent">

                                        

                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                            <a href="index.html">TensorFlow</a>

                                            <a href="index.html">Microsoft Azure - AI/ML</a>

                                            <a href="index.html">DialogFlow</a>

                                            <a href="index.html">IBM Watson</a>

                                            <a href="index.html">Accord</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>



                                            <a href="index.html">Education</a>

                                            <a href="index.html">Finance</a>

                                            <a href="index.html">Food</a>

                                            <a href="index.html">Health Care</a>

                                            <a href="index.html">Real Estate</a>

                                            <a href="index.html">Travel & Booking</a>

                                            <a href="index.html">E-commerce</a>

                                            <a href="index.html">Media & Social</a>

                                            

                                       </div>





                                      </div>







                                      <div id="BlockChainDevelopment" class="tabcontent">

                                        

                                        <div class="menucard">

                                            <h3>Technologies</h3>

                                            <a href="index.html">Ethereum</a>

                                            <a href="index.html">BlockChain TestNet</a>

                                            <a href="index.html">Solidity</a>

                                            <a href="index.html">MetaMask</a>

                                            <a href="index.html">Corda</a>

                                        </div>



                                        <div class="menucard">

                                            <h3>Industries</h3>

                                            <a href="index.html">Education</a>

                                            <a href="index.html">Media & Social</a>

                                            <a href="index.html">Finance</a>

                                            <a href="index.html">Food</a>

                                            <a href="index.html">Health Care</a>

                                            <a href="index.html">Travel & Booking</a>

                                            <a href="index.html">E-commerce</a>

                                            <a href="index.html">Real Estate</a>

                                        </div>



                                      </div>

                                      

                                      

                                   

                                </ul>

                            </li>


                            <li><a href="about.html">How it Works</a></li>



                            <li class="has-children">

                                <a href="job-grid.html">Resources</a>

                                <ul class="sub-menu">

                                    <li><a href="about.html">About Us</a></li>

                                    <li><a href="candidates-grid.html">Career</a></li>

                                    <li><a href="page-contact.html">FAQs</a></li>

                                    <li><a href="page-contact.html">Contact Us</a></li>

                                </ul>

                            </li>


                        </ul>

                    </nav>

                </div>

            </div>

            <div class="header-right">

                <div class="header-nav">

                    <nav class="nav-main-menu d-none d-xl-block">

                        <ul class="main-menu">

                            <li class="has-children">

                                <a class="active" href="">Login</a>

                                <ul class="sub-menu">

                                    <li class="ngcontent">

                                        <a href="{{url('/client_login')}}">

                                            <img src="images/account.png" alt="loginasclient" />

                                            <span>

                                                Login as Client

                                                <p>Looking to hire the right team for your project?</p>

                                            </span>

                                        </a>

                                    </li>

                                    

                                    <li class="ngcontent">

                                        <a href="{{url('/agency_login')}}">

                                            <img src="images/apartment.png" alt="loginasclient" />

                                            <span>

                                                Login as an Agency

                                                <p>Looking to expand your business and your income?</p>

                                            </span>                                               

                                        </a>

                                    </li>



                                </ul>

                            </li>

                            <li class="has-children">

                                <a class="active">Signup</a>

                                <ul class="sub-menu">

                                    <li class="ngcontent">

                                        <a href="{{url('/client_signup')}}">

                                            <img src="images/account.png" alt="loginasclient" />

                                            <span>

                                                Signup as Client

                                                <p>Looking to hire the right team for your project?</p>

                                            </span>

                                        </a>

                                    </li>

                                    

                                    <li class="ngcontent">

                                        <a href="{{url('/agency_signup')}}">

                                            <img src="images/apartment.png" alt="loginasclient" />

                                            <span>

                                                Signup as Agency

                                                <p>Looking to expand your business and your income?</p>

                                            </span>

                                            

                                        </a>

                                    </li>



                                </ul>

                            </li>

                        </ul>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</header>

<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">

    <div class="mobile-header-wrapper-inner">

        <div class="mobile-header-top">

            <div class="user-account">

                <img src="assets/imgs/avatar/ava_1.png" alt="jobhub" />

                <div class="content">

                    <h6 class="user-name">Howdy, <span class="text-brand">AliThemes</span></h6>

                    <p class="font-xs text-muted">You have 2 new messages</p>

                </div>

            </div>

        </div>

        <div class="mobile-header-content-area">

            <div class="perfect-scroll">

                <div class="mobile-search mobile-header-border mb-30">

                    <form action="#">

                        <input type="text" placeholder="Search for items…" />

                        <i class="fi-rr-search"></i>

                    </form>

                </div>

                <div class="mobile-menu-wrap mobile-header-border">

                    <!-- mobile menu start -->

                    <nav>

                        <ul class="mobile-menu font-heading">

                            <li class="has-children">

                                <a class="active" href="index.html">Home</a>

                                <ul class="sub-menu">

                                    <li><a href="index.html">Home 1</a></li>

                                    <li><a href="index-2.html">Home 2</a></li>

                                    <li><a href="index-3.html">Home 3</a></li>

                                </ul>

                            </li>

                            <li class="has-children">

                                <a href="job-grid.html">Browse Jobs</a>

                                <ul class="sub-menu">

                                    <li><a href="job-grid.html">Job Grid</a></li>

                                    <li><a href="job-grid-2.html">Job Grid 2</a></li>

                                    <li><a href="job-list.html">Job List</a></li>

                                    <li class="hr"><span></span></li>

                                    <li><a href="job-single.html">Job Single 01</a></li>

                                    <li><a href="job-single-2.html">Job Single 02</a></li>

                                    <li><a href="job-single-3.html">Job Single 03</a></li>

                                </ul>

                            </li>

                            <li class="has-children">

                                <a href="employers-grid.html">Employers</a>

                                <ul class="sub-menu">

                                    <li><a href="employers-grid.html">Employers Grid</a></li>

                                    <li><a href="employers-grid-2.html">Employers Grid 2</a></li>

                                    <li><a href="employers-list.html">Employers List</a></li>

                                    <li class="hr"><span></span></li>

                                    <li><a href="employers-single.html">Employers Single 01</a></li>

                                    <li><a href="employers-single-2.html">Employers Single 02</a></li>

                                </ul>

                            </li>

                            <li class="has-children">

                                <a href="candidates-grid.html">Candidates</a>

                                <ul class="sub-menu">

                                    <li><a href="candidates-grid.html">Candidates Grid</a></li>

                                    <li><a href="candidates-grid-2.html">Candidates Grid 2</a></li>

                                    <li><a href="candidates-list.html">Candidates List</a></li>

                                    <li class="hr"><span></span></li>

                                    <li><a href="candidates-single.html">Candidates Single 01</a></li>

                                    <li><a href="candidates-single-2.html">Candidates Single 02</a></li>

                                </ul>

                            </li>

                            <li class="has-children">

                                <a href="#">Blog</a>

                                <ul class="sub-menu">

                                    <li><a href="blog-grid.html">Blog Grid</a></li>

                                    <li><a href="blog-grid-2.html">Blog Grid Sidebar</a></li>

                                    <li><a href="blog-list.html">Blog List</a></li>

                                    <li class="hr"><span></span></li>

                                    <li><a href="blog-single.html">Blog Single 01</a></li>

                                    <li><a href="blog-single-2.html">Blog Single 02</a></li>

                                </ul>

                            </li>

                            <li class="has-children">

                                <a href="#">Pages</a>

                                <ul class="sub-menu">

                                    <li><a href="page-about.html">About Us</a></li>

                                    <li><a href="page-service.html">Our Services</a></li>

                                    <li><a href="page-pricing.html">Pricing Plan</a></li>

                                    <li><a href="pages-faqs.html">FAQs</a></li>

                                    <li><a href="page-contact.html">Contact Us</a></li>

                                </ul>

                            </li>

                        </ul>

                    </nav>

                    <!-- mobile menu end -->

                </div>

                <div class="mobile-account">

                    <h6 class="mb-10">Your Account</h6>

                    <ul class="mobile-menu font-heading">

                        <li><a href="#">Profile</a></li>

                        <li><a href="#">Work Preferences</a></li>

                        <li><a href="#">My Boosted Shots</a></li>

                        <li><a href="#">My Collections</a></li>

                        <li><a href="#">Account Settings</a></li>

                        <li><a href="#">Go Pro</a></li>

                        <li><a href="#">Sign Out</a></li>

                    </ul>

                </div>

                <div class="mobile-social-icon mb-50">

                    <h6 class="mb-25">Follow Us</h6>

                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt="jobhub" /></a>

                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt="jobhub" /></a>

                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt="jobhub" /></a>

                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt="jobhub" /></a>

                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt="jobhub" /></a>

                </div>

                <div class="site-copyright">Copyright 2022 © JobHub. <br />Designed by AliThemes.</div>

            </div>

        </div>

    </div>

</div> 

<!--End header-->

<!-- Content -->

    <main class="main">

        <section class="section-box">

            <div class="banner-hero hero-1">

                <div class="banner-inner">

                    <div class="row">

                        <div class="col-lg-8">

                            <div class="block-banner">

                                <span class="text-small-primary text-small-primary--disk text-uppercase wow animate__animated animate__fadeInUp">Best jobs place</span>

                                <h1 class="heading-banner wow animate__animated animate__fadeInUp">The Easiest Way to Get Your New Job</h1>

                                <div class="banner-description mt-30 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Each month, more than 3 million job seekers turn to website in their search for work, making over 140,000 applications every single day</div>

                                <div class="form-find mt-60 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">

                                    <form>

                                        <input type="text" class="form-input input-keysearch mr-10" placeholder="Job title, Company... " />

                                        <!-- <input type="text" class="form-input input-keysearch mr-10" placeholder="City, Postcode... " /> -->

                                        <select class="form-input mr-10 select-active">

                                            <option value="">Location</option>

                                            <option value="AX">Aland Islands</option>

                                            <option value="AF">Afghanistan</option>

                                            <option value="AL">Albania</option>

                                            <option value="DZ">Algeria</option>

                                            <option value="AD">Andorra</option>

                                            <option value="AO">Angola</option>

                                            <option value="AI">Anguilla</option>

                                            <option value="AQ">Antarctica</option>

                                            <option value="AG">Antigua and Barbuda</option>

                                            <option value="AR">Argentina</option>

                                            <option value="AM">Armenia</option>

                                            <option value="AW">Aruba</option>

                                            <option value="AU">Australia</option>

                                            <option value="AT">Austria</option>

                                            <option value="AZ">Azerbaijan</option>

                                            <option value="BS">Bahamas</option>

                                            <option value="BH">Bahrain</option>

                                            <option value="BD">Bangladesh</option>

                                            <option value="BB">Barbados</option>

                                            <option value="BY">Belarus</option>

                                            <option value="PW">Belau</option>

                                            <option value="BE">Belgium</option>

                                            <option value="BZ">Belize</option>

                                            <option value="BJ">Benin</option>

                                            <option value="BM">Bermuda</option>

                                            <option value="BT">Bhutan</option>

                                            <option value="BO">Bolivia</option>

                                            <option value="BQ">Bonaire, Saint Eustatius and Saba</option>

                                            <option value="BA">Bosnia and Herzegovina</option>

                                            <option value="BW">Botswana</option>

                                            <option value="BV">Bouvet Island</option>

                                            <option value="BR">Brazil</option>

                                            <option value="IO">British Indian Ocean Territory</option>

                                            <option value="VG">British Virgin Islands</option>

                                            <option value="BN">Brunei</option>

                                            <option value="BG">Bulgaria</option>

                                            <option value="BF">Burkina Faso</option>

                                            <option value="BI">Burundi</option>

                                            <option value="KH">Cambodia</option>

                                            <option value="CM">Cameroon</option>

                                            <option value="CA">Canada</option>

                                            <option value="CV">Cape Verde</option>

                                            <option value="KY">Cayman Islands</option>

                                            <option value="CF">Central African Republic</option>

                                            <option value="TD">Chad</option>

                                            <option value="CL">Chile</option>

                                            <option value="CN">China</option>

                                            <option value="CX">Christmas Island</option>

                                            <option value="CC">Cocos (Keeling) Islands</option>

                                            <option value="CO">Colombia</option>

                                            <option value="KM">Comoros</option>

                                            <option value="CG">Congo (Brazzaville)</option>

                                            <option value="CD">Congo (Kinshasa)</option>

                                            <option value="CK">Cook Islands</option>

                                            <option value="CR">Costa Rica</option>

                                            <option value="HR">Croatia</option>

                                            <option value="CU">Cuba</option>

                                            <option value="CW">CuraÇao</option>

                                            <option value="CY">Cyprus</option>

                                            <option value="CZ">Czech Republic</option>

                                            <option value="DK">Denmark</option>

                                            <option value="DJ">Djibouti</option>

                                            <option value="DM">Dominica</option>

                                            <option value="DO">Dominican Republic</option>

                                            <option value="EC">Ecuador</option>

                                            <option value="EG">Egypt</option>

                                            <option value="SV">El Salvador</option>

                                            <option value="GQ">Equatorial Guinea</option>

                                            <option value="ER">Eritrea</option>

                                            <option value="EE">Estonia</option>

                                            <option value="ET">Ethiopia</option>

                                            <option value="FK">Falkland Islands</option>

                                            <option value="FO">Faroe Islands</option>

                                            <option value="FJ">Fiji</option>

                                            <option value="FI">Finland</option>

                                            <option value="FR">France</option>

                                            <option value="GF">French Guiana</option>

                                            <option value="PF">French Polynesia</option>

                                            <option value="TF">French Southern Territories</option>

                                            <option value="GA">Gabon</option>

                                            <option value="GM">Gambia</option>

                                            <option value="GE">Georgia</option>

                                            <option value="DE">Germany</option>

                                            <option value="GH">Ghana</option>

                                            <option value="GI">Gibraltar</option>

                                            <option value="GR">Greece</option>

                                            <option value="GL">Greenland</option>

                                            <option value="GD">Grenada</option>

                                            <option value="GP">Guadeloupe</option>

                                            <option value="GT">Guatemala</option>

                                            <option value="GG">Guernsey</option>

                                            <option value="GN">Guinea</option>

                                            <option value="GW">Guinea-Bissau</option>

                                            <option value="GY">Guyana</option>

                                            <option value="HT">Haiti</option>

                                            <option value="HM">Heard Island and McDonald Islands</option>

                                            <option value="HN">Honduras</option>

                                            <option value="HK">Hong Kong</option>

                                            <option value="HU">Hungary</option>

                                            <option value="IS">Iceland</option>

                                            <option value="IN">India</option>

                                            <option value="ID">Indonesia</option>

                                            <option value="IR">Iran</option>

                                            <option value="IQ">Iraq</option>

                                            <option value="IM">Isle of Man</option>

                                            <option value="IL">Israel</option>

                                            <option value="IT">Italy</option>

                                            <option value="CI">Ivory Coast</option>

                                            <option value="JM">Jamaica</option>

                                            <option value="JP">Japan</option>

                                            <option value="JE">Jersey</option>

                                            <option value="JO">Jordan</option>

                                            <option value="KZ">Kazakhstan</option>

                                            <option value="KE">Kenya</option>

                                            <option value="KI">Kiribati</option>

                                            <option value="KW">Kuwait</option>

                                            <option value="KG">Kyrgyzstan</option>

                                            <option value="LA">Laos</option>

                                            <option value="LV">Latvia</option>

                                            <option value="LB">Lebanon</option>

                                            <option value="LS">Lesotho</option>

                                            <option value="LR">Liberia</option>

                                            <option value="LY">Libya</option>

                                            <option value="LI">Liechtenstein</option>

                                            <option value="LT">Lithuania</option>

                                            <option value="LU">Luxembourg</option>

                                            <option value="MO">Macao S.A.R., China</option>

                                            <option value="MK">Macedonia</option>

                                            <option value="MG">Madagascar</option>

                                            <option value="MW">Malawi</option>

                                            <option value="MY">Malaysia</option>

                                            <option value="MV">Maldives</option>

                                            <option value="ML">Mali</option>

                                            <option value="MT">Malta</option>

                                            <option value="MH">Marshall Islands</option>

                                            <option value="MQ">Martinique</option>

                                            <option value="MR">Mauritania</option>

                                            <option value="MU">Mauritius</option>

                                            <option value="YT">Mayotte</option>

                                            <option value="MX">Mexico</option>

                                            <option value="FM">Micronesia</option>

                                            <option value="MD">Moldova</option>

                                            <option value="MC">Monaco</option>

                                            <option value="MN">Mongolia</option>

                                            <option value="ME">Montenegro</option>

                                            <option value="MS">Montserrat</option>

                                            <option value="MA">Morocco</option>

                                            <option value="MZ">Mozambique</option>

                                            <option value="MM">Myanmar</option>

                                            <option value="NA">Namibia</option>

                                            <option value="NR">Nauru</option>

                                            <option value="NP">Nepal</option>

                                            <option value="NL">Netherlands</option>

                                            <option value="AN">Netherlands Antilles</option>

                                            <option value="NC">New Caledonia</option>

                                            <option value="NZ">New Zealand</option>

                                            <option value="NI">Nicaragua</option>

                                            <option value="NE">Niger</option>

                                            <option value="NG">Nigeria</option>

                                            <option value="NU">Niue</option>

                                            <option value="NF">Norfolk Island</option>

                                            <option value="KP">North Korea</option>

                                            <option value="NO">Norway</option>

                                            <option value="OM">Oman</option>

                                            <option value="PK">Pakistan</option>

                                            <option value="PS">Palestinian Territory</option>

                                            <option value="PA">Panama</option>

                                            <option value="PG">Papua New Guinea</option>

                                            <option value="PY">Paraguay</option>

                                            <option value="PE">Peru</option>

                                            <option value="PH">Philippines</option>

                                            <option value="PN">Pitcairn</option>

                                            <option value="PL">Poland</option>

                                            <option value="PT">Portugal</option>

                                            <option value="QA">Qatar</option>

                                            <option value="IE">Republic of Ireland</option>

                                            <option value="RE">Reunion</option>

                                            <option value="RO">Romania</option>

                                            <option value="RU">Russia</option>

                                            <option value="RW">Rwanda</option>

                                            <option value="ST">São Tomé and Príncipe</option>

                                            <option value="BL">Saint Barthélemy</option>

                                            <option value="SH">Saint Helena</option>

                                            <option value="KN">Saint Kitts and Nevis</option>

                                            <option value="LC">Saint Lucia</option>

                                            <option value="SX">Saint Martin (Dutch part)</option>

                                            <option value="MF">Saint Martin (French part)</option>

                                            <option value="PM">Saint Pierre and Miquelon</option>

                                            <option value="VC">Saint Vincent and the Grenadines</option>

                                            <option value="SM">San Marino</option>

                                            <option value="SA">Saudi Arabia</option>

                                            <option value="SN">Senegal</option>

                                            <option value="RS">Serbia</option>

                                            <option value="SC">Seychelles</option>

                                            <option value="SL">Sierra Leone</option>

                                            <option value="SG">Singapore</option>

                                            <option value="SK">Slovakia</option>

                                            <option value="SI">Slovenia</option>

                                            <option value="SB">Solomon Islands</option>

                                            <option value="SO">Somalia</option>

                                            <option value="ZA">South Africa</option>

                                            <option value="GS">South Georgia/Sandwich Islands</option>

                                            <option value="KR">South Korea</option>

                                            <option value="SS">South Sudan</option>

                                            <option value="ES">Spain</option>

                                            <option value="LK">Sri Lanka</option>

                                            <option value="SD">Sudan</option>

                                            <option value="SR">Suriname</option>

                                            <option value="SJ">Svalbard and Jan Mayen</option>

                                            <option value="SZ">Swaziland</option>

                                            <option value="SE">Sweden</option>

                                            <option value="CH">Switzerland</option>

                                            <option value="SY">Syria</option>

                                            <option value="TW">Taiwan</option>

                                            <option value="TJ">Tajikistan</option>

                                            <option value="TZ">Tanzania</option>

                                            <option value="TH">Thailand</option>

                                            <option value="TL">Timor-Leste</option>

                                            <option value="TG">Togo</option>

                                            <option value="TK">Tokelau</option>

                                            <option value="TO">Tonga</option>

                                            <option value="TT">Trinidad and Tobago</option>

                                            <option value="TN">Tunisia</option>

                                            <option value="TR">Turkey</option>

                                            <option value="TM">Turkmenistan</option>

                                            <option value="TC">Turks and Caicos Islands</option>

                                            <option value="TV">Tuvalu</option>

                                            <option value="UG">Uganda</option>

                                            <option value="UA">Ukraine</option>

                                            <option value="AE">United Arab Emirates</option>

                                            <option value="GB">United Kingdom (UK)</option>

                                            <option value="US">USA (US)</option>

                                            <option value="UY">Uruguay</option>

                                            <option value="UZ">Uzbekistan</option>

                                            <option value="VU">Vanuatu</option>

                                            <option value="VA">Vatican</option>

                                            <option value="VE">Venezuela</option>

                                            <option value="VN">Vietnam</option>

                                            <option value="WF">Wallis and Futuna</option>

                                            <option value="EH">Western Sahara</option>

                                            <option value="WS">Western Samoa</option>

                                            <option value="YE">Yemen</option>

                                            <option value="ZM">Zambia</option>

                                            <option value="ZW">Zimbabwe</option>

                                        </select>

                                        <button class="btn btn-default btn-find">Find now</button>

                                    </form>

                                </div>

                                <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">

                                    <strong>Popular Searches:</strong>

                                    <a href="#">Designer</a>, <a href="#">Developer</a>, <a href="#">Web</a>, <a href="#">Engineer</a>, <a href="#">Senior</a>,

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6">

                            <div class="banner-imgs">

                                <img alt="jobhub" src="images/home/banner.png" class="img-responsive shape-1" />

                                <span class="union-icon"><img alt="jobhub" src="images/home/union.svg" class="img-responsive shape-3" /></span>

                                <span class="congratulation-icon"><img alt="jobhub" src="images/home/congratulation.svg" class="img-responsive shape-2" /></span>

                                <span class="docs-icon"><img alt="jobhub" src="images/home/docs.svg" class="img-responsive shape-2" /></span>

                                <span class="course-icon"><img alt="jobhub" src="images/home/course.svg" class="img-responsive shape-3" /></span>

                                <span class="web-dev-icon"><img alt="jobhub" src="images/home/web-dev.svg" class="img-responsive shape-3" /></span>

                                <span class="tick-icon"><img alt="jobhub" src="images/home/tick.svg" class="img-responsive shape-3" /></span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <div class="section-box wow animate__animated animate__fadeIn mt-70">

            <div class="container">

                <div class="box-swiper">

                    <div class="swiper-container swiper-group-6">

                        <div class="swiper-wrapper pb-70 pt-5">

                            <div class="swiper-slide hover-up">

                                <div class="item-logo"><a href="candidates-single.html"><img alt="jobhub" src="images/home/google.svg" /></a></div>

                            </div>

                            <div class="swiper-slide hover-up">

                                <div class="item-logo"><a href="candidates-single.html"><img alt="jobhub" src="images/home/airbnb.svg" /></a></div>

                            </div>

                            <div class="swiper-slide hover-up">

                                <div class="item-logo"><a href="candidates-single.html"><img alt="jobhub" src="images/home/dropbox.svg" /></a></div>

                            </div>

                            <div class="swiper-slide hover-up">

                                <div class="item-logo"><a href="candidates-single.html"><img alt="jobhub" src="images/home/fedex.svg" /></a></div>

                            </div>

                            <div class="swiper-slide hover-up">

                                <div class="item-logo"><a href="candidates-single.html"><img alt="jobhub" src="images/home/wallmart.svg" /></a></div>

                            </div>

                            <div class="swiper-slide hover-up">

                                <div class="item-logo"><a href="candidates-single.html"><img alt="jobhub" src="images/home/hubspot.svg" /></a></div>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-button-next"></div>

                    <div class="swiper-button-prev"></div>

                </div>

            </div>

        </div>

        <section class="section-box">

            <div class="container">

                <div class="row align-items-end">

                    <div class="col-lg-7">

                        <h2 class="section-title mb-20 wow animate__animated animate__fadeInUp">Browse by category</h2>

                        <p class="text-md-lh28 color-black-5 wow animate__animated animate__fadeInUp">Find the type of work

                            you need, clearly defined and ready to start. Work begins as soon as you purchase and provide

                            requirements.</p>

                    </div>

                    <div class="col-lg-5 text-lg-end text-start wow animate__animated animate__fadeInUp" data-wow-delay=".2s">

                        <a href="job-grid-2.html" class="mt-sm-15 mt-lg-30 btn btn-border icon-chevron-right">Browse all</a>

                    </div>

                </div>

                <div class="row mt-70">

                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp">

                            <div class="text-center">

                                <a href="job-grid.html">

                                    <figure><img alt="jobhub" src="images/home/marketing.svg" /></figure>

                                </a>

                            </div>

                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Marketing & Communication</a>

                            </h5>

                            <p class="text-center text-stroke-40 mt-20">156 Available Vacancy</p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".1s">

                            <div class="text-center">

                                <a href="job-grid.html">

                                    <figure><img alt="jobhub" src="images/home/content-writer.svg" /></figure>

                                </a>

                            </div>

                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Content <br>Writer</a></h5>

                            <p class="text-center text-stroke-40 mt-20">268 Available Vacancy</p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">

                        <div class="card-grid hover-up">

                            <div class="text-center">

                                <a href="job-grid.html">

                                    <figure><img src="images/home/marketing-director.svg" alt="jobhub" /></figure>

                                </a>

                            </div>

                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Marketing <br>Director</a></h5>

                            <p class="text-center text-stroke-40 mt-20">145 Available Vacancy</p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".3s">

                            <div class="text-center">

                                <a href="job-grid.html">

                                    <figure><img src="images/home/system-analyst.svg" alt="jobhub" /></figure>

                                </a>

                            </div>

                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">System <br>Analyst</a></h5>

                            <p class="text-center text-stroke-40 mt-20">236 Available Vacancy</p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp">

                            <div class="text-center">

                                <a href="job-grid.html">

                                    <figure><img src="images/home/business-development.svg" alt="jobhub" /></figure>

                                </a>

                            </div>

                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Digital<br> Designer</a></h5>

                            <p class="text-center text-stroke-40 mt-20">56 Available Vacancy</p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".1s">

                            <div class="text-center">

                                <a href="job-grid.html">

                                    <figure><img src="images/home/proof-reading.svg" alt="jobhub" /></figure>

                                </a>

                            </div>

                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Market <br>Research</a></h5>

                            <p class="text-center text-stroke-40 mt-20">168 Available Vacancy</p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".2s">

                            <div class="text-center card-img">

                                <a href="job-grid.html">

                                    <figure>

                                        <img src="images/home/testing.svg" alt="jobhub" />

                                    </figure>

                                </a>

                            </div>

                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Human<br> Resource</a></h5>

                            <p class="text-center text-stroke-40 mt-20">628 Available Vacancy</p>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".3s">

                            <div class="text-center mt-15">

                                <h3>18,265+</h3>

                            </div>

                            <p class="text-center mt-30 text-stroke-40">Jobs are waiting for you</p>

                            <div class="text-center mt-30">

                                <div class="box-button-shadow"><a href="job-grid.html" class="btn btn-default">Explore more</a></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="section-box mt-40">

            <div class="container">

                <div class="row align-items-end">

                    <div class="col-lg-4">

                        <h2 class="section-title mb-20 wow animate__animated animate__fadeInUp">Recent Jobs</h2>

                        <p class="text-md-lh28 color-black-5wow animate__animated animate__fadeInUp" data-wow-delay=".1s">8 new

                            opportunities posted today!</p>

                    </div>

                    <div class="col-lg-8 text-xl-end text-start">

                        <ul class="nav nav-right float-xl-end float-start" role="tablist">

                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><button id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one-1" aria-selected="true" class="active">Design</button></li>

                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><button id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two-1" aria-selected="false">Marketing</button></li>

                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".3s"><button id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three-1" aria-selected="false">Design</button></li>

                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><button id="nav-tab-four-1" data-bs-toggle="tab" data-bs-target="#tab-four-1" type="button" role="tab" aria-controls="tab-four-1" aria-selected="false">Service</button></li>

                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".5s"><button id="nav-tab-five-1" data-bs-toggle="tab" data-bs-target="#tab-five-1" type="button" role="tab" aria-controls="tab-five-1" aria-selected="false">Health Care</button></li>

                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".6s"><button id="nav-tab-six-1" data-bs-toggle="tab" data-bs-target="#tab-six-1" type="button" role="tab" aria-controls="tab-six-1" aria-selected="false">Writing</button></li>

                        </ul>

                    </div>

                </div>

                <div class="mt-70">

                    <div class="tab-content" id="myTabContent-1">

                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">

                            <div class="row">

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img src="images/home/job-1.png" alt="jobhub" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img src="images/home/logo-1.svg" alt="jobhub" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $3200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img src="images/home/shield-check.svg" alt="jobhub" /></span>

                                                        <span class="ml-5"><img src="images/home/bookmark.svg" alt="jobhub" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img src="images/home/job-2.png" alt="jobhub" /></figure>

                                            </a>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img src="images/home/logo-2.svg" alt="jobhub" /></span> <span>Gucci</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $1200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img src="images/home/shield-check.svg" alt="jobhub" /></span>

                                                        <span class="ml-5"><img src="images/home/bookmark.svg" alt="jobhub" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img src="images/home/job-3.png" alt="jobhub" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img src="images/home/logo-3.svg" alt="jobhub" /></span> <span>Versace</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $2600<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img src="images/home/shield-check.svg" alt="jobhub" /></span>

                                                        <span class="ml-5"><img src="images/home/bookmark.svg" alt="jobhub" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img src="images/home/job-4.png" alt="jobhub" /></figure>

                                            </a>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img src="images/home/logo-4.svg" alt="jobhub" /></span> <span>Hermes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img src="images/home/shield-check.svg" alt="jobhub" /></span>

                                                        <span class="ml-5"><img src="images/home/bookmark.svg" alt="jobhub" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img src="images/home/job-5.png" alt="jobhub" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img src="images/home/logo-5.svg" alt="jobhub" /></span> <span>Burberry</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $125<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img src="images/home/shield-check.svg" alt="jobhub" /></span>

                                                        <span class="ml-5"><img src="images/home/bookmark.svg" alt="jobhub" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img src="images/home/job-6.png" alt="jobhub" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img src="images/home/logo-6.svg" alt="jobhub" /></span> <span>Louis Vuitton</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A complete social media business pages setup</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img src="images/home/shield-check.svg" alt="jobhub" /></span>

                                                        <span class="ml-5"><img src="images/home/bookmark.svg" alt="jobhub" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">

                            <div class="row">

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="#">

                                                <figure><img src="images/home/job-7.png" alt="jobhub" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent22</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img src="images/home/logo-1.svg" alt="jobhub" /></span> <span>Levis</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">35 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $4200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img src="images/home/shield-check.svg" alt="jobhub" /></span>

                                                        <span class="ml-5"><img src="images/home/bookmark.svg" alt="jobhub" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img src="images/home/job-8.png" alt="jobhub" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img src="images/home/logo-2.svg" alt="jobhub" /></span> <span>Armani</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $1200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img src="images/home/bookmark.svg" alt="jobhub" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-9.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logo-3.svg" /></span> <span>Prada</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $2600<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-10.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logo-4.svg" /></span> <span>Adidas</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-1.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logo-5.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $125<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-2.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-6.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">

                            <div class="row">

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-1.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-1.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">39 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $5200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-2.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-2.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $1200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-3.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-3.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $2600<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-4.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-4.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-5.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-5.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $125<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-6.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-6.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab-four-1" role="tabpanel" aria-labelledby="tab-four-1">

                            <div class="row">

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-1.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-1.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">53 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $700<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-2.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-2.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $1200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-3.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-3.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $2600<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-4.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-4.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-5.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-5.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $125<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-6.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-6.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab-five-1" role="tabpanel" aria-labelledby="tab-five-1">

                            <div class="row">

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-1.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-1.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">46 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $800<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-2.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-2.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $1200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-3.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-3.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $2600<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-4.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-4.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-5.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-5.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $125<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-6.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-6.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab-six-1" role="tabpanel" aria-labelledby="tab-six-1">

                            <div class="row">

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-1.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-1.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $3200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-2.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-2.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $1200<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-3.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-3.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $2600<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-4.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-4.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-5.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-5.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $125<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="card-grid-2 hover-up">

                                        <div class="text-center card-grid-2-image">

                                            <a href="job-single.html">

                                                <figure><img alt="jobhub" src="images/home/job-6.png" /></figure>

                                            </a>

                                            <label class="btn-urgent">Urgent</label>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-7 col-6">

                                                    <a href="employers-single.html" class="card-2-img-text">

                                                        <span class="card-grid-2-img-small"><img alt="jobhub" src="images/home/logos/logo-6.svg" /></span> <span>Alithemes</span>

                                                    </a>

                                                </div>

                                                <div class="col-lg-5 col-6 text-end">

                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>

                                                </div>

                                            </div>

                                            <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>

                                            <div class="mt-15">

                                                <span class="card-time">3 mins ago</span>

                                                <span class="card-location">Chicago</span>

                                            </div>

                                            <div class="card-2-bottom mt-30">

                                                <div class="row">

                                                    <div class="col-lg-7 col-8">

                                                        <span class="card-text-price"> $120<span>/Month</span> </span>

                                                    </div>

                                                    <div class="col-lg-5 col-4 text-end">

                                                        <span><img alt="jobhub" src="images/home/shield-check.svg" /></span>

                                                        <span class="ml-5"><img alt="jobhub" src="images/home/bookmark.svg" /></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="section-box mt-50 mb-70 bg-patern">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-sm-12">

                        <div class="content-job-inner">

                            <h2 class="section-title heading-lg wow animate__animated animate__fadeInUp">The #1 Job Board for Graphic Design Jobs</h2>

                            <div class="mt-40 pr-50 text-md-lh28 wow animate__animated animate__fadeInUp">Search and connect with the right candidates faster. This talent seach gives you the opportunity to find candidates who may be a perfect fit for your role</div>

                            <div class="mt-40">

                                <div class="box-button-shadow wow animate__animated animate__fadeInUp"><a href="#" class="btn btn-default">Post a job now</a></div>

                                <a href="#" class="btn btn-link wow animate__animated animate__fadeInUp">Learn more</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 col-sm-12">

                        <div class="box-image-job">

                            <figure class=" wow animate__animated animate__fadeIn"><img alt="jobhub" src="images/home/img-job.png" /></figure>

                            <div class="job-top-creator">

                                <div class="job-top-creator-head">

                                    <h5>Top Freelancers</h5>

                                </div>

                                <ul>

                                    <li>

                                        <div>

                                            <figure><img alt="jobhub" src="images/home/ava_13.png" /></figure>

                                            <div class="job-info-creator">

                                                <strong>Kate Adie</strong>

                                                <span>UI/UX Designer</span>

                                            </div>

                                        </div>

                                    </li>

                                    <li>

                                        <div>

                                            <figure><img alt="jobhub" src="images/home/ava_14.png" /></figure>

                                            <div class="job-info-creator">

                                                <strong>John Lennon</strong>

                                                <span>Senior Art Director</span>

                                            </div>

                                        </div>

                                    </li>

                                    <li>

                                        <div>

                                            <figure><img alt="jobhub" src="images/home/ava_15.png" /></figure>

                                            <div class="job-info-creator">

                                                <strong>Nadine Coyle</strong>

                                                <span>Photographer</span>

                                            </div>

                                        </div>

                                    </li>

                                    <li>

                                        <div>

                                            <figure><img alt="jobhub" src="images/home/ava_16.png" /></figure>

                                            <div class="job-info-creator">

                                                <strong>Sarah Harding</strong>

                                                <span>Motion Designer</span>

                                            </div>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <div class="section-box">

            <div class="container">

                <ul class="list-partners">

                    <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay="0s">

                        <a href="#">

                            <figure><img alt="jobhub" src="images/home/samsung.svg" /></figure>

                        </a>

                    </li>

                    <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">

                        <a href="#">

                            <figure><img alt="jobhub" src="images/home/google.svg" /></figure>

                        </a>

                    </li>

                    <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".2s">

                        <a href="#">

                            <figure><img alt="jobhub" src="images/home/facebook.svg" /></figure>

                        </a>

                    </li>

                    <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".3s">

                        <a href="#">

                            <figure><img alt="jobhub" src="images/home/pinterest.svg" /></figure>

                        </a>

                    </li>

                    <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".4s">

                        <a href="#">

                            <figure><img alt="jobhub" src="images/home/avaya.svg" /></figure>

                        </a>

                    </li>

                    <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".5s">

                        <a href="#">

                            <figure><img alt="jobhub" src="images/home/forbes.svg" /></figure>

                        </a>

                    </li>

                    <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">

                        <a href="#">

                            <figure><img alt="jobhub" src="images/home/avis.svg" /></figure>

                        </a>

                    </li>

                    <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".2s">

                        <a href="#">

                            <figure><img alt="jobhub" src="images/home/nielsen.svg" /></figure>

                        </a>

                    </li>

                    <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".3s">

                        <a href="#">

                            <figure><img alt="jobhub" src="images/home/doordash.svg" /></figure>

                        </a>

                    </li>

                </ul>

            </div>

        </div>

        <section class="section-box mt-50">

            <div class="container">

                <div class="row align-items-end">

                    <div class="col-lg-7 col-md-7">

                        <h2 class="section-title mb-20 wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">From blog</h2>

                        <p class="text-md-lh28 color-black-5 wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">Latest News & Events</p>

                    </div>

                    <div class="col-lg-5 col-md-5 text-lg-end text-start">

                        <a href="blog-grid.html" class="btn btn-border icon-chevron-right wow animate__animated animate__fadeInUp hover-up mt-15" data-wow-delay=".1s">View more</a>

                    </div>

                </div>

                <div class="row mt-70">

                    <div class="box-swiper">

                        <div class="swiper-container swiper-group-3">

                            <div class="swiper-wrapper pb-70 pt-5">

                                <div class="swiper-slide">

                                    <div class="card-grid-3 hover-up">

                                        <div class="text-center card-grid-3-image">

                                            <a href="blog-single.html">

                                                <figure><img alt="jobhub" src="images/home/img-blog-1.png" /></figure>

                                            </a>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-6 col-6 text-start">

                                                    <span>Sarah Harding</span>

                                                </div>

                                                <div class="col-lg-6 col-6 text-end">

                                                    <span>06 September</span>

                                                </div>

                                            </div>

                                            <h5 class="mt-15 heading-md"><a href="blog-single.html">Senior Full Stack, Creator

                                                    Success Full Time</a></h5>

                                            <div class="card-2-bottom mt-50">

                                                <div class="row">

                                                    <div class="col-lg-9 col-8">

                                                        <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>

                                                    </div>

                                                    <div class="col-lg-3 text-end col-4">

                                                        <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="images/home/bookmark.svg" /></a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="card-grid-3 hover-up">

                                        <div class="text-center card-grid-3-image">

                                            <a href="blog-single.html">

                                                <figure><img alt="jobhub" src="images/home/img-blog-2.png" /></figure>

                                            </a>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-6 col-6 text-start">

                                                    <span>Sarah Harding</span>

                                                </div>

                                                <div class="col-lg-6 col-6 text-end">

                                                    <span>06 September</span>

                                                </div>

                                            </div>

                                            <h5 class="mt-15 heading-md"><a href="blog-single.html">21 Job Tips: How To Make a Great Impression</a></h5>

                                            <div class="card-2-bottom mt-50">

                                                <div class="row">

                                                    <div class="col-lg-9 col-8">

                                                        <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>

                                                    </div>

                                                    <div class="col-lg-3 text-end col-4">

                                                        <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="images/home/bookmark.svg" /></a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="card-grid-3 hover-up">

                                        <div class="text-center card-grid-3-image">

                                            <a href="blog-single.html">

                                                <figure><img alt="jobhub" src="images/home/img-blog-3.png" /></figure>

                                            </a>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-6 col-6 text-start">

                                                    <span>Sarah Harding</span>

                                                </div>

                                                <div class="col-lg-6 col-6 text-end">

                                                    <span>06 September</span>

                                                </div>

                                            </div>

                                            <h5 class="mt-15 heading-md"><a href="blog-single.html">Top SQL Query Interview Questions</a></h5>

                                            <div class="card-2-bottom mt-50">

                                                <div class="row">

                                                    <div class="col-lg-9 col-8">

                                                        <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>

                                                    </div>

                                                    <div class="col-lg-3 text-end col-4">

                                                        <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="images/home/bookmark.svg" /></a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="card-grid-3 hover-up">

                                        <div class="text-center card-grid-3-image">

                                            <a href="blog-single.html">

                                                <figure><img alt="jobhub" src="images/home/img-blog-4.png" /></figure>

                                            </a>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-6 col-6 text-start">

                                                    <span>Sarah Harding</span>

                                                </div>

                                                <div class="col-lg-6 col-6 text-end">

                                                    <span>06 September</span>

                                                </div>

                                            </div>

                                            <h5 class="mt-15 heading-md"><a href="blog-single.html">How To Write an Interview Reschedule

                                                    Email</a></h5>

                                            <div class="card-2-bottom mt-50">

                                                <div class="row">

                                                    <div class="col-lg-9 col-8">

                                                        <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>

                                                    </div>

                                                    <div class="col-lg-3 text-end col-4">

                                                        <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="images/home/bookmark.svg" /></a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="card-grid-3 hover-up">

                                        <div class="text-center card-grid-3-image">

                                            <a href="blog-single.html">

                                                <figure><img alt="jobhub" src="images/home/img-blog-5.png" /></figure>

                                            </a>

                                        </div>

                                        <div class="card-block-info">

                                            <div class="row">

                                                <div class="col-lg-6 col-6 text-start">

                                                    <span>Sarah Harding</span>

                                                </div>

                                                <div class="col-lg-6 col-6 text-end">

                                                    <span>06 September</span>

                                                </div>

                                            </div>

                                            <h5 class="mt-15 heading-md"><a href="blog-single.html">12 Peer Interview Questions and Answers</a></h5>

                                            <div class="card-2-bottom mt-50">

                                                <div class="row">

                                                    <div class="col-lg-9 col-8">

                                                        <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>

                                                    </div>

                                                    <div class="col-lg-3 text-end col-4">

                                                        <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="images/home/bookmark.svg" /></a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="swiper-pagination swiper-pagination3"></div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="section-box mt-50 mb-60">

            <div class="container">

                <div class="box-newsletter">

                    <h5 class="text-md-newsletter">Sign up to get</h5>

                    <h6 class="text-lg-newsletter">the latest jobs</h6>

                    <div class="box-form-newsletter mt-30">

                        <form class="form-newsletter">

                            <input type="text" class="input-newsletter" value="" placeholder="contact.alithemes@gmail.com" />

                            <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>

                        </form>

                    </div>

                </div>

                <div class="box-newsletter-bottom">

                    <div class="newsletter-bottom"></div>

                </div>

            </div>

        </section>

    </main>

    <!-- End Content -->

@endsection