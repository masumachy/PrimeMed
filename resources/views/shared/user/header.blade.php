<!--top part start here-->
<nav class="navbar navbar-light bg-color">
    <div class="container">
            <a href="" class="contact">&nbsp;<i class="fas fa-phone-volume"></i> 017123457654&nbsp;</a>
            <a href="" class="email">&nbsp;<i class="fas fa-envelope-open-text"></i> primemed@gmail.com&nbsp;</a>
            <div class="search-btn">
                <form class="form-inline">
                        <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
    </div>
    </div>
</nav>
<!--top part end here-->
<!--header part start here-->
<header class="header-area">
    <div class="container">
            <div class="row header">
                <div class="col-md-2">
                    <nav class="logo">
                        <a class="navbar-brand" href="{{action('User\HomeController@index')}}">prime<span>med</span></a>
                    </nav>
                </div>
                <div class="col-md-10">
                    <nav class="menu">
                        <ul>
                            <li><a href="{{action('User\HomeController@index')}}">home</a></li>
                            <li><a href="#">appointment <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    @foreach($depts as $dept)
                                        <li><a href="@if(count($dept->sub_department) > 0) # @else {{action('User\DoctorController@dept_wise',['id' => $dept->id,'slug' => $dept->slug])}} @endif">{{$dept->dept_Name}} 
                                            @if(count($dept->sub_department) > 0) <i class="fas fa-caret-right"></i> @endif</a>
                                                @if(count($dept->sub_department) > 0)
                                                <ul class="second-level">
                                                    @foreach($dept->sub_department as $sub_dept)
                                                        <li><a href="{{action('User\DoctorController@sub_dept_wise',['id' => $sub_dept->id,'slug' => $sub_dept->slug])}}">{{$sub_dept->sub_Dept_Name}}</a></li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                        </li>             
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{action('User\OrderCategoryController@order_category')}}">shop</a>
                            </li>
                            <li><a href="">lab info <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    @foreach ($labs as $item)
                                    <li><a href="{{action('User\LaboratoryController@lab',['id'=>$item->id,'slug' => $item->slug])}}">{{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{action('User\ServicesController@services')}}">services <i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="">ambulance</a></li>
                                    <li><a href="">blood donation</a></li>
                                    <li><a href="">oxygen service</a></li>
                                    <li><a href="">icu vacancy</a></li>
                                    <li><a href="">doctor support</a></li>
                                </ul>
                            </li>
                            <li><a href="">contact</a></li>
                        </ul>
                    </nav>                  
                </div>
            </div>
    </div>
</header>
<!--header part end here-->