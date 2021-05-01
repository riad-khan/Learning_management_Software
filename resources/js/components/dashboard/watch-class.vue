<template>
<div>
    <main>
        <section class="dashboad tork-d-flex">
            <div class="left_sidebar">
             <dashboard-navs></dashboard-navs>
            </div>
            <div class="dashboad_body">
                <!-- Header -->
                <div class="header">
                    <div class="title tork-d-flex tork-justify-c-space-between tork-items-center">
                        <h2>Live Classes</h2>
                        <button id="togglerBtn" class="toggler tork-btn">
                            <span class="icon-th-menu"></span>
                        </button>
                    </div>
                    <div class="tork-d-flex tork-justify-c-space-between tork-flex-wrap">
                        <div class="search_input">
                            <input type="text" class="tork-form-control" placeholder="Search Here">
                            <span class="icon-search"></span>
                        </div>
                        <div class="notificaton">
                            <div class="alert_icon">
                                <span class="icon-alarm"></span>
                                <span class="badge">15</span>
                            </div>
                            <div class="alert_icon">
                                <span class="icon-envelope"></span>
                                <span class="badge">05</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main body content -->
                <div class="watching_class">
                    <div class="tork-row">
                        <div class="tork-col-lg-10">
                            <div class="video_inner">
                                <img :src="classDetails.banner" class="tork-w-100" style="width: 726px; height: 408px;" alt="">
                            </div>
                            <div class="video_info">
                                <h2>{{ classDetails.title }}</h2>
                                <h5>8th Grade  |  English  |  Chapter 1</h5>
                                <p class="description">
                                    {{
                                        classDetails.description
                                    }}
                                </p>
                            </div>
                            <div class="comments_box">
                                <h3 class="total_comments">All Comments</h3>
                                <div class="comment_feild tork-d-flex">
                                    <div class="img_container">
                                        <div class="user_img">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                    <div class="text_feild">
                                        <form action="" @submit.prevent="createComment" >
                                            <textarea class="comment_textarea tork-form-control" v-model="form.comment" cols="30" rows="2" placeholder="Comment By John Wick"></textarea>

                                            <button  class="tork-btn tork-btn-primary tork-rounded-pill">Comment</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="comment tork-d-flex" v-for="(comment , index) in comments" :key="comment.id">
                                    <div class="img_container">
                                        <div class="user_img">
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                    <div class="comment_info">
                                        <div class="user_name_time tork-d-flex">
                                            <h4>{{comment.user_id}}</h4>
                                            <p>{{ comment.created_at | formatDate }}</p>
                                        </div>
                                        <p class="commetnt_text">{{ comment.comment }}</p>
                                    </div>
                                </div>

                                <div class="tork-text-center">
                                    <button id="showAllComment" class="view_all_comments_btn tork-btn">View All Comments</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="circle_1"></div>
    <div class="circle_2"></div>
</div>
</template>

<script>
import moment from 'moment';
export default {
    created(){
        if(!User.loggedIn()){
            this.$router.push('/auth/login')
        }else{
            let id = this.$route.params.id
            axios.get('/api/class/'+id)
                .then(({data}) =>(this.classDetails = data))
                .catch()
        }

        this.getComments()
        Reload.$on('commentReload',() =>{
            this.getComments();
        })

    },

    data(){
        return{
            classDetails:{},
            comments:[],
            form:{
                comment:'',
            },
            errors:{},
        }
    },
    methods:{
        getComments(){
            const id = this.$route.params.id
            axios.get('/api/class/'+id+'/comments')
            .then(({data})=> (this.comments = data))
                .catch()
        },
        createComment(){
            const id = this.$route.params.id
            axios.post('/api/class/'+id+'/comment',this.form)
                .then(() =>{
                    Reload.$emit('commentReload')

                })
                .catch(error => this.errors = error.response.data.errors)
        }
    }
}
</script>

<style scoped>

</style>
