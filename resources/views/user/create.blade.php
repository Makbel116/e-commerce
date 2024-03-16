@include('partials.head._head')
@include('partials.navigation._topNavBar')
@include('partials.navigation._linksNavBar')

<div class="register-ody">

    <form class="form-signin" method="POST" action="/users">
        @csrf
        <img class="mb-4" src="{{ asset('images/logo/logo.png') }}" alt="logo image" width="208" height="96">
        <h1 class="h3 mb-3 font-weight-normal">Please sign Up</h1>
        <label for="inputEmail">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" 
            autofocus>
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <label for="name">your full name</label>
        <input name="name" type="text" id="name" class="form-control" placeholder="Eg. John Doe sia"
            value="{{ old('name') }}">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <label for="company_name">Company Name</label>
        <input name="company_name" type="text" id="company_name" class="form-control"
            placeholder="your company/shop name (if any)" value="{{ old('company_name') }}">
        @error('company_name')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <label for="company_website">Company website</label>
        <input name="company_website" type="text" id="company_website" class="form-control"
            placeholder="your company website (if any)" value="{{ old('company_website') }}">
        @error('company_website')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <label for="username">Username</label>
        <input name="username" type="text" id="username" class="form-control" placeholder="Eg. john_doe"
            value="{{ old('username') }}">
        @error('username')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <label for="phone">phone</label>
        <input name="phone" type="number" id="phone" class="form-control" placeholder="Eg. 09322005801"
            value="{{ old('phone') }}">
        @error('phone')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <label for="profile_picture">profile picture</label>
        <input name="profile_picture" type="file" id="profile_picture" class="form-control"
            placeholder="Add a profile picture" value="{{ old('profile_picture') }}">
        @error('profile_picture')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <label for="about">About</label>
        <input name="about" type="text" id="about" class="form-control"
            placeholder="give some perspective about yourself" value="{{ old('about') }}">
        @error('about')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <label for="password">Password</label>
        <input name="password" type="password" id="password" class="form-control" placeholder=" password">
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <label for="password_confirmation">Password</label>
        <input name="password_confirmation" type="password" id="password_conformation" class="form-control"
            placeholder="confirm your Password">
        @error('password_confirmation')
            <p class="text-danger">{{ $message }}</p>
        @enderror


        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>
