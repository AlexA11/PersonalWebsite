@include('header')
<div class="full height space-above-small ui text container raised segment">
<img class="ui centered small circular image" id="my-profile" src="/images/profile.jpg">
<h2 class="ui center aligned icon header">Alex Ash</h2>
	<div class="ui vertical stripe intro segment">
		<h3>
		Skills
		</h3>
		<div class="ui large labels">
			<div class="ui blue label">
			PHP
			</div>
			<div class="ui blue label">
			HTML
			</div>
			<div class="ui blue label">
			Java Script
			</div>
			<div class="ui blue label">
			SQL
			</div>
			<div class="ui blue label">
			Linux
			</div>
			<div class="ui blue label">
			Mac OSX
			</div>
			<div class="ui blue label">
			Windows	
			</div>
		</div>
	</div>
	<div class="ui vertical stripe intro segment">
		<h3>
		Contact Information
		</h3>
		<div class="ui list">
		  <div class="item">
		    <i class="users icon"></i>
		    <div class="content">
		      Queens University
		    </div>
		  </div>
		  <div class="item">
		    <i class="marker icon"></i>
		    <div class="content">
		      Kingston, ON
		    </div>
		  </div>
		  <div class="item">
		    <i class="mail icon"></i>
		    <div class="content">
		      <a href="mailto:alex.ash112@gmail.com">alex.ash112@gmail.com</a>
		    </div>
		  </div>
		  <div class="item">
		    <i class="linkify icon"></i>
		    <div class="content">
		      <a href="http://www.entrada-project.org/">entrada-project.org</a>
		    </div>
		  </div>
		</div>
	</div>
	<div class="ui vertical stripe intro segment">
	<h3>Drop a line</h3>
		<form class="ui form" method="POST" >
		  <div class="field">
		    <label>Your Name</label>
		    <input type="text" name="name" placeholder="Name" required="required">
		  </div>
		  <div class="field">
		    <label>Your Email</label>
		    <input type="text" name="email" placeholder="Email"  required="required">
		  </div>
		  <div class="field">
		    <label>Subject</label>
		    <input type="text" name="subject" placeholder="Subject" required="required">
		  </div>
		  <div class="field">
			  <label>Message</label>
			    <textarea rows="2" name="message" class="space-below-small" placeholder="Place message here" required="true"></textarea>
		  </div>
	  		<button class="ui button blue" type="submit">Send<i class="right send icon"></i></button>
		</form> 
	</div>
	<div class="ui vertical stripe intro segment">
	<h3>Social Media</h3>
		<button class="ui facebook button">
		  <i class="facebook icon"></i>
		  Facebook
		</button>
		<button class="ui twitter button">
		  <i class="twitter icon"></i>
		  Twitter
		</button>
		<button class="ui google plus button">
		  <i class="google plus icon"></i>
		  Google Plus
		</button>
		<button class="ui linkedin button">
		  <i class="linkedin icon"></i>
		  LinkedIn
		</button>
	</div>
</div>


@include('footer')

