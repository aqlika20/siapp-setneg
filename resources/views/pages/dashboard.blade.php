{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}

    <div class="row">
        <div class="col-lg-12 col-xxl-12">
            <div class="card card-custom bg-gray-100 {{ @$class }}">
                {{-- Header --}}
                <div class="card-header border-0 py-5">
                    <h3 class="card-title font-weight-bolder">Welcome!</h3>
                </div>
                {{-- Body --}}
                <div class="card-body py-5 position-relative overflow-hidden">
                    <p>Hello world.</p>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
