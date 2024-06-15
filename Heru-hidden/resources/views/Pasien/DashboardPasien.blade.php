@include('Pasien.headerPasien')
@include('Pasien.sidebar&navbar')
<div class="main p-3">
    <dir class="board" style="margin-top:70px;">
        <div class="breadcrums">
            <h1>Welcome,</h1>
            @if (Auth::guard('pasien')->check())
                <h4>{{ Auth::guard('pasien')->user()->name }}</h4>
            @endif
        </div>
    </dir>
    <dir class="board">
        <div class="textheadertable" style="padding:20px;">
            <div id="test" style="float:left;">
                <h1>Control Patient</h1>
            </div>
                <div style="float:right;">
                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal1()">+ Tambah Waktu Minum</button>
                </div>
                <div style="float:right; padding-right:10px;">
                    @php
                        $currentPasien = Auth::guard('pasien')->user();
                    @endphp
                    @if ($currentPasien)
                        <a class="btn btn-primary" href="{{ route('pasiens.pengingat', ['id' => $currentPasien->id]) }}">Catatan Dokter</a>
                    @endif
                </div>
            <div style="clear:both;"></div>
        </div>
        @php
            $pasien = Auth::guard('pasien')->user();
            $data = $pasien->waktuMinum()->first();
        @endphp
        @if($data)
        <table width="100%" class="text-center">
            <thead>
                <tr>
                    <td>Hari</td>
                    <td>Jam 1</td>
                    <td>Jam 2</td>
                    <td>Jam 3</td>
                    
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td>Hari 1</td>
                        <td>
                            <div class="row">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum1 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum1 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum1 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal2()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum2 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum2 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum2 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal2()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum3 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum3 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum3 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal3()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <!-- hari 2 -->
                        <td>Hari 2</td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum4 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum4 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum4 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal4()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum5 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum5 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum5 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal5()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum6 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum6 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum6 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal6()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <!-- hari 3 -->
                        <td>Hari 3</td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum7 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum7 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum7 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal7()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum8 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum8 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum8 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal8()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum9 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum9 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum9 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal9()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- hari 4 -->
                        <td>Hari 4</td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum10 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum10 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum10 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal10()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum11 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum11 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum11 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal11()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum12 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum12 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum12 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal12()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <!-- hari 5 -->
                        <td>Hari 5</td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum13 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum13 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum13 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal13()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum14 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum14 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum14 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal14()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum15 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum15 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum15 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal15()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <!-- hari 6 -->
                        <td>Hari 6</td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum16 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum16 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum16 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal16()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum17 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum17 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum17 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal17()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum18 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum18 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum18 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal18()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <!-- hari 7 -->
                        <td>Hari 7</td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum19 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum19 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum19 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal19()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum20 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum20 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum20 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal20()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ $data->bukti_minum21 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                    <p class="mb-0">{{ $data->sudah_minum21 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum21 }}</p>
                                    <button type="button" class="btn btn-primary" onclick="showTambahWaktuMinumModal21()">+ Tambah Waktu Minum</button>
                                </div>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
        @else
            <p>No data available.</p>
        @endif
    </dir>
</div>



<!-- HARI 1 -->
<!-- Modal 1 -->
<div class="modal fade" id="tambahWaktuMinumModal1" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm1" method="POST" action="{{ route('waktu_minum.store') }}" class="form-valid" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="hariWaktuMinum" class="form-label">Hari Minum</label>
                        <input type="text" name="hari1" class="form-control" id="hariWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalMinum" class="form-label">Tanggal Minum</label>
                        <input type="date" name="tanggal_minum1" class="form-control" id="tanggalMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum1" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum1" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum1" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="tambahWaktuMinumModal2" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm2" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum2" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum2" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum2" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="tambahWaktuMinumModal3" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm3" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum3" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum3" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum3" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- HARI 2 -->
<!-- Modal 2 -->
<div class="modal fade" id="tambahWaktuMinumModal4" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm4" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="hariWaktuMinum" class="form-label">Hari Minum</label>
                        <input type="text" name="hari2" class="form-control" id="hariWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalMinum" class="form-label">Tanggal Minum</label>
                        <input type="date" name="tanggal_minum2" class="form-control" id="tanggalMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum4" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum4" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum4" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="tambahWaktuMinumModal5" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm5" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum5" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum5" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum5" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="tambahWaktuMinumModal6" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm6" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum6" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum6" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum6" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- HARI 3-->
<!-- Modal 3 -->
<div class="modal fade" id="tambahWaktuMinumModal7" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm7" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="hariWaktuMinum" class="form-label">Hari Minum</label>
                        <input type="text" name="hari3" class="form-control" id="hariWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalMinum" class="form-label">Tanggal Minum</label>
                        <input type="date" name="tanggal_minum3" class="form-control" id="tanggalMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum7" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum7" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum7" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="tambahWaktuMinumModal8" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm8" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum8" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum8" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum8" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="tambahWaktuMinumModal9" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm9" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum9" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum9" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum9" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- HARI 4-->
<!-- Modal 4 -->
<div class="modal fade" id="tambahWaktuMinumModal10" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm10" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="hariWaktuMinum" class="form-label">Hari Minum</label>
                        <input type="text" name="hari4" class="form-control" id="hariWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalMinum" class="form-label">Tanggal Minum</label>
                        <input type="date" name="tanggal_minum4" class="form-control" id="tanggalMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum10" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum10" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum10" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="tambahWaktuMinumModal11" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm11" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum11" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum11" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum11" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="tambahWaktuMinumModal12" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm12" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum12" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum12" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum12" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- HARI 5-->
