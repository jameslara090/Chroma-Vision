<link rel="stylesheet" href="admin/assets/vendor/light-gallery/css/lightgallery.css">
<link rel="stylesheet" href="admin/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css">
<link rel="stylesheet" href="admin/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
#lg-download{
	  display: none;
	 }
	 #lg-share{
		 display:none;
	 }
	 #lg-actual-size{
		 display:none;
   }
   .row{
    display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
   }
   * {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.c1 {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */

.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column a img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
.img-hover-zoom--colorize{
  overflow:hidden;
}

.img-hover-zoom--colorize img {
  transition: transform .5s, filter 1.5s ease-in-out;
  
}

/* The Transformation */
.img-hover-zoom--colorize:hover img {
  filter: grayscale(0);
  transform: scale(1.1);
}
</style>

    <!-- MAIN CSS -->
  
<div id="lightgallery" class="c1 mbr-gallery-row clearfix lightGallery">
                              
<div class="column img-hover-zoom--colorize"><a class="light-link " href= "admin/dark/gallery/4_1.jpg" ><img class="img-fluid rounded" src= "admin/dark/gallery/4_1.jpg" alt=""></a></div>
<div class="column img-hover-zoom--colorize"><a class="light-link " href= "admin/dark/gallery/2_1.jpg" ><img class="img-fluid rounded" src= "admin/dark/gallery/2_1.jpg" alt=""></a></div>                               
<div class="column img-hover-zoom--colorize"><a class="light-link " href= "admin/dark/gallery/IMG_0949.jpg" ><img class="img-fluid rounded" src= "admin/dark/gallery/IMG_0949.jpg" alt=""></a></div> 
<div class="column img-hover-zoom--colorize"><a class="light-link " href= "admin/dark/gallery/Page_1.jpg" ><img class="img-fluid rounded" src= "admin/dark/gallery/Page_1.jpg" alt=""></a></div>                            
<div class="column img-hover-zoom--colorize"><a class="light-link " href= "admin/dark/gallery/TK2_9924.jpg" ><img class="img-fluid rounded" src= "admin/dark/gallery/TK2_9924.jpg" alt=""></a></div> 
<div class="column img-hover-zoom--colorize"><a class="light-link " href= "admin/dark/gallery/TK2_0002.jpg" ><img class="img-fluid rounded" src= "admin/dark/gallery/TK2_0002.jpg" alt=""></a></div>    
<div class="column img-hover-zoom--colorize"><a class="light-link " href= "admin/dark/gallery/5 2.jpg" ><img class="img-fluid rounded" src= "admin/dark/gallery/5 2.jpg" alt=""></a></div>                            
<div class="column img-hover-zoom--colorize"><a class="light-link " href= "admin/dark/gallery/11_1.jpg" ><img class="img-fluid rounded" src= "admin/dark/gallery/11_1.jpg" alt=""></a></div> 
                                                                                                         
 </div>

                     
          

          
    <script src="admin/dark/assets/bundles/libscripts.bundle.js"></script>
    <script src="admin/dark/assets/bundles/vendorscripts.bundle.js"></script>
    <script src="admin/dark/assets/bundles/lightgallery.bundle.js"></script>
    <script src="admin/dark/assets/bundles/c3.bundle.js"></script>
    <script src="admin/dark/assets/js/pages/medias/image-gallery.js"></script>
    <script src="admin/dark/assets/bundles/mainscripts.bundle.js"></script>
    <script src="admin/dark/assets/js/index.js"></script>
    <script>
    $(function() {
// OPACITY OF BUTTON SET TO 0%
$(".roll").css("opacity","0");
 
// ON MOUSE OVER
$(".roll").hover(function () {
 
// SET OPACITY TO 70%
$(this).stop().animate({
opacity: .7
}, "fast");
},
              
 
// ON MOUSE OUT
function () {
 
// SET OPACITY BACK TO 50%
$(this).stop().animate({
opacity: 0
}, "slow");
});
});
    </script>