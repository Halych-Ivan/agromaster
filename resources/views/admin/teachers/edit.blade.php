@extends('cabinet.layout')
@section('title', 'ADMIN')

@section('page-banner')

@endsection


@section('content')

{{--    {{dd($teacher->cathedra->title)}}--}}

    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Редагування картки викладача</h4>
                <div class="m-t-20">
                    <form action="{{route('admin.teachers.update', $teacher->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{$teacher->name}}" placeholder="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="position" value="{{$teacher->position}}" placeholder="Посада">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="{{$teacher->email}}" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone"  value="{{$teacher->phone}}" placeholder="Телефон">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="cathedra" name="cathedra">
                                <option name="cathedra" value="0">Кафедра</option>
                                @foreach($cathedras as $cathedra)
                                    <option name="cathedra" value="{{$cathedra->id}}" {{$teacher->cathedra->title??'' == $cathedra->title ? "selected" : "" }}>{{$cathedra->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="email-repeater form-group">
                            <div data-repeater-item class="row mb-3">
                                <div class="col-md-2">
                                    <img src="{{$teacher->photo}}" height="100" alt="">
                                </div>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photo" id="photo">
                                        <label class="custom-file-label" for="photo">Виберіть фото</label>
                                    </div>
                                </div>
{{--                                <div class="col-md-2">--}}
{{--                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-repeater-delete="">--}}
{{--                                        <i class="ti-close"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
                            </div>
{{--                            <button type="button" data-repeater-create="" class="btn btn-info waves-effect waves-light">Add More File--}}
{{--                            </button>--}}
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success waves-effect waves-light" type="submit">Submit
                            </button>
                            <input class="btn btn-primary" type="submit" value="Edit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>








@endsection
