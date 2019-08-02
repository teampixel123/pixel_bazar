<?php
$title="Logo Design, Website & Print Designing in Kolhapur | PixelBazar";
$description="Best &#10004; Logo Design &#10004; Website Design &#10004; Print Design Company in Kolhapur. Over 15+ Years of experience in all industry verticals. Book Now !";
$keywords="graphic designer, design, designer, web design, websites, Logo design in Kolhapur, Innovative branding, Kolhapur,logo design,website design, graphic design, web design, logo, web page design, company logo, website development, web design company, business logo, logo creator, company logo design, custom logo design, business logo design, web development company, custom logo, Digital Marketing, SEO, Branding, Digital marketing sevices in kolhapur, logo design company in kolhapur, graphics design company in kolhapur, printing services in kolhapur, logo printing.";
$active='index';
include('head.php');
 ?>
<body class="main-page pc">

  <div class="banner">
	<div class="contain">
	  <div class="img-pc w-100"></div>
	  <a class="page-up" href="#navbar"><img alt="Arrow Down Icon" class="vert-move"  src="<?php echo base_url(); ?>assets/images/site/page-down.svg"></a>
	  <a class="logo1" href="<?php echo base_url(); ?>"><img alt="Arrow Down Icon" style="width:120px; height:120px;" src="<?php echo base_url(); ?>assets/images/site/Pixel_Logo-01.svg"></a>
	  <h1 class="com-info text-left">
		We are <span style="font-size:26px;">creative</span> design<br>agency in Kolhapur.<br>
		We <span style="font-size:26px;">design</span> <span class="typed" id="typed"></span>
	  </h1>
	  <span class="banner-mob-num mb-2">
      <a style="" href="https://api.whatsapp.com/send?phone=+919158995505">
      <i style="" class="">
          <svg style="" viewBox="0 0 448 512" ><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" class=""></path>
            </svg>
          </i>
      +91 91 58 99 55 05
      </a>
	  </span>
	  <!-- <div class="home-enquiry" style="background-color:#D3D3D3; ">
      <div class="pt-2 pb-2 pr-3 pl-3 enquiry_form1" style="background-color:#fff;">
        <form  action="<?php echo base_url(); ?>welcome/send_enquiry" method="post" id="enquiry_form" autocomplete="off" >
  			<div class="text-center set-font pb-1 pt-1">
  			  <h4><b>Get a Free Quote</b></h4>
  			</div>
        <div class="pl-1 alert-danger" style="display:none;">
          Request Not Sent
        </div>
        <div class="pl-1 alert-success" style="display:none;">
          Request Sent Successfully
        </div>
  			<div class="form-row">
  			  <div class="col-md-12 col-12">
  				<label for="exampleInputEmail1">Name/Company</label>
  				<input style="" type="text" id="name" name="name" class="form-control valid" placeholder="Full Name">
  			  </div>
  			</div>
  			<div class="form-row">
  			  <div class="col-md-12 col-12">
  				<label for="exampleInputEmail1">Email</label>
  				<input type="text" id="email" name="email" class="form-control valid" placeholder="Email Address">
  			  </div>
  			</div>
  			<div class="form-row">
  			  <div class="col-md-12 col-12">
  				<label for="exampleInputEmail1">Mobile Number</label>
  				<input type="number" id="mobile" name="mobile" class="form-control valid" placeholder="Enter Mobile Number">
  			  </div>
  			</div>
  			<br>
  		  </form>
        <div class="form-row">
  			  <div class="col-md-12 col-12 text-center" >
            <button id="btn_enquiry" type="button" class="btn btn-md btn-outline-warning2">Submit</button>
  			  </div>
  			</div>
      </div>
	  </div> -->
	</div>
  </div>
  <!-- Banner End -->
	<!-- page header -->
  <?php include('header.php'); ?>
  <!-- page header -->
  <!-- Mobile Enquiry form -->
  <div class="enquiry-mob" style="">
    <div class="home-enquiry-mob" >
      <div class="pt-2 pb-2 pr-3 pl-3 enquiry_form1" style="background-color:#fff; ">
        <form class=""  action="<?php echo base_url(); ?>welcome/send_enquiry" method="post" id="enquiry_form_mob" autocomplete="off" >
        <div class="text-center set-font pb-1 pt-1">
          <h4><b>Get a Free Quote</b></h4>
        </div>
        <div class="form-row">
          <div class="col-md-12 col-12">
          <label for="exampleInputEmail1">Name/Company</label>
          <input style="" type="text" id="name2" name="name" class="form-control valid" placeholder="Full Name">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 col-12">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" id="email2" name="email" class="form-control valid" placeholder="Email Address">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 col-12">
          <label for="exampleInputEmail1">Mobile Number</label>
          <input type="number" id="mobile2" name="mobile" class="form-control valid" placeholder="Enter Mobile Number">
          </div>
        </div>
        <br>
        </form>
        <div class="form-row">
          <div class="col-md-12 col-12 text-center" >
          <button id="btn_enquiry2" type="button" class="btn btn-md btn-outline-warning2">Submit</button>
          </div>
        </div>
      </div>
        <h1 class="com-info-mob text-left pt-3">
    		We are <span style="font-size:26px;">creative</span> design<br>agency in Kolhapur.<br>
    		We <span style="font-size:26px;">design</span> <span class="typed" id="typed2"></span>
    	  </h1>
    </div>
  </div>
<!-- // Mobile Enquiry form -->

  <!-- About Start -->
<section class="home-about" id="about">
  <div class="container">
  <div class="row">

    <div class="col-md-6 col-12 info ">
      <div data-aos="fade-up"     data-aos-easing="linear"     data-aos-duration="1500">
      <p class="paragraph">At PixelBazar, we create a compelling brand presence for your company with the help of our extremely talented and professional group of web developers and graphic designers. We are innovative and creative while providing an absorbing corporate identity for companies in various sectors. We are very much passionate about what we do and that is why we have flourished and delivered some of the superlative development and design solutions to our large clientele. Over the past 15 years, we have created a reputation for providing standout solutions for companies of various verticals.  The efficient team of PixelBazar is providing support to a wide array of businesses and making them satisfied with prowess. Currently, we are adding more to our long list of providing attractive logos, digital marketing, signage solutions, website design services and website development services to multiple businesses. All our services are comprehensive encompassing the expectations set by our clientele. We are also very much thankful to our clientele for giving us the opportunity of serving them holistically.
      </dt>
      </p><br>
    <a class="btn btn-lg btn-outline-warning margin-top" href="<?php echo base_url(); ?>Contact">Just Drop us mail</a>
    </div>
  </div>
    <div class="col-md-6 col-12 pb-3 frist-div">
        <h1 class="title ">
          <span class=""><span class="title-small">Your </span>Business<br/>
          Branding <span class="title-small">Partner<br/>
          In Kolhapur</span></span><br/>
        </h1>
      <a data-href="<?php echo base_url(); ?>assets/images/site/logo_design_services_kolhapur.jpg" class="boxout2 progressive replace">
        <img src="<?php echo base_url(); ?>assets/images/site/logo_design_services_kolhapur.jpg" class="preview" alt="logo design, website design, graphic design, web design, web page design, company logo, website development, web design company, business logo, website design services in kolhapur, logo design services in kolhapur, Graphic design services in kolhapur" />
      </a>
    </div>
  </div>
