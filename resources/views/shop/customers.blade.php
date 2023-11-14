@extends('layouts.vertical', ['title' => 'Clientes', 'sub_title' => 'cliente', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="w-full">

        @livewire('customers')
    </div>
@endsection

