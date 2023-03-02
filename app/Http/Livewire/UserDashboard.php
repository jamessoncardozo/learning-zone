<?php

namespace App\Http\Livewire;

use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;

class UserDashboard extends Component
{
  use WithPagination;

  public $search=null;

  public $sortField='updated_at';

  public $sortDirection = 'asc';

  protected $queryString =['sortDirection'];

  public function sortBy($field){

    $this->sortDirection = $this->sortField === $field
    
    ?

      $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' :'asc' 
    
    : 'asc';
        
    $this->sortField=$field;

  }

  public function render()
  {       
        return view('livewire.user-dashboard', [

        'users' => User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->paginate(10),
        
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
