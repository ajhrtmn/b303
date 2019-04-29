<template>

<div>

	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		<img src="https://i2.wp.com/www.business303.com/wp-content/uploads/2016/12/COA_LOGO_COLOR-V2-1.png">
	 	<div class="mx-auto">
			<!-- <h1 class="display-4 font-weight-normal">Punny headline</h1> -->
			<div class="text-color-bbd-blue">
				<p class="display-4 font-weight-normal">business and personal mastery</p>
				<h3>focus • organization • clarity • success</h3>
			</div>
	  	</div>
		<div class="product-device box-shadow d-none d-md-block"></div>
		<div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
	</div>

	<div class="m-md-3 row mx-auto">
		<div class="bg-color-bbd-yellow mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden col"
					style="background-image: url('https://i2.wp.com/www.business303.com/wp-content/uploads/2018/06/hardback_bookcover1-1.png');
					background-repeat: no-repeat;
  					background-size: 500px;
  					background-position: center;
  					display: flex;
  					justify-content: center;
  					align-content: center;">
			<div class="p-5 m-auto" style="background-color: hsla(190, 98%, 33%, 0.9);">
				<h2 class="display-5 text-color-bbd-yellow">Get the <strong>FREE</strong> E-Book!</h2>
				<p class="lead text-white">As seen and heard about on TV and Radio!</p>
				<router-link class="btn btn-light" to='/1'>See what's inside!</router-link>
			</div>
		</div>
		<div class="pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden col" style="background-color: hsla(190, 98%, 38%, 1);">
			<div class="my-3 py-3">
				<h2 class="display-5">Story Time</h2>
				<p class="lead">Check out our latest blog post.</p>
			</div>
			<div class="text-color-bbd-blue bg-light box-shadow mx-auto" style="text-align: left; width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
				<h2 style="padding: 1em  0em  .5em  1em;">Post Name</h2> <!-- {{ alert }} -->
				<p class="text-color-char" style="padding: 0em 3em;"> Post partial with more than enough content to fill up a bit of this box in order to be a good enough example of showing the post content.</p>
				<router-link class="float-right" to='/1' style="padding: 0em 3em;">Read More</router-link>
			</div>
		</div>
	</div>

<!-- {{ alert }} -->

</div>

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
