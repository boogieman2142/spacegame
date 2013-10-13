<?php
/**
*
* @package SpaceGame Buildings
* @copyright (c) 2013 schilljs
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace schilljs\spacegame\buildings;

/**
* Standard building on new planets.
* Can be upgraded to shorten building time of other buildings on the same planet and to unlock new buildings.
* Max upgrade level : 20.
*/
class planetary_fortress extends \schilljs\spacegame\buildings\base
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
		'planetary_fortress_flat'		=> 2,
	);

	protected $technologies = array(
	);
}
