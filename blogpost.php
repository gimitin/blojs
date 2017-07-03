<?php
$pt = "BlogPost";
$showTitle = "Blog";
$showLink = "index";
$showIcon = "home";

?>

<?php include "inc/blogpost_fetch.php"?>
<?php include "inc/header_html.php" ?>
<?php include "inc/AboutMe_(Left Sidebar).php" ?>



<div class="col-md-12 content-page">
    <div class="col-md-12 blog-post">


        <!-- Post Headline Start -->
        <div class="post-title">
            <h1><?php echo $btitle;?></h1>
        </div>
        <!-- Post Headline End -->


        <!-- Post Detail Start -->
        <div class="post-info">
            <span><?php echo $bdate ?> / by <a href="about.php" target="_blank"><?php echo $bauthor ?></a></span>
        </div>
        <!-- Post Detail End -->


        <p><?php echo $btext ?></p>

        <!-- Post Author Bio Box Start -->
        <div class="about-author margin-top-70 margin-bottom-50">

            <div class="picture">
                <img src="images/pic/my-pic1.jpg" class="img-responsive" alt="">
            </div>

            <div class="c-padding">
                <h3>Article By <a href="about.php" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit Alex Website">Ashim</a></h3>
                <p>You can use about author box when someone guest post on your blog, Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ad minim veniam.</p>
            </div>
        </div>
        <!-- Post Author Bio Box End -->




        <!-- You May Also Like Start -->
        <div class="you-may-also-like margin-top-50 margin-bottom-50">
            <h3>You may also like</h3>
            <?php
            include "inc/blog_ymal.php";
            ?>
        </div>
        <!-- You May Also Like End -->

    </div>
</div>




<?php include "inc/sub.php" ?>


<?php
include "inc/footer.php";
?>
<?php include "inc/blog_pop_up.php"; ?>

