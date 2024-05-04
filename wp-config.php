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
define( 'DB_NAME', '1st-wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[FM8RV6B3fa?`[qgy>)Po6$nT4-,^PDE$>TsU+rw~/_Y|thgG%DwX#m${UGPDzo=' );
define( 'SECURE_AUTH_KEY',  'nyjcm zl8G@4d.;+u]I}0-]F$J%wd$|$b[X4/-@c.DW0vE.M] tMOnU*@8{6i_;B' );
define( 'LOGGED_IN_KEY',    'CUtw*I}!5Mopv.:l bOh&~$.Stmn%yoxuUg2L3+b@>+i7E:6g~Ayg<>.70Ztk8 ~' );
define( 'NONCE_KEY',        '&V4z Um|r0GH|`OWVe&a}vop0Q+x-CTl~AECva(HajzMyLGu/2FtX;5=c~5q3aha' );
define( 'AUTH_SALT',        'BNX|4=GLk8`3Ysn?j@/::ft Mfy}=>4JIHxxN)zy[Fx8iwB!.$8K(20G{fmF}kLO' );
define( 'SECURE_AUTH_SALT', '+ZW~:9H):z`go32GZ$/sT[{NDC8>H]#FuE2uE$o0gLVT}g/ #=[G?ceZB GW;?D!' );
define( 'LOGGED_IN_SALT',   'JnVMpuF^VCra]T+ByYJX#yD7vNUtyyqQ<u2EZ$f9z.#[12AC@^^(y]Dz2D7H&yDw' );
define( 'NONCE_SALT',       'D-n,Er44($bI)1#al?wHM@J[o1>vQ~ !=B7A9,g(nJfkV4kb`Zi)Gd6pbsBpu)X1' );
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
