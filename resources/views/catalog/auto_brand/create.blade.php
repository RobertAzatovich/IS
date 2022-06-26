@extends('layouts.main')

@section('content')
    <div class="content defect">
        <form action="{{ route('auto_brand.store') }}" class="w-25" method="post">
            @csrf
            <input class="form-control mb-3" type="text" name="title" placeholder="Название бренда">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection


@section('title', 'Бренды авто')
