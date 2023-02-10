<div class="col-md-4 col-sm-6 teachers-col">
    <div class="single-teacher text-center">
        <div class="teacher-social">
            <ul class="social">
                <li><a href="{{$facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{$viber}}"><i class="fab fa-viber"></i></a></li>
                <li><a href="{{$instagram}}"><i class="fab fa-instagram"></i></a></li>
                <li><a href="{{$telegram}}"><i class="fab fa-telegram"></i></a></li>
            </ul>
        </div>
        <div class="teacher-image">
            <a href="{{$href}}" target=_blank>
                <img src="{{asset($image)}}" alt="teacher">
            </a>
        </div>
        <div class="teacher-content">
            <h4 class="name"><a href="{{$href}}" target=_blank>{{$name}}</a></h4>
            <span class="designation">{{$designation}}</span>
        </div>
    </div>
</div>
