<template>
    <div class="home col-5 mx-auto py-5 mt-5">
        <h1 class="text-center">Login</h1>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input
                        type="email"
                        v-model="email"
                        class="form-control"
                        id="email"
                    />
                    <span class="text-danger" v-if="errors.email">
            {{ errors.email[0] }}
          </span>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input
                        type="password"
                        v-model="password"
                        class="form-control"
                        id="password"
                    />
                    <span class="text-danger" v-if="errors.password">
            {{ errors.password[0] }}
          </span>
                </div>
                <button @click.prevent="login" class="btn btn-primary btn-block">
                    Login
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
           email: "",
            password: "",
            errors: []
        };
    },
    methods: {
        login() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/api/login', {
                    email: this.email,
                    password: this.password
                })
            });
        }
    }
};
</script>

