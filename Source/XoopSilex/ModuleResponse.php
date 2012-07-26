<?php

namespace XoopSilex;

class ModuleResponse extends \Symfony\Component\HttpFoundation\Response
{
	/**
	 * Sends HTTP headers and content.
	 * @return $this
	 */
	public function send()
	{
		require_once XOOPS_ROOT_PATH.'/header.php';
		$this->sendContent();
		require_once XOOPS_ROOT_PATH.'/footer.php';
		return $this;
	}
}
