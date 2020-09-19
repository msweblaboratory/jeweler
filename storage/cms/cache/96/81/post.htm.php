<?php 
class Cms5f65096c68137062331539_2c30eb88b6177df8311b4c5bfd632480Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if (!$this->post)
        return App::make('Cms\Classes\Controller')->setStatusCode(404)->run('/404');
}
}
