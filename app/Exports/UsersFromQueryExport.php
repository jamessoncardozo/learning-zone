<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;


class UsersFromQueryExport implements FromQuery
{
  /**
  * @return \Illuminate\Support\Collection
  */
  use Exportable;

  public $year=null;

  public function __construct(int $year)
  {
      $this->year = $year;
  }

  public function query()
  {   

    return User::query()->whereYear('created_at', $this->year);

  }

}
