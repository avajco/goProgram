$("document").ready(function(){

    $("#submit").click(function(){
     var added_by = $(".addedby").attr("data-addedby");
    // var Aname = $(".Aname").val;
    //var   ABname =$(".ABname").attr();
    //var   
    alert(added_by);


    });


    $("#Aname").keyup(function(){
        var result = $("#Aname").val();
        if(result == ""){
            $("#result").html("");
        }else{
        $.ajax({
                type:"post",
                url:"findArtist.php",
                data:{
                    search: result
                },
                success: function(name){
                    $("#result").html(name).show();
                }


        });


        }



    });

    $("#ABname").keyup(function(){
        var result = $("#ABname").val();
        if(result == ""){
            $("#result").html("");
        }else{
        $.ajax({
                type:"post",
                url:"findalbum.php",
                data:{
                    search: result
                },
                success: function(name){
                    $("#result").html(name).show();
                }


        });


        }



    });







});