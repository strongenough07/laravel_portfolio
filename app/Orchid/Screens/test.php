<?php

namespace App\Orchid\Screens;


use Orchid\Screen\Screen;

class test extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'test adssadasda';



    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'test';

    /**
     * Query data.
     *
     * @return array
     */

    public function test()
    {
        echo 'test';
        return view('layouts.app', compact('test'));
    }


    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [];
    }
}
