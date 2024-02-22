<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VjN@}d~h1&vQ4+15@gin:XQk!xg{G-arqJByhL?Xz(K4D}-;`y}l*5V>`I+!&WHP' );
define( 'SECURE_AUTH_KEY',  'i`B.]p#6c0w:7#0AV]:YB8PQzDwO{R^~YYJw3Wnn$_+&Z!x*P2yeLOJ^:t&Ifl2T' );
define( 'LOGGED_IN_KEY',    '/-zl&dZx!0l!WD>@2~@M<O`s>t1_s1mFsh)>gG%B!2fGmy8]tH=rPmNTXnC/gqQC' );
define( 'NONCE_KEY',        'G+IKdAMGCeb_M4QkSkrK,~DX`yb(C.4!bX$P?lO{#xN$:{6s<i<t`:i?}.s98w6j' );
define( 'AUTH_SALT',        'EW(|$70u,*IvGymuk)EIRCQ/?&~9d&Li97COO}=9n+lme?JZB *59J(+b.q?|q6:' );
define( 'SECURE_AUTH_SALT', 'TKBjh_oP~:=UuKUK>EVTYn>&~]&r5gXe~C5eWq!lds1G3{_UryJLJyP{gO`_jH13' );
define( 'LOGGED_IN_SALT',   'BKzPMYmB5.$JTUR >If^Z3pprk.N<xkJFYqt&d,Mu-6X3`l&=-QEnsoDi< PF^KB' );
define( 'NONCE_SALT',       'KbI7>RTgE!0odie=I8z!H(%H0O5s KA:pjt5~DP*uPdXeGZPibjJB-u:Nej;k^1z' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
