@extends('themes/shoppe/partials/main')
@section('content')

        <div class="content">
    <div class="content_top">
        <div class="heading">
        <h3>New Products</h3>
        </div>
        <div class="see">
            <p><a href="#">See all Products</a></p>
        </div>
        <div class="clear"></div>
    </div>
      <div class="section group">
            @foreach($produk as $p)
            <div class="grid_1_of_4 images_1_of_4">
                 <a href="preview.html">

                    <img src="{{ asset('fileimages/'.$p->gambar()->first()->file) }}" alt="{{ $p->gambar()->first()->nama }}" />
                </a>
                 <h2>{{ $p->judul }}</h2>
                <div class="price-details">
                   <div class="price-number">
                        <p><span class="harga">{{ $p->harga }}</span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Add to Cart</a></h4>
                     </div>
                    <div class="clear"></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="content_bottom">
        <div class="heading">
        <h3>Feature Products</h3>
        </div>
        <div class="see">
            <p><a href="#">See all Products</a></p>
        </div>
        <div class="clear"></div>
    </div>
        <div class="section group">
            <div class="grid_1_of_4 images_1_of_4">
                 <a href="preview.html"><img src="images/new-pic1.jpg" alt="" /></a>
                 <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                   <div class="price-number">
                        <p><span class="rupees">$849.99</span></p>
                    </div>
                            <div class="add-cart">
                                <h4><a href="preview.html">Add to Cart</a></h4>
                             </div>
                         <div class="clear"></div>
                </div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="images/new-pic2.jpg" alt="" /></a>
                 <h2>Lorem Ipsum is simply </h2>
                 <div class="price-details">
                   <div class="price-number">
                        <p><span class="rupees">$599.99</span></p>
                    </div>
                            <div class="add-cart">
                                <h4><a href="preview.html">Add to Cart</a></h4>
                             </div>
                         <div class="clear"></div>
                </div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="images/new-pic4.jpg" alt="" /></a>
                 <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                   <div class="price-number">
                        <p><span class="rupees">$799.99</span></p>
                    </div>
                            <div class="add-cart">
                                <h4><a href="preview.html">Add to Cart</a></h4>
                             </div>
                         <div class="clear"></div>
                </div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
             <a href="preview.html"><img src="images/new-pic3.jpg" alt="" /></a>
                 <h2>Lorem Ipsum is simply </h2>
                 <div class="price-details">
                   <div class="price-number">
                        <p><span class="rupees">$899.99</span></p>
                    </div>
                            <div class="add-cart">
                                <h4><a href="preview.html">Add to Cart</a></h4>
                             </div>
                         <div class="clear"></div>
                </div>
            </div>
        </div>
</div>
@endsection
