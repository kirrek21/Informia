<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'text' => 'required|min:2',
        ]);

        Comment::create([
            'article_id' => $article->id,
            'user_id' => auth()->id(),
            'text' => $request->text,
            'is_approved' => false,
        ]);

        return redirect()
            ->route('article.show', $article->id)
            ->with('success', 'Комментарий отправлен и ожидает модерации.');
    }

    public function moderation()
    {
        if (auth()->user()->role_id != 1) {
            abort(403);
        }

        $comments = Comment::with(['article', 'user'])
            ->where('is_approved', false)
            ->latest()
            ->get();

        return view('comments.moderation', ['comments' => $comments]);
    }

    public function approve(Comment $comment)
    {
        if (auth()->user()->role_id != 1) {
            abort(403);
        }

        $comment->is_approved = true;
        $comment->save();

        return redirect()->route('comments.moderation')
            ->with('success', 'Комментарий одобрен.');
    }

    public function reject(Comment $comment)
    {
        if (auth()->user()->role_id != 1) {
            abort(403);
        }

        $comment->delete();

        return redirect()->route('comments.moderation')
            ->with('success', 'Комментарий отклонён.');
    }
}