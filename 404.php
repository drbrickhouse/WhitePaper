<!--Header-->

<?php get_template_part( 'templates/pages', 'header' ); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <div class="col-12">
    <div class="row breadcrumbs">
      <div class="col-12">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="row main-wrapper">
      <div class="col-12">
        <div class="row title-bar">
          <div class="col-12 col-lg-8 offset-lg-2">
            <h1 class="page-title">404</h1>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
              <p>The page you were looking for isn't here.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Content-->

<!--Footer-->

<?php get_template_part( 'templates/pages', 'footer' ); ?>

<!--End Footer-->
