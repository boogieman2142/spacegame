<?php
/**
*
* @package SpaceGame Buildings
* @copyright (c) 2013 schilljs
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
*
*/

namespace schilljs\spacegame\buildings;

/**
* Increases amount of recources, that can be stored on the planet.
* Can be upgraded to increase amount of recources stored.
* Max upgrade level : 50.
*/
class warehouse extends \schilljs\spacegame\buildings\base
{
  protected $times = array(
		'flat'			=> 1800,
		'linear'		=> 600,
		'square'		=> 0,
	);

	protected $costs = array(
		'resource_one'		=> array(
			'flat'				=> 5000,
			'linear'			=> 500,
			'square'			=> 0,
		),

		'resource_two'		=> array(
			'flat'				=> 5000,
			'linear'			=> 500,
			'square'			=> 0,
		),

		'resource_three'	=> array(
			'flat'				=> 1500,
			'linear'			=> 300,
			'square'			=> 100,
		),
	);

	protected $buildings = array(
		'warehouse_flat'		=> 2,
	);

	protected $technologies = array(
	);
}
