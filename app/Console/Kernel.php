<?php
namespace App\Console;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Product;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\DeleteProducts::class,
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            Product::where('score', '>', 0)->where('score', '<', 10)->decrement('score', 1);
            Product::where('score', '>=', 10)->where('score', '<', 20)->decrement('score', 2);
            Product::where('score', '>=', 20)->where('score', '<', 30)->decrement('score', 4);
            Product::where('score', '>=', 30)->where('score', '<', 40)->decrement('score', 5);
            Product::where('score', '>=', 40)->where('score', '<', 50)->decrement('score', 8);
            Product::where('score', '>=', 50)->where('score', '<', 60)->decrement('score', 10);
            Product::where('score', '>=', 70)->decrement('score', 15);
            echo "Scores have been decayed";
        })->everyMinute();
    }
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}