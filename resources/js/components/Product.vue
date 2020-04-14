<template>
  
  <div class="container">
    <material-collection tag="div" class="row">
      <product-card 
          v-for="(product, index) in products" :key="index" 
          :product="product"
          :data-index="index"
        >
      </product-card>
    </material-collection>

  </div>
  
</template>

<script>
  export default {
    data() {
      return {
        products: [],
      }
    },
    created () {
      this.productGet();
    },

    methods: {
      productGet() {
        axios.get('/productos').then((res) => {
          this.products = res.data.data;
        });
      },
    },
  }
</script>