<ul class="row">
    <li class="col-sm-4">
      <a href="/" class="btn btn-secondary buttons" role="button"
        >All products</a
      >
    </li>
    <li class="col-sm-4">
      <a href="/?tag=t-shirt" class="btn btn-secondary buttons" role="button">t-shirts</a>
    </li>
    <li class="col-sm-4">
      <a href="/?tag=shoe" class="btn btn-secondary buttons" role="button">shoes</a>
    </li>
  </ul>
  <ul class="row">
    <li class="col-sm-6">
      <a href="/?tag=trouser" class="btn btn-secondary buttons" role="button">trousers</a>
    </li>
    <li class="col-sm-6">
      <a href="#" role="button" class="btn btn-warning buttons"
        >special offers</a
      >
    </li>
  </ul>
  <div class="col-sm-12 buttons" id="login-signup">
  @auth
          
  <a href="/register" role="button" class="btn btn-success p-1">manage credentials</a>
  <form action="/logout" method="POST">
    @csrf
    <button  type="submit" role="button" class="btn btn-outline-success"
      >Log out</button
    >
  </form>
@else
<div class="col-sm-12 buttons" id="login-signup">
  <a href="/register" role="button" class="btn btn-success">Sign up</a>
  <a href="/login" role="button" class="btn btn-outline-success"
    >Log in</a
  >
  @endauth
</div>