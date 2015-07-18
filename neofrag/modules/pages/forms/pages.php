<?php if (!defined('NEOFRAG_CMS')) exit;
/**************************************************************************
Copyright © 2015 Michaël BILCOT & Jérémy VALENTIN

This file is part of NeoFrag.

NeoFrag is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

NeoFrag is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with NeoFrag. If not, see <http://www.gnu.org/licenses/>.
**************************************************************************/

$rules = array(
	'title' => array(
		'label'         => 'Titre de la page',
		'value'         => $title,
		'type'          => 'text',
		'rules'			=> 'required'
	),
	'subtitle' => array(
		'label'         => 'Sous-titre',
		'value'         => $subtitle,
		'type'          => 'text'
	),
	'name' => array(
		'label'         => 'Chemin d\'accès',
		'value'         => $name,
		'type'          => 'text'
	),
	'content' => array(
		'label'			=> 'Contenu',
		'value'			=> $content,
		'type'			=> 'editor'
	),
	'published' => array(
		'type'			=> 'checkbox',
		'checked'		=> array('on' => $published),
		'values'        => array('on' => 'Publier la page dès maintenant')
	)
);

/*
NeoFrag Alpha 0.1
./neofrag/modules/pages/forms/pages.php
*/