<template>
    <div>
        <button id="closeBtn" class="close_btn tork-btn">
            <span class="icon-cancel"></span>
        </button>
        <div class="user">
            <img src="" alt="">
            <div class="user_info">
                <h3 class="tork-text-capitalize"></h3>
                <p class="tork-text-uppercase">bairm30000</p>
            </div>
        </div>
        <div class="nav_links">
            <router-link to="/home" class="link active">
                <span class="icon-grid-ms"></span>
                <h2>dashboad</h2>
            </router-link>
            <router-link to="/notice" class="link">
                <span class="icon-mic"></span>
                <h2>Notice</h2>
            </router-link>
            <router-link to="/schedules" class="link">
                <span class="icon-calendar-alt"></span>
                <h2>Schedule</h2>
            </router-link>
            <router-link to="/courses" class="link">
                <span class="icon-book-user"></span>
                <h2>Courses</h2>
            </router-link>
            <router-link to="/classes" class="link">
                <span class="icon-teaching"></span>
                <h2>Class</h2>
            </router-link>
            <router-link to="/class-resources" class="link">
                <span class="icon-stack"></span>
                <h2>Resources</h2>
            </router-link>
            <router-link to="/exams" class="link">
                <span class="icon-list-card"></span>
                <h2>Exams</h2>
            </router-link>
            <a href="./resutl.html" class="link">
                <span class="icon-list-check"></span>
                <h2>Results</h2>
            </a>
            <a href="./analysis.html" class="link">
                <span class="icon-pie"></span>
                <h2>Analysis</h2>
            </a>
            <a href="./complaint-box.html" class="link">
                <span class="icon-box"></span>
                <h2>Complaint Box</h2>
            </a>
            <a href="./setting.html" class="link">
                <span class="icon-gear"></span>
                <h2>Setings</h2>
            </a>
            <a href="./profile.html" class="link">
                <span class="icon-user"></span>
                <h2>Profile</h2>
            </a>
            <router-link to="/logout" class="link">
                <span class="icon-log-out"></span>
                <h2>Log Out</h2>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "navs"
}
</script>

<style scoped>

</style>
