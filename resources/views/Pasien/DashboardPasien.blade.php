<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Page</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Icon cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- css -->
    <link href="css/bodyStyle.css" rel="stylesheet">

    <!-- Chart Donut-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>

    <!-- Chart garis -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/6.7.0/d3.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="margin-left:75px;">Pasien RespiraCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <form action="/logout" method="POST">
              @csrf
              {{-- <button type="submit" class="btn btn-success border border-white" style="background-color: #c90000">Keluar</button> --}}
            </form>
        </div>
    </nav>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">
                        RespiraCare
                    </a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <!-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li> -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#auth">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#">Profile</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#auth">
                        <i class="lni lni-users"></i>
                        <span>Patient</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboardDoctor#test">List Patient</a>
                        </li>
                    </ul>
                </li> --}}
                <li class="sidebar-item">
                    <a href="logout" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#auth">
                        <i class="lni lni-exit"></i>
                        <span>Log Out</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="logout">Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Log Out</span>
                    </a>
                </li> -->
            </ul>
        </aside>
        <div class="main p-3">
            <!-- <div class="container" style="padding-top:80px;">
                <div class="card border-0 shadow card-bread ">
                    <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                        <h1>Selamat Pagi</h1>
                        <h4>PO Trans Berkah Armada</h4>
                    </div>
                </div>
            </div> -->
            <dir class="board" style="margin-top:70px;">
                <div class="breadcrums">
                    <h1>Welcome.</h1>
                    @if (Auth::guard('pasien')->check())
                    <h4>{{ Auth::guard('pasien')->user()->name }}</h4>
                    @endif
                </div>
            </dir>
            {{-- <div class="row justify-content-bettwen">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center p-3">
                            <h5 class="card-title">Condition Patient Data</h5>
                            <canvas id="donutChart1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center p-3">
                            <h5 class="card-title">Active Patient Data</h5>
                            <canvas id="donutChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <dir class="board">
    <div class="textheadertable" style="padding:20px;">
        <div id="test" style="float:left;">
            <h1>Patient List</h1>
            <input type="text" id="searchInput" placeholder="Search for names.." onkeyup="searchTable()">
        </div>
        <div style="float:right; margin-top:10px;">
            <button type="button" class="btn btn-primary" onclick="location.href='/tambahPasien'">+ Tambah</button>
        </div>
        <div style="clear:both;"></div>
    </div>
    <table width="100%">
        <thead>
            <tr>
                <td>Name Patient</td>
                <td>Desease</td>
                <td>Status</td>
                <td>Info</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @php
                $data = App\Models\Pasien::all();
            @endphp
            @foreach ($data as $key => $data)
            <tr>
                <td class="people">
                    <img src="{{$data->photo}}" alt="">
                    <div class="people-de">
                        <h5>{{$data->name}}</h5>
                        <p>{{$data->email}}</p>
                    </div>
                </td>
                <td class="people-des">
                    <h5>{{$data->disease}}</h5>
                    <p>{{$data->level}}</p>
                </td>

                <td class="active"><p>{{$data->status}}</p></td>

                <td class="info"><a href="{{ route('pasiens.info', ['id' => $data->id]) }}"><p>Info</p></a></td>
                <td>
                    <button class="button" onclick="location.href='{{ route('pasiens.edit', ['id' => $data->id]) }}'"><i class="fas fa-pencil-alt"></i></button>
                    <form action="{{ route('pasiens.destroy', ['id' => $data->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="buttonDel"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</dir> --}}

        </div>
    </div>

    {{-- <script>
        // Data untuk chart 1
        var data1 = {
            labels: ['High', 'Low', 'Medium'],
            datasets: [{
                data: [{{ $high }}, {{ $low }}, {{ $medium }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Data untuk chart 2
        var data2 = {
            labels: ['Active', 'Done'],
            datasets: [{
                data: [{{ $active }}, {{ $done }}],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        };



        // Membuat chart 1
        var ctx1 = document.getElementById('donutChart1').getContext('2d');
        var myChart1 = new Chart(ctx1, {
            type: 'doughnut',
            data: data1,
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Membuat chart 2
        var ctx2 = document.getElementById('donutChart2').getContext('2d');
        var myChart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: data2,
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
</body>
</html>
