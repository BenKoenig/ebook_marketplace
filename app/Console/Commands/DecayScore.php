<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class DecayScore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'decay:score';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Decays the score';

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
        Product::where('score', '>', 0)->where('score', '<', 10)->decrement('score', 1);
        Product::where('score', '>=', 10)->where('score', '<', 20)->decrement('score', 2);
        Product::where('score', '>=', 20)->where('score', '<', 30)->decrement('score', 4);
        Product::where('score', '>=', 30)->where('score', '<', 40)->decrement('score', 5);
        Product::where('score', '>=', 40)->where('score', '<', 50)->decrement('score', 8);
        Product::where('score', '>=', 50)->where('score', '<', 60)->decrement('score', 10);
        Product::where('score', '>=', 70)->decrement('score', 15);
    }
}
