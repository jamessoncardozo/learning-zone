<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class TeamDashboard extends Component
{
  use WithPagination;

  public $search =null;

  public function render()
  {

    return view('livewire.team-dashboard', [
      'teams' => Team::where('name','like','%'.$this->search.'%')->paginate(10),
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
