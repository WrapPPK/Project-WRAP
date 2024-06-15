// sidebar
const hamburger = document.querySelector("#toggle-btn");

hamburger.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("expand");
}); 


// Buat cari table
function searchTable() {
    // Mendapatkan nilai input pencarian
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementsByTagName("table")[0]; // Mendapatkan tabel pertama di halaman
    tr = table.getElementsByTagName("tr");
  
    // Iterasi melalui setiap baris tabel, sembunyikan baris yang tidak cocok dengan pencarian
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td");
      for (var j = 0; j < td.length; j++) {
        if (td[j]) {
          txtValue = td[j].textContent || td[j].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            break; // Jika salah satu kolom cocok, tampilkan baris dan lanjutkan ke baris berikutnya
          } else {
            tr[i].style.display = "none"; // Jika tidak ada yang cocok, sembunyikan baris
          }
        }
      }
    }
  }

//   chart
// Asumsikan data akan diambil dari sumber lain
const data = {
    labels: ['Aktif', 'Tidak Aktif', 'Dalam Perawatan'],
    datasets: [{
        data: [60, 20, 20], // Ganti dengan data yang sesuai
        backgroundColor: [
            '#36A2EB',
            '#FF6384',
            '#FFCE56'
        ],
        hoverBackgroundColor: [
            '#36A2EB',
            '#FF6384',
            '#FFCE56'
        ]
    }]
};

// Konfigurasi chart donut
const config = {
    type: 'doughnut',
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom',
            },
            title: {
                display: true,
                text: 'Status Pasien'
            }
        }
    }
};

// Fungsi untuk membuat chart donut
function createDonutChart() {
    const chartCanvas = document.getElementById('donutChart');
    if (chartCanvas) {
        const myChart = new Chart(chartCanvas, config);
    }
}

// Panggil fungsi untuk membuat chart saat halaman dimuat
window.addEventListener('load', createDonutChart);
  