</div>
</section>
<hr>
<!-- Our Services Start-->
<section class="home-services d-none d-sm-block" id="services">
    <div class="container home-services">
      <h1 class="title text-center ">
        <span class="">Our Services</span>
      </h1>
    <div class="row">
      <div class="col-md-4">
        <div class="tab">
        <button class="tablinks" onmouseover="openCity(event, 'London','tab1')" id="tab1">
          <div class="services-box text-center">
            <div class="row">
              <div class="trans active-trans " style="width:80px; height:80px">
                <svg class="svg mt-3 ml-3" x="0px" y="0px" width="58px"
      height="55px" viewBox="0 0 70 57" enable-background="new 0 0 70 57" xml:space="preserve">

                		<path d="M3.688,8.166h36.031v5.622h3.015V7.042c0-1.022-0.868-1.891-1.891-1.891H2.615
                			c-1.022,0-1.891,0.868-1.891,1.891v25.911c0,1.022,0.818,1.891,1.891,1.891h15.383v3.424h-3.373c-0.511,0-0.92,0.409-0.92,0.92
                			v1.788c0,0.511,0.409,0.92,0.92,0.92h14.31c0.511,0,0.92-0.409,0.92-0.92v-1.788c0-0.511-0.409-0.92-0.92-0.92h-3.424v-3.424
                			h7.053v-6.593H3.688V8.166z M21.729,30.193c0.716,0,1.329,0.613,1.329,1.329c0,0.716-0.613,1.329-1.329,1.329
                			c-0.716,0-1.329-0.613-1.329-1.329C20.4,30.806,21.014,30.193,21.729,30.193z"/>
                		<path d="M47.231,15.934H36.703c-1.124,0-1.993,0.92-1.993,2.044v21.976c0,1.124,0.92,2.044,1.993,2.044h10.528
                			c1.124,0,2.044-0.92,2.044-2.044V17.928C49.276,16.803,48.356,15.934,47.231,15.934z M40.281,17.416h3.322
                			c0.255,0,0.46,0.204,0.46,0.46c0,0.255-0.204,0.46-0.46,0.46h-3.322c-0.255,0-0.46-0.204-0.46-0.46
                			C39.821,17.62,40.026,17.416,40.281,17.416z M41.968,40.466c-0.716,0-1.329-0.613-1.329-1.329s0.613-1.329,1.329-1.329
                			c0.716,0,1.329,0.613,1.329,1.329C43.297,39.853,42.683,40.466,41.968,40.466z M47.078,36.326H36.857V19.818h10.272v16.507H47.078
                			z"/>

                </svg>
              </div>
                <h3 class="align-self-center active-h3 service-h3">&nbsp;Website Design</h3>
            </div>

            </div></button>
        <button class="tablinks" onmouseover="openCity(event, 'Paris','tab2')" id="tab2">
          <div class="services-box text-center">
            <div class="row animation-click">
              <div class="trans " style="width:80px; height:80px">
                <svg class="svg mt-3 ml-3" x="0px" y="0px" width="58px"
      height="55px" viewBox="0 0 70 57" enable-background="new 0 0 70 57" xml:space="preserve">

                    <path d="M44.272,14.811c0.03,0.033,0.053,0.062,0.074,0.094l7.808,15.549c0.065,0.112,0.083,0.148,0.099,0.184
                      l0.069,0.222l0.022,0.22l-0.006,0.095l-0.012,0.104l-0.028,0.115l-0.04,0.122l-0.08,0.158l-2.791,4.573v0.677
                      c0.741,0.222,1.273,0.905,1.273,1.715v1.889c0,0.99-0.804,1.794-1.794,1.794H37.942c-0.989,0-1.793-0.804-1.793-1.794v-1.889
                      c0-0.81,0.531-1.492,1.273-1.715v-0.677l-2.81-4.605l-0.025-0.057c-0.006-0.008-0.028-0.052-0.045-0.096l-0.062-0.226
                      c0,0-0.014-0.172-0.013-0.214c0,0,0.017-0.167,0.026-0.208l0.032-0.11l0.048-0.13l0.053-0.094l7.858-15.634l0.036-0.038
                      c0.035-0.05,0.061-0.081,0.091-0.108l0.116-0.095c0.088-0.064,0.123-0.082,0.158-0.101l0.129-0.057l0.224-0.069l0.034,0.011
                      c0.033-0.007,0.082-0.013,0.133-0.013c0.133,0.008,0.178,0.012,0.222,0.021l0.105,0.029h0.042l0.1,0.05
                      c0.095,0.049,0.134,0.071,0.171,0.097c0.093,0.07,0.131,0.101,0.165,0.135 M38.419,40.792l9.968-0.005l-0.001-2.832l-9.969,0.005
                      L38.419,40.792z M47.613,34.792l2.248-3.683l-5.319-11.803l-0.286,7.243c0.845,0.344,1.415,1.171,1.415,2.098
                      c0,1.249-1.017,2.266-2.266,2.266s-2.266-1.017-2.266-2.266c0-0.928,0.57-1.755,1.415-2.098l-0.285-7.243l-5.32,11.803
                      l2.248,3.683H47.613z"/>
                    <path d="M5.109,39.426c-2.455,0-4.453-1.998-4.453-4.453V5.131c0-2.455,1.998-4.453,4.453-4.453h35.809
                      c2.455,0,4.453,1.998,4.453,4.453V9.11c0,0.81-0.659,1.469-1.469,1.469c-0.811,0-1.47-0.659-1.47-1.469V5.131
                      c0-0.835-0.679-1.514-1.514-1.514H5.109c-0.835,0-1.514,0.679-1.514,1.514v29.841c0,0.835,0.679,1.514,1.514,1.514h0.386
                      l16.479-16.479c0.277-0.277,0.646-0.43,1.039-0.43s0.762,0.153,1.039,0.43l3.934,3.934l4.93-4.929
                      c0.281-0.272,0.643-0.418,1.027-0.418c0.383,0,0.745,0.146,1.02,0.412c0.282,0.272,0.441,0.639,0.448,1.031
                      c0.006,0.393-0.14,0.765-0.412,1.046l-4.934,4.935l2.71,2.716c0.558,0.578,0.558,1.475,0.006,2.046
                      c-0.28,0.29-0.656,0.449-1.058,0.449l0,0c-0.384,0-0.746-0.146-1.021-0.412l-7.689-7.695L7.143,38.995
                      c-0.273,0.274-0.652,0.431-1.039,0.431H5.109z"/>
                    <path d="M20.029,17.542c-3.004,0-5.448-2.444-5.448-5.448c0.004-3.001,2.448-5.445,5.447-5.448
                      c3.005,0,5.449,2.444,5.449,5.448S23.033,17.542,20.029,17.542z M20.029,9.585c-1.384,0-2.509,1.126-2.509,2.51
                      s1.125,2.509,2.509,2.509s2.51-1.125,2.51-2.509S21.413,9.585,20.029,9.585z"/>
                    <path d="M12.073,39.426c-0.811,0-1.47-0.659-1.47-1.47c0-0.81,0.659-1.469,1.47-1.469h26.315v2.939H12.073z"/>

                </svg>
              </div>
                <h3 class="align-self-center service-h3">&nbsp;Graphic Design</h3>
            </div>

            </div></button>
        <button class="tablinks" onmouseover="openCity(event, 'Tokyo','tab3')" id="tab3">
          <div class="services-box text-center">
            <div class="row">
              <div class="trans " style="width:80px; height:80px">
                <svg class="svg mt-3 ml-4" x="0px" y="0px" width="60px"
      height="60px" viewBox="0 0 55 47" enable-background="new 0 0 70 57" xml:space="preserve">

                		<path d="M34.634,19.631c-0.011-0.229-0.021-0.465-0.028-0.708l-0.061,0.057c-0.271,0.249-0.487,0.445-0.693,0.651
                			l-2.76,2.764c-2.632,2.638-5.353,5.364-8.063,8.012c-0.539,0.526-1.406,0.906-2.11,0.924c-1.619,0.042-3.238,0.048-4.858,0.048
                			l-2.1-0.001c-1.017,0-2.033,0.003-3.099,0.015c-0.934,0-1.449-0.357-1.778-1.233c-0.773-2.061-2.192-3.501-4.219-4.28
                			c-1.044-0.401-1.247-1.045-1.236-1.951c0.031-2.859,0.055-6.235-0.009-9.602c-0.02-1.005,0.3-1.757,1.067-2.515
                			c2.908-2.864,5.791-5.754,8.674-8.644l2.134-2.139c0.185-0.185,0.358-0.378,0.536-0.576c-0.539-0.085-1.06-0.128-1.552-0.128
                			c-2.374,0-4.282,0.945-6.005,2.976C6.884,5.175,5.065,6.9,3.306,8.57L2.151,9.671c-1.253,1.2-1.83,2.583-1.819,4.352
                			c0.026,4.058,0.022,8.116,0.018,12.175c-0.002,2.086-0.004,4.172-0.002,6.258c0.002,1.755,0.458,2.21,2.217,2.212l11.715-0.001
                			c2.326,0,4.653,0.002,6.98,0.01h0.025c1.51,0,2.743-0.507,3.773-1.548c0.892-0.901,1.793-1.795,2.693-2.688
                			c1.779-1.763,3.619-3.587,5.352-5.447c0.646-0.692,1.172-1.769,1.442-2.953C34.711,21.316,34.675,20.535,34.634,19.631z"/>
                		<path d="M15.386,17.014c-0.229,0.194-0.454,0.387-0.675,0.578l2.491,2.57l0.035-0.031
                			c0.15-0.135,0.276-0.248,0.396-0.368c5.431-5.429,10.86-10.858,16.288-16.29c0.859-0.86,0.95-1.824,0.243-2.579
                			c-0.318-0.339-0.705-0.518-1.12-0.518c-0.511,0-1.039,0.258-1.527,0.745l-4.635,4.634c-3.14,3.141-6.279,6.281-9.432,9.408
                			C16.787,15.823,16.075,16.429,15.386,17.014z"/>
                		<path d="M19.953,23.295c-0.115,0.115-0.181,0.448-0.143,0.535c0.35,0.766,0.737,1.495,1.148,2.269l0.304,0.574
                			c0.031-0.018,0.057-0.033,0.069-0.047c4.314-4.299,8.628-8.601,12.929-12.914c0.196-0.196,0.335-0.429,0.338-0.565
                			c0.029-1.228,0.025-2.456,0.021-3.678l-0.001-0.801l-0.691,0.688C29.262,13.995,24.598,18.635,19.953,23.295z"/>
                		<path d="M8.761,13.288c-0.146,0.146-0.275,0.309-0.414,0.482l2.716,1.371L25.87,0.382
                			c-0.104,0.001-0.208,0.003-0.313,0.004c-0.381,0.005-0.772,0.01-1.17,0.01c-0.52,0-1.049-0.009-1.577-0.035l-0.165-0.005
                			c-0.695,0-1.231,0.244-1.795,0.815c-2.748,2.784-5.516,5.548-8.282,8.313L8.761,13.288z"/>

                </svg>
              </div>
                <h3 class="align-self-center service-h3">&nbsp;Logo Design</h3>
            </div>

            </div></button>
            <button class="tablinks" onmouseover="openCity(event, 'delhi','tab4')" id="tab4">
              <div class="services-box text-center">
                <div class="row">
                  <div class="trans " style="width:80px; height:80px">
                    <svg class="svg mt-3 ml-3" x="0px" y="0px" width="58px"
          height="58px" viewBox="0 0 70 57" enable-background="new 0 0 70 57" xml:space="preserve">
                    			<path d="M43.092,0.696c-10.723,0-20.641,4.594-27.591,12.114H1.907c-0.49,0-0.931,0.295-1.119,0.747
                    				c-0.188,0.453-0.084,0.973,0.263,1.32l7.855,7.855c-0.812,1.788-1.495,3.653-2.025,5.591c-0.115,0.42,0.004,0.868,0.312,1.176
                    				l8.308,8.307c0.23,0.231,0.54,0.355,0.857,0.355c0.106,0,0.214-0.014,0.32-0.043c1.938-0.53,3.804-1.212,5.591-2.025l7.855,7.855
                    				c0.231,0.232,0.542,0.355,0.856,0.355c0.156,0,0.313-0.03,0.463-0.092c0.453-0.188,0.748-0.63,0.748-1.119V29.499
                    				c7.519-6.95,12.113-16.868,12.113-27.591C44.304,1.238,43.762,0.696,43.092,0.696z M16.711,35.591l-7.301-7.302
                    				c2.954-10.013,10.165-17.96,19.314-22.079L38.79,16.276C34.671,25.425,26.724,32.636,16.711,35.591z M41.86,3.14
                    				c-0.131,3.718-0.852,7.32-2.079,10.701L31.159,5.22C34.54,3.992,38.141,3.271,41.86,3.14z M4.831,15.232h8.615
                    				c-1.269,1.631-2.408,3.372-3.402,5.212L4.831,15.232z M29.768,40.168l-5.212-5.212c1.841-0.993,3.582-2.132,5.212-3.402V40.168z"
                    				/>
                    			<path d="M1.907,44.304c0.31,0,0.62-0.118,0.857-0.355l4.845-4.845c0.473-0.473,0.473-1.24,0-1.713
                    				c-0.473-0.473-1.24-0.473-1.713,0l-4.845,4.845c-0.473,0.473-0.473,1.24,0,1.713C1.287,44.186,1.597,44.304,1.907,44.304z"/>
                    			<path d="M7.107,43.95c0.236,0.236,0.546,0.355,0.857,0.355c0.31,0,0.62-0.118,0.857-0.355l3.634-3.634
                    				c0.473-0.473,0.473-1.24,0-1.713c-0.473-0.473-1.24-0.473-1.713,0l-3.634,3.634C6.634,42.709,6.634,43.476,7.107,43.95z"/>
                    			<path d="M1.907,38.247c0.31,0,0.62-0.118,0.857-0.355l3.634-3.634c0.473-0.473,0.473-1.24,0-1.713
                    				c-0.473-0.473-1.24-0.473-1.713,0L1.052,36.18c-0.473,0.473-0.473,1.24,0,1.713C1.287,38.129,1.597,38.247,1.907,38.247z"/>
                    			<path d="M24.922,14.021c-3.34,0-6.056,2.716-6.056,6.056s2.716,6.056,6.056,6.056s6.056-2.716,6.056-6.056
                    				S28.262,14.021,24.922,14.021z M24.922,23.711c-2.004,0-3.634-1.63-3.634-3.634s1.63-3.634,3.634-3.634s3.634,1.63,3.634,3.634
                    				S26.927,23.711,24.922,23.711z"/>
                    </svg>
                  </div>
                    <h3 class="align-self-center service-h3">&nbsp;Strategic Branding</h3>
                </div>

                </div></button>
      </div>

      </div>
    <div class="col-md-8  service-row-text">
      <!-- <div class="tabcontent  shadow image-default ">
        <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div>
        <div class="sub-tabcontent">
        <img class="service-image" src="<?php echo base_url(); ?>assets/images/site/webs.gif" alt="">
      <p class="paragraph service-para">Website is the face of your brand, our designers can give it an appealing look which can generate more traffic and ultimately quality leads in your pocket. Our website design company in Kolhapur is what you need to make your website stand out.</p>
      <p class="service-btn"><a class="btn btn-md btn-outline-warning margin-top " href="<?php echo base_url(); ?>Creative-Design-Portfolio">VIEW MORE</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn btn-md btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
      </p>
        </div>
      </div> -->
      <div data-aos="fade-up"     data-aos-easing="linear"     data-aos-duration="1500">
      <div id="London" class="tabcontent shadow ">
        <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
        <div class="sub-tabcontent">
          <div data-aos="fade-up"     data-aos-easing="linear"     data-aos-duration="1500"><img class="service-image" src="<?php echo base_url(); ?>assets/images/site/website_design_kolhapur.gif" alt="website design, website, website development, website developer, application developer, static website, dynamic website, ecommerce website, website design company in kolhapur"></div>
      <p class="paragraph service-para">Website is the face of your brand, our designers can give it an appealing look which can generate more traffic and ultimately quality leads in your pocket. Our website design company in Kolhapur is what you need to make your website stand out.</p>
        <div data-aos="fade-up"     data-aos-easing="linear"     data-aos-duration="1500"><p class="service-btn"><a class="btn btn-md btn-outline-warning margin-top " href="<?php echo base_url(); ?>website-design-development-kolhapur">READ MORE</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn btn-md btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
      </p></div>
        </div>
    </div>
  </div>

    <div class="animation">
    <div id="Paris" class="tabcontent  shadow">
      <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
      <div class="sub-tabcontent">
      <img class="service-image" src="<?php echo base_url(); ?>assets/images/site/graphic_design_kolhapur.gif" alt="Graphic design, graphic design company in kolhapur, graphic design service in kolhapur, graphic designers">
    <p class="paragraph service-para">Awesome graphics! So, what else you need? Whether you need graphic designing services for your brochure, flyer or for corporate profile. We are here for making you stand out with our stunning graphics. We have a team of designers who have done graduate diploma in GD ARTS. Our award winning designs are very much proficient in delivering creative designing work for our clientele. </p>
    <p class="service-btn"><a class="btn btn-md btn-outline-warning margin-top " href="<?php echo base_url(); ?>graphic-design-services-kolhapur">READ MORE</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-md btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
    </p>
      </div>
      </div>
    </div>

    <div id="Tokyo" class="tabcontent shadow">
      <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
      <div class="sub-tabcontent">
      <img class="service-image mt-5" src="<?php echo base_url(); ?>assets/images/site/logo_design_kolhapur.jpg" alt="logo design company in kolhapur, logo design service in kolhapur, logo designers, logo, logo creator">
    <p class="paragraph service-para">When it comes to creating custom logo designs, we are the first option for many of our customers. Our logo design services are for those who want to impress their client right from the logo.</p>
    <p class="service-btn"><a class="btn btn-md btn-outline-warning margin-top " href="<?php echo base_url(); ?>logo-design-kolhapur">READ MORE</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-md btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
    </p>
      </div>
    </div>

    <div id="delhi" class="tabcontent shadow">
      <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
      <div class="sub-tabcontent">
      <img class="service-image mt-5" src="<?php echo base_url(); ?>assets/images/site/branding_in_kolhapur.jpeg" alt="branading, advertising company in kolhapur">
    <p class="paragraph service-para">Earn name and fame in the market through our branding services. Make customers aware about your offerings and tell them why you are better than your competitors. Our strategic branding can create long lasting impression on your customer's mind and this is a good news, isn’t it?</p>
    <p class="service-btn"><a class="btn btn-md btn-outline-warning margin-top " href="<?php echo base_url(); ?>strategic-branding-kolhapur">READ MORE</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-md btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
    </p>
      </div>
    </div>

    <div class="clearfix"></div>
    </div>
    </div>
    <br><br>

    <div class="row">
      <div class="col-md-8 service-row-text">
        <div class="image-default2 ">
          <img class="bounce" src="" alt="" width="100%">
        </div>

        <div id="London1" class="tabcontent2 shadow">
          <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
          <div class="sub-tabcontent">
            <img class="service-image mt-5" src="<?php echo base_url(); ?>assets/images/site/digital_marketing_company_kolhapur.jpeg" alt="digital marketing company in kolhapur, digital marketing services in kolhapur, social media marketing, facebook marketing, seo services in kolhapur">
        <p class="paragraph service-para">We have a vigorous approach towards providing digital marketing services which can bring extremely powerful results for the business. Any type of digital marketing campaign you want to run, we have got it all covered with prowess.</p>
        <p class="service-btn"><a class="btn btn-md btn-outline-warning margin-top " href="<?php echo base_url(); ?>digital-marketing-services-kolhapur">READ MORE</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-md btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
        </p>
      </div>  </div>

      <div id="Paris1" class="tabcontent2 shadow">
        <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
        <div class="sub-tabcontent">
        <img class="service-image mt-5" src="<?php echo base_url(); ?>assets/images/site/signage_printing.jpg" alt="signage design in kolhapur, signage printing in kolhapur, signage services in kohapur">
      <p class="paragraph service-para">Impress your customers at the very first go through high quality signage. We have expertise in designing both interior and exterior signage. You can trust on us when it comes to signage solutions because of our good experience in the same. So, leave your signage designing hassle to us for making your work easy.</p>
      <p class="service-btn">
        <a class="btn btn-md btn-outline-warning margin-top " href="<?php echo base_url(); ?>signage-design-printing-kolhapur">READ MORE</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-md btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
      </p>
        </div></div>

      <div data-aos="fade-up"     data-aos-easing="linear"     data-aos-duration="1500">
      <div id="Tokyo1" class="tabcontent2 shadow">
        <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
        <div class="sub-tabcontent">
        <img class="service-image mt-5" src="<?php echo base_url(); ?>assets/images/site/printing_services_kolhapur.jpeg" alt="logo printing, brochure printing, signage printing, tshirt printing, pomplate printing, book printing">
      <p class="paragraph service-para">A perfect color combination makes a print eye-catchy. If you are looking for business cards, Envelop, Flyers, Book, Brochure Printing or any type of printing. Then we are here to give you a professional look through our stunning prints.</p>
      <p class="service-btn">
        <a class="btn btn-md btn-outline-warning margin-top " href="<?php echo base_url(); ?>printing-services-kolhapur">READ MORE</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-md btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
      </p>
    </div></div></div>

      <div id="delhi1" class="tabcontent2 shadow">
        <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
        <div class="sub-tabcontent">
        <img class="service-image mt-5" src="<?php echo base_url(); ?>assets/images/site/Corporate_eventsS.jpg" alt="">
      <p class="paragraph service-para">Keep your customers glued up with your event through outstanding designs. We are here to design your signage, brochure, display booth or wall display for making your exhibition or event memorable. We have an experience of handling corporate events all over India and have made our customers happy by successfully completing their events.</p>
      <p class="service-btn"><a class="btn btn-md btn-outline-warning margin-top " href="<?php echo base_url(); ?>corporate-event-management">READ MORE</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn btn-md btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
      </p>
        </div>
      </div>

      <div class="clearfix"></div>
      </div>
      <div class="col-md-4">
        <div class="tab">
        <button class="tablinks" onmouseover="openCity2(event, 'London1','tab5')" id="tab5">
          <div class="services-box text-center">
            <div class="row">
              <h3 class="align-self-center service-h3-2">Digital Marketing</h3>
              <div class="trans2 " style="width:80px; height:80px">
                <svg class="svg mt-3" x="0px" y="0px" width="50px"
      height="50px" viewBox="0 0 77 77" enable-background="new 0 0 77 77" xml:space="preserve">

                		<path  d="M49.101,28.311c-0.002-2.054-1.666-3.718-3.72-3.721h-8.676c0.342-1.816,0.515-3.66,0.515-5.508
                			c-0.002-2.22-1.802-4.017-4.022-4.016c-1.072,0.001-2.1,0.43-2.854,1.192c-0.759,0.763-1.176,1.801-1.158,2.877
                			c0.031,2.342-0.062,3.996-1.583,5.586c-0.671,0.702-2.172,1.712-3.009,2.245v-0.052H15.02v18.768h7.156
                			c1.208-0.004,2.227-0.9,2.385-2.098c0.899,1.36,2.564,2.36,5.518,2.36h10.945c2.054,0.001,3.721-1.664,3.721-3.719
                			c0-0.482-0.093-0.958-0.275-1.404c1.574-0.908,2.26-2.82,1.624-4.521c1.831-0.918,2.572-3.146,1.654-4.977
                			c-0.017-0.034-0.035-0.069-0.053-0.103C48.584,30.517,49.102,29.445,49.101,28.311z M22.97,42.452
                			c-0.129,0.981-1.029,1.672-2.01,1.544c-0.981-0.129-1.672-1.029-1.544-2.01c0.105-0.804,0.737-1.437,1.541-1.543
                			c0.983-0.128,1.884,0.564,2.012,1.547C22.99,42.143,22.99,42.298,22.97,42.452z M45.381,29.413h-0.114
                			c-0.723,0.002-1.308,0.59-1.306,1.313c0.001,0.545,0.34,1.032,0.851,1.223c0.57,0.211,0.86,0.844,0.649,1.414
                			c-0.161,0.435-0.578,0.722-1.042,0.717h-0.853c-0.723,0-1.309,0.586-1.309,1.309c0,0.522,0.31,0.993,0.788,1.201
                			c0.562,0.235,0.827,0.881,0.592,1.443c-0.173,0.414-0.58,0.682-1.029,0.677h-0.622c-0.723,0-1.309,0.587-1.309,1.31
                			c0,0.52,0.308,0.991,0.785,1.199c0.556,0.248,0.805,0.899,0.558,1.455c-0.176,0.394-0.565,0.65-0.997,0.653H30.086
                			c-2.315,0-3.857-0.582-3.857-3.421V29.028c0.876-0.561,2.416-1.61,3.263-2.495c2.197-2.296,2.345-4.725,2.308-7.437
                			c-0.005-0.775,0.619-1.407,1.394-1.412c0.775-0.005,1.407,0.619,1.412,1.394c-0.001,2.192-0.266,4.375-0.791,6.503
                			c-0.174,0.702,0.255,1.412,0.957,1.585c0.1,0.025,0.203,0.038,0.306,0.038h10.301c0.609-0.022,1.12,0.454,1.142,1.063
                			s-0.454,1.12-1.063,1.142c-0.026,0.001-0.052,0.001-0.079,0L45.381,29.413z"/>
                		<path  d="M61.653,50.798c4.45-1.218,8.54-3.494,11.921-6.633c0.012-0.012,0.019-0.027,0.031-0.039
                			c0.029-0.028,0.049-0.062,0.075-0.093c0.094-0.108,0.173-0.229,0.234-0.359c0.021-0.045,0.041-0.087,0.057-0.134
                			c0.064-0.171,0.098-0.353,0.099-0.536l0.002-0.011c-0.002-0.131-0.021-0.261-0.055-0.387l0,0l0,0
                			c-0.043-0.147-0.108-0.287-0.192-0.416c-0.024-0.038-0.051-0.072-0.079-0.108c-0.029-0.044-0.06-0.087-0.093-0.129
                			c-0.026-0.028-0.062-0.038-0.089-0.064c-0.298-0.24-0.659-0.388-1.039-0.428c-0.015,0-0.028-0.007-0.043-0.007
                			c-5.009,0.15-9.741-2.295-12.517-6.466c0.484-3.57,0.251-7.201-0.685-10.68C54.839,8.642,38.556-0.474,22.88,3.929
                			C7.144,8.113-2.238,24.244,1.908,39.99c4.474,16.369,22.411,23.758,36.354,20.391c5.504-1.394,10.463-4.408,14.235-8.651
                			C55.579,51.911,58.671,51.597,61.653,50.798z M4.927,39.165C1.235,25.086,9.635,10.675,23.705,6.949
                			c14.009-3.95,28.572,4.185,32.555,18.184c0.889,3.28,1.072,6.712,0.539,10.068c-0.002,0.077,0.001,0.153,0.011,0.229
                			c-0.027,0.226,0.022,0.454,0.14,0.648c0.024,0.076,0.053,0.15,0.089,0.221c0.012,0.019,0.028,0.034,0.041,0.053l0.015,0.02
                			c1.937,2.978,4.698,5.329,7.946,6.768c1.118,0.475,2.282,0.835,3.473,1.073c-4.843,3.328-10.691,4.871-16.546,4.364
                			c-0.041-0.003-0.078,0.014-0.118,0.014c-0.41,0.007-0.803,0.166-1.102,0.446c-0.029,0.029-0.067,0.041-0.094,0.072
                			c-3.417,4.036-8.004,6.911-13.126,8.228C25.01,60.361,8.923,53.781,4.927,39.165z"/>
                </svg>
              </div>

            </div>

            </div></button>
        <button class="tablinks" onmouseover="openCity2(event, 'Paris1','tab6')" id="tab6">
          <div class="services-box text-center">
            <div class="row">
                <h3 class="align-self-center service-h3-2">Signage Solutions</h3>
              <div class="trans2 " style="width:80px; height:80px">
                <svg class="svg mt-4 ml-3" x="0px" y="0px" width="50px"
      height="50px" viewBox="0 0 77 77" enable-background="new 0 0 77 77" xml:space="preserve">
                	<path d="M46.176,7.358c0.796,1.321,2.237,2.151,3.795,2.151c2.447,0,4.438-1.99,4.438-4.438
                		c0-2.447-1.991-4.439-4.438-4.439c-1.559,0-2.999,0.83-3.795,2.152H8.824C8.027,1.462,6.587,0.632,5.029,0.632
                		c-2.448,0-4.438,1.992-4.438,4.439c0,2.448,1.991,4.438,4.438,4.438c1.558,0,2.998-0.83,3.795-2.151h1.367v18.464l-6.99,6.99
                		c-0.802,0.802-1.244,1.872-1.244,3.013c0,1.141,0.441,2.21,1.244,3.013l21.286,21.286c0.802,0.802,1.873,1.244,3.013,1.244
                		c1.141,0,2.211-0.442,3.013-1.244l21.286-21.286c0.802-0.802,1.244-1.872,1.244-3.013c0-1.141-0.442-2.211-1.244-3.013l-6.99-6.99
                		V7.358H46.176z M16.287,7.358h22.427v12.369l-8.2-8.201c-0.802-0.802-1.872-1.244-3.013-1.244c-1.141,0-2.211,0.442-3.013,1.244
                		l-8.2,8.201V7.358z M50.714,33.897c0.512,0.512,0.794,1.196,0.794,1.928c0,0.731-0.282,1.416-0.794,1.928L29.428,59.039
                		c-1.025,1.026-2.832,1.024-3.856,0L4.286,37.753c-0.512-0.513-0.794-1.197-0.794-1.928c0-0.731,0.282-1.416,0.794-1.928
                		l21.286-21.286c0.513-0.512,1.197-0.795,1.928-0.795s1.416,0.283,1.928,0.795L50.714,33.897z M20.898,24.706
                		c-1.119,1.196-1.679,2.938-1.679,5.22c0,2.128,0.46,3.691,1.38,4.688c0.92,0.998,2.544,1.729,4.873,2.195l2.793,0.532
                		c1.552,0.312,2.61,0.744,3.175,1.298c0.566,0.555,0.849,1.497,0.849,2.827c0,1.375-0.399,2.372-1.197,2.993
                		s-2.084,0.931-3.858,0.931c-1.885,0-3.314-0.46-4.29-1.38c-0.976-0.92-1.485-2.234-1.53-3.94h-2.46v7.582h2.46v-2.394
                		c1.352,1.906,3.536,2.859,6.552,2.859c2.748,0,4.727-0.592,5.936-1.779c1.207-1.185,1.812-2.931,1.812-5.236
                		c0-2.128-0.482-3.675-1.446-4.64c-0.965-0.965-2.633-1.69-5.005-2.178l-2.693-0.532c-1.62-0.333-2.678-0.759-3.176-1.28
                		c-0.499-0.521-0.748-1.391-0.748-2.61c0-1.441,0.332-2.504,0.997-3.192c0.665-0.687,1.884-1.031,3.658-1.031
                		c3.281,0,5.066,1.429,5.354,4.289h2.461v-6.55h-2.461v2.127c-1.197-1.729-3.226-2.594-6.085-2.594
                		C23.907,22.909,22.017,23.508,20.898,24.706z"/>

                </svg>
              </div>
            </div>

            </div></button>
        <button class="tablinks" onmouseover="openCity2(event, 'Tokyo1','tab7')" id="tab7">
          <div class="services-box text-center">
            <div class="row">
                <h3 class="align-self-center active-h3 service-h3-2">Printing Services</h3>
              <div class="trans2 active-trans " style="width:80px; height:80px">
                <svg class="svg mt-3" x="0px" y="0px" width="50px"
      height="50px" viewBox="0 0 77 77" enable-background="new 0 0 77 77" xml:space="preserve">

                		<path  d="M62.02,30.758L44.097,1.523l-12.12,7.43c-5.211,0-10.241,0-14.815,0c-0.511-0.007-1.03,0.589-1.043,1.063
                			v8.658L0.98,27.956l17.922,29.235l3.583-2.197v0.764c0.111,1.183,1.083,2.11,2.127,2.127H43.76
                			c0.452-0.032,0.801-0.376,1.081-0.632c2.722-2.576,5.787-5.427,8.161-7.629c0.211-0.2,0.335-0.49,0.333-0.781l0.013-25.583
                			l-0.006,12.817L62.02,30.758z M16.443,51.18c0.03,0.03,0.071,0.046,0.104,0.072C16.514,51.226,16.473,51.21,16.443,51.18z
                			 M22.486,17.463v31.912h-4.238V11.08h26.594v4.255H24.613C23.43,15.446,22.503,16.418,22.486,17.463z M51.206,46.184
                			c-3.363,0-6.726,0-10.089,0c0,3.191,0,6.383,0,9.574H24.613V17.463c8.854-0.036,17.8,0.054,26.61-0.007L51.206,46.184z
                			 M51.223,15.328l-4.255,0.007v-5.318c0-0.418-0.285-0.808-0.663-0.976c0.377,0.168,0.663,0.558,0.663,0.976v5.318L51.223,15.328
                			c0.677,0.13,1.305,0.707,1.763,1.439C52.527,16.035,51.9,15.458,51.223,15.328z"/>
                		<rect x="28.869" y="23.313"  width="18.083" height="2.128"/>
                		<rect x="28.869" y="30.759"  width="18.083" height="2.127"/>
                		<rect x="28.869" y="38.206"  width="12.765" height="2.127"/>

                </svg>
              </div>
            </div>

            </div></button>
            <button class="tablinks" onmouseover="openCity2(event, 'delhi1','tab8')" id="tab8">
              <div class="services-box text-center">
                <div class="row">
                  <h3 class="align-self-center service-h3-2">Corporate events</h3>
                  <div class="trans2 " style="width:80px; height:80px">
                    <svg class="svg mt-3 ml-2" x="0px" y="0px" width="50px"
          height="50px" viewBox="0 0 77 77" enable-background="new 0 0 77 77" xml:space="preserve">
                    	<path d="M55.689,47.493h-0.92V35.177c0.566-0.647,0.92-1.483,0.92-2.409c0-2.03-1.651-3.682-3.681-3.682
                    		s-3.681,1.651-3.681,3.682c0,0.926,0.354,1.762,0.92,2.409v1.066c-1.625,3.599-5.3,5.896-9.163,5.729
                    		c-3.587-0.156-6.832-2.407-8.323-5.742v-1.053c0.566-0.647,0.92-1.483,0.92-2.409c0-2.03-1.651-3.682-3.681-3.682
                    		s-3.682,1.651-3.682,3.682c0,0.926,0.354,1.762,0.92,2.409v1.066c-1.625,3.599-5.297,5.896-9.163,5.729
                    		c-3.587-0.156-6.832-2.407-8.323-5.742v-1.053c0.566-0.647,0.92-1.483,0.92-2.409c0-2.03-1.651-3.682-3.681-3.682
                    		s-3.681,1.651-3.681,3.682c0,0.926,0.354,1.762,0.92,2.409v12.316h-0.92c-0.509,0-0.92,0.411-0.92,0.92v3.681
                    		c0,0.509,0.412,0.92,0.92,0.92h53.378c0.509,0,0.92-0.412,0.92-0.92v-3.681C56.61,47.904,56.198,47.493,55.689,47.493z
                    		 M52.008,30.927c1.015,0,1.841,0.826,1.841,1.841c0,0.535-0.233,1.012-0.598,1.349c0,0-0.012,0.006-0.017,0.011
                    		c-0.688,0.619-1.762,0.619-2.45,0c-0.005-0.004-0.012-0.007-0.012-0.007c-0.372-0.34-0.605-0.818-0.605-1.353
                    		C50.167,31.753,50.993,30.927,52.008,30.927z M52.929,36.329v11.164h-1.841V36.329c0.031,0.008,0.064,0.011,0.096,0.019
                    		c0.061,0.014,0.123,0.024,0.185,0.036c0.204,0.037,0.409,0.061,0.616,0.063c0,0,0.015,0.003,0.023,0.003s0.016-0.003,0.024-0.003
                    		c0.207-0.002,0.413-0.026,0.616-0.063c0.063-0.011,0.124-0.022,0.185-0.036C52.865,36.34,52.897,36.338,52.929,36.329z
                    		 M31.761,39.684c2.041,2.441,5.027,3.987,8.243,4.127c0.16,0.007,0.32,0.011,0.479,0.011c3.395,0,6.604-1.564,8.764-4.143v7.814
                    		H31.761V39.684z M29,30.927c1.015,0,1.84,0.826,1.84,1.841c0,0.535-0.233,1.012-0.599,1.349c0,0-0.012,0.006-0.017,0.011
                    		c-0.688,0.619-1.761,0.619-2.45,0c-0.005-0.004-0.012-0.006-0.012-0.006c-0.371-0.341-0.604-0.819-0.604-1.354
                    		C27.159,31.753,27.985,30.927,29,30.927z M29.921,36.329v11.164h-1.84V36.329c0.031,0.008,0.063,0.011,0.096,0.019
                    		c0.061,0.014,0.122,0.024,0.185,0.036c0.203,0.037,0.408,0.061,0.615,0.063c0.008,0,0.015,0.003,0.023,0.003
                    		c0.008,0,0.016-0.003,0.024-0.003c0.207-0.002,0.412-0.026,0.616-0.063c0.063-0.011,0.123-0.022,0.185-0.036
                    		C29.857,36.34,29.889,36.338,29.921,36.329z M8.753,39.684c2.04,2.441,5.026,3.987,8.243,4.127c0.16,0.007,0.32,0.011,0.479,0.011
                    		c3.394,0,6.604-1.564,8.763-4.143v7.814H8.753V39.684z M5.992,30.927c1.015,0,1.841,0.826,1.841,1.841
                    		c0,0.535-0.233,1.012-0.599,1.349c0,0-0.012,0.006-0.017,0.011c-0.688,0.619-1.762,0.619-2.45,0
                    		c-0.005-0.004-0.012-0.006-0.018-0.011c-0.365-0.337-0.598-0.814-0.598-1.349C4.151,31.753,4.977,30.927,5.992,30.927z
                    		 M6.912,36.329v11.164H5.072V36.329c0.031,0.008,0.064,0.011,0.097,0.019c0.061,0.014,0.123,0.024,0.185,0.036
                    		c0.204,0.037,0.409,0.061,0.616,0.063c0.007,0,0.015,0.003,0.023,0.003s0.016-0.003,0.024-0.003
                    		c0.207-0.002,0.412-0.026,0.616-0.063c0.063-0.011,0.124-0.022,0.185-0.036C6.848,36.34,6.881,36.338,6.912,36.329z M54.769,51.174
                    		H3.231v-1.841h51.538V51.174z M32.626,16.453c2.452,0,4.446-1.925,4.446-4.291s-1.995-4.291-4.446-4.291
                    		c-2.451,0-4.446,1.925-4.446,4.291S30.175,16.453,32.626,16.453z M32.626,9.712c1.437,0,2.605,1.099,2.605,2.45
                    		s-1.168,2.45-2.605,2.45c-1.437,0-2.605-1.099-2.605-2.45S31.19,9.712,32.626,9.712z M47.866,3.813H10.134
                    		c-0.508,0-0.92,0.343-0.92,0.765v18.844c0,0.423,0.412,0.765,0.92,0.765h37.733c0.509,0,0.921-0.342,0.921-0.765V4.578
                    		C48.787,4.155,48.375,3.813,47.866,3.813z M46.946,22.656H11.054v-2.301l9.019-4.957l0.014-0.008
                    		c1.217-0.693,2.837-0.637,3.98,0.138l5.808,4.032c1.632,1.126,3.931,1.299,5.781,0.436l11.29-5.117V22.656z M46.946,13.136
                    		l-12.178,5.52c-1.188,0.557-2.667,0.448-3.718-0.275l-5.808-4.031c-1.776-1.207-4.295-1.298-6.191-0.225l-7.998,4.396V5.343h35.892
                    		V13.136z M6.682,27.057h44.635c0.509,0,0.92-0.343,0.92-0.766V1.708c0-0.423-0.412-0.765-0.92-0.765H6.682
                    		c-0.508,0-0.92,0.342-0.92,0.765v24.583C5.762,26.714,6.174,27.057,6.682,27.057z M7.602,2.473h42.795v23.053H7.602V2.473z"/>

                    </svg>
                  </div>

                </div>

                </div></button>
      </div>

      </div>

    </div>
    </div>
