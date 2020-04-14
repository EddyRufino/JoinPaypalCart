<template>
  <div>
    <button @click="addToCart" class="btn btn-success">{{ message }}</button>
  </div>
</template>

<script>
  export default {
    props: ['product'],
    data() {
      return {
        message: 'Agregar al carrito',
      }
    },

    methods: {
      addToCart() {
        axios({
          method: 'POST',
          url: '/in_shopping_carts',
          data: {
            product_id: this.product.id
          },
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          }
        }).then(() => {
          window.store.commit('increments');
        })
      }
    },
  }
</script>