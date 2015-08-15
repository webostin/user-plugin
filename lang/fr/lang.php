<?php

return [
    'plugin' => [
        'name' => 'Utilisateur',
        'description' => 'Gestion des utilisateurs Front-End.',
        'tab' => 'Utilisateur',
        'access_users' => 'Gérer les utilisateurs'
    ],
    'users' => [
        'menu_label' => 'Utilisateurs',
        'all_users' => 'Tous les utilisateurs',
        'new_user' => 'Nouvel Utilisateur',
        'list_title' => 'Gestion des Utilisateurs',
        'activating' => 'Activation...',
        'activate_warning_title' => 'L\'utilisateur n\'est pas activé !',
        'activate_warning_desc' => 'Cet utilisateur n\'a pas été activé et sera dans l\'impossibilité de se connecter.',
        'activate_confirm' => 'Souhaitez-vous vraiment activer cet utilisateur ?',
        'active_manually' => 'Activer cet utilisateur manuellement',
        'delete_confirm' => 'Êtes-vous certain que vous souhaitez bien effacer cet utilisateur ?',
        'activated_success' => 'L\'utilisateur a été activé avec succès !',
        'return_to_list' => 'Retour à la liste des utilisateurs',
        'delete_selected_empty' => 'Aucun utilisateur n\'a été sélectionné pour la suppression.',
        'delete_selected_confirm' => 'Supprimer les utilisateurs sélectionnés ?',
        'delete_selected_success' => 'Les utilisateurs sélectionnés ont été supprimés correctement.'
    ],
    'settings' => [
        'users' => 'Utilisateurs',
        'menu_label' => 'Paramètres Utilisateurs',
        'menu_description' => 'Gérer les paramètres liés aux utilisateurs.',
        'activation_tab' => 'Activation',
        'signin_tab' => 'Connexion',
        'activate_mode' => 'Mode d\'Activation',
        'activate_mode_comment' => 'Choisissez la méthode d\'activation des comptes d\'utilisateurs.',
        'activate_mode_auto' => 'Automatique',
        'activate_mode_auto_comment' => 'Activation automatique après enregistrement.',
        'activate_mode_user' => 'Utilisateur',
        'activate_mode_user_comment' => 'L\'utilisateur active son compte par email.',
        'activate_mode_admin' => 'Administrateur',
        'activate_mode_admin_comment' => 'Seul un Administrateur peut activer un utilisateur.',
        'welcome_template' => 'Patron (Template) de bienvenue',
        'welcome_template_comment' => 'Choisissez un patron pour le mail à envoyer aux utilisateurs lors de leur activation.',
        'require_activation' => 'Vérifier l\'activation des comptes Utilisateurs lors de la connexion',
        'require_activation_comment' => 'Si activé, les utilisateurs doivent avoir leur compte activé pour pouvoir se connecter.',
        'use_throttle' => 'Tentatives de connexion ratées',
        'use_throttle_comment' => 'En cas de tentatives répétées de connexion, l\'utilisateur sera suspendu temporairement.',
        'login_attribute' => 'Login attribute',
        'login_attribute_comment' => 'Choisissez quel paramètre utilisateur doit être utilisé pour le login.',
        'no_mail_template' => 'Ne pas envoyer de notification',
        'hint_templates' => 'Vous pouvez modifier les patrons de mail en choisissant Mail > Patrons de Mail à partir du menu Paramètres.'
    ],
    'user' => [
        'label' => 'Utilisateur',
        'id' => 'ID',
        'username' => 'Pseudo utilisateur',
        'name' => 'Nom',
        'surname' => 'Prénom',
        'email' => 'Email',
        'created_at' => 'Enregistré le',
        'reset_password' => 'Réinitialiser le Mot de passe',
        'reset_password_comment' => 'Pour effacer le mot de passe de cet utilisateur, entrez un nouveau mot de passe ici.',
        'confirm_password' => 'Confirmation de mot de passe',
        'confirm_password_comment' => 'Entrez à nouveau le mot de passe pour le confirmer.',
        'avatar' => 'Avatar',
        'details' => 'Détails',
        'account' => 'Compte'
    ],
    'login' => [
        'attribute_email' => 'Email',
        'attribute_username' => 'Pseudo'
    ],
    'account' => [
        'account' => 'Compte',
        'account_desc' => 'Gestion de compte Utilisateur.',
        'redirect_to' => 'Rediriger vers',
        'redirect_to_desc' => 'Nom de la Page de Redirection après la mise à jour, la connexion ou l\'enregistrement.',
        'code_param' => 'Paramètre Code d\'activation',
        'code_param_desc' => 'URL de la page utilisé pour l\'enregistrement du code d\'activation',
        'invalid_activation_code' => 'Le code d\'activation fourni est invalide.',
        'invalid_user' => 'Aucun utilisateur ne correspond aux identifiants fournis.',
        'success_activation' => 'Votre compte a été correctement activé !',
        'success_saved' => 'Vos Paramètres on été correctement sauvegardés !',
        'login_first' => 'Vous devez d\'abord vous connecter !',
        'alredy_active' => 'Votre compte a déjà été activé !',
        'activation_email_sent' => 'Un mail d\'activation a été envoyé sur votre adresse email personnelle.',
        'sign_in' => 'Connexion',
        'register' => 'Enregistrement',
        'full_name' => 'Nom complet',
        'email' => 'Email',
        'password' => 'Mot de passe',
        'register' => 'Enregistrement',
        'login' => 'Login',
        'new_password' => 'Nouveau mot de passe',
        'new_password_confirm' => 'Confirmez le nouveau mot de passe'
    ],
    'reset_password' => [
        'reset_password' => 'Réinitialiser le mot de passe',
        'reset_password_desc' => 'Formulaire Mot de passe oublié.',
        'code_param' => 'Code de réinitialisation',
        'code_param_desc' => 'URL de la page utilisée pour le code de réinitialisation'
    ],
    'session' => [
        'session' => 'Session',
        'session_desc' => 'Ajoute la session utilisateur à une page et permet de restreindre l\'accès à la page.',
        'security_title' => 'Autorisations spéciales',
        'security_desc' => 'Personne(s) autorisée(s) à accéder à cette page.',
        'all' => 'Tous',
        'users' => 'Utilisateurs',
        'guests' => 'Invités',
        'redirect_title' => 'Rediriger vers',
        'redirect_desc' => 'Nom de la page de redirection au cas où l\'accès est refusé.',
        'logout' => 'Vous avez été correctement déconnecté.'
    ]
];
