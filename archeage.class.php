<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2010
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */


if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('archeage')) {
	class archeage extends game_generic {
		public $version			= '0.1';
		protected $this_game	= 'archeage';
		protected $types		= array('classes', 'races', 'filters');
		protected $classes		= array();
		protected $races		= array();
		protected $filters		= array();
		public $langs			= array('english');

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
					'size'			=> 40,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		/**
		* Initialises filters
		*
		* @param array $langs
		*/
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
		
		/**
		* Returns Information to change the game
		*
		* @param bool $install
		* @return array
		*/

		public function install($install=false){

			

			//Do this SQL Query NOT if the Eqdkp is installed -> only @ the first install
			#if($install){
			#}
			return $info;
		}
	}
}
?>