<?php

namespace App\Http\Livewire;

use App\Models\User;

use App\Exports\UsersExport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Collection;

use Maatwebsite\Excel\Facades\Excel;

use App\Mail\OrderShipped;
<<<<<<< HEAD

use Livewire\Component;
use Livewire\WithPagination;
=======
use Exception;
use Livewire\Component;
use Livewire\WithPagination;
use PhpParser\Node\Stmt\TryCatch;
use Ramsey\Uuid\Type\Integer;
use Throwable;
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6

class UserDashboard extends Component
{
  use WithPagination;

  public $mailedusers, $exportdata, $search=null;
<<<<<<< HEAD
  
  public ?Collection $selectedUsers; //a interrogação tranforma esse propriedade como nulo por default
  
  public $sortField='updated_at';

  public $sortDirection = 'asc';

  public $paginate=10;

  protected $queryString =['sortDirection'];

   protected $query;
=======
  public ?Collection $selectedUsers; //a interrogação tranforma esse propriedade como nulo por default
  public $usuarios, $usuario;

  public $sortField='updated_at';
  public $sortDirection = 'asc';
  public $paginate=10;

  protected $queryString =['sortDirection'];
  protected $query;
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6


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
<<<<<<< HEAD

=======
    $this->reloadData();
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
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
 
<<<<<<< HEAD
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
=======
    $this->reloadData(); // chama o método para recarregar a tabela e zerar as seleções.

  }

  public function showName($userId)
  {
      $user = User::find($userId);
      if ($user) {
          $this->notifica('O usuario selecionado é: ', $user->name, 'success');
      }
  }

  public function generateCardBusiness($userId)
  {
    $user = User::find($userId);
    
    if ($user) {
      $this->usuario = $user->id;
    }
  }
  

  public function exporting($extension) 
  {
    session()->forget('excel.cache');

    $this->exportdata = User::whereIn('id',$this->selectedUsers->filter(fn($p) => $p)->keys()->toArray())->get();

    if(count($this->exportdata) > 0){ // se a query achar alguma coisa

      $this->reloadData();

      return (new UsersExport($this->exportdata->modelKeys()))->download('users.'.$extension);

    }else{// se nenhum usuário for selecionado

      $this->exportdata = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->get();

      return (new UsersExport($this->exportdata->modelKeys()))->download('users.'.$extension);

    }
  }

  public function reloadData() 
  {   /* É tipo um reset data. pra limpar a tela, voltar ao estado original*/
      /* $this->selectedCategory = null;*/
      
      $this->usuarios = User::where('name','like','%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->get(); //recarrega os produtos com usuários
      $this->selectedUsers = $this->usuarios
          ->map(fn($user) => $user->id)
          ->flip()
          ->map(fn($user) => false); //*define todos os produtos selecionados como falso
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
  }

  public function notifica($title, $message,$style)
  { 

    $this->dispatchBrowserEvent('alert',
    ['type' => $style, 'title' => $title, 'message' => $message]);
    
  }
}
