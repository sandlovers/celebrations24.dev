<template>
<div>
<h2>Checkout (Your Total Is: {{total}})</h2>
<form accept-charset="utf-8" id="chargeForm">
<input type="hidden" name="total" :value="total">


<input type="email" name="email" value="" placeholder="email">
<input type="text" name="firstname" value="" placeholder="first name">
<input type="text" name="lastname" value="" placeholder="last name">

<input type="text" name="ccnumber" value="" placeholder="cc">
<input type="text" name="epmo" value="" placeholder="month">
<input type="text" name="epyear" value="" placeholder="year">
<input type="text" name="cccvv" value="" placeholder="cvv">

<button type="submit" @click.prevent="charge()">Order</button>
</form>
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
              total:0
            }
        },
        mounted(){
          this.getTotal();
            
        },
        methods: {
 
                    charge(){  
                      var self = this;
                        axios.post('/charge', $('#chargeForm').serialize())
                        .then(function (response) {
                          
                        })
                        .catch(function (error) {
                          console.log(error)
                        });
                    }, 


                    getTotal(){
                       axios.get('/getcarttotal')
                        .then((response) => {
                            this.total = response.data;
                      })
                        .catch((error) => {
                            console.log(error);
                      });
                    }, 

                    


                },
        computed: {

            }
}
                   


</script>
