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
 * This file is only called to redirect to somewhere else,
 * however, if Max is not yet installed, we need to know
 * that it was this file that was called, so set a global
 * variable.
 */
$GLOBALS['_MAX']['ROOT_INDEX'] = true;

// Require the initialisation file
require_once 'init.php';

// Required files
require_once MAX_PATH . '/lib/max/Admin/Redirect.php';

// Redirect to the admin interface
if ($conf['max']['installed']) {
    MAX_Admin_Redirect::redirect();
}

?>
