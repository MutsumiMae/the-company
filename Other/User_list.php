<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a href="#" class="navbar-brand"></a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white"><h3>The Company</h3></a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#" class="nav-link text-secondary"><i class="fa-solid fa-user me-3"></i>Name</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-danger"><i class="fa-solid fa-user me-3"></i>Log out</a></li>
            </ul>
        </div>
  </nav>

          <div>
              <main class="container py-5">
                  <h2 class="h3 text-muted">User List</h2>
                    <table class="table table-hover mt-4">
                      <thead class="table-light">
                          <tr>
                              <th>#</th>
                              <th>First Name</th>  
                              <th>Last Name</th>
                              <th>username</th>
                              <th style="width: 95px"></th>   <!-- for the action buttons -->
                          </tr>
                      </thead>
                          <tbody>
                              <th><i class="bi bi-pencil-fill text-warning"></i></th>
                              <th><i class="bi bi-trash3-fill text-danger"></i></th>

                          </tbody>
                    </table>
              </main>    
          </div>
    </div>

  


                  <!--Offline-->
                  <script src="js/bootstrap.bundle.js"></script>
  
                  <!--online-->
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
  
</body>
</html>