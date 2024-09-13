<template>
</template>

<script>
export default {
	created() {
		Axios.get('api/auth/logout')
		.then(response => {
			localStorage.removeItem('user')
			localStorage.removeItem('token')
			
			this.$router.push('/login')
		})
		.catch(errors => {
			localStorage.removeItem('user')
			localStorage.removeItem('token')
			
			this.$router.push('/login')
			alert('エラーが発生しました。管理者にご確認ください。')
		});
	}
}
</script>

<style>
</style>