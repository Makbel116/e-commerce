@props(['items','listType','listId'])
{{-- edit popular to latest  --}}
<section id="{{$listType}}">
    {{-- <h2 class="section-heading">Special Offers</h2>
    <p class="section-description"></p> --}}
    <div id="{{$listId}}">
        <div class="card-group card-deck" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
            @foreach ($items as $item)
                <div class="card mx-4">
                    <img src=" {{$item->image? asset('storage/'.$item->image): asset('images/clothes/grey man\'s blazer.jpg') }}"    alt="{{ $item->name }}" class="card-img-top" />
                    <ul class="social">
                        <li>
                            <a href="/item/{{$item->id}}"  data-tip="Quick View"><i class="fa fa-search"></i></a>
                        </li>
                        <li>
                            <a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a>
                        </li>
                        <li>
                            <a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                    </ul>
                    <span class="Sale-label">{{ $item->status }}</span>
                    @if ($item->discount !== 0)
                        <span class="Discount-label">-{{ $item->discount }}%</span>
                    @endif
                    {{-- work o ratig --}}
                    {{--make card costat i size--}}
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star-half-o"></li>
                    </ul>

                    <div class="card-body">
                        <div class="card-title">
                            <h4>{{ $item->name }}</h4>
                        </div>
                        <div class="card-text">
                            <div class="price">{{ ($item->price)-(($item->price)*($item->discount/100) )}} birr
                                @if ($item->discount !== 0)
                                <span>{{$item->price}}</span>
                            @endif
                            </div>
                            <div class="add-to-carte">
                                <a href="#" class="add-to-cart" role="button">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn-outline-primary leftLst" disabled>
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </button>
        <button class="btn btn-outline-primary rightLst">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </button>
</section>

