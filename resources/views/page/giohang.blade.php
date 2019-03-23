	@extends('master')
	@section('content')
	<style>
	.nav-datve
{
    padding: 14px;
    box-shadow: 0 0 15px rgba(0,0,0,.3);
    z-index:122;
    position:relative;
}
.wrapper
{
    overflow: hidden;
    /* position: relative; */
}
.homnay-time
{
    font-size: 13px;
    color: rgb(156, 156, 156);
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    bottom: 0;
    right: 0;
    background-color: rgb(255, 255, 255);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidenav h6 {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    display: block;
    transition: 0.3s;
  }
  
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color:black;
    cursor: pointer;
  }

 #thanhtoan-btn
 {
   margin: 0px 17px 17px 0px;
   position: fixed;
   right: 0;
   bottom: 0;
 }
 .tenghe-info{
   font-size: 17px;
  color: rgb(54, 189, 1);
   
 }

 .btn-xacnhan
 {
   bottom: 10px;
   right: 0;
   position: absolute;
 }
 .tinhtien
 {
   font-size: 25px;
   color: rgb(54, 189, 1);
  position: absolute;
  bottom: 0;
 }
.soghe
{
  font-size: 20px;
  color: rgb(54, 189, 1);
}
#chonghe-menu
{
  border-top: 2px solid red;
} 
 .tenphim
 {
   color:red;
   font-size: 20px;
 }
  #main {
    transition: margin-right .5s;
    -webkit-transition: margin-right .5s;
    -moz-transition: margin-right .5s;
    -ms-transition: margin-right .5s;
    -o-transition: margin-right .5s;
}
  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  .screen img
  {
    width:90%;
    margin: auto;
  }
  .ghe-ngoi
  {
    width: 50%;
  }
  .icon-bapnuoc
  {
    font-size: 20px;
    cursor: pointer;
  }
  .img-phim
  {
    position:absolute;
    z-index:-1;
  }
  .ghetrong
  {

    background: gainsboro;
  }
  .ghedaconguoichon
  {
    background: gray;
  }
  .user-name
  {
    color: red;
  }
  #thoigiandat
  {
    font-size: 30px;
    color: red;
  }
  /* Variables
–––––––––––––––––––––––––––––––––––––––––––––––––– */



/* Basic Config
–––––––––––––––––––––––––––––––––––––––––––––––––– */

ul {
	list-style-type: none;
	padding-left: 50px;
	margin: 0;
}

li {
	display: block;
	position: relative;
	padding: 10px 0px;
}

h2 {
	margin: 10px 0;
	font-weight: 900;
}


/* Card
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.method-tt
{
  position: absolute;
  bottom: 75px;
}
.card {
	display: flex;
	flex-direction: column;	
	background: #FDFBFB;
	width: 300px;
	padding: 15px 20px;
	border-radius: 20px;
	box-shadow: 0 19px 38px rgba(0, 0, 0, 0.13);
}


/* Radio Button
–––––––––––––––––––––––––––––––––––––––––––––––––– */
input[type=radio] {
	position: absolute;
	visibility: hidden;
}

label { 
	cursor: pointer; 
	font-weight: 400;
}

.check {

	width: 20px; height: 20px;
	position: absolute;
	border-radius: 50%;
	transition: transform .6s cubic-bezier(0.68, -0.55, 0.27, 1.55);
}

/* Reset */
input#one ~ .check {

	transform: translate(-50px, -25px);
	background: #B2D7F5;
	-webkit-transform: translate(-50px, -25px);
	-moz-transform: translate(-50px, -25px);
	-ms-transform: translate(-50px, -25px);
	-o-transform: translate(-50px, -25px);
}
input#two ~ .check {

	transform: translate(-50px, -83px);
	background: rgb(116, 174, 223);
	box-shadow: 0 6px 12px rgba(33, 150, 243, 0.35);
	-webkit-transform: translate(-50px, -83px);
	-moz-transform: translate(-50px, -83px);
	-ms-transform: translate(-50px, -83px);
	-o-transform: translate(-50px, -83px);
}

/* Radio Input #1 */
input#one:checked ~ .check { transform: translate(-50px, 33px); }

