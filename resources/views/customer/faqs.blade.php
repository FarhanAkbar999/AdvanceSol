@extends('layouts.customer')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
  <div class="breadcrumb-area">
      <div class="container">
          <div class="breadcrumb-content">
              <ul>
                  <li><a href="{{ url ('/')}}">Home</a></li>
                  <li class="active">FAQ</li>
              </ul>
          </div>
      </div>
  </div>
  <h1 class="text-center" style="margin: 20px;">FAQs</h1>
  <!-- Li's Breadcrumb Area End Here -->
  <!-- Begin Frequently Area -->
  <div class="frequently-area pt-60 pb-50">
      <div class="container">
          <div class="row">
            <div class="col-md-3">                
              <div class="sidebar-categores-box">
                <div class="sidebar-title">
                    <h2>Filter By</h2>
                </div>
                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                    <!-- <h5 class="filter-sub-titel">Categories</h5> -->
                    <div class="categori-checkbox">
                        <form action="{{ route ('faqsFilters.post') }}" method="POST">
                          @csrf
                            <ul>
                              @foreach($faq_filters as $row)
                                <li><input type="radio" name="faqFilters" value="{{ $row->name }}"><a href="#">{{ $row->name }}</a>
                                </li> 
                              @endforeach 


                                <!-- <li><input type="radio" name="product-categori"><a href="#"> Design</a></li>
                                <li><input type="radio" name="product-categori"><a href="#"> Shipping</a></li>
                                <li><input type="radio" name="product-categori"><a href="#"> Out of Stock</a></li>
                                <li><input type="radio" name="product-categori"><a href="#"> Out Status</a></li>
                                <li><input type="radio" name="product-categori"><a href="#"> Assembly</a></li>
                                <li><input type="radio" name="product-categori"><a href="#"> Claims</a></li> -->
                            </ul>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-secondary">Apply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>  
            </div>
            <div class="col-md-9">
                <div class="frequently-content">
                    <div class="frequently-desc">
                        <h3> <strong>Below are frequently asked questions, you may find the answer for yourself</strong> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.</p>
                    </div>
                </div>
                <!-- Begin Frequently Accordin -->
                <div class="frequently-accordion">
                    <div id="accordion">
                      <!-- <div class="card actives">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Mauris congue euismod purus at semper. Morbi et vulputate massa?
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div> -->
                    @foreach($faqs as $row)
                       <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-target="#{{$row->id}}" aria-expanded="false" aria-controls="collapseTwo">
                              {{ $row->question }}
                            </a>
                          </h5>
                        </div>
                        <div id="{{$row->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            {{ $row->answer }}
                          </div>
                        </div>
                      </div>
                    @endforeach
                      <!-- <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Vestibulum a lorem placerat, porttitor urna vel?
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFour">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Aenean elit orci, efficitur quis nisl at, accumsan?
                            </a>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFive">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Pellentesque habitant morbi tristique senectus et netus?
                            </a>
                          </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingSix">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Nam pellentesque aliquam metus?
                            </a>
                          </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingSeven">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              Aenean elit orci, efficitur quis nisl at?
                            </a>
                          </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingEight">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              Morbi gravida, nisi id fringilla ultricies, elit lorem?
                            </a>
                          </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div> -->
                    </div>
                </div>
                <!--Frequently Accordin End Here -->
            </div>
          </div>
      </div>
  </div>
  <!--Frequently Area End Here -->
@endsection