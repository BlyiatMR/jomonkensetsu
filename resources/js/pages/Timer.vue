<template>
<div>
   <h1>You are here</h1>
   <hr>
   <span>D-</span><input @keyup.enter="store" type="number">
   <br>
</div>
</template>

<script>
export default {
	data() {
		return {}
	},
   methods: {
      store() {
         console.log('here')
      }
   }
}
</script>

<style>
</style>