<!-- =========== Start of Navigation (main menu) ============ -->
<header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
    <div class="container position-relative">
        <a class="navbar-brand mr-70" href="<?php echo base_url();?>">
            <img class="navbar-brand__regular" src="<?php echo base_url();?>assets/img/jb-carrental.png" alt="brand-logo">
            <img class="navbar-brand__sticky" src="<?php echo base_url();?>assets/img/jb-carrental-w.png" alt="sticky brand-logo">
        </a>
        <!--  End of brand logo -->
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- end of Nav toggler -->

        <div class="navbar-inner">
            <!--  Nav close button inside off-canvas/ mobile menu -->
            <button class="navbar-toggler d-lg-none inner-toggle" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end of Nav Toggoler -->
            <nav>
                <ul class="navbar-nav" id="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#our-cars">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#Trips">Trips</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#why">Why us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#Feedback">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Reach us</a>
                    </li>
                    
                </ul>
                <!-- end of nav menu items -->
            </nav>
        </div>
        <div class="flex-row ml-lg-auto d-md-flex mr-70 mr-lg-0 d-none d-sm-inline-block">
            <a href="tel:<?php echo PHONE_NO?>" class="btn btn--md btn--bg-yellow btn-3d-hover btn-splash-hover mr-lg-2 mb-3 mb-sm-0 mr-0 mr-sm-3 ">
                <span class="btn__text"><i class="fa fa-phone"></i> <?php echo PHONE_NO?></span> 
            </a>
        </div>
        <!-- end of nav cta button -->
    </div>
    <!-- end of container -->
</header>
<!-- =========== End of Navigation (main menu)  ============ -->