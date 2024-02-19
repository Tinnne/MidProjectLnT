<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengaturan Karyawan') }}
        </h2>
    </x-slot>

    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-white text-lg font-bold mt-6">Karyawan {{$worker->nama}}</h1>
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <div class="text-white bold flex justify-between">
                <p>Nama</p>
                <p>Umur</p>
                <p>Alamat</p>
                <p>Nomor Telepon</p>
            </div>
            <div class="text-white flex justify-between">
                <p>{{$worker->nama}}</p>
                <p>{{$worker->umur}}</p>
                <p>{{$worker->alamat}}</p>
                <p>{{$worker->nomor}}</p>
            </div>
            <div class="flex mt-6 justify-end space-x-6 gap-6">
                <a href="{{route('worker.index')}}">
                    <x-primary-button>Return</x-primary-button>
                </a>

                <a href="{{route('worker.edit', $worker->id)}}">
                    <x-primary-button>Edit</x-primary-button>
                </a>

                <form action="{{route('worker.destroy', $worker->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <x-primary-button>Delete</x-primary-button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
