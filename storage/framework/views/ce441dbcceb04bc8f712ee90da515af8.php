<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pasien</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <a class="navbar-brand" href="/dashboardDoctor">RespiraCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <form action="/logout" method="POST">
                <?php echo csrf_field(); ?>
                
            </form>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 50px; margin-bottom: 150px">
        <div class="container mx-auto">
            <div class="card border-0 shadow border-radius">
                <h2 class="text-center pt-5">Info Data Pasien</h2>
                <div class="card-body">
                    <form action="#" method="POST" class="form-valid" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputnamaLengkap" class="form-label">Name</label>
                                <!--  -->
                                <input value="<?php echo e($pasien->name); ?>" type="text" name="name" id="inputnamaLengkap"
                                    class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputemail" class="form-label">Email</label>
                                <input value="<?php echo e($pasien->email); ?>" type="email" name="email" id="inputemail" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputpassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <input value="" type="password" name="password" id="inputpassword" class="form-control">
                                    <span class="input-group-text icon" id="id_icon"><i class="fa-regular fa-eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputUmur" class="form-label">Age</label>
                                <input value="<?php echo e($pasien->age); ?>" type="text" name="age" id="inputUmur" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-select" required>
                                    <option value="" <?php echo e($pasien->gender == '' ? 'selected' : ''); ?>>Pilih</option>
                                    <option value="Laki-laki" <?php echo e($pasien->gender == 'Laki-laki' ? 'selected' : ''); ?>>Man</option>
                                    <option value="Perempuan" <?php echo e($pasien->gender == 'Perempuan' ? 'selected' : ''); ?>>Woman</option>
                                    <option value="other" <?php echo e($pasien->gender == 'other' ? 'selected' : ''); ?>>Other</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPenyakit" class="form-label">Desease</label>
                                <input value="<?php echo e($pasien->disease); ?>" type="text" name="disease" id="inputPenyakit" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputLamaMinumObat" class="form-label">Time to take medicine</label>
                                <input value="<?php echo e($pasien->time_to_take_medicine); ?>" type="text" name="time_to_take_medicine" id="inputLamaMinumObat"
                                    class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputObatSehari" class="form-label">time to take medication (/day)</label>
                                <select name="medication_times" id="inputObatSehari" class="form-control"
                                    style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;"
                                    onchange="showHideTimeInput()">
                                    <option value="" <?php echo e($pasien->medication_times == '' ? 'selected' : ''); ?>>Choose Here</option>
                                    <option value="1" <?php echo e($pasien->medication_times == '1' ? 'selected' : ''); ?>>1</option>
                                    <option value="2" <?php echo e($pasien->medication_times == '2' ? 'selected' : ''); ?>>2</option>
                                    <option value="3" <?php echo e($pasien->medication_times == '3' ? 'selected' : ''); ?>>3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputStatus" class="form-label">Status</label>
                                <select name="status" id="inputStatus" class="form-control"
                                    style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;">
                                    <option value="" <?php echo e($pasien->status == '' ? 'selected' : ''); ?>>Choose Here</option>
                                    <option value="Active" <?php echo e($pasien->status == 'Active' ? 'selected' : ''); ?>>Active</option>
                                    <option value="Done" <?php echo e($pasien->status == 'Done' ? 'selected' : ''); ?>>Done</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputLevel" class="form-label">Level</label>
                                <select name="level" id="inputLevel" class="form-control"
                                    style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;">
                                    <option value="" <?php echo e($pasien->level == '' ? 'selected' : ''); ?>>Choose Here</option>
                                    <option value="Low" <?php echo e($pasien->level == 'Low' ? 'selected' : ''); ?>>Low</option>
                                    <option value="Medium" <?php echo e($pasien->level == 'Medium' ? 'selected' : ''); ?>>Medium</option>
                                    <option value="High" <?php echo e($pasien->level == 'High' ? 'selected' : ''); ?>>High</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pt-5" id="timeInputs" style="display: none;">
                            
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-12">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-md text-light"style="background-color: #ff0000" onclick="#">
                                        Kepatuhan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h3>Waktu Minum</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Sudah Minum</th>
                    <th>Bukti</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $waktuMinum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $waktu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($waktu->hari); ?></td>
                        <td><?php echo e($waktu->sudah_minum ? 'Sudah' : 'Belum'); ?></td>
                        <td>
                            <?php if($waktu->bukti_minum): ?>
                                <a href="<?php echo e(asset('storage/' . $waktu->bukti_minum)); ?>" target="_blank">
                                    <img src="<?php echo e(asset('storage/' . $waktu->bukti_minum)); ?>" alt="Bukti Minum" style="max-width: 100px;">
                                </a>
                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showHideTimeInput() {
            var selectedValue = parseInt(document.getElementById("inputObatSehari").value);
            var timeInputsDiv = document.getElementById("timeInputs");

            // Menghapus semua input waktu yang ada sebelum menambah yang baru
            timeInputsDiv.innerHTML = "";

            // Menambah input waktu sesuai dengan jumlah yang dipilih
            for (var i = 0; i < selectedValue; i++) {
                var inputTime = document.createElement("div");
                inputTime.classList.add("col-md-4");
                inputTime.innerHTML = `
                    <label for="waktu${i+1}">Jam Minum ${i+1}:</label>
                    <input type="time" id="waktu${i+1}" name="waktu${i+1}">
                `;
                timeInputsDiv.appendChild(inputTime);
            }

            // Menampilkan atau menyembunyikan div input waktu
            if (selectedValue === 0) {
                timeInputsDiv.style.display = "none";
            } else {
                timeInputsDiv.style.display = "block";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Project WRAP\resources\views/dokter/infoPasien.blade.php ENDPATH**/ ?>