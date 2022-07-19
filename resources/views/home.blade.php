@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <h1>Kelompok III </h1>
    </div>
    <style>
        .colum {
             float: left;
             width: 33.33%;
             padding: 5px;
        }
        figcaption {
            text-align: center;
        }
        .row {
            /* margin-left: auto; */
            padding-left:150px;
        }
    </style>
    <div class="row">
        <figure class="colum">
            <img src="{{ asset('icons/darma.jpeg') }}" width="300" alt="">
            <figcaption><b>Darmawati</b></figcaption><br>
            <!-- <figcaption><b></b></figcaption><br> -->
        </figure>
        <figure class="colum">
            <img src="{{ asset('icons/rahmat.jpeg') }}" width="300" height="429" alt="">
            <figcaption><b>Rahmat Hidayat H.M</b></figcaption><br>
            <!-- <figcaption><b></b></figcaption><br> -->
        </figure>
        <figure class="colum">
            <img src="{{ asset('icons/ashar.jpeg') }}" width="300" height="427" alt="">
            <figcaption><b>Muh Ashar Ardiansyah</b></figcaption><br>
            <!-- <figcaption><b></b></figcaption><br> -->
        </figure>
        <figure class="colum">
            <img src="{{ asset('icons/takbir.jpeg') }}" width="300" height="427" alt="">
            <figcaption><b>Muh Takbir Syafei</b></figcaption><br>
            <!-- <figcaption><b></b></figcaption><br> -->
        </figure>
        <figure class="colum">
            <img src="{{ asset('icons/masnan.jpeg') }}" width="300" height="427" alt="" >
            <figcaption><b>Masnan Jamaluddin</b></figcaption><br>
            <!-- <figcaption><b></b></figcaption><br> -->
        </figure>
    </div>
    
<!--     
    <img src="{{ asset('icons/darma.jpeg') }}" width="300" alt="">
    <img src="{{ asset('icons/darma.jpeg') }}" width="300" alt="">
    <img src="{{ asset('icons/darma.jpeg') }}" width="300" alt="">
    <img src="{{ asset('icons/darma.jpeg') }}" width="300" alt=""> -->
@endsection
