@extends('layouts.app')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="banner" style="background-image: url(img/1.jpg);"></div>
            <div class="carousel-caption d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
              <button class="btn-1">Read More</button>
            </div>
          </div>
          <div class="carousel-item">
            <div class="banner" style="background-image: url(img/2.jpg);"></div>
            <div class="carousel-caption d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="banner" style="background-image: url(img/3.jpg);"></div>
            <div class="carousel-caption d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>

      <!-- cssnya ada di style2.css -->
      <div class="container mt-5 mb-5 content-card">
      <center class="mb-5">
              <h1 class="mt-4">Our Teacher</h1>
              <h5>_________</h5>
            </center>
        <div class="row">
            <div class="col-lg-4 mt-4">
                <div class="card shadow">
                    <img src={{ url('img/foto1.jpg') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                          <h3>Lorem Ipsum</h3>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Rem assumenda perspiciatis sit nisi inventore dolor accusantium 
                            quos cupiditate eius excepturi!</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="card shadow">
                  <img src={{ url('img/foto2.jpg') }} class="card-img-top" alt="...">
                    <div class="card-body">
                      <center>
                          <h3>Lorem Ipsum</h3>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Rem assumenda perspiciatis sit nisi inventore dolor accusantium 
                            quos cupiditate eius excepturi!</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="card shadow">
                  <img src={{ url('img/foto3.jpg') }} class="card-img-top" alt="...">
                    <div class="card-body">
                      <center>
                          <h3>Lorem Ipsum</h3>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Rem assumenda perspiciatis sit nisi inventore dolor accusantium 
                            quos cupiditate eius excepturi!</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="content-2 mb-4 p-4 text-center" style="background-image: url('img/2.jpg');background-size: cover; color:white;">
          <h1>Lorem Ipsum</h1>
          <p class="p-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Dicta assumenda temporibus facere alias qui! Eligendi corporis 
            rem asperiores blanditiis maxime molestias doloribus assumenda 
            sequi autem ea, placeat, nostrum, at magni expedita perferendis. 
            Similique praesentium nostrum, animi maiores vero reiciendis sit 
            asperiores ea, omnis, optio reprehenderit vitae inventore debitis 
            excepturi magnam?</p>
        </div>
      <div class="container mt-4 ">
        <center class="mb-5">
          <h1 class="mt-4">About Us</h1>
          <h5>_________</h5>
        </center>
        <div class="row">
          <div class="col-lg-6 text-center">
            <img src={{ url ("img/man.png" )}} alt="">
          </div>
          <div class="col-lg-6 col-sm-12 p-5 mt-5 align-self-center">
            <h2><center>Hello</center></h2>
            <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Minus in beatae quas. Excepturi tempora autem et dignissimos 
              harum officia at eligendi incidunt nesciunt neque cum sunt 
              consequatur id necessitatibus aut nihil doloremque, inventore 
              saepe alias iusto ab rerum! Nobis iure fugiat dolore necessitatibus 
              animi eaque quasi. Non fugit nemo accusantium?</p>
          </div>
        </div>
      </div>
@endsection