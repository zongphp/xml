<?php
namespace zongphp\xml;

use zongphp\framework\build\Facade;

class XmlFacade extends Facade {
	public static function getFacadeAccessor() {
		return 'Xml';
	}
}