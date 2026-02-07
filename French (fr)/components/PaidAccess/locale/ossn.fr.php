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
$fr = array(
	'paidaccess' => 'Accès Payant',
	'paidaccess:stripe' => 'Stripe',
	'paidaccess:api:screat:key' => 'Clé Secrète :',
	'paidaccess:api:public:key' => 'Clé Publiable',
	'paidaccess:done' => 'Le paiement a été effectué avec succès, vous pouvez maintenant utiliser le site.',
	'paidaccess:failed' => "Impossible d'ajouter l'utilisateur mais votre paiement a été effectué, veuillez contacter le propriétaire du site à xx pour résoudre le problème.",
	
	'paidaccess:card' => 'Numéro de carte',
	'paidaccess:cvc' => 'CVC',
	'paidaccess:exp' => 'Expiration (MM/AAAA)',
	
	'paidaccess:ammount' => 'Montant',
	'paidaccess:create' => 'Effectuer le paiement',
	'payment:continue' => 'Payez pour votre abonnement afin de continuer',
	'paidaccess:membership:ammount' => "Prix de l'abonnement (en USD)",
	
	'paidaccess:admin:save:error' => "Impossible d'enregistrer les paramètres, assurez-vous d'avoir rempli tous les champs",
	'paidaccess:admin:saved' => 'Paramètres enregistrés',
	'paidaccess:failed' => "Échec du paiement",
	'paidaccess:done' => 'Le paiement a été traité',
	
	'paiduser:markpaid' => 'Marquer comme payé',
	'paidaccess:usermarkedpaid' => "L'utilisateur est maintenant marqué comme payé !",
	'paidaccess:usermarkedpaid:false' => "Impossible de marquer l'utilisateur comme payé",
	'paidaccess:usermarkedunpaid' => "L'utilisateur est marqué comme non payé",
	'paidaccess:usermarkedunpaid:false' => "Impossible de marquer l'utilisateur comme non payé",
	'paiduser:markunpaid' => 'Marquer comme non payé',
	'paidaccess:paypal' => 'PayPal',
	'paidaccess:paypal:client:id' => 'ID Client',
	'paidaccess:paypal:client:secret' => 'Secret Client',
	'paidaccess:default' => "Sélectionner l'option par défaut",
	'paidaccess:currency:default' => "Veuillez noter que la devise par défaut est USD. Si vous souhaitez la changer, vous devez modifier certains fichiers !",
	'paidaccess:support:email' => "Adresse e-mail du support",
	'paidaccess:paypal:error' => "Il y a un problème dans la configuration du paiement, veuillez contacter l'administrateur du site à %s pour résoudre le problème !",
	'paidaccess:paypal:failed' => "Le paiement ne peut pas être complété, veuillez contacter l'administrateur du site à %s pour plus de détails !",
	'paidaccess:paywithpp' => 'Payer avec PayPal',
	'paidaccess:paypal:success' => "Vous avez payé avec succès votre abonnement !",
	
	'paidaccess:wallet:moved' => "Les paramètres d'accès payant ont été déplacés vers le Portefeuille, qui inclut des méthodes de paiement mises à jour. Maintenant, les utilisateurs d'accès payant peuvent utiliser le portefeuille pour effectuer des chargements, et l'accès payant utilise le solde de l'utilisateur pour les paiements.",
	'paidaccess:wallet' => "Veuillez vous assurer que vous disposez de fonds suffisants dans votre portefeuille. Vous pouvez vérifier sur la page de présentation. Pour plus de détails, veuillez contacter notre support %s",
);

ossn_register_languages('fr', $fr);