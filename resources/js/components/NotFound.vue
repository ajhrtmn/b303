<template>

	<div class='card'>

		<div class='card-body bg-color-ash'>
			<div class='display-1 text-center error-code-header'>
				{{ alert }}
			</div>
			<hr>
			<div class='text-center error-code-body'>
				{{ alert_sub }}
			</div>
		</div>

	</div>

</template>

<script>

	export default {

		data() {

			return {

				alert: '',

				alert_sub: ''

			};
		},

		created() {


			axios.get('/api/fourOhFour')
			.then(response => {

				let { data } = response;

				this.alert = data.alert;
				this.alert_sub = data.alert_sub;

			});

		}


	};

</script>
