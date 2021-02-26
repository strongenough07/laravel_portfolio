<?php

namespace App\Http\Livewire;

use App\Models\HomePageModel;
use Livewire\Component;
use Livewire\Livewire;

class HomePage extends Component
{
    public function testttt(){
     $testtt = [[ 'abv' => 2 ]];
    return  $testtt;
    }

    public function render()
    {
        $aboutMe = HomePageModel::all();
        return view('livewire.home-page',compact('aboutMe'));
    }
}
