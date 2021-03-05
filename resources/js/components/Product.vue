<template>
    <div>
        <h1>Produtos</h1>
        <ul v-if="products">
            <li v-for="p in products" :key="p.id">{{ p.name }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Product",
    data() {
        return {
            products: null
        }
    },
    created() {
        axios.get('/api/produtos').then(response => {
            console.log('PRODUTOS', response.data)
            this.products = response.data
        })
    }
}
</script>

<style scoped>

</style>
