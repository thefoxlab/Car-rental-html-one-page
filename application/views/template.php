<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('includes/site_meta'); ?>
    <link rel="icon" type="<?php echo base_url();?>assets/image/png" sizes="32x32" href="<?php echo base_url();?>assets/img/jb-small.png">
    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Noto+Serif:400,400i" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
    <!-- custom fonts -->
    <link href="<?php echo base_url();?>assets/fonts/aileron.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css">
    <!-- Your CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    
</head>

<body class="" data-spy="scroll" data-target="#navbar-nav">
	  <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101472188400226"
  theme_color="#000000"
  logged_in_greeting="Hi! Welcome to JB Car rental services. Would you like to hire car?"
  logged_out_greeting="Hi! Welcome to JB Car rental services. Would you like to hire car?">
      </div>
      
      
    <!-- =========== Preloader Start ============ -->
    <div class="preloader-main">
        <div class="preloader-wapper">
            <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                <defs>
                    <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                    </filter>
                </defs>
                <g filter="url(#goo)">
                    <circle class="dot bg-fill-primary " cx="50" cy="50" r="25" />
                    <circle class="dot" cx="50" cy="50" r="25" fill="#000" />
                </g>
            </svg>
            <div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </div>
    <!-- =========== Preloader End ============ -->
        
    <div class="main">
        <?php $this->load->view('includes/header'); ?>
		<?php $this->load->view($page_name); ?>
        <?php $this->load->view('includes/footer'); ?>       
    </div>
    <script src="<?php echo base_url();?>assets/js/plugins.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
</body>
</html>