@include('headerIndex')


<div class='aBiere'>
<img src="{{ asset('/images/' .$biere->image) }}">
  <p>Vous êtes sur la page de la bière {{$biere->type}} {{$biere->nom}}</p>
  <p>Vous pouvez trouver cette bière en brasserie chez {{$biere->brasserie}}</p>
  <p>Description : {{$biere->description}}</p>
  
</div>

@include('footer')