<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('heiner', 'Configuration/TypoScript', 'dynTemplate');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_heiner_domain_model_content', 'EXT:heiner/Resources/Private/Language/locallang_csh_tx_heiner_domain_model_content.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_heiner_domain_model_content');

    }
);
