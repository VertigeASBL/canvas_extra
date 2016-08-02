<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin canva_extra
 *
 * @plugin     canva_extra
 * @copyright  2016
 * @author     Didier
 * @licence    GNU/GPL
 * @package    SPIP\Canextra\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

include_spip('inc/cextras');
include_spip('base/canextra');

/**
 * Fonction d'installation et de mise à jour du plugin canva_extra.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function canextra_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();
	cextras_api_upgrade(canextra_declarer_champs_extras(), $maj['create']);

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin canva_extra.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function canextra_vider_tables($nom_meta_base_version) {

	cextras_api_vider_tables(canextra_declarer_champs_extras());
	effacer_meta($nom_meta_base_version);
}