<!-- Modal 5 -->
<div class="modal fade" id="tambahWaktuMinumModal13" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm13" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="hariWaktuMinum" class="form-label">Hari Minum</label>
                        <input type="text" name="hari5" class="form-control" id="hariWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalMinum" class="form-label">Tanggal Minum</label>
                        <input type="date" name="tanggal_minum5" class="form-control" id="tanggalMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum13" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum13" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum13" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="tambahWaktuMinumModal14" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm14" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum14" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum14" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum14" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="tambahWaktuMinumModal15" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm15" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum15" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum15" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum15" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- HARI 6-->
<!-- Modal 6 -->
<div class="modal fade" id="tambahWaktuMinumModal16" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm16" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="hariWaktuMinum" class="form-label">Hari Minum</label>
                        <input type="text" name="hari6" class="form-control" id="hariWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalMinum" class="form-label">Tanggal Minum</label>
                        <input type="date" name="tanggal_minum6" class="form-control" id="tanggalMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum16" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum16" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum16" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="tambahWaktuMinumModal17" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm17" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum17" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum17" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum17" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="tambahWaktuMinumModal18" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm18" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum18" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum18" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum18" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- HARI 7-->
<!-- Modal 7 -->
<div class="modal fade" id="tambahWaktuMinumModal19" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm19" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="hariWaktuMinum" class="form-label">Hari Minum</label>
                        <input type="text" name="hari7" class="form-control" id="hariWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalMinum" class="form-label">Tanggal Minum</label>
                        <input type="date" name="tanggal_minum7" class="form-control" id="tanggalMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum19" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum19" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum19" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="tambahWaktuMinumModa20" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm20" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum20" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum20" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum20" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="tambahWaktuMinumModal21" tabindex="-1" aria-labelledby="tambahWaktuMinumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahWaktuMinumModalLabel">Tambah Waktu Minum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahWaktuMinumForm21" method="POST" action="{{ route('waktu_minum.update', ['id' => Auth::guard('pasien')->user()->id]) }}   " class="form-valid" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('pasien')->user()->id }}">
                    <div class="mb-3">
                        <label for="sudahMinum" class="form-label">Sudah Minum Obat?</label>
                        <select name="sudah_minum21" class="form-select" id="sudahMinum" required>
                            <option value="1">Ya</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="WaktuMinum" class="form-label">Waktu Minum</label>
                        <input type="time" name="waktu_minum21" class="form-control" id="tanggalWaktuMinum" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_minum" class="form-label">Bukti Minum</label>
                        <input type="file" name="bukti_minum21" id="bukti_minum" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript -->

<!-- Hari 1 -->
<script>
    function showTambahWaktuMinumModal1() {
        $('#tambahWaktuMinumModal1').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal1').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal2() {
        $('#tambahWaktuMinumModal2').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal2').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal3() {
        $('#tambahWaktuMinumModal3').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal3').modal('hide');
    }
</script>



<!-- Hari 2 -->
<script>
    function showTambahWaktuMinumModal4() {
        $('#tambahWaktuMinumModal4').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal4').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal5() {
        $('#tambahWaktuMinumModal5').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal5').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal6() {
        $('#tambahWaktuMinumModal6').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal6').modal('hide');
    }
</script>



<!-- Hari 3 -->
<script>
    function showTambahWaktuMinumModal7() {
        $('#tambahWaktuMinumModal7').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal7').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal8() {
        $('#tambahWaktuMinumModal8').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal8').modal('hide');
    }
</script>


<script>
    function showTambahWaktuMinumModal9() {
        $('#tambahWaktuMinumModal9').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal9').modal('hide');
    }
</script>



<!-- Hari 4 -->
<script>
    function showTambahWaktuMinumModal10() {
        $('#tambahWaktuMinumModal10').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal10').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal11() {
        $('#tambahWaktuMinumModal11').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal11').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal12() {
        $('#tambahWaktuMinumModal12').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal12').modal('hide');
    }
</script>


<!-- hari 5 -->
<script>
    function showTambahWaktuMinumModal13() {
        $('#tambahWaktuMinumModal13').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal13').modal('hide');
    }
</script>


<script>
    function showTambahWaktuMinumModal14() {
        $('#tambahWaktuMinumModal14').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal14').modal('hide');
    }
</script>


<script>
    function showTambahWaktuMinumModal15() {
        $('#tambahWaktuMinumModal15').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal15').modal('hide');
    }
</script>


<!-- hari ke 6 -->

<script>
    function showTambahWaktuMinumModal16() {
        $('#tambahWaktuMinumModal16').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal16').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal17() {
        $('#tambahWaktuMinumModal17').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal17').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal18() {
        $('#tambahWaktuMinumModal18').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal18').modal('hide');
    }
</script>

<!-- Hari 7 -->
<script>
    function showTambahWaktuMinumModal19() {
        $('#tambahWaktuMinumModal19').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal19').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal20() {
        $('#tambahWaktuMinumModal20').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal20').modal('hide');
    }
</script>

<script>
    function showTambahWaktuMinumModal21() {
        $('#tambahWaktuMinumModal21').modal('show');
    }

    function submitForm() {
        // Lakukan validasi formulir dan kirim data ke server
        // Misalnya menggunakan AJAX
        // Setelah berhasil, tutup modal
        $('#tambahWaktuMinumModal21').modal('hide');
    }
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>