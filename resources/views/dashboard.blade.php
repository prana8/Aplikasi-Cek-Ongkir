@extends('layouts.app')

@section('content')
<div class="container">
    <div class="ongkir-header mb-2">
        <h1>Harvest Ongkir</h1>
        <p class="lead">
            Project Cek Ongkir ke Seluruh Kota dan Kabupaten di Indonesia
        </p>
    </div>

    <div class="card-deck mb-3 text-center container">
        <div class="row m-3">
            <div class="card mb-4 shadow-sm col mr-3 ">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <i class="fas fa-box" style="font-size:80px"></i>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Lacak lokasi paket</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-success text-gray-900">Get started</button>
                </div>
            </div>
    
            <div class="card mb-4 shadow-sm col ml-3 ">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <i class="fas fa-plane-departure" style="font-size:80px"></i>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cek Ongkir Pengiriman Internasional</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-success text-gray-900">Contact us</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Formulir Cek Ongkir</h4>
        </div>
        <div class="card-body container">
            <form action="" method="POST">
                @csrf
                <div class="form-row row">
                    <div class="col p-2">
                        <h5 class="text-muted">Asal Pengirim:</h5>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select name="origin_province" id="" class="form-control">
                                <option value="#">-</option>
                                @foreach ($provinsi as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kota/Kabupaten</label>
                            <select name="origin_city" id="" class="form-control">
                                <option value="#">-</option>
                            </select>
                        </div>
                        <h5 class="text-muted">Tujuan Pengirim:</h5>
                        <div class="form-group">
                            <label for="">Kota/Kabupaten</label>
                            <select name="destination_city" id="destination_city" class="form-control">
                                <option value="#">-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="text-muted">Pilih Expedisi:</h5>
                        @foreach ($kurir as $key => $value)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="courier" name="courier[]" value="{{$key}}">
                            <label class="form-check-label" for="courier">{{ $value }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-success text-gray-900">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection