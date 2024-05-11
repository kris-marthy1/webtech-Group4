@extends('estab_template')

@section('content')

<p class="text-4xl mb-10 ms-5">Currently processing:</p>

<div class="m-1 p-16 border border-yellow-300 rounded-lg text-center">
    <p class="text-5xl">#1</p>
    <p class="text-3xl">Janine Dollente</p>
    <p class="text-3xl">Time left before skip: 1:39</p>
        <button type="submit" class="m-1 p-5 border border-yellow-300 rounded-lg text-center hover:bg-amber-200">
            Next
        </button>
</div>
<p class="text-4xl my-5 ms-5">Next in queue:</p>

<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <div class="m-1 p-16 border border-yellow-300 rounded-lg text-center">
        <p>#2</p>
        <p>LJ Pegal</p>
    </div>
    <div class="m-1 p-16 border border-yellow-300 rounded-lg text-center">
        <p>#3</p>
        <p>Kris Marthy Denso</p>
    </div>
</div>

@endsection