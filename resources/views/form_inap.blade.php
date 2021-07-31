@extends('layout.main')
@section('content') 
    <section id="main">
      @if ($message = Session::get('message'))
    <input type="hidden" id="swal-success" value="{{$message}}">
       @endif
      <!-- ======= Featured Services Section ======= -->
      <form action = '{{route("form_inap")}}' method='POST'>
        @csrf
        @method("POST")
      <section id="form" class="form">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-md-6 ">
              <h3>lengkapi form dibawah ini!</h3>
              <p>*kolom wajib diisi</p>
                <div class="form-row">
                  <div class="col">
                    <span  @error('nama_customer')class='text-danger' @enderror>Nama* @error('nama_customer'){{$message}}@enderror</span>
                    <input type="text" name="nama_customer" value="{{old('nama_customer')}}" class="form-control" placeholder="">
                  </div>
                </div>
            </div>
          </div>
          <div class="row mt-5">
              <div class="col-md-6">
                <h3>Informasi Kontak</h3>
              </div>
              </div>
              <div class="row">
            <div class="col-md-6 ">
                    <div class="form-row">
                      <div class="col">
                        <span @error('no_telp')class='text-danger'@enderror>Nomor Handphone* @error('no_telp'){{$message}}@enderror</span>
                        <input type="text" name="no_telp" value="{{old('no_telp')}}" class="form-control" placeholder="">
                      </div>
                    </div>
            </div>
            <div class="col-md-6 mt-1">

                    <div class="form-row">
                      <div class="col ">
                        <span @error('email')class='text-danger'@enderror>Alamat Email* @error('email'){{$message}}@enderror</span>
                        <input type="email" name ="email" value="{{old('email')}}" aria-describedby="emailHelp" class="form-control" placeholder="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                    </div>
            </div>
          </div>
                <div class="form-group mt-5">
                    <label for="exampleFormControlTextarea1">Alamat </label>
                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="5"></textarea>
                  </div>
            <div class="row mt-5">
                <div class="col-md-6">

                        <div class="form-row">
                          <div class="col">
                            <span>Kota</span>
                            <input type="text" name="kota" class="form-control" placeholder="">
                          </div>
                        </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">

                        <div class="form-group">
                            <label @error('pesanan')class='text-danger'@enderror for="exampleFormControlSelect1">Pesanan*@error('pesanan'){{$message}}@enderror</label>
                            <select class="form-control" name="pesanan" value="{{old('pesanan')}}" id="exampleFormControlSelect1" aria-placeholder="">
                              <option selected>Jenis Kamar</option>
                              <option value='standard'>kamar Standard</option>
                              <option value='VIP'>Kamar VIP</option>
                            </select>
                          </div>

                </div>
        </div>
        <div class="d-flex flex-row">
          <div class="p-2">

                  <div class="form-row">
                    <div class="col">
                      <span @error('check_in')class='text-danger'@enderror>Check In* @error('check_in'){{$message}}@enderror</span>
                      <input type="date" name="check_in" value="{{old('check_in')}}" class="form-control" placeholder="Check In">
                    </div>
                    <div class="col ">
                      <span   >Check Out* @error('check_out'){{$message}}@enderror</span>
                      <input type="date" name="check_out" value="{{old('check_out')}}" class="form-control" placeholder="Check Out">
                    </div>
                  </div>

          </div>
        </div>
        <div class="d-flex flex-row">
          <div class="p-2">
 
                  <div class="form-row">
                    <div class="col">
                      <span @error('tamu')class='text-danger'@enderror>Jumlah Tamu* @error('tamu'){{$message}}@enderror</span>
                      <input type="number" name="tamu" value="{{old('tamu')}}" class="form-control" placeholder="Guest">
                    </div>
                    <div class="col">
                      <span @error('kamar')class='text-danger'@enderror>Jumlah Kamar* @error('kamar'){{$message}}@enderror</span>
                      <input type="number" name="kamar" value="{{old('kamar')}}" class="form-control" placeholder="Room">
                    </div>
                  </div>

          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-6">

            <div class="form-group">
                <label @error('pembayaran')class='text-danger'@enderror for="exampleFormControlSelect1">Pilih Jenis Pembayaran* @error('pembayaran'){{$message}}@enderror</label>
                <select class="form-control" name="pembayaran" value="{{old('pembayaran')}}" id="exampleFormControlSelect1" aria-placeholder="">
                  <option selected></option>
                  <option value='mandiri'>Mandiri</option>
                  <option value='BNI'>BNI</option>
                  <option value='BCA'>BCA</option>
                </select>
              </div>

          </div>
        </div>
          <a href="{{url('form_inap/create')}}"><button type="submit" class="btn btn-info float-right rounded-pill mt-5">Lanjutkan ke Pembayaran</button></a>
      </form>
      
      </section>
      <!-- End Featured Services Section -->
    </main>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    const success = document.getElementById('swal-success');

    if (success) {
      Swal.fire({
        icon: 'success',
        title: success.value,
        showConfirmButton: true,
        timer: 2500
      });
    } 
    </script>
    <!-- End main -->
  @endsection
