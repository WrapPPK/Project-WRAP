function konfirmasiRegis(){
    event.preventDefault();
    Swal.fire({
        title: 'Konfirmasi data anda',
        text: 'Apakah data sudah benar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed){
            $('.form-valid').submit();
            Swal.fire('Berhasil', 'Data berhasil ditambahkan!', 'register Success');
        }
    })
}