</section>



<!-- mobile view start -->
<section class="home-services  mobile-section  d-block d-sm-none" id="services">
    <div class="container home-services">
      <h1 class="title text-center ">
        <span class="">Our Services</span>
      </h1>
      <div class="accordion" id="accordionExample">
  <div class="card" id="">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link service-btn-mob" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div class="row">
            <div class="trans active-trans" style="width:80px; height:80px">
              <svg  class="svg mt-3 ml-3" x="0px" y="0px" width="58px"
                height="55px" viewBox="0 0 70 57" enable-background="new 0 0 70 57" xml:space="preserve">

                  <path d="M3.688,8.166h36.031v5.622h3.015V7.042c0-1.022-0.868-1.891-1.891-1.891H2.615
                    c-1.022,0-1.891,0.868-1.891,1.891v25.911c0,1.022,0.818,1.891,1.891,1.891h15.383v3.424h-3.373c-0.511,0-0.92,0.409-0.92,0.92
                    v1.788c0,0.511,0.409,0.92,0.92,0.92h14.31c0.511,0,0.92-0.409,0.92-0.92v-1.788c0-0.511-0.409-0.92-0.92-0.92h-3.424v-3.424
                    h7.053v-6.593H3.688V8.166z M21.729,30.193c0.716,0,1.329,0.613,1.329,1.329c0,0.716-0.613,1.329-1.329,1.329
                    c-0.716,0-1.329-0.613-1.329-1.329C20.4,30.806,21.014,30.193,21.729,30.193z"/>
                  <path d="M47.231,15.934H36.703c-1.124,0-1.993,0.92-1.993,2.044v21.976c0,1.124,0.92,2.044,1.993,2.044h10.528
                    c1.124,0,2.044-0.92,2.044-2.044V17.928C49.276,16.803,48.356,15.934,47.231,15.934z M40.281,17.416h3.322
                    c0.255,0,0.46,0.204,0.46,0.46c0,0.255-0.204,0.46-0.46,0.46h-3.322c-0.255,0-0.46-0.204-0.46-0.46
                    C39.821,17.62,40.026,17.416,40.281,17.416z M41.968,40.466c-0.716,0-1.329-0.613-1.329-1.329s0.613-1.329,1.329-1.329
                    c0.716,0,1.329,0.613,1.329,1.329C43.297,39.853,42.683,40.466,41.968,40.466z M47.078,36.326H36.857V19.818h10.272v16.507H47.078
                    z"/>

              </svg>
            </div>
              <h3 class="align-self-center service-h3 active-h3">Website Design</h3>
          </div>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="col-12">
          <div id="website_design" class="mobile-tab ">
            <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
            <div class="sub-tabcontent">
            <img class="service-image" src="<?php echo base_url(); ?>assets/images/site/website_design_kolhapur.gif" alt="website design, website, website development, website developer, application developer, static website, dynamic website, ecommerce website">
          <p class="paragraph service-para">Website is the face of your brand, our designers can give it an appealing look which can generate more traffic and ultimately quality leads in your pocket. Our website design company in Kolhapur is what you need to make your website stand out.</p>
          <p class="service-btn mb-5"><a class="btn btn-md btn-outline-warning margin-top mr-2" href="<?php echo base_url(); ?>website-design-development-kolhapur">READ MORE</a>
              <a class="btn btn-md btn-outline-warning2 margin-top " href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
          </p>
            </div>
        </div>
        </div>
        </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link service-btn-mob" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <div class="row " data-rel="content2" >
            <div class="trans " style="width:80px; height:80px">
              <svg class="svg mt-3 ml-3" x="0px" y="0px" width="58px"
    height="55px" viewBox="0 0 70 57" enable-background="new 0 0 70 57" xml:space="preserve">

                  <path d="M44.272,14.811c0.03,0.033,0.053,0.062,0.074,0.094l7.808,15.549c0.065,0.112,0.083,0.148,0.099,0.184
                    l0.069,0.222l0.022,0.22l-0.006,0.095l-0.012,0.104l-0.028,0.115l-0.04,0.122l-0.08,0.158l-2.791,4.573v0.677
                    c0.741,0.222,1.273,0.905,1.273,1.715v1.889c0,0.99-0.804,1.794-1.794,1.794H37.942c-0.989,0-1.793-0.804-1.793-1.794v-1.889
                    c0-0.81,0.531-1.492,1.273-1.715v-0.677l-2.81-4.605l-0.025-0.057c-0.006-0.008-0.028-0.052-0.045-0.096l-0.062-0.226
                    c0,0-0.014-0.172-0.013-0.214c0,0,0.017-0.167,0.026-0.208l0.032-0.11l0.048-0.13l0.053-0.094l7.858-15.634l0.036-0.038
                    c0.035-0.05,0.061-0.081,0.091-0.108l0.116-0.095c0.088-0.064,0.123-0.082,0.158-0.101l0.129-0.057l0.224-0.069l0.034,0.011
                    c0.033-0.007,0.082-0.013,0.133-0.013c0.133,0.008,0.178,0.012,0.222,0.021l0.105,0.029h0.042l0.1,0.05
                    c0.095,0.049,0.134,0.071,0.171,0.097c0.093,0.07,0.131,0.101,0.165,0.135 M38.419,40.792l9.968-0.005l-0.001-2.832l-9.969,0.005
                    L38.419,40.792z M47.613,34.792l2.248-3.683l-5.319-11.803l-0.286,7.243c0.845,0.344,1.415,1.171,1.415,2.098
                    c0,1.249-1.017,2.266-2.266,2.266s-2.266-1.017-2.266-2.266c0-0.928,0.57-1.755,1.415-2.098l-0.285-7.243l-5.32,11.803
                    l2.248,3.683H47.613z"/>
                  <path d="M5.109,39.426c-2.455,0-4.453-1.998-4.453-4.453V5.131c0-2.455,1.998-4.453,4.453-4.453h35.809
                    c2.455,0,4.453,1.998,4.453,4.453V9.11c0,0.81-0.659,1.469-1.469,1.469c-0.811,0-1.47-0.659-1.47-1.469V5.131
                    c0-0.835-0.679-1.514-1.514-1.514H5.109c-0.835,0-1.514,0.679-1.514,1.514v29.841c0,0.835,0.679,1.514,1.514,1.514h0.386
                    l16.479-16.479c0.277-0.277,0.646-0.43,1.039-0.43s0.762,0.153,1.039,0.43l3.934,3.934l4.93-4.929
                    c0.281-0.272,0.643-0.418,1.027-0.418c0.383,0,0.745,0.146,1.02,0.412c0.282,0.272,0.441,0.639,0.448,1.031
                    c0.006,0.393-0.14,0.765-0.412,1.046l-4.934,4.935l2.71,2.716c0.558,0.578,0.558,1.475,0.006,2.046
                    c-0.28,0.29-0.656,0.449-1.058,0.449l0,0c-0.384,0-0.746-0.146-1.021-0.412l-7.689-7.695L7.143,38.995
                    c-0.273,0.274-0.652,0.431-1.039,0.431H5.109z"/>
                  <path d="M20.029,17.542c-3.004,0-5.448-2.444-5.448-5.448c0.004-3.001,2.448-5.445,5.447-5.448
                    c3.005,0,5.449,2.444,5.449,5.448S23.033,17.542,20.029,17.542z M20.029,9.585c-1.384,0-2.509,1.126-2.509,2.51
                    s1.125,2.509,2.509,2.509s2.51-1.125,2.51-2.509S21.413,9.585,20.029,9.585z"/>
                  <path d="M12.073,39.426c-0.811,0-1.47-0.659-1.47-1.47c0-0.81,0.659-1.469,1.47-1.469h26.315v2.939H12.073z"/>

              </svg>
            </div>
              <h3 class="align-self-center service-h3">Graphic Design</h3>
          </div>
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <div class="col-12">
            <div id="graphic_design" class="mobile-tab ">
              <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
              <div class="sub-tabcontent">
              <img class="service-image" src="<?php echo base_url(); ?>assets/images/site/graphic_design_kolhapur.gif" alt="Graphic design, graphic design company in kolhapur, graphic design service in kolhapur, graphic designers">
            <p class="paragraph service-para">Awesome graphics! So, what else you need? Whether you need graphic designing services for your brochure, flyer or for corporate profile. We are here for making you stand out with our stunning graphics. We have a team of designers who have done graduate diploma in GD ARTS. Our award winning designs are very much proficient in delivering creative designing work for our clientele. </p>
            <p class="service-btn mb-5"><a class="btn btn-md btn-outline-warning margin-top mr-2" href="<?php echo base_url(); ?>graphic-design-services-kolhapur">READ MORE</a>
                <a class="btn btn-md btn-outline-warning2 margin-top " href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
            </p>
              </div>
              </div>
        </div>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link service-btn-mob" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <div class="row " data-rel="content3">
            <div class="trans " style="width:80px; height:80px">
              <svg class="svg mt-3 ml-4" x="0px" y="0px" width="60px"
    height="60px" viewBox="0 0 55 47" enable-background="new 0 0 70 57" xml:space="preserve">

                  <path d="M34.634,19.631c-0.011-0.229-0.021-0.465-0.028-0.708l-0.061,0.057c-0.271,0.249-0.487,0.445-0.693,0.651
                    l-2.76,2.764c-2.632,2.638-5.353,5.364-8.063,8.012c-0.539,0.526-1.406,0.906-2.11,0.924c-1.619,0.042-3.238,0.048-4.858,0.048
                    l-2.1-0.001c-1.017,0-2.033,0.003-3.099,0.015c-0.934,0-1.449-0.357-1.778-1.233c-0.773-2.061-2.192-3.501-4.219-4.28
                    c-1.044-0.401-1.247-1.045-1.236-1.951c0.031-2.859,0.055-6.235-0.009-9.602c-0.02-1.005,0.3-1.757,1.067-2.515
                    c2.908-2.864,5.791-5.754,8.674-8.644l2.134-2.139c0.185-0.185,0.358-0.378,0.536-0.576c-0.539-0.085-1.06-0.128-1.552-0.128
                    c-2.374,0-4.282,0.945-6.005,2.976C6.884,5.175,5.065,6.9,3.306,8.57L2.151,9.671c-1.253,1.2-1.83,2.583-1.819,4.352
                    c0.026,4.058,0.022,8.116,0.018,12.175c-0.002,2.086-0.004,4.172-0.002,6.258c0.002,1.755,0.458,2.21,2.217,2.212l11.715-0.001
                    c2.326,0,4.653,0.002,6.98,0.01h0.025c1.51,0,2.743-0.507,3.773-1.548c0.892-0.901,1.793-1.795,2.693-2.688
                    c1.779-1.763,3.619-3.587,5.352-5.447c0.646-0.692,1.172-1.769,1.442-2.953C34.711,21.316,34.675,20.535,34.634,19.631z"/>
                  <path d="M15.386,17.014c-0.229,0.194-0.454,0.387-0.675,0.578l2.491,2.57l0.035-0.031
                    c0.15-0.135,0.276-0.248,0.396-0.368c5.431-5.429,10.86-10.858,16.288-16.29c0.859-0.86,0.95-1.824,0.243-2.579
                    c-0.318-0.339-0.705-0.518-1.12-0.518c-0.511,0-1.039,0.258-1.527,0.745l-4.635,4.634c-3.14,3.141-6.279,6.281-9.432,9.408
                    C16.787,15.823,16.075,16.429,15.386,17.014z"/>
                  <path d="M19.953,23.295c-0.115,0.115-0.181,0.448-0.143,0.535c0.35,0.766,0.737,1.495,1.148,2.269l0.304,0.574
                    c0.031-0.018,0.057-0.033,0.069-0.047c4.314-4.299,8.628-8.601,12.929-12.914c0.196-0.196,0.335-0.429,0.338-0.565
                    c0.029-1.228,0.025-2.456,0.021-3.678l-0.001-0.801l-0.691,0.688C29.262,13.995,24.598,18.635,19.953,23.295z"/>
                  <path d="M8.761,13.288c-0.146,0.146-0.275,0.309-0.414,0.482l2.716,1.371L25.87,0.382
                    c-0.104,0.001-0.208,0.003-0.313,0.004c-0.381,0.005-0.772,0.01-1.17,0.01c-0.52,0-1.049-0.009-1.577-0.035l-0.165-0.005
                    c-0.695,0-1.231,0.244-1.795,0.815c-2.748,2.784-5.516,5.548-8.282,8.313L8.761,13.288z"/>

              </svg>
            </div>
              <h3 class="align-self-center service-h3">Logo Design</h3>
          </div>
        </button>
      </h2>
    </div>

    <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="col-12">
          <div id="logo_design" class="mobile-tab ">
            <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
            <div class="sub-tabcontent">
            <img class="service-image " src="<?php echo base_url(); ?>assets/images/site/logo_design_kolhapur.jpg" alt="logo design company in kolhapur, logo design service in kolhapur, logo designers, logo, logo creator">
          <p class="paragraph service-para">When it comes to creating custom logo designs, we are the first option for many of our customers. Our logo design services are for those who want to impress their client right from the logo.</p>
          <p class="service-btn mb-5"><a class="btn btn-md btn-outline-warning margin-top mr-2" href="<?php echo base_url(); ?>logo-design-kolhapur">READ MORE</a>
              <a class="btn btn-md btn-outline-warning2 margin-top " href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
          </p>
            </div>
          </div>
      </div>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link service-btn-mob" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <div class="row" data-rel="content4" >
            <div class="trans " style="width:80px; height:80px">
              <svg class="svg mt-3 ml-3" x="0px" y="0px" width="58px"
    height="58px" viewBox="0 0 70 57" enable-background="new 0 0 70 57" xml:space="preserve">
                    <path d="M43.092,0.696c-10.723,0-20.641,4.594-27.591,12.114H1.907c-0.49,0-0.931,0.295-1.119,0.747
                      c-0.188,0.453-0.084,0.973,0.263,1.32l7.855,7.855c-0.812,1.788-1.495,3.653-2.025,5.591c-0.115,0.42,0.004,0.868,0.312,1.176
                      l8.308,8.307c0.23,0.231,0.54,0.355,0.857,0.355c0.106,0,0.214-0.014,0.32-0.043c1.938-0.53,3.804-1.212,5.591-2.025l7.855,7.855
                      c0.231,0.232,0.542,0.355,0.856,0.355c0.156,0,0.313-0.03,0.463-0.092c0.453-0.188,0.748-0.63,0.748-1.119V29.499
                      c7.519-6.95,12.113-16.868,12.113-27.591C44.304,1.238,43.762,0.696,43.092,0.696z M16.711,35.591l-7.301-7.302
                      c2.954-10.013,10.165-17.96,19.314-22.079L38.79,16.276C34.671,25.425,26.724,32.636,16.711,35.591z M41.86,3.14
                      c-0.131,3.718-0.852,7.32-2.079,10.701L31.159,5.22C34.54,3.992,38.141,3.271,41.86,3.14z M4.831,15.232h8.615
                      c-1.269,1.631-2.408,3.372-3.402,5.212L4.831,15.232z M29.768,40.168l-5.212-5.212c1.841-0.993,3.582-2.132,5.212-3.402V40.168z"
                      />
                    <path d="M1.907,44.304c0.31,0,0.62-0.118,0.857-0.355l4.845-4.845c0.473-0.473,0.473-1.24,0-1.713
                      c-0.473-0.473-1.24-0.473-1.713,0l-4.845,4.845c-0.473,0.473-0.473,1.24,0,1.713C1.287,44.186,1.597,44.304,1.907,44.304z"/>
                    <path d="M7.107,43.95c0.236,0.236,0.546,0.355,0.857,0.355c0.31,0,0.62-0.118,0.857-0.355l3.634-3.634
                      c0.473-0.473,0.473-1.24,0-1.713c-0.473-0.473-1.24-0.473-1.713,0l-3.634,3.634C6.634,42.709,6.634,43.476,7.107,43.95z"/>
                    <path d="M1.907,38.247c0.31,0,0.62-0.118,0.857-0.355l3.634-3.634c0.473-0.473,0.473-1.24,0-1.713
                      c-0.473-0.473-1.24-0.473-1.713,0L1.052,36.18c-0.473,0.473-0.473,1.24,0,1.713C1.287,38.129,1.597,38.247,1.907,38.247z"/>
                    <path d="M24.922,14.021c-3.34,0-6.056,2.716-6.056,6.056s2.716,6.056,6.056,6.056s6.056-2.716,6.056-6.056
                      S28.262,14.021,24.922,14.021z M24.922,23.711c-2.004,0-3.634-1.63-3.634-3.634s1.63-3.634,3.634-3.634s3.634,1.63,3.634,3.634
                      S26.927,23.711,24.922,23.711z"/>
              </svg>
            </div>
              <h3 class="align-self-center service-h3">Strategic Branding</h3>
          </div>
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <div class="col-12">
          <div id="strategic_branding" class="mobile-tab ">
            <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
            <div class="sub-tabcontent">
            <img class="service-image " src="<?php echo base_url(); ?>assets/images/site/branding_in_kolhapur.jpeg" alt="branding, advertising company in kolhapur">
          <p class="paragraph service-para">Earn name and fame in the market through our branding services. Make customers aware about your offerings and tell them why you are better than your competitors. Our strategic branding can create long lasting impression on your customer's mind and this is a good news, isn’t it?</p>
          <p class="service-btn mb-5"><a class="btn btn-md btn-outline-warning margin-top mr-2" href="<?php echo base_url(); ?>strategic-branding-kolhapur">READ MORE</a>
              <a class="btn btn-md btn-outline-warning2 margin-top " href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
          </p>
            </div>
          </div>

      </div>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link service-btn-mob" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <div class="row" data-rel="content5">
            <div class="trans " style="width:80px; height:80px">
              <svg class="svg mt-3" x="0px" y="0px" width="50px"
    height="50px" viewBox="0 0 77 77" enable-background="new 0 0 77 77" xml:space="preserve">

                  <path  d="M49.101,28.311c-0.002-2.054-1.666-3.718-3.72-3.721h-8.676c0.342-1.816,0.515-3.66,0.515-5.508
                    c-0.002-2.22-1.802-4.017-4.022-4.016c-1.072,0.001-2.1,0.43-2.854,1.192c-0.759,0.763-1.176,1.801-1.158,2.877
                    c0.031,2.342-0.062,3.996-1.583,5.586c-0.671,0.702-2.172,1.712-3.009,2.245v-0.052H15.02v18.768h7.156
                    c1.208-0.004,2.227-0.9,2.385-2.098c0.899,1.36,2.564,2.36,5.518,2.36h10.945c2.054,0.001,3.721-1.664,3.721-3.719
                    c0-0.482-0.093-0.958-0.275-1.404c1.574-0.908,2.26-2.82,1.624-4.521c1.831-0.918,2.572-3.146,1.654-4.977
                    c-0.017-0.034-0.035-0.069-0.053-0.103C48.584,30.517,49.102,29.445,49.101,28.311z M22.97,42.452
                    c-0.129,0.981-1.029,1.672-2.01,1.544c-0.981-0.129-1.672-1.029-1.544-2.01c0.105-0.804,0.737-1.437,1.541-1.543
                    c0.983-0.128,1.884,0.564,2.012,1.547C22.99,42.143,22.99,42.298,22.97,42.452z M45.381,29.413h-0.114
                    c-0.723,0.002-1.308,0.59-1.306,1.313c0.001,0.545,0.34,1.032,0.851,1.223c0.57,0.211,0.86,0.844,0.649,1.414
                    c-0.161,0.435-0.578,0.722-1.042,0.717h-0.853c-0.723,0-1.309,0.586-1.309,1.309c0,0.522,0.31,0.993,0.788,1.201
                    c0.562,0.235,0.827,0.881,0.592,1.443c-0.173,0.414-0.58,0.682-1.029,0.677h-0.622c-0.723,0-1.309,0.587-1.309,1.31
                    c0,0.52,0.308,0.991,0.785,1.199c0.556,0.248,0.805,0.899,0.558,1.455c-0.176,0.394-0.565,0.65-0.997,0.653H30.086
                    c-2.315,0-3.857-0.582-3.857-3.421V29.028c0.876-0.561,2.416-1.61,3.263-2.495c2.197-2.296,2.345-4.725,2.308-7.437
                    c-0.005-0.775,0.619-1.407,1.394-1.412c0.775-0.005,1.407,0.619,1.412,1.394c-0.001,2.192-0.266,4.375-0.791,6.503
                    c-0.174,0.702,0.255,1.412,0.957,1.585c0.1,0.025,0.203,0.038,0.306,0.038h10.301c0.609-0.022,1.12,0.454,1.142,1.063
                    s-0.454,1.12-1.063,1.142c-0.026,0.001-0.052,0.001-0.079,0L45.381,29.413z"/>
                  <path  d="M61.653,50.798c4.45-1.218,8.54-3.494,11.921-6.633c0.012-0.012,0.019-0.027,0.031-0.039
                    c0.029-0.028,0.049-0.062,0.075-0.093c0.094-0.108,0.173-0.229,0.234-0.359c0.021-0.045,0.041-0.087,0.057-0.134
                    c0.064-0.171,0.098-0.353,0.099-0.536l0.002-0.011c-0.002-0.131-0.021-0.261-0.055-0.387l0,0l0,0
                    c-0.043-0.147-0.108-0.287-0.192-0.416c-0.024-0.038-0.051-0.072-0.079-0.108c-0.029-0.044-0.06-0.087-0.093-0.129
                    c-0.026-0.028-0.062-0.038-0.089-0.064c-0.298-0.24-0.659-0.388-1.039-0.428c-0.015,0-0.028-0.007-0.043-0.007
                    c-5.009,0.15-9.741-2.295-12.517-6.466c0.484-3.57,0.251-7.201-0.685-10.68C54.839,8.642,38.556-0.474,22.88,3.929
                    C7.144,8.113-2.238,24.244,1.908,39.99c4.474,16.369,22.411,23.758,36.354,20.391c5.504-1.394,10.463-4.408,14.235-8.651
                    C55.579,51.911,58.671,51.597,61.653,50.798z M4.927,39.165C1.235,25.086,9.635,10.675,23.705,6.949
                    c14.009-3.95,28.572,4.185,32.555,18.184c0.889,3.28,1.072,6.712,0.539,10.068c-0.002,0.077,0.001,0.153,0.011,0.229
                    c-0.027,0.226,0.022,0.454,0.14,0.648c0.024,0.076,0.053,0.15,0.089,0.221c0.012,0.019,0.028,0.034,0.041,0.053l0.015,0.02
                    c1.937,2.978,4.698,5.329,7.946,6.768c1.118,0.475,2.282,0.835,3.473,1.073c-4.843,3.328-10.691,4.871-16.546,4.364
                    c-0.041-0.003-0.078,0.014-0.118,0.014c-0.41,0.007-0.803,0.166-1.102,0.446c-0.029,0.029-0.067,0.041-0.094,0.072
                    c-3.417,4.036-8.004,6.911-13.126,8.228C25.01,60.361,8.923,53.781,4.927,39.165z"/>
              </svg>
            </div>
            <h3 class="align-self-center service-h3">Digital Marketing</h3>
          </div>
        </button>
      </h2>
    </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <div class="col-12">
          <div id="digital_marketing" class="mobile-tab">
            <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
            <div class="sub-tabcontent">
              <img class="service-image " src="<?php echo base_url(); ?>assets/images/site/digital_marketing_company_kolhapur.jpeg" alt="digital marketing company in kolhapur, digital marketing services in kolhapur, social media marketing, facebook marketing, seo services in kolhapur">
          <p class="paragraph service-para">We have a vigorous approach towards providing digital marketing services which can bring extremely powerful results for the business. Any type of digital marketing campaign you want to run, we have got it all covered with prowess.</p>
          <p class="service-btn mb-5"><a class="btn btn-md btn-outline-warning margin-top mr-2" href="<?php echo base_url(); ?>digital-marketing-services-kolhapur">READ MORE</a>
              <a class="btn btn-md btn-outline-warning2 margin-top " href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
          </p>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link service-btn-mob" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          <div class="row click " data-rel="content6">
            <div class="trans" style="width:80px; height:80px">
              <svg class="svg mt-4 ml-3" x="0px" y="0px" width="50px"
    height="50px" viewBox="0 0 77 77" enable-background="new 0 0 77 77" xml:space="preserve">
                <path d="M46.176,7.358c0.796,1.321,2.237,2.151,3.795,2.151c2.447,0,4.438-1.99,4.438-4.438
                  c0-2.447-1.991-4.439-4.438-4.439c-1.559,0-2.999,0.83-3.795,2.152H8.824C8.027,1.462,6.587,0.632,5.029,0.632
                  c-2.448,0-4.438,1.992-4.438,4.439c0,2.448,1.991,4.438,4.438,4.438c1.558,0,2.998-0.83,3.795-2.151h1.367v18.464l-6.99,6.99
                  c-0.802,0.802-1.244,1.872-1.244,3.013c0,1.141,0.441,2.21,1.244,3.013l21.286,21.286c0.802,0.802,1.873,1.244,3.013,1.244
                  c1.141,0,2.211-0.442,3.013-1.244l21.286-21.286c0.802-0.802,1.244-1.872,1.244-3.013c0-1.141-0.442-2.211-1.244-3.013l-6.99-6.99
                  V7.358H46.176z M16.287,7.358h22.427v12.369l-8.2-8.201c-0.802-0.802-1.872-1.244-3.013-1.244c-1.141,0-2.211,0.442-3.013,1.244
                  l-8.2,8.201V7.358z M50.714,33.897c0.512,0.512,0.794,1.196,0.794,1.928c0,0.731-0.282,1.416-0.794,1.928L29.428,59.039
                  c-1.025,1.026-2.832,1.024-3.856,0L4.286,37.753c-0.512-0.513-0.794-1.197-0.794-1.928c0-0.731,0.282-1.416,0.794-1.928
                  l21.286-21.286c0.513-0.512,1.197-0.795,1.928-0.795s1.416,0.283,1.928,0.795L50.714,33.897z M20.898,24.706
                  c-1.119,1.196-1.679,2.938-1.679,5.22c0,2.128,0.46,3.691,1.38,4.688c0.92,0.998,2.544,1.729,4.873,2.195l2.793,0.532
                  c1.552,0.312,2.61,0.744,3.175,1.298c0.566,0.555,0.849,1.497,0.849,2.827c0,1.375-0.399,2.372-1.197,2.993
                  s-2.084,0.931-3.858,0.931c-1.885,0-3.314-0.46-4.29-1.38c-0.976-0.92-1.485-2.234-1.53-3.94h-2.46v7.582h2.46v-2.394
                  c1.352,1.906,3.536,2.859,6.552,2.859c2.748,0,4.727-0.592,5.936-1.779c1.207-1.185,1.812-2.931,1.812-5.236
                  c0-2.128-0.482-3.675-1.446-4.64c-0.965-0.965-2.633-1.69-5.005-2.178l-2.693-0.532c-1.62-0.333-2.678-0.759-3.176-1.28
                  c-0.499-0.521-0.748-1.391-0.748-2.61c0-1.441,0.332-2.504,0.997-3.192c0.665-0.687,1.884-1.031,3.658-1.031
                  c3.281,0,5.066,1.429,5.354,4.289h2.461v-6.55h-2.461v2.127c-1.197-1.729-3.226-2.594-6.085-2.594
                  C23.907,22.909,22.017,23.508,20.898,24.706z"/>

              </svg>
            </div>
              <h3 class="align-self-center service-h3">Signage Solutions</h3>

          </div>
        </button>
      </h2>
    </div>

    <div id="collapseSix" class="collapse " aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <div class="col-12">
          <div id="signage_solution" class="mobile-tab ">
            <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
            <div class="sub-tabcontent">
            <img class="service-image " src="<?php echo base_url(); ?>assets/images/site/signage_printing.jpg" alt="signage design in kolhapur, signage printing in kolhapur, signage services in kohapur">
          <p class="paragraph service-para">Impress your customers at the very first go through high quality signage. We have expertise in designing both interior and exterior signage. You can trust on us when it comes to signage solutions because of our good experience in the same. So, leave your signage designing hassle to us for making your work easy.</p>
          <p class="service-btn mb-5"><a class="btn btn-md btn-outline-warning margin-top mr-2" href="<?php echo base_url(); ?>signage-design-printing-kolhapur">READ MORE</a>
              <a class="btn btn-md btn-outline-warning2 margin-top " href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
          </p>
            </div></div>
        </div>
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link service-btn-mob " type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          <div class="row click" data-rel="content7" >
            <div class="trans" style="width:80px; height:80px">
              <svg class="svg mt-3" x="0px" y="0px" width="50px"
    height="50px" viewBox="0 0 77 77" enable-background="new 0 0 77 77" xml:space="preserve">

                  <path  d="M62.02,30.758L44.097,1.523l-12.12,7.43c-5.211,0-10.241,0-14.815,0c-0.511-0.007-1.03,0.589-1.043,1.063
                    v8.658L0.98,27.956l17.922,29.235l3.583-2.197v0.764c0.111,1.183,1.083,2.11,2.127,2.127H43.76
                    c0.452-0.032,0.801-0.376,1.081-0.632c2.722-2.576,5.787-5.427,8.161-7.629c0.211-0.2,0.335-0.49,0.333-0.781l0.013-25.583
                    l-0.006,12.817L62.02,30.758z M16.443,51.18c0.03,0.03,0.071,0.046,0.104,0.072C16.514,51.226,16.473,51.21,16.443,51.18z
                     M22.486,17.463v31.912h-4.238V11.08h26.594v4.255H24.613C23.43,15.446,22.503,16.418,22.486,17.463z M51.206,46.184
                    c-3.363,0-6.726,0-10.089,0c0,3.191,0,6.383,0,9.574H24.613V17.463c8.854-0.036,17.8,0.054,26.61-0.007L51.206,46.184z
                     M51.223,15.328l-4.255,0.007v-5.318c0-0.418-0.285-0.808-0.663-0.976c0.377,0.168,0.663,0.558,0.663,0.976v5.318L51.223,15.328
                    c0.677,0.13,1.305,0.707,1.763,1.439C52.527,16.035,51.9,15.458,51.223,15.328z"/>
                  <rect x="28.869" y="23.313"  width="18.083" height="2.128"/>
                  <rect x="28.869" y="30.759"  width="18.083" height="2.127"/>
                  <rect x="28.869" y="38.206"  width="12.765" height="2.127"/>

              </svg>
            </div>
              <h3 class="align-self-center service-h3">Printing Services</h3>
          </div>
        </button>
      </h2>
    </div>

    <div id="collapseSeven" class="collapse " aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <div class="col-12">
          <div id="printing_service" class="mobile-tab">
            <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
            <div class="sub-tabcontent">
            <img class="service-image " src="<?php echo base_url(); ?>assets/images/site/printing_services_kolhapur.jpeg" alt="logo printing, brochure printing, signage printing, tshirt printing, pomplate printing, book printing">
          <p class="paragraph service-para">A perfect color combination makes a print eye-catchy. If you are looking for business cards, Envelop, Flyers, Book, Brochure Printing or any type of printing. Then we are here to give you a professional look through our stunning prints.</p>
          <p class="service-btn mb-5">
            <a class="btn btn-md btn-outline-warning margin-top mr-2" href="<?php echo base_url(); ?>printing-services-kolhapur">VIEW MORE</a>
            <a class="btn btn-md btn-outline-warning2 margin-top " href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
          </p>
            </div>  </div>
        </div>
        </div>
    </div>
  </div>
  <div class="card no-bt-br">
    <div class="card-header" id="headingEight">
      <h2 class="mb-0">
        <button class="btn btn-link service-btn-mob " type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
          <div class="row" data-rel="content8" >
            <div class="trans" style="width:80px; height:80px">
              <svg class="svg mt-3 ml-2" x="0px" y="0px" width="50px"
    height="50px" viewBox="0 0 77 77" enable-background="new 0 0 77 77" xml:space="preserve">
                <path d="M55.689,47.493h-0.92V35.177c0.566-0.647,0.92-1.483,0.92-2.409c0-2.03-1.651-3.682-3.681-3.682
                  s-3.681,1.651-3.681,3.682c0,0.926,0.354,1.762,0.92,2.409v1.066c-1.625,3.599-5.3,5.896-9.163,5.729
                  c-3.587-0.156-6.832-2.407-8.323-5.742v-1.053c0.566-0.647,0.92-1.483,0.92-2.409c0-2.03-1.651-3.682-3.681-3.682
                  s-3.682,1.651-3.682,3.682c0,0.926,0.354,1.762,0.92,2.409v1.066c-1.625,3.599-5.297,5.896-9.163,5.729
                  c-3.587-0.156-6.832-2.407-8.323-5.742v-1.053c0.566-0.647,0.92-1.483,0.92-2.409c0-2.03-1.651-3.682-3.681-3.682
                  s-3.681,1.651-3.681,3.682c0,0.926,0.354,1.762,0.92,2.409v12.316h-0.92c-0.509,0-0.92,0.411-0.92,0.92v3.681
                  c0,0.509,0.412,0.92,0.92,0.92h53.378c0.509,0,0.92-0.412,0.92-0.92v-3.681C56.61,47.904,56.198,47.493,55.689,47.493z
                   M52.008,30.927c1.015,0,1.841,0.826,1.841,1.841c0,0.535-0.233,1.012-0.598,1.349c0,0-0.012,0.006-0.017,0.011
                  c-0.688,0.619-1.762,0.619-2.45,0c-0.005-0.004-0.012-0.007-0.012-0.007c-0.372-0.34-0.605-0.818-0.605-1.353
                  C50.167,31.753,50.993,30.927,52.008,30.927z M52.929,36.329v11.164h-1.841V36.329c0.031,0.008,0.064,0.011,0.096,0.019
                  c0.061,0.014,0.123,0.024,0.185,0.036c0.204,0.037,0.409,0.061,0.616,0.063c0,0,0.015,0.003,0.023,0.003s0.016-0.003,0.024-0.003
                  c0.207-0.002,0.413-0.026,0.616-0.063c0.063-0.011,0.124-0.022,0.185-0.036C52.865,36.34,52.897,36.338,52.929,36.329z
                   M31.761,39.684c2.041,2.441,5.027,3.987,8.243,4.127c0.16,0.007,0.32,0.011,0.479,0.011c3.395,0,6.604-1.564,8.764-4.143v7.814
                  H31.761V39.684z M29,30.927c1.015,0,1.84,0.826,1.84,1.841c0,0.535-0.233,1.012-0.599,1.349c0,0-0.012,0.006-0.017,0.011
                  c-0.688,0.619-1.761,0.619-2.45,0c-0.005-0.004-0.012-0.006-0.012-0.006c-0.371-0.341-0.604-0.819-0.604-1.354
                  C27.159,31.753,27.985,30.927,29,30.927z M29.921,36.329v11.164h-1.84V36.329c0.031,0.008,0.063,0.011,0.096,0.019
                  c0.061,0.014,0.122,0.024,0.185,0.036c0.203,0.037,0.408,0.061,0.615,0.063c0.008,0,0.015,0.003,0.023,0.003
                  c0.008,0,0.016-0.003,0.024-0.003c0.207-0.002,0.412-0.026,0.616-0.063c0.063-0.011,0.123-0.022,0.185-0.036
                  C29.857,36.34,29.889,36.338,29.921,36.329z M8.753,39.684c2.04,2.441,5.026,3.987,8.243,4.127c0.16,0.007,0.32,0.011,0.479,0.011
                  c3.394,0,6.604-1.564,8.763-4.143v7.814H8.753V39.684z M5.992,30.927c1.015,0,1.841,0.826,1.841,1.841
                  c0,0.535-0.233,1.012-0.599,1.349c0,0-0.012,0.006-0.017,0.011c-0.688,0.619-1.762,0.619-2.45,0
                  c-0.005-0.004-0.012-0.006-0.018-0.011c-0.365-0.337-0.598-0.814-0.598-1.349C4.151,31.753,4.977,30.927,5.992,30.927z
                   M6.912,36.329v11.164H5.072V36.329c0.031,0.008,0.064,0.011,0.097,0.019c0.061,0.014,0.123,0.024,0.185,0.036
                  c0.204,0.037,0.409,0.061,0.616,0.063c0.007,0,0.015,0.003,0.023,0.003s0.016-0.003,0.024-0.003
                  c0.207-0.002,0.412-0.026,0.616-0.063c0.063-0.011,0.124-0.022,0.185-0.036C6.848,36.34,6.881,36.338,6.912,36.329z M54.769,51.174
                  H3.231v-1.841h51.538V51.174z M32.626,16.453c2.452,0,4.446-1.925,4.446-4.291s-1.995-4.291-4.446-4.291
                  c-2.451,0-4.446,1.925-4.446,4.291S30.175,16.453,32.626,16.453z M32.626,9.712c1.437,0,2.605,1.099,2.605,2.45
                  s-1.168,2.45-2.605,2.45c-1.437,0-2.605-1.099-2.605-2.45S31.19,9.712,32.626,9.712z M47.866,3.813H10.134
                  c-0.508,0-0.92,0.343-0.92,0.765v18.844c0,0.423,0.412,0.765,0.92,0.765h37.733c0.509,0,0.921-0.342,0.921-0.765V4.578
                  C48.787,4.155,48.375,3.813,47.866,3.813z M46.946,22.656H11.054v-2.301l9.019-4.957l0.014-0.008
                  c1.217-0.693,2.837-0.637,3.98,0.138l5.808,4.032c1.632,1.126,3.931,1.299,5.781,0.436l11.29-5.117V22.656z M46.946,13.136
                  l-12.178,5.52c-1.188,0.557-2.667,0.448-3.718-0.275l-5.808-4.031c-1.776-1.207-4.295-1.298-6.191-0.225l-7.998,4.396V5.343h35.892
                  V13.136z M6.682,27.057h44.635c0.509,0,0.92-0.343,0.92-0.766V1.708c0-0.423-0.412-0.765-0.92-0.765H6.682
                  c-0.508,0-0.92,0.342-0.92,0.765v24.583C5.762,26.714,6.174,27.057,6.682,27.057z M7.602,2.473h42.795v23.053H7.602V2.473z"/>

              </svg>
            </div>
            <h3 class="align-self-center service-h3">Corporate events</h3>
          </div>
        </button>
      </h2>
    </div>

    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">
        <div class="col-12">
          <div id="corporate_event" class="mobile-tab ">
            <!-- <div class="cancel float-right" onclick="alert();"><svg  x="0" y="200" width="60" height="20" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg></div> -->
            <div class="sub-tabcontent">
            <img class="service-image " src="<?php echo base_url(); ?>assets/images/site/Corporate_eventsS.jpg" alt="">
          <p class="paragraph service-para">Keep your customers glued up with your event through outstanding designs. We are here to design your signage, brochure, display booth or wall display for making your exhibition or event memorable. We have an experience of handling corporate events all over India and have made our customers happy by successfully completing their events.</p>
          <p class="service-btn mb-5"><a class="btn btn-md btn-outline-warning margin-top mr-2" href="<?php echo base_url(); ?>corporate-event-management">READ MORE</a>
              <a class="btn btn-md btn-outline-warning2 margin-top " href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
          </p>
            </div>
          </div>

      </div>
        </div>
    </div>
  </div>
