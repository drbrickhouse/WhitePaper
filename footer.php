                <div class="row">
                  <div class="col-12">
                    <footer>
                      <div class="row" id="footer-wrapper">
                        <div class="col-12">
                          <?php dynamic_sidebar('footer-a1') ?>
                          <?php dynamic_sidebar('footer-b1') ?>
                        </div>
                      </div>
                      <div class="row" id="copyright">
                        <div class="col-12">
                          <div class="row" id="copyright-inner">
                            <div class="col-12 col-sm-12 col-lg-6">
                              <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> | <a href="/sitemap/" title="sitemap">Sitemap</a></p>
                            </div>
                            <div class="col-12 col-sm-12 col-lg-6">
                              <p>Site by: <img src="<?php echo get_template_directory_uri() . "/images/site-logo.png" ?>"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php wp_footer(); ?>
                    </footer>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
