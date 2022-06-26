@extends('layouts.main')

@section('content')
    <div class="content defect">
        <form action="{{ route('auto.store') }}" class="w-25" method="post">
            @csrf

            <div class="mb-3">
                <label for="autoBrand">Марка</label>
                <select class="form-select" id="auto_brand" name="auto_brand_id">
                    @foreach($autoBrands as $autoBrand)
                        <option
                            {{ old('auto_brand_id') == $autoBrand->id ? ' selected' : '' }}

                            value="{{ $autoBrand->id }}">{{ $autoBrand->title }}</option>
                    @endforeach
                </select>
            </div>

            <label for="autoBrand">Модель</label>
            <input class="form-control mb-3" type="text" name="model" placeholder="Модель">

            <label for="autoBrand">Государственный номер</label>
            <input class="form-control mb-3" type="text" name="state_number" placeholder="Государственный номер">

            <button type="submit" class="btn btn-primary mb-3">Добавить</button>
        </form>
    </div>
@endsection


@section('title', 'Авто')
