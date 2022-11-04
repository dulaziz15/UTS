@extends('layouts.main')
@section('content')
    <div class="container" style="margin-top: 100px;">
        <center>
            <h1>Validasi</h1>
        </center>
    <div class="card mt-5 mb-4 shadow">
        <div class="card-header">
            <center>
                <h4>Form Validasi</h4>
            </center>
        </div>
        <div class="card-body m-3">
        <form  action="/" method="" class="needs-validation" novalidate>
            <!-- @csrf -->
            <div class="row">
            <div class="col-lg-6 align-self-center justify-content-center satu">
                <h3 style="color:brown ;">Contact Me</h3>
                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Autem, nam corporis voluptatibus aspernatur molestias quos 
                    ratione repellat quidem magni tempora delectus laudantium fuga quod officiis.</p>
                <div class="row contact mt-4">
                    <i class="fas fa-user m-3 mr-5 align-self-center" style="font-size: 25px;"></i>
                    <div class="info">
                        <div class="head">
                            NAME
                        </div>
                        <div class="sub-title">
                            Abdul Aziz
                        </div>
                    </div>
                </div>
                <div class="row contact mt-4">
                    <i class="fas fa-map-marker-alt m-3 mr-5 align-self-center" style="font-size: 25px;"></i>
                    <div class="info">
                        <div class="head">
                            LOCATION
                        </div>
                        <div class="sub-title">
                            Cirebon, Jawa Barat
                        </div>
                    </div>
                </div>
                <div class="row contact mt-4 mb-4">
                    <i class="fas fa-envelope m-3 mr-5 align-self-center" style="font-size: 25px;"></i>
                    <div class="info">
                        <div class="head">
                            EMAIL
                        </div>
                        <div class="sub-title">
                            dulaziz268@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-0">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                        <div class="invalid-tooltip">
                            Masukan tanggal !!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Anda ..." required>
                        <div class="invalid-tooltip">
                            Masukan Nama Anda !
                        </div>
                    </div>
                    <div class="col-md-12 mb-2 mt-2">
                        <label for="phone">Phone</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="phoneprepend">+62</span>
                          </div>
                          <input type="number" class="form-control" id="phone" placeholder="Masukan nomor telepon ..." aria-describedby="validationTooltipUsernamePrepend" required>
                          <div class="invalid-tooltip">
                            harap masukan nomor telepon anda !
                          </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="">Pesan</label>
                        <textarea class="form-control" name="pesan" id="pesan" cols="1" rows="5" placeholder="Pesan Anda ...." required></textarea>
                        <div class="invalid-tooltip">
                            Masukan Pesan Anda !!
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="email">Send to Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <div class="invalid-tooltip">
                            Masukan email anda ! dan pastikan email anda benar !
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <h4>Category</h4>
                            <div class="radio m-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="kategory" id="radio1" value="VIP" required>
                                    <label for="radio1" class="form-check-label">
                                        VIP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="kategory" id="radio2" value="premium" required>
                                    <label for="radio2" class="form-check-label">
                                    Premium
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="kategory" id="radio3" value="basic" required>
                                    <label for="radio3" class="form-check-label">
                                        Basic
                                    </label>
                                </div>
                </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <h4>Select</h4>
                        <div class="checkbox m-4">
                            <div class="form-check">
                                <input type="checkbox" id="checkbox1" class="form-check-input" value="breakfast" id="category" name="checkbox" >
                                <label for="checkbox1" class="form-check-label">
                                    Breakfast
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="checkbox2" class="form-check-input" value="lunch" id="category" name="checkbox" >
                                <label for="checkbox2" class="form-check-label">
                                    Lunch
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="checkbox3" class="form-check-input" value="dinner" id="category" name="checkbox" >
                                <label for="checkbox3" class="form-check-label">
                                    Dinner
                                </label>
                            </div>
                            <div class="invalid-tooltip">
                                    harap masukan nomor telepon anda !
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3 justify-content-end">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>
        </form>
    </div>
    </div>
@endsection