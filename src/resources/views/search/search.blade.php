@extends('layout.app')

@section('title', '検索')
@include('layout.header')
@include('layout.footer')


@section('content')

    @include('layout.categories_list')

    <div class="col-md-9">
        {{-- 検索条件 --}}
        <div class="h3 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold mb-4"><span>スレッドの検索結果</span></h3>
                    <h4 class="card-title font-weight-bold "><span>検索文字列：「{{ $str }}」</span></h4>
                    @if ($threads_count > 0)
                        <h4 class="card-title font-weight-bold "><span>{{ $threads_count }}件ヒットしました。</span></h4>
                    @else
                        <h4 class="card-title font-weight-bold "><span>検索条件に合致するスレッドは見つかりませんでした。</span></h4>
                    @endif
                </div>
            </div>
        </div>

        @if ($threads)
            <div class="mt-5 mb-5">
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
