
	 @include('header')
	 
	 <section class="log">
		 <h1>Connexion</h1>
		   <form method="post" action="">
		   @error('name')
<p>{{ $message }}</p>
@enderror
			   <div class="form-group">
				   <label for="user">Entrez votre nom d'utilisateur</label>
				   <input type="text" name="username"/>
				   <span class="text-danger"></span>
			   </div>
				 <div class="form-group">
				   <label for="user">Entrez votre mot de passe</label>
				   <input type="password" name="password"/>
				   {{csrf_field()}} 
					 <span class="text-danger"></span>
			   </div>
				  <div class="form-group">
				   <input type="submit" name="insert" value="Se connecter" class="btn" />
			   </div>
		   </form>
		<a href="/register">Vous n'êtes pas encore inscrit ? Enregistrez vous</a>
	   </section>

	   @include('footer')
