    <div class="headertop_desc">
        <div class="call">
            <p><span>Butuh bantuan?</span> email : <span class="number">example@gmail.com</span></span>
            </p>
        </div>
        <div class="account_desc">
        @if ( Auth::guest())
            <ul>
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
                {{-- <li><a href="#">My Account</a></li> --}}
            </ul>
        @else
             <li>Selamat Datang <span class="red">{{ Auth::user()->name }}</span></li>
             <li><a href="{{ url('/'.strtolower( auth()->user()->roles()->first()->name)) }}">Dashboard</a></li>
             <li>
              <a href="{{ url('/logout') }}">Logout</a></li>
             

        @endif
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_top">
        <div class="logo">
            <a href="{{'/'}}"><img src="asset/images/log.png" alt="" /></a>
        </div>
        <div class="cart">
            <p>Selamat Datang di Toko Online! <span>Cart:</span>
                <div id="dd" class="wrapper-dropdown-2"> 
                    @if(count(carts()) > 0) 
                        {{ array_sum(array_pluck(carts(), 'qty')) }} item(s)

                    <ul class="dropdown dropdown-menu-custom">
                        @foreach(carts() as $cart)
                        <li>
                            <img src="{{ asset('fileimages/'. \App\Models\Produk::find($cart->id)->gambar()->first()->file) }}">
                            <div class="title"><a href="{{ url('produk/'.str_slug($cart->name)) }}">{{ $cart->name }}</a></div>
                            <div class="price">{{ $cart->qty }} x Rp. {{ number_format($cart->price, 0, '', '.') }}</div>
                            <form action="{{ url('cart/'.$cart->rowid) }}" method="POST">
                                {!! csrf_field(); !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="type_cart" value="belanja">
                            <button type="submit" class="close">×</button>
                            </form>
                        </li>
                        @endforeach
                        <li class="checkouts">
                            <a href="/keranjang">Lihat Keranjang</a>
                        </li>
                    </ul>
                    @else 
                        0 item(s)
                    @endif
                </div>
            </p>
        </div>
        <script type="text/javascript">
            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents: function() {
                    var obj = this;

                    obj.dd.on('click', function(event) {
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    });
                }
            }

            $(function() {

                var dd = new DropDown($('#dd'));

                $(document).click(function() {
                    $('.wrapper-dropdown-2').removeClass('active');
                });

            });
        </script>
        <div class="clear"></div>
    </div>
    <div class="header_bottom">
        <div class="menu">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/konfirmasi_pembayaran">Konfirmasi Pembayaran</a></li>
                <li><a href="contact">Contact</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="search_box">
            <form>
                <input type="text" placeholder="Search" class="search"><input type="submit" value="">
            </form>
        </div>
        <div class="clear"></div>
    </div>