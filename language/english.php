<?php
/*	Project:	EQdkp-Plus
 *	Package:	Archeage game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Tank',
		2	=> 'Healer',
		3	=> 'Supporter',
		4	=> 'Melee',
		5	=> 'Ranged',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Nuian',
		2	=> 'Elf',
		3	=> 'Hariharan',
		4	=> 'Ferre',
	),

	'lang' => array(
		'archeage'					=> 'ArcheAge',
		
		// Profile information
		'uc_gender'					=> 'Gender',
		'uc_male'					=> 'Male',
		'uc_female'					=> 'Female',
		'uc_guild'					=> 'Guild',
		'uc_ability_1'				=> '1. Ability',
		'uc_ability_2'				=> '2. Ability',
		'uc_ability_3'				=> '3. Ability',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'ArcheAge Settings',
		'uc_faction'				=> 'Faction',
		'uc_faction_help'			=> 'Select the default faction',

		// Advanced Class Information
		'uc_ab_0'					=> '-',
		'uc_ab_1'					=> 'Battlerage',
		'uc_ab_2'					=> 'Witchcraft',
		'uc_ab_3'					=> 'Defense',
		'uc_ab_4'					=> 'Auramancy',
		'uc_ab_5'					=> 'Occultism',
		'uc_ab_6'					=> 'Archery',
		'uc_ab_7'					=> 'Sorcery',
		'uc_ab_8'					=> 'Shadowplay',
		'uc_ab_9'					=> 'Songcraft',
		'uc_ab_10'					=> 'Vitalism',

	),
);
?>