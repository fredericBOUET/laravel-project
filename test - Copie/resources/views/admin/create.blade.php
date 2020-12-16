

@include('header')


<h1 class='titrePageAdmin'>Ajouter une bière</h1>
<div class='containerForm'>
    <form method="post" action="/admin">
        <div class='form-group'>
            <label for="nom">Nom</label>
            <input type="text" name="nom"  value="">
        </div>
        <div class='form-group'>
            <label for="brasserie">Brasserie</label>
            <input type="text" name="brasserie" value="">
        </div>
        <div class='form-group'>
            <label for="description" class='description'>Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class='form-group'>
            <label for="type">Type</label>
            <select name="type" id="type">
                    <option value="brune">brune</option>
                    <option value="blonde">blonde</option>
                    <option value="blanche">blanche</option>
                    <option value="rousse">rousse</option>
            </select>
        </div>
        {{csrf_field()}} 
        <input type="submit" name="submit" value="Créer" class="btn">
    </form>
</div>


@include('footer')