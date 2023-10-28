
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="index.css?0" />
    <title>Adjis Ramadhani Utomo</title>
  </head>
  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
      const tooltipTriggerList = document.querySelectorAll(
        '[data-bs-toggle="tooltip"]'
      );
      const tooltipList = [...tooltipTriggerList].map(
        (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
      );

      document.getElementById('anu').addEventListener("click", function (e) {
        document.getElementsByClassName('alert')[0].classList.remove("visually-hidden");

        setTimeout(() => {
          document.getElementsByClassName('alert')[0].classList.add("visually-hidden");
        }, 2000);
      });
    });
  </script>
  <body>
    <div class="row hfull">
      <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 bg-one">
        <div class="row hfull align-items-center justify-content-between">
          <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 leftside">
            <div class="fontbold greeting" style="color:white">Hi, I am</div>
            <div class="fontbold name" style="color:white">Adjis Ramadhani Utomo</div>
            <div class="fontbold job" style="color:white">Web Developer</div>
            <p class="fontreg desc" style="color:white">
              A who specializes in JavaScript Technologies accross the whole stack (Vanilla JavaScript, Ext JS, Node.js) and PHP Technologies (CodeIgniter , Laravel). Experience building complete web applications with backend API Systems.
              <br />
              <br />
              I can't wait to gain more experiences and help people to achieve the best practice for their bussiness with technology.
            </p>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 buttonside">
            <div class="row">
              <div class="col">
                <a
                  class="reset-style"
                  href="https://www.linkedin.com/in/adjis-ramadhani-utomo/"
                  target="_blank"
                >
                  <button
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    data-bs-title="Linkedin"
                    type="button"
                    class="btn btn-outline-dark btn-lg"
                  >
                    <i class="fa-brands fa-linkedin" style="color:white"></i>
                  </button>
                </a>
              </div>

              <div class="col">
                <a
                  class="reset-style"
                  href="./portofolio_adjis_ramadhani_utomo.pdf"
                  target="_blank"
                >
                  <button
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    data-bs-title="Portfolio"
                    type="button"
                    class="btn btn-outline-dark btn-lg"
                  >
                    <i class="fa-solid fa-briefcase" style="color:white"></i>
                  </button>
                </a>
              </div>
              <div class="col">
                <a
                  class="reset-style"
                  href="./CV_ADJIS_RAMADHANI_UTOMO.pdf"
                  target="_blank"
                >
                  <button
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    data-bs-title="Curriculum Vitae"
                    type="button"
                    class="btn btn-outline-dark btn-lg"
                  >
                    <i class="fa-solid fa-file" style="color:white"></i>
                  </button>
                </a>
              </div>
              <div class="col">
                <button
                  data-bs-toggle="tooltip"
                  data-bs-placement="left"
                  data-bs-title="Email"
                  type="button"
                  class="btn btn-outline-dark btn-lg"
                  id="anu"
                >
                  <i class="fa-solid fa-envelope" style="color:white"></i>
                </button>
              </div>
              <div class="col">
                <a
                  class="reset-style"
                  href="http://wa.me/6283135031400"
                  target="_blank"
                >
                  <button
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    data-bs-title="Phone"
                    type="button"
                    class="btn btn-outline-dark btn-lg"
                  >
                    <i class="fa-solid fa-phone" style="color:white"></i>
                  </button>
                </a>
              </div>
            </div>
          </div>

          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
          </svg>

          <div class="alert alert-primary d-flex align-items-center visually-hidden" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div>
              My Email : adjisramadhani08@gmail.com
            </div>
          </div>


        </div>
      </div>
      <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 bg-two"></div>
    </div>
  </body>
</html>
