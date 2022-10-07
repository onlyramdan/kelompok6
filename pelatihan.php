<?php include "header.php"; ?>
<div class="container px-4 py-5 mt-5 mb-5" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
        <div class="card h-100  rounded-4 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-dark text-shadow-1">
            <img src="./11.png" alt="">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pengelolaan Keuangan UMKM</h3>
            <ul class="list-unstyled mt-auto text-center">
            <?php if (!empty($_SESSION['username']) ) {?>
              <button id="button" type="button" class="btn text-light mt-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90">Daftar</button></a>
              <?php } ?>
            </ul>
          </div>    
        </div>
      </div>
    <div class="col">
        <div class="card h-100  rounded-4 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-dark text-shadow-1">
            <img src="./12.png" alt="">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pengelolaan Modal UMKM</h3>
            <ul class="list-unstyled mt-auto text-center">
            <?php if (!empty($_SESSION['username']) ) {?>
              <button id="button" type="button" class="btn text-light mt-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90">Daftar</button></a>
              <?php } ?>
            </ul>
          </div>    
        </div>
      </div>
    <div class="col">
        <div class="card h-100  rounded-4 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-dark text-shadow-1">
            <img src="./13.png" alt="">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Strategi Marketing UMKM</h3>
            <ul class="list-unstyled mt-auto text-center">
            <?php if (!empty($_SESSION['username']) ) {?>
              <button id="button" type="button" class="btn text-light mt-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90">Daftar</button></a>
              <?php } ?>
            </ul>
          </div>    
        </div>
      </div>
</div>
</div>
<?php include "footer.php"; ?>