<?php
/**
 * Theme functions for the Aspira Open House prototype.
 *
 * This demonstrates how the static prototype can be adapted into a WordPress
 * theme/template workflow without requiring a full WordPress install for review.
 */

if (!defined('ABSPATH')) {
    exit;
}

function aspira_open_house_enqueue_assets() {
    if (is_page_template('page-aspira-open-house.php')) {
        wp_enqueue_style(
            'aspira-open-house',
            get_template_directory_uri() . '/assets/aspira-open-house.css',
            array(),
            '1.0.0'
        );

        wp_enqueue_script(
            'aspira-open-house',
            get_template_directory_uri() . '/assets/aspira-open-house.js',
            array(),
            '1.0.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'aspira_open_house_enqueue_assets');

function aspira_open_house_schema() {
    if (!is_page_template('page-aspira-open-house.php')) {
        return;
    }

    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Event',
        'name' => 'Aspira National Open House Spring 2026',
        'startDate' => '2026-05-29T13:00:00-04:00',
        'endDate' => '2026-06-01T16:00:00-04:00',
        'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
        'eventStatus' => 'https://schema.org/EventScheduled',
        'organizer' => array(
            '@type' => 'Organization',
            'name' => 'Aspira Retirement Living',
            'url' => 'https://www.aspiralife.ca/',
        ),
        'description' => 'Open House tours at Aspira Retirement Residences, including Aspira Kensington Place.',
    );

    echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>' . "\n";
}
add_action('wp_head', 'aspira_open_house_schema');
