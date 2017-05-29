@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-10 col-md-offset-1">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<app-root>Loading...</app-root>

<!-- preloading script -->
<script src="{{ URL::asset('//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js') }}"></script>
<script src="{{ URL::asset('//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js') }}"></script>


<!-- 1. Load libraries -->
<!-- Polyfill(s) for older browsers -->
{{--<script src="{{ URL::asset('/ngApp/node_modules/core-js/client/shim.min.js') }}"></script>--}}
{{--<script src="{{ URL::asset('/ngApp/node_modules/zone.js/dist/zone.js') }}"></script>--}}
{{--<script src="{{ URL::asset('/ngApp/node_modules/reflect-metadata/Reflect.js') }}"></script>--}}


<!-- 2. if development, configure SystemJS -->
{{--<script src="{{ URL::asset('/ngApp/node_modules/systemjs/dist/system.src.js') }}"></script>--}}
{{--<script src="{{ URL::asset('/ngApp/systemjs.config.js') }}"></script>--}}


<script src="{{ URL::asset('/ngApp/dist/inline.bundle.js') }}"></script>
<script src="{{ URL::asset('/ngApp/dist/vendor.bundle.js') }}"></script>

<script src="{{ URL::asset('/ngApp/dist/main.bundle.js') }}"></script>
<script src="{{ URL::asset('/ngApp/dist/styles.bundle.css') }}"></script>

@endsection
