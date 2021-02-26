<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
	public function pageSections()
    {
        // check if the repeater field has rows of data
        if( have_rows('our_team') ):
            $data = array();
            // loop through the rows of data
            while ( have_rows('our_team') ) : the_row();
                $post_id = get_sub_field('team')[0];
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)

                if(has_excerpt($post_id)){
                    $post_excerpt = get_the_excerpt($post_id);
                }else{
                    $post_excerpt = "";
                }


                $section = array(
                    'post_title' => get_the_title($post_id),
                    'post_thumbnail' => get_the_post_thumbnail($post_id, $size),
                    'post_excerpt' => $post_excerpt,
                    'name' => get_field( "name", $post_id ),
                    'description' => get_field( "description", $post_id ),
                    'profile' => get_field( "profile", $post_id ),
                    'post_permalink' => get_the_permalink($post_id)
                );

                $data[] = $section;

            endwhile;

        else :
            $data[] = "Contents not found";

        endif;
        return($data);
    }
}
