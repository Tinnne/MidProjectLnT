<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengaturan Karyawan') }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6 py-12">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Ubah Data Karyawan') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __("Masukkan data baru karyawan.") }}
                        </p>
                    </header>

                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                    <form method="post" action="{{ route('worker.update', $worker->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')

                        <div>
                            <x-input-label for="nama" :value="__('Nama')" />
                            <x-text-input id="nama" name="nama" placeholder="Input nama (5-20 huruf)" type="text" class="mt-1 block w-full" required autofocus autocomplete="nama" value="{{$worker->nama}}" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>

                        <div>
                            <x-input-label for="umur" :value="__('Umur')" />
                            <x-text-input id="umur" name="umur" placeholder="Input umur" type="text" class="mt-1 block w-full" required autofocus autocomplete="umur" value="{{$worker->umur}}" />
                            <x-input-error class="mt-2" :messages="$errors->get('umur')" />
                        </div>

                        <div>
                            <x-input-label for="alamat" :value="__('Alamat')" />
                            <x-text-input id="alamat" name="alamat" placeholder="Input alamat (10-40 huruf)" type="text" class="mt-1 block w-full" required autofocus autocomplete="alamat" value="{{$worker->alamat}}" />
                            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                        </div>

                        <div>
                            <x-input-label for="nomor" :value="__('Nomor Telepon')" />
                            <x-text-input id="nomor" name="nomor" placeholder="Input nomor telepon" type="text" class="mt-1 block w-full" required autofocus autocomplete="nomor" value="{{$worker->nomor}}" />
                            <x-input-error class="mt-2" :messages="$errors->get('nomor')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update') }}</x-primary-button>

                            @if (session('status') === 'profile-updated')
                                <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
