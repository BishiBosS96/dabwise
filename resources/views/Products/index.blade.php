@extends('layouts.dab')
@section('content')
<div class="col-xs-12">
    <div class="col-xs-12 carousels">
        <h5>
            Bongs
        </h5>
        <el-carousel :interval="4000" type="card" height="200px">
            <el-carousel-item v-for="item in 6" :key="item">
                <h3>@{{ item }}</h3>
            </el-carousel-item>
        </el-carousel>
    </div>

    <div class="col-xs-12 carousels">
        <h5>
            Pipas
        </h5>
        <el-carousel :interval="4000" type="card" height="200px">
            <el-carousel-item v-for="item in 6" :key="item">
                <h3>@{{ item }}</h3>
            </el-carousel-item>
        </el-carousel>
    </div>

    <div class="col-xs-12 carousels">
        <h5>
            Jitters
        </h5>
        <el-carousel :interval="4000" type="card" height="200px">
            <el-carousel-item v-for="item in 6" :key="item">
                <h3>@{{ item }}</h3>
            </el-carousel-item>
        </el-carousel>
    </div>
</div>
@endsection

@section('scripts')
@endsection