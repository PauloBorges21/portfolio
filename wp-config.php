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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'portfolio');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'x*o75*nFU%<up*c1uUr34s:0q4:|I`@WEa9_*mXuZ3@MX.u[v#}4YKT!_@5O{dMW');
define('SECURE_AUTH_KEY',  'nkTVh!<4gGC;GiQp73x$??1YadVROmn[5` uhs!X`h7hZPe#D;m#n^SUMH[(h%MB');
define('LOGGED_IN_KEY',    '@zAAU59F}8{Yjv_t%!KpSy**SW;xuxGuA}O x/Y)u%LV @Cy[y);xh.t#Qy?O/X4');
define('NONCE_KEY',        '->zo,s+e7-& _J-EKjKseSlSU%bdotjysFGk{?)FDA/6^z){^VPh(CV!gb4;iVpw');
define('AUTH_SALT',        'J;FDIa)Bu_C[{x<_9lO7CZT4VnIL*2|1NVA@D nKSjpb7~OGKxxSv*k@`S,Z/}kM');
define('SECURE_AUTH_SALT', '7KpqN^Jek|&T(lqPSO.WcnaP5[R+%5YlT(Q=@3^ie:%36>Fn41-GJD3,H<~q$J.3');
define('LOGGED_IN_SALT',   'Ec.4B)r1B~Wx4/=]s5%v@h9k)GRhT$v>P8<Hx>3uGUC)[hyg}d[/ZK7#IAGDh:+Z');
define('NONCE_SALT',       'jVwEQmVMzbn_p]|:t[,4fEh%;:Vh=?M&KcISv((qL,?#]{0M[#ey&1x[<f[DqP@t');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

