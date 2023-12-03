<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cafeteriacruzeiro' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'M46s64j6@' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4`LF$.hdo^ZF>mp(PKA*=8%[:ww&oUT/iMhQ`EX>B6ib3rgT7~PFS8WK.1W{{E&/' );
define( 'SECURE_AUTH_KEY',  'PJQ=8gl]d>Abs.:b7!-8j{Tz4t*.^ dvcU,rrhN<9!)rf&OOudfM.ErF<HmYQWm&' );
define( 'LOGGED_IN_KEY',    'n4[Z6:Zuhcv0!2`]eQ4.h,DE>j.+d>@G~M)/S9[c5}U~v{0,[(qig5tOL Fw^K7r' );
define( 'NONCE_KEY',        'j?u-8C*tKKs/0z^[x]-BDXS`}Z:zneWs8wB1 1LmR6EN4|_LO75GQbb5z*Ss5a%}' );
define( 'AUTH_SALT',        'FV4)mmi`Nd_?j({/i{Cmk8 TC*2,K5TloTKsjSqkIRYNV!Q0Tfk)N(7Z;/=NOG-(' );
define( 'SECURE_AUTH_SALT', '-euxgZq_PdX|*A$Y3:-W~R?7adKQe03gZDKO ~&KcC~;@cX:@Bt#F(/bZZH;XYV1' );
define( 'LOGGED_IN_SALT',   '5cqif7q@1g)0W24,~3*#.1LXE_83suX976j#YpgyTH2=6&R=#SWs]Ex+Ka^XacrF' );
define( 'NONCE_SALT',       'KQCov9gO7/j~bgcFzNj3_9zdwzC5DX<GU|{2|=,,u)ES.1o2 @dZ2]FF?693R`]c' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
