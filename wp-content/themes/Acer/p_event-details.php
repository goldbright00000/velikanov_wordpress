<?php /* Template Name: Event Details */

get_header();?>


        <div class="page-title events-detail-title  text-center">
            <h2 class="text-extra-bold white text-uppercase text-center">Events Details</h2>
                <div class="page-location text-center display-ib">
                    <span class="ubuntu fz-14 red-c9">Home   <i class="gray-e9">/</i>   Events</span>
                </div>
        </div>


   <div class="container">

        <?php
global $EM_Event;
/* @var $EM_Event EM_Event */
echo $EM_Event->output_single();

?>




        </div>




      <?php get_footer();?>