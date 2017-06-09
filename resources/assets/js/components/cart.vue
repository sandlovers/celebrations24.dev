<template>
<div>
  <section id="cart">
        <div class="container">
          <div class="row" v-for="item in cart">
            <div class="col-md-8 col-md-offset-2">
               <div class="row border">
                <div class="col-md-10 pad0">
                  <div class="carting">
                    <img src="img/cart1.png" alt="..." class="img-responsive">

                    <div class="pad20">
                      <h4>{{ item.name }}</h4>
                    </div>
                  </div>
                </div>

                <div class="col-md-2 pad0">
                  <div class="cart_price">
                    <h4>${{item.price}}</h4>

                    <h5> Remove </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="space40"></div>

          <div class="row" >
            <div class="col-md-8 col-md-offset-2">
               <div class="row">
                <div class="col-md-6 pad0">
                  <div class="carting space20">
                    <h4> Total Price: <span> $2600 </span> </h4>
                  </div>
                </div>

                <div class="col-md-6 pad0 text-right">
                  <a href="#" class="btn btn-default checkout_btn"> Continue to checkout </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
</template>
<style>
</style>
<script>
export default 
{
        props:[],
        data: function () {
            return {
              cart:[]
            }
        },
        mounted(){
          this.getProducts();
            
        },
        methods: {


                    getProducts(){
                       axios.get('/getcartitems')
                        .then((response) => {
                            this.cart = response.data;
                      })
                        .catch((error) => {
                            console.log(error);
                      });
                    }, 

                    removeItem(productId){
                      var self = this;
                      axios.post('/removeproduct', {
                            productId: productId
                        })
                        .then(function (response) {
                           self.getProducts();
                        })
                        .catch(function (error) {
                          console.log(error)
                        });

                    }


                },
        computed: {

            }
}
                   


</script>
