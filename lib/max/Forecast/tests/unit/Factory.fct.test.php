<?php

/*
+---------------------------------------------------------------------------+
| Openads v2.3                                                              |
| =================                                                         |
|                                                                           |
| Copyright (c) 2003-2007 Openads Ltd                                       |
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

require_once MAX_PATH . '/lib/max/Forecast/Factory.php';

/**
 * A class for testing the MAX_Forecast_Factory class.
 *
 * @package    MaxForecast
 * @subpackage TestSuite
 * @author     Andrew Hill <andrew@m3.net>
 */
class Dal_TestOfMaxForecastFactory extends UnitTestCase
{

    /**
     * The constructor method.
     */
    function Dal_TestOfMaxForecastFactory()
    {
        $this->UnitTestCase();
    }

    /**
     * Test the creation of a Simple module via the factory.
     */
    function testCreateAdServer()
    {
        $conf = &$GLOBALS['_MAX']['CONF'];
        $oMFF = new MAX_Forecast_Factory();
        $classname = $oMFF->_deriveClassName('simple');
        $this->assertEqual($classname, 'MAX_Forecast_Algorithm_Simple');
        TestEnv::restoreConfig();
    }

}

?>
