@extends('layout')

@section('content')
<h1 class="text-white">Добро пожаловать в мою CRM</h1>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>15</h3>
                <p>Организаций</p>
            </div>
            <div class="icon">
                <i class="fas fa-building"></i>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>128</h3>
                <p>Оборудования</p>
            </div>
            <div class="icon">
                <i class="fas fa-network-wired"></i>
            </div>
        </div>
    </div>
</div>
@endsection
