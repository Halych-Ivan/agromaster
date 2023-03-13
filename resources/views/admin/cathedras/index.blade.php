@extends('cabinet.layout')
@section('title', 'ADMIN')

@section('page-banner')

@endsection


@section('content')


    <div class="container m-2">
        <a class="btn btn-outline-success" href="{{route('admin.cathedras.create')}}" type="submit">Додати</a>
    </div>

    <div class="card card-body">
        <div class="table-responsive">
            <table class="table table-striped search-table v-middle">
                <thead class="header-item">
                <th class="text-dark font-weight-bold">Назва</th>
                <th class="text-center"></th>
                </thead>
                <tbody>

                @foreach($cathedras as $cathedra)

                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{$cathedra->logo}}" alt="avatar" class="rounded-circle" width="35">
                                <div class="ml-2">
                                    <div class="user-meta-info">
                                        <h5 class="user-name mb-0" data-name="Emma Adams">{{$cathedra->title}}</h5>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="action-btn">
                                <a href="{{route('admin.cathedras.edit', $cathedra->id)}}" class="text-info edit">
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
