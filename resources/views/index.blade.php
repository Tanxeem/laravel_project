        @vite('resources/css/app.css')
        @extends('layouts.main')

        @section('main-container')

        @include('layouts.hero');
        @include('layouts.category');
        
        @endsection

        
