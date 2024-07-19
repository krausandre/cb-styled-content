<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItemGroup(
        'tt_content',
        'CType',
        'cb-styled-content',
        'CB styled content',
        'before:default',
    );
});
