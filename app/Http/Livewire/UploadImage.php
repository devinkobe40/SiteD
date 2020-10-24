<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UploadImage extends Component
{
  public $message = 0 ;
  public $show = false;
    public function render()
    {
        return view('dashboard.upload-image');
    }

    public function show_modal()
    {
      $this->show = true;

    }

}