</div>
</div>
</section>
<!-- mobile view ends -->

<!-- Our Services End-->

<!-- nav pills testing purpose -->





<!-- Counter Start-->
<section class="home-counter mt-5" id="counter">
  <div class="container pt-5" >
  <div class="row text-center">
    <div class="col-md-3 col-12">
      <div class="counter-rect">
        <img class="mx-auto mb-2" src="<?php echo base_url(); ?>assets/images/clients/numbers_icon-02.svg" alt="">
        <div class="counter-num set-font" data-count="14"></div>
        <h2 class="counter-text">Years Experience</h2>
      </div>
    </div>
    <div class="col-md-3 col-12">
      <div class="counter-rect">
        <img class="mx-auto mb-2" src="<?php echo base_url(); ?>assets/images/clients/numbers_icon-01.svg" alt="">
        <div class="counter-num set-font per" cnt="100" data-count="100"></div>
        <h2 class="counter-text">Satisfaction Guaranteed</h2>
      </div>
    </div>
    <div class="col-md-3 col-12">
      <div class="counter-rect">
        <img class="mx-auto mb-2" src="<?php echo base_url(); ?>assets/images/clients/numbers_icon-04.svg" alt="">
        <div class="counter-num set-font" data-count="21"></div>
        <h2 class="counter-text">Winning Awards</h2>
      </div>
    </div>
    <div class="col-md-3 col-12">
      <div class="counter-rect last">
        <img class="mx-auto mb-2" src="<?php echo base_url(); ?>assets/images/clients/numbers_icon-03.svg" alt="">
        <div class="counter-num set-font" data-count="3000"></div>
        <h2 class="counter-text">Cups Of Coffee</h2>
      </div>
    </div>
  </div>
