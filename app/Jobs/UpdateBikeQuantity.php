<?php

namespace App\Jobs;

use App\Models\Bike;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateBikeQuantity implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $bike;

    /**
     * Create a new job instance.
     *
     * @param Bike $bike
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
        // Increment bike quantity by 1
        $this->bike->quantity += 1;
        if ($this->bike->quantity > 0) {
            $this->bike->status = 'Available';
        }
        $this->bike->save();
    }
}
