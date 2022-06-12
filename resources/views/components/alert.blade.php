@if (session()->has('message'))
    <div>
        <div class="alert alert-{{ session('type') }}">
            {!! session('message') !!}
        </div>
    </div>
@endif
