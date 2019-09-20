<?php

namespace App\Console\Commands\OldImport;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oldusers:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import users from oldDB';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $offset = $this->ask('Enter offset');
        $limit = $this->ask("Enter Limit");
        $usersSelectSql = "SELECT *FROM users LIMIT $offset, $limit";
        $users = DB::connection('oldMysql')->select($usersSelectSql);
        $usersToInsert = [];
        $deviceTokens = [];
        $idToInsert = 1;
        foreach ($users as $key => &$val) {
            $val = get_object_vars($val);
            $userName = $this->splitName($val['name']);
            $usersToInsert[$key]['id'] = $idToInsert;
            $usersToInsert[$key]['first_name'] = $userName['first_name'];
            $usersToInsert[$key]['last_name'] = $userName['last_name'];
            $usersToInsert[$key]['email'] = $val['email'];
            $usersToInsert[$key]['password'] = $val['password'];
            $usersToInsert[$key]['phone'] = $val['phone_number'];
            $usersToInsert[$key]['profile_pic'] = $val['profile_pic'];
            $usersToInsert[$key]['status'] = '1';
            $usersToInsert[$key]['confirmation_code'] = NULL;
            $usersToInsert[$key]['confirmed'] = 1;
            $usersToInsert[$key]['is_term_accept'] = 1;
            $usersToInsert[$key]['remember_token'] = $val['remember_token'];
            $usersToInsert[$key]['created_by'] = NULL;
            $usersToInsert[$key]['updated_by'] = NULL;
            $usersToInsert[$key]['fb_id'] = NULL;
            $usersToInsert[$key]['created_at'] = $val['created_at'];
            $usersToInsert[$key]['updated_at'] = $val['updated_at'];
            $usersToInsert[$key]['deleted_at'] = $val['deleted_at'];
            //Getting devices
            if (!empty($val['device_token'])) {
                $deviceTokens[$key] = [
                    'deviceable_id' => $idToInsert,
                    'deviceable_type' => "App\Models\Access\User\User",
                    'device_token' => $val['device_token'],
                    'created_at' => $val['created_at'],
                    'updated_at' => $val['updated_at']
                ];
            }
            $idToInsert++;
            echo "User looped " . $key . "\n";
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->insert($usersToInsert);//Insert users
        DB::table('devices')->insert($deviceTokens);//Insert devices
        echo 'Users added';
    }

    public function splitName($string)
    {
        $splitName = explode(' ', $string, 2);
        $splitName['first_name'] = $splitName[0];
        $splitName['last_name'] = $splitName[1] ?? NULL;
        return $splitName;
    }
}
