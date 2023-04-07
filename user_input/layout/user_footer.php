<footer class="footer py-4  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
                <div class="copyright text-center text-sm text-white text-lg-start">
                    <span class="d-flex align-items-center"> © <script>
                            document.write(new Date().getFullYear())
                        </script>, made with &nbsp;<i class="fas fa-heart"></i></span>
                </div>
            </div>
            <div class="col-12 col-md-6">

            </div>
        </div>
    </div>
</footer>

</main>

<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>