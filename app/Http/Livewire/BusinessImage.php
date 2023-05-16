<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;




class BusinessImage extends Component

{ 
  public $id_user;

  public function mount($id){
    
    $this->id_user = $id;
  }


  public function render(){ 
    
    $user = User::find($this->id_user);

    return view('livewire.business-image',['user' => $user]);

  }

}
