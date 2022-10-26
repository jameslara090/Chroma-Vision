
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/gallery/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/custom/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <section class="mbr-gallery mbr-slider-carousel cid-r9lc3xDwF6" id="gallery3-z">
        <div>
            <div>
                <!-- Filter -->
                <!-- Gallery -->
                <?php
                              include('db.php');
                             // $query = "SELECT * FROM files WHERE username='$_SESSION["username"]' ORDER BY id";
                              $statement = $connect->prepare($query);
                              $statement->execute();
                              $result = $statement->fetchAll();
                             
                                foreach($result as $row)
                                {
                                    echo'
                <div class="mbr-gallery-row">
                    <div class="mbr-gallery-layout-default">
                        <div>
                            <div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Awesome">
                                    <div href="#lb-gallery3-z" data-slide-to="0" data-toggle="modal"><img src="assets/images/cvpd0010-1333x2000-800x1200.jpg" alt="" title=""><span class="icon-focus"></span></div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Lightbox -->
                <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-z">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item"><img src="assets/images/cvpd0010-1333x2000.jpg" alt="" title=""></div>
                                    
                                </div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery3-z"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-z"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div>
                        </div>
                    </div>
                </div>
                '; }?>
                        
            </div>
        </div>

    </section>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
    <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/slidervideo/script.js"></script>
    <script src="assets/gallery/player.min.js"></script>
    <script src="assets/gallery/script.js"></script>
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
