<?php
$title="Logo Design, Website & Print Designing in Kolhapur | PixelBazar";
$description="Best &#10004; Logo Design &#10004; Website Design &#10004; Print Design Company in Kolhapur. Over 15+ Years of experience in all industry verticals. Book Now !";
$keywords="graphic designer, design, designer, web design, websites, Logo design in Kolhapur, Innovative branding, Kolhapur,logo design,website design, graphic design, web design, logo, web page design, company logo, website development, web design company, business logo, logo creator, company logo design, custom logo design, business logo design, web development company, custom logo, Digital Marketing, SEO, Branding, Digital marketing sevices in kolhapur, logo design company in kolhapur, graphics design company in kolhapur, printing services in kolhapur, logo printing.";
$active='add_portfolio';
include('head.php'); ?>
<body class="woocommerce pc">
	<!-- page header -->
  <?php include('header.php'); ?>
	<!--/ page header  -->
	<div class="top-bg">
		<h2 class="page-title zoomIn animated set-font">Add Portfolio</h2>
	</div>
  <section id="add_portfolio" class="add_portfolio">
    <div class="">
      <form id="form_add_portfolio" action="<?php echo base_url() ?>Welcome/save_portfolio" method="POST" class="comment-form" enctype="multipart/form-data">
        <div class="form-group row w-100">
          <label for="inputPassword" class="col-sm-2 col-form-label text-right">Type: </label>
          <div class="col-sm-8">
            <select id="type" name="type" class="valid form-control input" class="" name="">
              <option value="web">Website Design</option>
              <option value="logo">Logo Design</option>
              <option value="identity">Brand Identity</option>
            </select>
          </div>
        </div>
        <div class="form-group row w-100">
          <label for="inputPassword" class="col-sm-2 col-form-label text-right">Title: </label>
          <div class="col-sm-8">
            <input type="text" id="title" name="title" class="valid form-control input" placeholder="">
          </div>
        </div>
        <div class="form-group row w-100">
          <label for="inputPassword" class="col-sm-2 col-form-label text-right">Short Info: </label>
          <div class="col-sm-8">
            <input type="text" id="short_info" name="short_info" class="valid form-control input" placeholder="">
          </div>
        </div>
        <div class="form-group row w-100">
          <label for="inputPassword" class="col-sm-2 col-form-label text-right">Title: </label>
          <div class="col-sm-8">
            <input type="file" id="photo" name="photo" class="valid form-control input" placeholder="">
          </div>
        </div>
        <div class="form-group row w-100">
          <label for="inputPassword" class="col-sm-2 col-form-label text-right">Description: </label>
          <div class="col-sm-8">
            <textarea name="descroption" id="descroption" class="valid form-control input" rows="5" cols="80"></textarea>
          </div>
        </div>
        <div class="form-group row w-100">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <button type="submit" class="btn btn-lg btn-outline-warning2 margin-top w-25" href="<?php echo base_url(); ?>Creative-Design-Portfolio">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!--/ page content -->
  <?php include('footer.php'); ?>
    </body>
  </html>
