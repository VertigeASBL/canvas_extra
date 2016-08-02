<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function canextra_declarer_champs_extras($champs = array()) {

	// Un petit exemple de champs :
	/*
	$champs['spip_rubriques']['titre_court'] = array(
	 	'saisie' => 'input', //Type du champ (voir plugin Saisies)
	 	'options' => array(
			'nom' => 'titre_court',
			'label' => _T('titrecourt:titre_court'),
			'sql' => "varchar(30) NOT NULL DEFAULT ''",
			'defaut' => '', // Valeur par défaut
			'restrictions' => array(
				'voir' => array('auteur' => ''), //Tout le monde peut voir
				'modifier' => array('auteur' => 'webmestre') //Seuls les webmestres peuvent modifier
			)
	 	)
	);
	*/

	return $champs;
}
