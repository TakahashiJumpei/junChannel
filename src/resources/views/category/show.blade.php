@extends('layout.app')

@section('title', "{$category->name}")
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

        {{-- スレッドランキング（勢いのあるスレッド）の表示。コメントが最新のスレッド順に一覧表示 --}}
        <div class="mt-5 mb-5">
            <table class="table">
                <thead class="table-bordered table-sm thead-light">
                    <tr>
                        <th colspan="1">
                            スレッド一覧
                        </th>
                    </tr>
                </thead>
                <tbody class="table-bordered table-sm">
                    @if ($recently_commented_threads)
                        @foreach ($recently_commented_threads as $recently_commented_thread)
                            <tr>
                                <td class="d-flex justify-content-start align-items-center">
                                    <div class="ml-2">[{{ $loop->index + 1 }}]</div>
                                    <a href="{{ url('thread/show', $recently_commented_thread->id) }}"
                                        class="btn btn-link">{{ $recently_commented_thread->name }}</a>
                                    <div class="ml-2">（{{ $recently_commented_thread->count_comment }}件）</div>
                                    <div class="ml-2">
                                        {{ $recently_commented_thread->recently_comment_datetime->format('m月d日 H:i') }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>
                                このカテゴリに属するスレッドはありません。
                                <br>
                                スレッドを作成してみよう！
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
