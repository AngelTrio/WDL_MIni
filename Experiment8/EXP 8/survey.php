<?php include('server.php') ?>
<?php include('nav.php') ?>
<?php include('header.php') ?>
<link rel="stylesheet" href="css/style1.css">
<div class="container">
    <header class="header">
      <h1 id="title" class="text-center"> Survey Form</h1>
      <p id="description" class="description text-center">
        This is a short survey on awareness and readiness of covid-19.
        Please spare 5 minutes.
      </p>
    </header>
    <form method='post' action='#' id="survey-form">
      <div class="form-group">
        <?php foreach ($errors as $error): ?>
          <p><?php echo $error; ?></p>
        <?php endforeach ?>
        <label id="name-label" for="name">Name</label>
        <input
          type="text"
          name="name"
          id="name"
          class="form-control"
          placeholder="Enter your name"
          required
        />
      </div>
      <div class="form-group">
        <label id="email-label" for="email">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          class="form-control"
          placeholder="Enter your Email"
          required
        />
      </div>
      <div class="form-group">
        <label id="number-label" for="number"
          >Age<span class="clue">(optional)</span></label
        >
        <input
          type="number"
          name="age"
          id="number"
          min="10"
          max="99"
          class="form-control"
          placeholder="Age"
        />
      </div>
      <div class="form-group">
        <p>Which option best describes your current role?</p>
        <select id="dropdown" name="role" class="form-control" required>
          <option disabled selected value>Select current role</option>
          <option value="student">Student</option>
          <option value="job">Full Time Job</option>
          <option value="learner">Full Time Learner</option>
          <option value="preferNo">Prefer not to say</option>
          <option value="other">Other</option>
        </select>
      </div>
  
      <div class="form-group">
        <p>When did you come to know about the outbreak of corona virus?</p>
        
          <div class="form-group">
            <label id="name-label" for="name1"></label>
            <input
              type="text"
              name="name1"
              id="name"
              class="form-control"
              placeholder="Type your answer"
              required
            />
          </div>
          
  
      <div class="form-group">
        <p>
          What precautions you are taking to keep your family protected?
        </p>
        <div class="form-group">
          <label id="name-label" for="name2"></label>
          <input
            type="text"
            name="name2"
            id="name"
            class="form-control"
            placeholder="Type your answer"
            required
          />
        </div>
        
      </div>
  
      <div class="form-group">
        <p>
          Are no. of covid cases in control in your locality?
         
        </p>
        <div class="form-group">
          <label id="name-label" for="locality"></label>
          <input
            type="text"
            name="locality"
            id="name"
            class="form-control"
            placeholder="Type your answer"
            required
          />
        </div>
       
      <div class="form-group">
        <p>Any comments or suggestions?</p>
        <textarea
          id="comments"
          class="input-textarea"
          name="comment"
          placeholder="Enter your comment here..."
        ></textarea>
      </div>
  
      <div class="form-group">
        <button type="submit" id="submit" name="register" class="submit-button">
          Submit
        </button>
      </div>
    </form>
  </div>