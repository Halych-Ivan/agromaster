@extends('cabinet.layout')
@section('title', 'ADMIN')

@section('page-banner')

@endsection


@section('content')


    <div class="container m-2">
        <a class="btn btn-outline-success" href="{{route('admin.plans.create')}}" type="submit">Додати</a>
    </div>

    <div class="card card-body">
        <div class="table-responsive">
            <table class="table table-striped search-table v-middle">
                <thead class="header-item">
                    <th class="">ID</th>
                    <th class="text-center">Назва</th>
                    <th class="text-dark font-weight-bold text-center">Семестр</th>
                    <th class="text-center">ECTS</th>
                    <th class="text-center">Контроль</th>
                    <th class="text-center">кафедра</th>
                    <th class="text-center">...</th>
                </thead>
                <tbody>

                @foreach($plans as $plan)

                    <tr class="search-items">
                        <td>{{$plan->id}}</td>
                        <td>{{$plan->title}}</td>
                        <td class="text-center">{{$plan->year}}</td>

{{--                        <td class="text-center">--}}
{{--                            <div class="action-btn">--}}
{{--                                <a href="{{route('admin.plans.edit', $plan->id)}}" class="text-info edit">--}}
{{--                                    <i class="mdi mdi-account-edit font-20"></i>--}}
{{--                                </a>--}}
{{--                                <a href="javascript:void(0)" class="text-dark delete ml-2">--}}
{{--                                    <i class="mdi mdi-delete font-20"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
