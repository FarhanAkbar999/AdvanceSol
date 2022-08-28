<!doctype html>
<html class="no-js" lang="zxx"> 
    <head>
        <meta charset="utf-8">
        <title>MyCabinetsPro</title>
       <meta name="description" content="If you're looking for top-quality kitchen cabinets or bathroom vanities, Cabinets Pro LLC is the place to shop. ">
       <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="rta, ready to assemble,kitchen cabinets,bathroom vanity,bathroom cabinet,corner cabinet,shaker cabinet,
        cabinet maker,kitchen cabinets colours,wall cabinet,bath vanity,base cabinet,discounts cabinet,sinkbase cabinet">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
         <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/headerfiles/logo.png')}} "style="height:20px">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/material-design-iconic-font.min.css')}} ">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/font-awesome.min.css')}} ">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/fontawesome-stars.css')}} ">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/meanmenu.css')}} ">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/owl.carousel.min.css')}} ">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/slick.css')}} ">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/animate.css')}} ">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/jquery-ui.min.css')}} ">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/venobox.css')}} ">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/nice-select.css')}} ">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/magnific-popup.css')}} ">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/bootstrap.min.css')}} ">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/helper.css')}} ">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/style.css')}} ">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('updatedFrontend/css/responsive.css')}} ">
        
        <!-- Modernizr js -->
        <script src="{{ asset('updatedFrontend/js/vendor/modernizr-2.8.3.min.js')}} "></script>
        <script src="{{ asset('js/jquery.js')}} "></script>
        <script src="https://js.stripe.com/v3/"></script>
        

         <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
        

    </head>
    <body>
        <div class="body-wrapper">        
            @include('customer.components.header')
            @yield('content')
            @include('customer.components.footer')
        </div> <!-- Body Wrapper End Here -->
        
        <!-- jQuery-V1.12.4 -->
        <!-- <script src="{{ asset('updatedFrontend/js/vendor/jquery-1.12.4.min.js')}} "></script> -->
        <!-- Popper js -->
        <script src="{{ asset('updatedFrontend/js/vendor/popper.min.js')}} "></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{ asset('updatedFrontend/js/bootstrap.min.js')}} "></script>
        <!-- Ajax Mail js -->
        <script src="{{ asset('updatedFrontend/js/ajax-mail.js')}} "></script>
        <!-- Meanmenu js -->
        <script src="{{ asset('updatedFrontend/js/jquery.meanmenu.min.js')}} "></script>
        <!-- Wow.min js -->
        <script src="{{ asset('updatedFrontend/js/wow.min.js')}} "></script>
        <!-- Slick Carousel js -->
        <script src="{{ asset('updatedFrontend/js/slick.min.js')}} "></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{ asset('updatedFrontend/js/owl.carousel.min.js')}} "></script>
        <!-- Magnific popup js -->
        <script src="{{ asset('updatedFrontend/js/jquery.magnific-popup.min.js')}} "></script>
        <!-- Isotope js -->
        <script src="{{ asset('updatedFrontend/js/isotope.pkgd.min.js')}} "></script>
        <!-- Imagesloaded js -->
        <script src="{{ asset('updatedFrontend/js/imagesloaded.pkgd.min.js')}} "></script>
        <!-- Mixitup js -->
        <script src="{{ asset('updatedFrontend/js/jquery.mixitup.min.js')}} "></script>
        <!-- Countdown -->
        <script src="{{ asset('updatedFrontend/js/jquery.countdown.min.js')}} "></script>
        <!-- Counterup -->
        <script src="{{ asset('updatedFrontend/js/jquery.counterup.min.js')}} "></script>
        <!-- Waypoints -->
        <script src="{{ asset('updatedFrontend/js/waypoints.min.js')}} "></script>
        <!-- Barrating -->
        <script src="{{ asset('updatedFrontend/js/jquery.barrating.min.js')}} "></script>
        <!-- Jquery-ui -->
        <script src="{{ asset('updatedFrontend/js/jquery-ui.min.js')}} "></script>
        <!-- Venobox -->
        <script src="{{ asset('updatedFrontend/js/venobox.min.js')}} "></script>
        <!-- Nice Select js -->
        <script src="{{ asset('updatedFrontend/js/jquery.nice-select.min.js')}} "></script>
        <!-- ScrollUp js -->
        <script src="{{ asset('updatedFrontend/js/scrollUp.min.js')}} "></script>
        <!-- Main/Activator js -->
        <script src="{{ asset('updatedFrontend/js/main.js')}} "></script>

         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

<!-- --------------- add to cart model start --------------------- -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><span id="productName"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">                            
                            <img id="pimage" src="" alt="" style="width: 200px; height: 200px;">
                        </div>
                        <div class="col-md-6 ">
                            $<span class="price" id="price"></span>

                            <input type="number" class="cart-quantity center"
                               name="quantity" value="1" min="1" id="qty">
                       </div>
                       <input type="hidden" id="product_id">
                    </div> 
                </div>       
            </div>
            <div class="modal-footer">
                @if(!Auth::id())
                <span class="text-danger">Login first to add Item into Cart</span>
                @endif
                <button type="button" class="btn btn-primary" onclick="addToCart()" style="background-color:blue;">Add To Cart </button>
            </div>
    </div>
  </div>
</div>

<!-- --------------- add to cart model end --------------------- -->

