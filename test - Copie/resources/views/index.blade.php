@include('headerIndex')

<div id="wrapper">
@foreach ($bieres as $biere)
<div class="contentBiere">
<div>  
<a href="biere/{{ $biere->id }}">
<img src="{{ asset('/images/' .$biere->image) }}">
</a> </div>
    <p>Nom : {{ $biere->nom }}</p>
    <p>Brasserie : {{ $biere->brasserie }}</p>
    <p>Type : {{ $biere->type }}</p>

    @php
        $count=0;
    @endphp

    @if(session()->get('id')!='')

        @foreach($arrayID as $biereID)
            @if($biereID==$biere->id)
                <span class="fa fa-star activeFavorite" id='{{ $biere->id }}'></span>
                @php
                    $count++;
                @endphp
            @endif
        @endforeach

    @endif

    @if($count==0)
        <span class="fa fa-star" id='{{ $biere->id }}'></span>
    @endif

  
</div>
@endforeach
</div>
@include('footer')