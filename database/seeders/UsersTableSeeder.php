<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $param = [
      'name' => 'ユーザーテスト',
      'email' => 'test1@example.com',
      'password' => 'password123',
      'role_id' => '1',
    ];
    User::create($param);
    $param = [
      'name' => '店舗代表者テスト',
      'email' => 'test2@example.com',
      'password' => 'password123',
      'role_id' => '2',
    ];
    User::create($param);
    $param = [
      'name' => '管理者テスト',
      'email' => 'test3@example.com',
      'password' => 'password123',
      'role_id' => '3',
    ];
    User::create($param);
  }
}
