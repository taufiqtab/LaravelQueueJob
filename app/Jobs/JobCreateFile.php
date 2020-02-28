<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Http\Controllers\CreateFile as CF;

class JobCreateFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $param;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        //
        $this->param = $params;
        //dd($this->param);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $creator = new CF();
        $creator->createFile($this->param['name'], $this->param['length']);
    }
}
