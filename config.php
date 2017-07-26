<?php
/**
 * -----------------------------------------------------------------------
 * vBSSO is a plugin that helps you connect to different software platforms
 * via secure Single Sign-On.
 *
 * Copyright (c) 2011-2013 vBSSO. All Rights Reserved.
 * This software is the proprietary information of vBSSO.
 *
 * Author URI: http://www.vbsso.com
 * License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * -----------------------------------------------------------------------
 * $Revision: 950569 $:
 * $Date: 2014-07-17 21:16:55 +0200 (Thu, 17 Jul 2014) $:
 */

require_once(dirname(__FILE__) . '/includes/vbsso_shared.php');

define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_LID', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_LID);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_LOGIN_VBULLETIN_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_LOGIN_VBULLETIN_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_LOGIN_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_LOGIN_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_LOGOUT_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_LOGOUT_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_REGISTER_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_REGISTER_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_LOSTPASSWORD_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_LOSTPASSWORD_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_AVATAR_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_AVATAR_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_PROFILE_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_PROFILE_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_USERGROUPS_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_USERGROUPS_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_USER_UNREAD_STATS_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_USER_UNREAD_STATS_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_STATS_URL', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_STATS_URL);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_BAA_USERNAME', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_BAA_USERNAME);
define('VBSSO_CURRENT_BLOG_NAMED_EVENT_FIELD_BAA_PASSWORD', 'blog_' . $wpdb->blogid . '_' . VBSSO_NAMED_EVENT_FIELD_BAA_PASSWORD);

if (file_exists(dirname(__FILE__) . '/config.custom.php')) {
    require_once(dirname(__FILE__) . '/config.custom.php');
}

if (!defined('ABSPATH')) {
    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        $previous_error_reporting = error_reporting(E_ALL);
        error_reporting($previous_error_reporting & ~E_DEPRECATED);
    }

    require_once(dirname(__FILE__) . '/../../../wp-config.php');
    require_once(dirname(__FILE__) . '/includes/api.php');
}

define ('VBSSO_WORDPRESS_PLUGIN_URL', WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), "", plugin_basename(__FILE__)));