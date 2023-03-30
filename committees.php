<?php

require_once 'committees.civix.php';
// phpcs:disable
use CRM_Committees_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function committees_civicrm_config(&$config): void {
  _committees_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function committees_civicrm_install(): void {
  _committees_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function committees_civicrm_enable(): void {
  _committees_civix_civicrm_enable();
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function committees_civicrm_preProcess($formName, &$form): void {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
function committees_civicrm_navigationMenu(&$menu): void {
	_committees_civix_insert_navigation_menu( $menu, '', [
		'label' => E::ts('Committees'),
		'name' => 'committees',
		'url' => NULL,
		'permission' => 'access CiviCRM',
		'icon' => 'crm-i fa-users',
		'operator' => 'OR',
		'separator' => 0,
	]);
	_committees_civix_insert_navigation_menu( $menu, 'committees', [
		'label' => E::ts('Committee Dashbaord'),
		'name' => 'committee_dashboard',
		'url' => 'civicrm/committee/dashboard',
		'permission' => 'access CiviCRM',
		'operator' => 'OR',
		'separator' => 0,
	]);
	_committees_civix_insert_navigation_menu( $menu, 'committees', [
		'label' => E::ts('New Committee'),
		'name' => 'committee_manage',
		'url' => 'civicrm/committee/manage',
		'permission' => 'access CiviCRM',
		'operator' => 'OR',
		'separator' => 0,
	]);
 	_committees_civix_navigationMenu($menu);
}
