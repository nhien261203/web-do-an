<div class="filter-widget">
    <h4 class="fw-title">Categories</h4>
    <ul class="filter-catagories">
        @foreach($categories as $category)
        @if (!empty($category->name))
        <li><a href="/shop/filter/category/{{ $category->name }}">{{ $category->name }}</a></li>
        @endif
        @endforeach
    </ul>
</div>

<div class="filter-widget">
    <h4 class="fw-title">Brand</h4>
    <div class="fw-brand-check">

        <form method="POST" action="/shop/filter/brand">
            @foreach($brands as $brand)
            <div class="bc-item">
                <label for="bc-{{$brand->name}}">
                    {{$brand->name}}
                    <input type="checkbox" name="brands[]" value="{{$brand->id}}" id="bc-{{$brand->name}}" class="brand-checkbox" onchange="this.form.submit()" @if(in_array($brand->id, $selectedBrands ?? [])) checked @endif>
                    <span class="checkmark"></span>
                </label>
            </div>
            @endforeach
            @csrf
        </form>
    </div>
</div>

<!-- <div class="filter-widget">
    <h4 class="fw-title">RAM</h4>
    <form method="GET" action="/shop/filter/filterRam">
        <div class="fw-size-choose">
            <div class="sc-item">
                <input type="radio" id="s-size" name="ram" value="4" onchange="this.form.submit();" {{ request('ram') == '4' ? 'active' : '' }}>
                <label for="s-size">4GB</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="m-size" name="ram" value="8" onchange="this.form.submit();" {{ request('ram') == '8' ? 'active' : '' }}>
                <label for="m-size">8GB</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="l-size" name="ram" value="16" onchange="this.form.submit();" {{ request('ram') == '16' ? 'active' : '' }}>
                <label for="l-size">16GB</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="xs-size" name="ram" value="32" onchange="this.form.submit();" {{ request('ram') == '32' ? 'active' : '' }}>
                <label for="xs-size">32GB</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="xl-size" name="ram" value="64" onchange="this.form.submit();" {{ request('ram') == '64' ? 'active' : '' }}>
                <label for="xl-size">64GB</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="lg-size" name="ram" value="128" onchange="this.form.submit();" {{ request('ram') == '128' ? 'active' : '' }}>
                <label for="lg-size">128GB</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="xxl-size" name="ram" value="512" onchange="this.form.submit();" {{ request('ram') == '512' ? 'active' : '' }}>
                <label for="xxl-size">512GB</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="t-size" name="ram" value="1" onchange="this.form.submit();" {{ request('ram') == '1' ? 'active' : '' }}>
                <label for="t-size">1T</label>
            </div>
        </div>
    </form>
</div> -->

<!-- <div class="filter-widget">
    <h4 class="fw-title">Tags</h4>
    <div class="fw-tags">
        <a href="#">Điện thoại</a>
        <a href="#">Tai Nghe</a>
        <a href="#">Máy tính bảng</a>
        <a href="#">Laptop</a>
        <a href="#">Sạc dự phòng</a>
        <a href="#">Phụ kiện</a>
        <a href="#">Ưu đãi</a>
    </div>
</div> -->