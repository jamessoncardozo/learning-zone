<?php

namespace App\Http\Livewire;

use App\Models\User;

use App\Exports\UsersExport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Collection;

use Maatwebsite\Excel\Facades\Excel;

use App\Mail\OrderShipped;

use Livewire\Component;
use Livewire\WithPagination;

class UserDashboard extends Component
{
  use WithPagination;

  public $mailedusers, $exportdata, $search=null;
  
  public ?Collection $selectedUsers; //a interrogação tranforma esse propriedade como nulo por default
  
  public $sortField='updated_at';

  public $sortDirection = 'asc';

  public $paginate=10;

  protected $queryString =['sortDirection'];

   protected $query;


  public function sortBy($field){

    $this->sortDirection = $this->sortField === $field
    
    ?

      $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' :'asc' 
    
    : 'asc';
        
    $this->sortField=$field;

  }

  public function mount()
  {
    $this->selectedUsers=null;

  }

  public function render()
  {
        // faz a busca e atribui o builder para a variável protegida;

        $this->query = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection);

        // Captura todos os usuários e atribui à variável publica para 
        // a variável de usuários para serem enviados por e-mail;

        $this->mailedusers = $this->query->get();

        return view('livewire.user-dashboard', [

        'users' => $this->query->paginate($this->paginate),
        
      ]);
  }

  public function sendUsers()
  {
    Mail::to('jamessoncardozo@gmail.com')->send(new OrderShipped($this->mailedusers));
    
    $this->notifica('Enviado', 'E-mail enviado com sucesso','success');
 
    //$this->emitSelf('$refresh');

  }

  public function updatedSelectedusers(){
    dd($this->selectedUsers);
    $this->notifica('Pesquisa','O valor é: '.$this->query[0]->name,'success');

  }

  public function exportXLSX() 
  {

    session()->forget('excel.cache');

    $this->exportdata = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->get();

    if(count($this->exportdata) > 0){ // se a query achar alguma coisa

      return (new UsersExport($this->exportdata->modelKeys()))->download('users.xlsx');

    }
  }

  public function exportXLS() 
  {

    session()->forget('excel.cache');

    $this->exportdata = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->get();

    if(count($this->exportdata) > 0){ // se a query achar alguma coisa

      return (new UsersExport($this->exportdata->modelKeys()))->download('users.xls');

    }

  }

  public function exportCSV() 
  { 
  
    session()->forget('excel.cache');

    $this->exportdata = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->get();

    if(count($this->exportdata) > 0){ // se a query achar alguma coisa

      return (new UsersExport($this->exportdata->modelKeys()))->download('users.csv');

    }

  }

  
  public function exportPDF() 
  {

    session()->forget('excel.cache');

    $this->exportdata = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->get();

    if(count($this->exportdata) > 0){ // se a query achar alguma coisa

      return (new UsersExport($this->exportdata->modelKeys()))->download('users.pdf');

    }

  }

  private function getSelectedUsers()
  {
      return $this->getSelectedUsers->filter(fn($p) => $p)->keys();
  }

  public function notifica($title, $message,$style)
  { 

    $this->dispatchBrowserEvent('alert',
    ['type' => $style, 'title' => $title, 'message' => $message]);
    
  }
}
