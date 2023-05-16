<?php

namespace App\Http\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Env;
use Illuminate\Support\Facades\Request;

class BusinessCard extends Component
{ 
  public $id_user, $name, $github_url, $linkedin_url, $user_name;
  
  public $showModal = true;

  public function mount($id)
  { 
    $user = User::find($id);
    
    $this->id_user=$user->id;

    $this->name=$user->name;
    $this->github_url=$user->github_url;
    $this->linkedin_url=$user->linkedin_url;
    $this->user_name=$user->user_name;

  }

  public function render()
  {
      return view('livewire.business-card');
  }

  public function generateQrCode(){

    QrCode::format('png')
      ->size(399)
      ->margin(1)
      ->color(40,40,40)
      ->generate(env('APP_URL') . '/' . $this->user_name,'./img/qrcodes/'.$this->user_name.'.png');

      return redirect()->route('business-image',['id'=>$this->id_user]);
  }
}