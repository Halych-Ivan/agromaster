@props(['name' => '', 'value' => '', 'placeholder' => '', 'required' => ''])
<div class="mb-3">
    <div class="input-group m-3">
        <span class="input-group-text" id="{{$name}}">{{$placeholder}}</span>
        <input type="text" class="form-control" name="{{$name}}" value="{{$value}}" aria-label="{{$value}}" aria-describedby="{{$name}}" {{$required}}>
    </div>
</div>

