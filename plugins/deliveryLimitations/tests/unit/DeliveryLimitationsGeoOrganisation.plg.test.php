<?php

/*
+---------------------------------------------------------------------------+
| OpenX v${RELEASE_MAJOR_MINOR}                                                                |
| =======${RELEASE_MAJOR_MINOR_DOUBLE_UNDERLINE}                                                                |
|                                                                           |
| Copyright (c) 2003-2008 m3 Media Services Ltd                             |
| For contact details, see: http://www.openx.org/                           |
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

require_once MAX_PATH . '/lib/max/Plugin.php';

/**
 * A class for testing the Plugins_DeliveryLimitations_Geo_Organisation class.
 *
 * @package    OpenXPlugin
 * @subpackage TestSuite
 * @author     Andrew Hill <andrew@m3.net>
 */
class Plugins_TestOfPlugins_DeliveryLimitations_Geo_Organisation extends UnitTestCase
{

    /**
     * The constructor method.
     */
    function Plugins_TestOfPlugins_DeliveryLimitations_Geo_Organisation()
    {
        $this->UnitTestCase();
    }

    /**
     * A method to test the _getSqlLimitation() method.
     */
    function test_getSqlLimitation()
    {
        $oPlugin = &MAX_Plugin::factory('deliveryLimitations', 'Geo', 'Organisation');
        $result = $oPlugin->_getSqlLimitation('=~', 'Foobar');
        $this->assertEqual($result, "LOWER(geo_organisation) LIKE ('%foobar%')");
        $result = $oPlugin->_getSqlLimitation('!~', 'Bar"foo');
        $this->assertEqual($result, "LOWER(geo_organisation) NOT LIKE ('%bar\\\"foo%')");
    }

}

?>
