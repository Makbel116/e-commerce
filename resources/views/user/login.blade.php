@include('partials.head._head')
@include('partials.navigation._topNavBar')
@include('partials.navigation._linksNavBar')

<div class="register-ody">
    <form class="form-signin" action="/user/authentcation" method="POST">
        @csrf
        <img class="mb-4" src="{{ asset('images/logo/logo.png') }}" alt="logo image" width="208" height="96">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="username" >User name</label>
      <input name="username" type="text" id="username" class="form-control" placeholder="User name" value="{{old('username')}}" autofocus>
      @error('username')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      <label for="password" >Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
      @error('password')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>