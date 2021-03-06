<?php
/* Copyright (C) 2004-2007 Laurent Destailleur  <eldy@users.sourceforge.net>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 *       \file       htdocs/boutique/osc_master.inc.php
 *       \brief      File of preparation of the environment Dolibarr for OSCommerce
 */


/*
 * Creation objet $dbosc
 */
$dbosc=getDoliDBInstance($conf->db->type,$conf->global->OSC_DB_HOST,$conf->global->OSC_DB_USER,$conf->global->OSC_DB_PASS,$conf->global->OSC_DB_NAME,$conf->global->OSC_DB_PORT);

if (! $dbosc->connected)
{
    dol_syslog($dbosc,"host=".$conf->global->OSC_DB_HOST.", user=".$conf->global->OSC_DB_USER.", databasename=".$conf->global->OSC_DB_NAME.", ".$db->error,LOG_ERR);

	llxHeader("",$langs->trans("OSCommerceShop"),"");
	print '<div class="error">'.$langs->trans('FailedConnectDBCheckModuleSetup').'</div>';
	llxFooter();
	exit;
}

