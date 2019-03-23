@extends('master')
@section('content')
<style>
	
img.background {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    z-index: -1;
    filter: blur(10px);
    -webkit-filter: blur(10px);
}
  
  img.circle {
    height:300px!important;
    width:200px;
    border-radius: 15px;
    display: block;
    margin: 0 auto;
}
.tenphim
{
  font-size: 20px;
}
.mota
{
  z-index: 12;
  font-size:30px;
}
@keyframes move{
  0%{
      left:41%;
  }

  50%{
      left:55%;
  }

  100%{
      left: 41%;
  }
}
.stars{
  animation: move 3s infinite;
  position: absolute;
  -webkit-animation: move 3s infinite;
}
.txt
{
  position: relative;
  z-index:12;
  color: #eb1436;
}
.fa-star
{
  color: #eb1436;
  z-index: 12;
  overflow:hidden;
  font-size: 60px;
  
}
.danhgia
{
  z-index: 11;
  font-size:28px;
  position: relative;
  top:13px;
  
}
.all
{
  overflow: hidden;
  position: relative;
}
.overlay
{

  bottom: 0px;
  /* z-index: ; */
  position: absolute;
  height: 40%;
  width: 1000%;
  /* background: red; */
  background-image:
   linear-gradient(to top, rgba(6,15,25,1), rgba(6,15,25,0.0));
}
.btn-danger
{
  z-index: 11;
  position: relative;
}
.img-play
{
  text-align: center;
  width: 100%;
  position: relative;
  z-index: 11;
  cursor: pointer;
  top:-50%;
}
.img-play i
{
  color: #42f532;
  font-size: 50px;
}
.img-play a i:hover
{
  color: #4fcf43;
  font-size: 50px;
}
.card-header
{
  cursor: pointer;
}
.title-lichchieu
{
  background: #060F19;
}
.line
{
  width: 3px;
  height: 80px;
  background: #eb1436;
}
.line2
{
  transition:all 1s;
  float: right;
  background: #eb1436;
  width: 0px;
  height: 1px;
  -webkit-transition:all 1s;
  -moz-transition:all 1s;
  -ms-transition:all 1s;
  -o-transition:all 1s;
}
.title-list:hover .line2
{
  width: 150px;
}
.card
{
  border-radius: 27px;
  -webkit-border-radius: 27px;
  -moz-border-radius: 27px;
  -ms-border-radius: 27px;
  -o-border-radius: 27px;
}
.card-header
{
  border-bottom: unset;
}
.card-link img
{
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
}
.card-body
{
  border-bottom:1px solid gray;
}
.lichchieu-menu
{
  width: 70%!important;
  margin: auto;
}

</style>


			<!--  -->

			<div class="all">
    <img class="background w-100" src="{{ URL::to('source/images//')}}/{{ $sach->image }}" alt="Pineapple" width="300" height="300">
    <div class="container py-5">
    <div class="row text-white">
        <div class="col-md-4">
                <img class="circle" src="{{ URL::to('source/images//')}}/{{ $sach->image }}" alt="Pineapple">
                <div class="img-play">
				
				<a class="venobox_custom" data-vbtype="iframe" href="{{$sach -> description}}"><i class="fas fa-play-circle"></i></a>
			</div>
        </div>
        <div class="col-md-4">
            <h5 class="py-3">Chi tiet phim</h5>
            <span class="badge badge-success mx-2 text-dark"></span>
            <span class="my-4 tenphim text-white">{{$sach->name}}</span>
            <p class="py-3 mota">{{$sach->unit_price}} vnd</p>
            <a class="btn btn-danger" href="{{route('giohang')}}">Đặt vé</a>
        </div>
        <div class="col-md-4 text-center p-5">
            <i class="fas fa-star stars text-white">{{$sach->unit}} </i>
               
        </div>
    </div>
    </div>
</div>
<div class="a container py-5" id="datve">
        <div class="m-auto pb-4">
                <div class="row title-list py-4">
                  <div class="co mr-3 line-content">
                    <div class="line"></div>
                  </div>
                  <div class="co title">
                    <h2>Lịch chiếu</h2>
                    <p>Chọn cụm rạp, lịch chiếu, giờ chiếu.</p>
                    <div class="line2"></div>
                  </div>
                </div>
        </div>
        <div id="accordion" class="lichchieu-menu">
                
                <div class="card py-3 mb-4">
                  <div class="card-header">
                    <p class="card-link" data-toggle="collapse" href="#collapseOne">
                      <img width="50px" src="https://s3img.vcdn.vn/123phim/2018/09/404b8c4b80d77732e7426cdb7e24be20.png">
                      <span class="mx-3">Lotte Cinema</span>
                    </p>
                  </div>
                  <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body" *ngFor="let item of chiTietPhim.LichChieu">
                      <span></span>
                      <span class="badge text-white badge-danger mx-2 p-1"></span>
                      <span class="text-danger">VND</span>
                      <button routerLink="/dat-ghe" [queryParams]="{malichchieu : item.MaLichChieu, maphim : chiTietPhim.MaPhim, giochieu: item.NgayChieuGioChieu}" class="btn btn-danger float-right">Book</button>
                    </div>
                  </div>
                </div>
                <div class="card py-3 mb-4">
                  <div class="card-header">
                    <p class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        <img width="50px" src="http://capkeosaigon.com/upload/images/unnamed.png">
                        <span class="mx-3">CGV Cinema</span>
                    </p>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      Không có suất chiếu nào !
                    </div>
                  </div>
                </div>
                <div class="card py-3 mb-4">
                  <div class="card-header">
                    <p class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        <img width="50px" src="https://i.moveek.com/media/cache/no_resize/media/05d40eb5d3c66e32dc62b7a055422166ab3d53e9.png">
                        <span class="mx-3">Galaxy Cinema</span>
                      </p>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Không có suất chiếu nào !
                    </div>
                  </div>
                </div>
        </div>
</div>
<script>
$(document).ready(function(){
    $('.venobox').venobox(); 
});
</script>
			@endsection

