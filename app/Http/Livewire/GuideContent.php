<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuideContent extends Component
{
    public $string;
    public $foo;

    public function render()
    {
        return view('game_guide_section.guide-content');

    }

    public function shstring()
    {
      $this->string="text";
    }
    public function shstring2()
    {
      $this->string="text2";
    }
    public function shstring3()
    {
      $this->string="text3";
    }
}
