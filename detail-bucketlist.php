<?php
/*
Template Name: detail-bucketlist
*/
?>
<?php get_header(); ?>
<main>
<div class="container detailcontainer">
<div class="row">
    <div class="col-md-12">
        <a id="backLink" href="http://localhost:8888/home/"><i class="fa fa-angle-double-left"></i>Go Back to Portfolio</a>
    </div>
</div>
<div class="row">
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
    <div class="row">
        <div class="col-md-12 displayinline">
            <img src="<?php bloginfo('template_directory')?>/build/images/portfolio-detail/bucketlist2.jpg" class="img-responsive">
            <img src="<?php bloginfo('template_directory')?>/build/images/portfolio-detail/bucketlist1.jpg" class="img-responsive">
        </div>
        <div class="col-md-12 displayinline">
            <img src="<?php bloginfo('template_directory')?>/build/images/portfolio-detail/bucketlist3.jpg" class="img-responsive">
        </div>
    </div>
    
</div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 detailtext">
<h1>Maddies Bucket List</h1>
<p>Maddies Bucket List is an Cross platform app I built as a project during my studies at AIT. The app allows user to add 
    activities to their personal bucket list and when an activity has been performed user can mark the activity as completed. 
    When an activity is completed user can add dates and notes. Activities can always be deleted.
    The app is built with HTML, SASS and JavaScript. The data is being stored locally. </p>
<a href="https://github.com/madwester/project-one">Visit my repository on Github here <i class="fa fa-angle-double-right"></i>
</a> 
</div>
</div>
</div>
</main>
<?php get_footer(); ?>