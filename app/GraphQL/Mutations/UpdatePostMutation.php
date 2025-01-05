<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Post;

final readonly class UpdatePostMutation
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $id = $args['id'];
        $title = $args['title'];
        $content = $args['content'];

        $post = Post::find($id);
        if(empty($post)) throw new \Exception("Post not found");

        $post->title = $title;
        $post->content = $content;
        $post->save();

        return $post;
    }
}
