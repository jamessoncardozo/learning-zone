<?php

namespace App\Http\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class BusinessCard extends Component
{ 
  public $user, $name, $github_url, $linkedin_url;
  
  public $showModal = true;

  public function mount($id)
  {
    $user = User::find(auth()->id());
    
    $this->name=$user->name;
    $this->github_url=$user->github_url;
    $this->linkedin_url=$user->linkedin_url;;

  }

  public function render()
  {
      return view('livewire.business-card');
  }

  public function generateQrCode(){

    QrCode::format('png')
      ->size(399)
      ->color(40,40,40)
      ->generate(Request::url(),'./img/'.Auth::user()->user_name.'.png');
    
    return redirect()->route('business-profile');
  }
}