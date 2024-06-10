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
    <div class="container-fluid" style="margin-top: 50px; margin-bottom: 150px">
        <div class="container mx-auto">
            <div class="card border-0 shadow border-radius">
                <h2 class="text-center pt-5">Info Data Pasien</h2>
                <div class="card-body">
                    <form action="#" method="POST" class="form-valid" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <!-- <input value="{{$pasien->name}}" type="text" name="name" id="inputnamaLengkap" class="form-control" required> -->
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
                                <label for="inputpassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <input value="" type="password" readonly name="password" id="inputpassword" class="form-control">
                                    <span class="input-group-text icon" id="id_icon"><i class="fa-regular fa-eye"></i></span>
                                </div>
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
                            <div class="col-md-4">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status"  class="form-select" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px; pointer-events: none; touch-action: none;">
                                    <option value="" {{$pasien->status == '' ? 'selected' : ''}}>Choose Here</option>
                                    <option value="Active" {{$pasien->status == 'Active' ? 'selected' : ''}}>Active</option>
                                    <option value="Done" {{$pasien->status == 'Done' ? 'selected' : ''}}>Done</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pt-5 pb-5">
                            <div class="col-md-12 d-flex justify-content-center">
                                <a href="/download-excel/{{ $pasien->id }}" class="btn btn-success btn-block">Download Excel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card border-0 shadow border-radius" style="margin-top: 30px;">
                <div class="container">
                    <h2 class="text-center pt-3">Upload Data Kepatuhan</h2>
                    <form method="POST" action="{{ route('uploadCsv') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="file" class="mx-1">Upload File Excel:</label>
                            <input type="file" class="form-control mt-2 mb-4" id="file" name="file" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Upload</button>
                    </form>
                
                    @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                
                    @if(session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif
                
                    @if(session('complianceData'))
                        <div class="mt-5">
                            <h2>Compliance Data</h2>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Hari</th>
                                        <th>Tanggal Minum</th>
                                        <th>Persentase Kepatuhan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalDays = count(session('complianceData'));
                                        $totalPercentage = 0;
                                    @endphp
                                    @foreach(session('complianceData') as $data)
                                        @php
                                            $totalPercentage += $data['Persentase Kepatuhan'];
                                        @endphp
                                        <tr>
                                            <td>{{ $data['Hari'] }}</td>
                                            <td>{{ $data['Tanggal'] }}</td>
                                            <td>{{ $data['Persentase Kepatuhan'] }}%</td>
                                        </tr>
                                    @endforeach
                                    @php
                                        $averageCompliance = $totalDays ? $totalPercentage / $totalDays : 0;
                                        $complianceStatus = $averageCompliance >= 80 ? 'Patuh' : 'Tidak Patuh';
                                    @endphp
                                </tbody>
                            </table>
                            <div class="mt-3">
                                <h4>Status Kepatuhan: {{ $complianceStatus }}</h4>
                                <p>Total Hari: {{ $totalDays }}</p>
                                <p>Rata-rata Persentase Kepatuhan: {{ number_format($averageCompliance, 2) }}%</p>
                            </div>
                        </div>
                    @endif
                </div>                                      
                <!-- Modal -->
                <div class="modal fade" id="kepatuhanModal" tabindex="-1" aria-labelledby="kepatuhanModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="kepatuhanModalLabel">Medication Adherence</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="medicationTimes"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                    integrity="sha384-oBqDVmMz4fnFO9gybBogGzU6legyJ8/Y7D2RzA7zmObpdtIfl5Wc5c5Exnb1Anwf" crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                    integrity="sha384-QF1FQeQRd+8ZtCp0BtxNBKhqIMrfSJpXU1p4OmJxKOxKhOg4kXvi7CFOBjcBQxaE" crossorigin="anonymous">
                </script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

                <script>
                    $(document).ready(function () {
                        $('[data-bs-toggle="modal"]').on('click', function () {
                            var pasienId = $(this).data('pasien-id');
                            $.ajax({
                                url: '/kepatuhan/' + pasienId,
                                method: 'GET',
                                success: function (response) {
                                    if (response.error) {
                                        $('#medicationTimes').html('<p>' + response.error + '</p>');
                                    } else {
                                        var medicationTimesHtml = '<ul>';
                                        response.medicationTimes.forEach(function (time) {
                                            medicationTimesHtml += '<li>' + time + '</li>';
                                        });
                                        medicationTimesHtml += '</ul>';
                                        $('#medicationTimes').html(medicationTimesHtml);
                                    }
                                }
                            });
                        });
                    });
                </script>
                <script>
                    $(document).ready(function() {
                        $('#uploadForm').on('submit', function(event) {
                            event.preventDefault();
                            var formData = new FormData(this);
                            $.ajax({
                                url: 'http://localhost:5000/api/compliance',
                                type: 'POST',
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    var resultHtml = '<ul>';
                                    $.each(response, function(patient_id, compliance_percentage) {
                                        resultHtml += '<li>Persentase kepatuhan pasien ' + patient_id + ': ' + compliance_percentage + '%</li>';
                                    });
                                    resultHtml += '</ul>';
                                    $('#result').html(resultHtml);
                                },
                                error: function(response) {
                                    $('#result').html('<p class="text-danger">Error: ' + response.responseJSON.error + '</p>');
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</body>

</html>
