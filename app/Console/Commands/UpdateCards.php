<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateCards extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cards:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update cards table in database.';

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
        return DB::table('cards')
            ->where([
                ['is_active', '=', 1],
                ['subscription_end', '=', date('Y-m-d')],
            ])
            ->update([
                'users_id' => 1337,
                'is_active' => 0,
            ]);
    }
}
