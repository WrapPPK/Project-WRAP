<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pasien</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- CSS -->
    <link href="css/bodyStyle.css" rel="stylesheet">

    <!-- Chart Donut -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>

    <!-- Chart Garis -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/6.7.0/d3.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboardDoctor">RespiraCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <form action="/logout" method="POST">
                @csrf
            </form>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 100px; margin-bottom: 150px">
        <div class="container mx-auto">
            <div class="card border-0 shadow border-radius">
                <h2 class="text-center pt-5">Info Data Pasien</h2>
                <div class="card-body">
                    <form action="#" method="POST" class="form-valid" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputnamaLengkap" class="form-label">Name</label>
                                <input value="{{$pasien->name}}" type="text" name="name" id="inputnamaLengkap"
                                    class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="inputemail" class="form-label">Email</label>
                                <input value="{{$pasien->email}}" readonly type="email" name="email" id="inputemail" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="nama_obat" class="form-label">Medicine Name</label>
                                <input type="text" value="{{$pasien->nama_obat}}" readonly name="nama_obat" id="nama_obat" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputUmur"  class="form-label">Age</label>
                                <input value="{{$pasien->age}}" readonly type="text" name="age" id="inputUmur" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="gender"  class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-select" style="pointer-events: none; touch-action: none;">
                                    <option value="" {{$pasien->gender == '' ? 'selected' : ''}}>Pilih</option>
                                    <option value="Laki-laki" {{$pasien->gender == 'Laki-laki' ? 'selected' : ''}}>Man</option>
                                    <option value="Perempuan" {{$pasien->gender == 'Perempuan' ? 'selected' : ''}}>Woman</option>
                                    <option value="other" {{$pasien->gender == 'other' ? 'selected' : ''}}>Other</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPenyakit" class="form-label">Disease</label>
                                <input value="{{$pasien->disease}}" readonly type="text" name="disease" id="inputPenyakit" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputLamaMinumObat" class="form-label">Time to take medicine</label>
                                <input value="{{$pasien->time_to_take_medicine}}" readonly type="text" name="time_to_take_medicine" id="inputLamaMinumObat"
                                    class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputObatSehari" class="form-label">Time to take medication (/day)</label>
                                <select name="medication_times"  id="inputObatSehari" class="form-control"
                                    style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px; pointer-events: none; touch-action: none;">
                                    <option value="" {{$pasien->medication_times == '' ? 'selected' : ''}}>Choose Here</option>
                                    <option value="1" {{$pasien->medication_times == '1' ? 'selected' : ''}}>1</option>
                                    <option value="2" {{$pasien->medication_times == '2' ? 'selected' : ''}}>2</option>
                                    <option value="3" {{$pasien->medication_times == '3' ? 'selected' : ''}}>3</option>
                                </select>
                            </div>
                            <div class="col-md-4" style="padding-bottom:50px">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status"  class="form-select" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px; pointer-events: none; touch-action: none;">
                                    <option value="" {{$pasien->status == '' ? 'selected' : ''}}>Choose Here</option>
                                    <option value="Active" {{$pasien->status == 'Active' ? 'selected' : ''}}>Active</option>
                                    <option value="Done" {{$pasien->status == 'Done' ? 'selected' : ''}}>Done</option>
                                </select>
                            </div>
                        </div>
                            @php
                               
                                $data = $pasien->waktuMinum()->first();
                            @endphp

                            @if($data)
                            <table width="100%" class="table table-bordered text-center" >
                                <thead>
                                     <tr>
                                        <td colspan="4" style="font-size:20px;font-weight:bold;">Riwayat Minum Pasien</td>
                                    </tr>
                                    <tr>
                                        <td>Hari</td>
                                        <td>Jam 1</td>
                                        <td>Jam 2</td>
                                        <td>Jam 3</td>
                                        
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                        <tr>
                                            <td>Hari 1</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum1 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum1 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum1 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum2 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum2 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum2 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum3 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum3 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum3 }}</p>
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
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum5 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum5 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum5 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum6 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum6 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum6 }}</p>
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
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum8 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum8 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum8 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum9 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum9 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum9 }}</p>
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
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum11 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum11 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum11 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum12 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum12 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum12 }}</p>
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
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum14 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum14 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum14 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum15 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum15 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum15 }}</p>
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
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum17 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum17 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum17 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum18 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum18 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum18 }}</p>
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
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum20 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum20 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum20 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                                        <img src="{{ $data->bukti_minum21 }}" alt="No Data" class="img-fluid" style="width: 200px; height: auto; border-radius: 0;">
                                                        <p class="mb-0">{{ $data->sudah_minum21 ? 'Sudah' : 'Belum' }} minum pada {{ $data->waktu_minum21 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            @else
                                <p>No data available.</p>
                            @endif
                        </tbody>
                        </table>
                        <div class="row pt-2 pb-5">
                            <div class="col-md-12 d-flex justify-content-center">
                                <a href="/download-json/{{ $pasien->id }}" class="btn btn-success btn-block">
                                    Download JSON
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
