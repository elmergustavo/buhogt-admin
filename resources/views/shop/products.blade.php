@extends('layouts.vertical', ['title' => 'Products', 'sub_title' => 'Productos', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="w-full">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 mb-6">
            <div class="card">
                <div class="p-5">
                    <div class="flex justify-between">
                        <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-primary/25 ">
                            <i class="mgc_tag_line text-4xl text-primary"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-gray-300">3947</h3>
                            <p class="text-gray-500 mb-1 truncate dark:text-gray-400">Total Tickets</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="p-5">
                    <div class="flex justify-between">
                        <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-yellow-100">
                            <i class="mgc_alarm_2_line text-4xl text-yellow-500"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-gray-300">624</h3>
                            <p class="text-gray-500 mb-1 truncate dark:text-gray-400">Pending Tickets</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="p-5">
                    <div class="flex justify-between">
                        <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-green-100">
                            <i class="mgc_check_line text-4xl text-green-500"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-gray-300">3195</h3>
                            <p class="text-gray-500 mb-1 truncate dark:text-gray-400">Closed Tickets</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="p-5">
                    <div class="flex justify-between">
                        <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-red-100">
                            <i class="mgc_delete_line text-4xl text-red-500"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-gray-300">128</h3>
                            <p class="text-gray-500 mb-1 truncate dark:text-gray-400">Deleted Tickets</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @livewire('list-products')
    </div>
@endsection

