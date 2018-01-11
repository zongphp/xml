<?php
namespace zongphp\xml;

use zongphp\framework\build\Provider;

class XmlProvider extends Provider
{
    //延迟加载
    public $defer = true;

    public function boot()
    {
    }

    public function register()
    {
        $this->app->single('Xml', function () {
            return new Xml();
        });
    }
}
