  <nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
      <img class="header-logo1" src="<?php echo base_url(); ?>assets/images/site/Pixel_Bazar_Logo-01.png" alt=""/>
      <img class="header-logo2" src="<?php echo base_url(); ?>assets/images/site/Pixel_Bazar_Logo-02.svg" alt=""/>
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="">
              <svg style="width:25px;" viewBox="0 0 448 512">
                <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path>
              </svg>
            </i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="clear navbar-nav ml-auto topnav">
                <li><a class="home" href="<?php echo base_url(); ?>">Home</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle <?php if($active=='service'){ echo 'active'; }else{echo '';}?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>website-design-development-kolhapur">Website Design</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>graphic-design-services-kolhapur">Graphic Design</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>logo-design-kolhapur">Logo Design</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>strategic-branding-kolhapur">Strategic Branding </a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>digital-marketing-services-kolhapur">Digital Marketing</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>signage-design-printing-kolhapur">Signage Solution</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>printing-services-kolhapur">Printing Solution</a>
                    <a class="dropdown-item" href="#">Corporate Event</a>
                  </div>
                </li>
                <!-- <li><a class="home" href="<?php echo base_url();?>Services">Services</a></li> -->
                <li><a href="<?php echo base_url(); ?>Creative-Design-Portfolio">Portfolio</a></li>
                <li><a href="<?php echo base_url(); ?>Testimonials">Testimonials</a></li>
                <li class="last"><a href="<?php echo base_url(); ?>Contact">Contact</a></li>
              </ul>
        </div>
    </nav>
