@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
 
                    @if (session('success'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>    
                    @endif
                    @if (session('error'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>    
                    @endif

                    <form action="{!! route('employee-admin.store') !!}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input value="{{old('nama')}}" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ktp">ktp</label>
                            <input value="{{old('ktp')}}" name="ktp" type="text" class="form-control @error('ktp') is-invalid @enderror" id="ktp">
                            @error('ktp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <textarea value="{{old('alamat')}}" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="5"></textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input value="{{old('email')}}" name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input value="{{old('phone')}}" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Save</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
