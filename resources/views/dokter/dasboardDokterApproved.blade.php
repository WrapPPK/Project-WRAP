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
                            <button type="button" class="btn btn-outline-primary btn-custom" style="width: 50%; border-radius: 50px 0 0 50px;">All Patient</button>
                            <button type="button" class="btn btn-outline-primary btn-custom active" style="width: 50%; border-radius: 0 50px 50px 0;">Need Approved</button>
                        </div>
                    </div>
                    <div class="col" style="width: 100%; padding-top:30px;">
                        <!-- Tambahkan ID ke tabel Anda -->
                        <table id="patientTable" class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>
                                        <div class="card" style="width: 100%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); background-color:white;">
                                            <div class="kotakstatus" style="position: absolute; left: 0px; top: 0%; width: 20px; height: 107px; background-color: red; border-radius: 5px 0 0 5px;"></div>
                                            <div class="card-body" style="padding-left:40px;">
                                                <div class="row" style="font-size:13px;">
                                                    <img src="images/Dokter10.png" alt="GambarUser" style="width: 80px; height: 55px; object-fit: cover; border-radius: 50%;">
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
                    <center>
                        <img src="images/Dokter10.png" alt="GambarUser" style="width: 120px; height: 115px; object-fit: cover; border-radius: 50%;">
                    </center>
                    <div class="col" style="padding-top:50px;">
                        <div class="namaPasien p-2">
                            <h5>Full Name</h5>
                            <input class="form-control" type="text" value="Muhammad Risky Farhan" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="phone p-2">
                            <h5>Phone</h5>
                            <input class="form-control" type="text" value="081232131231" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="gender p-2">
                            <h5>Gender</h5>
                            <input class="form-control" type="text" value="Laki-Laki" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="date p-2">
                            <h5>Date</h5>
                            <input class="form-control" type="text" value="25/03/2999" aria-label="Disabled input example" disabled readonly>
                        </div>
                    </div>                
                </div>
                <div class="p-2">
                    <button type="button" class="btn btn-primary btn-lg" style="width: 100%; margin-bottom: 10px; margin-top:10px; background-color:red;border:none; padding:15px">Decline</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPopup" style="width: 100%;margin-bottom: 20px; margin-top:5px; background-color:green;border:none; padding:15px">Accept</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dokter.popUpPasienDokter')



<script>
    $(document).ready(function() {
    $('#howmanytimeaday').on('change', function() {
        var selectedValue = $(this).val();
        var timeInputs = '';
        for (var i = 0; i < selectedValue; i++) {
            timeInputs += '<input type="time" class="form-control w-100 mt-2" name="when[]">';
        }
        $('#time-inputs').html(timeInputs);
    });
});
</script>


<script>
    // JavaScript
window.onload = function() {
    $('#modalPopup').modal('show');
}

// atau dengan jQuery
$(document).ready(function() {
    $('#modalPopup').modal('show');
});
</script>



<!-- Tambahkan jQuery dan DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    // Inisialisasi DataTables untuk tabel dengan ID 'patientTable'
    $(document).ready(function() {
        $('#patientTable').DataTable();
    });
</script>
