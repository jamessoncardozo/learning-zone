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
      return (new UsersFromQueryExport(2020))->download('users.xlsx');
  }

  public function exportCSV() 
  { 

    return (new UsersExport($this->query))->download('users.csv');

      //return Excel::download(new UsersExport, 'users.csv',\Maatwebsite\Excel\Excel::CSV);
  }

  
  public function exportPDF() 
  { 
    return Excel::download(new UsersExport, 'users.pdf',\Maatwebsite\Excel\Excel::MPDF);
  }

  public function notifica($message,$style)
  {
      session()->flash('flash.banner', $message);
      session()->flash('flash.bannerStyle', $style);
  }
}