/* Radio Input #2  */
input#two:checked ~ .check { transform: translate(-50px, -25px); }


	</style>
	<div class="wrapper">
  <div class="content">
    <div id="main">
      <div class="menu">
        <div class="nav-datve">
          <div class="row container m-auto">
            <div class="col-md-9 text-center">
              <div class="row ">
                <div class="col-md-4 py-2" id="chonghe-menu">01 Chọn ghế</div>
                <div class="col-md-4 py-2" id="chonghe-menu2">02 Thanh toán</div>
                <div class="col-md-4 py-2">03 Kết quả đặt vé</div>
              </div>
            </div>
            <div class="col-md-3 text-center py-2">
            <div class="icon-person">
              <i class="fa fa-user-circle"></i>
              <span class="hello-user ml-2">Hi.</span>
              <span class="user-name px-1"> !</span>
            </div>
            <div>
            </div>
          </div>
        </div>
        </div>
      <div class="row">
        <div class="col-md-3">
          <div class="img">
            <img
              [src]="chiTietPhim.HinhAnh"
              class="d-block m-auto"
              width="300px"
              height="577px"
            />
          </div>
        </div>
        <div class="col-md-9">
          <div class="container px-5">
            <div class="screen py-4 d-flex m-auto">
              <img
                class=""
                src="https://www.123phim.vn/app/assets/img/icons/screen.png"
              />
            </div>
            <div class="ghe-ngoi m-auto">
              <span class="" *ngFor="let item of lichChieu.DanhSachGhe">
                <app-item-ghe
                  [ListGhe]="item"
                  (emitStatus)="datGheParent($event)"
                ></app-item-ghe>
              </span>
            </div>
            <!-- chu thich ghe -->
            <div class="chuthich-ghe m-auto text-center py-5">
              <button height="13px" class="btn btn-light ghetrong mr-2"></button><span class="mr-4">Ghế trống</span>
              <button height="13px" class="btn btn-danger ghedangchon mr-2"></button><span class="mr-4">Ghế đang chọn</span>
              <button height="13px"class="btn ghedaconguoichon mr-2"></button><span class="mr-4">Ghế đã có người chọn</span>
              <button height="13px" class="btn btn-success ghedoi mr-2"></button><span class="mr-4">Ghế đôi</span>
              <button height="13px" class="btn btn-warning ghevip mr-2"></button><span class="mr-4">Ghế VIP</span>
            </div>
            <!-- Time Countdown -->
            <div class="text-center" id="thoigiandat"></div>
            <!-- btn Thanh toan -->
            <span
              class="ml-auto btn btn-danger"
              id="thanhtoan-btn"
              (click)="openNav()"
              >Thanh toán</span
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Slide nav. -->
    <div id="mySidenav" class="sidenav">
      <p href="#" class="closebtn" (click)="closeNav()">&times;</p>
      <h6 class="">Phiếu thanh toán</h6>
      <div class="film-info p-4">
        <p class="tenphim"></p>
        <p>Galaxy Cinema</p>
        <!-- Button to Open the Modal -->
        <button
          type="button"
          class="my-1 btn btn-light"
          data-toggle="modal"
          data-target="#myModal"
        >
          Compo bắp nước<span class="badge text-white badge-dark mx-2 p-1"></span>
        </button>
        <p class="format-text">
          Số ghế: <span class="soghe"></span>
        </p>
        <span class="format-text">Vị trí ghế: </span>
        <div class="content-ghe text-center">
          <span class="content-item" *ngFor="let item of listGheDaDat">
            <span class=" pr-2 tenghe-info"></span>
          </span>
        </div>
        <div class="method-tt">
          <div class="card">
            <p>Phương thức thanh toán</p>
            
            <ul>
              <li>
                <input type="radio" name="name" id="one" checked />
                <label for="one">Tại rạp</label>
                
                <div class="check"></div>
              </li>
              
              <li>
                <input type="radio" name="name" id="two" />
                <label for="two">Thẻ tín dụng</label>
                
                <div class="check"></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tongtien m-3">
        
        <p class="tinhtien"> đ</p>
        <button class="mr-3 btn btn-danger btn-xacnhan" id="disabled" (click)="disabledThanhToan()">Thanh toán</button>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Đặt bắp nước</h4>
        <button type="button" class="close" data-dismiss="modal">
          &times;
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th>Combo</th>
                  <th>Giá</th>
                  <th>Số lượng</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <tr *ngFor="let item of compoBapNuoc">
                  <td></td>
                  <td></td>
                  <td><span class="mr-3"></span></td>
                  <td class="icon-bapnuoc">
                    <i (click)="giamtien()" class="fa fa-minus-circle mr-2"></i>
                    <i (click)="tangtien()" class="fa fa-plus-circle"></i>
                  </td>
                </tr>
                
              </tbody>
            </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>
<script>
 openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById("thanhtoan-btn").style.opacity = "0";
    document.getElementById("chonghe-menu").style.borderTop = "none";
    document.getElementById("chonghe-menu2").style.borderTop = "2px solid red";
    // document.getElementById("chonghe-menu2").style.transition = "all";
    
}

    closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight= "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("thanhtoan-btn").style.opacity = "1";
    document.getElementById("chonghe-menu2").style.borderTop = "none";
    document.getElementById("chonghe-menu").style.borderTop = "2px solid red";
    // document.getElementById("chonghe-menu").style.transition = "all 3s";
  }
</script>
	@endsection