</div>
</section><!-- Counter End-->

<!-- Brand Design start -->
<!-- <section id="brand_design">
  <div class="container">
  <div class="row">
    <div class="col-md-6 col-12">
      <h1 class="title">
        <span class=""><span class="title-small">Brand </span>Design<span class="title-small"> & Print<br/>
        Unique Professional</span>
        Identity</span><br/>
      </h1>
      <a data-href="<?php echo base_url(); ?>assets/images/site/print_01_s.jpg" class="boxout2 progressive replace">
        <img src="<?php echo base_url(); ?>assets/images/site/print_01_s.jpg" class="preview" alt="logo creator, company logo design, custom logo design, business logo design, web development company, ecommerce website, web agency, best website design, website design company, professional logo design, website developers, ecommerce website design" />
      </a>
    </div>
    <div class="col-md-6 col-12">
      <p class="paragraph home-para">PixelBazar has a specific goal and that is to help our large client base flourish in the market. We have a specialised team for both design and development who understands your needs and will work around your idea to enhance it and giving you perfect digital solutions by covering all the bases. Many businesses that took help from us are now a leading name is their market. If you want to establish a compelling brand presence and become a leader of the market then your journey to the top goes through the lanes of PixelBazar. Get in touch with us to embark on that journey to the top.</p>
      <p><a class="btn btn-lg btn-outline-warning margin-top" href="<?php echo base_url(); ?>Creative-Design-Portfolio">VIEW MORE</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn btn-lg btn-outline-warning2 margin-top" href="<?php echo base_url(); ?>Contact">JUST DROP US MAIL</a>
      </p>
    </div>
  </div>
