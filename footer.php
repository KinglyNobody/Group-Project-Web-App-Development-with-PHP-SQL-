        </div>
		</br>
		</br>
		<div class="row" id="footer" style="text-align: center;">
                <div class="col-md-4">
                    <?php echo date("d.m.Y") . "<br>"; ?>
                </div>
                <div class="col-md-4">
					<?php
						if ($_SERVER['REQUEST_METHOD'] == "POST") {
							$name = $_POST["name"];
							$studentid =  $_POST["studentid"];
							
							$sqlselect = "SELECT end_time FROM ptest WHERE studentid='".$studentid."' ";

							if ($conn->query($sqlselect)) {
									$table = $conn -> query($sqlselect);
									$row = $table -> fetch_array(MYSQLI_ASSOC);
									$time = $row["end_time"];
					?>
		
						<script>
						// Set the date we're counting down to
						var countDownDate = <?php echo strtotime($time) ?> * 1000;
						var now = <?php echo time() ?> * 1000;

						// Update the count down every 1 second
						var x = setInterval(function() {
							
							now = now + 1000
							
							// Find the distance between now and the count down date
							var distance = countDownDate - now;
								
							// Time calculations for days, hours, minutes and seconds
							var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							var seconds = Math.floor((distance % (1000 * 60)) / 1000);
								
							// Output the result in an element with id="timer"
							document.getElementById("timer").innerHTML = minutes + "m " + seconds + "s ";
								
							// If the count down is over, write some text 
							if (distance < 0) {
								clearInterval(x);
							document.getElementById("tuner").innerHTML = "EXPIRED";
							}
						}, 1000);
						</script>




					<?php
									echo '<p id="timer"> <p>';
								} else {
									echo "Error: " . $sqlselect . "<br>" . $conn->error;
								
								};
						}
						
						$conn->close();
					?>
					
					
                </div>
                <div class="col-md-4">
                    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
							$name = $_POST["name"];
							$studentid =  $_POST["studentid"];
							echo $studentid ." - ". $name;
							}
					?>
                </div>
            </div>
    </body>
</html>