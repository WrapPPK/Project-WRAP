<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pasien</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">


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
<style>
    body {
    font-family: "Outfit", sans-serif;
  }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboardPasien">RespiraCare</a>
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
    <div class="container-fluid" style="margin-top: 100px; margin-bottom: 50px">
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
                                <input type="text" readonly value="{{$pasien->nama_obat}}" name="nama_obat" id="nama_obat" class="form-control" required>
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
                            <h5 style="color:red;">Note: Jangka waktu minum obat {{$pasien->mulai_minum}} hingga {{$pasien->akhir_minum}}</h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
