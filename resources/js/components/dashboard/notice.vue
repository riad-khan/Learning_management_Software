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
                        <h2>Notice</h2>
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
                <div class="notice">
                    <div class="tork-row">
                        <div class="tork-col-lg-9">
                          <div v-for="(allNotice, index) in notices" :key="allNotice.id">
                              <div class="tork-card notice_card left_notice_card" v-for="(notice, index) in allNotice" :key="notice.id">
                                  <div class="toggle_header tork-d-flex tork-justify-c-space-between tork-items-center">
                                      <div class="alart_icon">
                                          <span class="icon-i"></span>
                                      </div>
                                      <div class="info">
                                          <h4>{{ notice.title }}</h4>
                                          <p>8th Grade  |  11th Chapter</p>
                                      </div>
                                      <div class="toggle_btn tork-d-flex">
                                          <p class="date_time"><span class="icon-clock"></span> {{ notice.created_at | formatDate }}</p>
                                          <span class="icon-angle-down"></span>
                                      </div>
                                  </div>
                                  <div class="toggle_info">
                                      <p>{{ notice.description }}</p>
                                      <a href="#" class="go_btn tork-btn tork-btn-primary tork-rounded-pill">Go to </a>
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
            axios.get('/api/notice')
                .then(({data})=>(this.notices = data))
                .catch()
        }


    },
    data(){
        return{
            notices:[],
        }
    }
}
</script>

<style scoped>

</style>
