<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: stats_products_lowstock.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Disabled Product Report');

define('TABLE_HEADING_NUMBER', 'ID#');
define('TABLE_HEADING_PRODUCTS', 'Products Name');
define('TABLE_HEADING_QTY', 'Quantity');

define('TEXT_MOST', 'Sorted by Quantity from Most to Least');
define('TEXT_LEAST', 'Sorted by Quantity from Least to Most');
define('TEXT_LOWEST', 'Sorted by ID from Lowest to Highest');
define('TEXT_HIGHEST', 'Sorted by ID from Highest to Lowest');
define('TEXT_ALPHA', 'Sorted by Name in Alphabetical Order');
define('TEXT_REVERSE_APLHA', 'Sorted by Name in Reverse Alphabetical Order');
?>
