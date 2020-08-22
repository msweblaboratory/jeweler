<?php 
class Cms5f40f2154cd8e664574463_03bd7afaea4a465b715f85cd5021783fClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if (!$this->post)
        return App::make('Cms\Classes\Controller')->setStatusCode(404)->run('/404');
}
}