<script type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
    // Start Product View with Modal 
    function productView(id){
        // alert(id)
        $.ajax({
            type: 'GET',
            url: '/product/view/modal/'+id,
            dataType:'json',
            success:function(data){
                // console.log(data)
                $('#productName').text(data.short_description);
                $('#price').text(data.price);
                $('#pimage').attr('src','/uploads/products/'+data.image);
                $('#product_id').val(id);
            }
        })
 
    }

    // <!-- --------------- product add to cart start --------------------- -->
    function addToCart(){
        // alert("i am here")
        var product_name = $('#productName').text();
        var id = $('#product_id').val();
        var quantity = $('#qty').val();
        var price = $('#price').text();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
                quantity:quantity, product_name:product_name, price:price
            },
            url: "/cart/data/store/"+id,
            success:function(data){
                miniCart()
                miniCartSticky()
                fullCartPage()
                $('#closeModel').click();
                console.log(data)

                // Start Message 
                 const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                } /*end toast message*/
            }
        })
    }
// <!-- --------------- product add to cart end --------------------- -->
</script>

<script type="text/javascript">
     function miniCart(){
        $.ajax({
            type: 'GET',
            url: '/product/mini/cart',
            dataType:'json',
            success:function(response){
                console.log(response)

                $('span[id="miniCartTotal"]').text(response.miniCartTotal);

                $('#miniCartQty').text(response.miniCartQty);


                var miniCart = ""
                $.each(response.miniCart, function(key,value){
                    miniCart += `<li>
                                    <a href="#" class="minicart-product-image">
                                        <img style="width:50px; height:50px;" src="/uploads/products/${value.image}" alt="">
                                    </a>
                                    <div class="minicart-product-details">
                                        <h6><a href="#"></a>${value.name} * ${value.quantity}</h6>
                                        <span> $ ${value.sub_total} </span>
                                    </div>
                                    <button class="close" title="Remove">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </li>`
                });
                
                $('#miniCart').html(miniCart);
            }
        })
     }
     miniCart();
</script>

<script type="text/javascript">
     function miniCartSticky(){
        $.ajax({
            type: 'GET',
            url: '/product/mini/cart/sticky',
            dataType:'json',
            success:function(response){
                console.log(response)

                $('strong[id="miniCartTotal"]').text(response.miniCartTotal);

                $('strong[id="miniCartQty"]').text(response.miniCartQty);


                var miniCartSticky = ""
                $.each(response.miniCart, function(key,value){
                    miniCartSticky += `<span>
                        <strong> ${value.name} * ${value.quantity}</strong>
                        <strong>...... $ ${value.sub_total} </strong>
                   </span> <br>`
                });
                
                $('#miniCartSticky').html(miniCartSticky);
            }
        })
     }
     miniCartSticky();
</script>

<script type="text/javascript">
     function fullCartPage(){
        $.ajax({
            type: 'GET',
            url: '/product/mini/cart',
            dataType:'json',
            success:function(response){
                console.log(response)

                $('span[id="grandTotalCartPage"]').text(response.miniCartTotal);

                $('span[id="QtyTotalCartPage"]').text(response.miniCartQty);


                var tbodyCart = ""
                $.each(response.miniCart, function(key,value){
                    tbodyCart += `<tr>
                    <td class="li-product-name"><a href="#">${value.name}</a></td>
                    <td class="li-product-price"><span class="amount">$ ${value.unit_price}</span></td>
                    <td>
                    <div class="cart-plus-minus">
                    <input class="cart-plus-minus-box" value="${value.quantity}" min="1" max="100" disabled="" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"id="${value.id}" onclick="cartDecrement(this.id)" ></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"id="${value.id}" onclick="cartIncrement(this.id)"></i></div>
                                            </div>



                                   </td>
                                   <td class="li-product-thumbnail"><a href="#"></a></td>
                                   <td class="product-subtotal"><span class="amount"> $ ${value.sub_total}</span></td>

                                   <td class="li-product-remove" id="${value.id}" onclick="CartPageProductDelete(this.id)"><a href=""><i class="fa fa-times"></i></a></td>
                                </tr>`
                });
                
                $('#tbodyCart').html(tbodyCart);
            }
        })
     }
     fullCartPage();
</script>

<script type="text/javascript">



      // -------- CART INCREMENT --------//
    function cartIncrement(id){
        // alert(id)
        $.ajax({
            type:'GET',
            url: "/cart-increment/"+id,
            dataType:'json',
            success:function(data){
                console.log(data)
                fullCartPage()
                miniCart()
                miniCartSticky()
            }
        });
    }
 // ---------- END CART INCREMENT -----///


 // -------- CART Decrement  --------//
    function cartDecrement(id){
        $.ajax({
            type:'GET',
            url: "/cart-decrement/"+id,
            dataType:'json',
            success:function(data){
                console.log(data)
                fullCartPage()
                miniCart()
                miniCartSticky()
            }
        });
    }
 // ---------- END CART Decrement -----///
 
 function CartPageProductDelete(id){
        // alert(id)
        $.ajax({
            type:'GET',
            url: "/cart-product-delete/"+id,
            dataType:'json',
            success:function(data){
                
                fullCartPage()
                miniCart()
                miniCartSticky()

                console.log(data)

                // Start Message 
                 const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                } /*end toast message*/
            }
        });

    }


    function CartPageFullDelete(){
        // alert(id)
        $.ajax({
            type:'GET',
            url: "/cart-full-delete/",
            dataType:'json',
            success:function(data){
                
                fullCartPage()
                miniCart()
                miniCartSticky()

                console.log(data)

                // Start Message 
                 const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                } /*end toast message*/
            }
        });

    }
</script>

</body>
</html>



 
