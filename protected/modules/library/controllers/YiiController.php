<?php

class YiiController extends FrontController
{
	public $crud_actions = array();

	public $extraActions = array('modelrules');

	public $extraActionsPath = array(
		'modelrules'	=> 'application.controllers.crud.IndexAction',
	);
}