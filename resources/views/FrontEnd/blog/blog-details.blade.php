@extends('FrontEnd.layouts.master')
@section('title', 'Chi tiết Blog')

@section('body')
<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2>{{ $blog->title }}</h2>
                        <p>
                            {{-- <span>- {{ $blog->created_at->format('d/m/Y') }}</span> --}}
                            <span>- {{ $blog->category }}</span>
                        </p>
                    </div>
                    <div class="blog-large-pic">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-detail-desc">
                        <h4>{{ $blog->subtitle }}</h4>
                        <div class="blog-content">
                            {!! $blog->content !!}
                        </div>
                    </div>

                    <!-- Related Blog Posts -->
                    @if(isset($relatedBlogs) && count($relatedBlogs) > 0)
                    <div class="related-blog">
                        <h4>Bài viết liên quan</h4>
                        <div class="row">
                            @foreach($relatedBlogs as $relatedBlog)
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="bi-pic">
                                        <img src="{{ asset('storage/' . $relatedBlog->image) }}" alt="{{ $relatedBlog->title }}">
                                    </div>
                                    <div class="bi-text">
                                        <h4><a href="{{ route('blog.show', $relatedBlog->id) }}">{{ $relatedBlog->title }}</a></h4>
                                        <p>{{ Str::limit($relatedBlog->subtitle, 100) }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
@endsection