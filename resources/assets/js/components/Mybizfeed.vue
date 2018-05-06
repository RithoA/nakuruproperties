<template>
                                   <div class="tab-pane active influencers" id="posts">
                                    <div class="row collections" style="padding-top: 50px">
                                    <div class="col-md-6 col-lg-4" v-for="post in posts">
                                    <div class="card card-blog card-atv">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <div class="atvImg">
                                                <img class="img" :src="post.coverimage" />
                                            </div>
                                        </a>
                                        <div class="card-icon">
                                                 <i class="material-icons">play_circle_outline</i>
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>

</template>

<script>

    import Like from './Like.vue'

    export default {
        mounted() {
            this.get_feed()
        },
        methods: {
            get_feed() {
                axios.get('/myfeed')
                    .then( (response) => {
                        console.log(response.data)
                        response.data.forEach( (post) => {
                            this.$store.commit('add_post', post)
                        })
                    })
            }
        },

        computed: {
            posts() {
                return this.$store.getters.all_posts
            }
        }
    }
</script>