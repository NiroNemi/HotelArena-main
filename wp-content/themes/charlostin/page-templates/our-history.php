<?php
/*
 * Template Name: Our History
 * Description: A Page Template with a Page Builder design.
 */
 $charlostin_redux_demo = get_option('redux_demo');
get_header(); ?>

<?php if(isset($charlostin_redux_demo['blog_image']['url']) && $charlostin_redux_demo['blog_image']['url'] != ''){?>
<section class="breadcrumb_area" style="    background: url(<?php echo esc_url($charlostin_redux_demo['blog_image']['url']);?>) no-repeat scroll center;
    background-size: cover;
    padding: 75px 0px;">
<?php }else{?>
<section class="breadcrumb_area">
<?php } ?>
        <div class="container">
                <div class="breadcrumb_text">
                        <h2>Our History</h2>
                        <div class="link">
                                <a class="active" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                                <a>About Us</a>
                                <a>Our History</a>
                        </div>
                </div>
        </div>
</section>
        
<section class="about_hotel_area history_about p_100">
        <div class="container">
                <div class="row about_hotel_inner align-items-center d-flex">
                        <div class="col-lg-4">
                                <div class="ab_hotel_img">
                                        <img class="img-fluid" src="<?php echo (get_template_directory_uri().'/assets/img/ab-hotel-2.jpg');?>" alt="">
                                </div>
                        </div>
                        <div class="col-lg-8">
                                <div class="ab_hotel_text">
                                        <div class="main_title">
                                                <h2>About Our Hotel</h2>
                                        </div>
                                        <h5>Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line</h5>
                                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                        <p>At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                </div>
                        </div>
                </div>
        </div>
</section>
        
<section class="history_area pad_btm">
        	<div class="container">
        		<div class="history_inner">
        			<div class="media">
        				<div class="d-flex">
        					<div class="year">
        						2001
        					</div>
        				</div>
        				<div class="media-body">
        					<h4>Starup Louge Restaurant</h4>
        					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it. which of us ever undertakes laborious physical exercise, except to obtain some advantage from it. which of us ever undertakes laborious physical exercise, except to obtain some advantage from it except to obtain some advantage from it.</p>
        				</div>
        			</div>
        			<div class="media">
        				<div class="d-flex">
        					<div class="year">
        						2003
        					</div>
        				</div>
        				<div class="media-body">
        					<h4>Starup Louge Restaurant</h4>
        					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it. which of us ever undertakes laborious physical exercise, except to obtain some advantage from it. which of us ever undertakes laborious physical exercise, except to obtain some advantage from it except to obtain some advantage from it.</p>
        				</div>
        			</div>
        			<div class="media">
        				<div class="d-flex">
        					<div class="year">
        						2006
        					</div>
        				</div>
        				<div class="media-body">
        					<h4>Starup Louge Restaurant</h4>
        					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it. which of us ever undertakes laborious physical exercise, except to obtain some advantage from it. which of us ever undertakes laborious physical exercise, except to obtain some advantage from it except to obtain some advantage from it.</p>
        				</div>
        			</div>
        			<div class="media">
        				<div class="d-flex">
        					<div class="year">
        						2015
        					</div>
        				</div>
        				<div class="media-body">
        					<h4>Starup Louge Restaurant</h4>
        					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. </p>
        					<div class="row m0 history_img">
        						<img class="img-fluid" src="<?php echo (get_template_directory_uri().'/assets/img/history-1.jpg');?>" alt="">
        						<img class="img-fluid" src="<?php echo (get_template_directory_uri().'/assets/img/history-2.jpg');?>" alt="">
        					</div>
        					<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it. which of us ever undertakes laborious physical exercise, except to obtain some advantage from it. which of us ever undertakes laborious physical exercise, except to obtain some advantage from it</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>

<?php
get_footer();
?>