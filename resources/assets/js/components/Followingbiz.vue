<template>
        <div>
            <p class="text-center" v-if="loading">
               loading...
            </p>
            <p class="text-center" v-if="!loading">

                <button class="btn btn-primary" v-if="status == 0" @click="add_business" >follow</button>

                <button class="btn btn-info" v-if="status == 'waiting'">requested</button>

                <button class="btn btn-rose" v-if="status == 'following'">following</button>
                
            </p>
        </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/check_followingbiz_status/' + this.profile_business_id )
                .then( (resp) => {
                    console.log(resp)
                    this.status = resp.data.status
                    this.loading = false
                }) 
        },
        props: ['profile_business_id'],
        data() {
            return {
                status: '',
                loading: true
            }
        },
        methods: {
            add_business() {
                this.loading = true
                axios.get('/add_business/' + this.profile_business_id )
                    .then( (response) => {
                            console.log(response)
                            this.status = response.data.status
                            this.loading = false
                    })
            }
        }
    }
</script>
