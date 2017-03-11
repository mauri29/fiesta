<?php

namespace App\Jobs\Users;

use File;
use Image;
use Storage;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateImage implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $user;
    public $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, $id)
    {
        $this->user = $user;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //get the image
        $fileName = $this->id . '.png';
        $filePath = storage_path() . '/uploads/' . $this->id;
        //resize (intervention)
        Image::make($filePath)->encode('png')->fit(40, 40, function($c){
            $c->upsize();
        })->save();
        //upload + delete
        if(Storage::disk('s3images')->put("profile/users/{$fileName}", fopen($filePath, 'r+'))) {
            File::delete($filePath);
        }  
        //update channel image
        $this->user->image_filename = $fileName;
        $this->user->save();
    }
}
