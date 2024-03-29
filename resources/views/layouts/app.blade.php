<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CMS | @yield('title')</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="favicon.ico">

    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('assets/css/main.07a59de7b920cd76b874.css') }}" rel="stylesheet">

    {{-- toastr alert cdn--}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>

<body>
    <div class="app-container app-theme-gray">
        <div class="app-main">

            {{-- Sidebar Section --}}
            @include('partials._sidebar')


            <div class="app-main__outer">
                <div class="app-main__inner">


                    {{-- Header Section --}}
                    @include('partials._header')

                    {{-- Top Content --}}
                    @yield('topcontent')

                    <div class="app-inner-layout app-inner-layout-page">
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        {{-- Main Content Section --}}
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Footer Section --}}
{{--                    @include('partials._footer')--}}

                </div>
            </div>
        </div>


        {{-- Right Side Popup Menu --}}
        @include('partials.rightside._sidebar')
    </div>


    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="{{ asset('assets/scripts/main.07a59de7b920cd76b874.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
{{--    custom js file link--}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    {{--  toaster alert js cdn--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>

    {{-- JS --}}
    @yield('javascript')
</body>

</html>
