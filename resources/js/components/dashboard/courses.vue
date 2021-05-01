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
                        <h2>Courses</h2>
                        <button id="togglerBtn" class="toggler tork-btn">
                            <span class="icon-th-menu"></span>
                        </button>
                    </div>
                    <div class="tork-d-flex tork-justify-c-space-between tork-flex-wrap">
                        <div class="search_input">
                            <input type="text" v-model="searchTerm" class="tork-form-control" placeholder="Search Courses Here">
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
                <!-- courses card items -->
                <div class="courses">
                    <div class="tork-row">
                        <div class="tork-col-md-8" >

                            <!--course section started -->

                            <div class="card_1002">
                                <div class="card_1002_container tork-card"v-for="(course , index ) in filterCourses" :key="index">
                                    <div class="tork-d-flex tork-justify-c-start tork-flex-wrap tork-items-center">
                                        <div class="thumbnail">
                                            <img :src="course.banner" alt="">
                                        </div>
                                        <div class="course_info">
                                            <h3>{{ course.title }}</h3>
                                            <p>9th Grade | Merit 11 </p>
                                            <div class="tork-d-flex tork-justify-c-space-between tork-items-center">

                                            <!--    <div class="tork-d-flex tork-justify-c-space-between tork-items-center">
                                                    <div class="progress tork-mr-4">
                                                        <div class="progress_done" data-done="50%"></div>
                                                    </div>
                                                    <span>50%</span>
                                                </div> --->

                                                <div class="progress">
                                                    <div class="progress_done " role="progressbar"  style="width: 100%"  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

                                                </div> &nbsp;
                                                <span>50%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                        <div class="tork-col-md-4">
                            <div class="upcoming_notice tork-mt-md-3 tork-mt-4 tork-card">
                                <h3>Upcoming Class</h3>


                                <div class="notice_info tork-mt-4">
                                    <p>English | Chapter 1</p>
                                    <h4>There are many variations of passages</h4>
                                    <div class="time_btn tork-d-flex tork-justify-c-space-between tork-items-center">
                                        <p><span class="icon-clock"></span> Monday, 28 Feb</p>
                                        <a href="#" class="tork-btn tork-btn-primary tork-rounded-pill">Go to Class</a>
                                    </div>
                                </div>

                            </div>
                            <div class="upcoming_notice tork-mt-md-3 tork-mt-4 tork-card">
                                <h3>Upcoming Exam</h3>
                                <div class="notice_info tork-mt-4">
                                    <p>English | Chapter 1</p>
                                    <h4>There are many variations of passages</h4>
                                    <div class="time_btn tork-d-flex tork-justify-c-space-between tork-items-center">
                                        <p><span class="icon-clock"></span> Monday, 28 Feb</p>
                                        <a href="#" class="tork-btn tork-btn-primary tork-rounded-pill">Go to Class</a>
                                    </div>
                                </div>
                                <div class="notice_info tork-mt-4">
                                    <p>English | Chapter 1</p>
                                    <h4>There are many variations of passages</h4>
                                    <div class="time_btn tork-d-flex tork-justify-c-space-between tork-items-center">
                                        <p><span class="icon-clock"></span> Monday, 28 Feb</p>
                                        <a href="#" class="tork-btn tork-btn-primary tork-rounded-pill">Go to Class</a>
                                    </div>
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

export default {
   created() {
           if(!User.loggedIn()){
               this.$router.push('/auth/login')
           }else{
               axios.get('/api/course')
                   .then(({data})=>(this.courses = data))
                   .catch()
           }
    this.upcomingClass();

   },
    data(){
       return{
           courses:[],
           searchTerm:'',
           classes:[],
       }
    },
    computed:{
        filterCourses(){
            return this.courses.filter(course =>{
                return course.title.toUpperCase().match(this.searchTerm.toUpperCase())
            })
        }
    },
    methods:{
       upcomingClass(){
           axios.get('/api/class')
               .then(({data})=>(this.classes = data))
               .catch()
       },
    }
}
</script>

<style scoped lang="css">
.progress-bar{
    width: 0;
    border-radius: 0 0.2rem 0.2rem 0;
    height: 100%;

    -webkit-transition: 0.1s ease;
    transition: 0.1s ease;

}

</style>
