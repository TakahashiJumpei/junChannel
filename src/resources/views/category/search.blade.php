@extends('layout.app')

@section('title', 'カテゴリ内スレッド検索')
@include('layout.header')
@include('layout.footer')


@section('content')

    @include('layout.categories_list')

    <div class="col-md-9">
        {{-- カテゴリ表題 --}}
        <div class="h3 mt-5 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold"><span>{{ $category->name }}</span></h3>
                    <div class="d-flex justify-content-start align-items-center">
                        {{-- 新規スレッド作成 --}}
                        {{-- レスポンシブ対応は優先的に --}}
                        <div class="d-flex justify-content-left">
                            <a href="{{ url('thread/post', $category->id) }}" class="btn btn-dark">新規スレッド作成</a>
                        </div>
                        {{-- このカテゴリ内のスレッド検索 --}}
                        {!! Form::open([
                            'url' => "category/search",
                            'method' => 'get',
                            'files' => true,
                            'class' => 'form-inline ml-3 my-2 my-lg-0',
                        ]) !!}
                        {!! Form::hidden('categoryId', $category->id) !!}
                        {!! Form::search('q', $q ?? '', ['class' => 'form-control mr-sm-2', 'placeholder' => 'カテゴリ内スレッド検索']) !!}
                        {!! Form::button('検索', [
                            'class' => 'btn btn-dark my-2 my-sm-0',
                            'type' => 'submit',
                        ]) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        {{-- 検索条件 --}}
        <div class="h3 mt-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold mb-4"><span>スレッドの検索結果</span></h3>
                    <h4 class="card-title font-weight-bold "><span>検索カテゴリ：{{ $category->name }}</span></h4>
                    <h4 class="card-title font-weight-bold "><span>検索文字列：「{{ $q }}」</span></h4>
                    @if ($threads_count > 0)
                        <h4 class="card-title font-weight-bold "><span>{{ $threads_count }}件ヒットしました。</span></h4>
                    @else
                        <h4 class="card-title font-weight-bold "><span>検索条件に合致するスレッドは見つかりませんでした。</span></h4>
                    @endif
                </div>
            </div>
        </div>

        @if ($threads)
            <div class="mt-4 mb-4">
                <table class="table">
                    <thead class="table-bordered table-sm thead-light">
                        <tr>
                            <th colspan="1">
                                ヒットしたスレッド一覧
                            </th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered table-sm">
                        @foreach ($threads as $thread)
                            <tr>
                                {{-- 所属するカテゴリも表示させる --}}
                                <td class="d-flex justify-content-start align-items-center">
                                    <div class="ml-2">[{{ $loop->index + 1 }}]</div>
                                    <a href="{{ url('thread/show', $thread->id) }}"
                                        class="btn btn-link">{{ $thread->name }}</a>
                                    {{-- <div class="ml-2">（{{ $thread->count_comment }}件）</div> --}}
                                    {{-- @if (isset($thread->recently_comment_datetime))
                                      <div class="ml-2">
                                          {{ $thread->recently_comment_datetime->format('m月d日 H:i') }}
                                      </div>
                                  @else
                                  @endif --}}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        @endif
    </div>

@endsection
