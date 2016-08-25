<?php

namespace App\Http\Controllers;
use App\Like;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller {

	public function postCreatePost(Request $request) {

		$this->validate($request, [
			'body' => 'required|max:1000',
		]);

		$post = new Post();
		$post->body = $request['body'];
		flash()->error('Error!', 'There was an error!');

		if ($request->user()->posts()->save($post)) {
			flash()->success('Success!', 'Post successfully created!');
		}

		return redirect()->route('dashboard');
	}

	public function getDeletePost($post_id) {

		$post = Post::where('id', $post_id)->first();

		if (Auth::user() != $post->user) {
			return redirect()->back();
		}

		$post->delete();
		flash()->success('Success!', 'Successfully deleted!');

		return redirect()->route('dashboard');
	}

	public function postEditPost(Request $request) {

		$this->validate($request, [
			'body' => 'required',
		]);

		$post = Post::find($request['postId']);

		if (Auth::user() != $post->user) {
			return redirect()->back();
		}

		$post->body = $request['body'];
		$post->update();

		return response()->json(['new_body' => $post->body], 200);
	}

	public function postLikePost(Request $request) {
		$post_id = $request['postId'];
		$is_like = $request['isLike'] === 'true';
		$update = false;
		$post = Post::find($post_id);

		if (!$post) {
			return null;
		}

		$user = Auth::user();
		$like = $user->likes()->where('post_id', $post_id)->first();

		if ($like) {
			$already_like = $like->like;
			$update = true;

			if ($already_like == $is_like) {
				$like->delete();
				return null;
			}

		} else {
			$like = new Like();
		}

		$like->like = $is_like;
		$like->user_id = $user->id;
		$like->post_id = $post->id;

		if ($update) {
			$like->update();
		} else {
			$like->save();
		}

		return null;
	}
}