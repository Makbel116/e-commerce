{{-- @props(['item']) --}}
@include('partials.head._head')
<body>
    
    <div class="modal show d-block fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog  modal-fullscreen modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLongTitle">{{ $item->name }}</h5>
                    <a type="button" class="close" href="/" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 ms-auto">
                            <img src="{{$item->image? asset('storage/'.$item->image): asset('images/clothes/grey man\'s blazer.jpg') }}" alt="">
                        </div>
                        <div class="col-md-7  ms-auto">
                            <h2>{{ $item->name }}</h2>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-half-o"></li>
                            </ul>
                            <div class="tags mx-4 my-4 row">
                                <p class="col-md-3 my-0">status</p>
                                <p class="col-md-3">{{ $item->status }}</p>
                            </div>
                            <div class="tags mx-4 my-4 row">
                                <p class="col-md-3 my-0">available amount</p>
                                <p class="col-md-3">{{ $item->amount }}</p>
                            </div>
                            <div class="row">
                                @php
                                    $categories = explode(',', $item->category);
                                    $num = round(12 / count($categories));
                                @endphp
                                @foreach ($categories as $category)
                                    <div class="{{ 'col-md-' . $num }} py-0">
                                        <p class="rounded text-light bg-dark mx-3">{{ $category }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <div>
                                <p class= "my-4">{{ $item->description }}</p>
                            </div>
                            <div class="price  my-4">{{ $item->price - $item->price * ($item->discount / 100) }} birr
                                @if ($item->discount !== 0)
                                    <span>{{ $item->price }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">add to wishlist</button>
                    <button type="button" class="btn btn-primary">add to cart</button>
                    <a role="button" href="/" class="btn btn-secondary" >Close</a>
                </div>
            </div>
        </div>
    </div>

</body>    
    <!-- Modal -->
