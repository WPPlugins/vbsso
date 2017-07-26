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

function vbsso_get_wordpress_custom_config() {
    return array(
	'log' => true,
        'override-links' => true,
    );
}
