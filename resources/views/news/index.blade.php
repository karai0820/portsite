@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <p>Latest Tip</p>
        @if (!is_null($headline))
            <div class="row">
            @inject('str','Illuminate\Support\Str')
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                    @if ($headline->image_path)
                                        <img src="{{$headline->image_path}}">
                                    @endif
                                </div>
                                <div class="title p-2">
                                    <h1>{{$str::limit($headline->title,20)}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                            <p class="body mx-auto">{{$str::limit($headline->body,70)}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ $str::limit($post->title,20) }}
                                </div>
                                <div class="body mt-3">
                                    {{ $str::limit($post->body,150)}}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if($post->image_path)
                                    <img src="{{$post->image_path}}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection