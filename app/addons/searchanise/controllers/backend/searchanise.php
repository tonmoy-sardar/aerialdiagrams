<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'export') {

    fn_se_signup(fn_se_get_company_id(), NULL, true);
    fn_se_queue_import(fn_se_get_company_id(), NULL, true);

    return array(CONTROLLER_STATUS_OK, 'addons.update?addon=searchanise');

} elseif ($mode == 'options') {
    if (isset($_REQUEST['snize_use_navigation'])) {
        $is_navigation = ($_REQUEST['snize_use_navigation'] == 'true') ? 'Y' : 'N';
        fn_se_set_simple_setting('use_navigation', $is_navigation);
    }

    exit;

} elseif ($mode == 'signup') {
    if (defined('AJAX_REQUEST')) {
        Tygh::$app['ajax']->assign('non_ajax_notifications', true);
        $data = array(
            'result' => false,
            'errors' => array(),
        );

        if (!empty($_REQUEST['get_status'])) {
            $data['result'] = fn_se_get_signup_status();

            if ($data['result'] == 'done') {
                return array(CONTROLLER_STATUS_OK, 'addons.update?addon=searchanise');
            } else {
                $data['errors'] = fn_get_notifications();
            }

        } else {
            if (fn_se_signup() == true) {
                fn_se_queue_import();
                $data['result'] = true;
            }
        }

        Tygh::$app['ajax']->assign('data', $data);

        exit();
    }

    return array(CONTROLLER_STATUS_OK, 'addons.update?addon=searchanise');
}
