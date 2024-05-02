@include('dokter.header')
<div class="col-lg-1 sidebar" style="background-color:rgba(243, 249, 251, 1);">
    <a class="navbar-brand me-auto" href="/dashboard">
        <img src="images/RespiraCareLogo-noBG.png" alt="RespiraCare Logo" style="width: 150px; height: auto;  ">
    </a>
  <center>
  <div class="p-4">

    <ul style="padding-top:570px;">
      <li><a href="#"><i class="fas fa-cog" style="color: rgba(34, 101, 151, 1);  font-size:25px;"></i></a></li>
      <li><a href="/logout"><i class="fas fa-sign-out-alt" style="color: rgba(34, 101, 151, 1);  font-size:25px;"></i></a></li>
    </ul>
  </div>
  </center>
</div>
@include('dokter.footer')
