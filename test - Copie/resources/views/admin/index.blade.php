

@include('header')

<div class='gestionTop'> 
  <h1>Panel de gestion des bières</h1>
  <div class="space2"></div>
  <a href="{{route('admin.create')}}">Ajouter une bière</a>
</div>


<table>
  <tr>
    <th>Nom</th>
    <th class='cache'>Brasserie</th>
    <th>Type</th>
    <th class='cache'>Image</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  
@foreach ($bieres as $biere)
<tr>
    <td>{{ $biere->nom }}</td>
    <td class='cache'>{{ $biere->brasserie }}</td>
    <td>{{ $biere->type }}</td>
    <td class='cache'>{{ $biere->image }}</td>
    <td><a href="{{route('admin.edit', $biere->id)}}">Editer</a></td>
    <td><a href="admin/{{$biere->id}}/destroy">Supprimer</a></td>
</tr>
@endforeach
</table>

<div class='gestionTop'> 
<h1>Panel de gestion des utilisateurs</h1>
</div>

<table>
  <tr>
    <th>ID</th>
    <th>Nom d'utilisateur</th>
    <th class='cache2'>Mot de passe</th>
    <th>Email</th>
    <th>Delete</th>
  </tr>
  
@foreach ($users as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td class='cache2'>{{ $user->password }}</td>
    <td>{{ $user->email }}</td>
    <td><a data-href="admin/{{$user->id}}/deleteUser"class="modalPopup" onclick="handle(this);">Supprimer</a></td>
</tr>
@endforeach
</table>

<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="confirm-buttons">
    <p>Etes-vous sur de vouloir supprimer cet utilisateur ?</p>
        <a href="" id="linkSupprimer" class="confirm-ok">Supprimer</a>
        <a class="close confirm-ok">Annuler</a>
    </div>
  </div>

</div>

@include('footer')