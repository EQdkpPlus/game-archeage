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

if(!class_exists('archeage')) {
	class archeage extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.0.1';
		protected $this_game		= 'archeage';
		protected $types			= array('classes', 'races', 'filters');
		protected $classes			= array();
		protected $races			= array();
		protected $filters			= array();
		public $langs				= array('english');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Nuian
						2 	=> 'all',		// Elf
						3 	=> 'all',		// Hariharan
						4 	=> 'all',		// Ferre
						5	=> 'all',
						6	=> 'all',
					),
				),
			),
		);
		
		protected $class_colors = array(
			1	=> '#C70909',
			2	=> '#1FCA1F',
			3	=> '#13AFDC',
			4	=> '#FFE719',
			5	=> '#D41188',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function profilefields(){
			$xml_fields = array(
				'ability_1'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_ability_1',
					'options'		=> array('-' => 'uc_ab_0','Combat' => 'uc_ab_1', 'Conjury' => 'uc_ab_2', 'Fortification' => 'uc_ab_3', 'Will' => 'uc_ab_4', 'Death' => 'uc_ab_5', 'Wild' => 'uc_ab_6', 'Magic' => 'uc_ab_7', 'Assassination' => 'uc_ab_8', 'Artistry' => 'uc_ab_9', 'Thief - Rogue' => 'Devotion'),
					'undeletable'	=> true,
					'tolang'		=> true,
				),
				'ability_2'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_ability_2',
					'options'		=> array('-' => 'uc_ab_0','Combat' => 'uc_ab_1', 'Conjury' => 'uc_ab_2', 'Fortification' => 'uc_ab_3', 'Will' => 'uc_ab_4', 'Death' => 'uc_ab_5', 'Wild' => 'uc_ab_6', 'Magic' => 'uc_ab_7', 'Assassination' => 'uc_ab_8', 'Artistry' => 'uc_ab_9', 'Thief - Rogue' => 'Devotion'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'ability_3'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_ability_3',
					'options'		=> array('-' => 'uc_ab_0','Combat' => 'uc_ab_1', 'Conjury' => 'uc_ab_2', 'Fortification' => 'uc_ab_3', 'Will' => 'uc_ab_4', 'Death' => 'uc_ab_5', 'Wild' => 'uc_ab_6', 'Magic' => 'uc_ab_7', 'Assassination' => 'uc_ab_8', 'Artistry' => 'uc_ab_9', 'Thief - Rogue' => 'Devotion'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 32,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
			}
		}

		public function install($install=false){}
	}
}
?>