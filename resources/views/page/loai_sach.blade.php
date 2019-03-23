@extends('master')
@section('content')
<section><!-- loaisach -->
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-2 shadow bg-white rounded reset_p_m">
			@include('menu')
		</div>

		<div class="col-lg-8 py-5">
			@foreach($ten_loasach as $tenloai)

			<h1>{{$tenloai->name}}</h1>

			@endforeach
			<div class="row">
				@foreach($sach_theoloai as $sp)
				<div class="col-lg-3 py-4">
					<div class="sp-demo product">
						<div class="w-100">
							<a href="{{route('chitiet',$sp->id)}}">
								<img src="{{ URL::to('source/images//')}}/{{ $sp->image }}" class="mx-auto d-block w-50" style="
								height: 145px"
								>

								<img src="source/images/icon2h.png"class="h2" alt="">
								<div class="tag_sale text-center">25%
								</div>
							</a>
						</div>
						<div class="product-title">
							<a class="text-decoration-" href="{{route('chitiet',$sp->id)}}"><p class="text-center">{{$sp->name}}</p></a>
						</div>
						<div class="d-flex">
							@if($sp->discount_price==0)
							<div class="p-2 m-auto text-primary font-weight-bold">{{number_format($sp->unit_price)}}đ</div>

							@else
							<div class="p-2 mr-auto text-primary font-weight-bold">{{number_format($sp->unit_price)}}đ</div>
							<div class="p-2 mr-2 text-secondary font-weight-bold"><del>{{number_format($sp->discount_price)}}đ</del></div>
							@endif
						</div>
						<div class="review">
							<i class="start far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>

							<span>(0 đánh giá)</span>
						</div>

					</div>
				</div>
				@endforeach
<div class="container">
	<div class="ml-5 container">{{$sach_theoloai->links()}}</div>
</div>
			</div>
		</div>

	</div>
</section>
@endsection

