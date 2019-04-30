<?php

defined('TYPO3_MODE') || die();

/**
 * Register the UserTSconfig configuration.
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:nhio_typo3_cms/Configuration/TsConfig/User/UserTsConfig.tsconfig">'
);

if (TYPO3_MODE == 'BE') {

    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:nhio_typo3_cms/Resources/Public/Images/backend-login-logo.svg';
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginBackgroundImage'] = 'EXT:nhio_typo3_cms/Resources/Public/Images/backend-login-background.jpg';
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginHighlightColor'] = '#ff8700';

}
