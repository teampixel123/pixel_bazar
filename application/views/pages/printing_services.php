<?php
$title="PixelBazar | Corporate Printing Services in Kolhapur";
$description="PixelBazar gives a Professional look to our stunning Prints &#10004; Corporate Brochure &#10004; T-Shirt Printing &#10004; Business Cards &#10004; Book Prints &#10004; Flyers &#10004; Envelop Get in Touch Now!";
$keywords="Printing, Printing Services in Kolhapur, Brochure Printing, Business Card Printing, Flyer Printing, Envelop Printing, books Printing, printing services in kolhapur, printing company";
$active='service';
include('head.php'); ?>
<body class="woocommerce pc">
	<!-- page header -->
  <?php include('header.php'); ?>
	<!--/ page header  -->
	<!-- <div class="top-bg">
		<h2 class="page-title zoomIn animated set-font">Services</h2>
	</div> -->
  <div class="container service-pg-container">
    <div class="row ">
      <div class="col-md-8">
          <h1 class="service-title">Clear, Crisp and Creative Printing Solutions</h1>
          <h3 class="service-sub-title red-color">High quality prints for highly valuable customers</h3>
          <div class="social-media">
            <!-- <?php echo $email_msg; ?> -->
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url(); ?>printing-services-kolhapur">
              <div class="media-round fb-color-bg">
                <i  class="">
                  <svg style="width:10px; padding-bottom:7px;" viewBox="0 0 320 512">
                    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                  </svg>
                </i>
              </div>
            </a>

            <a class="display_mobile" id="whats_app" target="_blank" href="https://web.whatsapp.com/send?text=<?php echo base_url(); ?>printing-services-kolhapur">
              <div class="media-round wa-color-bg">
                <i class="">
                  <svg style="width:18px; padding-bottom:6px;" viewBox="0 0 448 512" ><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" class=""></path>
                  </svg>
                </i>
              </div>
            </a>
            <!-- <a class="display_pc" target="_blank" href="https://web.whatsapp.com/send?text=<?php echo base_url(); ?>logo-design-kolhapur">
              <div class="media-round wa-color-bg ">
                <i class="">
                  <svg style="width:18px; padding-bottom:6px;" viewBox="0 0 448 512" ><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" class=""></path>
                  </svg>
                </i>
              </div>
            </a> -->
            <a data-toggle="modal" data-target="#exampleModal">
              <div class="media-round mail-color-bg" style="">
                <i class="">
                  <svg style="width:18px; padding-bottom:6px;" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z" class=""></path>
                  </svg>
                </i>
              </div>
            </a>
          </div>

          <!-- <?php
            if($email_msg == 'email_error'){
          ?>
          <div class="alert alert-danger" role="alert">
            Email Not Sent
          </div>
          <?php
            } else if($email_msg == 'email_success'){
          ?>
          <div class="alert alert-success" role="alert">
            <strong>Email Sent Successfully</strong><br />Thank you for submitting your request we will get in touch with you shortly.
          </div>
          <?php
            }
           ?> -->


          <p>A high quality prints grab customers’ attention right at the first instance. What type of print you have in your brochure, flyer or visiting card reflects the status of your company. So, in short printing can also be a status symbol for your business. Customers usually create the first impression of your company from the quality of your printed material. So, give a professional look to your printed material for making customers fan of your brand.</p>
          <img class="service-top-image" src="<?php echo base_url(); ?>assets/images/site/printing_services_kolhapur_l.jpeg" alt="Printing, Printing Services in Kolhapur, Brochure Printing, Business Card Printing, Flyer Printing, Envelop Printing, books Printing, printing services in kolhapur, printing company" width="100%" >

          <h3 class="service-sub-title">Why Pixel Bazar</h3>
          <p>Get high quality prints at a pocket-friendly price. We strive to become a one stop solution for all your printing requirements. Whether you need printing services for business card, letter head, envelop, corporate brochure, catalogue, booklet printing, calenders, corporate printing, flyers, files and folders, menu cards, greeting cards, invitation cards, posters, magzine , mouse pad, mug, cap, dress or cloth, we take care of all types of printing under one umbrella. Let’s talk about our printing services in detail</p>

          <h3 class="service-sub-title">Brochure Printing</h3>
          <p>Allow your business to speak about its beauty through company brochures. Get maximum mileage for your business with us. We are here with eye-candy designs, vibrant colors and innovative inputs to make your brochure stand out.</p>

          <h3 class="service-sub-title">Business cards printing</h3>
          <p>Even in this digital world, the value of business card can’t be underestimated. These cards work as a conversation starter, and promote your business in a better way. Your business card reflects your business and your customer will make a perception about your business through these cards. At Pixel bazar we give you an option to pick the best paper, printing effect and card stock from our wide collection and give a stunning look to your company through these cards.</p>

          <h3 class="service-sub-title">Flyer printing</h3>
          <p>Promotion through flyer or leaflet is considered as one of the economical means for making your audience aware about your offerings. Our premium stock of paper comprises of matt, uncoated, gloss or recycled one for making your first impression an everlasting one for your customers.</p>

          <h3 class="service-sub-title">Our Team</h3>
          <p>Backed by an experienced team of professionals, Pixel Bazar gives you an assurance right from the pre press to printing to post press. We promise quality prints to our customers and we are known for keeping our promise. One more thing which is liked by our clients is less trial error. Our final prints matches with the exact requirements of clients and hence they approve it at the first go. This saves their time and add them in our long list of repeated customers. Our team has served international as well as national clients and they know how to make optimum use of available resources to cut down the cost without compromising on quality.</p>

          <h3 class="service-sub-title">We promise excellent prints</h3>
          <p>Our entire printing work, focus on only one motto which is ‘Good Work’. At the end of the day, we want to see smile on customers’ face and this philosophy motivates us to give our 100% everyday.</p>
          <p>So, contact us for any kind of printing and get world-class prints at cost effective prices.</p>
          <a class="btn btn-service btn-outline-warning2 " href="https://www.pixelbazar.com/Contact">Get Started</a>
      </div>
      <div class="col-md-4 recommend">

          <h3 class="service-recommended">Recommended for you</h3>
          <a href="<?php echo base_url(); ?>signage-design-printing-kolhapur">
            <img class="service-pg-img" src="<?php echo base_url(); ?>assets/images/site/signage_printing.jpg" alt="logo design, logo, company logo, business logo, logo creator, company logo design, custom logo design, business logo design, custom logo, best logo design, logo design services " style="width:100%; height:auto;">
            <p class="red-color service-recommended-head-text" style="font-size:20px;">Discover digital signage with us</p>
          </a>

          <div class="service-right-menu">
              <div class="row">
                  <img class="service-img" src="<?php echo base_url(); ?>assets/images/site/branding_in_kolhapur.jpeg" alt="design my logo, design your logo, logo service, brand logo design, new logo design, corporate logo design, buy logo, buy logo design, logo design site, best logo designers, great logo design, developer logo, simple logo design, brand logo, good logo design, logo and design, professional custom logo design ">
                  <p class="float-right align-self-center service-left-title">Transform your<br> brand</p>
              </div>
              <div class="row" >
                  <img class="service-img" src="<?php echo base_url(); ?>assets/images/site/digital_marketing_company_kolhapur.jpeg" alt="cool logo designs, graphic design custom logo,  new logo ">
                      <p class="float-right align-self-center service-left-title">Make your <br> pocket full of <br>quality leads!</p>
              </div>
              <div class="row" >
                  <img class="service-img" src="<?php echo base_url(); ?>assets/images/site/website_design_kolhapur.gif" alt="custom logo design online free, logo design portfolio, creative logo maker, logo design blog, business card logo design, web logo designers, logo design help, logo maker design ">
                  <p class="float-right align-self-center service-left-title">Turn visitors<br>into customers<br>with beautiful<br>designs</p>
              </div>
              <div class="row" >
                  <img class="service-img" src="<?php echo base_url(); ?>assets/images/site/Corporate_eventsS.jpg" alt="logo design, logo, company logo, business logo, logo creator, company logo design, custom logo design">
                      <p class="float-right align-self-center service-left-title">Events which <br>will emain <br> memorable!</p>
              </div>
              <div class="row">

              </div>
          </div>
          <div class="service-right-menu-bottom">
            <div class="row" >
                <img class="service-img" src="<?php echo base_url(); ?>assets/images/portfolio/869_logo.jpg" alt="cool logo designs, graphic design custom logo, company logo, business logo, logo creator">
                <img class="service-img" src="<?php echo base_url(); ?>assets/images/portfolio/logo_reshimbandhan.jpg" alt="design my logo, design your logo, logo service, brand logo design, new logo design">
            </div>
            <div class="row" >
                <img class="service-img" src="<?php echo base_url(); ?>assets/images/portfolio/734_logo.jpg" alt="business logo design, custom logo, best logo design, logo design services">
                <img class="service-img" src="<?php echo base_url(); ?>assets/images/portfolio/516_logo.jpg" alt="design my logo, design your logo, logo service, brand logo design, new logo design, corporate logo design">
            </div>
          </div>
      </div>
    </div>
  </div>
  <br><br>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Share On Email</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="portfolio_form" method="post" class="message-form clear" action="<?php echo base_url(); ?>Welcome/send_service_email">
              <input type="hidden" name="page_url" value="<?php echo base_url(); ?>">
              <input type="hidden" name="title" value="Best Graphic Design Company in Kolhapur">
              <div class="form-row">
              <div class="form-group row w-100 ">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right pb-2">Your Name: </label>
                <div class="col-sm-8 pb-2">
                  <input type="text" id="name" name="name" class="valid form-control" placeholder="">
                </div>
              </div>
              <div class="form-group row w-100 pb-1">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right">Receiver E-mail: </label>
                <div class="col-sm-8">
                  <input type="email" id="rec_email" name="rec_email" class="valid form-control" placeholder="">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-md btn-outline-warning w-25" data-dismiss="modal">Close</button>
          <button id="send_portfolio_email" type="button" class="btn btn-md btn-outline-warning2 w-25" data-dismiss="modal">Send</button>
        </div>
      </div>
    </div>
  </div>
<?php include('footer.php'); ?>
<script type="text/javascript">
  $('#send_portfolio_email').click(function(){
    $('#portfolio_form').submit();
  });
  $('#send_portfolio_email').click(function() {
    $('#portfolio_form').submit();
  });
  // $('#portfolio_form').submit(function(e){
  //   var data = $(this).serialize();
  //   $.ajax({
  //     url:'<?php echo base_url(); ?>Welcome/send_service_email',
  //     type:"post",
  //     data:data,
  //     processData:false,
  //     contenttype:false,
  //     cache:false,
  //     async:false,
  //     success:function(data){
  //     }
  //   });
  // });
</script>
    </body>
  </html>
