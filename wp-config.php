<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
//define('WP_CACHE', false); //Added by WP-Cache Manager
//define( 'WPCACHEHOME', '/var/www/bordeaux-vinipro.com/docs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'vinipro');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'vinipro');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'vinipro');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nTL`Z(!}*w-=Q#JzEO.2LkZ-)SwAd+]!5~-vJ13Q,o1lw:z!|`=fLdG 1Qcgwc|p');
define('SECURE_AUTH_KEY',  'PUYGyFN^4+tbXLHz9K1,0~ldn7yv,d~C=tBNy;jIb)Va{rycO-56Exz5oh2T-oj3');
define('LOGGED_IN_KEY',    'B_tN<E8dwm7Ont1(AzlLJ/,QLO>x<2>1#/Q;h1E(a)|ql&T;-XGcD6jFk{&~|uYK');
define('NONCE_KEY',        ' 8yjj9Oo~e|hQsDPt[3-[IHtsPu!*;h]PA$M:+Xkp6ee,y+},StJYY,lcXNm|??s');
define('AUTH_SALT',        'r=8(XN0A_quLZj@F1+@{BzgDfudU&DPU$y+ zD$tloQ2#+rBij1(/7M21D@+brx(');
define('SECURE_AUTH_SALT', 'Vp|J-)2am)?T!O|mt9Y-*(`qM=U5/_dSki-.5tVTni9dm1WYO*(u#Zt3i.#mAir%');
define('LOGGED_IN_SALT',   'cn2[mc/ErQLLRaak-gVnvv8WW<FDO_x<3wH_Ict6H1h`i3,uKU8=ttN;f|7f9)!=');
define('NONCE_SALT',       ',t, ~pZ?f|7%s$IAoJ+Y )4No*+J,.(*OOAAF|6WG-;hVbh-B2P!>|o|/Iz3Eo-N');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'vini_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');