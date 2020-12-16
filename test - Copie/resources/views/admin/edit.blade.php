

@include('header')


<h1 class='titrePageAdmin'>Éditer une bière</h1>
<div class='containerForm'>
    <form method="post" action="/admin/{{$biere->id}}">

        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom"  value="{{$biere->nom}}">
        </div>
        <div class="form-group">
            <label for="brasserie">Brasserie</label>
            <input type="text" name="brasserie" value="{{$biere->brasserie}}">
        </div>
        <div class="form-group">
            <label for="description" class='description'>Description</label>
            <textarea name="description" id="styled" onfocus="this.value={{$biere->description}}; setbg('#e5fff3');" onblur="setbg('white')">{{$biere->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type">
                <option value="brune">brune</option>
                <option value="blonde">blonde</option>
                <option value="blanche">blanche</option>
                <option value="rousse">rousse</option>
        </select>
        </div>



        {{csrf_field()}} 
        <input type="submit" name="submit" value="Mettre à jour" class="btn">
    </form>
</div>



@include('footer')