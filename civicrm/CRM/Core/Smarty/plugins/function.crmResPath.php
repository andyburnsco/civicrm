<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC
 * $Id$
 *
 */

/**
 * Determine the path of a resource file
 *
 * @param array $params
 *   Array with keys:
 *   - ext: string, extension name. see CRM_Core_Resources::getPath
 *   - file: string, relative file path. see CRM_Core_Resources::getPath
 * @param CRM_Core_Smarty $smarty
 *
 * @return string
 */
function smarty_function_crmResPath($params, &$smarty) {
  $res = CRM_Core_Resources::singleton();
  if (!array_key_exists('ext', $params)) {
    $params['ext'] = 'civicrm';
  }
  if (!array_key_exists('file', $params)) {
    $params['file'] = NULL;
  }
  return $res->getPath($params['ext'], $params['file']);
}
