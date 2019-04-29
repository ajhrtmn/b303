<template>

<!-- {{ alert }} -->

</template>

<script>

	export default {

		data() {

			return {

				alert: ''

			};
		},

		created() {


			axios.get('/api/alerts')
			.then(response => {

				let { data } = response;

				this.alert = data.alert;

			});

		}


	};

</script>
