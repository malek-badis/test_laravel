@extends('master')
@section("content")
<div class="container custom-login">
	<div class="row">
	 <div class="col-sm-4 col-sm-offset-4 ">
	  <form action="login" method="POST">
      <div class="mb-3">
@csrf         
      <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
      </div>
      <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
       </div>
        <button type="submit" class="btn btn-primary">Login</button>
       </form>
	 </div>
    </div>
</div>
@endsection
