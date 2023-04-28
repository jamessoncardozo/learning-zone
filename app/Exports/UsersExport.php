<?php

namespace App\Exports;

use App\Models\User;

use Maatwebsite\Excel\Concerns\FromQuery;

use DateTime;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Throwable;

class UsersExport implements FromQuery, ShouldAutoSize, WithHeadings, WithMapping
{ 
  /**
  * @return \Illuminate\Support\Collection
  */
  use Exportable;

  public $keys;

  public function __construct(array $keys)
  { 
    //transforma o array de chaves primárias recebido em uma variável pública
    //if (!$keys){dd('não retornou nada');}else{dd('encontrou alguma coisa');}

    $this->keys = $keys;
    
  }
  
  public function query()
  {   
    //retorna uma Illuminate\Database\Eloquent\Builder das chaves primárias recebidas

    return User::whereIn('id',$this->keys)->select('id', 'name', 'email', 'created_at');
      
  }
  
  public function map($user): array
  {
    try {
<<<<<<< HEAD
      $created_at = DateTime::createFromFormat('d-m-Y H:i:s', $user->created_at);

      if ($created_at !== false) {
          $created_at = $created_at->format('d-m-Y');
      } else {
          $created_at = $user->created_at;
      }
    } catch (\Exception $e) {
        $created_at = $user->created_at;
=======

      $created_at = DateTime::createFromFormat('d-m-Y H:i:s', $user->created_at);

      if ($created_at !== false) {

        $created_at = $created_at->format('d-m-Y');

      } else {

        $created_at = $user->created_at;
      }
    } catch (\Exception $e) {

      $created_at = $user->created_at;
      
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
    }

    return [
        $user->id,
        $user->name,
        $user->email,
        $created_at,
    ];
  }


  /*public function registerEvents(): array
  {
      return [
          // Handle by a closure.
          BeforeExport::class => function(BeforeExport $event) {
            dd(User::whereIn('id',$this->keys)->select('id', 'name', 'email', 'created_at'));
          },
      ];
  }*/


  public function headings(): array
  {
      return [
          '#:',
          'User:',
          'E-mail:',
          'Date:',
      ];
  }

  public function failed(Throwable $exception): void
  {
      // handle failed export
<<<<<<< HEAD
    dd($exception);
=======
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
  }

}
