

@include('header')


<form method="post" action="cleanDeleted" class='formCorbeille'>
<input type="hidden" name="_method" value="POST">
{{csrf_field()}} 
<table>
  <tr>
    <th>nom</th>
    <th>brasserie</th>
    <th>type</th>
    <th>image</th>
    <th>selection</th>
  </tr>
@foreach ($onlySoftDeleted as $del)
<tr>
    <td>{{ $del->nom }}</td>
    <td>{{ $del->brasserie }}</td>
    <td>{{ $del->type }}</td>
    <td>{{ $del->image }}</td>
    <td><input type="checkbox" name="delete[]" value="{{ $del->id }}"></td>
</tr>
@endforeach
</table>
<input type="submit" value="Supprimer les bières sélectionnées" id='submitCorbeille'>
</form>



@include('footer')