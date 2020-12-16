
	 @include('header')
	 
	 <section class="log">
		 <h1>Enregistrez vous</h1>
		   <form method="post" action="/registerUser">
		   @error('name')
<p>{{ $message }}</p>
@enderror
                <div class="form-group">
				   <label for="user">Entrez votre adresse mail</label>
				   <input type="email" name="email"/>
				   <span class="text-danger"></span>
			   </div>
			   <div class="form-group">
				   <label for="user">Entrez votre nom d'utilisateur</label>
				   <input type="text" name="username"/>
				   <span class="text-danger"></span>
			   </div>
				 <div class="form-group">
				   <label for="pw">Entrez votre mot de passe</label>
				   <input type="password" name="password"/>
				   {{csrf_field()}} 
               </div>
               <div class="form-group">
				   <label for="pw">Confirmez votre mot de passe</label>
				   <input type="password" name="password_confirmation"/>
			   </div>
				  <div class="form-group">
				   <input type="submit" name="insert" value="S'inscrire" class="btn" />
			   </div>
		   </form>
	   </section>

	   @include('footer')