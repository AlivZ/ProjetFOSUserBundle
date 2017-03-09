<?php

namespace TOP\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TOPUserBundle extends Bundle
{
	public function getParent()
  	{
    	return 'FOSUserBundle';
  	}
}
