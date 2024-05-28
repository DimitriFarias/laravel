 <?php
  use App\Models\Aluno;
//  function edit(string $id)
//  {

//      return view('aluno.edit');
//  }
//  $aluno = Aluno::findOrFail($id);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="../../../style.css" rel="stylesheet">
</head>
<body>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">

                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">edit aluno</h5>
                  </div>


<form class="row g-3  needs-validation"  action="{{route('aluno.update', $aluno->id)}}"  method="POST" >
    @csrf
    @method('put')
      <div class="col-12">
        <label for="yourUsername" class="form-label" >nome</label>
          <div class="input-group has-validation">
           <input type="text" name="nome" class="form-control"placeholder="nome" value="{{$nome}}"  required>
    <!-- <div class="invalid-feedback">Please enter your username.</div> -->
          </div>
      </div>
      <div class="col-12">
  <label for="yourPassword" class="form-label" >email</label>
  <input type="email" name="email" class="form-control"placeholder="email"  value="{{$email}}" required>
 <!-- <div class="invalid-feedback">Please enter your password!</div>-->
</div>
<br>



<div >
 <!-- <a href="aluno.index">  -->
  <button class="btn btn-warning " type="submit" name="acao">update</button>
   <!-- </a>  -->
</div>

</main>
</form>