</div>
</section> -->
  <!-- Brand Design End -->
  <!-- info box -->
  <!-- <section id="info-box">
  	<div class="row info-box"> -->
      <!-- <div class="col-md-5">
        <div class="home-enquiry2 shadow" style="background-color:#D3D3D3; ">
          <div class="pt-2 pb-2 pr-3 pl-3 enquiry_form1" style="background-color:#fff;">
            <form  action="<?php echo base_url(); ?>welcome/send_enquiry" method="post" id="enquiry_form3" autocomplete="off" >
      			<div class="text-center set-font pb-1 pt-1">
      			  <h4><b>Get a Free Quote</b></h4>
      			</div>
            <div class="pl-1 alert-danger" style="display:none;">
              Request Not Sent
            </div>
            <div class="pl-1 alert-success" style="display:none;">
              Request Sent Successfully
            </div>
      			<div class="form-row">
      			  <div class="col-md-12 col-12">
      				<label for="exampleInputEmail1">Name/Company</label>
      				<input style="" type="text" id="name3" name="name" class="form-control valid" placeholder="Full Name">
      			  </div>
      			</div>
      			<div class="form-row">
      			  <div class="col-md-12 col-12">
      				<label for="exampleInputEmail1">Email</label>
      				<input type="text" id="email3" name="email" class="form-control valid" placeholder="Email Address">
      			  </div>
      			</div>
      			<div class="form-row">
      			  <div class="col-md-12 col-12">
      				<label for="exampleInputEmail1">Mobile Number</label>
      				<input type="number" id="mobile3" name="mobile" class="form-control valid" placeholder="Enter Mobile Number">
      			  </div>
      			</div>
      			<br>
      		  </form>
            <div class="form-row">
      			  <div class="col-md-12 col-12 text-center" >
                <button id="btn_enquiry3" type="button" class="btn btn-md btn-outline-warning2">Submit</button>
      			  </div>
      			</div>
          </div>
    	  </div>
      </div> -->
  		<!-- <div class="col-md-12  align-self-center text-center">
  			  <h1 class="font-25 set-font"><b>Designing | Developing | Printing & More</b></h1>
          <h3>One stop solution for all your business needs</h3><br>
          <a class="" href="tel:+919158995505"><h1 class="mob-num2 set-font">Call Us +91 9158 99 5505</h1></a>
      </div> -->
  	<!-- </div>
  </section> -->
  <!-- /info box -->
  <!-- Web Design -->
