@extends('layouts.main')

@section('content')
<div class="content defect">
    <div class="defect-btn">
        <a href="{{ route('auto_brand.create') }}" class="defect__button"><span class="defect-icon-btn"></span>Создать</a>
    </div>
    <div class="defect-table scroll-table">
        <table>
            <thead>
            <tr class="table-column">
                <th class="table-col" tabindex="0">
                    <div class="table-col__inner table-col__sort">Марка</div>
                    <input type="text" class="table-col__input" placeholder="Поиск...">
                </th>
                <th class="table-col table-col__sect" tabindex="0">
                    <div class="table-col__inner "></div>
                </th>
            </tr>
            </thead>
        </table>
        <div class="scroll-table-body">
            <table>
                <tbody>
                @foreach($autoBrands as $brand)
                    <tr class="table-row__list" data-index="0">
                        <td class="table-row__item">{{ $brand->title }}</td>
                        <td class="table-row__item table-row__sect">
                            <a href="#" class="table-row__btn dropdown-btn"></a>
                            <div class="dropdown">
                                <ul class="dropdown__list">
                                    <li class="dropdown__item"><a href="{{ route('auto_brand.edit', $brand->id) }}">Редактировать</a></li>
                                    <li class="dropdown__item">
                                        <form action="{{ route('auto_brand.delete', $brand->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="text-danger">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>





    <div class="pagination">
        <div class="pagination-wrap">
            <button class="pagination__btn"><</button>
            <button class="pagination__btn">1</button>
            <button class="pagination__btn">2</button>
            <button class="pagination__btn" disabled>...</button>
            <button class="pagination__btn">x</button>
            <button class="pagination__btn">></button>
            <select class="pagination__select">
                <option value="10" class="pagination__option">10</option>
                <option value="20" class="pagination__option">20</option>
                <option value="30" class="pagination__option">30</option>
            </select>
        </div>
    </div>
</div>
@endsection


@section('title', 'Бренды авто')
