<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Post;

final readonly class CreatePostMutation
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        // TODO implement the resolver

        $title = $args['title'];
        $content = $args['content'];

        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->user_id = 1;
        $post->save();

        return $post;
    }
}
