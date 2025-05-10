@extends('FrontEnd.layouts.master')
@section('title', 'Blog')
@section('body')

<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <!-- Blog posts -->
            <div class="col-lg-12">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                            </div>
                            <div class="bi-text">
                                <h4><strong>{{ $blog->title }}</strong></h4>
                                <p>{{ Str::limit($blog->content, 100) }}</p>
                                <a href="{{ route('blog.show', $blog->id) }}" class="read-more">
                                    Đọc thêm <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

@endsection