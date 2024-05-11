@extends('estab_template')

@section('content')
    

<div class="grid grid-cols-2 md:grid-cols-5 gap-4">
    <form action="{{ url('/estab_manage_queue') }}">
        <button type="submit" class="m-1 p-16 border border-yellow-300 rounded-lg text-center hover:bg-amber-200">
            Sample Window
        </button>
    </form>
    
</div>

@endsection