@extends('layout.header')
@extends('layout.footer')
@section('title',$post->title)
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post-item">

                    @if($post->image_url)

                        <div class="post-item-image">
                                <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                        </div>
                        
                    @endif
                
                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1><a href="post.html"> {{ $post->title }} </a></h1>
                            
                        </div>

                        <div class="post-meta padding-10 clearfix">
                            <div class="pull-left">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#"> {{ $post->author->name }}</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> {{ $post->date }}</time></li>
                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                       {!! $post->body_html !!}
                    </div>
                </article>
                <nav>
                  <ul class="pager">
                    <li class="previous disabled"><a href="#"><span aria-hidden="true">←</span> Newer</a></li>
                    <li class="next"><a href="#">Older <span aria-hidden="true">→</span></a></li>
                  </ul>
                </nav>
            </div>
            
            @include('layout.sidebar')
        </div>
    </div>

@endsection