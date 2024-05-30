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
            <div class="row justify-content-bettwen">
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
    // Data untuk chart 1
        var data1 = {
            labels: ['Low', 'Medium', 'High'],
            datasets: [{
                data: [0, 2, 1],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Data untuk chart 2
        var data2 = {
            labels: ['Done', 'Active'],
            datasets: [{
                data: [1, 2],
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
        };

        // Data untuk chart 3
        var data3 = {
            labels: ['Black', 'White', 'Gray'],
            datasets: [{
                data: [5, 10, 15],
                backgroundColor: [
                    'rgba(0, 0, 0, 0.2)',
                    'rgba(255, 255, 255, 0.2)',
                    'rgba(128, 128, 128, 0.2)'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 1)',
                    'rgba(255, 255, 255, 1)',
                    'rgba(128, 128, 128, 1)'
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
    </script>
    @include('dokter.footerDokter')
