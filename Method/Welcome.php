<?php
namespace GDO\Codinggeex\Method;

use GDO\Core\GDT;
use GDO\Core\GDT_Version;
use GDO\UI\MethodPage;

final class Welcome extends MethodPage
{

	public function execute(): GDT
	{
		return GDT_Version::make()->var('10.10.10');
	}

}
