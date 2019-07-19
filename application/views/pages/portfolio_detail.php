<?php include('head.php'); ?>
<body class="woocommerce pc">
	<!-- page header -->
  <?php include('header.php'); ?>
	<!--/ page header  -->
	<div class="top-bg">
		<h2 class="page-title zoomIn animated set-font">Product Details</h2>
	</div>
  <?php $email_msg = $this->session->flashdata('email_msg'); ?>
  <section id="portfolio_details" class="portfolio_details">
<div class="row">
  <div class="col-md-8"></div>
  <div class="col-md-4 ">
    <ul class="pagination float-right">
      <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>Portfolio-Details/<?php echo $prev_id; ?>">Previous</a></li>
      <li class="page-item ">
        <a class="page-link" href="<?php echo base_url(); ?>Creative-Design-Portfolio" style="padding:3.8px;">
        <svg style="width:26px; padding-bottom:2px;" viewBox="0 0 512 512">
          <path fill="currentColor" d="M296 32h192c13.255 0 24 10.745 24 24v160c0 13.255-10.745 24-24 24H296c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24zm-80 0H24C10.745 32 0 42.745 0 56v160c0 13.255 10.745 24 24 24h192c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24zM0 296v160c0 13.255 10.745 24 24 24h192c13.255 0 24-10.745 24-24V296c0-13.255-10.745-24-24-24H24c-13.255 0-24 10.745-24 24zm296 184h192c13.255 0 24-10.745 24-24V296c0-13.255-10.745-24-24-24H296c-13.255 0-24 10.745-24 24v160c0 13.255 10.745 24 24 24z" class=""></path>
        </svg>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>Portfolio-Details/<?php echo $next_id; ?>">Next</a></li>
    </ul>
  </div>
</div>



    <div class="row">
      <div class="col-md-5 col-12">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/<?php echo $portfolio_details[0]['photo']; ?>" class="attachment-shop_single wp-post-image" alt="" title="" width="100%">
      </div>
      <div class="col-md-7 col-12">
        <h1 class="portfolio-title set-font"><?php echo $portfolio_details[0]['title']; ?></h1>
        <div itemscope="" class="">
          <p class="product_sub p-0">
            <?php echo $portfolio_details[0]['short_info']; ?>
          </p>
        </div>
        <div>
          <p class="head mb-0"><b>Quick Overview:</b></p>
          <p><?php echo $portfolio_details[0]['descroption']; ?></p>
          <hr>
        </div>
          <div itemprop="description">
            <p class="head mb-0">Kick start your brand with unique, profesional buesiness identity design</p>
            <p class="head">Logo, Web, Print and more </p>
            <div class="product_meta">
                <a class="btn btn-sm btn-outline-warning" href="<?php echo base_url(); ?>Contact">
                  <svg style="width:14px; padding-bottom:3px;" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z" class=""></path>
                  </svg>
                  Contact Us
                </a>
            </div>
            <hr>
          </div>
          <p class="head mb-0">Share This on: <?php echo $email_msg; ?></p>
          <div class="social-media">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url(); ?>Portfolio-Details/<?php echo $portfolio_details[0]['id']; ?>">
              <div class="media-round fb-color-bg">
                <i  class="">
                  <svg style="width:13px; padding-bottom:7px;" viewBox="0 0 320 512">
                    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                  </svg>
                </i>
              </div>
            </a>
            <a target="_blank" href="whatsapp://send?text=<?php echo base_url(); ?>Portfolio-Details/<?php echo $portfolio_details[0]['id']; ?>">
              <div class="media-round wa-color-bg">
                <i class="">
                  <svg style="width:22px; padding-bottom:6px;" viewBox="0 0 448 512" ><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" class=""></path>
                  </svg>
                </i>
              </div>
            </a>
            <a data-toggle="modal" data-target="#exampleModal">
              <div class="media-round mail-color-bg" style="">
                <i class="">
                  <svg style="width:24px; padding-bottom:6px;" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z" class=""></path>
                  </svg>
                </i>
              </div>
            </a>
          </div>
          <?php
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
           ?>
      </div>
    </div>
  </section>
  <!-- Modal Code -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="portfolio_form" method="post" class="message-form clear">
              <input type="hidden" name="page_url" value="<?php echo base_url(); ?>Portfolio-Details/<?php echo $portfolio_details[0]['id']; ?>">
              <input type="hidden" name="photo" value="<?php echo $portfolio_details[0]['photo']; ?>">
              <input type="hidden" name="title" value="<?php echo $portfolio_details[0]['title']; ?>">
              <input type="hidden" name="short_info" value="<?php echo $portfolio_details[0]['short_info']; ?>">
              <input type="hidden" name="id" value="<?php echo $portfolio_details[0]['id']; ?>">
              <div class="form-row">
              <div class="form-group row w-100 ">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right pb-2">Your Name: </label>
                <div class="col-sm-8 pb-2">
                  <input type="text" id="name" name="name" class="valid form-control" placeholder="">
                </div>
              </div>
              <div class="form-group row w-100">
                <label for="inputPassword" class="col-sm-3 col-form-label text-right pb-2">Your E-mail: </label>
                <div class="col-sm-8  pb-2">
                  <input type="email" id="sender_email" name="sender_email" class="valid form-control" placeholder="">
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
  <!--/ page content -->
  <?php include('footer.php'); ?>
  <script type="text/javascript">
    $('#send_portfolio_email').click(function(){
      $('#portfolio_form').submit();
    });

    $('#portfolio_form').submit(function(e){
      var data = $(this).serialize();
      $.ajax({
        url:'<?php echo base_url(); ?>welcome/send_portfolio_email',
        type:"post",
        data:data,
        processData:false,
        contenttype:false,
        cache:false,
        async:false,
        success:function(data){
        }
      });
    });
  </script>
    </body>
  </html>
