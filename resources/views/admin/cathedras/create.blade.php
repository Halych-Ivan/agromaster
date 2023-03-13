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
            <h4 class="card-title">Дадавання картки кафедри</h4>
            <div class="m-t-20">
                <form action="{{route('admin.cathedras.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Назва">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="abbr" value="{{ old('abbr') }}" placeholder="Абревіатура">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="link"  value="{{ old('link') }}" placeholder="Посилання (якщо необхідно)">
                    </div>
                    <div class="email-repeater form-group">
                        <div data-repeater-item class="row mb-3">
                            <div class="col-md-2">
                                <img src="" height="100">
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
                        <textarea class="form-control" rows="3"  name="info" placeholder="{{ old('info') }}"></textarea>
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
