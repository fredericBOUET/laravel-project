@include('headerIndex')

<div id="wrapper">
@foreach ($user->bieres as $biere)
<div class="contentBiere">
<div>  
<a href="biere/{{ $biere->id }}">
<img src="{{ asset('/images/' .$biere->image) }}">
</a> </div>
    <p>Nom : {{ $biere->nom }}</p>
    <p>Brasserie : {{ $biere->brasserie }}</p>
    <p>Type : {{ $biere->type }}</p>
</div>
@endforeach
</div>
@include('footer')