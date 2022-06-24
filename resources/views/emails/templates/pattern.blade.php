@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => global_config('company_website')])
            <img src="{{ global_config('company_logo') }}" style="max-width: 180px; height: auto;">
        @endcomponent
    @endslot

    {{-- Body --}}
    {!! $email->body !!}

    {{-- Footer --}}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
