$(document).ready(function (){
   //to check Admin password is correct or not
    $("#current_password").keyup(function (){
        console.log('$("#current_password").val()')
        console.log($("#current_password").val())
        var current_password = $("#current_password").val();
        // alert(current_password);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/check_current_password',
            data:{current_password:current_password},
            success:function (response){
                console.log("data",response)
                if(response == "false"){
                    $("#verifyCurrentPassword").html("invalid Password!");
                }else if(response == "true"){
                    $("#verifyCurrentPassword").html("valid Password");
                }
            },error:function (){
                alert("Error!");
            }
        });
    });
});

//update category status
function updateCategoryStatus(id){
    console.log('id',id);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'post',
        url:'/admin/update_category_status',
        data:{category_id:id},
        success:function (response){
            console.log('response')
            console.log(response)
        },error:function (){
           alert("Error!");
        }
    });
}

//update product status
function updateProductStatus(id){
    console.log('id',id);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'post',
        url:'/admin/update_product_status',
        data:{id:id},
        success:function (response){
            console.log('response')
            console.log(response)
        },error:function (){
            alert("Error!");
        }
    });
}
