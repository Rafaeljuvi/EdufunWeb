@extends('layout.master')

@section('title')
<title>Writers Page</title>
@endsection

@section('content')
<div class="container">
    <h2 class="mb-4 p-3">Our Writers:</h2>
    <div class="row">
        <!-- Writer 1 -->
        <div class="col-md-4 mb-4 text-center">
            <div class="writer-card">
                <img src="/images/stitch.jpeg" class="card-img-top rounded-circle" alt="Raka Putra Wicaksono">
                <div class="card-body">
                    <h5 class="card-title">Stitch Jr.</h5>
                    <p class="card-text text-muted">Multimedia Specialist</p>
                </div>
            </div>
        </div>
        <!-- Writer 2 -->
        <div class="col-md-4 mb-4 text-center">
            <div class="writer-card">
                <img src="/images/emily.jpg" class="card-img-top rounded-circle" alt="Bia Mecca Annisa">
                <div class="card-body">
                    <h5 class="card-title">Emily Dior Regan</h5>
                    <p class="card-text text-muted">Data Science Spesialist</p>
                </div>
            </div>
        </div>
        <!-- Writer 3 -->
        <div class="col-md-4 mb-4 text-center">
            <div class="writer-card">
                <img src="/images/adam.jpg" class="card-img-top rounded-circle" alt="Abi Firmansyah">
                <div class="card-body">
                    <h5 class="card-title">Adam Luckianto</h5>
                    <p class="card-text text-muted">network Security</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection