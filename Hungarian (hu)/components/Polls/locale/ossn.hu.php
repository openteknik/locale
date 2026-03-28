<?php
/**
 * Open Source Social Network
 *
 * @package    Open Source Social Network
 * @author     OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license    Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link       https://www.opensource-socialnetwork.org/
 */
$hu = array(
		'polls' => 'Szavazások',
		'polls:add' => 'Szavazás hozzáadása',
		'polls:poll' => 'Szavazás',
		'polls:title' => 'Szavazás címe',
		'polls:option:title' => 'Opció megnevezése',
		'polls:add:option' => 'Opció hozzáadása',
		'polls:options' => 'Opciók',
		'polls:publish' => "Szavazás közzététele",
		'polls:error:created' => 'A szavazást nem sikerült létrehozni',
		'polls:success:created' => 'A szavazás sikeresen közzétéve az idovonaladon',
		'polls:vote' => 'Szavazok',
		'polls:success:voted' => 'A szavazatodat rögzítettük',
		'polls:failed:voted' => "A szavazat mentése sikertelen",
		'polls:wall:created' => 'szavazást hozott létre',
		'polls:failed:end' => "A szavazást nem sikerült lezárni",
		'polls:success:end' => 'A szavazás lezárva',
		'polls:end' => 'Lezárás',
		'polls:delete' => 'Törlés',
		'polls:embed' => 'Beágyazás',
		'polls:ended' => 'A szavazás véget ért',
		
		'ossn:notifications:comments:entity:poll_entity' => "%s hozzászólt a szavazáshoz",
		'ossn:notifications:like:entity:poll_entity' => '%s kedvelte a szavazásodat',
		'polls:failed:delete' => 'A szavazást nem sikerült törölni',
		'polls:success:delete' => 'A szavazás törölve',
		
		'polls:time' => 'Létrehozva',
		'polls:status' => 'Állapot',
		'polls:status:ended' => 'Lezárva',
		'polls:status:opened' => 'Nyitott',
		'polls:all' => 'Összes szavazás',
		'polls:my'  => 'Saját szavazásaim',
		'polls:list' => 'Szavazások listája',
		
		'polls:group' => 'Csoport',
		'polls:join:group' => 'A szavazások megtekintéséhez csatlakoznod kell a csoporthoz',
		'polls:show:voters' => 'Szavazók megjelenítése',
		'polls:voters' => 'Szavazók',
		'polls:show:voters:note' => 'A felhasználók láthatják, ki mire szavazott',
		'poll:yes' => 'Igen',
		'poll:no' => 'Nem',
		'polls:error:atleast2' => 'A szavazáshoz legalább 2 opció szükséges!',
		'polls:error:duplicate:options' => 'Az opcióknak egyedinek kell lenniük!', 
);
ossn_register_languages('hu', $hu);