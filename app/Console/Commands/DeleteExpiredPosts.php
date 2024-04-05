<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Carbon\Carbon;

class DeleteExpiredPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'command:name';
    protected $signature = 'posts:delete-expired';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete posts older than three days';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // modify the subHours for certain hours (24)
        // $threeDaysAgo = Carbon::now()->subMinute(2);
        // modify for a certain subDays(3)??
        $threeDaysAgo = Carbon::now()->subMinutes(60);
        $postsToDelete = Post::where('created_at', '>', $threeDaysAgo)->get();

        foreach ($postsToDelete as $post) {
            $post->delete();
        }
        $this->info('Expired posts deleted successfully.');
    }
}
