<?php

// Calls for Google Analytics custom field
function googleAnalytics()
{
    echo rm_get_option('options_analytics');
}

// Calls for Google Analytics custom field
function webmaster()
{
    echo rm_get_option('options_webmaster');
}

// Calls for telephone custom field
function phone()
{
    echo '<a href="tel:' . rm_get_option('options_telephone') . '">' . rm_get_option('options_telephone') . '</a>';
}

// Calls for Email custom field
function email()
{
    echo '<a href="mailto:' . rm_get_option('options_email') . '">' . rm_get_option('options_email') . '</a>';
}

// Calls for Address custom field
function address()
{
    echo wpautop(rm_get_option('options_address'));
}

// Calls for fax custom field
function fax()
{
    echo rm_get_option('options_fax');
}

// Calls for twtter custom field
function twitter()
{
    echo rm_get_option('options_twitter');
}

// Calls for facebook custom field
function facebook()
{
    echo rm_get_option('options_facebook');
}

// Calls for linkedin custom field
function linkedin()
{
    echo rm_get_option('options_linkedin');
}

// Calls for Google custom field
function google()
{
    echo rm_get_option('options_google');
}

// Calls for Google custom field
function pinterest()
{
    echo rm_get_option('options_pinterest');
}

// Calls for Google custom field
function vat()
{
    echo rm_get_option('options_vat');
}

// Calls for Google custom field
function reg()
{
    echo rm_get_option('options_reg');
}

// Get list of all pages for CMB2 select
function getPages()
{
    $return = array();

    $products = new WP_Query(array( 'post_type' => array('page',), 'posts_per_page' => -1));
    if( $products->have_posts() ) :
        while( $products->have_posts() ) : $products->the_post();
            $return[get_the_ID()] = get_the_title();
        endwhile;
    endif;
    wp_reset_postdata();

    return $return;
}

// Simply remove anything that looks like an archive title prefix ("Archive:", "Foo:", "Bar:").
add_filter('get_the_archive_title', function ($title) {
    return preg_replace('/^\w+: /', '', $title);
});