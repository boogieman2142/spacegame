<?php
/**
*
* @package SpaceGame Events
* @copyright (c) 2013 schilljs
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace schilljs\spacegame\event;

/**
* @ignore
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Event listener
*/
class main_listener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			#'core.user_setup'						=> 'load_language_on_setup',
			'core.page_header'						=> 'add_page_header_link',
			#'core.viewonline_overwrite_location'	=> 'add_newspage_viewonline',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'nickvergessen/newspage',
			'lang_set' => 'newspage',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_page_header_link($event)
	{
		global $template, $phpbb_container;

		$template->assign_vars(array(
			'U_SPACEGAME'	=> $phpbb_container->get('controller.helper')->url('general'),
		));
	}

	public function add_newspage_viewonline($event)
	{
		global $user, $phpbb_root_path, $phpEx;

		if ($event['on_page'][1] == 'app')
		{
			if (utf8_strpos($event['row']['session_page'], 'controller=news') !== false)
			{
				$event['location_url'] = append_sid($phpbb_root_path . 'app.' . $phpEx, 'controller=news');
				$event['location'] = $user->lang['NEWS'];
			}
		}
	}
}
