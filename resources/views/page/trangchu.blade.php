@extends('master')
@section('content')
<style>
/* #333 */

.all
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

.list-row
{
  margin: auto;
  width: 100%;
  justify-content: space-between;

}
.owl-carousel .owl-stage-outer {

  height: 412px!important;
  padding-top: 35px!important;
}
/*  */
/* #333 */

.all
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
.cardd:hover img
{
    -ms-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
    transition: all 0.5s ;
    -webkit-transition: all 0.5s ;
    -moz-transition: all 0.5s ;
    -ms-transition: all 0.5s ;
    -o-transition: all 0.5s ;
}
.cardd img
{
  height: 300px;
  width: 200px;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
}

.cardd
{
	margin-right:70px!important;
	margin-bottom:50px!important;
	float:left;
	
  width: 200px;
  /* overflow: hidden; */
  position: relative;
}
.cardd:hover .title-card
{
  opacity: 1;
  z-index: 3;
}
.title-card
{
  opacity: 1;
  /* margin-bottom: 10%; */
  width: 100%;
  /* height: 200px; */
  text-align: center;
  bottom: 0px;
  color: white;
  position: absolute;
  overflow: hidden;
}
.title-card p
{
  margin-bottom: -100%!important;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
}
.cardd:hover .title-card p
{
  transition: all 0.5s;
  margin-bottom: 36%!important;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
}
.tag-title
{
  top:0;
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.cardd:hover .btn-bookve
{
  opacity: 1;
}
.btn-bookve
{
  opacity: 0;
  width: 100%;
  margin: auto;
  /* text-align: center; */
  position: absolute;
  bottom: 0px;
  z-index: 3;

}
.img-play a i
{
  font-size:50px;
}
.img-play
{
  position: absolute;
  top: 0;
  
}
.date
{
  text-align: left;
  width: 100%;
  padding: 2px 4px 2px 4px;
  color: white;
  z-index: 3;
  background: #eb1436;
  border-radius: 10px;
  position: absolute;
  top: 0;
  left: -300px;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
}
.time
{

  text-align: center;
  width: 90px;
  font-size: 13px;
  /* padding: 2px 4px 2px 4px; */
  z-index: 3;
  background: #ffffff;
  border-radius: 10px;
  position: absolute;
  top: 4px;
  right: -140px;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
}
.cardd:hover .date
{
  left: 0px;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
}
.cardd:hover .time
{
  right: 4px;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
}
.img-play
{
  width: 100%;
  top: -40%;
  text-align: center;
  overflow: hidden;
  z-index: 20;
  color: white;
  font-size: 50px;

}
.img-play i
{
  color: #42f532;

}
.cardd:hover .img-play
{
  cursor: pointer;
  top: 30%;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
}
.item
{
  margin: 50px;
}
.img-play i:hover
{
  color: #4fcf43;
}
.overlay
{
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
}
.cardd:hover .overlay
{
  opacity: 1;
}
.overlay
{
  -ms-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
    transition: all 0.5s ;
    -webkit-transition: all 0.5s ;
    -moz-transition: all 0.5s ;
    -ms-transition: all 0.5s ;
    -o-transition: all 0.5s ;
  z-index: 3;
  opacity: 0;
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(to bottom left, rgba(249,170,60,0.3), rgba(212,21,89,0.8));
}
.title-card h4
{
  text-align: center;
}

.title-list
{
  margin: auto;
  width: 100%;
}

.all-list
{
  width: 100%;
  margin: auto;
}
/* =-------------- */

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
.title
{
  color: #060F19;
}
.card
{
    border:none;

}
img
{
  margin-bottom: 15px;
}
.center
{
  width: 100%;
}
.nav-news
{
  width: 30%;
  margin: auto!important;
}
.nav-item .active
{
  background: #eb1436;
}
.nav-item
{
  cursor: pointer;
}
.nav-link
{
  color: #eb1436;
}




/*  */
.rating {
  
  font-family: 'Roboto', sans-serif;
}

.rating .title {
  color: black;
  text-transform: uppercase;
  font-size: 14px;
  margin-bottom: 20px;
}
.rating .form-group .form-control {
  background: transparent;
  outline: none;
  box-shadow: none;

}
.form-control {
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
}
/* SAO DANH GIA */
/* .rating .saodanhgia {
  margin-top: 25px;
  direction: rtl;
}
.rating .saodanhgia i {
  color: rgb(37, 44, 65);
  font-size: 26px;
  margin-right: 5px;
  cursor: pointer;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
}
.rating .saodanhgia i:hover {
  color: orange;
}
.rating .saodanhgia .s1:hover ~ i {
  color: orange;
}
.rating .saodanhgia .s2:hover ~ i {
  color: orange;
}
.rating .saodanhgia .s3:hover ~ i {
  color: orange;
}
.rating .saodanhgia .s4:hover ~ i {
  color: orange;
}
.rating .saodanhgia .s5:hover ~ i {
  color: orange;
} */
.btn_danhgia {
  background: orange;
  color: white;
  font-weight: 700;
  margin-top: 20px;
  padding: 7px 20px;
}
.s1,.s2,.s3,.s4,.s5
{
  margin-bottom: 5px;
  font-size: 30px;
}
.saodanhgia{
  display: flex;
  justify-content: flex-end;
  position: relative;
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -ms-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
}
.saodanhgia input{
  display: none;
 

}

.saodanhgia label{
  display: block;
  cursor: pointer;
  widows: 50px;
  background-color: transparent;
  margin-left: 3px;

}
.saodanhgia label:before{
  content: '';
  font-family: fontAwesome;
  position: relative;
  display: block;
  font-size: 20px;
  color:  rgb(37, 44, 65);
}
.saodanhgia label:after{
 
  content: '\2605';
  font-family: fontAwesome;
  position: absolute;
  display: block;
  font-size: 30px;
  color:   orange;
  top: 0;
  opacity: 0;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
}
.saodanhgia label:hover:after,
.saodanhgia input:hover ~ label:after,
.saodanhgia input:checked ~ label:after{
  opacity: 1;
}
/* Box scroll */
.boxscroll {
  overflow-y: scroll;
  height: 480px;
  padding-right: 10px;
}

/* CUSTOM SCROLLBAR */
/* width */
::-webkit-scrollbar {
  width: 12px;
}
/* Track */
::-webkit-scrollbar-track {
background: rgba(37,44,65,.8); 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
background:  #eb1436; 
}
@media screen and (max-width: 1200px){

}
@media screen and (max-width: 992px){

}
@media screen and (max-width: 576px){
  .boxscroll {
      margin-top: 50px;
  }
}


</style>

	<div class="all m-auto" id="film-new">
    <div class="container m-auto py-5">
      <div class="row title-list py-4">
        <div class="co mr-3 line-content">
          <div class="line"></div>
        </div>
        <div class="co title text-light">
          <h2>Phim mới</h2>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <div class="line2"></div>
        </div>
      </div>
        <div class="row m-auto">
		 
          <div class="col-md-12  py-4 m-auto">
            <!--  -->
			@foreach($new_product as $new)  
    <div class="cardd text-center m-auto pr-4">
      <div class="overlay"></div>
      <img
	  src="{{asset('source/images/')}}/{{ $new->image }}"
      />
    
      <div class="title-card">
        <h4 >{{$new->name}}</h4>
        <p>
        </p>
      </div>
      <div class="tag-title">
        <div class="img-play">
          <a ><i class="fas fa-play-circle"></i></a>
        </div>
        <div class="date">
          
        </div>
        <div class="time"></div>
      </div>
      <div class="btn-bookve">
        <a href="{{route('chitiet',$new->id)}}" class="btn btn-light">Đặt vé</a>
      </div>
	</div>
	@endforeach
          </div>
        </div>
      
    </div>
  </div>
  <div class="container mb-5" id="news">
    <div class="row title-list py-4">
      <div class="co mr-3 line-content">
        <div class="line"></div>
      </div>
  
      <div class="co title">
        <h2>Tin tức phim</h2>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
        <div class="line2"></div>
      </div>
    </div>
    <div class="">
      <br />
      <!-- Nav pills -->
      <div class="center text-center m-auto">
        <ul class="nav nav-pills nav-news" role="tablist">
          <li class="nav-item">
            <p class="nav-link active" data-toggle="pill" href="#home111"
              >Tin tức phim</p
            >
          </li>
          <li class="nav-item">
            <p class="nav-link" data-toggle="pill" href="#menu111">Bình luận phim
            </p>
          </li>
          <li class="nav-item">
            <p class="nav-link" data-toggle="pill" href="#menu112">Khuyến mãi</p>
          </li>
        </ul>
      </div>
      <br />
      <!-- Tab panes -->
      <div class="tab-content">
        <div id="home111" class="container tab-pane active">
          <br />
          <div class="row">
            <div class="col-md-6 m-auto">
              <div class="card m-auto">
                <img
                  class="img-fluid"
                  src="https://s3img.vcdn.vn/123phim/2019/02/nhom-nhac-huyen-thoai-the-beatles-bi-xoa-so-trong-trailer-phim-moi-cua-dao-dien-trieu-phu-khu-o-chuot-15502005688824.jpg"
                  alt="img-news"
                />
                <div class="news-title">
                  <h4>Cua lại vợ bầu phim mới hay nhất</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                    voluptas?
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 m-auto">
              <div class="card m-auto">
                <img
                  class="img-fluid"
                  src="https://s3img.vcdn.vn/123phim/2019/02/doanh-thu-captain-marvel-duoc-du-bao-ngang-ngua-wonder-woman-15502047710892.jpg"
                  alt="img-news"
                />
                <div class="news-title">
                  <h4>Cua lại vợ bầu phim mới hay nhất</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                    voluptas?
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 m-auto">
              <div class="card">
                <img
                  class="img-fluid"
                  src="https://s3img.vcdn.vn/123phim/2019/02/captain-marvel-doanh-thu-03-3a582f.jpg"
                  alt="img-news"
                />
                <div class="news-title">
                  <h4>Cua lại vợ bầu phim mới hay nhất</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                    voluptas?
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 m-auto">
              <div class="card">
                <img
                  class="img-fluid"
                  src="https://s3img.vcdn.vn/123phim/2019/02/alita-bi-bom-tan-luu-lac-dia-cau-cua-ngo-kinh-vuot-mat-o-phong-ve-quoc-te-15504648479697.jpg"
                  alt="img-news"
                />
                <div class="news-title">
                  <h4>Cua lại vợ bầu phim mới hay nhất</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                    voluptas?
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 m-auto">
              <div class="card">
                <img
                  class="img-fluid"
                  src="https://s3img.vcdn.vn/123phim/2019/02/5-dien-vien-duoc-don-the-cho-ben-affleck-lam-batman-moi-15504804719276.jpg"
                  alt="img-news"
                />
                <div class="news-title">
                  <h4>Cua lại vợ bầu phim mới hay nhất</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                    voluptas?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="menu111" class="container tab-pane fade">
          <br />
          <h3>Bình luận phim</h3>
          <div class="rating">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-sm-6 col-lg-6">
                  <div class="title py-3">Đánh giá phim hay nhất</div>
                  <form #formRating="ngForm" (ngSubmit)="ratingStar(formRating)">
                    <div class="form-group form-hoder">
                      <input type="text" name="TenDanhGia" #TenDG="ngModel" ngModel class="form-control" placeholder="Nhập vào tên của bạn">
                    </div>
                    <!-- Valiation GMAIL COMMENT -->
                    <div *ngIf="EmailDG.errors && formRating.submitted">
                      <div *ngIf="EmailDG.errors.required || EmailDG.errors.pattern" class=" p-1">
                          
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" name="EmailDanhGia" #EmailDG="ngModel" ngModel required class="form-control" placeholder="Email của bạn ?" [pattern]='"^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@"
                      + "[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$"'>
                    </div>
                 
                    <div class="form-group">
                      <textarea rows="5" name="NoiDung" #NoiDungDG="ngModel" ngModel class="form-control" placeholder="Đánh giá về bộ phim ?"></textarea>
                    </div>
                    <div class="saodanhgia">
                        <input type="radio" name="SaoDanhGia" #SaoDanhGia="ngModel" ngModel value="5" id="s1"><label class="s1" for="s1">☆</label>
                        <input type="radio" name="SaoDanhGia" #SaoDanhGia="ngModel" ngModel value="4" id="s2"><label class="s2" for="s2">☆</label>
                        <input type="radio" name="SaoDanhGia" #SaoDanhGia="ngModel" ngModel value="3" id="s3"><label class="s3" for="s3">☆</label>
                        <input type="radio" name="SaoDanhGia" #SaoDanhGia="ngModel" ngModel value="2" id="s4"><label class="s4" for="s4">☆</label>
                        <input type="radio" name="SaoDanhGia" #SaoDanhGia="ngModel" ngModel value="1" id="s5"><label class="s5" for="s5">☆</label>
                      </div>
                      <button type="submit" class="btn btn_danhgia">Gửi đánh giá</button>
                  </form>
                </div>
                <div class="col-sm-6 col-lg-6">
                  <div class="boxscroll">
                      <app-comment-phim *ngFor="let item of commentArr" [itemComment]="item"></app-comment-phim>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="menu112" class="container tab-pane fade">
          <br />
          <h3>Menu 2</h3>
          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam.
          </p>
        </div>
      </div>
    </div>
    <!-- Nav pills -->
  </div>
  
		@endsection
		