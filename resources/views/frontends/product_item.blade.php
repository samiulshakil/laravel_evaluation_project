<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>ShopGrids - Bootstrap 5 eCommerce HTML Template.</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}assets/images/favicon.svg" />

<link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{asset('')}}assets/css/LineIcons.3.0.css" />
<link rel="stylesheet" href="{{asset('')}}assets/css/tiny-slider.css" />
<link rel="stylesheet" href="{{asset('')}}assets/css/glightbox.min.css" />
<link rel="stylesheet" href="{{asset('')}}assets/css/main.css" />
</head>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

<section class="item-details section">
    <div class="container">
        <div class="top-area">
        <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
        <div class="product-images">
        <main id="gallery">
        <div class="main-img">
        <img src="{{asset('')}}assets/images/product-details/01.jpg" id="current" alt="#">
        </div>
        <div class="images">
        <img src="{{asset('')}}assets/images/product-details/01.jpg" class="img" alt="#">
        <img src="{{asset('')}}assets/images/product-details/02.jpg" class="img" alt="#">
        <img src="{{asset('')}}assets/images/product-details/03.jpg" class="img" alt="#">
        <img src="{{asset('')}}assets/images/product-details/04.jpg" class="img" alt="#">
        <img src="{{asset('')}}assets/images/product-details/05.jpg" class="img" alt="#">
        </div>
        </main>
        </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
    <div class="product-info">
        <h2 class="title">{{$product->product_name}}</h2>
        <p class="category"><i class="lni lni-tag"></i> Quantity:<a href="javascript:void(0)"><span class="qty text-primary"></span>
        </a></p>
        <h3 class="price">${{$product_info->price}}</h3>
        <p class="info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt
        ut labore et dolore magna aliqua.</p>
        <div class="row">
    
        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">
                <label for="color">Select Color</label>
                <select class="form-control" id="color">
                    @foreach($product->productInfos as $product_info)
                        <option value="{{$product_info->id}}">{{$product_info->color}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-4 col-12">
            <div class="form-group">
                <label for="size">Select Size</label>
                <select class="size form-control" name="pice" id="product_price">
                    @foreach($product->productInfos as $product_info)
                        <option value="{{$product_info->id}}">{{$product_info->size}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-4 col-12">
        <div class="form-group quantity">
        <label for="color" class="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity">
        </div>
        </div>
        </div>
        <div class="bottom-content">
        <div class="row align-items-end">
        <div class="col-lg-4 col-md-4 col-12">
        <div class="button cart-button">
        <button class="btn" style="width: 100%;">Add to Cart</button>
        </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="wish-button">
        <button class="btn"><i class="lni lni-reload"></i> Compare</button>
        </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="wish-button">
        <button class="btn"><i class="lni lni-heart"></i> To Wishlist</button>
        </div>
        </div>
        </div>
        </div>
    </div>
        </div>
        </div>
        </div>
        <div class="product-details-info">
        <div class="single-block">
        <div class="row">
        <div class="col-lg-6 col-12">
        <div class="info-body custom-responsive-margin">
        <h4>Details</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
        <h4>Features</h4>
        <ul class="features">
        <li>Capture 4K30 Video and 12MP Photos</li>
        <li>Game-Style Controller with Touchscreen</li>
         <li>View Live Camera Feed</li>
        <li>Full Control of HERO6 Black</li>
        <li>Use App for Dedicated Camera Operation</li>
        </ul>
        </div>
        </div>
        <div class="col-lg-6 col-12">
        <div class="info-body">
        <h4>Specifications</h4>
        <ul class="normal-list">
        <li><span>Weight:</span> 35.5oz (1006g)</li>
        <li><span>Maximum Speed:</span> 35 mph (15 m/s)</li>
        <li><span>Maximum Distance:</span> Up to 9,840ft (3,000m)</li>
        <li><span>Operating Frequency:</span> 2.4GHz</li>
        <li><span>Manufacturer:</span> GoPro, USA</li>
        </ul>
        <h4>Shipping Options:</h4>
        <ul class="normal-list">
        <li><span>Courier:</span> 2 - 4 days, $22.50</li>
        <li><span>Local Shipping:</span> up to one week, $10.00</li>
        <li><span>UPS Ground Shipping:</span> 4 - 6 days, $18.00</li>
        <li><span>Unishop Global Export:</span> 3 - 4 days, $25.00</li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('')}}assets/js/tiny-slider.js"></script>
<script src="{{asset('')}}assets/js/glightbox.min.js"></script>
<script src="{{asset('')}}assets/js/main.js"></script>
<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous">
</script>
<script>
let _token = "{{csrf_token()}}";
</script>
        <script>
             //get price 
            $(document).on('change', '#product_price', function (e) { 
				e.preventDefault();
                let product_id = $('#product_price').val();
                if (product_id) {
                    $.ajax({
                        url: "{{route('product.price')}}",
                        type: "POST",
                        data: {
                            product_id: product_id,
                            _token: _token
                        },
                        dataType: "JSON",
                        success: function (data) {
                            $('.price').html('$'+data.product.price);
                            $('#color').empty();
                            $('#color').html(data.output);
                            $('#color option[value="' + data.product.id + '"]').prop('selected', true);
                            $('.qty').html(data.product.quantity + ' item available');
                        },
                        error: function (xhr, ajaxOption, thrownError) {
                            console.log(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);
                        }
                    });
                }
	
			});

             //get color wise price 
            $(document).on('change', '#color', function (e) { 
				e.preventDefault();
                let product_id = $('#color').val();
                if (product_id) {
                    $.ajax({
                        url: "{{route('product.color')}}",
                        type: "POST",
                        data: {
                            product_id: product_id,
                            _token: _token
                        },
                        dataType: "JSON",
                        success: function (data) {
                            $('.price').html('$'+data.product.price);
                            $('#product_price').empty();
                            $('#product_price').html(data.output);
                            $('#product_price option[value="' + data.product.id + '"]').prop('selected', true);
                            $('.qty').html(data.product.quantity + ' item available');
                        },
                        error: function (xhr, ajaxOption, thrownError) {
                            console.log(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);
                        }
                    });
                }
	
			});

        </script>

</body>
</html>