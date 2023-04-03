@extends('admin.layout.admin')

@section('title', 'Дисципліни - всі записи')



@section('content')


    <div class="container m-2">
        <a class="btn btn-outline-success" href="{{route('admin.subjects.create')}}" type="submit">Додати</a>
    </div>

    {{ $subjects->links('admin.layout.pagination') }}
    <form class="d-flex m-3" role="search" action="{{route('admin.subjects.index')}}">
        <input class="form-control w-50" name="search" type="search" placeholder="{{session('search'??'Пошук по назві')}}" aria-label="Search">
        <button class="btn btn-outline-primary ml-3 mr-5" type="submit">Пошук</button>
        <a href="{{route('admin.subjects.index', 'search=0')}}" class="btn btn-outline-primary">Всі записи</a>
    </form>

    <div class="card card-body">
        <div class="table-responsive">
            <table class="table table-striped search-table v-middle">
                <thead class="header-item">
                    <th class="">ID</th>
                    <th class="text-center">Назва</th>
                    <th class="text-dark font-weight-bold text-center">Семестр</th>
                    <th class="text-center">ECTS</th>
                    <th class="text-center">Контроль</th>
                    <th class="text-dark font-weight-bold text-center">Освітня програма</th>
                    <th class="text-center">кафедра</th>
                    <th class="text-center">Активні дії</th>
                </thead>
                <tbody>

                @foreach($subjects as $subject)

                    <tr class="search-items">
                        <td>{{$subject->id}}</td>
                        <td>
                            {{$subject->title}}
                            @if(!$subject->main)
                                <br>(вибіркова)
                            @endif
                        </td>

                        <td class="text-center">{{$subject->semester}}</td>
                        <td class="text-center">{{$subject->size}}</td>
                        <td class="text-center">{{$subject->control}}</td>

                        <td>
                            {{$subject->program->title??'Назва'}} ({{$subject->program->year??'рік'}})
                        </td>
                        <td class="text-center">
                            <a href="{{route('admin.cathedras.index')}}">{{$subject->cathedra->abbr??''}}</a>
                        </td>

                        <td class="text-center"><x-admin.action-icons resource="subjects" id="{{$subject->id}}"></x-admin.action-icons></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
