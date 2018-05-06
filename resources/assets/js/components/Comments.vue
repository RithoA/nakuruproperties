<template>

                    <div class="media">
                        <a class="pull-left" href="#pablo">
                          <div class="avatar">
                            <img class="media-object" style="max-height: 64px;max-width: 64px" :src="comment.user.avatar" alt="..."/>
                          </div>
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading">{{comment.user.username}}<small>&middot; {{comment.date}}</small></h4>
                          <h6 class="text-muted"></h6>
                          <p>{{comment.comment}}<a v-if="isShow" @click="uncomment" class="btn btn-primary btn-simple pull-right">Delete</a></p>
                        </div>
                      </div> 
</template>

<script>
  export default {
    props: ['comment','id','user_id'],
    mounted() {
                 axios.post('/deleteable/' + this.user_id)
                            .then(response => {
                        var show = response.data

                        if (show == 0)
                            this.isShow = false;
                        else 
                               this.isShow = true;
                          });
        },
     data() {
      return {
        isShow: ''
      }
    },
    methods: {
        uncomment() {
                  axios.post('/uncomment/' + this.id)
                            .then(response => {
                         window.eventBus.$emit('commentDeletedEvent', response.data);
                         this.comment = '';
                          });

                  }
              }
  }
</script>