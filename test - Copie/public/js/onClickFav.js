$( document ).ready(function() {
    $(".fa-star").each(function(index){
        $(this).on("click", function(){
            $(this).toggleClass( "activeFavorite" );
            $.ajax({
                type: "POST",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "biere/fav/"+$(this).attr('id') ,
                data: {// change data to this object
                  _token : $('meta[name="csrf-token"]').attr('content'), 
                  idBiere : $(this).attr('id') , 
                },
                dataType: "text",
                success:function(data) {
                    return true;
                 }
            });
        });
    })
});