@extends('layout.main')
@section('content') 
    <section id="main">
      <!-- ======= Featured Services Section ======= -->
      <form action = '{{route("form_inap")}}' method='POST'>
        @csrf
      <section id="form" class="form">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-md-6 ">
              <h3>lengkapi form dibawah ini!</h3>
              <p>*kolom wajib diisi</p>
              <form>
                <div class="form-row">
                  <div class="col">
                    <input type="hidden" name="id" class="form-control" placeholder="">
                    <span  @error('nama_customer')@enderror>Nama* @error('nama_customer'){{$message}}@enderror</span>
                    <input type="text" name="nama_customer" value="{{old('nama_customer')}}" class="form-control" placeholder="">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-5">
              <div class="col-md-6">
                <h3>Informasi Kontak</h3>
              </div>
              </div>
              <div class="row">
            <div class="col-md-6 ">
                <form>
                    <div class="form-row">
                      <div class="col">
                        <span>Nomor Handphone*</span>
                        <input type="text" name="no_telp" class="form-control" placeholder="">
                      </div>
                    </div>
                  </form>
            </div>
            <div class="col-md-6 mt-1">
                <form>
                    <div class="form-row">
                      <div class="col ">
                        <span>Alamat Email*</span>
                        <input type="email" name ="email" aria-describedby="emailHelp" class="form-control" placeholder="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                    </div>
            </div>
          </div>
                <div class="form-group mt-5">
                    <label for="exampleFormControlTextarea1">Alamat*</label>
                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="5"></textarea>
                  </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <form>
                        <div class="form-row">
                          <div class="col">
                            <span>Kota*</span>
                            <input type="text" name="kota" class="form-control" placeholder="">
                          </div>
                        </div>
                      </form>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pesanan*</label>
                            <select class="form-control" name="pesanan" id="exampleFormControlSelect1" aria-placeholder="">
                              <option selected>Tipe Kamar</option>
                              <option>kamar Standard</option>
                              <option>Kamar VIP</option>
                            </select>
                          </div>
                      </form>
                </div>
        </div>
        <div class="d-flex flex-row">
          <div class="p-2">
              <form>
                  <div class="form-row">
                    <div class="col">
                      <span>Check In</span>
                      <input type="date" name="check_in" class="form-control" placeholder="Check In">
                    </div>
                    <div class="col ">
                      <span>Check Out</span>
                      <input type="date" name="check_out" class="form-control" placeholder="Check Out">
                    </div>
                  </div>
                </form>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div class="p-2">
              <form>
                  <div class="form-row">
                    <div class="col">
                      <input type="number" name="tamu" class="form-control" placeholder="Guest">
                    </div>
                    <div class="col">
                      <input type="number" name="kamar" class="form-control" placeholder="Room">
                    </div>
                  </div>
                </form>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-6">
          <form>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Jenis Pembayaran</label>
                <select class="form-control" name="pembayaran" id="exampleFormControlSelect1" aria-placeholder="">
                  <option selected>Jenis Pembayaran</option>
                  <option>Mandiri</option>
                  <option>BNI</option>
                  <option>BCA</option>
                </select>
              </div>
          </form>
          </div>
        </div>
          <a href="{{url('form_inap/create')}}"><button type="submit" class="btn btn-info float-right rounded-pill mt-5">Lanjutkan ke Pembayaran</button></a>
      </form>
      </section>
      <!-- End Featured Services Section -->
    </main>
    <!-- End main -->
  @endsection
