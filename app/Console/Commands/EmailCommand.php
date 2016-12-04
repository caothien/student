<?php

namespace App\Console\Commands;
use App\Role;
use Illuminate\Console\Command;

class EmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //$schedule->call(function () {
            $role = new Role;
            $role->role_name = 'admin';
            $role->save();
        //});
    }
}
