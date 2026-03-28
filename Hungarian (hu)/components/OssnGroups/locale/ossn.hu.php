<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Source Social Network Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$hu = array(
    'groups' => 'Csoport',
    'add:group' => 'Csoport hozzĂĄadĂĄsa',
    'requests' => 'KĂŠrĂŠsek',

    'members' => 'Tagok',
    'member:add:error' => 'Valami elromlott! KĂŠrlek, prĂłbĂĄld Ăşjra kĂŠsĹbb.',
    'member:added' => 'A tagfelvĂŠteli kĂŠrelem jĂłvĂĄhagyva!',

    'member:request:deleted' => 'A tagsĂĄgi kĂŠrelem elutasĂ­tva!',
    'member:request:delete:fail' => 'A tagsĂĄgi kĂŠrelmet nem lehet elutasĂ­tani! KĂŠrlek, prĂłbĂĄld Ăşjra kĂŠsĹbb.',
    'membership:cancel:succes' => 'A tagsĂĄgi kĂŠrelem visszavonva!',
    'membership:cancel:fail' => 'A tagsĂĄgi kĂŠrelmet nem lehet tĂśrĂślni! KĂŠrlek, prĂłbĂĄld Ăşjra kĂŠsĹbb.',

    'group:added' => 'Sikeresen lĂŠtrehozta a csoportot!',
    'group:add:fail' => 'Nem lehet csoportot lĂŠtrehozni! KĂŠrlek, prĂłbĂĄld Ăşjra kĂŠsĹbb.',

    'memebership:sent' => 'A kĂŠrĂŠs sikeresen elkĂźldve!',
    'memebership:sent:fail' => 'KĂŠrĂŠst nem lehet elkĂźldeni! KĂŠrlek, prĂłbĂĄld Ăşjra kĂŠsĹbb.',

    'group:updated' => 'A csoport frissĂ­tve lett!',
    'group:update:fail' => 'A csoport nem frissĂ­thetĹ! KĂŠrlek, prĂłbĂĄld Ăşjra kĂŠsĹbb.',

    'group:name' => 'Csoport nĂŠv',
    'group:desc' => 'Csoport leĂ­rĂĄs',
    'privacy:group:public' => 'Mindenki lĂĄthatja ezt a csoportot ĂŠs a hozzĂĄ tartozĂł bejegyzĂŠseket. Csak a tagok Ă­rhatnak bejegyzĂŠseket ebbe a csoportba.',
    'privacy:group:close' => 'Mindenki lĂĄthatja ezt a csoportot. Csak a tagok tehetnek kĂśzzĂŠ ĂŠs lĂĄthatnak bejegyzĂŠseket.',

    'group:memb:remove' => 'EltĂĄvolĂ­t',
    'group:memb:make:owner' => 'Legyen csoport tulajdonos',
    'group:memb:make:owner:confirm' => 'Figyelem! Ezzel a mĹąvelettel >> %s << lesz a csoport Ăşj tulajdonosa, ĂŠs elveszĂ­ti Ăśsszes csoportadminisztrĂĄtori jogosultsĂĄgĂĄt. Biztosan folytatod?',
    'group:memb:make:owner:admin:confirm' => 'Figyelem! Ezzel a mĹąvelettel >> %s << a csoport Ăşj tulajdonosa lesz, a korĂĄbbi tulajdonos pedig elveszĂ­ti Ăśsszes csoportadminisztrĂĄtori jogosultsĂĄgĂĄt. Biztosan folytatod?',
    'leave:group' => 'KilĂŠpĂŠs a csoportbĂłl',
    'join:group' => 'Csatlakozni a csoporthoz',
    'total:members' => 'Ăsszes tag',
    'group:members' => "Tagok (%s)",
    'view:all' => 'Ăsszes megtekintĂŠse',
    'member:requests' => 'KĂRĂSEK (%s)',
    'about:group' => 'Csoport NĂŠvjegy',
    'cancel:membership' => 'TagsĂĄg megszĂźntetĂŠse',

    'no:requests' => 'Nincsenek kĂŠrĂŠsek',
    'approve' => 'JĂłvĂĄhagy',
    'decline' => 'ElutasĂ­tĂĄs',
    'search:groups' => 'Csoportok keresĂŠse',

    'close:group:notice' => 'Csatlakozz ehhez a csoporthoz a bejegyzĂŠsek, fotĂłk ĂŠs megjegyzĂŠsek megtekintĂŠsĂŠhez.',
    'closed:group' => 'ZĂĄrt csoport',
    'group:admin' => 'Admin',
	
	'title:access:private:group' => 'Csoportos bejegyzĂŠs',

	// #186 group join request message var1 = user, var2 = name of group
	'ossn:notifications:group:joinrequest' => '%s csatlakozĂĄst kĂŠrt %s',
	'ossn:group:by' => 'Ăltal:',
	
	'group:deleted' => 'A csoport ĂŠs a csoport tartalma tĂśrĂślve',
	'group:delete:fail' => 'A csoportot nem sikerĂźlt tĂśrĂślni',

	'group:delete:cover' => 'BorĂ­tĂł tĂśrlĂŠse',
	'group:delete:cover:error' => 'Hiba tĂśrtĂŠnt a borĂ­tĂłkĂŠp tĂśrlĂŠse kĂśzben',
	'group:delete:cover:success' => 'A borĂ­tĂłkĂŠp sikeresen tĂśrĂślve',
	'group:my' => 'Csoportjaim',

);
ossn_register_languages('hu', $hu); 
