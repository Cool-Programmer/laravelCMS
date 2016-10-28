@extends('layouts.app')

@section('navigations')


    @if(count($categories))
        @foreach($categories as $category)
            <li><a href="#">{{$category->name}}</a></li>
        @endforeach()
    @endif()


@endsection()


@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

            {{-- MAIN ARTICLE --}}
            @if(count($posts)>0)
                @foreach($posts as $post)
                    <h2>
                        <a href="#">{{$post->title}}</a>
                    </h2>

                     <p class="lead">
                        by <span class="text-success">{{$post->user->name}}</span>
                    </p>
                @endforeach()
            @endif()
               
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at->toDayDateTimeString()}}</p>
                <hr>
                <img class="img-responsive" height="300" width="900" src="{{$post->photo->path ? $post->photo->path : 'http://placehold.it/900x300'}}" alt="">
                <hr>
                <p>{{$post->body}}</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                @if(count($categories) > 0)
                                    @foreach($categories as $category)
                                        <li><a href="#">{{$category->name}}</a></li>
                                    @endforeach()
                                @endif()
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
@endsection
