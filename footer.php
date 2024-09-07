<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="https://ayush.britishinstitute.in/">Ayush Kushwaha</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function validateForm()
				{
					let name = $('#name').val();
					let mobile = $('#mobile').val();
					let email = $('#email').val();
					let message = $('#message').val();
				    let flag = true;

					if(name == ''){
						$('#err_name').html('Please Enter Your Name');
						$('#err_name').css('color', '#FF0000');
						flag = false;
					}
					else{
						$('#err_name').html('');
					}
					
					if(mobile==''){
						$('#err_mobile').html('Please Enter Your Mobile No');
						$('#err_mobile').css('color','#FF0000');
						flag = false;
					}
					else{
						$('#err_mobile').html('');
					}
					if(email==''){
						$('#err_email').html('Enter your email');
						$('#err_email').css('color','#FF0000');
						flag = false;

					}
					else{
						$('#err_email').html('');
					}
					if(message==''){
						$('#err_message').html('Enter your message');
						$('#err_message').css('color','#FF0000');
						flag = false;
					}
					else{
						$('#err_message').html('');	
					}

					if(flag == true){
						alert('Form validate successfully');
						flag = true;
					}
					else{
						return false;
					}
				}

				
			</script>

	</body>
</html>