<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Core Team <info@openteknik.com>
 * @copyright (C) OPENTEKNIK LLC
 * @license   OPENTEKNIK LLC, COMMERCIAL LICENSE v1.0 https://www.openteknik.com/license/commercial-license-v1
 * @link      https://www.openteknik.com/
 */
$de = array(
	'paidaccess' => 'Bezahlter Zugang',
	'paidaccess:stripe' => 'Stripe',
	'paidaccess:api:screat:key' => 'Geheimer Schlüssel:',
	'paidaccess:api:public:key' => 'Öffentlicher Schlüssel',
	'paidaccess:done' => 'Die Zahlung wurde erfolgreich durchgeführt. Sie können jetzt die Website nutzen.',
	'paidaccess:failed' => 'Benutzer konnte nicht hinzugefügt werden, aber Ihre Zahlung wurde durchgeführt. Bitte kontaktieren Sie den Website-Besitzer unter xx, um das Problem zu lösen.',
	
	'paidaccess:card' => 'Kartennummer',
	'paidaccess:cvc' => 'CVC',
	'paidaccess:exp' => 'Gültig bis (MM/JJJJ)',
	
	'paidaccess:ammount' => 'Betrag',
	'paidaccess:create' => 'Zahlung durchführen',
	'payment:continue' => 'Bezahlen Sie für das Mitgliedschaft, um fortzufahren',
	'paidaccess:membership:ammount' => 'Mitgliedschaftspreis (in USD)',
	
	'paidaccess:admin:save:error' => 'Einstellungen konnten nicht gespeichert werden. Bitte stellen Sie sicher, dass alle Felder ausgefüllt sind',
	'paidaccess:admin:saved' => 'Einstellungen gespeichert',
	'paidaccess:failed' => 'Zahlung fehlgeschlagen',
	'paidaccess:done' => 'Zahlung wurde verarbeitet',
	
	'paiduser:markpaid' => 'Als bezahlt markieren',
	'paidaccess:usermarkedpaid' => 'Benutzer ist jetzt als bezahlt markiert!',
	'paidaccess:usermarkedpaid:false' => 'Benutzer konnte nicht als bezahlt markiert werden',
	'paidaccess:usermarkedunpaid' => 'Benutzer ist als nicht bezahlt markiert',
	'paidaccess:usermarkedunpaid:false' => 'Benutzer konnte nicht als nicht bezahlt markiert werden',
	'paiduser:markunpaid' => 'Als nicht bezahlt markieren',
	'paidaccess:paypal' => 'PayPal',
	'paidaccess:paypal:client:id' => 'Client-ID',
	'paidaccess:paypal:client:secret' => 'Client-Geheimnis',
	'paidaccess:default' => 'Standardoption auswählen',
	'paidaccess:currency:default' => 'Bitte beachten Sie, dass die Standardwährung USD ist. Wenn Sie dies ändern möchten, müssen Sie einige Dateien bearbeiten!',
	'paidaccess:support:email' => 'Support-E-Mail-Adresse',
	'paidaccess:paypal:error' => 'Es gibt ein Problem mit der Zahlungskonfiguration. Bitte kontaktieren Sie den Website-Administrator unter %s, um das Problem zu lösen!',
	'paidaccess:paypal:failed' => 'Die Zahlung konnte nicht abgeschlossen werden. Bitte kontaktieren Sie den Website-Administrator unter %s für weitere Details!',
	'paidaccess:paywithpp' => 'Mit PayPal bezahlen',
	'paidaccess:paypal:success' => 'Sie haben Ihre Mitgliedschaft erfolgreich bezahlt!',
	
	'paidaccess:wallet:moved' => 'Die Einstellungen für den bezahlten Zugang wurden in das Wallet verschoben, das aktualisierte Zahlungsmethoden enthält. Jetzt können Benutzer des bezahlten Zugangs das Wallet nutzen, um Guthaben aufzuladen, und der bezahlte Zugang verwendet das Benutzerguthaben für die Abbuchung.',
	'paidaccess:wallet' => 'Bitte stellen Sie sicher, dass Sie über ausreichendes Guthaben in Ihrem Wallet verfügen. Sie können dies auf der Übersichtsseite prüfen. Für weitere Details wenden Sie sich bitte an unseren Support %s',
);

ossn_register_languages('de', $de);