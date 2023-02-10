@props(['label' => '', 'name' => ''])

<label class="col-sm-2 col-form-label">{{ $label }}</label>
<div class="col-sm-8">
    <select name="{{ $name }}" class="form-control">
        {{ $slot }}
    </select>
</div>
