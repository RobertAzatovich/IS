@extends('layouts.main')

@section('content')
    <div class="content defect">
        <form action="{{ route('auto_brand.update', $autoBrand->id) }}" class="w-25" method="post">
            @csrf
            @method('patch')
            <input class="form-control mb-3" type="text" name="title" placeholder="Название бренда" value="{{ $autoBrand->title }}">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection


@section('title', 'Бренды авто')
