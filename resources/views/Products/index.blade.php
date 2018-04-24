@extends('layouts.dab')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="content-header no-padding">
		<h1>
			Productos de tipo X
		</h1>
		</section>

		<div class="carousel-products" id="prods1">
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit1" width="200" height="200" />
				<span>Prod 1</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit2" width="200" height="200" />
				<span>Prod 2</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit3" width="200" height="200" />
				<span>Prod 3</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit4" width="200" height="200" />
				<span>Prod 4</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit5" width="200" height="200" />
				<span>Prod 5</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit6" width="200" height="200" />
				<span>Prod 6</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit7" width="200" height="200" />
				<span>Prod 7</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit8" width="200" height="200" />
				<span>Prod 8</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" width="200" height="200" />
				<span>Prod 9</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" width="200" height="200" />
				<span>Prod 10</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" width="200" height="200" />
				<span>Prod 11</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" width="200" height="200" />
				<span>Prod 12</span>
			</div>
		</div>
		<div class="pager" id="prods1pager"></div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<section class="content-header no-padding">
		<h1>
			Productos de tipo X
		</h1>
		</section>

		<div class="carousel-products" id="prods2">
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit1" width="200" height="200" />
				<span>Prod 1</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit2" width="200" height="200" />
				<span>Prod 2</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit3" width="200" height="200" />
				<span>Prod 3</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit4" width="200" height="200" />
				<span>Prod 4</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit5" width="200" height="200" />
				<span>Prod 5</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit6" width="200" height="200" />
				<span>Prod 6</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit7" width="200" height="200" />
				<span>Prod 7</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" alt="fruit8" width="200" height="200" />
				<span>Prod 8</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" width="200" height="200" />
				<span>Prod 9</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" width="200" height="200" />
				<span>Prod 10</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" width="200" height="200" />
				<span>Prod 11</span>
			</div>
			<div>
				<img src="{{asset('images/avatar.png')}}" width="200" height="200" />
				<span>Prod 12</span>
			</div>
		</div>
		<div class="pager" id="prods2pager"></div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$(function() {
		$('#prods1').carouFredSel({
			width: '100%',
			items: {
				visible: 'odd+2'
			},
			scroll: {
				pauseOnHover: true,
				onBefore: function() {
					$(this).children().removeClass( 'hover' );
				}
			},
			auto: {
				items: 1,
				easing: 'linear',
				duration: 1250,
				timeoutDuration: 0
			},
			pagination: {
				container: '#prods1pager',
				items: 1,
				duration: 0,
				queue: 'last',
				onAfter: function() {
					var cur = $(this).triggerHandler( 'currentVisible' ),
						mid = Math.floor( cur.length / 2 );

					cur.eq( mid ).addClass( 'hover' );
				}
			}
		});

	});

	$(function() {
		$('#prods2').carouFredSel({
			width: '100%',
			items: {
				visible: 'odd+2'
			},
			scroll: {
				pauseOnHover: true,
				onBefore: function() {
					$(this).children().removeClass( 'hover' );
				}
			},
			auto: {
				items: 1,
				easing: 'linear',
				duration: 1250,
				timeoutDuration: 0
			},
			pagination: {
				container: '#prods2pager',
				items: 1,
				duration: 0,
				queue: 'last',
				onAfter: function() {
					var cur = $(this).triggerHandler( 'currentVisible' ),
						mid = Math.floor( cur.length / 2 );

					cur.eq( mid ).addClass( 'hover' );
				}
			}
		});

	});
</script>
@endsection