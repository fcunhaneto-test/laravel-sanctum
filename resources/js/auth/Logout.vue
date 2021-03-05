<template>
    <h1>Logout</h1>
</template>

<script>
export default {
    name: "Logout",
    created() {
        axios.get('/sanctum/csrf-cookie').then(response => {
            axios.post('/api/logout').then(response => {
                console.log(response.data)
            })
        });
    }
}
</script>

<style scoped>

</style>
