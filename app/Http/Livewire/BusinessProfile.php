<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

use Illuminate\Support\Facades\Request;


class BusinessProfile extends Component
{ 
  public $params;

  public function mount(){

    $this->params = Request::query();
    
  }


  public function render(){ 

    $user = User::find($this->params['user']);

    return view('livewire.business-profile',['user'=>$user]);
  }
}
