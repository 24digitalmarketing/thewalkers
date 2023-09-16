<div class="modal" id="product-quick-view" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="product-quick-viewId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                @php
                    $checkUserLogin = checkUserLogin();
                @endphp
                @if ($checkUserLogin['status'])
                    @php
                        $user_id = $checkUserLogin['data']['user_id'];
                    @endphp
                @else
                    @php
                        $user_id = false;
                    @endphp
                @endif

                @php
                    $getProduct = DB::table('products')
                        ->where([['slug', '=', 'testing'], ['status', '=', 'ACTIVE']])
                        ->get();
                    $main_pic_arr = json_decode($getProduct[0]->main_pic, true);
                    $all_pic_arr = json_decode($getProduct[0]->all_pic, true);
                @endphp

                <div class="container">
                    <!-- Main Content -->
                    <div id="quick-view-container ProductSection-product-template"
                        class="product-template__container prstyle2">
                        <!-- #ProductSection product template -->
                        <div class="product-single">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-details-img">
                                        <!-- Product Images -->
                                        <div class="product-thumb">
                                            <div id="product-tumb-box" class="product-dec-slider-2 product-tab-left">
                                                {{-- @foreach ($all_pic_arr as $app_pic_key => $single_all_pic)
                                                @php
                                                    $pic_data = getMediaUrl($single_all_pic['file_id']);
                                                @endphp
                                                @if ($app_pic_key == 0)
                                                    @php
                                                        $active = 'active';
                                                    @endphp
                                                @else
                                                    @php
                                                        $active = '';
                                                    @endphp
                                                @endif

                                                <a data-image="{{ $pic_data['src'] }}"
                                                    data-zoom-image="{{ $pic_data['src'] }}"
                                                    class="slick-slide slick-cloned {{ $active }}"
                                                    data-slick-index="{{ $app_pic_key }}" aria-hidden="true"
                                                    tabindex="-1">
                                                    <img class="blur-up lazyload" src="{{ $pic_data['src'] }}"
                                                        alt="{{ $pic_data['alt'] }}"
                                                        title="{{ $pic_data['title'] }}" />
                                                </a>
                                            @endforeach --}}

                                            </div>
                                        </div>
                                        <div class="zoompro-wrap product-zoom-right pl-20">
                                            <div class="zoompro-span" id="quick-main-pic">
                                                {{-- @php
                                                $main_pic_url = getMediaUrl($main_pic_arr[0]['file_id']);
                                            @endphp
                                            <img class="blur-up lazyload zoompro"
                                                data-zoom-image="{{ $main_pic_url['src'] }}"
                                                alt="{{ $main_pic_url['alt'] }}"
                                                src="{{ $main_pic_url['src'] }}"
                                                title="{{ $main_pic_url['title'] }}" /> --}}
                                            </div>

                                            <!-- Product Label -->
                                            @if ($getProduct[0]->tag != '' || $getProduct[0]->tag != null)
                                                @if ($getProduct[0]->tag == 'Hot' || $getProduct[0]->tag == 'Sale')
                                                    <div class="product-labels rectangular"><span
                                                            class="lbl on-sale">{{ $getProduct[0]->tag }}</span>
                                                    </div>
                                                @elseif($getProduct[0]->tag == 'Exclusive')
                                                    <div class="product-labels rectangular"><span
                                                            class="lbl pr-label2">{{ $getProduct[0]->tag }}</span>
                                                    </div>
                                                @else
                                                    <div class="product-labels rectangular"><span
                                                            class="lbl pr-label1">New</span>
                                                    </div>
                                                @endif
                                            @endif

                                            <!-- End Product Label -->

                                        </div>

                                        <!-- End Product Images -->
                                        <!-- Wishlist - Share -->
                                        <div class="display-table shareRow pt-4 pb-0 d-table">
                                            <div class="display-table-cell text-center align-top">
                                                <div class="social-sharing">
                                                    <a target="_blank" href="#"
                                                        class="btn btn--small btn--secondary btn--share share-facebook"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Share on Facebook">
                                                        <i class="icon an an-facebook" aria-hidden="true"></i>
                                                    </a>
                                                    <a target="_blank" href="#"
                                                        class="btn btn--small btn--secondary btn--share share-twitter"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Tweet on Twitter">
                                                        <i class="icon an an-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a target="_blank" href="#"
                                                        class="btn btn--small btn--secondary btn--share share-google"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Share on google+">
                                                        <i class="icon an an-google-plus" aria-hidden="true"></i>
                                                    </a>
                                                    <a target="_blank" href="#"
                                                        class="btn btn--small btn--secondary btn--share share-pinterest"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Pin on Pinterest">
                                                        <i class="icon an an-pinterest-p" aria-hidden="true"></i>
                                                    </a>
                                                    <a target="_blank" href="#"
                                                        class="btn btn--small btn--secondary btn--share share-email"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Share by Email">
                                                        <i class="icon an an-envelope" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Wishlist - Share -->

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="product-info">
                                    <!-- Product Info -->
                                    <div class="product-single__meta">
                                        <h1 class="product-single__title">{{ $getProduct[0]->name }} </h1>

                                        <!-- Product Reviews -->
                                        <div class="prInfoRow d-flex flex-wrap">
                                            <div class="product-review">
                                                <a class="reviewLink d-flex flex-wrap align-items-center"
                                                    href="#tab2">
                                                    <i class="an an-star"></i><i class="an an-star"></i><i
                                                        class="an an-star"></i><i class="an an-star"></i><i
                                                        class="an an-star-half-alt"></i>
                                                    <span class="spr-badge-caption">6 reviews</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Product Reviews -->
                                        <!-- Product Price -->

                                        @php
                                            $productVariation = getProductVariation($getProduct[0]->product_id);
                                        @endphp

                                        <div class="product-single__price product-single__price-product-template">
                                            <span class="visually-hidden">Regular price</span>
                                            <s id="ComparePrice-product-template">
                                                @if ($productVariation[0]->oldprice != 0)
                                                    <span class="money" id="old-price">Rs.
                                                        {{ $productVariation[0]->oldprice }}</span>
                                                @endif

                                            </s>
                                            <span
                                                class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money"
                                                        id="price">Rs.
                                                        {{ $productVariation[0]->price }}</span></span>
                                            </span>

                                        </div>
                                        <!-- End Product Price -->
                                        <div class="product-info">
                                            <p class="product-stock">Availability: <span class="instock stock">In
                                                    Stock</span></p>
                                            <p class="product-sku">SKU: <span class="variant-sku">3435DT-1</span>
                                            </p>
                                        </div>
                                        <!-- Product Description -->
                                        <div class="product-single__description rte">
                                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the
                                                1500s.</p>

                                        </div>
                                        <!-- End Product Description -->

                                        @php
                                            // product quantity msg
                                            $productVariation[0]->stock == 0 ? ($hideQtyMsg = 'hide') : ($hideQtyMsg = '');
                                        @endphp

                                        <div id="quantity_message" class="{{ $hideQtyMsg }}">Hurry! Only <span
                                                class="items "
                                                id="stock-quantity">{{ $productVariation[0]->stock }}</span>
                                            left in stock.</div>

                                        <!-- Form -->
                                        <form method="post" id="cart-form"
                                            onsubmit="addToCart('cart-form','{{ route('frontend.addToCart') }}','cart-error',event)"
                                            class="product-form product-form-product-template product-form-border hidedropdown pb-3">
                                            <!-- Size Swatch -->

                                            @csrf

                                            {{-- hidden input  --}}
                                            <input type="hidden" name="product_id"
                                                value="{{ $getProduct[0]->product_id }}" required>
                                            <input type="hidden" name="variant"
                                                value="{{ $productVariation[0]->id }}" required id="product-variant">

                                            <div class="swatch clearfix swatch-1 option2 w-100" data-option-index="1">
                                                <div class="product-form__item">
                                                    <label>Size<a href="#sizechart" class="sizelink">Size Guide <i
                                                                class="icon an an-question"></i></a></label>

                                                    @php
                                                        $size = DB::table('product_variation')
                                                            ->select('size')
                                                            ->distinct()
                                                            ->where('product_id', '=', $getProduct[0]->product_id)
                                                            ->orderBy('id', 'asc')
                                                            ->get();
                                                    @endphp
                                                    @if (count($size) > 0)
                                                        @php
                                                            $selected_size = $size[0]->size;
                                                        @endphp
                                                        @foreach ($size as $size_key => $single_size)
                                                            @if ($size_key == 0)
                                                                @php
                                                                    $active_size = 'checked';
                                                                @endphp
                                                            @else
                                                                @php
                                                                    $active_size = '';
                                                                @endphp
                                                            @endif

                                                            <div data-value="{{ $single_size->size }}"
                                                                class="swatch-element">
                                                                <input class="swatchInput size-input"
                                                                    id="size{{ $size_key }}" type="radio"
                                                                    name="size" value="{{ $single_size->size }}"
                                                                    {{ $active_size }}
                                                                    onchange="getProductColor('color-box','{{ $getProduct[0]->product_id }}', event)">
                                                                <label class="swatchLbl medium"
                                                                    for="size{{ $size_key }}"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="{{ $single_size->size }}">{{ $single_size->size }}</label>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                </div>
                                            </div>
                                            <!-- End Size Swatch -->
                                            <!-- Image Swatch -->
                                            <div class="swatch clearfix swatch-0 option1 w-100" data-option-index="0">
                                                <div class="product-form__item">
                                                    <label>Color</label>

                                                    @php
                                                        $getColors = DB::table('product_variation')
                                                            ->where([['product_id', '=', $getProduct[0]->product_id], ['size', '=', $selected_size]])
                                                            ->orderBy('id', 'asc')
                                                            ->get();
                                                    @endphp

                                                    <div id="color-box">
                                                        @if (count($getColors) > 0)
                                                            @foreach ($getColors as $color_key => $single_color)
                                                                @if ($color_key == 0)
                                                                    @php
                                                                        $active_color = 'checked';
                                                                    @endphp
                                                                @else
                                                                    @php
                                                                        $active_color = '';
                                                                    @endphp
                                                                @endif

                                                                <div data-value="{{ $single_color->color }}"
                                                                    class="swatch-element color available">
                                                                    <input class="swatchInput"
                                                                        id="color{{ $color_key }}" type="radio"
                                                                        name="color"
                                                                        value="{{ $single_color->color }}"
                                                                        {{ $active_color }}
                                                                        onchange="colorSelection('{{ $getProduct[0]->product_id }}',event)">
                                                                    <label class="swatchLbl color large"
                                                                        for="color{{ $color_key }}"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        title="{{ $single_color->color }}"
                                                                        style="background-color: {{ $single_color->color }}"></label>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Product Action -->
                                            <div class="product-action-box w-100" id="product-action-box">

                                                {{-- check if product added in cart or not  --}}

                                                @php
                                                    if (session()->has('cart')) {
                                                        $cart = session()->get('cart');
                                                        $has_in_cart = false;
                                                        foreach ($cart as $single_cart) {
                                                            $cart_variant = $single_cart['variant'];
                                                            if ($productVariation[0]->id == $cart_variant) {
                                                                $has_in_cart = true;
                                                                break;
                                                            }
                                                        }
                                                    } else {
                                                        $has_in_cart = false;
                                                    }
                                                @endphp

                                                @if ($has_in_cart === true)
                                                    <div class="product-action clearfix px-0">
                                                        <div class="product-form__item--submit gotocart-btn">
                                                            <a href="{{ route('frontend.showCart') }}"
                                                                class="btn product-form__cart-submit"><span>Go To
                                                                    Cart</span></a>
                                                        </div>
                                                    </div>
                                                @else
                                                    @if ($productVariation[0]->stock == 0)
                                                        <div class="product-action clearfix px-0">
                                                            <div class="product-form__item--submit out-of-stock-btn">
                                                                <button type="button" name="add"
                                                                    class="btn product-form__cart-submit"><span>Out
                                                                        of
                                                                        Stock</span></button>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="product-action clearfix">
                                                            <div class="product-form__item--quantity">
                                                                <div class="wrapQtyBtn">
                                                                    <div class="qtyField">
                                                                        <a onclick="qnt_incre('minus')"
                                                                            class="qtyBtn minus"
                                                                            href="javascript:void(0);"><i
                                                                                class="icon an an-minus"
                                                                                aria-hidden="true"></i></a>
                                                                        <input type="number" name="quantity"
                                                                            value="1"
                                                                            class="product-form__input qty" />
                                                                        <a onclick="qnt_incre('plus')"
                                                                            class="qtyBtn plus"
                                                                            href="javascript:void(0);"><i
                                                                                class="icon an an-plus"
                                                                                aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-form__item--submit">
                                                                <button type="submit" name="add"
                                                                    class="btn product-form__cart-submit"><span>Add
                                                                        to
                                                                        cart</span></button>
                                                            </div>
                                                            <div class="payment-button" data-shopify="payment-button">
                                                                <button type="submit"
                                                                    class="payment-button__button payment-button__button--unbranded">Buy
                                                                    it
                                                                    now</button>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif


                                            </div>

                                            <!-- End Product Action -->
                                            <!-- Wishlist - Compare -->
                                            <div class="infolinks d-flex flex-wrap align-items-center px-0 mb-0">
                                                @if ($user_id === false)
                                                    {{-- show login button  --}}
                                                    <a class="wishlist add-to-wishlist d-flex align-items-center"
                                                        href="javascript:;" onclick="show_modal('login-modal')"><i
                                                            class="fa-regular fa-heart icon me-1"></i> <span>Add to
                                                            Wishlist</span></a>
                                                @else
                                                    {{-- show add to wishlist button  --}}
                                                    <a class="wishlist add-to-wishlist d-flex align-items-center"
                                                        href="javascript:;"
                                                        onclick="addIntoWishlist('{{ route('user_account.addWishlist') }}','{{ $user_id }}','product-variant')"><i
                                                            class="fa-regular fa-heart icon me-1"></i> <span>Add to
                                                            Wishlist</span></a>
                                                @endif

                                                <a class="wishlist emaillink d-flex align-items-center"
                                                    href="#productInquiry"><i class="icon an an-envelope me-1"
                                                        style="margin-top:-1px;"></i>
                                                    <span>Enquiry</span></a>
                                                <a class="wishlist shippingInfo d-flex align-items-center"
                                                    href="#ShippingInfo"><i
                                                        class="icon an an-telegram-plane me-1"></i> <span>Delivery
                                                        &amp;
                                                        Returns</span></a>
                                            </div>
                                            <!-- End Wishlist - Compare -->
                                            <div id="cart-error" class="w-100 mt-3"></div>
                                        </form>
                                        <!-- End Form -->

                                    </div>
                                    <!-- End Product Info -->
                                </div>
                            </div>
                            <!-- End Product single -->

                        </div>
                        <!-- #ProductSection product template -->
                    </div>
                    <!-- End Main Content -->
                </div>
            </div>

        </div>
    </div>
</div>
