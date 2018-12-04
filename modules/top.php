<div class="content-wrapper">
  <div class="navbar navbar-default default extended centered" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <div class="social-wrapper text-left">
          <ul class="social">
            <li> <a href="<?php echo get_option('facebook'); ?>" target='_blank'><i class="ion-social-facebook"></i></a> </li>
            <li> <a href="<?php echo get_option('linkedin'); ?>" target='_blank'><i class="ion-social-linkedin"></i></a> </li> 
          </ul>
          <!--/.social --> 
        </div>
        <!--/.social-wrapper -->
        <div class="navbar-brand text-center"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="#" srcset="<?php echo get_bloginfo( 'template_directory' );?>/style/images/logo.png 1x, style/images/logo@2x.png 2x" alt="" /></a></div>
        <ul class="info text-right">
          <li><i class="ion-android-mail"></i><a href="mailto:info@denimkumas.com.tr" class="email-link">info@denimkumas.com.tr</a></li>
          <li><i class="ion-headphone"></i>+90 212 474 11 51</li>
        </ul>
        <!-- /.info -->
        <div class="nav-bars-wrapper">
          <div class="nav-bars-inner">
            <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
          </div>
          <!-- /.nav-bars-inner --> 
        </div>
        <!-- /.nav-bars-wrapper --> 
      </div>
      <!-- /.nav-header --> 
    </div>
    <!--/.container -->
    <div class="navbar-collapse collapse">
      <div class="container">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo get_bloginfo( 'wpurl' );?>">HOME</a></li>
          <?php wp_list_pages( '&title_li=' ); ?>
        </ul>
      </div>
      <!--/.container --> 
    </div>
    <!--/.nav-collapse --> 
  </div>
  <!--/.navbar -->
</div>