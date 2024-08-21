@extends("admin.layouts.app_admin")

@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
         @slot('title') Список категорий @endslot
         @slot('parent') Главная @endslot
         @slot('active') Категории @endslot
        @endcomponent


        <hr>
        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">Создать категорию</a>
        <table class="table table-striped">
            <thead>
                <th>Наименование</th>
                <th>Публикация</th>
                <th class="text-right">Действие</th>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{$category->title}}</td>
                        <td>{{$category->published}}</td>
                        <td>
                            <a href="{{route('admin.category.edit',["category"=>$category->id])}}"></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Данные отсутсвуют</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection