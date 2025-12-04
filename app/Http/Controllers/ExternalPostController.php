<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExternalPostRequest;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use League\CommonMark\CommonMarkConverter;

class ExternalPostController extends Controller
{
    public function store(StoreExternalPostRequest $request): JsonResponse
    {
        $data = $request->validated();

        // Convert Markdown to HTML if content_md is provided
        if (isset($data['content_md'])) {
            $converter = new CommonMarkConverter();
            $data['content_html'] = $converter->convert($data['content_md'])->getContent();
            unset($data['content_md']);
        }

        // Sanitize HTML if clean() function exists (HTMLPurifier)
        if (function_exists('clean') && isset($data['content_html'])) {
            $data['content_html'] = clean($data['content_html']);
        }

        // Check idempotency: if external_id exists, return existing post
        if (isset($data['external_id']) && $data['external_id']) {
            $existingPost = Post::where('external_id', $data['external_id'])->first();

            if ($existingPost) {
                $publicUrl = url("/blog/{$existingPost->slug}");

                return response()->json([
                    'id' => $existingPost->id,
                    'slug' => $existingPost->slug,
                    'url' => $publicUrl,
                    'message' => 'Already exists (idempotent).',
                ], 200);
            }
        }

        // Generate unique slug from title
        $baseSlug = Str::slug($data['title']);
        $slug = $baseSlug;
        $counter = 2;

        while (Post::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $data['slug'] = $slug;

        // Set default status if not provided
        if (!isset($data['status'])) {
            $data['status'] = 'draft';
        }

        // Create the post
        $post = Post::create($data);

        $publicUrl = url("/blog/{$post->slug}");

        return response()->json([
            'id' => $post->id,
            'slug' => $post->slug,
            'url' => $publicUrl,
        ], 201);
    }
}
