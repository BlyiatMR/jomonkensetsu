<template>
<div class="container-fluid d-flex vh-100">
    <div class="row align-self-center vw-100">
        <div class="col-md-6 mx-auto text-center text-secondary">
             <h1 class="display-1 lead"><b>404</b></h1>
             <h1 class="h3"><b>Page not found</b></h1>
             <p class="lead mb-3">ページが見つかりませんでした</p>
             <div>
					<router-link to="/" class="btn btn-danger btn-sm">
						<i class="fas fa-home mr-2"></i>ホーム
					</router-link>
             </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
	data() {
		return {
		}
	}
}
</script>

<style>
</style>