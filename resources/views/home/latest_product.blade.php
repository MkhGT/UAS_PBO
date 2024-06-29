<section class="shop_section layout_padding mt-4">
    <div class="container">
      <div class="heading_container heading_center py-3">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card" style="height: 520px">
                <div class="img-box">
                    <img src="products/{{$product->image}}" style="height: 300px" class="card-img-top" alt="Product Image">
                  </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: Rp.{{ $product->price }}</p>
                    <a href="#" class="m-auto btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
      <!-- <div class="btn-box">
        <a href="">
          View All Products
        </a> -->
      </div>
    </div>
  </section>
s