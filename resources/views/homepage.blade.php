@extends('layouts/layout')

@section('content')

    <div class="container my-5">
        <div class="ombre-externe">
            <div class="ombre-interne">
                <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                src="https://static.cnews.fr/sites/default/files/styles/image_880_495/public/sdaaaa_61fc2ec5e17ae.jpeg?itok=c4Bwp5ZI"
                                class="d-block w-100 peinture-ombre-interne-fine" alt="...">
                            <div class="carousel-caption">
                                <h5>
                                </h5>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://static.hitek.fr/img/actualite/ill_m/141242938/hogwartslegacy.jpg"
                                 class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h5>

                                </h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.buzzwebzine.fr/wp-content/uploads/2022/08/House-of-the-dragon.webp"
                                 class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h5>

                                </h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- ombre-interne -->
        </div>
        <!-- ombre-externe -->
    </div>
    <section class="section " id="bannier" style=" margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="title text-white">Les 29 magasins HerosMarket</h1>
                                <p class="text-white">Retrouvez tous nos produits et nos offres promotionnelles dans les magasins.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contenedorCards">
        <div class="card">
            <div class="wrapper">
                <div class="colorProd"></div>
                <div class="imgProd" style="background-image: url(https://firebasestorage.googleapis.com/v0/b/fotos-3cba1.appspot.com/o/batman.png?alt=media&token=bcce964a-7224-4e47-b619-265e93b5311e);"></div>
                <div class="infoProd">
                    <p class="nombreProd">ARTFX DC UNIVERSE Batman HUSH Renewal Package</p>
                    <p class="extraInfo">Fecha de salida: 31/03/2021</p>
                    <div class="actions">
                        <div class="preciosGrupo">
                            <p class="precio precioOferta">9,999</p>
                            <p class="precio precioProd">9,999</p>
                        </div>
                        <div class="icono action aFavs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <path
                                    d="M47 5c-6.5 0-12.9 4.2-15 10-2.1-5.8-8.5-10-15-10A15 15 0 0 0 2 20c0 13 11 26 30 39 19-13 30-26 30-39A15 15 0 0 0 47 5z">
                                </path>
                            </svg>
                        </div>
                        <div class="icono action alCarrito">
                            <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <title>Quitar del carrito</title>
                                <path d="M30 22H12M2 6h6l10 40h32l3.2-9.7"></path>
                                <circle cx="20" cy="54" r="4"></circle>
                                <circle cx="46" cy="54" r="4"></circle>
                                <circle cx="46" cy="22" r="16"></circle>
                                <path d="M53 18l-8 9-5-5"></path>
                            </svg>
                            <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <title>Agregar al carrito</title>
                                <path d="M2 6h10l10 40h32l8-24H16"></path>
                                <circle cx="23" cy="54" r="4"></circle>
                                <circle cx="49" cy="54" r="4"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="wrapper">
                <div class="colorProd"></div>
                <div class="imgProd" style="background-image: url(https://firebasestorage.googleapis.com/v0/b/fotos-3cba1.appspot.com/o/batman.png?alt=media&token=bcce964a-7224-4e47-b619-265e93b5311e);"></div>
                <div class="infoProd">
                    <p class="nombreProd">ARTFX DC UNIVERSE Batman HUSH Renewal Package</p>
                    <p class="extraInfo">Fecha de salida: 31/03/2021</p>
                    <div class="actions">
                        <div class="preciosGrupo">
                            <p class="precio precioOferta">9,999</p>
                            <p class="precio precioProd">9,999</p>
                        </div>
                        <div class="icono action aFavs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <path
                                    d="M47 5c-6.5 0-12.9 4.2-15 10-2.1-5.8-8.5-10-15-10A15 15 0 0 0 2 20c0 13 11 26 30 39 19-13 30-26 30-39A15 15 0 0 0 47 5z">
                                </path>
                            </svg>
                        </div>
                        <div class="icono action alCarrito">
                            <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <title>Quitar del carrito</title>
                                <path d="M30 22H12M2 6h6l10 40h32l3.2-9.7"></path>
                                <circle cx="20" cy="54" r="4"></circle>
                                <circle cx="46" cy="54" r="4"></circle>
                                <circle cx="46" cy="22" r="16"></circle>
                                <path d="M53 18l-8 9-5-5"></path>
                            </svg>
                            <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <title>Agregar al carrito</title>
                                <path d="M2 6h10l10 40h32l8-24H16"></path>
                                <circle cx="23" cy="54" r="4"></circle>
                                <circle cx="49" cy="54" r="4"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedorCards">
        <div class="card">
            <div class="wrapper">
                <div class="colorProd"></div>
                <div class="imgProd" style="background-image: url(https://firebasestorage.googleapis.com/v0/b/fotos-3cba1.appspot.com/o/batman.png?alt=media&token=bcce964a-7224-4e47-b619-265e93b5311e);"></div>
                <div class="infoProd">
                    <p class="nombreProd">ARTFX DC UNIVERSE Batman HUSH Renewal Package</p>
                    <p class="extraInfo">Fecha de salida: 31/03/2021</p>
                    <div class="actions">
                        <div class="preciosGrupo">
                            <p class="precio precioOferta">9,999</p>
                            <p class="precio precioProd">9,999</p>
                        </div>
                        <div class="icono action aFavs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <path
                                    d="M47 5c-6.5 0-12.9 4.2-15 10-2.1-5.8-8.5-10-15-10A15 15 0 0 0 2 20c0 13 11 26 30 39 19-13 30-26 30-39A15 15 0 0 0 47 5z">
                                </path>
                            </svg>
                        </div>
                        <div class="icono action alCarrito">
                            <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <title>Quitar del carrito</title>
                                <path d="M30 22H12M2 6h6l10 40h32l3.2-9.7"></path>
                                <circle cx="20" cy="54" r="4"></circle>
                                <circle cx="46" cy="54" r="4"></circle>
                                <circle cx="46" cy="22" r="16"></circle>
                                <path d="M53 18l-8 9-5-5"></path>
                            </svg>
                            <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <title>Agregar al carrito</title>
                                <path d="M2 6h10l10 40h32l8-24H16"></path>
                                <circle cx="23" cy="54" r="4"></circle>
                                <circle cx="49" cy="54" r="4"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="wrapper">
                <div class="colorProd"></div>
                <div class="imgProd" style="background-image: url(https://firebasestorage.googleapis.com/v0/b/fotos-3cba1.appspot.com/o/batman.png?alt=media&token=bcce964a-7224-4e47-b619-265e93b5311e);"></div>
                <div class="infoProd">
                    <p class="nombreProd">ARTFX DC UNIVERSE Batman HUSH Renewal Package</p>
                    <p class="extraInfo">Fecha de salida: 31/03/2021</p>
                    <div class="actions">
                        <div class="preciosGrupo">
                            <p class="precio precioOferta">9,999</p>
                            <p class="precio precioProd">9,999</p>
                        </div>
                        <div class="icono action aFavs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <path
                                    d="M47 5c-6.5 0-12.9 4.2-15 10-2.1-5.8-8.5-10-15-10A15 15 0 0 0 2 20c0 13 11 26 30 39 19-13 30-26 30-39A15 15 0 0 0 47 5z">
                                </path>
                            </svg>
                        </div>
                        <div class="icono action alCarrito">
                            <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <title>Quitar del carrito</title>
                                <path d="M30 22H12M2 6h6l10 40h32l3.2-9.7"></path>
                                <circle cx="20" cy="54" r="4"></circle>
                                <circle cx="46" cy="54" r="4"></circle>
                                <circle cx="46" cy="22" r="16"></circle>
                                <path d="M53 18l-8 9-5-5"></path>
                            </svg>
                            <svg class="outCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <title>Agregar al carrito</title>
                                <path d="M2 6h10l10 40h32l8-24H16"></path>
                                <circle cx="23" cy="54" r="4"></circle>
                                <circle cx="49" cy="54" r="4"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section dark-translucent-bg" style="background-image:url();background-position: 50% 46%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="title">Ne ratez pas nos concours !</h1>
                                <p>Suivez-nous sur Facebook pour ne rien manquer.</p>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <p><a target="_blank" href="https://www.facebook.com/shopforgeek/" class="btn btn-lg btn-default btn-animated">Facebook<i class="fa fa-arrow-right pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
