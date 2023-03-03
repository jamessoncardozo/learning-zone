<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithProperties;

class UsersExport implements FromQuery, WithProperties
{ 
  /**
  * @return \Illuminate\Support\Collection
  */
  use Exportable;

  public $users;
  public $keys;

  public function __construct(array $keys)
  { 
    $this->keys = $keys;
  }
  
  public function query()
  {   
    
    return User::whereIn('id',$this->keys);
  
  }
  
  public function properties(): array
  {
      return [
          'creator'        => Auth::user()->name,
          'lastModifiedBy' => Auth::user()->name,
          'title'          => 'Exportação de Pedidos',
          'description'    => 'Últimos pedidos',
          'subject'        => 'Pedidos',
          'keywords'       => 'pedidos,exportação,planilhas',
          'category'       => 'Pedidos',
          'manager'        => Auth::user()->name,
          'company'        => 'PMS',
      ];
  }
}
;