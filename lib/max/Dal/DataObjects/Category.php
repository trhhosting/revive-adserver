<?php

/*
+---------------------------------------------------------------------------+
| Openads v${RELEASE_MAJOR_MINOR}                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

/**
 * Table Definition for category
 */
require_once 'DB_DataObjectCommon.php';

class DataObjects_Category extends DB_DataObjectCommon
{
    var $onDeleteCascade = true;
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'category';                        // table name
    var $category_id;                     // int(10)  not_null primary_key unsigned auto_increment
    var $name;                            // string(255)

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Category',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    function _auditEnabled()
    {
        return true;
    }

     function _getContextId()
    {
        return $this->category_id;
    }

    function _getContext()
    {
        return 'Category';
    }

    /**
     * A private method to return the account ID of the
     * account that should "own" audit trail entries for
     * this entity type; NOT related to the account ID
     * of the currently active account performing an
     * action.
     *
     * @return integer The account ID to insert into the
     *                 "account_id" column of the audit trail
     *                 database table.
     */
    function getOwningAccountId()
    {

    }

    /**
     * build a client specific audit array
     *
     * @param integer $actionid
     * @param array $aAuditFields
     */
    function _buildAuditArray($actionid, &$aAuditFields)
    {
        $aAuditFields['key_desc']   = $this->name;
        switch ($actionid)
        {
            case OA_AUDIT_ACTION_INSERT:
                        break;
            case OA_AUDIT_ACTION_UPDATE:
                        break;
            case OA_AUDIT_ACTION_DELETE:
                        break;
        }
    }

    function _formatValue($field)
    {
        switch ($field)
        {
            default:
                return $this->$field;
        }
    }
}

?>