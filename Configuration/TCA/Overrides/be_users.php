<?php

defined('TYPO3_MODE') || die();

/**
 * By default, it removes all file permissions from backend users that are newly created.
 * The specification of the file permissions per user should be controlled via an ACL backend group.
 * !!! The administrator has the possibility to adjust this setting for each user.
 * Data type: String; Default value: readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile
 */
$GLOBALS['TCA']['be_users']['columns']['file_permissions']['config']['default'] = '';
