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

/**
 * @package    MaxUI
 * @subpackage Language
 * @author     Andrew Hill <andrew@m3.net>
 */

/**
 * A class that can be used to load the necessary language file(s) for
 * settings.
 *
 * @static
 */
class Language_Settings
{
    /**
     * The method to load the settings language file(s).
     */
    function load()
    {
        $conf = $GLOBALS['_MAX']['CONF'];
        $pref = $GLOBALS['_MAX']['PREF'];
        // Always load the English language, in case of incomplete translations
        include_once MAX_PATH . '/lib/max/language/english/settings.lang.php';
        // Load the language from preferences, if possible, otherwise load
        // the global preference, if possible
        if (($pref['language'] != 'english') && file_exists(MAX_PATH .
                '/lib/max/language/' . $pref['language'] . '/settings.lang.php')) {
            include_once MAX_PATH . '/lib/max/language/' . $pref['language'] .
                '/settings.lang.php';
        } elseif (($conf['max']['language'] != 'english') && file_exists(MAX_PATH .
                '/lib/max/language/' . $conf['max']['language'] . '/settings.lang.php')) {
            include_once MAX_PATH . '/lib/max/language/' . $conf['max']['language'] .
                '/settings.lang.php';
        }
    }
}

?>
