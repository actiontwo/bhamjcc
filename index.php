<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<div class="container">
    	<div class="row">
        	<div class="col-lg-7 membership_j">
            	<h1>Membership at the J <span>Provides something for everyone.</span></h1>
                <ul>
                    <li>50,000 square foot fitness facility with cardiovascular equipment, strength training machines and free weights</li>
                    <li>Sport court/indoor gym – an ideal space for basketball, volleyball and indoor soccer</li>
                    <li>More than 70 group fitness classes a week</li>
                    <li>Racquetball courts / Pickleball / Adult leagues</li>
                    <li>Well-appointed men's and women's locker rooms with Jacuzzi and steam room</li>
                    <li>Massage and spa services</li>
                    <li>Olympic size salt water pool</li> 
                </ul>
                <h2>Get the right results at the right place -<br>The Valley of the Sun JCC – Where Everyone<br> is welcome!</h2>
            	<div class="contactdetail">
                    <img src="<?php bloginfo("template_url");?>/images/headphone-icon.png" alt="Image" title="Image" />480.634.4909
                    <span>12701 N. Scottsdale Rd.</span>
                </div>
                <a href="#">Click here</a> to learn more about 
                <div class="redtext">The J and its many offerings.</div>
            </div>
            <div class="col-lg-5">
            	<div class="contact_form">
                    <h3>Would you like someone</h3>
                    <h4>to contact your for <span>more information?</span></h4>
                    <hr />
                    <img src="<?php bloginfo("template_url");?>/images/arrow-down.png" />
                    <form>
                        <input type="text" placeholder="Name:" required />
                        <input type="email" placeholder="E-mail Address:" required />
                        <input type="tel" placeholder="Phone:" />
                        <textarea placeholder="Message/ Questions:"></textarea>
                        <input type="submit" value="Submit Now!" class="btn btn-danger" />
                    </form>
                </div>
                <div class="row">
                	<div class="nopayments">
                    	<a href="#"><img src="<?php bloginfo("template_url");?>/images/nopayments.png" alt="Image" title="Image" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
<?php get_footer();
