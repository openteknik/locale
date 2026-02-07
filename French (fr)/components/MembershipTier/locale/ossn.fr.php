<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Core Team
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
ossn_register_languages('fr', array(
	'membershiptier'                                => 'Niveau d’adhésion',
	'membershiptier:gadgets:available'             => 'Modules disponibles',
	'membershiptier:disallowed'                    => 'Actions interdites',
	'membershiptier:subtext'                       => 'Un membre avec ce niveau peut effectuer uniquement les actions autorisées. Veuillez donc configurer en conséquence.',
	'membershiptier:settings'                      => 'Gestion des niveaux d’adhésion',

	'membershiptier:gadget:action:group:add'       => 'Action | Ajouter un groupe',
	'membershiptier:gadget:action:post:comment'    => 'Action | Commenter',
	'membershiptier:gadget:action:post:like'       => 'Action | Réactions',
	'membershiptier:gadget:action:message:send'    => 'Action | Envoyer un message',
	'membershiptier:gadget:action:friend:add'      => 'Action | Ajouter un ami',
	'membershiptier:gadget:action:forum:topic:add' => 'Action | Créer un sujet de forum',
	'membershiptier:gadget:action:forum:reply:add' => 'Action | Répondre à un sujet de forum',
	'membershiptier:gadget:action:wall:post:a'     => 'Action | Publication sur le fil d’actualité',
	'membershiptier:gadget:action:wall:post:u'     => 'Action | Publication sur le mur de l’utilisateur',
	'membershiptier:gadget:action:wall:post:g'     => 'Action | Publication sur le mur du groupe',
	'membershiptier:gadget:page:invite'            => 'Page | Inviter',
	'membershiptier:gadget:page:group:guid'        => 'Page | Voir le groupe',
	'membershiptier:gadget:page:group:guid:edit'   => 'Page | Modifier le groupe',
	'membershiptier:gadget:page:group:guid:members'=> 'Page | Membres du groupe',
	'membershiptier:gadget:page:messages:all'      => 'Page | Messages',
	'membershiptier:gadget:page:u:username:photos' => 'Page | Photos',
	'membershiptier:gadget:page:search'            => 'Page | Recherche',
	'membershiptier:gadget:page:page:all'          => 'Page | Liste des pages d’entreprise',
	'membershiptier:gadget:page:page:view:guid'    => 'Page | Voir la page d’entreprise',
	'membershiptier:gadget:page:u:username'        => 'Page | Voir le profil utilisateur',
	'membershiptier:gadget:page:profileviews'      => 'Page | Qui a consulté le profil',
	'membershiptier:gadget:page:video:add'         => 'Page | Ajouter une vidéo',
	'membershiptier:gadget:page:video:all'         => 'Page | Liste des vidéos',
	'membershiptier:gadget:page:event:add'         => 'Page | Ajouter un événement',
	'membershiptier:gadget:page:poll:add'          => 'Page | Ajouter un sondage',
	'membershiptier:gadget:page:poll:all'          => 'Page | Liste des sondages',
	'membershiptier:gadget:page:files:add'         => 'Page | Ajouter un fichier',
	'membershiptier:gadget:page:files:all'         => 'Page | Liste des fichiers',
	'membershiptier:gadget:page:marketplace:add'   => 'Page | Ajouter un produit au marché',
	'membershiptier:gadget:page:marketplace:list'  => 'Page | Liste du marché',
	'membershiptier:gadget:page:mp3:add'           => 'Page | Ajouter un audio',
	'membershiptier:gadget:page:mp3:all'           => 'Page | Liste des audios',
	'membershiptier:gadget:page:mp3:all:guid'      => 'Page | Liste des audios utilisateur',
	'membershiptier:gadget:page:whoisonline'       => 'Page | Qui est en ligne',

	'membershiptier:title'                         => 'Nom/Titre du niveau',
	'membershiptier:cost'                          => 'Coût du niveau',
	'membershiptier:text'                          => 'Vous pouvez choisir les actions autorisées pour chaque niveau à l’étape suivante.',
	'membershiptier:duration'                      => 'Durée',
	'membershiptier:duration:monthly'              => 'Mensuel',
	'membershiptier:duration:onetime'             => 'Unique',
	'membershiptier:brief:desc'                    => 'Description',
	'membershiptier:tieradd:failed'                => 'Ajout du niveau échoué. Veuillez remplir tous les champs.',
	'membershiptier:manageaccess'                  => 'Gérer les niveaux d’accès',
	'membershiptier:edit'                          => 'Modifier le niveau',
	'membershiptier:delete'                        => 'Supprimer',
	'membershiptier:unabletoedit'                  => 'Impossible de modifier le niveau, veuillez réessayer !',
	'membershiptier:edited'                        => 'Le niveau a été modifié',

	'membershiptier:list'                          => 'Liste des niveaux',
	'membershiptier:logs'                          => 'Journal des paiements',
	'membershiptier:add'                           => 'Ajouter un niveau',
	'membershiptier:members:count'                => 'Membres utilisant',
	'membershiptier:configure'                     => 'Configurer',
	'membershiptier:cron:text'                     => 'Vous devez configurer des tâches CRON pour que votre niveau d’adhésion fonctionne.',

	'membershiptier:type:page'                     => 'Page',
	'membershiptier:type:action'                   => 'Action',
	'membershiptier:deleted'                       => 'Le niveau a été supprimé !',
	'membershiptier:delete:failed'                 => 'Échec de la suppression du niveau',

	'membershiptier:pricing'                       => 'Tarification des adhésions',
	'membershiptier:subcribe'                      => 'S’abonner',
	'tier:subscribed:done'                         => 'Vous vous êtes abonné avec succès !',
	'tier:subscribe:failed'                        => 'Une erreur est survenue, veuillez réessayer plus tard ou contacter l’administrateur !',
	'membershiptier:pricing:heading'               => 'Pour garantir une expérience fluide et ininterrompue, nous vous demandons de maintenir des fonds suffisants dans votre portefeuille avant de vous abonner à nos services. Lorsque disponible, vous pouvez également ajouter une carte de paiement pour des transactions automatiques sans interruption. Notez que si une carte est enregistrée, les frais d’adhésion peuvent être débités automatiquement pour éviter toute interruption du service.',

	'membershiptier:add:funds'                     => 'Ajouter des fonds',
	'membershiptier:status'                        => 'Détails de l’adhésion',
	'membership:terminate:warning'                 => 'Cette action est irréversible. Êtes-vous sûr de vouloir annuler ?',
	'membership:status'                            => 'Statut de l’adhésion',
	'membership:status:subtext'                    => 'Bienvenue sur votre page de détails d’adhésion. Ici, vous trouverez toutes les informations pertinentes concernant votre adhésion chez nous, afin de rester informé sur votre statut.',

	'membership:status:plan'                       => 'Nom du plan',
	'membershiptier:duedate'                       => 'Date d’échéance',
	'membershiptier:canceltext'                    => 'Nous comprenons que les circonstances peuvent changer et que vous puissiez vouloir annuler votre adhésion. L’annulation est simple et ne vous sera pas facturée ; l’accès aux fonctionnalités payantes sera résilié.',

	'membershiptier:cancel:now'                    => 'Annuler l’abonnement maintenant',
	'membershiptier:nostatus'                      => '<p>Nous sommes désolés, mais il semble que vous n’ayez aucun abonnement actif associé à votre compte pour le moment.</p>

<p><strong>Abonnement expiré :</strong> Votre précédent abonnement a peut-être expiré et n’a pas été renouvelé. Dans ce cas, vous devez le renouveler pour continuer à profiter de nos services.</p>

<p><strong>Abonnement annulé :</strong> Si vous aviez un abonnement actif mais l’avez annulé, les détails n’apparaîtront plus sur cette page. Vous pouvez toutefois vous réabonner.</p>

<p><strong>Nouveau compte ou aucun historique :</strong> Si vous êtes un nouvel utilisateur ou avez récemment créé un compte, vous n’avez peut-être pas encore souscrit à un plan d’adhésion.</p>

<p>Pour toute question ou problème, contactez notre support client.</p>',

	'membershiptier:plans'                          => 'Voir les plans',
	'membershiptier:needs:sub'                      => 'Vous devez vous abonner au plan avant de voir cette page !',
	'membershiptier:success:charge:cron'            => 'Adhésion renouvelée avec succès !',
	'membershiptier:success:charge:cron:msg'        => "Cher %s,

Félicitations ! Votre adhésion a été renouvelée avec succès ! Nous sommes ravis de vous compter parmi nos membres. Vous pouvez continuer à profiter de tous les avantages de votre adhésion sans interruption.

Merci de votre confiance et fidélité.
%s
%s",

	'membershiptier:failed:charge:cron'             => 'Renouvellement de l’adhésion échoué !',
	'membershiptier:failed:charge:cron:msg'         => "Cher %s,

Nous regrettons de vous informer que le renouvellement de votre adhésion a échoué. Vérifiez vos informations de paiement et assurez-vous que votre portefeuille contient des fonds suffisants. Pour toute assistance, contactez le support client.

Merci !",
	'membershiptier:current:date'                   => 'Date et heure du système',
	'membershiptier:expiry:never'                  => 'Jamais',
	'membershiptier:delete:text'                   => 'La suppression du niveau révoque l’adhésion de tous les membres de ce niveau.',
	'membershiptier:members:export'                => 'Exporter les membres',
	'membershiptier:subscribed'                     => 'Abonné',
	'membershiptier:force:cards'                   => 'Forcer les paiements automatiques',
	'membershiptier:force:cards:p'                 => "Si activé, les utilisateurs doivent enregistrer une carte lors de l'abonnement pour activer les paiements automatiques. Sinon, ils peuvent enregistrer une carte plus tard ou ajouter des fonds manuellement.",
	'membershiptier:force:disabled'                => 'Désactivé',
	'membershiptier:force:enabled'                 => 'Activé',
	'membershiptier:addusertotier'                 => 'Ajouter un utilisateur au niveau',
	'membershiptier:attachuser:note'               => 'Vous pouvez attribuer manuellement un utilisateur à un niveau spécifique après avoir ajouté des fonds à son portefeuille.',
	'membershiptier:searchuser'                    => 'Rechercher un utilisateur (email)',
	'membershiptier:searchuser:next'               => 'Suivant',
	'membershiptier:searchuser:invalid'            => "Aucun utilisateur trouvé !",
	'membershiptier:searchuser:noadmin'            => "Vous ne pouvez pas ajouter d'administrateurs à un niveau !",
	'membershiptier:searchuser:already'            => "Cet utilisateur possède déjà un niveau actif.",
	'tier:manualattach:failed'                     => "Impossible d'ajouter l'utilisateur au niveau !",
	'membershiptier:users:list'                    => 'Utilisateurs',
	'tier:manualattach:done'                       => 'Utilisateur ajouté au niveau !',
	'membershiptier:date:format'                   => 'Format de date',
	'membershiptier:duration:yearly'               => 'Annuel',
));