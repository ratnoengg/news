<?= view('common/_json_ld'); ?>
    <footer id="footer">
        <div class="footer-inner">
            <div class="container-xl">
                <div class="row justify-content-between">
                    <div class="col-sm-12 col-md-6 col-lg-4 footer-widget footer-widget-about">
                        
                        <div class="footer-about">
                         <!--    <?= $baseSettings->about_footer; ?> -->

                            Registration no.: 233 <br />
                            Publisher: Saiful Islam Siddique <br />
                            Executive Editor: S M Imdadul Haq<br />
                            Editorial Office : House No 2/E, Road No 29,
                            Gulshan-1, Dhaka-1212, Bangladesh.<br />
                           <a href="tel:09639333555" style="color: #999999;">Phone: 09639333555, </a>

                            <a href="mailto:press@digibanglatech.news?subject=Media%20Inquiry&body=Hello,%0A%0AI would like to contact you regarding..." style="color: #999999;"> E-mail: press@digibanglatech.news</a>

                            © Digtal Bangla Media Ltd,  2019-<?=date('Y')?> 
                        </div>

                        <div class="footer-social-links">
                            <ul>
                                <?= view('common/_social_media_links', ['rssHide' => false]); ?>
                                <!-- <li><a href="https://wa.me/+8801322907204" target="_blank"
   style="background:#25D366;color:white;padding:10px 20px;border-radius:6px;text-decoration:none;">
    📞 
</a></li> -->
                            </ul>
                        </div>

                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 footer-widget">

                        <div style="text-align: center;">
                           First ever Science, Tech & youth based 24/7 bi-lingual Govt Registerd  infotainment portal.

                        </div>

                        <div class="footer-logo" style="text-align: center;">
                        <a href="https://digibanglatech.news/">    <img src="<?= getLogoFooter(); ?>" alt="logo" class="logo" style="width: 150px !important; height: 120px !important; max-height: 150px !important;" ></a>
                        </div>


                        
                       <center>
                          <a href="https://info.flagcounter.com/TnVp"><img src="https://s11.flagcounter.com/count2/TnVp/bg_007122/txt_ffffff/border_999999/columns_4/maxflags_8/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                        </center>



                         <!-- <div class="footer-posts">
                             <div class="" style="text-align: center;">
                              <a href="https://info.flagcounter.com/TnVp"><img src="https://s11.flagcounter.com/count2/TnVp/bg_000000/txt_FFFFFF/border_CCCCCC/columns_6/maxflags_12/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Free counters!" border="0"></a>
                             </div>


                        </div> -->

                        <!-- <h4 class="widget-title"><?= trans("most_viewed_posts"); ?></h4>
                        <div class="footer-posts">
                            <?php $mostViewedPosts = getMostViewedPosts(3);
                            if (!empty($mostViewedPosts)):
                                foreach ($mostViewedPosts as $item): ?>
                                    <?= loadView('post/_post_item_small', ['postItem' => $item, 'showLabel' => false]); ?>
                                <?php endforeach;
                            endif; ?>
                        </div> -->


                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 footer-widget" >

                        <div class="copyright text-start">

                            নিবন্ধন নং - ২৩৩ <br />
                            প্রকাশক: সাইফুল ইসলাম সিদ্দিক<br />
                            নির্বাহী সম্পাদক: এস এম ইমদাদুল হক<br />
                            সম্পাদকীয় কার্যালয়: সড়ক ২৯, বাড়ি ২/ই (গুলশান লেক প্যালেস), সি-২, গুলশান-১, ঢাকা-১২১২, বাংলাদেশ।<br />
                             <a href="tel:09639333555" style="color: #999999;">ফোন: ০৯৬৩৯-৩৩৩৫৫৫, </a>

                            <a href="mailto:press@digibanglatech.news?subject=Media%20Inquiry&body=Hello,%0A%0AI would like to contact you regarding..." style="color: #999999;">  ইমেইল: press@digibanglatech.news</a>
                            <br />
                            © স্বত্ব ডিজিটাল বাংলা মিডিয়া লিমিটেড, ২০১৯-২০২৫<br />
                         <!--    <?= $baseSettings->copyright ?> -->
                        </div>

                        <?php if ($generalSettings->newsletter_status == 1): ?>
                           <!--  <h4 class="widget-title" style="margin-bottom: 0px !important;"><?= trans("newsletter"); ?></h4> -->
                            <div class="newsletter mt-2">
                                <!-- <p class="description"><?= trans("newsletter_desc"); ?></p> -->
                                <form id="form_newsletter_footer" class="form-newsletter">
                                    <div class="newsletter-inputs">
                                        <input type="email" name="email" class="form-control form-input newsletter-input" maxlength="199" placeholder="<?= trans("email"); ?>">
                                        <button type="submit" name="submit" value="form" class="btn btn-custom newsletter-button"><?= trans("subscribe"); ?></button>
                                    </div>
                                    <input type="text" name="url">
                                    <div id="form_newsletter_response"></div>
                                </form>
                            </div>
                        <?php else: ?>
                            <h4 class="widget-title"><?= trans("footer_follow"); ?></h4>
                        <?php endif; ?>
                        
                        <div class="footer-copyright" style=" border: 0px !important; margin: 0px; padding: 0px;" >
                            <div class="nav-footer text-end">
                                <ul>
                                    <?php if (!empty($baseMenuLinks)):
                                        foreach ($baseMenuLinks as $item):
                                            if ($item->item_visibility == 1 && $item->item_location == "footer"):?>
                                                <li><a href="<?= generateMenuItemURL($item, $baseCategories); ?>"><?= esc($item->item_name); ?> </a></li>
                                            <?php endif;
                                        endforeach;
                                    endif; ?>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

               
            </div>
        </div>
       <!--  <div class="footer-copyright">
            <div class="container-xl">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="copyright text-start">
                            <?= $baseSettings->copyright ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="nav-footer text-end">
                            <ul>
                                <?php if (!empty($baseMenuLinks)):
                                    foreach ($baseMenuLinks as $item):
                                        if ($item->item_visibility == 1 && $item->item_location == "footer"):?>
                                            <li><a href="<?= generateMenuItemURL($item, $baseCategories); ?>"><?= esc($item->item_name); ?> </a></li>
                                        <?php endif;
                                    endforeach;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </footer>




   <!--  <a href="#" class="scrollup"><i class="icon-arrow-up"></i></a> -->