<!-- <section class="web_design" id="web_design">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <h1 class="title">
          <span class=""><span class="title-small">Web </span>Design <span class="title-small">& </span>Development
          <span class="title-small"> Building experience
          for all devices</span></span><br/>
        </h1>
        <p class="paragraph">Our goal is to get help you get noticed and make your mark on the web. If you already have a specific design in mind or just want to let us do our thing, We'll work with you to make sure your site properly represents your business.</p>
        <a class="btn btn-lg btn-outline-warning margin-top" href="<?php echo base_url(); ?>Creative-Design-Portfolio">SEE WEB WORK</a>
      </div>
      <div class="col-md-6 col-12 web_info">
        <a data-href="<?php echo base_url(); ?>assets/images/site/Web_01_s.jpg" class="boxout2 progressive replace">
          <img src="<?php echo base_url(); ?>assets/images/site/Web_01_s.jpg" class="preview" alt="responsive web design, web design agency, web design services, designer websites, website development company, graphic design logo, logo design services, web developer, logo service, web development services" />
        </a>
      </div>
    </div>
  </div>
</section> -->
<!-- <hr> -->
<!-- Web Design end -->
<div class="container des-info">
  <div class="mt-5">
    <div class="row">
      <div class="col-md-7 offset-md-1">
        <h1 class="title">
          <span class="">Designing, Developing,<br>Training, Printing and More</span>
        </h1>
        <div class="w-75">
          <hr style="border: .5px solid rgba(0,0,0,.2); text-align: left;">
        </div>
        <p style="float:left;">One stop solution for all your business needs</p>
      </div>
      <div class="col-md-4 align-self-center">
        <a class="btn btn-lg btn-outline-warning margin-top " href="http://localhost/pixelbazar/Creative-Design-Portfolio">See More Designs</a>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio -->
<section id="gallery" class="home_portfolio pl-0 pr-0">
  <!-- <h1 class="title text-center">
    <span class="animated rotateIn">Portfolio</span>
  </h1>
  <p class="sub-title1 text-center mb-3">Here are some featured work</p> -->
  <div class="container-flued">
    <section class="row scroller" id="scroller">
          <!-- Opacity declared inline because I thought it might help with the fade in -->
          <div class="scroll-left" style="opacity: 0;"></div>
          <div class="row-scroll row">
              <div class="tile tile1">
                <div class="card image">
                  <div class="img-wrapper">
                    <a data-href="<?php echo base_url(); ?>assets/images/home_portfolio/4.jpg" class="boxout2 progressive replace">
                      <img src="<?php echo base_url(); ?>assets/images/home_portfolio/4.jpg" alt="cave" class="preview card-img-top img-responsive">
                    </a>
                    <div class="img-overlay">
                    </div>
                  </div>
                </div>
              </div>
              <div class="tile">
                <div class="card image">
                  <div class="img-wrapper">
                    <a data-href="<?php echo base_url(); ?>assets/images/home_portfolio/2.jpg" class="boxout2 progressive replace">
                      <img src="<?php echo base_url(); ?>assets/images/home_portfolio/2.jpg" alt="cave" class="preview card-img-top img-responsive">
                    </a>
                    <div class="img-overlay">

                    </div>
                  </div>
                </div>
              </div>
              <div class="tile">
                <div class="card image">
                  <div class="img-wrapper">
                    <a data-href="<?php echo base_url(); ?>assets/images/home_portfolio/6.jpg" class="boxout2 progressive replace">
                      <img src="<?php echo base_url(); ?>assets/images/home_portfolio/6.jpg" class="preview card-img-top img-responsive">
                    </a>
                    <div class="img-overlay">

                    </div>
                  </div>
                </div>
              </div>
              <div class="tile">
                <div class="card image">
                  <div class="img-wrapper">
                    <img src="<?php echo base_url(); ?>assets/images/home_portfolio/1.jpg" class="card-img-top img-responsive">
                    <div class="img-overlay">

                    </div>
                  </div>
                </div>
              </div>
              <div class="tile">
                <div class="card image">
                  <div class="img-wrapper">
                    <img src="<?php echo base_url(); ?>assets/images/home_portfolio/5.jpg" class="card-img-top img-responsive">
                    <div class="img-overlay">

                    </div>
                  </div>
                </div>
              </div>
              <div class="tile">
                <div class="card image">
                  <div class="img-wrapper">
                    <img src="<?php echo base_url(); ?>assets/images/home_portfolio/3.jpg" class="card-img-top img-responsive">
                    <div class="img-overlay">

                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="tile">
                <div class="card image">
                  <div class="img-wrapper">
                    <img src="<?php echo base_url(); ?>assets/images/home_portfolio/logo_influx_inc.jpg" class="card-img-top img-responsive">
                    <div class="img-overlay">

                    </div>
                  </div>
                </div>
              </div> -->
          </div>
          <div class="scroll-right" style="opacity: 0;"></div>
      </section>
    <p class="text-center mb-1 mt-1">
      <a class="btn btn-lg btn-outline-warning margin-top" href="<?php echo base_url(); ?>Creative-Design-Portfolio">SEE MORE WORK</a>
    </p>
  </div>
</section>


<!-- Portfolio -->


<div id="portfolio_mobile" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a data-href="<?php echo base_url(); ?>assets/images/portfolio/logo_e_revolution.jpg" class="boxout2 progressive replace">
        <img class="preview d-block w-100" src="<?php echo base_url(); ?>assets/images/home_portfolio/1.jpg" alt="First slide">
      </a>
    </div>
    <div class="carousel-item ">
      <a data-href="<?php echo base_url(); ?>assets/images/portfolio/identity_zing_print.jpg" class="boxout2 progressive replace">
        <img class="preview d-block w-100" src="<?php echo base_url(); ?>assets/images/home_portfolio/2.jpg" alt="First slide">
      </a>
    </div>
    <div class="carousel-item ">
      <a data-href="<?php echo base_url(); ?>assets/images/portfolio/logo_bandhan.jpg" class="boxout2 progressive replace">
        <img class="preview d-block w-100" src="<?php echo base_url(); ?>assets/images/home_portfolio/3.jpg" alt="First slide">
      </a>
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/home_portfolio/4.jpg" alt="First slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/home_portfolio/5.jpg" alt="First slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/home_portfolio/6.jpg" alt="First slide">
    </div>
    <!-- <div class="carousel-item ">
      <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/portfolio/logo_influx_inc.jpg" alt="First slide">
    </div> -->
  </div>
  <p class="text-center mb-1 mt-1">
    <a class="btn btn-lg btn-outline-warning margin-top" href="<?php echo base_url(); ?>Creative-Design-Portfolio">SEE MORE WORK</a>
  </p>
</div>
<hr>










