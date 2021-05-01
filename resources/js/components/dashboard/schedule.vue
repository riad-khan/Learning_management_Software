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
                        <h2>Schedule</h2>
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
                <div class="schedule">



                        <div class="tork-row">

                            <div class="tork-col-md-8">
                                <!-- item one -->

                                <div class="schedule-single-item" style="margin-bottom: 50px" v-for="(course , index) in schedules " :key="index">

                                <div class="course_container">
                                    <div>
                                        <h2 class="title">{{ course.course_title }}</h2>
                                    </div>
                                </div>
                                <div class="schedule_container tork-mt-3 tork-d-flex" v-for="(schedule , index) in course.schedules " :key="index">
                                    <div class="tork-card">
                                        <div class="card_inner tork-d-flex tork-items-center tork-justify-c-lg-space-between">
                                            <img :src="schedule.banner" class="thumb-img" alt="">
                                            <div class="info tork-ml-4">
                                                <h4>{{ schedule.title }}</h4>
                                                <p>{{ schedule.course_id }} | 11th Chapter</p>
                                            </div>
                                            <div class="date_time_btn">
                                                <p>{{ schedule.date }}</p>
                                                <a :href="schedule.button_url" class="tork-btn tork-btn-outline-primary tork-rounded-pill" v-if="schedule.button == true" >{{ schedule.button_text }}</a>
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
                                        <p>English  |  Chapter 1</p>
                                        <h4>There are many variations of passages</h4>
                                        <div class="time_btn tork-d-flex tork-justify-c-space-between tork-items-center">
                                            <p><span class="icon-clock"></span> Monday, 28 Feb</p>
                                            <a href="#" class="tork-btn tork-btn-primary tork-rounded-pill">Go to Class</a>
                                        </div>
                                    </div>
                                    <div class="notice_info tork-mt-4">
                                        <p>English  |  Chapter 1</p>
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
                                        <p>English  |  Chapter 1</p>
                                        <h4>There are many variations of passages</h4>
                                        <div class="time_btn tork-d-flex tork-justify-c-space-between tork-items-center">
                                            <p><span class="icon-clock"></span> Monday, 28 Feb</p>
                                            <a href="#" class="tork-btn tork-btn-primary tork-rounded-pill">Go to Class</a>
                                        </div>
                                    </div>
                                    <div class="notice_info tork-mt-4">
                                        <p>English  |  Chapter 1</p>
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
        var _this=this;
        // console.log(this.schedules);
        if(!User.loggedIn()){
            this.$router.push('/auth/login')
        }else{
            axios.get('/api/schedule')
                .then( function (response) {
                    _this.schedules = response.data;

                    // for (var i=0;i<_this.schedules.length;i++) {
                    //     // console.log(_this.schedules[i]);
                    //     for (var j=0;j<_this.schedules[i].length;j++) {
                    //         console.log(_this.schedules[i][j].title);
                    //     }
                    // }

                })
                .catch();
        }


    },
    data(){
        return{
            schedules:[],
            searchTerm:'',
        }
    },

}
</script>

<style scoped>

</style>
