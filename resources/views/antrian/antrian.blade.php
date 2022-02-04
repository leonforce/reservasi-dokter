@extends('layouts.app')

@section('content')
    <div class="mt-12 mx-auto flex justify-center text-gray-400 ">
        <span class="text-4xl font-bold items-center font-serif ">Nama Rumah Sakit</span>
    </div>
    <div class="mt-12 w-full px-12 shadow-lg">
        <div class="text-2xl font-bold bg-blue-400 rounded-t-xl flex items-center py-1 text-white justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>Form Reservasi</div>
            <div class="w-full">
                @if ($errors->any())
                @foreach ($message->all() as $msg)
                    <p>{{ $msg }}</p>
                @endforeach
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('simpan')}}" class="text-right py-5 text-gray-700">
                    @csrf
                    <div class="py-4 text-lg">
                        <label for="nama" class="px-1">
                            Nama :</label>
                        <input type="text" value="{{ old('nama') }}" id="nama" name="nama" placeholder="Udin Lufiansyah" class="mr-48 w-1/2 border-b-2 focus:outline-none focus:border-blue-400">
                    </div>
                    <div class="py-4 text-lg">
                    <label for="notelp" class="px-1">No-Telp :</label>
                        <input type="number" value="{{ old('notelp') }}" id="notelp" name="notelp" placeholder="086443443****" class="border-b-2 mr-48 w-1/2 focus:outline-none focus:border-blue-400">
                    </div>
                    <div class="py-4 text-lg">
                        <label for="alamat" class="px-1">Alamat :</label>
                        <input type="text" value="{{ old('alamat') }}" id="alamat" name="alamat" placeholder="Jalan Karang No.19 RT.22 Kelurahan Badak Kecamatan Gorogiri" class="mr-48 w-1/2 border-b-2 focus:outline-none focus:border-blue-400">
                    </div>
                    <div class="py-4 text-lg">
                        <label for="jenis" class="px-1">Jenis :</label>
                        <select name="jenis" id="jenis" class="mr-48 w-1/2 border-b-2 focus:outline-none focus:border-blue-400 bg-transparent">
                            <option value="Umum">Umum</option>
                            <option value="Bpjs">Bpjs</option>
                        </select>
                    </div>
                    <div class="py-4 text-lg font-bold text-white text-center">
                        <button class="bg-blue-500 px-2 py-1 transition-all rounded-md hover:shadow-md hover:shadow-blue-400 hover:bg-blue-400 " type="submit">Reservasi</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
