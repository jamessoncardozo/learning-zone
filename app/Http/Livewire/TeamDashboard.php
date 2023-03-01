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
}
