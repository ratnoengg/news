<?php if (!empty($jsPage) && $jsPage == 'gallery'): ?>
    <script src="<?= base_url('assets/vendor/masonry-filter/imagesloaded.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/masonry-filter/masonry-3.1.4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/masonry-filter/masonry.filter.js'); ?>"></script>
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
    <script>
        var startFromLeft = true;
        if (VrConfig.rtl == true) {
            startFromLeft = false;
        }
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            zoomable: false
        });
        $(document).ready(function () {
            $(document).on("click touchstart", ".filters .btn", function () {
                $(".filters .btn").removeClass("active"), $(this).addClass("active")
            }), $(function () {
                var i = $("#masonry");
                i.imagesLoaded(function () {
                    i.masonry({gutterWidth: 0, isAnimated: !0, itemSelector: ".gallery-item", isOriginLeft: startFromLeft})
                }), $(".filters .btn").click(function (t) {
                    t.preventDefault();
                    var e = $(this).attr("data-filter");
                    i.masonryFilter({
                        filter: function () {
                            return !e || $(this).attr("data-filter") == e
                        }
                    })
                })
            })
        });
    </script>
<?php endif;
if (!empty($post) && ($post->post_type == 'trivia_quiz' || $post->post_type == 'personality_quiz' || $post->post_type == 'poll')): ?>
    <script src="<?= base_url('assets/vendor/quiz/quiz-2.2.js'); ?>"></script>
    <script>
        $(document).ready(function () {
            getQuizAnswers('<?= $post->id; ?>');
            getQuizResults('<?= $post->id; ?>');
        });
    </script>
<?php endif;
if (!empty($post) && $post->post_type == "video"): ?>
    <script src="<?= base_url('assets/vendor/plyr/plyr.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/plyr/plyr.polyfilled.min.js'); ?>"></script>
    <script>
        const player = new Plyr('#player');
        $(document).ajaxStop(function () {
            const player = new Plyr('#player');
        });
    </script>
<?php endif;
if (checkNewsletterModal()):?>
    <script>$(window).on('load', function () {$('#modalNewsletter').modal('show');});</script>
<?php endif; ?>

<?php 
if (!empty($post) ): 
      $postURL = generatePostURL($post);
      $postTitle = urlencode($post->title); 
?>
    <script>
        $(document).ready(function () {
           // alert('<?= $postURL; ?>')
            var Url = '<?= $postURL; ?>';
            var title = '<?= $postTitle; ?>';
            var fields='&fields=engagement';
            var access_token='&access_token=367541537121909|nM0_S0DC3q0wH2l1G2xVSRTQz0g';

            // alert(Url);

            function getFBShares(page){
                var shares;
                var url ="https://graph.facebook.com/?ids=" + page + fields+ access_token;
                //alert(url);
                $.getJSON("https://graph.facebook.com/?ids=" + page + fields+ access_token , function(data){

                    //alert(data[page].engagement.share_count);
                   // console.log(data.responseText);

                    if (data[page].engagement.share_count > 0){
                        shares = data[page].engagement.share_count;
                        $("#stlabel").append("<center> " + shares + "<br /> <b style='padding:3px;'> শেয়ার </b></center>  ");
                        //alert(shares);
                    }
                });
            }
            function getTweets(page){
                var tweets;
                $.getJSON("https://urls.api.twitter.com/1/urls/count.json?url=" + page + "&callback=?", function(data){
                    if (data.count > 1) {
                        tweets = data.count;
                        $("#stlabel").append(" " + tweets + " Shares ");
                    }
                });
            }
            function getLinkedIn(page){
                var linkedinCount;
                $.getJSON("https://www.linkedin.com/countserv/count/share?url=" + page + "&callback=?", function(data){
                    if (data.count > 1) {
                        linkedinCount = data.count;
                        $("#stlabel").append(" " + linkedinCount + " Shares ");
                    }
                });
            }

            getFBShares(Url);
            //getTweets(Url);
            //getLinkedIn(Url);
           
        });
    </script>
<?php endif; ?>

