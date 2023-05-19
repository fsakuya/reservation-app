<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $param = [
      'role_name' => 'ユーザー',
    ];
    Role::create($param);
    $param = [
      'role_name' => '店舗代表者',
    ];
    Role::create($param);
    $param = [
      'role_name' => '管理者',
    ];
    Role::create($param);
  }
}
