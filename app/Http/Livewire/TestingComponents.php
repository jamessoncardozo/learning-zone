<?php

namespace App\Http\Livewire;

use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;

class TestingComponents extends Component
{
  use WithPagination;

  public $search=null;

  public function render()
  {       
        return view('livewire.testing-components', [
        'users' => User::where('name','like','%'.$this->search.'%')->paginate(10),
      ]);
  }

  public function updatedSearch(){

    $this->notifica('Você pesquisou por: '.$this->search,'success');

  }
  
  public function notifica($message,$style)
  {
      session()->flash('flash.banner', $message);
      session()->flash('flash.bannerStyle', $style);
  }
}