<?php if (empty(helperGetCookie('cks_warning')) && $baseSettings->cookies_warning): ?>
    <div class="cookies-warning">
        <button type="button" aria-label="close" class="close" onclick="closeCookiesWarning();">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </button>
        <div class="text">
            <?= $baseSettings->cookies_warning_text; ?>
        </div>
        <button type="button" class="btn btn-md btn-block btn-custom" aria-label="close" onclick="closeCookiesWarning();"><?= trans("accept_cookies"); ?></button>
    </div>
<?php endif; ?>
    <script src="<?= base_url($assetsPath . '/js/jquery-3.6.1.min.js'); ?> "></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>
    <script src="<?= base_url($assetsPath . '/js/plugins-2.3.js'); ?> "></script>
    <script src="<?= base_url($assetsPath . '/js/script-2.3.min.js'); ?> "></script>
<?= loadView('partials/_js_footer'); ?>
    <script>$("form[method='post']").append("<input type='hidden' name='sys_lang_id' value='<?= $activeLang->id; ?>'>");</script>
<?php if ($generalSettings->pwa_status == 1): ?>
    <script>if ('serviceWorker' in navigator) {window.addEventListener('load', function () {navigator.serviceWorker.register('<?= base_url('pwa-sw.js');?>').then(function (registration) {}, function (err) {console.log('ServiceWorker registration failed: ', err);}).catch(function (err) {console.log(err);});});} else {console.log('service worker is not supported');}</script>
<?php endif; ?>
<?= $generalSettings->adsense_activation_code; ?>
<?= $generalSettings->google_analytics; ?>
<?= $generalSettings->custom_footer_codes; ?>



    </body>
    </html>
<?php if (!empty($isPage404)): exit(); endif; ?>