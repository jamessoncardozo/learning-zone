<?php

namespace App\Http\Livewire;

use App\Models\User;

use App\Exports\UsersExport;
use app\Exports\UsersFromQueryExport;
use Maatwebsite\Excel\Facades\Excel;

use Livewire\Component;
use Livewire\WithPagination;

class UserDashboard extends Component
{
  use WithPagination;

  public $search=null;

  public $sortField='updated_at';

  public $sortDirection = 'asc';

  protected $queryString =['sortDirection'];

  public $paginate=10;

  protected $query;

  public function sortBy($field){

    $this->sortDirection = $this->sortField === $field
    
    ?

      $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' :'asc' 
    
    : 'asc';
        
    $this->sortField=$field;

  }

  public function render()
  {       
        $this->query = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection);
        
        return view('livewire.user-dashboard', [

        'users' => $this->query->paginate($this->paginate),
        
      ]);
  }

  public function updatedSearch(){

    $this->notifica('Você pesquisou por: '.$this->search,'success');

  }

  public function exportXLSX() 
  {
    if(!$this->query){
      $this->query = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->get();

      return (new UsersExport($this->query->modelKeys()))->download('users.xlsx');

    }else{

      return (new UsersExport($this->query->modelKeys()))->download('users.xlsx');

    }
  }

  public function exportCSV() 
  { 
    if(!$this->query){
      $this->query = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->get();

      return (new UsersExport($this->query->modelKeys()))->download('users.csv');

    }else{

      return (new UsersExport($this->query->modelKeys()))->download('users.csv');

    }

  }

  
  public function exportPDF() 
  { 
    if(!$this->query){
      $this->query = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->get();

      return (new UsersExport($this->query->modelKeys()))->download('users.pdf');

    }else{

      return (new UsersExport($this->query->modelKeys()))->download('users.pdf');

    }
  }

  public function notifica($message,$style)
  {
      session()->flash('flash.banner', $message);
      session()->flash('flash.bannerStyle', $style);
  }
}
