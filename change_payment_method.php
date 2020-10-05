<?php

require_once 'change_payment_method.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function change_payment_method_civicrm_config(&$config)
{
    _change_payment_method_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function change_payment_method_civicrm_xmlMenu(&$files)
{
    _change_payment_method_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function change_payment_method_civicrm_install()
{
    _change_payment_method_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function change_payment_method_civicrm_postInstall()
{
    _change_payment_method_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function change_payment_method_civicrm_uninstall()
{
    _change_payment_method_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function change_payment_method_civicrm_enable()
{
    _change_payment_method_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function change_payment_method_civicrm_disable()
{
    _change_payment_method_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function change_payment_method_civicrm_upgrade($op, CRM_Queue_Queue $queue = null)
{
    return _change_payment_method_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function change_payment_method_civicrm_managed(&$entities)
{
    _change_payment_method_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function change_payment_method_civicrm_caseTypes(&$caseTypes)
{
    _change_payment_method_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function change_payment_method_civicrm_angularModules(&$angularModules)
{
    _change_payment_method_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function change_payment_method_civicrm_alterSettingsFolders(&$metaDataFolders = null)
{
    _change_payment_method_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function change_payment_method_civicrm_entityTypes(&$entityTypes)
{
    _change_payment_method_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function change_payment_method_civicrm_themes(&$themes)
{
    _change_payment_method_civix_civicrm_themes($themes);
}

/**
 * Implements hook_civicrm_buildForm
 *
 * @param $formName
 * @param $form
 */
function change_payment_method_civicrm_buildForm($formName, &$form)
{
    // Process only if form is contribution and form id is set (eg. when editing)
    if ($formName != 'CRM_Contribute_Form_Contribution' || $form->getVar('_id') == null) {
        return;
    };
    $form->assign("show_payment_method", true);
}
