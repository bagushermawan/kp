<!-- product_list start-->
<section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Product <span>all item</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                            @foreach($produks as $p)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                    @if($p->image)
                                    <img src="http://localhost/kape/storage/app/public/{{$p->image}}"  width="100%" height="150px" alt="anu"/>
                                    @else
                                    @endif
                                        <div class="single_product_text">
                                            <h4>{{$p->title}}</h4>
                                            <h3>@currency($p->price)</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    {{$produks->links()}}

                        </div>
                        <!-- <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->