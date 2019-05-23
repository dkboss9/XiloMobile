// function post(a)
// {
//   // confirm("do you want confirm");
//   var comment = document.getElementById("comment").value;
//   var p_id = a;
 
//     $.ajax
//     ({
//       type: 'post',
//       url: 'post_comments.php',
//       data: 
//       {
//          user_comm:comment,
// 	     product:p_id
//       },
//       success: function (response) 
//       {
// 	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    
  
//       }
//     });
// }



//For Comment 
  $(document).ready(function () {
            $("#submit").click(function () {
                var pid = $('#p_id').val();
                var comment = $('#comment').val();
              

                    $.ajax({
                        url:"../comment/post_comments.php",
                        method:"post",
                        data: {"user_comm":comment,"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#hang').html(value);
                            
                        }
                    });
            });
        });
  //For Five Star
  $(document).ready(function () {
            $("#star5").click(function () {
                var pid = $('#p_id').val();
                 alert("You gave 5 rating");

                    $.ajax({
                        url:"../rating/giveRating.php",
                        method:"post",
                        data: {"rating":5,"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#arating').html(value);

                        }
                        
                    });
            });
        });
  //For Four Star
  $(document).ready(function () {
            $("#star4").click(function () {
                var pid = $('#p_id').val();
                  alert("You gave 4 rating");

                    $.ajax({
                        url:"../rating/giveRating.php",
                        method:"post",
                        data: {"rating":4,"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#arating').html(value);
                        }
                        
                    });
            });
        });
  //For Three Star
  $(document).ready(function () {
            $("#star3").click(function () {
                var pid = $('#p_id').val();
                 alert("You gave 3 rating");

                    $.ajax({
                        url:"../rating/giveRating.php",
                        method:"post",
                        data: {"rating":3,"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#arating').html(value);
                        }
                        
                    });
            });
        });
  //For Two Star
  $(document).ready(function () {
            $("#star2").click(function () {
                var pid = $('#p_id').val();
             alert("You gave 2 rating");

                    $.ajax({
                        url:"../rating/giveRating.php",
                        method:"post",
                        data: {"rating":2,"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#arating').html(value);
                        }
                        
                    });
            });
        });
  //For one star
  $(document).ready(function () {
            $("#star1").click(function () {
                var pid = $('#p_id').val();
                  alert("You gave 1 rating");

                    $.ajax({
                        url:"../rating/giveRating.php",
                        method:"post",
                        data: {"rating":1,"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#arating').html(value);
                        }
                        
                    });
            });
        });

  //For adding to the cart
  $(document).ready(function () {
            $("#cartAdd").click(function () {
                var pid = $('#p_id').val();
                var quantity=$('#quantity').val();
                alert("Product Added to Cart");
                    $.ajax({
                        url:"../cart/addToCart.php",
                        method:"post",
                        data: {"quantity":quantity,"p_id":pid},
                        dataType:"text",
                        success:function(value){
                       
                        }
                        
                    });
            });
        });
  //To view average rating without refreshing the page
  $(document).ready(function () {
            $("#star5").click(function () {
                var pid = $('#p_id').val();
                    $.ajax({
                        url:"../rating/updateAverageRating.php",
                        method:"post",
                        data: {"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#avg').html(value);
                        }
                    });
            });
        });
  $(document).ready(function () {
            $("#star4").click(function () {
                var pid = $('#p_id').val();
                    $.ajax({
                        url:"../rating/updateAverageRating.php",
                        method:"post",
                        data: {"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#avg').html(value);
                        }
                    });
            });
        });
  $(document).ready(function () {
            $("#star3").click(function () {
                var pid = $('#p_id').val();
                    $.ajax({
                        url:"../rating/updateAverageRating.php",
                        method:"post",
                        data: {"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#avg').html(value);
                        }
                    });
            });
        });
$(document).ready(function () {
            $("#star2").click(function () {
                var pid = $('#p_id').val();
                    $.ajax({
                        url:"../rating/updateAverageRating.php",
                        method:"post",
                        data: {"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#avg').html(value);
                        }
                    });
            });
        });
$(document).ready(function () {
            $("#star1").click(function () {
                var pid = $('#p_id').val();
                    $.ajax({
                        url:"../rating/updateAverageRating.php",
                        method:"post",
                        data: {"p_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#avg').html(value);
                        }
                    });
            });
        });