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
                    Service <svg width="22px" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path></svg>
                      <!-- <svg width="12px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-down fa-w-10"><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" class=""></path></svg> -->
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>website-design-development-kolhapur">Website Design</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>graphic-design-services-kolhapur">Graphic Design</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>logo-design-kolhapur">Logo Design</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>strategic-branding-kolhapur">Strategic Branding </a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>digital-marketing-services-kolhapur">Digital Marketing</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>signage-design-printing-kolhapur">Signage Solution</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>printing-services-kolhapur">Printing Solution</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>event-management-services-kolhapur">Corporate Event</a>
                  </div>
                </li>
                <!-- <li><a class="home" href="<?php echo base_url();?>Services">Services</a></li> -->
                <li><a href="<?php echo base_url(); ?>Creative-Design-Portfolio">Portfolio</a></li>
                <li><a href="<?php echo base_url(); ?>Testimonials">Testimonials</a></li>
                <li class="last"><a href="<?php echo base_url(); ?>Contact">Contact</a></li>
              </ul>
        </div>
    </nav>
