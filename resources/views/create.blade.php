<x-layout>
    {{-- <link rel="stylesheet" href="../css/create.css"> --}}
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                </div>
                                <h5 class="user-name">Yuki Hayashi</h5>
                                <h6 class="user-email">yuki@Maxwell.com</h6>
                            </div>
                            <div class="about">
                                <h5>About</h5>
                                <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human
                                    experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" action="/item" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary">Item Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-2">
                                <div class="form-group">
                                    <label for="Name">Product Name</label>
                                    <input type="text" class="form-control" id="Name" name="name"
                                        value="{{ old('name') }}" placeholder="Eg. women's designer top">
                                </div>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-2">
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <input type="text" class="form-control" id="Description" name="Description"
                                        value="{{ old('Description') }}"
                                        placeholder="Enter a short description of your product">
                                </div>
                                @error('Description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-2">
                                <div class="form-group">
                                    <label for="amount">Amount available</label>
                                    <input type="number" class="form-control" id="amount" name="amount"
                                        value="{{ old('amount') }}" placeholder="Enter available amount of the product">
                                </div>
                                @error('amount')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-2">
                                <label for="status">Status of the product</label>
                                <select class="form-group form-select" name="status" id="status">
                                    <option selected value="used">Previously used</option>
                                    <option value="new">New</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-2">
                                <div class="form-group">
                                    <label for="image">Provide your Image</label>
                                    <input type="file" class="form-control" id="image"
                                        placeholder="Enter your image here" name="image" value="{{ old('image') }}">
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-2">
                                <div class="form-group">
                                    <label for="category">Product Category (comma separated)</label>
                                    <input type="text" class="form-control" id="category" name="category"
                                        value="{{ old('category') }}" placeholder="Eg. women's,t-shirt,new,top">
                                </div>
                                @error('category')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 my-2">
                            <h6 class="mt-3 mb-2 text-primary">Pricing</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-2">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    value="{{ old('price') }}" placeholder="Enter the price (in ETB)">
                            </div>
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 my-2">
                            <div class="form-group">
                                <label for="Discount">Discount</label>
                                <input type="number" class="form-control" id="Discount" name="discount"
                                    value="{{ old('discount') }}"
                                    placeholder="Enter a Discount Percentage If there's any">
                            </div>
                            @error('discount')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 my-4">
                                <div class="text-right">

                                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Add
                                        Item</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
