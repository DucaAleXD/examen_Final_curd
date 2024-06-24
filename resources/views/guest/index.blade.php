@extends('layouts.app')
@section('content')
  <header class="header">
    <div class="container">
      <h1>Platforma de promovare</h1>
      <p>Centrul Republican de Învățământ din subordinea Ministerului Educației Publice</br> Platforma unică servește la popularizarea celor mai bune practici ale pedagogilor</p>
      <a href="#" class="btn btn-primary">Înscrie-te</a>
      <a href="#" class="btn btn-secondary">Autentificare</a>
    </div>
  </header>
  {{-- About us --}}
    <div class="row">
        <div class="column" >
            <div class="marginSection">
                <h2>We connect our customers with the best, and help them keep up-and stay open.</h2>
                <div class="mt-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
             <div class="column" >
            <div class="relative">
                <img src="https://images.pexels.com/photos/719396/pexels-photo-719396.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                <div class="absolute">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdXWh72DgpiId3gg_1YgyEtH7VY_huEZ3kuQ&s" alt="">
                </div>
            </div>
        </div>
    </div>
       

    <div class="center">
            <h2>Produse Accesibile</h2>
    </div>

    <div class="center">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            </div>
    </div>

        <div class="center mt-5">
            <h2>Produse CRUD</h2>
        </div>
        {{-- <div class="center">
            <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            </div>
        </div> --}}
        <section class="collections my-5">
            <div class="container">
                <div class="row">
                    @foreach($collections as $collection)
                        <div class="col-md-4">
                        <div class="card bg-card radius">
                            <div class="card-body">
                                <div class="d-flex flex-wrap images">
                                    @foreach($collection->images()->limit(4)->get() as $image)
                                        <img src="{{ asset(env('UPLOADS_IMAGE'). "/" . $image->name) }}" class="w-100 p-2 radius" alt="Metaverse">
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div class="d-flex author flex-row align-items-center">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h5>{{ $collection->name }}</h5>
                                            <p class="text-secondary mb-0">Created by <span>{{ $collection->user()->get()->first()->name }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection('content')
 
</body>
</html>
