@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Data Pegawai</h2>
                    <form action="{{ url('/pegawai/store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                            <input type="text" name="nama" id="nama" class="mt-1 p-2 w-full border rounded-md" placeholder="Masukkan nama pegawai">
                        </div>
                        <div class="mb-4">
                            <label for="jabatan" class="block text-sm font-medium text-gray-600">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" class="mt-1 p-2 w-full border rounded-md" placeholder="Masukkan jabatan pegawai">
                        </div>
                        <div class="mb-4">
                            <label for="gaji" class="block text-sm font-medium text-gray-600">Gaji</label>
                            <input type="text" name="gaji" id="gaji" class="mt-1 p-2 w-full border rounded-md" placeholder="Masukkan gaji pegawai">
                        </div>
                        <div class="mb-4">
                            <label for="pendidikan" class="block text-sm font-medium text-gray-600">Pendidikan</label>
                            <input type="text" name="pendidikan" id="pendidikan" class="mt-1 p-2 w-full border rounded-md" placeholder="Masukkan pendidikan pegawai">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection