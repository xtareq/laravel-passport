<template>
	<div class="container">
		<p class="not-found" v-if="users.length === 0"> No Record Found</p>
		<ul v-if="users.length > 0">
			<li class="user-li" v-for="user in users">{{user.name}}</li>
		</ul>
	</div>

</template>

<style scoped>
	li.user-li{
		padding: 10px;
		font-size: 25px;
		font-weight: bold;
	}

	p.not-found{
		padding: 20px;
		font-size: 25px;
		color:red;
		text-align: center;
	}
</style>

<script>
	export default{
		data(){
			return{
				users:[]
			}
		},
		mounted(){
			this.prepeareCompnent();
		},
		methods:{
			prepeareCompnent(){
				this.loadUsers();


			},
			loadUsers(){
				axios.get('/api/users').then(res =>{
					this.users = res.data;
				})
			}
		}

	}
</script>