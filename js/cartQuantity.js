// $(document).ready(function () {
//             $(".minus").click(function () {
//                 var pid = $('#dd_id').val();
//                     $.ajax({
//                         url:"../cart/cQuantity.php",
//                         method:"post",
//                         data: {"c_id":pid},
//                         dataType:"text",
//                         success:function(value){
//                             $('#q').html(value);
                            
//                         }
//                     });
//             });
//         });
// $(document).ready(function () {
//             $(".minus").click(function () {
//                 var pid = $('#dd_id').val();
//                     $.ajax({
//                         url:"../cart/updateTotalPrice.php",
//                         method:"post",
//                         data: {"c_id":pid},
//                         dataType:"text",
//                         success:function(value){
//                             $('#totalPrice').html(value);
                            
//                         }
//                     });
//             });
//         });
$(document).ready(function () {
            $(".plus").click(function (){
                var pid = $('#dd_id').val();
                    $.ajax({
                        url:"../cart/pQuantity.php",
                        method:"post",
                        data: {"c_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#q').html(value);
                            
                        }
                    });
            
            });
        });
$(document).ready(function () {
            $(".plus").click(function () {
                var pid = $('#dd_id').val();
                    $.ajax({
                        url:"../cart/updateTotalPrice.php",
                        method:"post",
                        data: {"c_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#totalPrice').html(value);
                            
                        }
                    });
            });
        });
$(document).ready(function () {
            $(".plus").click(function (){
                var pid = $('#dd_id').val();
                    $.ajax({
                        url:"../cart/updatePrice.php",
                        method:"post",
                        data: {"c_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#totalPrices').html(value);
                            
                        }
                    });
            
            });
        });
$(document).ready(function () {
            $(".minus").click(function () {
                var pid = $('#dd_id').val();
                    $.ajax({
                        url:"../cart/updatePrice.php",
                        method:"post",
                        data: {"c_id":pid},
                        dataType:"text",
                        success:function(value){
                            $('#totalPrices').html(value);
                            
                        }
                    });
            });
        });