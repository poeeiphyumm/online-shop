$(document).ready(function () {

  getData();
  update_cart_count();

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  $('.addtocartBtn').click(function(){
    // alert('hello');

    // getData();
      let id=$(this).data('id');
      let name=$(this).data('name');
      let price=$(this).data('price');
      let discount=$(this).data('discount');
      let img=$(this).data('img');
      
      let item={id:id,name:name,price:price,discount:discount,photo:img,qty:1};



      let oldcart=localStorage.getItem('cart');
      //console.log(oldcart);
      if(oldcart==null){
         var cart= new Array();
        
      }else{
        var cart = JSON.parse(oldcart);
        
      }
      var exist;
      $.each(cart, function(i,v) {
        if(id == v.id){
          v.qty++;
          exist = true;
      }   

    })
      if(!exist){
        cart.push(item);
      }
      localStorage.setItem('cart',JSON.stringify(cart));

      getData();
      update_cart_count();
  })
    function getData(){
        var mycart = localStorage.getItem('cart');
        var data=$('#shoppingcart_table');
        var result ="";
        var total=0;

        if(mycart !=null){
          cart = JSON.parse(mycart);
          $.each(cart,function (i,v) {

            subtotal = v.price*v.qty;
            total+=subtotal;
            result +=`

            <tr>
            <td><button class='removebtn' data-id='${i}'>X</button></td>
            <td><img src="${v.photo}"  width = '100'></td>
            <td>
              <p>${v.name}</p>
              <p>Code Number</p>
            </td>

            <td colspan="3">${v.qty}</td>
            <td><input type="number" value="${v.qty}" class="changeqty" data-id="${i}"></td>

                        
            <td> ${v.price}Ks</td>
            <td> ${subtotal}Ks</td>


            </tr>`;
                    
          })
          result += `<tr>
              <td colspan="6">Total:</td>
              <td colspan="2">${total}</td>
              </tr>`;
            

        }else{
          result +='Cart is Empty';
        }
        data.html(result);
        update_cart_count();

    }

    $('#shoppingcart_table').on('click','.removebtn',function () {
              let index = $(this).data('id');
              var mycart = localStorage.getItem('cart');
              cart = JSON.parse(mycart);

              cart.splice(index,1);
              localStorage.setItem('cart',JSON.stringify(cart));
             getData();

             update_cart_count();
            })
            


    // $('#shoppingcart_table').on('click','.plus-button, .minus-button',function () {
    //           var qty=$(this).val();
    //           var val=parseFloat(qty.val());
    //           var max=parseFloat(qty.attr('max'));
    //           var min=parseFloat(qty.attr('min'));
    //           var step=parseFloat(qty.attr('step'));

    //           if($(this).is('.plus-button')){
    //             qty.val(val+step);
    //           }else{
    //             if(min && min >=val){
    //               qty.val(min);
    //             }else if (val>0) {
    //               qty.val(val-step);
                  
    //             }
    //           }
              
    //         })


    $('#shoppingcart_table').on('change','.changeqty',function(){
              let qty=$(this).val();
              let index=$(this).data('id');

              var mycart=localStorage.getItem('cart');
              cart = JSON.parse(mycart);

              if(qty==0){
                cart.splice(index,1);
              }
              $.each(cart,function(i,v){
                if(i==index){
                  v.qty=qty;
                }
              })
              localStorage.setItem('cart',JSON.stringify(cart));
              getData();
              update_cart_count();

            })
          
      
    function update_cart_count() {
     var mycart=localStorage.getItem('cart');
     if(mycart){
      //json string to obj
    var   mycart_obj = JSON.parse(mycart);
      //check product_list array
      if(mycart_obj.length){
          var total=0;
        $.each(mycart_obj,function (i,v) {
          // console.log(i,v);
          total+=parseInt(v.qty);
          console.log(total);
        })
        $(".item_cart_count").html(total);
      }else{
        $(".item_cart_count").html(0);
      }
     }else{
      $(".item_cart_count").html(0);
     }
     
    }


    $('.buy_now').on('click',function(){
      var notes = $('.notes').val();
      //var total = $('.total').val();
      var shopString = localStorage.getItem("cart"); //string

      if(shopString){
        //var shopArray = JSON.parse(shopString);

        $.post('/orders',{shop_data:shopString,notes:notes},function(response){
          if(response){
            alert(response);
            localStorage.clear();
            getData();
            location.href="/";
          }
        })
      }

    })
  
});