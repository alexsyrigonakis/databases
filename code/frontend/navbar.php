<style>
  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; 
 }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Project Analytics</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Overview
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="proj_select.php">Projects</a>
          <a class="dropdown-item" href="prog_overview.php">Programs</a>
		  <a class="dropdown-item" href="org_select.php">Organisations</a>
		  <a class="dropdown-item" href="researcher_overview.php">Researchers</a>
		  <a class="dropdown-item" href="executive_overview.php">Executives</a>
        </ul>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Views
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="view_1.php">Projects per researcher</a>
          <a class="dropdown-item" href="view_2.php">Projects per Organisation</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="fields.php">Fields and <br> activity </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="samenumorgs.php">Orgs with same <br> number of projects</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link " href="top3.php">Top 3 pairs <br> of fields</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="youngs.php">Researchers younger <br> than 40</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="execs.php">Top Executives for <br> each company</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="nodeliver.php">Researchers with count <br> on projects with no deliver</a>
      </li>
    </ul>
  </div>
</nav>