@include('dokter.header')
<div class="container-fluid d-flex flex-column">
    <div class="row flex-grow-1">
        @include('dokter.sideBarKiri')
        <div class="col-lg-7">
            <div class="p-3">
                <div class="row row-cols-2" style="padding-top:30px;">
                    <div class="col-lg-6">
                        <h2>Patient List</h2>
                    </div>
                    <div class="col-lg-6" style="font-size: 25px; display: flex; align-items: center; padding-left:55px;">
                        <span style="margin-right: 10px;">Heru Iksan Maulana</span>
                        <span style="margin-right: 10px; padding-right:20px;">Sp.p</span>
                        <span><i class="far fa-user-circle" style="font-size: 50px;"></i></span>
                    </div>
                    <div class="col-lg-6" style="width: 100%; padding-top:30px;">
                        <!-- Menggunakan CSS untuk memperbesar btn-group -->
                        <div class="btn-group btn-group-lg" role="group" aria-label="Large button group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-primary btn-custom active" style="width: 50%; border-radius: 50px 0 0 50px;">All Patient</button>
                            <button type="button" class="btn btn-outline-primary btn-custom" style="width: 50%; border-radius: 0 50px 50px 0;">Need Approved</button>
                        </div>
                    </div>
                    <div class="col" style="width: 100%; padding-top:30px;">
                        <!-- Tambahkan ID ke tabel Anda -->
                        <table id="patientTable" class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>
                                        <div class="card" style="width: 100%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); background-color:white;">
                                            <div class="kotakstatus" style="position: absolute; left: 0px; top: 0%; width: 20px; height: 101px; background-color: red; border-radius: 5px 0 0 5px;"></div>
                                            <div class="card-body" style="padding-left:40px;">
                                                <div class="row" style="font-size:13px;">
                                                    <div class="col">
                                                        <p style="margin-bottom: 5px;">Bronkitis</p>
                                                        <p style="margin-bottom: 5px; color:red;">High</p>
                                                    </div>
                                                    <div class="col">
                                                        <p style="margin-bottom: 5px;"><i class="far fa-calendar" style="padding-right:5px; color: rgba(34, 101, 151, 1);"></i> 12 March 2999</p>
                                                        <p style="margin-bottom: 5px;"><i class="far fa-clock" style="padding-right:7px; color: rgba(34, 101, 151, 1);"></i>10:00pm/11:00am</p>
                                                    </div>
                                                    <div class="col">
                                                        <p style="margin-bottom: 5px;"></i> Muhammad Risky Farhan</p>
                                                        <p style="margin-bottom: 5px;"><i class="fas fa-phone-alt" style="padding-right:15px; color: rgba(34, 101, 151, 1);"></i>0823123123</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <!-- Tambahkan baris lain di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 info" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); background-color: rgba(243, 249, 251, 1);">
            <div class="p-4">
                <div class="row" style="display: flex; align-items: center;">
                    <img src="images/Dokter10.png" alt="GambarUser" style="width: 120px; height: 100px; object-fit: cover; border-radius: 50%;">
                    <div class="col" style="flex: 1; margin-left: 20px;">
                        <p style="margin-bottom: 5px;"></i> Muhammad Risky Farhan</p>
                        <p style="margin-bottom: 5px;"><i class="fas fa-phone-alt" style="padding-right:15px; color: rgba(34, 101, 151, 1);"></i>0821231231</p>
                    </div>

                    <div id="calendar" style="margin-top: 20px;"></div>
                </div>

                <!-- Tambahkan konten info tambahan di sini -->
            </div>
        </div>
    </div>
</div>

<!-- kalender -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi kalender
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth', // Tampilan awal (bulan)
                events: [
                    // Contoh acara yang dapat ditambahkan ke kalender
                    {
                        title: 'Acara 1',
                        start: '2024-04-18',
                    },
                    {
                        title: 'Acara 2',
                        start: '2024-04-20',
                    }
                ],
                // Anda bisa menambahkan lebih banyak opsi konfigurasi di sini
            });
            calendar.render();
        });
    </script>
<!-- Tambahkan jQuery dan DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


<!-- kalender -->

<script>
// Inisialisasi DataTables untuk tabel dengan ID 'patientTable'
    $(document).ready(function() {
        $('#patientTable').DataTable();
    });
</script>
