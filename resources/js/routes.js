const login = require('./components/dashboard/auth/login').default;
const  home = require('./components/dashboard/home').default;
const logout = require('./components/dashboard/auth/logout').default;
const courses = require('./components/dashboard/courses').default;
const schedule = require('./components/dashboard/schedule').default;
const classes = require('./components/dashboard/classes').default;
const watch_class = require('./components/dashboard/watch-class').default;
const notice = require('./components/dashboard/notice').default;
const class_resources = require('./components/dashboard/resources').default;
const exams  = require('./components/dashboard/exams').default;
const single_exam  = require('./components/dashboard/single-exam').default;


export const routes = [

    { path: '/auth/login', component:login, name: 'login' },
    { path: '/home', component:home, name: 'home' },
    { path: '/logout', component:logout, name: 'logout' },
    { path: '/courses', component:courses, name: 'courses' },
    { path: '/schedules', component:schedule, name: 'schedule' },
    { path: '/classes', component:classes, name: 'classes' },
    { path: '/watch-class/:id', component:watch_class, name: 'WatchClass' },
    { path: '/notice', component:notice, name: 'notice' },
    { path: '/class-resources', component:class_resources, name: 'class_resources' },
    { path: '/exams', component:exams, name: 'exams' },
    { path: '/single-exam/:id', component:single_exam, name: 'single_exam' },



]
