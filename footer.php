
<div id="footer">
  <div id="footer-top-wrapper">
    <div class="container">
      <div class="edit" rel="global" field="bootstrap3-site-footer">
        <div class="mw-row">
          <div class="mw-col" style="width: 30%">
            <div class="mw-col-container"> <a href="http://facebook.com/Microweber" target="_blank"><img src="<?php print template_url(); ?>img/mw.soc.fb_b.png" /></a> <a href="http://twitter.com/Microweber" target="_blank"><img src="<?php print template_url(); ?>img/mw.soc.tt_b.png" /></a> <a href="http://youtube.com/Microweber" target="_blank"><img src="<?php print template_url(); ?>img/mw.soc.yt_b.png" /></a> </div>
          </div>
          <div class="mw-col" style="width: 70%">
            <div class="mw-col-container">
              <module type="menu" name="footer_menu" id="footer-navigation" template="small" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="footer-bottom-wrapper">
    <div class="container">
      <div id="footer-bottom">
        <div class="row">
          <div class="col-md-8">
            <div class="edit" rel="footer" field="footer-copyright">Copyright &copy; <span class="unselectable" contentEditable="false"><?php print date('Y'); ?></span>, All rights reserved </div>
          </div>
          <div class="col-md-4"><span class="muted pull-right"><?php print powered_by_link(); ?> | <a href="<?php print admin_url() ?>">Admin</a></span></div>
        </div>
      </div>
    </div>
  </div>
</div>
</body></html>