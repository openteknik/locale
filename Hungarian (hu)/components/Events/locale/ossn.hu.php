<?php
/**
 * Open Source Social Network
 *
 * @package Open Source Social Network
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OPENTEKNIK  LLC, COMMERCIAL LICENSE
 * @license   OPENTEKNIK  LLC, COMMERCIAL LICENSE, COMMERCIAL LICENSE https://www.openteknik.com/license/commercial-license-v1
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$hu = array(
	'event' => 'Események',
	'events' => 'Események',
	'event:wall:button' => 'Esemény',
    'event:fields:required:title:info' => 'Kérjük, ellenorizze, hogy minden mezot kitöltött-e.',
	'event:creation:succes' => 'Az esemény sikeresen létrejött',
	'event:creation:failed' => 'Az eseményt nem sikerült létrehozni',
	'event:creation:succes:saved' => 'Az esemény sikeresen elmentve',
	'event:save:failed' => 'Az esemény mentése sikertelen',
	'event:edit' => 'Esemény szerkesztése',
	'event:edited' => 'Az esemény sikeresen módosítva',
	'event:edit:failed' => 'Az esemény szerkesztése sikertelen',
	
	'event:decision:event:saved' => "A döntés sikeresen elmentve",
	'event:created:by' => "<strong>Létrehozta:</strong> %s",
	'event:going' => 'Ott leszek',
	'event:interested' => 'Érdekel',
	'event:nointerested' => 'Nem érdekel',
	
	'event:start:time' => 'Kezdés idopontja',
	'event:end:time' => 'Befejezés idopontja',
	'event:price' => 'Ár',
	'event:location' => 'Helyszín',
	'event:country' => 'Ország',
	'event:date' => 'Dátum',
	'event:price:any' => 'Ár (ha van)',
	'event:image' => 'Kép',
	'event:allow:comments' => 'Hozzászólások és kedvelések engedélyezése',

	'event:browse' => 'Böngészés',
	'event:all' => 'Összes esemény',
	'event:mine' => 'Saját események', 
	'event:add' => 'Esemény hozzáadása',
	'event:list' => 'Eseménylista',
	
	'event:no:result' => 'Nincs találat',
	'event:delete:failed' => 'Az esemény törlése sikertelen',
	'event:deleted' => 'Az esemény törölve',

	'ossn:notifications:event:relation:going' => '%s részt vesz az eseményeden',
	'ossn:notifications:event:relation:interested' => '%s érdeklodik az eseményed iránt',
	'ossn:notifications:event:relation:nointerested' => '%s nem tartja érdekesnek az eseményedet',
	
	'events:comments:allowed:select' => '',
	'events:comments:allowed' => 'Engedélyezve',
	'events:comments:notallowed' => 'Nincs engedélyezve',
	'event:wall:item:created' => 'Új eseményt hozott létre',
	'ossn:notifications:comments:entity:event:wall' => '%s hozzászólt az eseményhez',
	'ossn:notifications:like:entity:event:wall' => '%s kedvelte az eseményedet',
	
	'event:title' => 'Esemény címe',
	'event:description' => 'Esemény leírása',
	'event:delete:makesure' => 'Biztosan törölni szeretné ezt az eseményt?',
	'event:isended' => 'Lezárja az eseményt? (befejezett)',
	'event:finished:no' => 'Nem',
	'event:finished:yes' => 'Igen',
	'event:finished' => 'Az esemény véget ért!',
	
	'event:nothing:to:show' => 'Nincs megjelenítheto elem!',
	
	// naptár (cal)
	'event:cal:close' => 'Bezárás',
	'event:cal:month' => 'Hónap',
	'event:cal:list' => 'Lista',
	'event:cal:resources' => 'Eroforrások',
	'event:cal:timeline' => 'Idovonal',
	'event:cal:day' => 'Nap',
	'event:cal:week' => 'Hét',
	'event:cal:today' => 'Ma',
	'event:cal:next' => 'Következo',
	'event:cal:previous' => 'Elozo',
	'event:calendar' => 'Naptár',
);
ossn_register_languages('hu', $hu);