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
	'admin:customfields' => 'Felhasználói mezok',
	'customfields:settings' => 'Felhasználói mezok beállításai',
	'customfield:yes' => 'Igen',
	'customfield:no' => 'Nem',
	'customfield:textbox' => 'Szövegmezo',
	'customfield:dropdownbox' => 'Legördülo menü',
	'customfield:radio' => 'Választógombok (Radio)',
	'customfield:textarea' => 'Hosszú szövegmezo',
	'customfield:name' => 'Mezo neve (nem tartalmazhat szóközt és speciális karaktert)',
	'customfield:title' => 'Mezo felirata (Title)',
	'customfield:options' => 'Mezo opciók (választógombhoz/legördülohöz) vesszovel elválasztva. Példa: opció1, opció2, opció3',
	'customfield:add' => 'Mezo hozzáadása',
	'customfield:type' => 'Mezo típusa',
	'customfield:showsignup' => 'Megjelenítés regisztrációkor',
	'customfield:fieldrequired' => 'Kötelezo mezo',
	'customfield:showlabel' => 'Címke megjelenítése (a regisztrációs lapon)',
	'customfield:showonabout' => 'Megjelenítés a Névjegy oldalon',
	'customfield:aboutpage' => 'Névjegy oldal',
	'customfield:showaboutpage' => 'Névjegy oldal megjelenítése',
	'customfield:fields:required:a' => 'Kérjük, töltse ki a mezo nevét és típusát',
	'customfield:fields:required:b' => 'Kérjük, adja meg a mezo opcióit',
	'customfield:fields:required:c' => 'Kérjük, a mezo nevét csak betukkel adja meg',
	'customfield:fields:added' => 'Az egyéni mezo hozzáadva',
	'customfield:fields:add:failed' => 'Az egyéni mezo hozzáadása sikertelen',
	'customfield:edit' => 'Szerkesztés',
	'customfield:fields:edited' => 'A mezo szerkesztése sikerült',
	'customfield:fields:edit:failed' => 'A mezo szerkesztése sikertelen',
	
	'customfield:list:name' => 'Név',
	'customfield:list:title' => 'Cím',
	'customfield:list:type' => 'Típus',
	'customfield:list:onsignup' => 'Regisztrációnál',
	'customfield:list:required' => 'Kötelezo',
	'customfield:list:label' => 'Címke',
	'customfield:list:about' => 'Névjegynél',
	'customfield:list:manage' => 'Kezelés',
	
	'customfield:fields:initlized' => 'Egyéni mezok inicializálása',
	'customfields:init' => 'Inicializálás',
	'customfield:abouser' => 'Névjegy',
	'customfield:fields:aboutsaved' => 'Névjegy oldal beállításai mentve',
	'customfield:fields:aboutsave:error' => 'A Névjegy oldal beállításait nem sikerült menteni',
	'customfields:note' => '*A mezok sorrendjét "fogd és vidd" módszerrel módosíthatja.<br />*A rendszer alapértelmezett mezoit nem törölheti, csak a sorrendjüket módosíthatja.<br />*Legördülo vagy választógomb típusnál az opciókat vesszovel elválasztva adja meg.<br />*A "Címke megjelenítése" opcióval szabályozhatja, hogy a mezo felett látszódjon-e a megnevezése a regisztrációs/szerkesztési lapon.<br />*A nem kötelezo mezok nem jelennek meg a regisztrációs lapon.',
	
	'customfield:fields:deleted' => 'A mezo sikeresen törölve',
	'customfield:fields:delete:error' => 'A mezo törlése sikertelen',
	'customfield:disablecomponent' => 'Kérjük, gyozodjön meg róla, hogy letiltotta az alábbi komponenseket: <li>AboutUser</li> <li>Bio</li> <li>M_Country</li>',
	'customfields:basic:information' => 'Alapveto információk',	
);
ossn_register_languages('hu', $hu);