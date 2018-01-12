@extends('layouts.admin')
@section('title', 'Panel Admin ')
@section('konten')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Absen Hari Ini ({{ $hari }})</div>
                <div class="panel-body">
                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Aktif</th>
                                <th>Aksi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                            @forelse($absen_harini as $absen)
                            <tr>
                                @forelse($users as $user)

                                <td>{{$user->name}}</td>
                                <td>{{$absen->time_in}}</td>
                                <td>{{$absen->time_out}}</td>
                                <td>Aktif</td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-danger">Action</button>
                                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Aksi</span>
                                      </button>
                                      <ul class="dropdown-menu btn-sm">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                      </ul>
                                    </div>
                                </td>
                                <td>{{$absen->note}}</td>
                            </tr>
                                @empty
                                ese
                                @endforelse
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
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Absen Kemarin</div>
                    <div class="panel-body">
                        <table class="table table-responsive table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jam Masuk</th>
                                    <th>Jam Keluar</th>
                                    <th>Aktif</th>
                                    <th>Aksi</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($absen_kemarin as $absenkemarin)
                                <tr>
                                    <td>{{$absenkemarin->user_id}}</td>
                                        <td>{{$absenkemarin->time_in}}</td>
                                        <td>{{$absenkemarin->time_out}}</td>
                                        <td>Aktif</td>
                                        <td>
                                            <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Aksi</span>
                                            </button>
                                            <ul class="dropdown-menu btn-sm">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                            </div>
                                            </td>
                                            <td>{{$absenkemarin->note}}</td>
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
@endsection