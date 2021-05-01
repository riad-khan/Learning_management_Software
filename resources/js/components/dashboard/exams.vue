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
                        <h2>Exams</h2>
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
                <div class="exams">
                    <div class="section_heading">
                        <div class="tork-row">
                            <div class="tork-col-md-6">
                                <h2 class="title">All Exams</h2>
                            </div>
                            <div class="tork-col-md-3">
                                <div class="custom_dropdown">
                                    <input id="dropdownInput" type="text" onclick="customDropdown(this)"
                                           class="dropdown_input" placeholder="Pathology">
                                    <ul class="dropdown list-unstyled">
                                        <li>Dubling mor</li>
                                        <li>Chadghaw</li>
                                        <li>Paslish</li>
                                        <li>Kotuali</li>
                                        <li>Chockbazar</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tork-col-md-3">
                                <div class="custom_dropdown">
                                    <input id="dropdownInput" type="text" onclick="customDropdown(this)"
                                           class="dropdown_input" placeholder="Pathology">
                                    <ul class="dropdown list-unstyled">
                                        <li>Dubling mor</li>
                                        <li>Chadghaw</li>
                                        <li>Paslish</li>
                                        <li>Kotuali</li>
                                        <li>Chockbazar</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- courses card items -->
                    <div class="tork-row"v-for="(allExam, index) in exams" :key="allExam.id">

                           <div class="tork-col-md-5" v-for="(exam, index) in allExam" :key="exam.id" >
                               <div class="card_1003">
                                   <div class="card_1003_container tork-card">
                                       <div class="exam_info">
                                           <h3>{{ exam.title }}</h3>
                                           <p>{{ exam.total_question }} | Mark-50</p>
                                           <p>Merit-100th | Highest Mark-99</p>
                                           <div class="tork-d-flex tork-mt-3 tork-justify-c-space-between">
                                               <div class="time">
                                                   <span class="icon-clock tork-mr-1"></span>
                                                   <span>{{ exam.duration }} min</span>
                                               </div>


                                               <router-link class="tork-btn tork-btn-primary tork-btn-sm tork-rounded-pill tork-px-5"  :to="{name:'single_exam',params:{id:exam.id}}">Start Exam</router-link>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>


                    </div>

                    <!-- Previous Exam -->


                    <!-- courses card items -->

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
            axios.get('/api/exams')
                .then(({data})=>(this.exams = data))
                .catch()
        }


    },
    data(){
        return{
            exams:[],
        }
    }
}
</script>

<style scoped>

</style>
