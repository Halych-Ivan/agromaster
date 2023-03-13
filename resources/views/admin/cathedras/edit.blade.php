@extends('cabinet.layout')
@section('title', 'ADMIN')

@section('page-banner')

@endsection


@section('content')
    <div class="container m-2">
        <a class="btn btn-outline-success active" href="{{route('admin.cathedras.create')}}" type="submit">Додати</a>
        <a class="btn btn-outline-success " href="{{route('admin.cathedras.index')}}" type="submit">Всі</a>
    </div>


<div class="col-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Редагування картки кафедри</h4>
            <div class="m-t-20">
                <form action="{{route('admin.cathedras.update', $cathedra->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" value="{{$cathedra->title}}" placeholder="Назва">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="abbr" value="{{$cathedra->abbr}}" placeholder="Абревіатура">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="link"  value="{{$cathedra->link}}" placeholder="Посилання (якщо необхідно)">
                    </div>
                    <div class="email-repeater form-group">
                        <div data-repeater-item class="row mb-3">
                            <div class="col-md-2">
                                <img src="{{$cathedra->logo}}" height="100">
                            </div>
                            <div class="col-md-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="logo" id="logo">
                                    <label class="custom-file-label" for="logo">Виберіть логотип</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3"  name="info" placeholder="{{$cathedra->info}}"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success waves-effect waves-light" type="submit">Зберегти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
