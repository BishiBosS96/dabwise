@extends("layouts.dab")

@section("content")
<div class="col-xs-12">
	<div class="col-xs-12 carousels">
		<el-carousel :interval="5000" arrow="always">
		    <el-carousel-item
		    	v-for="item in 4"
		    	:key="item">
		    	<div
		    		class="col-xs-12"
		    		style="position: absolute; bottom: 20px; text-align: center;">
		    		Hello
	    		</div>
		    </el-carousel-item>
	  	</el-carousel>
	</div>

	<div class="col-xs-12 carousels">
		<el-carousel :interval="5000" arrow="always">
		    <el-carousel-item
		    	v-for="item in 4"
		    	:key="item">
		    	<div
		    		class="col-xs-12"
		    		style="position: absolute; bottom: 20px; text-align: center;">
		    		Hello
	    		</div>
		    </el-carousel-item>
	  	</el-carousel>
	</div>

	<div class="col-xs-12 carousels">
		<el-carousel :interval="5000" arrow="always">
		    <el-carousel-item
		    	v-for="item in 4"
		    	:key="item">
		    	<div
		    		class="col-xs-12"
		    		style="position: absolute; bottom: 20px; text-align: center;">
		    		Hello
	    		</div>
		    </el-carousel-item>
	  	</el-carousel>
	</div>
</div>
@endsection

@section('scripts')
@endsection