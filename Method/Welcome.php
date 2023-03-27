<?php
namespace GDO\Codinggeex\Method;

use GDO\Core\GDT;
use GDO\Core\GDT_Version;
use GDO\Core\WithFileCache;
use GDO\UI\MethodPage;
use GDO\User\GDO_User;

final class Welcome extends MethodPage
{

	use WithFileCache;

	public function execute(): GDT
	{
		return GDT_Version::make()->var('10.10.10');
	}

}
