<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    <title>eROI Presents: Make your own Buzzfeed style quiz!</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/demo.css" />
    <script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/custom-radio.js"></script>
  </head>
  <body>

	<section id="quiz-container">
	    <div class="row">
	      <div class="large-12 columns">
	        <h1>Title of your Quiz</h1>
	      </div>
	    </div>
		
        <div class="row">
  		  <div class="medium-10 medium-centered small-12 columns">
				<form method="post" id="quiz" action="inc/quiz.php">
		    
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 1</h5>

				        <div class="row questions">
		     				  <div class="small-12">
				            <label for="Q1A1" class="Q1 A1">
								<input type="radio" class="styled" id="Q1A1" value="Q1A1" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A1") echo "checked";?> required>
								A
							</label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q1A2" class="Q1 A2">
								<input type="radio" class="styled" id="Q1A2" value="Q1A2" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A2") echo "checked";?> required>
								B
				           </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q1A3" class="Q1 A3">
								<input type="radio" class="styled" id="Q1A3" value="Q1A3" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A3") echo "checked";?> required>
								C
							</label>
				          </div>
  
				        <div class="small-12">
				            <label for="Q1A4" class="Q1 A4">
								<input type="radio" class="styled" id="Q1A4" value="Q1A4" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A4") echo "checked";?> required>
							D
				            </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q1A5" class="Q1 A5">
								<input type="radio" class="styled" id="Q1A5" value="Q1A5" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A5") echo "checked";?> required>
								E
				           </label>
				          </div>
  
				        </div>
   
				      </div>     

				</div>
			
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 2</h5>

				        <div class="row questions">
		     				  <div class="small-12">
				            <label for="Q2A1" class="Q2 A1">
								<input type="radio" class="styled" id="Q2A1" value="Q2A1" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A1") echo "checked";?> required>
								E
							</label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q2A2" class="Q2 A2">
								<input type="radio" class="styled" id="Q2A2" value="Q2A2" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A2") echo "checked";?> required>
								B
				           </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q2A3" class="Q2 A3">
								<input type="radio" class="styled" id="Q2A3" value="Q2A3" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A3") echo "checked";?> required>
								C
							</label>
				          </div>
  
				        <div class="small-12">
				            <label for="Q2A4" class="Q2 A4">
								<input type="radio" class="styled" id="Q2A4" value="Q2A4" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A4") echo "checked";?> required>
							D
				            </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q2A5" class="Q2 A5">
								<input type="radio" class="styled" id="Q2A5" value="Q2A5" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A5") echo "checked";?> required>
								A
				           </label>
				          </div>
  
				        </div>
   
				      </div>     

				</div>
				
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 3</h5>

				        <div class="row questions">
		     				  <div class="small-12">
				            <label for="Q3A1" class="Q3 A1">
								<input type="radio" class="styled" id="Q3A1" value="Q3A1" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A1") echo "checked";?> required>
								B
							</label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q3A2" class="Q3 A2">
								<input type="radio" class="styled" id="Q3A2" value="Q3A2" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A2") echo "checked";?> required>
								C
				           </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q3A3" class="Q3 A3">
								<input type="radio" class="styled" id="Q3A3" value="Q3A3" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A3") echo "checked";?> required>
								D
							</label>
				          </div>
  
				        <div class="small-12">
				            <label for="Q3A4" class="Q3 A4">
								<input type="radio" class="styled" id="Q3A4" value="Q3A4" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A4") echo "checked";?> required>
							E
				            </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q3A5" class="Q3 A5">
								<input type="radio" class="styled" id="Q3A5" value="Q3A5" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A5") echo "checked";?> required>
								A
				           </label>
				          </div>
  
				        </div>
   
				      </div>     

				</div>
			
		    	<div class="row">
			      <div class="large-12 columns">
			        <h2>Question 4</h5>

			        <div class="row questions">
	     				<div class="small-12">
			            <label for="Q4A1" class="Q4 A1">
							<input type="radio" class="styled" id="Q4A1" value="Q4A1" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A1") echo "checked";?> required>
							A
						</label>
			          </div>
  
			           <div class="small-12">
			            <label for="Q4A2" class="Q4 A2">
							<input type="radio" class="styled" id="Q4A2" value="Q4A2" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A2") echo "checked";?> required>
							D
			           </label>
			          </div>
  
			           <div class="small-12">
			            <label for="Q4A3" class="Q4 A3">
							<input type="radio" class="styled" id="Q4A3" value="Q4A3" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A3") echo "checked";?> required>
							E
						</label>
			          </div>
  
			        <div class="small-12">
			            <label for="Q4A4" class="Q4 A4">
							<input type="radio" class="styled" id="Q4A4" value="Q4A4" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A4") echo "checked";?> required>
						B
			            </label>
			          </div>
  
			           <div class="small-12">
			            <label for="Q4A5" class="Q4 A5">
							<input type="radio" class="styled" id="Q4A5" value="Q4A5" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A5") echo "checked";?> required>
							C
			           </label>
				          </div>

				        </div>

				      </div>     

				</div>     
	
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 5</h5>

				        <div class="row questions">
	      				  <div class="small-12">
				            <label for="Q5A1" class="Q5 A1">
								<input type="radio" class="styled" id="Q5A1" value="Q5A1" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A1") echo "checked";?> required>
								A
							</label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q5A2" class="Q5 A2">
								<input type="radio" class="styled" id="Q5A2" value="Q5A2" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A2") echo "checked";?> required>
								C
				           </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q5A3" class="Q5 A3">
								<input type="radio" class="styled" id="Q5A3" value="Q5A3" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A3") echo "checked";?> required>
								D
							</label>
				          </div>
	  
				        <div class="small-12">
				            <label for="Q5A4" class="Q5 A4">
								<input type="radio" class="styled" id="Q5A4" value="Q5A4" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A4") echo "checked";?> required>
							B
				            </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q5A5" class="Q5 A5">
								<input type="radio" class="styled" id="Q5A5" value="Q5A5" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A5") echo "checked";?> required>
								E
				           </label>
				          </div>

				        </div>

				      </div>     

				</div>
			
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 6</h5>

				        <div class="row questions">
	      				  <div class="small-12">
				            <label for="Q6A1" class="Q6 A1">
								<input type="radio" class="styled" id="Q6A1" value="Q6A1" name="Q6" <?php if (isset($Q6) && $Q6=="Q6A1") echo "checked";?> required>
								E
							</label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q6A2" class="Q6 A2">
								<input type="radio" class="styled" id="Q6A2" value="Q6A2" name="Q6" <?php if (isset($Q6) && $Q6=="Q6A2") echo "checked";?> required>
								B
				           </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q6A3" class="Q6 A3">
								<input type="radio" class="styled" id="Q6A3" value="Q6A3" name="Q6" <?php if (isset($Q6) && $Q6=="Q6A3") echo "checked";?> required>
								C
							</label>
				          </div>
	  
				        <div class="small-12">
				            <label for="Q6A4" class="Q6 A4">
								<input type="radio" class="styled" id="Q6A4" value="Q6A4" name="Q6" <?php if (isset($Q6) && $Q6=="Q6A4") echo "checked";?> required>
							D
				            </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q6A5" class="Q6 A5">
								<input type="radio" class="styled" id="Q6A5" value="Q6A5" name="Q6" <?php if (isset($Q6) && $Q6=="Q6A5") echo "checked";?> required>
								A
				           </label>
				          </div>

				        </div>

				      </div>     

				</div>
			
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 7</h5>
    				
				        <div class="row questions">
	      				  <div class="small-12">
				            <label for="Q7A1" class="Q7 A1">
								<input type="radio" class="styled" id="Q7A1" value="Q7A1" name="Q7" <?php if (isset($Q7) && $Q7=="Q7A1") echo "checked";?> required>
								B
							</label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q7A2" class="Q7 A2">
								<input type="radio" class="styled" id="Q7A2" value="Q7A2" name="Q7" <?php if (isset($Q7) && $Q7=="Q7A2") echo "checked";?> required>
								C
				           </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q7A3" class="Q7 A3">
								<input type="radio" class="styled" id="Q7A3" value="Q7A3" name="Q7" <?php if (isset($Q7) && $Q7=="Q7A3") echo "checked";?> required>
								D
							</label>
				          </div>
	  
				        <div class="small-12">
				            <label for="Q7A4" class="Q7 A4">
								<input type="radio" class="styled" id="Q7A4" value="Q7A4" name="Q7" <?php if (isset($Q7) && $Q7=="Q7A4") echo "checked";?> required>
							E
				            </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q7A5" class="Q7 A5">
								<input type="radio" class="styled" id="Q7A5" value="Q7A5" name="Q7" <?php if (isset($Q7) && $Q7=="Q7A5") echo "checked";?> required>
								A
				           </label>
				          </div>

				        </div>

				      </div>     

				</div>
			
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 8</h5>
    				
					
				        <div class="row questions">
	      				  <div class="small-12">
				            <label for="Q8A1" class="Q8 A1">
								<input type="radio" class="styled" id="Q8A1" value="Q8A1" name="Q8" <?php if (isset($Q8) && $Q8=="Q8A1") echo "checked";?> required>
								A
							</label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q8A2" class="Q8 A2">
								<input type="radio" class="styled" id="Q8A2" value="Q8A2" name="Q8" <?php if (isset($Q8) && $Q8=="Q8A2") echo "checked";?> required>
								D
				           </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q8A3" class="Q8 A3">
								<input type="radio" class="styled" id="Q8A3" value="Q8A3" name="Q8" <?php if (isset($Q8) && $Q8=="Q8A3") echo "checked";?> required>
								E
							</label>
				          </div>
	  
				        <div class="small-12">
				            <label for="Q8A4" class="Q8 A4">
								<input type="radio" class="styled" id="Q8A4" value="Q8A4" name="Q8" <?php if (isset($Q8) && $Q8=="Q8A4") echo "checked";?> required>
							B
				            </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q8A5" class="Q8 A5">
								<input type="radio" class="styled" id="Q8A5" value="Q8A5" name="Q8" <?php if (isset($Q8) && $Q8=="Q8A5") echo "checked";?> required>
								C
				           </label>
				          </div>
	  
				        </div>
    
				      </div>     

				</div>
			
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 9</h5>
    				
					
				        <div class="row questions">
	      				  <div class="small-12">
				            <label for="Q9A1" class="Q9 A1">
								<input type="radio" class="styled" id="Q9A1" value="Q9A1" name="Q9" <?php if (isset($Q9) && $Q9=="Q9A1") echo "checked";?> required>
								C
							</label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q9A2" class="Q9 A2">
								<input type="radio" class="styled" id="Q9A2" value="Q9A2" name="Q9" <?php if (isset($Q9) && $Q9=="Q9A2") echo "checked";?> required>
								D
				           </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q9A3" class="Q9 A3">
								<input type="radio" class="styled" id="Q9A3" value="Q9A3" name="Q9" <?php if (isset($Q9) && $Q9=="Q9A3") echo "checked";?> required>
								E
							</label>
				          </div>
	  
				        <div class="small-12">
				            <label for="Q9A4" class="Q9 A4">
								<input type="radio" class="styled" id="Q9A4" value="Q9A4" name="Q9" <?php if (isset($Q9) && $Q9=="Q9A4") echo "checked";?> required>
							B
				            </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q9A5" class="Q9 A5">
								<input type="radio" class="styled" id="Q9A5" value="Q9A5" name="Q9" <?php if (isset($Q9) && $Q9=="Q9A5") echo "checked";?> required>
								A
				           </label>
				          </div>
	  
				        </div>
    
				      </div>     

				</div>
			
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 10</h5>
    				
					
				        <div class="row questions">
	      				  <div class="small-12">
				            <label for="Q10A1" class="Q10 A1">
								<input type="radio" class="styled" id="Q10A1" value="Q10A1" name="Q10" <?php if (isset($Q10) && $Q10=="Q10A1") echo "checked";?> required>
								A
							</label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q10A2" class="Q10 A2">
								<input type="radio" class="styled" id="Q10A2" value="Q10A2" name="Q10" <?php if (isset($Q10) && $Q10=="Q10A2") echo "checked";?> required>
								C
				           </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q10A3" class="Q10 A3">
								<input type="radio" class="styled" id="Q10A3" value="Q10A3" name="Q10" <?php if (isset($Q10) && $Q10=="Q10A3") echo "checked";?> required>
								D
							</label>
				          </div>
	  
				        <div class="small-12">
				            <label for="Q10A4" class="Q10 A4">
								<input type="radio" class="styled" id="Q10A4" value="Q10A4" name="Q10" <?php if (isset($Q10) && $Q10=="Q10A4") echo "checked";?> required>
							B
				            </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q10A5" class="Q10 A5">
								<input type="radio" class="styled" id="Q10A5" value="Q10A5" name="Q10" <?php if (isset($Q10) && $Q10=="Q10A5") echo "checked";?> required>
								E
				           </label>
				          </div>
	  
				        </div>
    
				      </div>     

				</div>
			
				<div class="row">
				    <div class="large-12 columns centered-text">	
				        <input type="submit" class="button submit" value="SEE YOUR RESULT &#x25b6;">
					</div>
				</div>
			
				</form>
			</div>
		</div>
	</section>
	
	<section id="result-container">
		<div id="result"></div>
		<div id="error" class="hide">Oops! Please make sure you selected answers for all the questions!</div>
	</section>
    
	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/demo.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.abide.js"></script>	
	<script>
	  $(document).foundation();
	</script>
  </body>
</html>
