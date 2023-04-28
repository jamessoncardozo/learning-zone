<?php

namespace App\Http\Livewire;
use Spatie\Browsershot\Browsershot;

use Livewire\Component;
use App\Models\User;

use Illuminate\Support\Facades\Request;


class BusinessImage extends Component
{ 
  public $id_user;

  public function mount($id){
    
    $this->id_user = $id;
  }


  public function render(){ 
    
    

    $user = User::find($this->id_user);
    $shot_path ="/img/cards/".$user->user_name.".png";

    Browsershot::url('https://www.google.com.br')
        ->save(public_path($shot_path));



    return view('livewire.business-image',['user' => $user]);

  }

}