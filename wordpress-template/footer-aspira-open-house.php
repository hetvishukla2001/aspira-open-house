<?php
/**
 * Landing page footer for the Aspira Open House WordPress template.
 */

if (!defined('ABSPATH')) {
    exit;
}

$theme_uri = get_template_directory_uri();
?>

<footer class="site-footer">
    <img src="<?php echo esc_url($theme_uri . '/assets/aspira-logo.png'); ?>" alt="Aspira Retirement Living">
    <div>
        <p>Aspira Retirement Living is proudly owned and operated by Sienna Senior Living.</p>
        <p>Copyright © 2026 Aspira Retirement Living. All Rights Reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
