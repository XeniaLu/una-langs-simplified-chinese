<?php
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    Simplified Chinese language
 * @ingroup     UnaModules
 *
 * @{
 */

$aConfig = array(
    /**
     * Main Section.
     */
    'type' => BX_DOL_MODULE_TYPE_LANGUAGE,
    'name' => 'bx_zh',
    'title' => 'Simplified Chinese',
    'note' => 'Language file',
    'version' => '1.0.0',
    'vendor' => 'Boonex',
    'help_url' => 'http://feed.una.io/?section={module_name}',

    'compatible_with' => array(
        '11.0.4',
        '12.0.x'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'boonex/simplified_chinese/',
    'home_uri' => 'zh',

    'db_prefix' => 'bx_zh_',
    'class_prefix' => 'BxZh',

    /**
     * Category for language keys.
     */
    'language_category' => 'BoonEx Simplified Chinese',

    /**
     * Installation/Uninstallation Section.
     * NOTE. The sequence of actions is critical. Don't change the order.
     */
    'install' => array(
        'execute_sql' => 1,
        'update_languages' => 1,
        'install_language' => 1,
        'clear_db_cache' => 1
    ),
    'uninstall' => array (
        'update_languages' => 1,
        'execute_sql' => 1,
        'clear_db_cache' => 1
    ),
    'enable' => array(
        'execute_sql' => 1
    ),
    'disable' => array(
        'execute_sql' => 1
    ),

    /**
     * Dependencies Section
     */
    'dependencies' => array(),

);

/** @} */
