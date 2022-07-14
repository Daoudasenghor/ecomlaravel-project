<!-- Or let Bootstrap automatically handle the layout -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
<!-- font awesome cdn -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<!-- style.css -->
<link rel="stylesheet" type="text/css" href="style.css"/>
<!-- jquery cdn -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
<div class="top-content">
<div class="container-fluid">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                <img src="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-330x421.jpg" class="img-fluid mx-auto d-block" alt="img1">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-330x421.jpg" class="img-fluid mx-auto d-block" alt="img2">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-330x421.jpg" class="img-fluid mx-auto d-block" alt="img3">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-330x421.jpg" class="img-fluid mx-auto d-block" alt="img4">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-330x421.jpg" class="img-fluid mx-auto d-block" alt="img5">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-330x421.jpg" class="img-fluid mx-auto d-block" alt="img6">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-330x421.jpg" class="img-fluid mx-auto d-block" alt="img7">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/image1xxl1-330x421.jpg" class="img-fluid mx-auto d-block" alt="img8">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>

<style>
slider*/
#carouselExampleIndicators{
position: relative;
height: 100vh;
width: 100%;
}
#carouselExampleIndicators .carousel-inner{
position: relative;
height: 100%;
width: 100%;
background: #000;
}
#carouselExampleIndicators .carousel-inner:before{
position: absolute;
content: '';
background: rgba(0, 0, 0, 0.45);
top: 0;
left: 0;
height: 100%;
width: 100%;
z-index: 1;
}
#carouselExampleIndicators .carousel-inner .carousel-item{
position: relative;
height: 100%;
width:100%;
background: url('https://themes.laborator.co/aurum/fashion/wp-content/uploads/2016/04/pamooxhi.png');
background-size: 100% 100%;
background-position: center;
background-attachment: fixed;
}
#carouselExampleIndicators .carousel-inner .carousel-item:nth-child(2){
background: url('https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/12/cloud1.png');
background-position: center;
background-attachment: fixed;
}
#carouselExampleIndicators .carousel-inner .carousel-item:nth-child(3){
background: url('https://themes.laborator.co/aurum/fashion/wp-content/uploads/2014/11/bg-1-1.png');
background-size: 100% 100%;
background-position: center;
background-attachment: fixed;
}

#carouselExampleIndicators .carousel-inner .carousel-item .info{
position: absolute;
top: 50%;
transform: translateY(-50%);
height: auto;
width: 100%;
z-index: 1;
text-align: center;
}
#carouselExampleIndicators .carousel-inner .carousel-item h1{
height: auto;
color: #fff;
width: 100%;
z-index: 1;
text-align: center;
font-size: 5.5em;
font-weight: 750;
}
#carouselExampleIndicators .carousel-inner .carousel-item p{
height: auto;
color: #ccc;
width: 100%;
z-index: 1;
text-align: center;
font-size: 1.2em;
font-weight: 500;
}
#button-c-three{
color: red;
width: 20px;

}

@media (min-width: 768px) and (max-width: 991px) {
/* Show 4th slide on md if col-md-4*/
.carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;  /*change this with javascript in the future*/
    z-index: -1;
    display: block;
    visibility: visible;
}
}
@media (min-width: 576px) and (max-width: 768px) {
/* Show 3rd slide on sm if col-sm-6*/
.carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -50%;  /*change this with javascript in the future*/
    z-index: -1;
    display: block;
    visibility: visible;
}
}
@media (min-width: 576px) {
.carousel-item {
    margin-right: 0;
}
/* show 2 items */
.carousel-inner .active + .carousel-item {
    display: block;
}
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
    transition: none;
}
.carousel-inner .carousel-item-next {
    position: relative;
    transform: translate3d(0, 0, 0);
}
/* left or forward direction */
.active.carousel-item-left + .carousel-item-next.carousel-item-left,
.carousel-item-next.carousel-item-left + .carousel-item,
.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
}
/* farthest right hidden item must be also positioned for animations */
.carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
}
/* right or prev direction */
.active.carousel-item-right + .carousel-item-prev.carousel-item-right,
.carousel-item-prev.carousel-item-right + .carousel-item,
.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
}
}
/* MD */
@media (min-width: 768px) {
/* show 3rd of 3 item slide */
.carousel-inner .active + .carousel-item + .carousel-item {
    display: block;
}
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
    transition: none;
}
.carousel-inner .carousel-item-next {
    position: relative;
    transform: translate3d(0, 0, 0);
}
/* left or forward direction */
.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
}
/* right or prev direction */
.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
}
}
/* LG */
@media (min-width: 991px) {
/* show 4th item */
.carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
    display: block;
}
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
    transition: none;
}
/* Show 5th slide on lg if col-lg-3 */
.carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -25%;  /*change this with javascript in the future*/
    z-index: -1;
    display: block;
    visibility: visible;
}
/* left or forward direction */
.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
}
/* right or prev direction //t - previous slide direction last item animation fix */
.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
}
}
</style>

<script>
$('#carousel-example').on('slide.bs.carousel', function (e) {
/*
    CC 2.0 License Iatek LLC 2018 - Attribution required
*/
var $e = $(e.relatedTarget);
var idx = $e.index();
var itemsPerSlide = 5;
var totalItems = $('.carousel-item').length;

if (idx >= totalItems-(itemsPerSlide-1)) {
    var it = itemsPerSlide - (totalItems - idx);
    for (var i=0; i<it; i++) {
        // append slides to end
        if (e.direction=="left") {
            $('.carousel-item').eq(i).appendTo('.carousel-inner');
        }
        else {
            $('.carousel-item').eq(0).appendTo('.carousel-inner');
        }
    }
}
});
</script>