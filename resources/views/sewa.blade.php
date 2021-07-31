@extends('layout.main')
@section('content') 
    <section id="main">
      <!-- ======= Featured Services Section ======= -->
      <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-md-6 ">
              <h2>AUDITORIUM</h2>
              <p>Fasilitas auditorium untuk keperluan pertemuan, seminar, pernikahan, pameran, pelantikan dan wisuda.</p>
              <a href="{{url('form_sewa')}}"><button type="button" class="btn btn-info rounded-pill">Pesan Sekarang</button></a>
            </div>
            <div class="col-md-6 mt-1">
                <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/02/@ruangauditorium-1.jpg" alt="Card image cap">
                </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6 ">
              <h2>LABORATURIUM</h2>
              <p>Fasilitas laboratorium komputer dapat menunjang kegiatan pengembangan bidang teknologi informasi</p>
              <a href="{{url('form_sewa')}}"><button type="button" class="btn btn-info rounded-pill">Pesan Sekarang</button></a>
            </div>
            <div class="col-md-6 mt-1">
                <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/02/@ruangauditorium-1.jpg" alt="Card image cap">
                </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6 ">
              <h2>MEETINGS</h2>
              <p>Menyediakan fasilitas ruangan dan perlengkapan untuk keperluan kegiatan rapat, sidang dan seminar.</p>
              <a href="{{url('form_sewa')}}"><button type="button" class="btn btn-info rounded-pill">Pesan Sekarang</button></a>
            </div>
            <div class="col-md-6 mt-1">
                <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/02/@ruangauditorium-1.jpg" alt="Card image cap">
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Featured Services Section -->
    </main>
    <!-- End #main -->
    @endsection

   