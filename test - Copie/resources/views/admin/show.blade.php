@include('header')


<div>
<img src="{{ asset('/images/' .$biere->image) }}">
  <p>Nom : {{$biere->nom}}</p>
  <p>Brasserie : {{$biere->brasserie}}</p>
  <p>Description : {{$biere->description}}</p>
  <p>Type : {{$biere->type}}</p>
  
</div>

@include('footer')