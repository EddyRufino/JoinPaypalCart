<template>
  <div>
    <material-collection tag="div">
      <article v-for="(product, index) in products" :key="index" 
          :data-index="index" class="card-product"
        >
        <div class="row">
          <div class="col-10">
            <strong>{{ product.title }}</strong>
          </div>
          <div class="col-2">
            <strong>{{ product.humanPrice }}</strong>
          </div>
        </div>
      </article>

    </material-collection>
    <article class="total card-product">
      <div class="row">
        <div class="col-10">
          <strong>Total</strong>
        </div>
        <div class="col-2">
          <strong>{{ total }}</strong>
        </div>
      </div>
    </article>
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
    this.productsGet();
  },
  computed: {
    total() {
      let cents = this.products.reduce((acumulator, currentObj) => {
        return acumulator + currentObj.numberPrice;
      }, 0);

      return `$${cents/100}`;
    }
  },
  methods: {
    productsGet() {
      axios.get('/carrito/productos').then( res => {
        this.products = res.data.data;
      });
    }
  },
  }
</script>