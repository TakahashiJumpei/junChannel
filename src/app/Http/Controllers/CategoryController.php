<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use App\Models\Thread;

class CategoryController extends Controller
{
  public function show($categoryId)
  {
    $category = Category::find($categoryId);
    Log::info('$category', [$category]);

    //dd($category);

    // DBからすべてのカテゴリを取得
    $categories = Category::get();
    if ($categories->isEmpty()) {
      $categories = null;
    }
    Log::info('$categories', [$categories]);
    //dd($categories);

    //DBから指定したカテゴリに属するスレッドを最近コメントされた順にソートして取得
    //コメントはスレッドに属する
    //スレッドはカテゴリに属する
    //なので、まずカテゴリを決めないと、最終的に抽出したいコメントを絞れない
    //まずDBから指定したカテゴリに属するスレッドをすべて取得する
    $threads_in_this_category = Thread::where('category_id', $categoryId)->take(10)->get();
    Log::info('$threads_in_this_category', [$threads_in_this_category]);
    //dd($threads_in_this_category);

    if ($threads_in_this_category->isEmpty()) {
      $recently_commented_threads = null;
    } else {
      //まずコメントテーブルからコメントを外部キーであるスレッドテーブルIDが重複しないように１０件取得する。
      //スレッドテーブルが最新のコメント投稿日時順に10種類取得できているので、スレッドをその順番で１０件取得できる。
      $recently_comments = Comment::orderBy('id', 'DESC')->whereIn('id', function ($query) {
        $query->select(DB::raw('MAX(id) As id'))->from('comments')->groupBy('thread_id');
      })->get();
      Log::info('$recently_comments', [$recently_comments]);
      if ($recently_comments->isEmpty()) {
        $recently_comments = null;
        $recently_commented_threads = null;
      } else {
        //上記で取得したコメントIDが属するスレッドのみを取得する
        $thread_ids = array();
        foreach ($recently_comments as $recently_comment) {
          Log::info('$recently_comment->thread_id', [$recently_comment->thread_id]);
          $thread_ids[] = $recently_comment->thread_id;
        }
        Log::info('$thread_ids[]', $thread_ids);

        $recently_commented_thread_ids_in_this_category = array();
        foreach ($thread_ids as $thread_id) {
          Log::info('$thread_id', [$thread_id]);
          foreach ($threads_in_this_category as $thread_in_this_category) {
            Log::info('$thread_in_this_category', [$thread_in_this_category]);
            if ($thread_id == $thread_in_this_category->id) {
              $recently_commented_thread_ids_in_this_category[] = $thread_id;
              break;
            }
          }
        }
        Log::info('$recently_commented_thread_ids_in_this_category[]', $recently_commented_thread_ids_in_this_category);

        $recently_commented_threads = Thread::whereIn('id', $recently_commented_thread_ids_in_this_category)->orderByRaw('FIELD(id, ' . implode(',', $recently_commented_thread_ids_in_this_category) . ')')->take(10)->get();
        Log::info('$recently_commented_threads', [$recently_commented_threads]);

        //各スレッドごとのコメント数を取得。スレッドに紐づいているコメントをすべて取得
        foreach ($recently_commented_threads as $recently_commented_thread) {
          $count_comment = Comment::where('thread_id', $recently_commented_thread->id)->get();
          Log::info('$count_comment', [$count_comment]);
          $recently_commented_thread->count_comment = count($count_comment);

          $recently_comment_datetime = Comment::orderBy('id', 'DESC')->where('thread_id', $recently_commented_thread->id)->first();
          Log::info('$recently_comment_datetime', [$recently_comment_datetime]);
          $recently_commented_thread->recently_comment_datetime = $recently_comment_datetime->created_at;
        }
        //dd($recently_commented_threads);
      }
    }

    return view('category.show', compact('category', 'categories', 'recently_commented_threads'));
  }

  public function search(Request $request)
  {
    //dd($request);
    // DBからすべてのカテゴリを取得
    $categories = Category::get();
    if ($categories->isEmpty()) {
      $categories = null;
    }
    Log::info('$categories', [$categories]);

    Log::info('$request->categoryId', [$request->categoryId]);
    $category = Category::where('id', $request->categoryId)->first();

    //入力した文字列に部分一致で引っかかるスレッドを取得
    //特別な追加条件として、カテゴリを指定する。
    Log::info('$request->q', [$request->q]);
    $q = $request->q;
    $threads = Thread::where('category_id', $request->categoryId)->where('name', 'like', "%$q%")->get();
    $threads_count = Thread::where('category_id', $request->categoryId)->where('name', 'like', "%$q%")->get()->count();
    Log::info('$threads', [$threads]);
    Log::info('$threads_count', [$threads_count]);

    if ($threads->isEmpty()) {
      $threads = null;
    }
    return view('category.search', compact('q', 'threads', 'threads_count', 'category', 'categories'));
  }
}
