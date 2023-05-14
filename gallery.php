<?php include 'includes/header.php' ?>

<!-- ==========Banner Section Starts Here========== -->
<section class="page-header bg_img" data-background="assets/images/banner/banner.jpg">
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Our Campaigns and Work</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    Gallery
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ==========Banner Section Ends Here========== -->


<!-- ==========Gallery Section Starts Here========== -->
<div class="gallery-section padding-top padding-bottom pos-rel">
    <div class="top-shape-center">
        <img src="assets/css/img/gallery1.png" alt="css">
    </div>
    <div class="bottom-shape-left">
        <img src="assets/css/img/bottom-shape.png" alt="css">
    </div>
    <div class="container">
        <ul class="filter-2">
            <li data-filter="*" class="active"><span class="category">All</span></li>
            <li data-filter=".news"><span class="category">News Articles</span></li>
            <li data-filter=".women"><span class="category">Women Empowerment</span></li>
            <li data-filter=".health"><span class="category">Health Care</span></li>
            <li data-filter=".water"><span class="category">Jal Jeevan</span></li>
            <li data-filter=".addiction"><span class="category">De-Addiction</span></li>
            <li data-filter=".skill"><span class="category">Skill Development</span></li>
            <li data-filter=".certi"><span class="category">Certifications</span></li>
            <li data-filter=".others"><span class="category">Others</span></li>
        </ul>
        <div class="masonary-wrapper lg-three-items">
            
        <?php
        // File upload path
        $targetDir = "assets/images/gallery/";
        $file = glob($targetDir . '*');
        $countFile = 0;
        if ($file != false) {
        $countFile = count($file);
        }
        ?>
        <?php foreach ($file as $x=>$val){ ?>
            <div class="masonary-item 
            <?php 
                $a = substr($val,strpos($val,'-')+1);
                $b = substr($a,strpos($a,'.'));
                echo str_replace($b, "",$a);
                ?>
            ">
                <div class="masonary-thumb">
                    <a href=<?php echo $val?> class="img-pop"><i class="fas fa-expand"></i></a>
                    <img src=<?php echo $val?> alt="gallery">
                </div>
            </div>
        <?php } ?>

        </div>
    </div>
</div>


<?php include 'includes/footer.php' ?>