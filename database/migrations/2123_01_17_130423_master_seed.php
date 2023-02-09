<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private array $usersSeedValue = [];

    public function __construct()
    {
        $this->usersSeedValue = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password123'),
                'created_at' => Carbon::now(),
            ],
        ];

    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        DB::table('users')->insert($this->usersSeedValue);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       DB::table('users')
        ->whereIn('email',
        array_map(
            function($row){
                return $row['email'];
            },$this->usersSeedValue)
        )->delete();
    }
    
};
