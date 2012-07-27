<?php

namespace XoopSilex\Provider;

use \XoopsTpl;
use \Silex\Application;

class XoopsTplServiceProvider implements \Silex\ServiceProviderInterface
{
	/**
	 * Registers services on the given app.
	 *
	 * This method should only be used to configure services and parameters.
	 * It should not get services.
	 *
	 * @param Application $app An Application instance
	 */
	public function register(Application $app)
	{
		$app['xoopsTpl'] = $app->share(function() use ($app) {
			return new XoopsTpl();
		});
	}

	/**
	 * Bootstraps the application.
	 *
	 * This method is called after all services are registers
	 * and should be used for "dynamic" configuration (whenever
	 * a service must be requested).
	 */
	public function boot(Application $app)
	{
		// Nothing to do
	}
}
