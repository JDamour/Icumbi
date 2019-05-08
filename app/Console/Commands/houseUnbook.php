<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service;
use App\House;

class houseUnbook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'house:unbook';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks and see all house that are booked and unbooked them if they are past due date.';

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
        // fecth houses marked as booked
        $houses = House::where('status', 3)->get();

        // loop through each house to see its service status
        foreach($houses as $house) {
            $service = Service::where('house_id', $house->id)
            ->orderBy('updated_at', 'desc')
            ->first();

            if ($service) {
                $current_timestamp = $_SERVER['REQUEST_TIME'];
                $latest_timestamp = strtotime($service->updated_at);
                $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);
                if ($current_timestamp > $time_diff) {
                    try {
                        $house->status = 2;
                        $house->save();
                    } catch(PDOException $e) {
                        \Log::error("PDO DB update error: " . $e->getMessage());
                    }
                }

            } else {
                try {
                    $house->status = 2;
                    $house->save();
                } catch(PDOException $e) {
                    \Log::error("PDO DB update error: " . $e->getMessage());
                }
            }
        }
    }
}
