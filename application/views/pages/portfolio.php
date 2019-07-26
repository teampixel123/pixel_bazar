<?php
$title="Logo Design, Website & Print Designing in Kolhapur | PixelBazar";
$description="Best &#10004; Logo Design &#10004; Website Design &#10004; Print Design Company in Kolhapur. Over 15+ Years of experience in all industry verticals. Book Now !";
$keywords="graphic designer, design, designer, web design, websites, Logo design in Kolhapur, Innovative branding, Kolhapur,logo design,website design, graphic design, web design, logo, web page design, company logo, website development, web design company, business logo, logo creator, company logo design, custom logo design, business logo design, web development company, custom logo, Digital Marketing, SEO, Branding, Digital marketing sevices in kolhapur, logo design company in kolhapur, graphics design company in kolhapur, printing services in kolhapur, logo printing.";
 include('head.php'); ?>
<?php include('style.php'); ?>
<body class="">
	<!-- page header -->
  <?php include('header.php'); ?>
	<!--/ page header  -->
	<div class="top-bg">
		<h2 class="page-title zoomIn animated set-font ">Portfolio</h2>
	</div>
<section id="portfolio" class="portfolio">
  <p class="sub-title1 text-center">Here are some other pieces</p>
  <div class="portfolio-filter clear">
    <div class="title text-center">
      <div class="btn-group btn-group-md" >
        <button class="active btn btn-md btn-outline-warning m-0 border-bottom-0 port-btn" data-filter="item">ALL</button>
        <button class="btn btn-md btn-outline-warning m-0 border-left-0 border-bottom-0 port-btn" data-filter="logo">Logo</button>
        <button class="btn btn-md btn-outline-warning m-0 border-left-0 border-bottom-0 port-btn" data-filter="web">Web</button>
        <button class="btn btn-md btn-outline-warning m-0 border-left-0 border-bottom-0 port-btn"  data-filter="identity">Brand Identity</button>
      </div><hr class="mt-0"/>
    </div>
  </div>
  <div class="container">
    <div class="card-columns">
      <?php foreach ($portfolio_data as $portfolio_data) { ?>
      <div class="card item <?php echo $portfolio_data->type; ?>">
          <a href="<?php echo base_url(); ?>Portfolio-Details/<?php echo $portfolio_data->id; ?>" data-href="<?php echo base_url(); ?>assets/images/portfolio/<?php echo $portfolio_data->photo; ?>" class="boxout2 progressive replace">
            <img id="port_img_<?php echo $portfolio_data->id; ?>" src="<?php echo base_url(); ?>assets/images/portfolio/<?php echo $portfolio_data->photo; ?>" class="preview" alt="<?php echo $portfolio_data->title; ?>" title="<?php echo $portfolio_data->title; ?>" />
          </a>
          <a href="<?php echo base_url(); ?>Portfolio-Details/<?php echo $portfolio_data->id; ?>">
            <div class="portfolio-overlay text-center">
              <div class="overlay-text">
                <svg style="width:30px; padding-bottom:3px;" viewBox="0 0 512 512">
                  <path fill="#fff" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path>
                </svg>
                <h5>View More Details</h5>
              </div>

            </div>
          </a>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
  <!--/ page content -->
  <?php include('footer.php'); ?>
    </body>
  </html>
