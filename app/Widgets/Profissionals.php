<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use TCG\Voyager\Facades\Voyager;

class Professionals extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Professional::count();
        $string = 'profissiona';

        $string = $count > 1 ? $string . 'is' : $string . 'l';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-study',
            'title'  => "{$count} {$string}",
            'text'   => "Você tem {$count} {$string}. Clique no botão abaixo para ver todos.",
            'button' => [
                'text' => 'Ver todos profissionais',
                'link' => '/admin/profissionais',
            ],
            'image' => '/storage/backgrounds/professionals.jpg',
        ]));
    }
}
