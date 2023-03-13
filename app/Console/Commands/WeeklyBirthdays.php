<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WeeklyBirthdays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cf:weekly_birthdays';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends an email with all upcoming birthdays for the week.';

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
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
