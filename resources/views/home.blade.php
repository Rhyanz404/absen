@extends('layouts.app')
@section('title', 'Panel Karyawan')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informasi : {{ $info['status']}}</div>

                <div class="panel-body">
<!--                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <!-- <table class="table table-responsive"> -->
                        <form action="/home" method="post">
                            {{ csrf_field() }}
                            <input type="text" class="form-control" placeholder="Keterangan . . " name="note">
                            <button type="submit" class="btn btn-flat btn-primary {{ $info['btnInstts'] }}" name="btnIn" value="a" {{ $info['btnIn']}} >ABSEN MASUK</button>
                            <button type="submit" class="btn btn-flat btn-primary  {{ $info['btnOutstts'] }}" name="btnOut" value="b" {{ $info['btnOut']}}>ABSEN KELUAR</button>
                             <button type="submit" class="btn btn-flat btn-primary  {{ $info['btnlembur'] }}" name="btnlembur" value="c">Lebur</button>
                        </form>
                            <a href="home/logout" class="btn btn-flat btn-primary" value="b"> KELUAR</a>

                    <!-- </table> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Riwayat Absen</div>

                <div class="panel-body">
<!--                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data_absen as $absen)
                            <tr>
                                <td>{{$absen->date}}</td>
                                <td>{{$absen->time_in}}</td>
                                <td>{{$absen->time_out}}</td>
                                <td>{{$absen->note}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td>Tidak Ada Data</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
