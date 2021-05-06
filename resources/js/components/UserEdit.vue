<pre>
<template>
    <div class='container py-4'>
        <div class='row justify-content-center'>
            <div class='col-md-6'>
                <div class='card'>
                    <div class='card-header'>Edit User</div>
                    <div class='card-body'>
                        <div class="alert alert-danger" v-if="errors.length">
                            <b>Terdapat kesalahan dalam input data:</b>
                            <ul>
                                <li v-for="error in errors" :key="error">{{ error }}</li>
                            </ul>
                        </div>

                        <form @submit.prevent="updateArticle">
                            <div class='form-group'>
                                <label htmlFor='name'>Name</label>
                                <input type="text" class="form-control" id="name" v-model="user.email">
                            </div>
                            <div class='form-group'>
                                <label htmlFor='email'>email</label>
                                <textarea type="text" class="form-control" id="email" v-model="user.email" rows="5"></textarea>
                            </div>
                            <div class='form-group'>
                                <router-link :to="{ name: 'home' }" class="btn btn-secondary">Back</router-link>
                                <button class='btn btn-primary'>Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
        return {
            user:{},
            errors: [],
            title: null,
            content: null,
        }
    },
    created() {
        let uri = `/api/user/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.user = response.data;
        });
    },
    methods: {
        updateArticle(e){

            if (this.$data.user.name != null &amp;&amp; this.$data.user.email != null) {

                this.$swal.fire({
                    title: 'Success',
                    text: "User created successfully",
                    icon: 'success',
                    timer: 1000
                });
                let uri = `/api/user/update/${this.$route.params.id}`;
                this.axios.put(uri, this.user).then((response) => {
                    this.$router.push({name: 'home'});
                });
                return true;
            }


            this.errors = [];

            if (!this.name) {
                this.errors.push('Name wajib diisi !');
            }
            if (!this.email) {
                this.errors.push('Email wajib diisi !');
            }

            e.preventDefault();
        }
    }
  }
</script>
</pre>

