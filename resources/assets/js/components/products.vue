<template>
<div>

        <div class="container">
          <div class="row">

            <h2>Wedding DJ's</h2>
            <div class="col-lg-4 space30" v-for="product in products" v-if="product.metadata.Category == 'Wedding DJ'">
              <div class="product_box">
                <div class="pad20">
                  <h4 class="small_product_name">{{ product.name }}</h4>
                </div>

                <img src="img/product.png" alt="..." class="img-responsive" width="100%">

                <div class="pad20">
                  <p>{{product.metadata.Price}}</p>

                  <a href="" class="btn btn-default cart_btn" @click.prevent="addProduct(product.id,product.name, product.metadata.Price, 1)"> add to cart </a>
                </div>
              </div>
            </div>
          </div>

           <div class="row">

            <h2>Party DJ's</h2>
            <div class="col-lg-4 space30" v-for="product in products" v-if="product.metadata.Category == 'Party DJ'">
              <div class="product_box">
                <div class="pad20">
                  <h4 class="small_product_name">{{ product.name }}</h4>
                </div>

                <img src="img/product.png" alt="..." class="img-responsive" width="100%">

                <div class="pad20">
                  <p>{{product.metadata.Price}}</p>

                  <a href="" class="btn btn-default cart_btn" @click.prevent="addProduct(product.id,product.name, product.metadata.Price, 1)"> add to cart </a>
                </div>
              </div>
            </div>
          </div>
          <div class="space40"></div>
<a href="lighting" class="btn btn-default pull-right">Next Step</a>
<div class="clearfix"></div>
        </div>

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
              products:[]
            }
        },
        mounted(){
          this.getProducts();
            
        },
        methods: {
 
                    addProduct(productId,name, price, quantity){  
                      var self = this;
                        axios.post('/addproduct', {
                            productId: productId, 
                            name: name, 
                            price: price, 
                            quantity: quantity
                        })
                        .then(function (response) {
                          alert('product added to your cart');
                        })
                        .catch(function (error) {
                          console.log(error)
                        });
                    }, 

                    getProducts(){
                       axios.get('/getproducts')
                        .then((response) => {
                            this.products = response.data.data;
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
