<?php
/*
 * Template Name: Coming Soon
 * Description: A Page Template with a Page Builder design.
 */
 $charlostin_redux_demo = get_option('redux_demo');
get_header('comingsoon'); ?>

<section class="comming_soon_area">
    <div class="container">
        <div class="comming_soon_inner">
            <div class="comming_soon_text">
                <h3>Comming Soon</h3>
                <div class='countdown' data-date="2019-02-01"></div>
                <p>Our website is under construction. We'll be here soon with our new <br />awesome site, Subscribe to be notified.</p>
                <div class="fun_subscrib_inner">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Enter your email address" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary submit_btn" type="button" id="button-addon2">Book now</button>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>