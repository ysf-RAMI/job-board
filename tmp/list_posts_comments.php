<?php
require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Post;

foreach (Post::with('comments')->get() as $p) {
    echo "Post {$p->id} - {$p->title}\n";
    foreach ($p->comments as $c) {
        echo "  Comment {$c->id} author={$c->author} content={$c->content}\n";
    }
}
