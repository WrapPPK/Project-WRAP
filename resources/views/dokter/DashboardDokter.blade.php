@include('dokter.headerDokter')
    @include('dokter.sidebar&navbar')
        <div class="main p-3">
            <dir class="board" style="margin-top:70px;">
                <div class="breadcrums">
                    <h1>Welcome Doctor</h1>
                    @if (Auth::guard('doctor')->check())
                    <h4>{{ Auth::guard('doctor')->user()->name }}</h4>
                    @endif
                </div>
            </dir>
            
            <div class="row justify-content-bettwen">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center p-3">
                            <h5 class="card-title">Condition Patient Data</h5>
                            <canvas id="kondisiChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center p-3">
                            <h5 class="card-title">Active Patient Data</h5>
                            <canvas id="statusChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <dir class="board">
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

                            <td class="active align-items-center"><p>{{$data->status}}</p></td>

                            <td class="info"><a href="{{ route('pasiens.info', ['id' => $data->id]) }}"><p>Info</p></a></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btnEdit" onclick="location.href='{{ route('pasiens.edit', ['id' => $data->id]) }}'">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>

                                    <form action="{{ route('pasiens.destroy', ['id' => $data->id]) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btnDel">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </dir>
        </div>
    </div>


    <script>
        function updateStatus() {
            const selectElement = document.getElementById('status-select');
            const statusDisplay = document.getElementById('status-display');
            const selectedValue = selectElement.value;

            if (selectedValue === 'active') {
                statusDisplay.textContent = 'Active';
                statusDisplay.className = 'status-box status-active';
            } else if (selectedValue === 'non-active') {
                statusDisplay.textContent = 'Non Active';
                statusDisplay.className = 'status-box status-non-active';
            }

            statusDisplay.style.display = 'inline-block';
        }
    </script>

    <script>
        // Donut Chart untuk Active Patient Data
        var ctx2 = document.getElementById('statusChart').getContext('2d');
        var statusChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($statusLabels); ?>,
                datasets: [{
                    label: 'Patient Status',
                    data: <?php echo json_encode($statusData); ?>,
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        
         // Donut Chart untuk Condition Patient Data
        var ctx1 = document.getElementById('kondisiChart').getContext('2d');
        var kondisiChart = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($kondisiLabels); ?>,
                datasets: [{
                    label: 'Patient Condition',
                    data: <?php echo json_encode($kondisiData); ?>,
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)', // warna untuk 'low'
                        'rgba(255, 206, 86, 0.2)', // warna untuk 'medium'
                        'rgba(255, 99, 132, 0.2)'  // warna untuk 'high'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)', // warna border untuk 'low'
                        'rgba(255, 206, 86, 1)', // warna border untuk 'medium'
                        'rgba(255, 99, 132, 1)'  // warna border untuk 'high'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>
    @include('dokter.footerDokter')
