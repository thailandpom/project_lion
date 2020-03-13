<div class="bg-black d-none d-lg-block">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-2">
                <div class="text-left nav-top-logo header-color">
                    <a href="{{route('index','home')}}">
                    <img class="icon-destop" src="{{ asset('front-ends-assets/images/lion.svg')}}" >
                    </a>
                </div>
            </div>
            <div class="col-10 text-center navs">
                <div class="new-nav " id="">
                    <ul class="nav navbar-nav nav-flex-icons ml-auto  m-auto">
                        <li class="nav-item {{$seo->slug == 'home'?'active':''}}">
                        <a class="nav-link" href="{{route('index','home')}}">หน้าหลัก
                                {{-- <span class="sr-only">(current)</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"><span class="text-upderline">สมัครสมาชิก</span></a>
                        </li>
                        <li class="nav-item {{$seo->slug == 'pay_rate'?'active':''}}">
                            <a class="nav-link" href="{{route('index','pay_rate')}}">อัตราการจ่าย</a>
                        </li>
                    
                        <li class="nav-item {{$seo->slug == 'special_privileges'?'active':''}}">
                            <a class="nav-link" href="{{route('index','special_privileges')}}">สิทธิพิเศษ</a>
                        </li>
                        <li class="nav-item {{$seo->slug == 'business_partner'?'active':''}}">
                            <a class="nav-link" href="{{route('index','business_partner')}}">หุ้นส่วนธุรกิจ</a>
                        </li>
                        <li class="nav-item {{$seo->slug == 'rules'?'active':''}}">
                            <a class="nav-link" href="{{route('index','rules')}}">กติกา</a>
                        </li>
                        <li class="nav-item {{$seo->slug == 'contact'?'active':''}}">
                            <a class="nav-link" href="{{route('index','contact')}}">ติดต่อเรา</a>
                        </li>
                    </ul>
                </div>
                <div class="text-center text-border-between border-top-0 w-50 "></div>
                <div class="text-center header-color nav-phone mt-4 pt-2 "> 
                        <div class="pr-5  mt-1">
                        <div class="text-white">
                        @foreach($contact as $con)
                        @if($con->type != 3 && $con->type != 4)
                            @if($con->type == 1)
                            Phone :  <a style="color:inherit" href="tel:{{$con->name}}">{{$con->name}}<a>
                            @elseif($con->type == 2)
                            ID Line : {{$con->name}} <br>
                            @elseif($con->type == 3)
                            Email : {{$con->name}} <br>
                            @endif
                        @endif
                        @endforeach
                        </div>
                        </div>
                    </div>
            </div>
                
           
        </div>
    </div>
</div>
<div class="nav-destop ">

    {{-- <nav class="navbar navbar-expand-md navbar-dark bg-transparent bor-nav-tran sidebarNavigation bg-black" data-sidebarClass="navbar-dark bg-dark">
        <div class="container-fluid">
            
            <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="nav navbar-nav nav-flex-icons ml-auto  m-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{route('index','home')}}">หน้าหลัก
                        
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"><span class="text-upderline">สมัครสมาชิก</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','pay_rate')}}">อัตราการจ่าย</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','special_privileges')}}">สิทธิพิเศษ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','business_partner')}}">หุ้นส่วนธุรกิจ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','rules')}}">กติกา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index','contact')}}">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
</div>
<div class="nav-mobile d-block d-lg-none">
    <div class="inside-nav d-flex">
       <div class="m-auto ">
            <img class="mobile-logo" src="{{ asset('front-ends-assets/images/lion.svg')}}" >
        </div>
       <span class="color-w po-si-r burger-color" style="cursor:pointer " onclick="openNav()">&#9776;</span>
    </div>
    <div class="help-contact px-2 text-center">ID LINE : raklotto2 ,Tel : 062-4026406 </div>
<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{route('index','home')}}">หน้าหลัก</a>
        <a href="#">สมัครสมาชิก</a>
        <a href="{{route('index','pay_rate')}}">อัตราการจ่าย</a>
        <a href="{{route('index','special_privileges')}}">สิทธิพิเศษ</a>
        <a href="{{route('index','business_partner')}}">หุ้นส่วนธุรกิจ</a>
        <a href="{{route('index','rules')}}">กติกา</a>
        {{-- <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">ดูผลหวย</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
        <a class="dropdown-item" href="{{route('index','thai_lottery')}}">ดูผลหวยหุ้นไทย</a>
        <a class="dropdown-item" href="{{route('index','part_results_thai_lottery')}}">ผลหวยหุ้นไทยย้อนหลัง</a>
        <a class="dropdown-item" href="{{route('index','foreign_lottery')}}">ดูผลหวยหุ้นต่างประเทศ</a>
        <a class="dropdown-item" href="{{route('index','lottovip')}}">ดูผลหวยยี่กี</a>
    </div> --}}
        <a href="{{route('index','contact')}}">ติดต่อเรา</a>
      </div>
</div>
