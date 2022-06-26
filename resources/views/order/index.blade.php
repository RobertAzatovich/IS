@extends('layouts.main')

@section('content')
<div class="content defect">
    <div class="defect-btn">
        <a href="creatorder.html" class="defect__button"><span class="defect-icon-btn"></span>Создать</a>
    </div>
    <div class="defect-table scroll-table">
        <table>
            <thead>
            <tr class="table-column">
                <th class="table-col" tabindex="0">
                    <div class="table-col__inner table-col__sort">Дата</div>
                    <input type="text" class="table-col__input" placeholder="Поиск...">
                </th>
                <th class="table-col" tabindex="0">
                    <div class="table-col__inner table-col__sort">Номер</div>
                    <input type="text" class="table-col__input" placeholder="Поиск...">
                </th>
                <th class="table-col" tabindex="0">
                    <div class="table-col__inner table-col__sort">Автомобиль</div>
                    <input type="text" class="table-col__input" placeholder="Поиск...">
                </th>
                <th class="table-col" tabindex="0">
                    <div class="table-col__inner table-col__sort">Прицеп</div>
                    <input type="text" class="table-col__input" placeholder="Поиск...">
                </th>
                <th class="table-col" tabindex="0">
                    <div class="table-col__inner table-col__sort">Сумма</div>
                    <input type="text" class="table-col__input" placeholder="Поиск...">
                </th>
                <th class="table-col" tabindex="0">
                    <div class="table-col__inner table-col__sort">Деф. ведомость</div>
                    <input type="text" class="table-col__input" placeholder="Поиск...">
                </th>
                <th class="table-col table-col__sect" tabindex="0">
                    <div class="table-col__inner"></div>
                </th>

            </tr>
            </thead>
        </table>
        <div class="scroll-table-body">
            <table>
                <tbody>
                <tr class="table-row__list" data-index="0">
                    <td class="table-row__item">00.00.0000</td>
                    <td class="table-row__item">1234567</td>
                    <td class="table-row__item">Название автомобиля х000хх 0</td>
                    <td class="table-row__item">Название прицепа х000хх 0</td>
                    <td class="table-row__item">00000 руб</td>
                    <td class="table-row__item">Иванов Иван Иванович</td>
                    <td class="table-row__item table-row__sect">
                        <a href="#" class="table-row__btn dropdown-btn"></a>
                        <div class="dropdown">
                            <ul class="dropdown__list">
                                <li class="dropdown__item">Просмотр</li>
                                <li class="dropdown__item">Редактировать</li>
                                <li class="dropdown__item">Удалить</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr class="table-row__list" data-index="0">
                    <td class="table-row__item">00.00.0000</td>
                    <td class="table-row__item">1234567</td>
                    <td class="table-row__item">Название автомобиля х000хх 0</td>
                    <td class="table-row__item">Название прицепа х000хх 0</td>
                    <td class="table-row__item">00000 руб</td>
                    <td class="table-row__item">Иванов Иван Иванович</td>
                    <td class="table-row__item table-row__sect">
                        <a href="#" class="table-row__btn dropdown-btn"></a>
                        <div class="dropdown">
                            <ul class="dropdown__list">
                                <li class="dropdown__item">Просмотр</li>
                                <li class="dropdown__item">Редактировать</li>
                                <li class="dropdown__item">Удалить</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>

        </table>
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


@section('title', 'Заказ-наряды')
