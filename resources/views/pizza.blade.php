@extends('layouts.l1')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div>
        @if (!isset($string69))
            <h1>Chuẩn CMNR</h1>
        @endif
    </div>

    {{ $string }}

    @foreach ($list as $string)
        <h1 style="color:pink;">{{ $string }}</h1>
        <hr>
    @endforeach

    <!-- <tbody>
        @forelse($i=0; $i<count($table); $i++)
            <tr>
                @for($j=0; $j<count($table[$j]); ++$j)  
                    <td>$table[$i][$j]</td>
                @endfor
            </tr>
        @empty
            <tr>Có gì đâu mà duyệt</tr>
        @endforelse
    </tbody> -->
</div>
@endsection