<?php namespace Pingpong\Admin\Presenters;

use Pingpong\Presenters\Presenter;

class Subscriber extends Presenter
{

    public function image_path()
    {
        return public_path("images/articles/{$this->entity->image}");
    }
}
