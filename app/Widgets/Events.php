<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use TCG\Voyager\Facades\Voyager;

class Events extends AbstractWidget
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
        $count = \App\Event::count();
        $string = 'evento';

        if ($count > 1) {
            $string = $string . 's';
        }

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-pizza',
            'title'  => "{$count} {$string}",
            'text'   => "Você tem {$count} {$string}. Clique no botão abaixo para ver todos.",
            'button' => [
                'text' => 'Ver todos eventos',
                'link' => '/admin/eventos',
            ],
            'image' => '/storage/backgrounds/events.jpg',
        ]));
    }
}
