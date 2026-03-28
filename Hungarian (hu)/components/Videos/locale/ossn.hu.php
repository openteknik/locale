<?php
/**
 * Open Source Social Network
 *
 * @package Open Source Social Network
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$hu = array(
	'videos' => 'Videók',
	'video:com' => 'Videók',
	'video:com:fields:requred' => 'Kérjük, töltsön ki minden mezot',
	'video:com:title' => 'Cím',
	'video:com:description' => 'Leírás',
	'video:com:file' => 'Fájl kiválasztása',
	'video:com:save' => 'Mentés',
	'video:com:add' => 'Videó hozzáadása',
	'video:com:uploaded' => 'A videó elmentve',
	'video:com:upload:failed' => 'A videó feltöltése sikertelen', 
	'video:com:invalid' => 'Érvénytelen videó',
	'video:com:deleted' => 'A videó törölve',
	'video:com:delete:fail' => 'A videó törlése sikertelen',
	'video:com:delete' => 'Törlés',
	'video:com:edit' => 'Szerkesztés',
	'video:com:saved' => 'A videó elmentve',
	'video:com:save:failed' => 'A videó mentése sikertelen',
	'video:com:wall:added' => 'Új videót hozott létre: %s',
	'video:com:all' => 'Összes videó',
	'video:com:mine' => 'Saját videóim',
	'video:com:users:videos' => "%s videói",
	
	'video:com:ffmpeg:path' => 'FFMPEG eszköz elérési útja',
	'video:com:ffmpeg:path:note' => 'Linux szervereken az ffmpeg eszközök általában az /usr/bin/ könyvtárban találhatók. Egyszeruen adja meg azt a könyvtárat, ahol az ffmpeg bináris fájl található.',
	'video:ffmpeg:input:empty' => 'Kérjük, töltsön ki minden mezot',
	'video:ffmpeg:path:saved' => 'Az elérési út sikeresen elmentve',
	'video:ffmpeg:path:save:error' => 'Az elérési út mentése belso hiba miatt sikertelen.',
	
	'video:com:ffmpeg:found' => 'FFMPEG bináris fájl található itt: %s',
	'video:com:ffmpeg:notfound' => 'FFMPEG bináris fájl nem található',
	
	'video:com:ffmpeg:status' => 'FFMPEG állapota',
	'video:com:mp4:files' => 'A videó formátuma nem támogatott',
	
	'video:com:upload:conversion:failed' => 'A videó konvertálása sikertelen',
	'video:com:uploading' => 'Feltöltés:',
	'video:com:converting' => 'Konvertálás:',
	'video:group' => 'Csoport',
	'video:com:upgrade:note' => 'Kérjük, frissítse a videó komponenst az alábbi gombra kattintva',
	'ossn:notifications:comments:entity:file:video' => '%s hozzászólt a videóhoz',
	'ossn:notifications:like:entity:file:video' => '%s kedvelte a videódat',	
	
	'video:com:ffmpeg:compression:value' => 'Tömörítési érték (Alapértelmezett: 35)',
	'video:com:ffmpeg:compress:text' => 'Az értéktartomány 1 és 50 között mozog; az alacsonyabb érték jobb minoséget és nagyobb fájlméretet jelent. Javasoljuk az alapértelmezett érték megtartását a rendszermemória terhelésének csökkentése érdekében.',
	'video:com:ffmpeg:time:value' => 'Maximális videóhossz (Alapértelmezett: 30mp)',
	'video:com:ffmpeg:time:text' => 'A videó maximális idotartama másodpercben (minimum 10 másodperc). Javasoljuk, hogy tartsa ezt az értéket a leheto legalacsonyabban. A hosszabb videók több RAM-ot fogyasztanak és lassítják az oldalt. Javasoljuk, hogy ne állítson be 120 másodpercnél többet.',
	'video:com:maxfilesize' => 'Maximális méret: %s MB',
	'video:com:formats' => 'Engedélyezett formátumok (.mov, .mp4)',
	'video:com:uploadtime' => 'A videó legfeljebb %s másodpercre lesz rövidítve',
	'video:com:converion:cron:failed' => 'A videó konvertálása sikertelen!',
	'video:com:converion:cron:process' => 'A videó konvertálása folyamatban!',
	'video:com:converion:cron:pending' => 'A videó konvertálásra vár a sorban! A várakozási ido alatt a videó nem szerkesztheto és nem törölheto.',
	'video:com:pending' => 'Függoben',
	'video:com:cronjob' => 'Konverziós CRON feladat',
	'video:com:cronjob:text' => 'A videók háttérben történo konvertálásához CRON feladat szükséges. Kérheti tárhelyszolgáltatóját, hogy adja hozzá a cron feladatot a fiókjához. Az /usr/bin/php részt helyettesítheti a PHP bináris fájlok tényleges elérési útjával.',
);
ossn_register_languages('hu', $hu);