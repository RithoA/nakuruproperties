@extends('layouts.homepagemain')

@section('content')
<div class="profile-content">
   
       <div class="cd-section" id="blogs">
       <div class="blogs-3">

        <div class="container">
            <div class="row">

                <div class="col-md-10 col-md-offset-1" style="margin-top: 10px">
                <div class="card">
                                    <div class="card-content content-info">
                                        <h5 class="category-social">
                                            <i class="fa fa-google"></i> Google Advert
                                        </h5>
                                        <h4 class="card-title">
                                            <a href="#pablo">"You Don't Have to Sacrifice Joy to Build a Fabulous Business and Life"</a>
                                        </h4>
                                        </div>
                              </div>
 <div id="app">
@foreach($results as $item)

             <div class="card card-plain card-blog">
                        <div class="row">
                        <div class="card card-blog card-atv">
                            <div class="col-md-4">
                            
                                <div class="card-image">
                                        <a href="{{ route('ps.viewpost', $item->slug) }}">
                                            <div class="atvImg">
                                                <img class="img" src="{{ $item->coverimage }}" />
                                            </div>
                                        </a>
                                        <div class="card-icon">
                                        @if ($item->type == 'Prime')
                                                 <i class="material-icons">grade</i>
                                        @else
                                                <i class="material-icons">perm_media</i>
                                        @endif
                                            </div>
                                    </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="category text-info"></h6>
                                <h3 class="card-title">
                                    <a href="{{ route('ps.viewpost', $item->slug) }}">{{$item->title}}</a>
                                </h3>
                                <p class="card-description">
                                    {{$item->description}}<a href="{{ route('ps.viewpost', $item->slug) }}"> Read More </a>
                                </p>
                                <div class="footer">
                                        <div class="author">
                                            <a class="card-title" href="{{ route('ps.viewpost', $item->slug) }}">Ksh {{ number_format($item->price) }}</a>
                                        </div>
                                        </div>
                                        <div class="footer">
                                            <div class="author">
                                                <a href="{{ route('pr.viewprofile') }}">
                                                   <img  src="{{ $avatar}}" alt="..." class="avatar img-raised" style="margin-bottom: 15px">
                                                </a>
                                            </div>
                                        <div class="footer">
                                           <div class="stats">
                                             <!-- <a style="color: gray"><i>{{$item->created_at->diffForHumans()}}</i></a>&middot; -->
                                        
                                             <a href="#pablo" class="text-danger" data-toggle="modal" data-target="#smallAlertModal"><i class="material-icons">favorite_border</i></a>&middot;
                                             <commentcount :post="{{$item->id}}"></commentcount> &middot;
                                             <a href="#pablo" class="text-info"><i class="material-icons">share</i></a>
                                            </div>
                                        </div>
                                        </div>
                                 </div> 
                          </div>
                       </div>

                            </div>
                   
@endforeach
{!! $results->render() !!}
</div>             
</div>
</div>
</div>
</div>
</div>
</div>
@endsection