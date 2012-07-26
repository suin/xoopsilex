<?php

namespace XoopSilex;

use \XCube_Root;
use \XoopSilex\ModuleResponse;

class Application extends \Silex\Application
{
	/**
	 * Constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$root = XCube_Root::getSingleton();
		$this['debug'] = ( $root->mContext->mXoopsConfig['debug_mode'] > 0 );
	}

	/**
	 * Return ModuleResponse object
	 * @param string   $data    The response data
	 * @return \XoopSilex\ModuleResponse
	 */
	public function moduleResponse($data)
	{
		return new ModuleResponse($data);
	}
}
