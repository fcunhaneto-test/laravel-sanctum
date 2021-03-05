<template>
    <div>
        <h1>Categorias</h1>
        <ul v-if="categories">
            <li v-for="c in categories" :key="c.id">{{ c.name }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Category",
    data() {
        return {
            categories: null
        }
    },
    created() {
        axios.get('/api/categorias').then(response => {
            console.log('CATEGORIAS', response.data)
            this.categories = response.data
        })
    }
}
</script>

<style scoped>

</style>
