<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <div class="flex justify-center text-gray-900 dark:text-gray-100">
                    {{ __("Log-in berhasil!") }}
                </div>
                <div class="flex justify-center px-6 py-4">
                    <a href="{{route('worker.index')}}">
                        <x-primary-button>Data Karyawan</x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
