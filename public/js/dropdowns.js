/**
 * Created by elven on 1/27/2018.
 */
$("#state").change(function(event){
    $.get("municipalities/"+event.target.value+"",function(response,state){
        $("#municipality").empty();
        for(i=0; i<response.length; i++){
            $("#municipality").append("<option value='"+response[i].id+"'> "+response[i].municipality+"</option>");
        }
    });
});
$("#municipality").change(function(event){
    $.get("parishes/"+event.target.value+"",function(response,municipality){
        $("#parish").empty();
        for(i=0; i<response.length; i++){
            $("#parish").append("<option value='"+response[i].id+"'> "+response[i].parish+"</option>");
        }
    });
});
$("#parish").change(function(event){
    $.get("sectors/"+event.target.value+"",function(response,parish){
        $("#sector").empty();
        for(i=0; i<response.length; i++){
            $("#sector").append("<option value='"+response[i].id+"'> "+response[i].sector+"</option>");
        }
    });
});


