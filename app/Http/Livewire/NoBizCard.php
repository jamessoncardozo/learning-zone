<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class NoBizCard extends Component

{ public $title,$code,$desc;

  public function render(){
    //$this->desc = ;
    return view('livewire.no-biz-card');
  }
}
