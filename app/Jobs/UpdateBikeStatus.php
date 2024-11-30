<?php

namespace App\Jobs;

use App\Models\Bike;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class UpdateBikeStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $bike;

    /**
     * Create a new job instance.
     *
     * @param Bike $bike
     * @return void
     */
    public function __construct(Bike $bike)
    {
        $this->bike = $bike;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Retrieve the bike instance
        $bike = $this->bike;

        // Update the bike status to "Available"
        $bike->status = 'Available';
        $bike->save();

        // Log bike status update
        Log::info('Bike status updated to Available: ' . $bike->id);
    }
}
