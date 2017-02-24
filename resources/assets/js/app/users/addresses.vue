<script>

	import DcUserAddress from './address.vue'
	import bus from '../utils/events/bus'

	export default{
		props:['userid'],
		components:{
			DcUserAddress
		},
		mounted (){
			bus.$on('get-addresses', obj => {

			
				if (this.userid === obj.userid && this.addresses.length === 0){

					this.isSearching = true

					this.$http
						.get(`api/endereco/${obj.userid}`)
						.then(res => {

							this.isSearching = false	

							this.addresses = res.body.addresses
						})
				}	

			})
		},
		data(){
			return {
				addresses:[],
				isSearching: false

			}
		}
	}
</script>

<template>

	<div>

		<div class="text-center" v-show="isSearching">
			<i class="fa fa-cog fa-spin fa-3x fa-fw">
		</div>

		<div class="row" v-show="!isSearching">
			<div class="col-md-6" v-for="address in addresses">
				<dc-user-address :address="address"></dc-user-address>
			</div>
		</div>

		

	</div>

</template>