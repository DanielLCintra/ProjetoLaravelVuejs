<script>
	import DcUsersTable from './table.vue'
	import DcUsersForm from './form.vue'
	import bus from '../utils/events/bus'

	export default {
		props:['list', 'token', 'success'],
		components:{
			DcUsersTable,
			DcUsersForm
		},
		methods:{
			form(){
				bus.$emit('open-form')
			}
		}
	}

</script>

<template>
	<div>
			
		<h1> 
			Gerenciamento de Usuários

			<small> [ <a href="#" @click.prevent="form">criar novo</a> ] </small> 
		</h1>	

		<div class="alert alert-success" v-show="success != ''">
			{{ success }}
		</div>

		<div class="well">
			
			<dc-users-form :token="token"></dc-users-form>
			<dc-users-table :list="list"></dc-users-table>


		</div>

	</div>	

</template>

