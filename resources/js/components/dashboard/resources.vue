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
                            <h2>Resources</h2>
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
                    <div class="resources">
                        <div class="tork-row">
                            <div class="tork-col-lg-10">
                                <div class="tork-card tork-mt-5">
                                    <h3>Class Resources</h3>
                                    <div class="tork-card resources_item" v-for="(resource, index) in resources":key="resource.id">
                                        <div
                                            class="tork-d-flex tork-justify-c-lg-space-between tork-justify-c-center tork-flex-wrap tork-items-center">
                                            <h4>{{ resource.class_id }}</h4>
                                            <div class="download_box tork-d-flex tork-justify-c-space-between">
                                                <p>video</p>
                                                <a href="#" class="tork-btn tork-btn-primary tork-rounded-pill"><span
                                                    class="icon-download" download></span> Download</a>
                                            </div>
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
            axios.get('/api/class-resources')
                .then(({data})=>(this.resources = data))
                .catch()
        }


    },
    data(){
        return{
            resources:[],
        }
    },

}
</script>

<style scoped>

</style>
