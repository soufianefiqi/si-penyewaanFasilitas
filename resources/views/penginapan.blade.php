@extends('layout.main')
@section('content') 
    <section id="main">
      <!-- ======= Featured Services Section ======= -->
      <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-md-6 ">
              <h2>DORMITORY</h2>
              <p>NICT UIN Syarif Hidayatullah Jakarta menyediakan fasilitas penginapan/dormitory kelas standar dan kelas VIP</p>
 
              <a href="{{url('/form_inap')}}"><button type="button" class="btn btn-info rounded-pill">Pesan Sekarang</button></a>
            </div>
            <div class="col-md-6 mt-1">
                <div class="card" style="width: 30rem">
                <div id="feature">
                <div class="owl-carousel owl-theme">
                  <div class="item"><img class="card-img-top" src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/02/DSC_5740-Edited.jpg" alt="Card image cap" /></div>
                  <div class="item"><img class="card-img-top" src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/02/DSC_5732-Edited.jpg" alt="Card image cap" /></div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md ">
             <h2 class="text-center">KAMAR</h2>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6 ">
                <div class="card" style="width: 30rem">
                <img class="card-img-top" src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/02/DSC_5740-Edited.jpg" alt="Card image cap" />
            </div>
            </div>
            <div class="col-md-6 mt-1">
                <div class="card" style="width: 30rem">
                <img class="card-img-top"src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/02/DSC_5732-Edited.jpg" alt="Card image cap" />
            </div>
            </div>
          </div>
          <div class="row mt-3">
              <div class="col-md-6">
                  <h3>Kamar VIP</h3>
                  <p>Fasilitas</p>
                  <ul>
                      <li>Kamar VIP (Bed Besar)</li>
                      <li>Meja dan kursi belajar</li>
                      <li>Lemari</li>
                      <li>Kamar mandi (air hangat)</li>
                      <li>Pesawat telepon</li>
                      <li>Pendingin ruangan</li>
                      <li>Ruang belajar bersama</li>
                      <li>Jasa Laundry</li>
                      <li>Akses Internet</li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3>Kamar Standar</h3>
                <p>Fasilitas</p>
                <ul>
                    <li>Kamar standar kapasitas 2 orang</li>
                    <li>Kamar standar kapasitas 4 orang (ranjang tingkat)</li>
                    <li>Meja dan kursi belajar</li>
                    <li>Lemari</li>
                    <li>Kamar mandi (air hangat)</li>
                    <li>Pesawat telepon</li>
                    <li>Pendingin ruangan</li>
                    <li>Ruang belajar bersama</li>
                    <li>Jasa Laundry</li>
                    <li>Akses Internet</li>
                </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Featured Services Section -->
    </main>
    <!-- End #main -->
    @endsection

  