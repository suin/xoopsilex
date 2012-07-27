<?php

namespace XoopSilex;

use \XCube_Root;
use \XoopSilex\ModuleResponse;
use \Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use \Symfony\Component\HttpFoundation\Response;

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

	public function onKernelView(GetResponseForControllerResultEvent $event)
	{
		$response = $event->getControllerResult();
		$response = $response instanceof Response ? $response : new ModuleResponse((string) $response);
		$event->setResponse($response);
	}
}
