<template>
    <div>
        <h2>Log</h2>
    </div>
</template>

<script>
export default {
    created() {
        localStorage.removeItem('token')

        Toast.fire({
            icon: 'success',
            title: 'Logged Out successfully'
        })
        this.$router.push('/auth/login')
    }
}
</script>

<style scoped>
</style>
