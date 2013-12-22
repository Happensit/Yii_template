<?php

class AndystrapController extends FrontController
{
	public $crud_actions = array();

	public $extraActions = array('awesome', 'fancybox');

	public $extraActionsPath = array(
		'awesome'	=> 'application.controllers.crud.IndexAction',
		'fancybox'	=> 'application.controllers.crud.IndexAction',
	);
}