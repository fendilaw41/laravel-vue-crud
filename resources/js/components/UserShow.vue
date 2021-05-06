<template>
    <div class='container py-4'>
        <div class='row justify-content-center'>
            <div class='col-md-6'>
                <div class='card'>
                    <div class='card-header'>Detail User</div>
                    <div class='card-body'>
                        <div class='form-group'>
                            <label htmlFor='title'>Name</label>
                            <input type="text" class="form-control" id="name" v-model="user.name" disabled>
                        </div>
                        <div class='form-group'>
                            <label htmlFor='content'>Content</label>
                            <textarea type="text" class="form-control" id="email" v-model="user.email" rows="5" disabled></textarea>
                        </div>
                        <div class='form-group'>
                            <router-link :to="{ name: 'home' }" class="btn btn-secondary">Back</router-link>
                        </div>
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
        }
    },
    created() {
        let uri = `/api/user/show/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.user = response.data;
        });
    },
    method: {

    }
  }
</script>
