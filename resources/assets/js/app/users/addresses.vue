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

				if (this.userid === obj.userid){

				}

			})
		},
		data(){
			return {
				list:[]
			}
		}
	}
</script>

<template>

	<div>

		<dc-user-address v-for="address in list" :address="address"></dc-user-address>

	</div>

</template>