<!-- Clients/Customers Start -->
<section id="home_customers" class="home_customers">
  <h1 class="title text-center">Our Customer's</h1>
  <img class="cust-mob" style="width:98%;" >
  <div class="cust-div">
    <div class="row customer-row" style="height:112px;">
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 autocast">
        <!-- <div class="customer-g-autocast-mumbai gray"></div> -->
        <div class="customer-autocast-mumbai gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 new-melting">
        <!-- <div class="customer-g-new-melting-center-kolhapur gray"></div> -->
        <div class="customer-new-melting-center-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 atharv-jaju">
        <!-- <div class="customer-g-atharv-jaju-group-kolhapur gray"></div> -->
        <div class="customer-atharv-jaju-group-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 gov-polytechnic">
        <!-- <div class="customer-g-govt-polytechnic-kolhapur gray"></div> -->
        <div class="customer-govt-polytechnic-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 d-cyrus">
        <!-- <div class="customer-g-d-cyrus-school-kolhapur gray"></div> -->
        <div class="customer-d-cyrus-school-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 konark">
        <!-- <div class="customer-g-konark-win-door-kolhapur gray"></div> -->
        <div class="customer-konark-win-door-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 maharaja">
        <!-- <div class="customer-g-maharaja-group-kolhapur gray"></div> -->
        <div class="customer-maharaja-group-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 net-set">
        <!-- <div class="customer-g-net-set-academy-kolhapur gray"></div> -->
        <div class="customer-net-set-academy-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 bhosale">
        <!-- <div class="customer-g-bhosle-group-kolhapur gray"></div> -->
        <div class="customer-bhosle-group-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 khyati">
        <!-- <div class="customer-g-kyati-foods-kolhapur gray"></div> -->
        <div class="customer-kyati-foods-kolhapur gray"></div>
      </div>
    </div>
    <div class="row customer-row" style="height:112px;">
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 bharat-palace">
        <!-- <div class="customer-g-bharat-palace-bikaner gray"></div> -->
        <div class="customer-bharat-palace-bikaner gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 asm">
        <!-- <div class="customer-g-asm-legal-kolhapur gray"></div> -->
        <div class="customer-asm-legal-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 amz">
        <!-- <div class="customer-g-amz-automotive-bikaner gray"></div> -->
        <div class="customer-amz-automotive-bikaner gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 bandhan">
        <!-- <div class="customer-g-bandhan-tourism-mumbai gray"></div> -->
        <div class="customer-bandhan-tourism-mumbai gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 fairdeal">
        <!-- <div class="customer-g-fairdeal-enterprises-kolhapur gray"></div> -->
        <div class="customer-fairdeal-enterprises-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 technomet">
        <!-- <div class="customer-g-technomet-enterprises-kolhapur gray"></div> -->
        <div class="customer-technomet-enterprises-kolhapur gray"></div>
      </div>
      <div class="col-md-1 col-sm-4 col-4 mx-auto m-0 show-color mb-5 white-gold">
        <!-- <div class="customer-g-white-gold-kagal gray"></div> -->
        <div class="customer-white-gold-kagal gray"></div>
      </div>
    </div>
  </div>
</section>
<!-- Clients/Customers End -->

<!-- Testimonials Start -->
<section class="home_testimonial" id="home_testimonial">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" style=''>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <h4 class="testi-title text-center">TESTIMONIALS</h4>
  <div class="carousel-inner text-center">
    <div class="carousel-item active">
      <div>
        <!-- <h4 class="testi-title">TESTIMONIALS</h4> -->
        <div class="testi-line"></div>
        <div class="row">
          <div class="col-md-3">
            <img class="testi-img float-right" style="" src="<?php echo base_url(); ?>assets/images/testimonial/babaprasad_lanka.jpg" alt="">
          </div>
          <div class="col-md-7">
            <p class="testi-info font-20">"We had a good experience working with PixelBazar during the redesign of our website, www.autocast.co.in. They showed a good understanding towards design requirements and listened to all feedback from our side patiently. The response to revisions we requested was reasonably quick. PixelBazar also made good suggestions which gave us more options and resulted in a better design and implementation."</p>
          </div>
        </div>
        <p class="testi-info"><b>- BabaPrasad Lanka</b>, Managing Director, 3D Foundry Tech (Mumbai)</p>
        <div class="star-rating"></div>
      </div><br><br>
    </div>
    <div class="carousel-item" >
      <div>
        <!-- <h4 class="testi-title">TESTIMONIALS</h4> -->
        <div class="testi-line"></div>
        <div class="row">
          <div class="col-md-3">
            <img class="testi-img float-right" style="" src="<?php echo base_url(); ?>assets/images/testimonial/Felecia-Benzakan.jpg" alt="">
          </div>
          <div class="col-md-7">
            <p class="testi-info font-20">"PixelBazar was a pleasure to work with, his logos were leagues above the other submissions, and he followed our design requirements exactly. All the revisions we requested were provided quickly, and it was very helpful that we were given a lot of variety fo..."</p>
          </div>
        </div>
        <p class="testi-info"><b>- Felecia Benzakan</b>, Erevolution (Australia)</p>
        <div class="star-rating"></div>
      </div>
    </div>
    <div class="carousel-item">
      <div>
        <!-- <p class="testi-title">TESTIMONIALS</p> -->
        <div class="testi-line"></div>
        <div class="row">
          <div class="col-md-3">
            <img class="testi-img float-right" style="" src="<?php echo base_url(); ?>assets/images/testimonial/Michael-De-Wildtx.jpg" alt="">
          </div>
          <div class="col-md-7">
            <p class="testi-info font-20">"PixelBazar is Great designer that listens to your feedback and is willing to do that little bit extra. :-)"</p>
          </div>
        </div>
        <p class="testi-info"><b>- Michael De Wildt</b>, Influx (Melbourne, Australia)</p>
        <div class="star-rating"></div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<!-- Testimonials End -->
<!-- Contact Start -->
  <section id="home_contact" class="home_contact pl-0 pr-0 pb-0">
    <div class="container">
      <h1 class="title text-center mb-0">
        Get In Touch With Us
      </h1>
      <p class="text-center mt-4 mb-4 paragraph">We would be happy to answer your questions and set up a meeting with you. Pixel Bazar can help set you apart from the flock !</p>
      <div class="row pl-4 pr-4">
        <div class="col-md-3 ">
          <i class="">
            <svg viewBox="0 0 496 512">
              <path fill="currentColor" d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm-11.34 240.23c-2.89 4.82-8.1 7.77-13.72 7.77h-.31c-4.24 0-8.31 1.69-11.31 4.69l-5.66 5.66c-3.12 3.12-3.12 8.19 0 11.31l5.66 5.66c3 3 4.69 7.07 4.69 11.31V304c0 8.84-7.16 16-16 16h-6.11c-6.06 0-11.6-3.42-14.31-8.85l-22.62-45.23c-2.44-4.88-8.95-5.94-12.81-2.08l-19.47 19.46c-3 3-7.07 4.69-11.31 4.69H50.81C49.12 277.55 48 266.92 48 256c0-110.28 89.72-200 200-200 21.51 0 42.2 3.51 61.63 9.82l-50.16 38.53c-5.11 3.41-4.63 11.06.86 13.81l10.83 5.41c5.42 2.71 8.84 8.25 8.84 14.31V216c0 4.42-3.58 8-8 8h-3.06c-3.03 0-5.8-1.71-7.15-4.42-1.56-3.12-5.96-3.29-7.76-.3l-17.37 28.95zM408 358.43c0 4.24-1.69 8.31-4.69 11.31l-9.57 9.57c-3 3-7.07 4.69-11.31 4.69h-15.16c-4.24 0-8.31-1.69-11.31-4.69l-13.01-13.01a26.767 26.767 0 0 0-25.42-7.04l-21.27 5.32c-1.27.32-2.57.48-3.88.48h-10.34c-4.24 0-8.31-1.69-11.31-4.69l-11.91-11.91a8.008 8.008 0 0 1-2.34-5.66v-10.2c0-3.27 1.99-6.21 5.03-7.43l39.34-15.74c1.98-.79 3.86-1.82 5.59-3.05l23.71-16.89a7.978 7.978 0 0 1 4.64-1.48h12.09c3.23 0 6.15 1.94 7.39 4.93l5.35 12.85a4 4 0 0 0 3.69 2.46h3.8c1.78 0 3.35-1.18 3.84-2.88l4.2-14.47c.5-1.71 2.06-2.88 3.84-2.88h6.06c2.21 0 4 1.79 4 4v12.93c0 2.12.84 4.16 2.34 5.66l11.91 11.91c3 3 4.69 7.07 4.69 11.31v24.6z" class="">
              </path>
            </svg>
          </i>
          <div class="contact-info">
            <h5 class="contact-title">Where we are:</h5>
            <p>B-2 'Omkar Plaza' Near ICICI Bank,<br/>Bagal Chowk, Kolhapur - 416001</p>
          </div>
        </div>
          <div class="col-md-3">
            <i class="">
              <svg viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z" class=""></path></svg>
            </i>
            <div class="contact-info">
              <h5 class="contact-title">Call Us:</h5>
              <p><a href="tel:9158995505">9158995505</a></p>
            </div>
          </div>
          <div class="col-md-3">
            <i class="">
              <svg viewBox="0 0 512 512">
                <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z" class=""></path>
              </svg>
            </i>
            <div class="contact-info">
              <h5 class="contact-title">Mail Us:</h5>
              <p><a href="mailto:info@pixelbazar.com">info@pixelbazar.com</a></p>
            </div>
          </div>
          <div class="col-md-3">
            <i class="">
              <svg viewBox="0 0 512 512">
                <path fill="currentColor" d="M400 54.1c63 45 104 118.6 104 201.9 0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31-41.5 30.8-68 79.6-68 134.9-.1 92.3 74.5 168.1 168 168.1 91.6 0 168.6-74.2 168-169.1-.3-51.8-24.7-101.8-68.1-134-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z" class=""></path>
              </svg>
            </i>
            <div class="contact-info">
              <h5 class="contact-title">Work Time:</h5>
              <p>Tue. - Sun. 10:00AM - 07:00PM</p>
            </div>
          </div>
        </div>
    </div><br><br>

    <div class="row">
      <div class="col-md-9 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d122291.28963608075!2d74.1737755064194!3d16.696748218966967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bc1003e50f49e35%3A0xe0887b8c17821958!2spixelbazar!3m2!1d16.696759999999998!2d74.243816!5e0!3m2!1sen!2sin!4v1485068681227" width="100%" height="450" frameborder="0" class="border-0" allowfullscreen=""></iframe>
      </div>
        <div class="col-md-3 d-none d-sm-block">
          <div class="home-enquiry2 shadow" style="background-color:#D3D3D3; ">
            <div class="pt-2 pb-2 pr-3 pl-3 enquiry_form1" style="background-color:#fff;">
              <form  action="<?php echo base_url(); ?>welcome/send_enquiry" method="post" id="enquiry_form3" autocomplete="off" >
        			<div class="text-center set-font pb-1 pt-1">
        			  <h4><b>Get a Free Quote</b></h4>
        			</div>
              <div class="pl-1 alert-danger" style="display:none;">
                Request Not Sent
              </div>
              <div class="pl-1 alert-success" style="display:none;">
                Request Sent Successfully
              </div>
        			<div class="form-row">
        			  <div class="col-md-12 col-12">
        				<label for="exampleInputEmail1">Name/Company</label>
        				<input style="" type="text" id="name3" name="name" class="form-control valid" placeholder="Full Name">
        			  </div>
        			</div>
        			<div class="form-row">
        			  <div class="col-md-12 col-12">
        				<label for="exampleInputEmail1">Email</label>
        				<input type="text" id="email3" name="email" class="form-control valid" placeholder="Email Address">
        			  </div>
        			</div>
        			<div class="form-row">
        			  <div class="col-md-12 col-12">
        				<label for="exampleInputEmail1">Mobile Number</label>
        				<input type="number" id="mobile3" name="mobile" class="form-control valid" placeholder="Enter Mobile Number">
        			  </div>
        			</div>
        			<br>
        		  </form>
              <div class="form-row">
        			  <div class="col-md-12 col-12 text-center" >
                  <button id="btn_enquiry3" type="button" class="btn btn-md btn-outline-warning2">Submit</button>
        			  </div>
        			</div>
            </div>
      	  </div>
        </div>

    </div>
    </section>
  <div id="snackbar"></div>
<!-- Contact End -->
  <?php include('footer.php'); ?>
  <?php if($this->session->flashdata("enquiry_status")){
      $enquiry_status = $this->session->flashdata("enquiry_status");
    ?>
    <input type="hidden" id="enquiry_status" name="enquiry_status" value="<?php echo $enquiry_status; ?>">
    <script>
      $('document').ready(function(){
        function myFunction() {
          var x = document.getElementById("snackbar");
          var enquiry_status = $('#enquiry_status').val();
          if(enquiry_status == 'email_success'){
            x.className = "show_success";
            $('#snackbar').html('Enquiry sent successfully.');
            setTimeout(function(){ x.className = x.className.replace("show_success", ""); }, 3000);
            gtag_report_conversion('https://www.pixelbazar.com/');
          }
          else{
            x.className = "show_error";
            $('#snackbar').html('Enquiry not sent.');
            setTimeout(function(){ x.className = x.className.replace("show_error", ""); }, 3000);
            // gtag_report_conversion('https://www.pixelbazar.com/');
          }
        }
        myFunction();
      });
    </script>
  <?php } ?>
  <script>
    $('document').ready(function(){
      var width = document.getElementById('scroller').offsetWidth;
      var req = width/3;
      req = req;
      $(".tile").width(req);
      $('.tile1').addClass("margin-minus-20");
    });
  </script>

  <script type="text/javascript">
  </script>

  <script>
  function openCity(evt, cityName, tab) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      $('.image-default').hide();
    }

    $(".trans").removeClass('active-trans');
    $(".service-h3").removeClass('active-h3');

    document.getElementById(cityName).style.display = "block";
    // $('#'+cityName).fadeIn();
    $('#'+tab).find('.trans').addClass('active-trans');
    $('#'+tab).find('.service-h3').addClass('active-h3');
    $('#'+cityName).find('img').addClass("animated");
    $('#'+cityName).find('img').addClass("fadeInUp");
    $('#'+cityName).addClass("animated");
    $('#'+cityName).addClass("fadeInUp");
    // paragraph
  }

  function openCity2(evt, cityName, tab) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent2");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      $('.image-default2').hide();
    }

    $(".trans2").removeClass('active-trans');
    $(".service-h3-2").removeClass('active-h3');

    document.getElementById(cityName).style.display = "block";
    $('#'+tab).find('.trans2').addClass('active-trans');
    $('#'+tab).find('.service-h3-2').addClass('active-h3');
    $('#'+cityName).find('img').addClass("animated");
    $('#'+cityName).find('img').addClass("fadeInUp");
    $('#'+cityName).addClass("animated");
    $('#'+cityName).addClass("fadeInUp");
  }
  </script>
  <script type="text/javascript">
    $('#accordion .ui-accordion-header a').css('text-decoration','none');
  </script>
  <script type="text/javascript">
    $('document').ready(function(){
    $('.btn-link').click(function(){
      $('.trans').removeClass('active-trans');
      $('.service-h3').removeClass('active-h3');
      $(this).find('.trans').addClass('active-trans');
      $(this).find('.service-h3').addClass('active-h3');
    });
  });
  </script>
  <script>
  AOS.init();
</script>
    </body>
  </html>
