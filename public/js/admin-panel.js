/**
 * Created by issymac on 4/1/15.
 */

/* Load positions into postion <selec> */
$( ".selectCategory" ).change(function()
{
    //alert("Working");
    $.getJSON("getcategory/"+ $(this).val(), function(jsonData){
        //alert("Json data = "+jsonData[0].id.toString()+" "+jsonData[0].category_name.toString());
        //select = '<label for="tip-category">Category</label>';
        select = '<select name="pet_category" class="form-control" required id="pet_category" >';
        $.each(jsonData, function(i,data)
        {
            select +='<option value="'+data.id+'">'+data.category_name+'</option>';
        });
        select += '</select>';

        $("#tip_pet_category").html(select);

        //$('.ajaxselect').append(select);
    });
});

$( ".pet_select_category" ).change(function()
{
    //alert("Working");
    $.getJSON("getcategory/"+ $(this).val(), function(jsonData){
        //alert("Json data = "+jsonData[0].id.toString()+" "+jsonData[0].category_name.toString());
        //select = '<label for="tip-category">Category</label>';
        select = '<select name="pet_category" class="form-control" required id="pet_category" >';
        $.each(jsonData, function(i,data)
        {
            select +='<option value="'+data.id+'">'+data.category_name+'</option>';
        });
        select += '</select>';

        $("#pet_category_id").html(select);

        //$('.ajaxselect').append(select);
    });
});

//$(document).on('submit', '#pet_type_form', function(event){
//
//// alert("working");
//    var info = $('.avatar_success');
//    event.preventDefault();
//    var data = { pet_type_name: $("#pet_type_name").val()};
//    //alert("working.."+data.pet_type_name.toString());
//    $.ajax({
//        url: "addtype",
//        type: "POST",
//        data: data
//    }).done(function(response) {
//        info.hide().find('ul').empty();
//        if(response.errors)
//        {
//            $.each(response.errors, function(index, error){
//                info.find('ul').append(error);
//            });
//            info.slideDown();
//        }
//        else if(response.success){
//            window.location.href = "panel";
//        }
//    });
//});
//
