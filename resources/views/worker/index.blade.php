<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengaturan Karyawan') }}
        </h2>
    </x-slot>

    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-white text-lg font-bold mt-6">Daftar Karyawan</h1>
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <div class="text-white bold flex justify-between">
                <p>Nama</p>
                <p>Umur</p>
                <p>Alamat</p>
                <p>Nomor Telepon</p>
            </div>
            @foreach ($workers as $worker)
                <div class="text-white flex justify-between">
                    <a href={{route('worker.show', $worker->id)}}>{{$worker->nama}}</a>
                    <a href={{route('worker.show', $worker->id)}}>{{$worker->umur}}</a>
                    <a href={{route('worker.show', $worker->id)}}>{{$worker->alamat}}</a>
                    <a href={{route('worker.show', $worker->id)}}>{{$worker->nomor}}</a>
                </div>
            @endforeach
            <div class="flex justify-end mt-6">
                <form action="{{route('worker.create')}}" method="patch">
                    <x-primary-button>Pekerja Baru</x-primary-button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
