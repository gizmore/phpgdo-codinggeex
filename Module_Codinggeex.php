<?php
namespace GDO\Codinggeex;

use GDO\Core\GDO_Module;
use GDO\Perf\Module_Perf;

/**
 * CodingGeex Website
 */
final class Module_Codinggeex extends GDO_Module
{

	public function getTheme(): ?string
	{
		return 'cgx';
	}

	public function getDependencies(): array
	{
		return [
			'Admin',
			'Bootstrap5Theme',
			'Download',
			'Login',
			'Perf',
		];
	}

	public function onInstall(): void
	{
		Module_Perf::instance()->saveConfigVar('hook_sidebar', 'all');
	}

}
