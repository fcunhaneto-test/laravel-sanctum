<template>
    <div class="home col-5 mx-auto py-5 mt-5">
        <h1 class="text-center">Register</h1>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input
                        type="text"
                        v-model="name"
                        class="form-control"
                        id="name"
                    />
                    <span class="text-danger" v-if="errors.name">
            {{ errors.name[0] }}
          </span>
                </div>
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
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input
                        type="password"
                        v-model="password_confirmation"
                        class="form-control"
                        id="password_confirmation"
                    />
                    <span class="text-danger" v-if="errors.password_confirmation">
            {{ errors.password_confirmation[0] }}
          </span>
                </div>
                <button
                    type="submit"
                    @click.prevent="register"
                    class="btn btn-primary btn-block"
                >
                    Register
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "",
            email: "",
            password: "",
            password_confirmation: "",
            errors: []
        };
    },
    methods: {
        register() {
            axios.post('/api/registro', {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
            }).then(response => {
                console.log(response.data)
            }).catch(errors => console.log('ERRORS', errors))
        }
    }
};
</script>


