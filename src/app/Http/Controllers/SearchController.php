<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\Thread;
use App\Models\Comment;


class SearchController extends Controller
{
  public function __invoke(Request $request)
  {

    // DBからすべてのカテゴリを取得
    $categories = Category::get();
    if ($categories->isEmpty()) {
      $categories = null;
    }
    Log::info('$categories', [$categories]);


    //入力した文字列に部分一致で引っかかるスレッドを取得
    Log::info('$request->str', [$request->str]);
    $str = $request->str;
    $threads = Thread::where('name', 'like', "%$str%")->get();
    $threads_count = Thread::where('name', 'like', "%$str%")->get()->count();
    Log::info('$threads', [$threads]);
    Log::info('$threads_count', [$threads_count]);

    if ($threads->isEmpty()) {
      $threads = null;
    }
    return view('search.search', compact('str', 'threads', 'threads_count', 'categories'));
  }
}
