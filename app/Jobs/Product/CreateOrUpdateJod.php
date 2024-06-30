<?php

namespace App\Jobs\Product;

use App\Repositories\Interfaces\RegionRepositoryInterface;
use App\Repositories\ProductRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateOrUpdateJod implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected array $products;
    /**
     * Create a new job instance.
     */
    public function __construct(array $data)
    {
        $this->products = $data;;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            (new ProductRepository)->createOrUpdate($this->products);
        } catch (\Exception $exception) {
            report($exception);
        }
    }
}
