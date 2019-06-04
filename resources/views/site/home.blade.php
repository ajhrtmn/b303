@extends('layouts.layout')

@section('content')
<div class="montserrat">
	<div id="home-hero" class="hero" style="">
		<div class="hero-body" style="text-align: center; margin: 10rem 0px;">
			{{-- <div class="hero-blur box" style="background-color: hsla(0, 0%, 100%,.5);"> --}}
			<div style="margin-bottom: 3rem;">
				<div class="montserrat" style=" font-size: 2.5rem; font-weight: 800; color: hsla(0, 0%, 100%,1);">
					Make rules. Break rules.
				</div>
				<div class="montserrat" style=" font-size: 1rem; color: hsla(45, 0%, 90%,1);">
					Resources for Business Owners & Executives with ADHD and AS.
				</div>

			</div>
			<a class="button is-warning" href="#">Get To Work</a>
		</div>
	</div>
	<div class="container is-fluid box" style="margin-top: 1rem;">
		<h1 class="title" style="text-align: center;">Your Toolbox for Building a Better Life</h1>
		<h2 class="subtitle" style="text-align: center;">Options for all leaders and heroes.</h2>
		<hr>
		<div class="columns ">
			<div class="column">
				<div class="card">
					<div class="card-image bg-color-bbd-red text-color-white" style="text-align: center;">
						<i class="material-icons" style="font-size: 5rem; margin: 2rem;">whatshot</i>
					</div>
					<div class="card-content">
						<div class="title is-4">Boot Camp for Life</div>
						<div class="content">Designed for you. Live interactive leadership experience that teaches you how to take the heroes journey, rapidly expanding your ability to get the results you want in your body, spirituality, relationships and your business.</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card-image bg-color-bbd-green text-color-white" style="text-align: center;">
						<i class="material-icons" style="font-size: 5rem; margin: 2rem;">group</i>
					</div>
					<div class="card-content">
						<div class="title is-4">Business Growth</div>
						<div class="content">Designed for companies with an annual revenue of $300K-$1M that need that push to “go over the top.” This one-on-one program brings business leaders into your company to perfect the key elements you need to have explosive growth.</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card-image bg-color-bbd-yellow text-color-white" style="text-align: center;">
						<i class="material-icons" style="font-size: 5rem; margin: 2rem;">flash_on</i>
					</div>
					<div class="card-content">
						<div class="title is-4">Business Kick-Start</div>
						<div class="content"><p>Designed for businesses that need that boost to get moving forward at a rapid pace.</p> <p>Business mentors take you through the steps to get your business started and grow that business quickly.</p></div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card-image bg-color-bbd-blue text-color-white" style="text-align: center;">
						<i class="material-icons" style="font-size: 5rem; margin: 2rem;">call_split</i>
					</div>
					<div class="card-content">
						<div class="title is-4">Business Exit</div>
						<div class="content">You’ve had a good run and need to position your business for sale. Experts in the  marketing of your business for maximum return work with you to transition to your next exciting adventure in life.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container is-fluid box" style="margin-top: 1rem;">
		<h1 class="title" style="text-align: center;">Your Deficit Becomes Your Greatest Strength</h1>
		<hr>
		<div class="columns">
			<div class="column" style="font-size: 1.25rem;">
				<p>
					Recent studies show that more than <strong>SIXTY</strong> percent of all business owners and executives exhibit the symptoms of ADHD or high functioning autism.
				</p>
				<hr>
				<p>
					Our unique programs provide comprehensive training in business or personal mastery, improved creativity, powerful relationships and leveraging your innate gifts or superpowers for individuals managing both AD/HD and ASD.
				</p>
				<br>
				<p>
					This <strong>FREE</strong> book produced by a clinical psychologist provides a unique perspective on how to access your God-given super powers.
				</p>
			</div>
			<div class="column">
				<div class="card">
					<div class="card-image has-background-warning" style="text-align: center;">
						<img src="/imgs/ebook_flat.png" style="max-width: 450px;">
					</div>
					<div class="card-content">
						<form>
							<div class="field has-addons">
								<div class="control">
								    <input class="input is-large" type="email" placeholder="Email">
								</div>
								<div class="control">
									<a class="button is-primary is-large">Get the Book!</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


