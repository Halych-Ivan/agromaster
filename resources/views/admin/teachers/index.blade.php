@extends('cabinet.layout')
@section('title', 'ADMIN')

@section('page-banner')

@endsection


@section('content')
    <div class="card card-body">
        <div class="table-responsive">
            <table class="table table-striped search-table v-middle">
                <thead class="header-item">
                    <th class="text-dark font-weight-bold">ПІБ</th>
                    <th class="text-dark font-weight-bold">Посада</th>
                    <th class="text-dark font-weight-bold">Email</th>
                    <th class="text-dark font-weight-bold">Телефон</th>
                    <th class="text-center"></th>
                </thead>
                <tbody>

        @foreach($teachers as $teacher)
                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{$teacher->photo}}" alt="avatar" class="rounded-circle" width="35">
                                <div class="ml-2">
                                    <div class="user-meta-info">
                                        <h5 class="user-name mb-0" data-name="Emma Adams">{{$teacher->name}}</h5>
                                        <span class="user-work text-muted">каф. {{$teacher->cathedra->title??''}}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>{{$teacher->position}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->phone}}</td>
                        <td class="text-center">
                            <div class="action-btn">
                                <a href="{{route('admin.teachers.edit', $teacher->id)}}" class="text-info edit">
                                    <i class="mdi mdi-account-edit font-20"></i>
                                </a>
                                <a href="javascript:void(0)" class="text-dark delete ml-2">
                                    <i class="mdi mdi-delete font-20"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
