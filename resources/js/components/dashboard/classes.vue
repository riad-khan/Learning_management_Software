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
                        <h2>Classes</h2>
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
                <div class="classes">
                    <!-- Live Classes -->
                    <div class="section_heading">
                        <div class="tork-row">
                            <div class="tork-col-md-6">
                                <h2 class="title">Live Classes</h2>
                            </div>


                            <div class="tork-col-md-3">
                                <div class="custom_dropdown">
                                    <input id="dropdownInput" type="text" onclick="customDropdown(this)" class="dropdown_input"
                                           placeholder="Pathology">
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
                                    <input id="dropdownInput" type="text" onclick="customDropdown(this)" class="dropdown_input"
                                           placeholder="Pathology">
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
                    <div class="class_list tork-mt-4">
                        <div class="tork-row" v-for="(allClass , index) in classes":key="index">
                            <div class="tork-col-md-4" v-for ="(classList , index) in allClass" :key="classList.id">
                               <div >
                                   <router-link :to="{name:'WatchClass',params:{id:classList.id}}" v-if="classList.type === 'live'">
                                       <div class="tork-card tork-p-0">
                                           <img :src="classList.banner" class="tork-w-100" style="height:152px" alt="">
                                           <div class="class_info tork-p-3">
                                               <div class="class_title tork-d-flex tork-justify-c-space-between">
                                                   <h3>{{ classList.title }}</h3>
                                                   <p class="live"><span class="icon-live"></span>{{ classList.type }}</p>
                                               </div>
                                               <p>8th Grade | 11th Chapter</p>
                                               <p class="date_time"><span class="icon-clock"></span> 24 Nov, 2021</p>
                                           </div>
                                       </div>
                                   </router-link>
                               </div>


                            </div>


                        </div>
                    </div>
                    <!-- Upcomming Classes-->
                    <div class="section_heading">
                        <div class="tork-row">
                            <div class="tork-col-md-6">
                                <h2 class="title">Upcomming Classes</h2>
                            </div>
                            <div class="tork-col-md-3">
                                <div class="custom_dropdown">
                                    <input id="dropdownInput" type="text" onclick="customDropdown(this)" class="dropdown_input"
                                           placeholder="Pathology">
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
                                    <input id="dropdownInput" type="text" onclick="customDropdown(this)" class="dropdown_input"
                                           placeholder="Pathology">
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
                    <div class="class_list tork-mt-4">
                        <div class="tork-row" v-for="(allClass , index) in classes":key="index">
                            <div class="tork-col-md-4" v-for ="(classList , index) in allClass" :key="classList.id">
                                <div >
                                    <router-link :to="{name:'WatchClass',params:{id:classList.id}}" v-if="classList.type === 'upcomming'">
                                        <div class="tork-card tork-p-0">
                                            <img :src="classList.banner" class="tork-w-100" style="height:152px" alt="">
                                            <div class="class_info tork-p-3">
                                                <div class="class_title tork-d-flex tork-justify-c-space-between">
                                                    <h3>{{ classList.title }}</h3>
                                                    <p class="live"><span class="icon-live"></span>{{ classList.type }}</p>
                                                </div>
                                                <p>8th Grade | 11th Chapter</p>
                                                <p class="date_time"><span class="icon-clock"></span> 24 Nov, 2021</p>
                                            </div>
                                        </div>
                                    </router-link>
                                </div>


                            </div>


                        </div>
                    </div>
                    <!-- Previous Classes-->
                    <div class="section_heading">
                        <div class="tork-row">
                            <div class="tork-col-md-6">
                                <h2 class="title">Previous Classes</h2>
                            </div>
                            <div class="tork-col-md-3">
                                <div class="custom_dropdown">
                                    <input id="dropdownInput" type="text" onclick="customDropdown(this)" class="dropdown_input"
                                           placeholder="Pathology">
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
                                    <input id="dropdownInput" type="text" onclick="customDropdown(this)" class="dropdown_input"
                                           placeholder="Pathology">
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
                    <div class="class_list tork-mt-4">
                        <div class="tork-row" v-for="(allClass , index) in classes":key="index">
                            <div class="tork-col-md-4" v-for ="(classList , index) in allClass" :key="index">
                                <div >
                                    <a href="watcing-class.html" v-if="classList.type === 'previous'">
                                        <div class="tork-card tork-p-0">
                                            <img :src="classList.banner" class="tork-w-100" style="height:152px" alt="">
                                            <div class="class_info tork-p-3">
                                                <div class="class_title tork-d-flex tork-justify-c-space-between">
                                                    <h3>{{ classList.title }}</h3>
                                                    <p class="live"><span class="icon-live"></span>{{ classList.type }}</p>
                                                </div>
                                                <p>8th Grade | 11th Chapter</p>
                                                <p class="date_time"><span class="icon-clock"></span> 24 Nov, 2021</p>
                                            </div>
                                        </div>
                                    </a>

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
            axios.get('/api/class')
                .then(({data})=>(this.classes = data))
                .catch()
        }


    },

    data(){
        return{
            classes:[],
        }
    }
}
</script>

<style scoped>

</style>
