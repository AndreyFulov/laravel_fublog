@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    @component('admin.components.breadcrumbs')
        @slot('title') Создание категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent
    <hr/>
    <form action="{{route('admin.category.store')}}" class="form-horizontal" method="post">
        {{csrf_field()}}
        <label for="title">Заголовок:</label>
        <input name="title" id="title" type="text"/>
        <br/>

        <label for="slug">Ссылка:</label>
        <input name="slug" id="slug" type="text"/>
        <br/>

        <label for="published">Статус:</label>
        <select name="published">
            @if(isset($category->id))
                <option value="0" @if($category->published == 0) selected="" @endif>Не опубликовано</option>
                <option value="1    " @if($category->published == 1) selected="" @endif>Опубликовано</option>
            @else
                <option value="0">Не опубликовано</option>
                <option value="1">Опубликовано</option>
            @endif
        </select>
        <br/>

        <button type="submit">Отправить</button>
    </form>
</div>

@endsection