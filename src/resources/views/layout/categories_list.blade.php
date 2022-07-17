@section('categories_list')

    {{-- カテゴリ一覧の表示 --}}
    {{-- 基本はスクロールですべて辿れるようにする --}}
    <div class="col-md-3">
        <div class="mt-5 mb-5">
            <table class="table table-fixed">
                <thead class="table-bordered table-sm thead-light">
                    <tr>
                        <th colspan="1">
                            カテゴリ一覧
                        </th>
                    </tr>
                </thead>
                <tbody class="table-bordered table-sm">
                    @if ($categories)
                        @php
                            $category_id = $categoryId ?? null;
                        @endphp
                        @foreach ($categories as $category)
                            @if ($category->id == $category_id)
                                <tr class="active">
                                    <td>
                                        <a href="{{ url('category/show', $category->id) }}"
                                            class="btn btn-link">{{ $category->name }}</a>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td>
                                        <a href="{{ url('category/show', $category->id) }}"
                                            class="btn btn-link">{{ $category->name }}</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td>
                                作成されたカテゴリはありません。
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <style>
        tr {
            background-color: white;
        }

        tr.active {
            background-color: #DDFFFF;
            color: #c6c8ca;
        }

        tr.active td .btn-link {
            color: #343a40;
        }

        tr.active td .btn-link:hover {
            text-decoration: none;
        }
    </style>

@endsection
