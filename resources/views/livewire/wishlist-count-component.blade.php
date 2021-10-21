   <div class="wrap-icon-section wishlist">
        <a href="{{route('product.wishlist')}}" class="link-direction">
            <i class="fa fa-heart" aria-hidden="true"></i>
            <div class="left-info">
                @if (Cart::instance('wishlist')->count()>0)
                    <span class="index">{{Cart::instance('wishlist')->count()}} items</span>
                    <span class="title">Wishlist</span>
                @else
                    <span class="index">0 items</span>
                    <span class="title">Wishlist</span>
                @endif
            </div>
        </a>
    </div>
