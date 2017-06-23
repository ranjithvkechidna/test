<?php

namespace Test;

class Person extends AbstractClass
{
	public function getName($suffix = '')
	{
		$name = parent::getName();
		return $name . ' ' . $suffix;
	}
}