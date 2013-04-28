<?php
/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;
/**
 * Weblinks helper.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_weblinks
 * @since		1.6
 */
class BattleHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param	string	The name of the active view.
	 * @since	1.6
	 */
	public static function addSubmenu($vName = 'Battles')
	{
		JSubMenuHelper::addEntry(
				JText::_('COM_BATTLE_SUBMENU_MAIN'),
				'index.php?option=com_battle&view=main',
				$vName == 'main'
		);
		
		JSubMenuHelper::addEntry(
			JText::_('COM_BATTLE_SUBMENU_PLAYERS'),
			'index.php?option=com_battle&view=players',
			$vName == 'players'
		);
		JSubMenuHelper::addEntry(
			JText::_('COM_BATTLE_SUBMENU_PEOPLE'),
			'index.php?option=com_battle&view=people',
			$vName == 'people'
		);
		JSubMenuHelper::addEntry(
			JText::_('COM_BATTLE_SUBMENU_BUILDINGS'),
			'index.php?option=com_battle&view=buildings',
			$vName == 'buildings'
		);
		JSubMenuHelper::addEntry(
			JText::_('COM_BATTLE_SUBMENU_CARS'),
			'index.php?option=com_battle&view=cars',
			$vName == 'cars'
		);	
		JSubMenuHelper::addEntry(
			JText::_('COM_BATTLE_SUBMENU_WEAPONS'),
			'index.php?option=com_battle&view=weapons',
			$vName == 'categories'
		);
		JSubMenuHelper::addEntry(
			JText::_('COM_BATTLE_SUBMENU_MAPS'),
			'index.php?option=com_battle&view=maps',
			$vName == 'maps'
		);	
		JSubMenuHelper::addEntry(
			JText::_('COM_BATTLE_SUBMENU_PORTALS'),
			'index.php?option=com_battle&view=portals',
			$vName == 'portals'
		);
		
				JSubMenuHelper::addEntry(
			JText::_('COM_BATTLE_SUBMENU_PAGES'),
			'index.php?option=com_battle&view=pages',
			$vName == 'pages'
		);
		
				
		JSubMenuHelper::addEntry(
			JText::_('COM_BATTLE_SUBMENU_CATEGORIES'),
			'index.php?option=com_categories&extension=com_weblinks',
			$vName == 'categories'
		);
		if ($vName=='categories') {
			JToolBarHelper::title(
				JText::sprintf('COM_CATEGORIES_CATEGORIES_TITLE', JText::_('com_weblinks')),
				'weblinks-categories');
		}
	}
}